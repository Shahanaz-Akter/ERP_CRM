<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" style="overflow:hidden;" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

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
<link rel="stylesheet" type="text/css"
    href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
    rel="stylesheet" />


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
        top:120px;
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
    <div class=" d-flex">
        {{-- @include('Contacts.contact_filter_sidebar') --}}
        @include('Accounts.accounts_filter_sidebar')
        {{-- @include('Leads.filter_sidebar') --}}
        <!-- create candidate model -->

        <!-- Layout container -->
        <div class="" style="height:100vh; width:100%;overflow:scroll;">


            <div class="p-3" style="">





                <!-- Content -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header p-3 w-50">
                        <div class="col-md-6">
                            <select id="select2Basic" class="select2 form-select form-select-lg"
                                data-allow-clear="true">
                                <option value="AC">All Contacts</option>
                                <option value="ALC">All Locked Contacts</option>
                                <option value="ML">Mailing Labels</option>
                                <option value="MC">My Contacts</option>
                                <option value="NLW">New Last Week</option>
                                <option value="NTW">New This Week</option>
                                <option value="RCC">Recently Created Contacts</option>
                                <option value="RMC">Recently Modified Contacts</option>
                                <option value="UnreadC">Unread Contacts</option>
                                <option value="UnsuC">Unsubscribed Contacts</option>
                            </select>
                        </div>
                    </div>
                    <div class="header p-3 d-flex slign-items-center justify-content-end ">
                        <div class="start">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary"><a href="/create_account"
                                        class="text-white">Create Account</a></button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Import Contacts</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Import Notes</a></li>

                                </ul>
                            </div>

                         

                        </div>
                        <div class="middle ms-3">
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                                <ul class="dropdown-menu">
                                    {{-- href="javascript:void(0);" --}}
                                    <li><a class="dropdown-item" href="{{url('/accounts/accounts-mass-delete')}}">Mass Delete</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('/accounts/accounts-mass-update')}}">Mass Update</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('/accounts/accounts-manage-tags')}}">Manage Tags</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{url('/accounts/accounts-drafts')}}">Drafts</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Deduplicate Accounts</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Zoho Sheet View</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Print View</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- table start --}}



                {{-- @include('Leads.leads_list') --}}
                {{-- @include('Contacts.ContactPages.Contact_list') --}}
                @include('Accounts.AccountsPages.account_list')

                




                {{-- <div class="content-backdrop fade"></div> --}}

            </div>
            <!-- / Layout page -->
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>

    </div>
    <!-- / Layout wrapper -->


    <!-- Modal Add to Campaigns start -->
    <div class="modal modal-top fade " id="modalTop" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Choose Campaign</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="d-flex justify-content-between  px-3">
                        <div class="input-group input-group-merge col-md-6 w-50">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                                aria-describedby="basic-addon-search31" />
                        </div>

                        <button type="button" class="btn btn-outline-primary">
                            <span class="fa-solid fa-plus"></span>&nbsp; New Campaign
                        </button>

                    </div>


                    {{-- <div class="outer-wrapper"> --}}
                        <div class="table-wrapper ">
                            {{-- @include('Leads.actionRoutes.AddCampaings.AddCampaings_list') --}}
                            @include('Contacts.ContactActionRoutes.ContactAddCampaings.contact_add_campaings_list')
                        </div>
                        {{-- <div class="text-center border-bottom border-3 py-4">
                            <span class="text-muted ">No Campaigns found</span>
                        </div> --}}
                    {{-- </div> --}}

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Add to Campaigns end -->



    <!-- End Example Code -->

    <!-- for data tables -->

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    {{-- for export btns --}}
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>



    <script>
        $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#contactAddCamTbl thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#contactAddCamTbl thead');
 
    var table = $('#contactAddCamTbl').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    
                    var title = $(cell).text();
                    $(cell).html('<input type="text" class="option_'+ (colIdx-1) +'_th_i" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
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

        const withOpenoption = (tag) =>{
            console.log(tag.value);
            if (tag.value == 'inTheLast') {
                document.getElementById('WithOpenDeal').classList.remove("d-none")
            }
            else{
                document.getElementById('WithOpenDeal').classList.add("d-none")
            }
        }
        const withoutOpenOption = (tag) =>{
            console.log(tag.value);
            if (tag.value == 'inTheLast') {
                document.getElementById('WithoutOpenDeal').classList.remove("d-none")
            }
            else{
                document.getElementById('WithoutOpenDeal').classList.add("d-none")
            }
        }
    </script>

    <script>
        const CreatedTimeValue = (tag) =>{
            if (tag.value == 'last' || tag.value  == 'Due in' ) {
                document.getElementById("CreatedTimeDate").classList.add('d-none');
                document.getElementById("fromDate").classList.add('d-none');
                document.getElementById("fromTo").classList.add('d-none');
                document.getElementById("toDate").classList.add('d-none');
                document.getElementById("createdTimeText").classList.remove('d-none');
                document.getElementById("day-week-month").classList.remove('d-none');
            }
            else if (tag.value == 'On' || tag.value == 'Before' || tag.value  == 'after') {
                document.getElementById("createdTimeText").classList.add('d-none');
                document.getElementById("day-week-month").classList.add('d-none');
                document.getElementById("fromDate").classList.add('d-none');
                document.getElementById("fromTo").classList.add('d-none');
                document.getElementById("toDate").classList.add('d-none');
                document.getElementById("CreatedTimeDate").classList.remove('d-none');
            }
            else if (tag.value == 'between' ) {
                document.getElementById("createdTimeText").classList.add('d-none');
                document.getElementById("day-week-month").classList.add('d-none');
                document.getElementById("CreatedTimeDate").classList.add('d-none');
                document.getElementById("fromDate").classList.remove('d-none');
                document.getElementById("fromTo").classList.remove('d-none');
                document.getElementById("toDate").classList.remove('d-none');
            }
            else {
                document.getElementById("createdTimeText").classList.add('d-none');
                document.getElementById("day-week-month").classList.add('d-none');
                document.getElementById("CreatedTimeDate").classList.add('d-none');
                document.getElementById("fromDate").classList.add('d-none');
                document.getElementById("fromTo").classList.add('d-none');
                document.getElementById("toDate").classList.add('d-none');
            }
        }
    </script>
    <script>
        const DateOfBirthValue = (tag) =>{
            if (tag.value == 'last' || tag.value  == 'Due in' ) {
                document.getElementById("DateOfBirthDate").classList.add('d-none');
                document.getElementById("DateOfBirthFromDate").classList.add('d-none');
                document.getElementById("DateOfBirthFromTo").classList.add('d-none');
                document.getElementById("DateOfBirthToDate").classList.add('d-none');
                document.getElementById("DateOfBirthText").classList.remove('d-none');
                document.getElementById("DateOfBirthDuration").classList.remove('d-none');
            }
            else if (tag.value == 'On' || tag.value == 'Before' || tag.value  == 'after') {
                document.getElementById("DateOfBirthText").classList.add('d-none');
                document.getElementById("DateOfBirthDuration").classList.add('d-none');
                document.getElementById("DateOfBirthFromDate").classList.add('d-none');
                document.getElementById("DateOfBirthFromTo").classList.add('d-none');
                document.getElementById("DateOfBirthToDate").classList.add('d-none');
                document.getElementById("DateOfBirthDate").classList.remove('d-none');
            }
            else if (tag.value == 'between' ) {
                document.getElementById("DateOfBirthText").classList.add('d-none');
                document.getElementById("DateOfBirthDuration").classList.add('d-none');
                document.getElementById("DateOfBirthDate").classList.add('d-none');
                document.getElementById("DateOfBirthFromDate").classList.remove('d-none');
                document.getElementById("DateOfBirthFromTo").classList.remove('d-none');
                document.getElementById("DateOfBirthToDate").classList.remove('d-none');
            }
            else {
                document.getElementById("DateOfBirthText").classList.add('d-none');
                document.getElementById("DateOfBirthDuration").classList.add('d-none');
                document.getElementById("DateOfBirthDate").classList.add('d-none');
                document.getElementById("DateOfBirthFromDate").classList.add('d-none');
                document.getElementById("DateOfBirthFromTo").classList.add('d-none');
                document.getElementById("DateOfBirthToDate").classList.add('d-none');
            }
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
    <script src="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script> //for date picker
    <script src="{{ asset('/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script> //for date
    picker
    <script src="{{ asset('/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    //for date picker
    <script src="{{ asset('/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script> //for date picker
    <script src="{{ asset('/assets/vendor/libs/pickr/pickr.js') }}"></script> //for date picker
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


    <script type="text/javascript"
        src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>


    {{-- scriopt for download data from datatable --}}

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    {{-- for dataTable selector  --}}
    <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>



</body>

</html>