<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" style="overflow:hidden;" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Edit| Tasks</title>
    
    
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
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-semi-dark.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/docs.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/highlight/highlight.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.css') }}" /> <!--for date picker-->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" /> <!--for date picker-->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" /> <!--for date picker-->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" /> <!--for date picker-->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/pickr/pickr-themes.css') }}" /> <!--for date picker-->
    
    {{-- export btns script start --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
{{-- export btns script end --}}
    
    
    <!-- Page CSS -->
     {{-- serach material Icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- <link rel="stylesheet"
         href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/filter_sidebar.css') }}"> --}}
    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js') }}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>

    <!-- beautify ignore:end -->


{{-- datatable export --}}
<script src="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css"></script>

<!-- for custom datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css">
<!-- for custom datatables end -->

<link rel="stylesheet" href="{{ asset('assets/css/filter_sidebar.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>




{{-- <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}

{{-- for mass delete table --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.6.0/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />


{{-- css link for  datatable selector --}}
<link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />


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
</style>
</head>

<body>

    @include('components.navbar')
    <!-- Layout wrapper -->

    <div class="container" style="border: 2px solid transparent;">

        <div class="d-flex justify-content-center align-items-center">

            <div class="w-50" style="border: 1px solid black;">
                <div class="text-left pt-1 pb-2 mt-2"> <i class="fas fa-file ms-2 me-2 text-primary" style="font-size: 20px;"></i> From File</div>
                <br>
                <div class="text-center pb-1">
                    <div class="pt-2 pb-2">Drag and drop your file here.</div>
                    <br>
                    -- or --
                    <br>
                    <a href="{{url('/browse')}}">
                        <div class="pt-4 pb-3"><button class="btn btn-primary"> Browse <i class="fas fa-plus "></i></button></div>
                    </a>
                    <div class="pt-4 pb-3">
                        Download sample file CSV or XLSX</div>

                    <div class="pt-4 pb-3">You can import up to 5000 records through an .xls, .xlsx, .vcf or .csv file.
                        <br>
                        To import more than 5000 records at a time, use a .csv file.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Layout wrapper -->


    <!-- End Example Code -->

    <!-- for data tables -->

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="assets/vendor/libs/highlight/highlight.js"></script>
    <script src="assets/vendor/libs/clipboard/clipboard.js"></script>
    <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/assets/vendor/libs/hammer/hammer.js') }}"></script>


    <script src="{{ asset('/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('/assets/vendor/js/menu.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <script src="{{ asset('/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- for date picker -->
    <script src="{{ asset('/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- for date picker -->
    <script src="{{ asset('/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <!-- for date picker -->
    <script src="{{ asset('/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <!-- for date picker -->
    <script src="{{ asset('/assets/vendor/libs/pickr/pickr.js') }}"></script>
    <!-- for date picker -->
    <script src="../../assets/vendor/js/dropdown-hover.js"></script>


    <!-- for data tables -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <!-- for data tables end -->

    {{-- export btns script start --}}
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    {{-- export btns script end --}}

    <script src="{{ asset('/assets/vendor/libs/pdfmake/pdfmake.js') }}"></script>

    <script src="{{ asset('/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/docs.js') }}"></script>
    <script src="{{ asset('/assets/js/form-basic-inputs.js') }}"></script>
    <script src="{{ asset('/assets/js/dashboards-analytics.js') }}"></script>
    <script src="{{ asset('/assets/js/modal-create-app.js') }}"></script>
    <script src="{{ asset('/assets/js/modal-add-new-cc.js') }}"></script>
    <script src="{{ asset('/assets/js/modal-add-new-address.js') }}"></script>
    <script src="{{ asset('/assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('/assets/js/modal-enable-otp.js') }}"></script>
    <script src="{{ asset('/assets/js/modal-share-project.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('/assets/js/forms-extras.js') }}"></script>
    <script src="{{ asset('/assets/js/forms-pickers.js') }}"></script>


    <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>



    <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>



</body>

</html>