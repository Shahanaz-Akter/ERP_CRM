<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" style="overflow:hidden;" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Analytics</title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/custom.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">



    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome.css') }}" />
    <!-- <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icons.css') }}" /> -->

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-semi-dark.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
 

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css')}}" />


    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js') }}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>


<script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->
<!-- beautify ignore:end -->
<!-- 
<style>
    html {
        /* scrollbar-width: thin;
        scrollbar-color: red green; */
    }

    .outer-wrapper {
        margin: 10px;
        margin-left: 20px;
        margin-right: 20px;
        border: 1px solid black;
        border-radius: 4px;
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.9);
        max-width: fit-content;
        max-height: fit-content;
        overflow: visible;
    }

    .table-wrapper {
        overflow: hidden;
        height: fit-content;
        max-height: 66.4vh;
        margin-top: 22px;
        margin: 15px;
        padding-bottom: 20px;
    }

    .table-wrapper:hover {
        /* overflow-y: scroll; */
        overflow-x: scroll;
    }


    .modalTable {
        min-width: max-content;
        border-collapse: separate;
        border-spacing: 0px;


    }

    .modalTable th {
        top: 0px;
        text-align: center;
        font-weight: normal;
        font-size: 18px;
        border-bottom: 1px solid rgb(177, 177, 177);
    }

    .modalTable th,
    .modalTable td {
        padding: 15px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin: 0;
    }

    .modalTable td {
        text-align: left;
        font-size: 15px;
        border-bottom: 1px solid rgb(177, 177, 177);
        padding-left: 20px;
    }




    tr>th:first-child,
    tr>td:first-child {
        position: sticky;
        left: 0;
    }

    tr:nth-child(odd) {
        background: white;
    }

    tr:nth-child(even) {
        background: white;
    }


    tr:nth-child(odd) td,
    th {
        background: white;
    }

    tr:nth-child(even) td {
        background: white;

    }

    #tblName {
        z-index: 100;
    }

    tr>th:first-child,
    tr>td:first-child,
    #tblName {
        position: sticky;
        left: 0;
    }

    tr:nth-child(odd) td {
        background: white;
    }

    tr:nth-child(even) td {
        background: white;

    }

    #AddCamTbl_length,
    #AddCamTbl_info {
        display: none;
    }

    #AddCamTbl_filter,
    #AddCamTbl_paginate {
        display: none;
    }

    #optionBox {
        width: 250px;
        box-shadow: 1px 1px 15px black;
        background-color: white;
        position: absolute;
        top: 120px;
        left: 50px;
        z-index: 100;
    }

    #allOptions {
        height: 450px;
        overflow: scroll;
    }

    .barIcon {
        display: none;
    }

    .checkboxs:hover+.barIcon {
        display: block;
    }
</style> -->

</head>

