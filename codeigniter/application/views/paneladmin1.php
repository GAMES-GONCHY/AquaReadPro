<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Aqua Read Pro</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Reportes</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bienvenido <?php echo $this->session->userdata('rol'); ?></h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-2">Nuevos Socios</h4>

                        <div class="mt-1">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                    data-bgColor="#F9B9B9" value="58"
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                    data-thickness=".15"/>
                            </div>
                            <div class="text-right">
                                <h2 class="mt-3 pt-1 mb-1"> 268 </h2>
                                <p class="text-muted mb-0">Desde la semana pasada</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end col -->

                

                <div class="col-xl-4 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-3">Consumo Total</h4>

                        <div class="mt-1">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                    data-bgColor="#c8ece5" value="77"
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                    data-thickness=".15"/>
                            </div>
                            <div class="text-right">
                                <h2 class="mt-3 pt-1 mb-1"> 925 [m3]</h2>
                                <p class="text-muted mb-0">Esta semana</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-3">Consumo promedio</h4>

                        <div class="mt-1">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#ffbd4a"
                                    data-bgColor="#FFE6BA" value="35"
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                    data-thickness=".15"/>
                            </div>
                            <div class="text-right">
                                <h2 class="mt-3 pt-1 mb-1"> 78.58 [m3]</h2>
                                <p class="text-muted mb-0">Esta semana</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <!-- Portlet card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widgets">
                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h4 class="header-title mb-0">Ingresos totales</h4>

                            <div id="cardCollpase1" class="collapse pt-3 show" dir="ltr">
                                <div id="apex-sales-analytics" class="apex-charts"></div>
                                <div class="text-center">
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                            <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                            <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                            <h4><i class="fe-arrow-down text-danger mr-1"></i>$9.8k</h4>
                                        </div>
                                    </div> <!-- end row -->
                                    
                                </div>
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-widgets">
                                <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h4 class="header-title mb-0">Egresos totales</h4>

                            <div id="cardCollpase2" class="collapse pt-3 show" dir="ltr">
                                <div id="apex-order-analytics" class="apex-charts"></div>
                                <div class="text-center">
                                    <div class="row mt-3">
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                            <h4><i class="fe-arrow-up text-success mr-1"></i>641</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                            <h4><i class="fe-arrow-down text-danger mr-1"></i>234</h4>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                            <h4><i class="fe-arrow-up text-success mr-1"></i>3201</h4>
                                        </div>
                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title">Ganancias</h4>
                        <p class="text-muted">1 Mar - 31 Mar Showing Data</p>
                        <h2 class="mb-4"><i class="mdi mdi-currency-usd text-primary"></i>25,632.78</h2>

                        <div class="row mb-4">
                            <div class="col-6">
                                <p class="text-muted mb-1">This Month</p>
                                <h3 class="mt-0 font-20">$120,254 <small class="badge badge-light-success font-13">+15%</small></h3>
                            </div>

                            <div class="col-6">
                                <p class="text-muted mb-1">Last Month</p>
                                <h3 class="mt-0 font-20">$98,741 <small class="badge badge-light-danger font-13">-5%</small></h3>
                            </div>
                        </div>

                        <h5 class="font-16"><i class="mdi mdi-chart-donut text-primary"></i> Weekly Earning Report</h5>

                        <div class="mt-5">
                            <span data-plugin="peity-bar" data-colors="#f7b84b,#ebeff2" data-width="100%" data-height="80">5,3,9,6,5,9,7,3,5,2,9,7,2,1,3,5,2,9,7,2,5,3,9,6,5,9,7</span>
                        </div>

                    </div> <!-- end card-box -->
                </div> <!-- end col -->

                <div class="col-xl-8">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Historial de pagos</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-borderless table-hover mb-0" id="datatable">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Card</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Amount</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Imelda J. Stanberry</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/visa.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 3256</span>
                                    </td>
                                    <td>27.03.2018</td>
                                    <td>$345.98</td>
                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Francisca S. Lobb</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/master.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 8451</span>
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$1,250</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-4.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">James A. Wert</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/amazon.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 2258</span>
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$145</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Dolores J. Pooley</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/american-express.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 6950</span>
                                    </td>
                                    <td>29.03.2018</td>
                                    <td>$2,005.89</td>
                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Karen I. McCluskey</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/discover.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 0021</span>
                                    </td>
                                    <td>31.03.2018</td>
                                    <td>$24.95</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-6.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Kenneth J. Melendez</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/visa.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 2840</span>
                                    </td>
                                    <td>27.03.2018</td>
                                    <td>$345.98</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-7.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Sandra M. Nicholas</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/master.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 2015</span>
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$1,250</td>
                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-8.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Ronald S. Taylor</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/amazon.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 0325</span>
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$145</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-9.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Beatrice L. Iacovelli</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/discover.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 9058</span>
                                    </td>
                                    <td>29.03.2018</td>
                                    <td>$6,542.32</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/users/user-10.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                                        <span class="ml-2">Sylvia H. Parker</span>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>xeria/light/dist/assets/images/cards/discover.png" alt="user-card" height="24" />
                                        <span class="ml-2">**** 2577</span>
                                    </td>
                                    <td>31.03.2018</td>
                                    <td>$24.95</td>
                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->

                    </div> <!-- end card-box-->
                </div> <!-- end col-->

            </div>
            <!-- end row -->    
            
        </div> <!-- container -->
    </div>
