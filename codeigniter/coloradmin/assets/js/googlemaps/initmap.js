var mapDefault;  // Declarar mapDefault a nivel global
var addingDataloggerMarker = false;  // Controla si se pueden agregar marcadores
var dataloggerMarkers = [];  // Array para almacenar los marcadores de Dataloggers
var ctrlPressed = false;  // Controla si la tecla "Ctrl" está presionada
var altPressed = false;  // Controla si la tecla "Alt" está presionada
var infoWindow;  // Declarar infoWindow a nivel global

// var addingMedidorMarker = false;
// var medidorMarkers = [];
// var jsonResponse;
// var globalIdDatalogger;


// Detectar cuándo se presiona la tecla "Ctrl" o "Alt"
document.addEventListener('keydown', function(event) {
    if (event.key === 'Control' || event.key === 'Ctrl') {
        ctrlPressed = true;
    }
    if (event.key === 'Alt' || event.key === 'AltGraph') {
        altPressed = true;
    }
    if (event.key === 'Escape' || event.key === 'Esc') {
        // Desactivar la adición múltiple de marcadores
        addingDataloggerMarker = false;
        // Restaurar el cursor del mapa a su forma predeterminada
        if (mapDefault) {
            mapDefault.setOptions({ draggableCursor: 'default' });
        }
    }
});

// Detectar cuándo se suelta la tecla "Ctrl" o "Alt"
document.addEventListener('keyup', function(event) {
    if (event.key === 'Control' || event.key === 'Ctrl') {
        ctrlPressed = false;
    }
    if (event.key === 'Alt' || event.key === 'AltGraph') {
        altPressed = false;
    }
});

function initMap() 
{
    mapDefault = new google.maps.Map(document.getElementById('google-map-default'), {
        zoom: 17,
        center: new google.maps.LatLng(-17.4105450836976, -66.12594068258299),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        minZoom: 16,
        restriction: {
            latLngBounds: {
                north: -17.404592,
                south: -17.41772613612582,
                east: -66.12145818889127,
                west: -66.12823287518866
            },
            strictBounds: false
        },
        gestureHandling: "greedy"
    });

    // Crear un infoWindow
    infoWindow = new google.maps.InfoWindow();

    // Polígono de área
    var areaCoords = [
        { lat: -17.408245180718332, lng: -66.12707638331297 },
        { lat: -17.40684055845479, lng: -66.12465000539221 },
        { lat: -17.409884426845334, lng: -66.12394582690727 },
        { lat: -17.41110434666331, lng: -66.12399193373078 },
        { lat: -17.41537732580422, lng: -66.12540074076435 },
        { lat: -17.415421965664258, lng: -66.12607972919076 }
    ];

    new google.maps.Polygon({
        paths: areaCoords,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#B0E0E6',
        fillOpacity: 0.1,
        clickable: false,
        map: mapDefault
    });

    // Marcadores desde la base de datos
    var dataloggerCoordinates = window.coordenadas;  // Debes pasar las coordenadas desde el HTML como una variable global
    dataloggerCoordinates.forEach(function(datalogger) {
        var dataloggerMarker = createDataloggerMarker({
            lat: parseFloat(datalogger.latitud),
            lng: parseFloat(datalogger.longitud)
        }, mapDefault, datalogger.idDatalogger);
        dataloggerMarkers.push(dataloggerMarker);
    });
    // Evento para agregar marcadores de datalogger
    document.getElementById('addDataloggerBtn').addEventListener('click', function () {
        addingDataloggerMarker = true;
        mapDefault.setOptions({ draggableCursor: 'crosshair' });
    });
    // Evento de clic para agregar un nuevo marcador de datalogger
    mapDefault.addListener('click', function (event) 
    {
        if (addingDataloggerMarker) {
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();

            var newDataloggerMarker = createDataloggerMarker({ lat: lat, lng: lng }, mapDefault);
            dataloggerMarkers.push(newDataloggerMarker);

            // Guardar el marcador en la base de datos
            saveDataloggerMarker(lat, lng, newDataloggerMarker);

            if (!ctrlPressed) {
                mapDefault.setOptions({ draggableCursor: null });
                addingDataloggerMarker = false;
            }
        }
    });

}

