/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/

var handleDataTableCombinationSetting1 = function() {
	"use strict";
    
	if ($('#datatable1').length !== 0) {
		var options = {
			dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
			buttons: [
				{ extend: 'copy', className: 'btn-sm' },
				{ extend: 'csv', className: 'btn-sm' },
				{ extend: 'excel', className: 'btn-sm' },
				{ extend: 'pdf', className: 'btn-sm' },
				{ extend: 'print', className: 'btn-sm' }
			],
			responsive: true,
			colReorder: true,
			autoWidth: false, // <--- Añadir esta línea
            scrollX: false,
			keys: true,
			rowReorder: true,
			select: true
		};

		if ($(window).width() <= 1500) {
			options.rowReorder = false;
			options.colReorder = false;
		}
		//('#datatable').DataTable(options);
		window.tablaPagados = $('#datatable1').DataTable(options);
		console.log('DataTable Pendientes:', window.tablaPagados);


		
	}
};

var TableManageCombine1 = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleDataTableCombinationSetting1();
		}
	};
}();

$(document).ready(function() {
	TableManageCombine1.init();
});
