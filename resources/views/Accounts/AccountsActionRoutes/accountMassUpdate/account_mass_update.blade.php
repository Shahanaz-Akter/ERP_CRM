<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" style="" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>CRM | Accounts</title>
    
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    
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
    <link rel="stylesheet"
         href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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




<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

{{-- for mass delete table --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.6.0/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css"
    href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
    rel="stylesheet" />


<style>
    .dataTables_length {
        padding: 10px !important;
    }

    .example_length {
        padding: 10px !important;
    }

 
</style>
</head>

<body>

    @php
        
        // Lead Conversion Time, No. of Employees
        $AnnualRevenue = ['=', '!=', '<', '<=', '>', '>=', 'between', 'not between', 'is empty', 'is not emply'];
        $city = ['is', "isn't", 'contains', "doesn't contains", 'starts  with', 'ends with', 'is empty', 'is not empty'];
        $Created_By = ['is', "isn't", 'is empty', 'is not empty'];
        $createdTime = ['is', "isn't", 'is  before', 'is after', 'between', 'not between', 'today', 'Tomorrow', 'Starting tomorrow', 'Yesterday', ' Till  Yesterday', 'Last Month', 'Current Month', 'Next Month', 'Last Week', 'Current Week', 'Next Week', 'This Year', 'Current FY', 'Current FQ', 'Last Year', 'Previous FY', 'Previous FQ', 'Next Year', 'Next FY', 'Next FQ', 'Age in Days', 'Due in Days', 'is empty', 'is not empty'];
    $EmailOptOut = ['is']; @endphp
    @include('components.navbar')
    <!-- Layout wrapper -->
    <div>
        <!-- Leads - Mass Delete -->
        <div class="col-12">
            <div class="card">
                <div class="d-flex align-content-center flex-wrap mx-3 mt-3">
                    <a href="{{ url('/accounts') }}" class="fs-4 "><i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
                    <h5 class=" mx-4 pt-1">Accounts - Mass Update</h5>
                </div>
                <div class="card-body">
                    <h6>Criteria</h6>
                    <form class="form-repeater mt-4">
                        <div class="row">
                            <div class="col-md-1 text-center">
                                <i class=" fa-solid fa-circle-plus text-primary fs-2" data-repeater-create></i>
                            </div>
                            <div class="col-md-11" data-repeater-list="group-a">
                                <div data-repeater-item>
                                    <div style="height: 50px;" class="row">
                                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                            <select id="form-repeater-1-3" onclick="selectDropdown()"
                                                class="form-select">
                                                <option value="None">None</option>
                                                <option value="Annual">Annual Revenue</option>
                                                <option value="City">City</option>
                                                <option value="Company">Company</option>
                                                <option value="Country">Country</option>
                                                <option value="Created">Created By</option>
                                                <option value="CreatedTime">Created Time</option>
                                                <option value="DaysVisited">Days Visited</option>
                                                <option value="Email">Email</option>
                                                <option value="EmailOpt">Email Opt Out</option>
                                                <option value="Fax">Fax</option>
                                                <option value="FirstName">First Name</option>
                                                <option value="FirstPageVisited">First Page Visited</option>
                                                <option value="FirstVisit">First Visit</option>
                                                <option value="Industry">Industry</option>
                                                <option value="LastActivityTime">Last Activity Time</option>
                                                <option value="LastName">Last Name</option>
                                                <option value="LeadconversionTime">Lead conversion Time</option>
                                                <option value="LeadOwner">Lead Owner</option>
                                                <option value="LeadSource">Lead Source</option>
                                                <option value="LeadStatus">Lead Status</option>
                                                <option value="Mobile">Mobile</option>
                                                <option value="Modified">Modified By</option>
                                                <option value="ModifiedTime">Modified Time</option>
                                                <option value="Employees">No. of Employees</option>
                                                <option value="Phone">Phone</option>
                                                <option value="Rating">Rating</option>
                                                <option value="Salutation">Salutation</option>
                                                <option value="SecondaryEmail">Secondary Email</option>
                                                <option value="Skype">Skype ID</option>
                                                <option value="State">State</option>
                                                <option value="Street">Street</option>
                                                <option value="Title">Title</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="Unsubscribed">Unsubscribed Mode</option>
                                                <option value="Unsubscribed">Unsubscribed Time</option>
                                                <option value="Website">Website</option>
                                                <option value="ZipCode">Zip Code</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0">
                                            <select id="form-repeater-1-4" class="form-select" disabled>
                                                <option value="none">None</option>
                                            </select>
    
                                            {{-- select option 2 form-repeater-1-5 loop --}}
                                            <select id="form-repeater-1-5" class="form-select d-none">
                                                @foreach ($AnnualRevenue as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
    
                                            {{-- select option 3 form-repeater-1-6 Loop --}}
                                            <select id="form-repeater-1-6" class="form-select d-none">
                                                <option value="none" selected>None</option>
                                                @foreach ($city as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                            {{-- select option 4 form-repeater-1-7 Loop --}}
                                            <select id="form-repeater-1-7" class="form-select d-none">
                                                @foreach ($Created_By as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
    
                                            {{-- select option 4 form-repeater-1-8 Loop --}}
                                            <select id="form-repeater-1-8" class="form-select d-none">
                                                @foreach ($createdTime as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                @endforeach
                                            </select>
                                            {{-- select option 4 form-repeater-1-9 Loop --}}
                                            <select id="form-repeater-1-9" class="form-select d-none">
                                                <option value="is">is</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0" id="text-inpit">
                                            <input type="text" id="form-repeater-1-1" class="form-control" disabled />
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0  d-none" id="date-input">
                                            <input type="date" id="form-repeater-1-1 " class="form-control" />
                                        </div>
                                        <div class="mb-3 col-lg-6 col-xl-2 col-12 mb-0  d-none" id="time-input">
                                            <input type="time" id="form-repeater-1-1" class="form-control" />
                                        </div>
                                        <div class="mb-5 col-lg-12 col-xl-2 col-12 d-flex align-items-center mb-0">
                                            <button class="btn btn-label-danger " data-repeater-delete>
                                                <i class="bx bx-x"></i>
                                                <span class="align-middle">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <div style="width:70%" class="mb-0 mt-3  text-end">
                            <button class="border border-2 border-primary py-2 px-3 rounded">
                                <i class="fa-solid fa-magnifying-glass text-primary pe-1"></i>
                                <span>Search</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Leads - Mass Delete -->


            {{-- list all coustomer --}}

        </div>
        <!-- / Layout wrapper -->

        {{-- Script for second dropdown field start --}}
        <script>
            const selectDropdown = () => {
                $firstOption1 = document.getElementById("form-repeater-1-3").selectedOptions[0].innerHTML;
                if ($firstOption1 === "" || $firstOption1 === "None") {
                    document.getElementById("date-input").classList.add('d-none');
                    document.getElementById("time-input").classList.add('d-none');
                    document.getElementById("text-inpit").classList.remove("d-none");
                    document.getElementById("form-repeater-1-1").setAttribute('disabled', '');
                    document.getElementById("form-repeater-1-5").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.add("d-none");
                    document.getElementById("form-repeater-1-8").classList.add("d-none");
                    document.getElementById("form-repeater-1-9").classList.add("d-none");
                    document.getElementById("form-repeater-1-4").classList.remove('d-none');
                    // if()

                }
                // Annual Revenue Lead Conversion Time, No. of Employees
                else if ($firstOption1 === "Annual Revenue" || $firstOption1 === "Lead conversion Time" || $firstOption1 ===
                    "No. of Employees" || $firstOption1 === "Days Visited") {
                    document.getElementById("date-input").classList.add('d-none');
                    document.getElementById("time-input").classList.add('d-none');
                    document.getElementById("text-inpit").classList.remove("d-none");
                    document.getElementById("form-repeater-1-4").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.add("d-none");
                    document.getElementById("form-repeater-1-8").classList.add("d-none");
                    document.getElementById("form-repeater-1-9").classList.add("d-none");
                    document.getElementById("form-repeater-1-5").classList.remove('d-none');
                    document.getElementById("form-repeater-1-1").removeAttribute('disabled');
                }
                // City, Company, Country, Email, fax, First Name, Industry, Last Name, Lead Source, Lead Status, Mobile, Phone, Rating, Salutation, Secondary Email
                // Skype ID, State, Street, Title, Twitter, Unsubscribed Mode, Unsubscribed Time, Website, Zip Code
                else if ($firstOption1 === "City" || $firstOption1 === "Company" || $firstOption1 === "Country" ||
                    $firstOption1 === "Email" || $firstOption1 === "fax" ||
                    $firstOption1 === "First Name" || $firstOption1 === "Industry" || $firstOption1 === "Last Name" ||
                    $firstOption1 === "Lead Source" || $firstOption1 === "Mobile" ||
                    $firstOption1 === "Lead Status" || $firstOption1 === "Phone" || $firstOption1 === "Rating" ||
                    $firstOption1 === "Salutation" || $firstOption1 === "Skype ID" ||
                    $firstOption1 === "Secondary Email" || $firstOption1 === "State" || $firstOption1 === "Street" ||
                    $firstOption1 === "Title" || $firstOption1 === "Twitter" ||
                    $firstOption1 === "Unsubscribed Mode" || $firstOption1 === "Unsubscribed Time" || $firstOption1 ===
                    "Website" || $firstOption1 === "Zip Code" || $firstOption1 === "First Page Visited") {
                    document.getElementById("date-input").classList.add('d-none');
                    document.getElementById("time-input").classList.add('d-none');
                    document.getElementById("text-inpit").classList.remove("d-none");
                    document.getElementById("form-repeater-1-4").classList.add("d-none");
                    document.getElementById("form-repeater-1-5").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.add("d-none");
                    document.getElementById("form-repeater-1-8").classList.add("d-none");
                    document.getElementById("form-repeater-1-9").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.remove('d-none');
                    document.getElementById("form-repeater-1-1").removeAttribute('disabled');

                }
                // Created By, Lead Owner, Modified By
                else if ($firstOption1 === "Created By" || $firstOption1 === "Lead Owner" || $firstOption1 ===
                    "Modified By") {
                    document.getElementById("date-input").classList.add('d-none');
                    document.getElementById("time-input").classList.add('d-none');
                    document.getElementById("text-inpit").classList.remove("d-none");
                    document.getElementById("form-repeater-1-4").classList.add("d-none");
                    document.getElementById("form-repeater-1-5").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.add("d-none");
                    document.getElementById("form-repeater-1-8").classList.add("d-none");
                    document.getElementById("form-repeater-1-9").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.remove('d-none');
                    document.getElementById("form-repeater-1-1").removeAttribute('disabled');
                }
                // Created Time, Last Activity Time, Modified Time
                else if ($firstOption1 === "Last Activity") {
                    document.getElementById("date-input").classList.add('d-none');
                    document.getElementById("time-input").classList.add('d-none');
                    document.getElementById("text-inpit").classList.remove("d-none");
                    document.getElementById("form-repeater-1-4").classList.add("d-none");
                    document.getElementById("form-repeater-1-5").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.add("d-none");
                    document.getElementById("form-repeater-1-9").classList.add("d-none");
                    document.getElementById("form-repeater-1-8").classList.remove('d-none');
                    document.getElementById("form-repeater-1-1").removeAttribute('disabled');
                }
                // Created Time, Last Activity Time, Modified Time
                else if ($firstOption1 === "Email Opt Out") {
                    document.getElementById("date-input").classList.add('d-none');
                    document.getElementById("time-input").classList.add('d-none');
                    document.getElementById("text-inpit").classList.remove("d-none");
                    document.getElementById("form-repeater-1-4").classList.add("d-none");
                    document.getElementById("form-repeater-1-5").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.add("d-none");
                    document.getElementById("form-repeater-1-8").classList.add("d-none");
                    document.getElementById("form-repeater-1-9").classList.remove('d-none');
                    document.getElementById("form-repeater-1-1").removeAttribute('disabled');
                } else if ($firstOption1 === "Created Time" || $firstOption1 === "First Visit" || $firstOption1 ===
                    "Last Activity Time" || $firstOption1 === "Modified Time") {
                    document.getElementById("form-repeater-1-4").classList.add("d-none");
                    document.getElementById("form-repeater-1-5").classList.add("d-none");
                    document.getElementById("form-repeater-1-6").classList.add("d-none");
                    document.getElementById("form-repeater-1-7").classList.add("d-none");
                    document.getElementById("text-inpit").classList.add("d-none");
                    document.getElementById("date-input").classList.remove('d-none');
                    document.getElementById("time-input").classList.remove('d-none');
                    document.getElementById("form-repeater-1-9").classList.add('d-none');
                    document.getElementById("form-repeater-1-8").classList.remove("d-none");
                    // document.getElementById("form-repeater-1-1").removeAttribute('disabled');
                }

            }
        </script>
        {{-- Script for second dropdown field End --}}



        <!-- End Example Code -->

        <!-- for data tables -->
        <div class="bg-white  mt-4">
            {{-- <div class="demo-inline-spacing text-end pe-2 mb-1">
                <button type="button" class="btn btn-danger" id="delete-btn">Delete</button>
            </div> --}}
            {{-- @include('Leads.actionRoutes.massUpdate.mass_update_list'); --}}
            @include('Accounts.AccountsActionRoutes.accountMassUpdate.account_mass_update_list');
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
        {{-- for export btns --}}
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>



        <script>
            $(document).ready(function() {

                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5',
                        'selectAll',
                        'selectNone'
                    ],
                    columnDefs: [{
                        orderable: false,
                        className: 'select-checkbox',
                        targets: 0
                    }],
                    select: {
                        style: 'os',
                        selector: 'td:first-child'
                    },
                    order: [
                        [1, 'asc']
                    ]
                });
            });
        </script>
        <!-- for custom data tables  -->

        <script>
            const open_radio_subcontent = (tag) => {

                tag.parentElement.parentElement.children[1].classList.remove('d-none');
                let others = document.querySelectorAll('.with_sub_content');

                Array.from(others).forEach(element => {

                    if (element != tag) {
                        // console.log(element);
                        element.parentElement.parentElement.children[1].classList.add('d-none');
                    }
                });
            }
        </script>

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
        {{-- //for date picker --}}
        <script src="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
        {{-- //for date picker --}}
        <script src="{{ asset('/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
        {{-- //for date picker --}}
        <script src="{{ asset('/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
        {{-- //for date picker --}}
        <script src="{{ asset('/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
        {{-- //for date picker --}}
        <script src="{{ asset('/assets/vendor/libs/pickr/pickr.js') }}"></script>
        <script src="../../assets/vendor/js/dropdown-hover.js"></script>


        <!-- for data tables -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
        <!-- for data tables end -->

        {{-- export btns script start --}}
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
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
        {{-- //for date picker --}}
        <script src="{{ asset('/assets/js/forms-pickers.js') }}"></script>

        <script type="text/javascript"
            src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>




        {{-- for mass delete table js link --}}
        {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
      --}}


</body>

</html>