function createDataloggerMarker(position, map, idDatalogger) 
{
    var dataloggerMarker = new google.maps.Marker({
        position: position,
        map: map,
        draggable: true
    });

    if (idDatalogger) {
        dataloggerMarker.idDatalogger = idDatalogger;
    }

    infoWindow = new google.maps.InfoWindow({
        disableAutoPan: true
    });
    google.maps.event.addListener(dataloggerMarker, 'mouseover', function () {
        var contentString = '<div>' +
            '<p style="color: black;">DL: ' + dataloggerMarker.idDatalogger + '</p>' +
            '</div>';
    
        infoWindow.setContent(contentString);
        infoWindow.open(map, dataloggerMarker);
    
        // Esperar un breve momento para que el InfoWindow se haya renderizado
        setTimeout(function() {
            var iwOuter = document.querySelector('.gm-style-iw');
            if (iwOuter) {
                var closeButton = iwOuter.querySelector('.gm-style-iw-c');
                if (closeButton) {
                    closeButton.style.display = 'none'; // Oculta el botón de cerrar
                }
            }
        }, 100);
    });

    // Añadir el evento de mouseout para cerrar el infoWindow
    google.maps.event.addListener(dataloggerMarker, 'mouseout', function () {
        infoWindow.close();
    });

    // Añadir el evento de clic derecho para eliminar
    google.maps.event.addListener(dataloggerMarker, 'rightclick', function () {
        deleteDataloggerMarker(dataloggerMarker);
    });

    // Actualizar la posición al terminar el arrastre
    google.maps.event.addListener(dataloggerMarker, 'dragend', function () {
        if (altPressed) {
            updateDataloggerMarkerPosition(dataloggerMarker);
        }
    });

    return dataloggerMarker;
}

function saveDataloggerMarker(lat, lng, dataloggerMarker) 
{
    console.log("Latitud:", lat);
    console.log("Longitud:", lng);
    console.log("ID Autor:", window.idUsuario);
    $.ajax({
        url: '/tercerAnio/aquaReadPro/codeigniter/index.php/geodatalogger/agregardatalogger',
        method: 'POST',
        data: {
            latitud: lat,
            longitud: lng,
            idAutor: window.idUsuario  // Debes pasar el idUsuario desde el HTML como una variable global
        },
        success: function (response) {
            console.log(response);  // Verificar la respuesta
            jsonResponse = JSON.parse(response);
            if (jsonResponse.status === 'success') {
                dataloggerMarker.idDatalogger = jsonResponse.idDatalogger;
                globalIdDatalogger = jsonResponse.idDatalogger;
            } else {
                alert("Error al agregar el datalogger: " + jsonResponse.message);
            }
        },
        error: function () {
            alert("Error al agregar el datalogger.");
        }
    });
    console.log("idDatalogger:", jsonResponse.idDatalogger);
}

function deleteDataloggerMarker(dataloggerMarker) 
{
    var idDatalogger = dataloggerMarker.idDatalogger;
    var estado = 0;

    document.body.style.cursor = 'progress';

    $.ajax({
        url: '/tercerAnio/aquaReadPro/codeigniter/index.php/geodatalogger/eliminardatalogger',
        method: 'POST',
        data: {
            idDatalogger: idDatalogger,
            estado: estado
        },
        success: function (response) {
            try {
                console.log(response);  // Verificar la respuesta
                var jsonResponse = JSON.parse(response);

                if (jsonResponse.status === 'success') {
                    dataloggerMarker.setMap(null);
                    dataloggerMarkers = dataloggerMarkers.filter(m => m !== dataloggerMarker);

                    document.body.style.cursor = 'default';
                } else {
                    document.body.style.cursor = 'default';
                    console.error("Error al eliminar el datalogger: " + jsonResponse.message);
                }
            } catch (e) {
                console.error("Error procesando la respuesta: ", e);
                document.body.style.cursor = 'default';
            }
        },
        error: function () {
            console.error("Error al eliminar el datalogger.");
            document.body.style.cursor = 'default';
        }
    });
}

function updateDataloggerMarkerPosition(dataloggerMarker) 
{
    var newLat = dataloggerMarker.getPosition().lat();
    var newLng = dataloggerMarker.getPosition().lng();
    var idDatalogger = dataloggerMarker.idDatalogger;

    $.ajax({
        url: '/tercerAnio/aquaReadPro/codeigniter/index.php/geodatalogger/modificardatalogger',
        method: 'POST',
        data: {
            idDatalogger: idDatalogger,
            latitud: newLat,
            longitud: newLng
        },
        success: function (response) {
            try {
                console.log(response);  // Verificar la respuesta
                var jsonResponse = JSON.parse(response);
                if (jsonResponse.status === 'success') {
                    console.log("Coordenadas actualizadas correctamente.");
                } else {
                    console.error("Error al actualizar las coordenadas: " + jsonResponse.message);
                }
            } catch (e) {
                console.error("Error procesando la respuesta: ", e);
            }
        },
        error: function () {
            console.error("Error al actualizar las coordenadas.");
        }
    });
}