<body>

    @include('components.navbar')
    <!-- Layout wrapper start-->
    <div class="d-flex">
        @include('Analytics.analytics_sidebar')
        <!-- Layout container start-->
        <div class="" style="height:100vh; width:100%;overflow:scroll;">
            <div class="p-3" style="">
                <div class="header w-50 mt-2 mb-4" style="font-size: 20px;">
                    <div class="col-md-6" style="font-weight: 500;">
                        Sales Trend
                    </div>
                </div>
                <!-- org overview part start -->
                <div class="row">


                    <!-- Website Analytics-->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Website Analytics</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="analyticsOptions1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions1">
                                        <a class="dropdown-item" href="javascript:void(0);">Clone</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add to Home</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Embed to URL</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add as Favorites</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-2">
                                <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                                    <div class="user-analytics text-center me-2">
                                        <i class="bx bx-user me-1"></i>
                                        <span>Users</span>
                                        <div class="d-flex align-items-center mt-2">
                                            <div class="chart-report" data-color="success" data-series="35"></div>
                                            <h3 class="mb-0">61K</h3>
                                        </div>
                                    </div>
                                    <div class="sessions-analytics text-center me-2">
                                        <i class="bx bx-pie-chart-alt me-1"></i>
                                        <span>Sessions</span>
                                        <div class="d-flex align-items-center mt-2">
                                            <div class="chart-report" data-color="warning" data-series="76"></div>
                                            <h3 class="mb-0">92K</h3>
                                        </div>
                                    </div>
                                    <div class="bounce-rate-analytics text-center">
                                        <i class="bx bx-trending-up me-1"></i>
                                        <span>Bounce Rate</span>
                                        <div class="d-flex align-items-center mt-2">
                                            <div class="chart-report" data-color="danger" data-series="65"></div>
                                            <h3 class="mb-0">72.6%</h3>
                                        </div>
                                    </div>
                                </div>
                                <div id="analyticsBarChart"></div>
                            </div>
                        </div>

                    </div>



                    <!-- Referral, conversion, impression & income charts -->
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <!-- Referral Chart-->
                            <div class="col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h2 class="mb-1">$32,690</h2>
                                        <span class="text-muted">Referral 40%</span>
                                        <div id="referralLineChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Conversion Chart-->
                            <div class="col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between pb-3">
                                        <div class="conversion-title">
                                            <h5 class="card-title mb-1">Conversion</h5>
                                            <p class="mb-0 text-muted">60%
                                                <i class="bx bx-chevron-up text-success"></i>
                                            </p>
                                        </div>
                                        <h2 class="mb-0">89k</h2>
                                    </div>
                                    <div class="card-body">
                                        <div id="conversionBarchart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Impression Radial Chart-->
                            <div class="col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div id="impressionDonutChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Growth Chart-->
                            <div class="col-sm-6 col-12">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">$38,566</h5>
                                                            <small class="text-muted">Conversion</small>
                                                        </div>
                                                    </div>
                                                    <div id="conversationChart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-dollar fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">$53,659</h5>
                                                            <small class="text-muted">Income</small>
                                                        </div>
                                                    </div>
                                                    <div id="incomeChart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Referral, conversion, impression & income charts -->

                    <!-- Activity -->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Activity</h5>
                            </div>
                            <div class="card-body">
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-4 pb-2">
                                        <div class="avatar avatar-sm flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube'></i></span>
                                        </div>
                                        <div class="d-flex flex-column w-100">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>Total Sales</span>
                                                <span class="text-muted">$2,459</span>
                                            </div>
                                            <div class="progress" style="height:6px;">
                                                <div class="progress-bar bg-primary" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-2">
                                        <div class="avatar avatar-sm flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
                                        </div>
                                        <div class="d-flex flex-column w-100">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>Income</span>
                                                <span class="text-muted">$8,478</span>
                                            </div>
                                            <div class="progress" style="height:6px;">
                                                <div class="progress-bar bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4 pb-2">
                                        <div class="avatar avatar-sm flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-trending-up'></i></span>
                                        </div>
                                        <div class="d-flex flex-column w-100">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>Budget</span>
                                                <span class="text-muted">$12,490</span>
                                            </div>
                                            <div class="progress" style="height:6px;">
                                                <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-2">
                                        <div class="avatar avatar-sm flex-shrink-0 me-3">
                                            <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-check'></i></span>
                                        </div>
                                        <div class="d-flex flex-column w-100">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span>Tasks</span>
                                                <span class="text-muted">$184</span>
                                            </div>
                                            <div class="progress" style="height:6px;">
                                                <div class="progress-bar bg-danger" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Activity -->

                    <!-- Profit Report & Registration -->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Profit Report</h5>
                                    </div>
                                    <div class="card-body d-flex align-items-end justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center gap-3 w-100">
                                            <div class="d-flex align-content-center">
                                                <div class="chart-report" data-color="danger" data-series="25"></div>
                                                <div class="chart-info">
                                                    <h5 class="mb-0">$12k</h5>
                                                    <small class="text-muted">2020</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-content-center">
                                                <div class="chart-report" data-color="info" data-series="50"></div>
                                                <div class="chart-info">
                                                    <h5 class="mb-0">$64k</h5>
                                                    <small class="text-muted">2021</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 mb-4">
                                <div class="card">
                                    <div class="card-header pb-2">
                                        <h5 class="card-title mb-0">Registration</h5>
                                    </div>
                                    <div class="card-body pb-2">
                                        <div class="d-flex justify-content-between align-items-end gap-3">
                                            <div class="mb-3">
                                                <div class="d-flex align-content-center">
                                                    <h5 class="mb-1">58.4k</h5>
                                                    <i class="bx bx-chevron-up text-success"></i>
                                                </div>
                                                <small class="text-success">12.8%</small>
                                            </div>
                                            <div id="registrationsBarChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Profit Report & Registration -->

                    <!-- Sales -->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-start justify-content-between">
                                <div class="card-title mb-0">
                                    <h5 class="m-0 me-2">Sales</h5>
                                    <small class="card-subtitle text-muted">Calculated in last 7 days</small>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="salesReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions1">
                                        <a class="dropdown-item" href="javascript:void(0);">Clone</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add to Home</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Embed to URL</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add as Favorites</a>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <div id="salesChart"></div>
                                <ul class="p-0 m-0">
                                    <li class="d-flex mb-3">
                                        <span class="text-primary me-2"><i class='bx bx-up-arrow-alt bx-sm'></i></span>
                                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0 lh-1">Best Selling</h6>
                                                <small class="text-muted">Saturday</small>
                                            </div>
                                            <div class="item-progress">28.6k</div>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <span class="text-secondary me-2"><i class='bx bx-down-arrow-alt bx-sm'></i></span>
                                        <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                            <div class="me-2">
                                                <h6 class="mb-0 lh-1">Lowest Selling</h6>
                                                <small class="text-muted">Thursday</small>
                                            </div>
                                            <div class="item-progress">7.9k</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Sales -->

                    <!-- Growth Chart-->
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="dropdown mb-4">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        2020
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions1">
                                        <a class="dropdown-item" href="javascript:void(0);">Clone</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add to Home</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Embed to URL</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add as Favorites</a>
                                    </div>
                                </div>
                                <div id="growthRadialChart"></div>
                                <h6 class="mb-0 mt-5"> 62% Growth in 2022</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Growth Chart-->

                    <!-- Finance Summary -->
                    <div class="col-md-7 col-lg-7 mb-4 mb-md-0">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center me-3">
                                    <img src="../../assets/img/avatars/4.png" alt="Avatar" class="rounded-circle me-3" width="54">
                                    <div class="card-title mb-0">
                                        <h5 class="mb-0">Financial Report for Kiara Cruiser</h5>
                                        <small class="text-muted">Awesome App for Project Management</small>
                                    </div>
                                </div>
                                <div class="dropdown btn-pinned">
                                    <button class="btn p-0" type="button" id="financoalReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions1">
                                        <a class="dropdown-item" href="javascript:void(0);">Clone</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add to Home</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Embed to URL</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add as Favorites</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap gap-4 mb-5 mt-4">
                                    <div class="d-flex flex-column me-2">
                                        <h6>Start Date</h6>
                                        <span class="badge bg-label-success">02 APR 22</span>
                                    </div>
                                    <div class="d-flex flex-column me-2">
                                        <h6>End Date</h6>
                                        <span class="badge bg-label-danger">06 MAY 22</span>
                                    </div>
                                    <div class="d-flex flex-column me-2">
                                        <h6>Members</h6>
                                        <ul class="list-unstyled me-2 d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-xs pull-up">
                                                <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-xs pull-up">
                                                <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-xs pull-up">
                                                <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Ellen Wagner" class="avatar avatar-xs pull-up">
                                                <img class="rounded-circle" src="../../assets/img/avatars/14.png" alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Darcey Nooner" class="avatar avatar-xs pull-up">
                                                <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex flex-column me-2">
                                        <h6>Budget</h6>
                                        <span>$249k</span>
                                    </div>
                                    <div class="d-flex flex-column me-2">
                                        <h6>Expenses</h6>
                                        <span>$82k</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-grow-1">
                                    <span class="text-nowrap d-block mb-1">Kiara Cruiser Progress</span>
                                    <div class="progress w-100 mb-3" style="height: 8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <span>I distinguish three main text objectives. First, your objective could be merely to inform people. A second be to persuade people.</span>
                            </div>
                            <div class="card-footer border-top">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><i class="bx bx-check"></i> 74 Tasks</li>
                                    <li class="list-inline-item"><i class="bx bx-chat"></i> 678 Comments</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Finance Summary -->

                    <!-- Activity Timeline -->
                    <div class="col-md-5 col-lg-5 mb-0">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title m-0 me-2">Activity Timeline</h5>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions1">
                                        <a class="dropdown-item" href="javascript:void(0);">Clone</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add to Home</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Embed to URL</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Add as Favorites</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Activity Timeline -->
                                <ul class="timeline">
                                    <li class="timeline-item timeline-item-transparent ps-4">
                                        <span class="timeline-point timeline-point-primary"></span>
                                        <div class="timeline-event pb-2">
                                            <div class="timeline-header mb-1">
                                                <h6 class="mb-0">12 Invoices have been paid</h6>
                                                <small class="text-muted">12 min ago</small>
                                            </div>
                                            <p class="mb-2">Invoices have been paid to the company</p>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="me-3">
                                                    <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="23" class="me-2">
                                                    <span class="fw-bold text-body">Invoices.pdf</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent ps-4">
                                        <span class="timeline-point timeline-point-warning"></span>
                                        <div class="timeline-event pb-2">
                                            <div class="timeline-header mb-1">
                                                <h6 class="mb-0">Client Meeting</h6>
                                                <small class="text-muted">45 min ago</small>
                                            </div>
                                            <p class="mb-2">Project meeting with john @10:15am</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="avatar me-3">
                                                    <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">John Doe (Client)</h6>
                                                    <span class="text-muted">CEO of Pixinvent</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item timeline-item-transparent ps-4">
                                        <span class="timeline-point timeline-point-info"></span>
                                        <div class="timeline-event pb-0">
                                            <div class="timeline-header mb-1">
                                                <h6 class="mb-0">Create a new project for client</h6>
                                                <small class="text-muted">2 Day Ago</small>
                                            </div>
                                            <p class="mb-2">5 team members in a project</p>
                                            <div class="d-flex align-items-center avatar-group">
                                                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">
                                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">
                                                    <img src="../../assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">
                                                    <img src="../../assets/img/avatars/9.png" alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">
                                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                                </div>
                                                <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">
                                                    <img src="../../assets/img/avatars/14.png" alt="Avatar" class="rounded-circle">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-end-indicator">
                                        <i class="bx bx-check-circle"></i>
                                    </li>
                                </ul>
                                <!-- /Activity Timeline -->
                            </div>
                        </div>
                    </div>
                    <!--/ Activity Timeline -->
                </div>
                <!-- org overview part end -->
            </div>
        </div>
        <!-- Layout container end-->
    </div>
    <!-- / Layout wrapper end-->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <!-- <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/i18n/i18n.js') }}"></script>  -->

    <!-- <script src="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script> 

  <script src="{{ asset('/assets/vendor/js/menu.js') }}"></script>  -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/dashboards-analytics.js')}}"></script>
</body>

</html>