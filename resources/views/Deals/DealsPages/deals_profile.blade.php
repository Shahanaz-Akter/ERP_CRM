<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" style="" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>CRM | Deals</title>
    
    
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
    #profile-body {
        overflow-y: hidden;
        overflow-x: hidden;
    }

    #ProfileImage {
        height: 70px;
        width: 70px;
        border-radius: 30%;
    }

    .bar-button {
        width: 100%;
        border: none;
        background-color: white;
        font-weight: 500;
    }

    .plusIcon {
        display: none;
    }

    .bar-button:hover {
        background-color: rgb(239, 239, 239);
    }

    .bar-button:hover .plusIcon {
        display: block;
    }

    .overview {
        border: 1px solid #0192f9a2;
        background-color: #0192f930;
    }

    .overview:hover {
        cursor: pointer;
    }



    .info-container {
        background-color: white;
        margin: 0 1rem;
        border-radius: 10px;
        padding: 20px 30px;
        font-size: 17px;
    }

    .line-space {
        margin: 15px 0;
    }

    .call-icon {
        font-size: 12px;
        color: rgb(92, 244, 92);
        background-color: rgba(62, 226, 62, 0.297);
        padding: 5px;
        border-radius: 5px;
    }

    .node-del-icon {
        display: none;
    }

    .single-node:hover .node-del-icon {
        display: block;
    }

    .DropFiles {
        /* width: 100%;
        height: 150px;
        border: 1px solid gray;
        border-style: dotted;
        text-align: center; */
    }

    .Activities2ndRow {
        background-color: rgb(209, 209, 209);
    }

    .socialBtn {
        padding: 15px 0;
        border: none;
    }

    .social-container {
        background-color: white;
        margin: 0 1rem;
        border-radius: 10px;
        font-size: 17px;
    }

    .footer-container {
        background-color: #fff;
    }

    .footerBtn {
        background-color: #0190f9;
        color: white;
        border: none;
        padding: 5px 12px;
        border-radius: 8px;
        font-weight: 500;
    }

    .footerBtn-2 {
        border: none;
        padding: 5px 12px;
        border-radius: 6px;
        font-weight: 500;
    }

    /* css for Attachments file type input  */
    .file-drop-area {
        position: relative;
        display: flex;
        align-items: center;
        /* width: 450px; */
        max-width: 100%;
        padding: 25px;
        /* border: 1px dashed rgba(255, 255, 255, 0.4); */
        border-radius: 3px;
        transition: 0.2s;
        &.is-active {
            background-color: rgba(255, 255, 255, 0.05);
        }
    }

    .fake-btn {
        flex-shrink: 0;
        background-color: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 3px;
        padding: 8px 15px;
        margin-right: 10px;
        font-size: 12px;
        text-transform: uppercase;
    }

    .file-msg {
        font-size: small;
        font-weight: 300;
        line-height: 1.4;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .file-input {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        border: 5px solid tomato;
        cursor: pointer;
        opacity: 0;
        &:focus {
            outline: none;
        }
    }
</style>

</head>

<body id="profile-body">

    {{-- navbar include --}}
    <div class="">
        @include('components.navbar')
        {{-- profile top bar name image --}}
        <div style="background-color:#fff; width:100%"
            class="border-bottom d-flex justify-content-between align-items-center py-2 ps-3 ">
            <div class="d-flex align-items-center">
                <a href="{{ url('/deals') }}" class="fs-4 ms-4"><i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
                <img id="ProfileImage" class="mx-3"
                    src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419408&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd50ad7ed1e2bd4c53d8ef278a348991b068a0f7bc76c9c2d91006652c0e2c6f41ce5fe17fd5afa53538c6110ed66c7a1f06"
                    alt="">
                <div>
                    <span style="color:black" class="fw-bold ms-1 fs-5 pt-2">Christopher Maclead</span><br>
                    <span>- Rangoni Of Florence</span>
                </div>

            </div>
            <div class="pe-5">
                <button type="button" class="btn btn-primary">Send Email</button>
                <button type="button" class="btn btn-secondary mx-3">Convert</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('/deals/editProfile') }}'">Edit</button>
                <button type="button" class="btn btn-secondary ms-3"><i class="fa-solid fa-ellipsis"></i></button>
            </div>
        </div>
    </div>
    {{-- changed by shoili --}}
    <div style="position:fixed;width:100%;">
        {{-- profile body --}}
        <div class="row">

            {{-- side bar in body --}}
            <div style="height:100vh; background-color:white;" class=" pt-3 ps-5 col-sm-4 col-md-3 col-lg-3 col-xl-2 ">
                <div style="color:black;">
                    <span class="fs-5 fw-bold ">Related List</span>
                    <span class="ms-2"><i class="fa-solid fa-bars-staggered"></i></span>
                </div>
                <div>
                    <button onclick="window.location.href='#nodes'" style=""
                        class=" d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Notes</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#Attachments'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Attachments</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#Products'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Products</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#OpenActivities'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Open Activities</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#closedActivities'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Closed Activities</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#allEmails'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Emails</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#invitedMeetings'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Invited Meetings</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#Campaigns'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Campaigns</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#Social'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Social</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#zohoDesk'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Zoho Desk</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#zohoSurvey'" style=""
                        class="d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Zoho Survey</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <button onclick="window.location.href='#VisitsSalesIQ'" style=""
                        class="mb-2 d-flex justify-content-between align-items-center py-2 bar-button">
                        <span>Visits-Zoho SalesIQ</span>
                        <span><i class="fa-solid fa-plus plusIcon"></i></span>
                    </button>
                    <a style="color:rgb(20, 20, 244); font-weight: 500" class="ms-2 " href="">Add Related List</a>

                </div>
            </div>

            {{-- description this profile --}}
            <div style="height:100vh; overflow:scroll; " class=" col-sm-8 col-md-9 col-lg-9 col-xl-10 px-0">

                <div style="background-color: rgb(234, 231, 231); " class="d-flex justify-content-between  py-3 ">
                    <div style="color:black" class="d-flex border border-2 rounded-pill p-1 ms-3">
                        {{-- <a style="color:black; height:25px" class="p-2 fw-bolder border rounded-pill py-0 overview"
                            --}} <span style="color:black; height:25px" class="p-2 fw-bolder rounded-pill py-0 overview"
                            href="" onclick="overviewFunc(this)" id="overviewId">Overview</span>
                            <span style="color:black; height:25px" class="p-2 fw-bolder rounded-pill py-0 timelines"
                                href="" onclick="timelineFunc(this)" id="timelineId">Timeline</span>
                    </div>
                    <div class="me-5">
                        <span>Last Update : 11:40 AM</span>
                    </div>
                </div>

                {{-- Overview container --}}
                {{-- leads owner contact container --}}
                <div style="" class="" id="scroll-container">
                    
                    <div style="" class="row info-container my-3 ">
                        <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                            <div class="me-5 text-end">
                                <span class="d-block">Deals Owner</span>
                                <span class="d-block line-space">Email</span>
                                <span class="d-block">Phone</span>
                                <span class="d-block line-space">Mobile</span>
                                <span class="d-block">Deals Status</span>
                            </div>
                            <div>
                                <span class="d-block">sm khan</span>
                                <span class="d-block line-space"><a
                                        href="mailto:christopher-maclead@gmail.com">christopher-maclead@gmail.com</a></span>
                                <span class="d-block"><i class="fa-solid fa-phone call-icon"></i>
                                    555-555-5555</span>
                                <span class="d-block line-space"><i class="fa-solid fa-phone call-icon"></i>
                                    555-555-5555</span>
                                <span class="d-block">Lost Lead</span>
                            </div>
                        </div>
                    </div>

                    {{-- Lead Information container --}}
                    <div class="info-container">
                        <h5 style="color:black">Deals Information</h5>
                        <div class="row mx-4">
                            <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                                <div class="me-5 text-end">
                                    <span class="d-block">Deals Owner</span>
                                    <span class="d-block line-space">Title</span>
                                    <span class="d-block">Phone</span>
                                    <span class="d-block line-space">Mobile</span>
                                    <span class="d-block">Deals Source</span>
                                    <span class="d-block line-space">Industry</span>
                                    <span class="d-block">Annual Revenue</span>
                                    <span class="d-block line-space">Email Opt Out</span>
                                    <span class="d-block">Modified By</span>
                                </div>
                                <div>
                                    <span class="d-block">sm khan</span>
                                    <span class="d-block line-space">VP Accounting</span>
                                    <span class="d-block"><i class="fa-solid fa-phone call-icon"></i>
                                        555-555-5555</span>
                                    <span class="d-block line-space"><i class="fa-solid fa-phone call-icon"></i>
                                        555-555-5555</span>
                                    <span class="d-block">Cold Call</span>
                                    <span class="d-block line-space">Service Provider</span>
                                    <span class="d-block">$ 850,000.00</span>
                                    <span class="d-block line-space">--</span>
                                    <span class="d-block">sm khan</span>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                                <div class="me-5 text-end">
                                    <span class="d-block">Company</span>
                                    <span class="d-block line-space">Deals Name</span>
                                    <span class="d-block">Email</span>
                                    <span class="d-block line-space">Fax</span>
                                    <span class="d-block">Website</span>
                                    <span class="d-block line-space">Lead Status</span>
                                    <span class="d-block">No. of Employees</span>
                                    <span class="d-block line-space">Rating</span>
                                    <span class="d-block">Created By</span>
                                    <span class="d-block line-space">Skype ID</span>
                                    <span class="d-block">Secondary Email</span>
                                    <span class="d-block line-space">Twitter</span>
                                </div>
                                <div>
                                    <span class="d-block">Rangoni Of Florence</span>
                                    <span class="d-block line-space">Mr. Christopher Maclead (Sample)</span>
                                    <span class="d-block"><a
                                            href="mailto:christopher-maclead@gmail.com">christopher-maclead@gmail.com</a></span>
                                    <span class="d-block line-space">--</span>
                                    <span class="d-block"><a
                                            href="http://www.rangoniofflorence.com">http://www.rangoniofflorence.com
                                        </a></span>
                                    <span class="d-block line-space">Lost Lead</span>
                                    <span class="d-block">--</span>
                                    <span class="d-block line-space">--</span>
                                    <span class="d-block">sm khan</span>
                                    <span class="d-block line-space"><a href="">christopher-maclead <i
                                                class="fa-brands fa-skype"></i></a></span>
                                    <span class="d-block">--</span>
                                    <span class="d-block line-space"><a href="">christophermaclead_sample</a></span>

                                </div>
                            </div>
                        </div>


                        {{-- Address Information --}}
                        <div class="d-flex justify-content-between align-items-center me-3 mt-5">
                            <h5 style="color:black">Address Information</h5>
                            <button type="button" class="btn btn-secondary">Locate Map</button>
                        </div>
                        <div class="row mx-4">
                            <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                                <div class="me-5 text-end">
                                    <span class="d-block">Street</span>
                                    <span class="d-block line-space">State</span>
                                    <span class="d-block">Country</span>

                                </div>
                                <div>
                                    <span class="d-block">37275 St Rt 17m M</span>
                                    <span class="d-block line-space">NY</span>
                                    <span class="d-block">United States</span>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                                <div class="me-5 text-end">
                                    <span class="d-block">City</span>
                                    <span class="d-block line-space">Zip Code</span>
                                </div>
                                <div>
                                    <span class="d-block">Middle Island</span>
                                    <span class="d-block line-space">11953</span>
                                </div>
                            </div>
                        </div>

                        {{-- Visit Summary information --}}
                        <h5 style="color:black" class="mt-5">Visit Summary</h5>
                        <div class="row mx-4">
                            <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                                <div class="me-5 text-end">
                                    <span class="d-block">Most Recent Visit</span>
                                    <span class="d-block line-space">Average Time Spent (Minutes)</span>
                                    <span class="d-block">Referrer</span>
                                    <span class="d-block line-space">First Visit</span>

                                </div>
                                <div>
                                    <span class="d-block">--</span>
                                    <span class="d-block line-space">--</span>
                                    <span class="d-block">--</span>
                                    <span class="d-block line-space">--</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-9 d-flex">
                                <div class="me-5 text-end">
                                    <span class="d-block">First Page Visited</span>
                                    <span class="d-block line-space">Number Of Chats</span>
                                    <span class="d-block">Visitor Score</span>
                                    <span class="d-block line-space">Days Visited</span>

                                </div>
                                <div>
                                    <span class="d-block">--</span>
                                    <span class="d-block line-space">--</span>
                                    <span class="d-block">--</span>
                                    <span class="d-block line-space">--</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Nodes container --}}
                    <div style="" class="row info-container my-3" id="nodes">
                        <div class="d-flex justify-content-between align-items-center me-3 border-bottom ">
                            <h5 style="color:black">Nodes</h5>
                            <select style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                class=" rounded-2" name="node" id="for-node" class=" rounded-2">
                                <option style="background-color: rgb(231, 231, 231)" selected value="RecentFirst">
                                    Recent
                                    First</option>
                                <option style="background-color: rgb(231, 231, 231)" value="RecentLast">Recent Last
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-8 col-lg-9 col-md-12">
                            <div style="font-size:15px;color:rgb(30, 30, 30)" class="mt-4  single-node">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <img style="height: 40px; width:40px;  border-radious:50%"
                                            src="{{ asset('/assets/img/avatars/leadsUser.png') }}" class="mb-2" alt="">
                                        <span style="font-weight: 600" class="ms-2 ">Shanto</span>
                                    </div>
                                    <i class="fa-solid fa-trash node-del-icon"></i>
                                </div>
                                <span class="">Add Node .</span>
                                <small class="ms-3"><i style="color: rgb(36, 145, 65)" class="fa-solid fa-clock"></i>
                                    13
                                    mins. agobysm khan</small>
                            </div>
                            <div class="mt-4">
                                <input type="text" class="form-control mb-2" id="defaultFormControlInput"
                                    placeholder="Add Node" aria-describedby="defaultFormControlHelp" />
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </div>

                    {{-- Attachments container --}}
                    <div style="" class="row info-container my-3" id="Attachments">
                        <div class="d-flex justify-content-between align-items-center me-3 border-bottom">
                            <h5 style="color:black">Attachments</h5>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class=" rounded-2" data-bs-toggle="modal"
                                data-bs-target="#attachmentsModalTop">
                                Upload File
                            </button>
                        </div>
                        <div class="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2" scope="col">File Name</th>
                                        <th></th>
                                        <th scope="col">Attached By</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">Mark</td>
                                        <td></td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Jacob</td>
                                        <td></td>
                                        <td>Thornton</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Products container --}}
                    <div style="" class="row info-container my-3" id="Products">
                        <div class=" me-3 border-bottom ">
                            <h5 style="color:black">Products</h5>

                        </div>
                        <div class="my-4">
                            <span style="font-size:15px">No records found</span>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class="ms-2 rounded-2" data-bs-toggle="modal"
                                data-bs-target="#productModalTop">
                                Add Product
                            </button>
                        </div>
                    </div>

                    {{-- Open Activities container --}}
                    <div style="" class="row info-container my-3" id="OpenActivities">
                        <div class="d-flex justify-content-between align-items-center me-3 border-bottom">
                            <h5 style="color:black">Open Activities</h5>
                            <select style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                class=" rounded-2" name="addNew" id="addNew">
                                <option value="Add New" data-bs-toggle="modal"
                                data-bs-target="#activitiesTaskModalTop">Add New</option>
                                <option value="Add New">Task</option>
                                <option value="Add New">Meeting</option>
                                <option value="Add New">Call</option>
                            </select>
                        </div>
                        <div class="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2" scope="col">Open Tasks</th>
                                        <th style="background-color:rgb(235, 235, 235);" scope="col">Open Meetings</th>
                                        <th scope="col">Open Calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div class="me-5 ">
                                                <span class="d-block"><a href="">Maclead</a></span>
                                                <span class="d-block">03/16/2023</span>
                                                <small class="d-block mb-2"><i class="fa-solid fa-user"></i> sm
                                                    khan</small>
                                                <div class="d-flex align-items-center">
                                                    <span class="d-block ">Status</span>
                                                    <span class="d-block"> : Not Started</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="d-block">Priority</span>
                                                    <span class="d-block">: High</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="background-color:rgb(235, 235, 235);" class="">
                                            <div class="me-5 ">
                                                <span class="d-block"><a href="">New Meeting</a></span>
                                                <span class="d-block">03/21/2023 11:00 AM - 12:00 PM</span>
                                                <small class="d-block mb-2"><i class="fa-solid fa-user"></i> sm
                                                    khan</small>
                                            </div>
                                        </td>
                                        <td>No records found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Closed Activities container --}}
                    <div style="" class="row info-container my-3" id="closedActivities">
                        <div class=" me-3 border-bottom">
                            <h5 style="color:black">Closed Activities</h5>

                        </div>
                        <div class="my-4">
                            <span style="font-size:15px">No records found</span>
                        </div>
                    </div>

                    {{-- Emails status container --}}
                    <div style="" class="row info-container my-3" id="allEmails">
                        <div class="d-flex justify-content-between align-items-center me-3 border-bottom">
                            <h5 style="color:black">Emails</h5>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class=" rounded-2">
                                <a href="mailto:email@example.com">Compose Email</a>
                            </button>
                        </div>
                        <div class=" py-2 border-bottom">
                            <a style="color:black" href="#Mails" onclick="emailContainer()">Mails</a>
                            <a style="color:black" class="mx-3" href="#Drafts" onclick="draftsContainer()">Drafts</a>
                            <a style="color:black" href="#Scheduled" onclick="scheduledContainer()">Scheduled</a>
                        </div>
                        <div class=" text-center  my-4">

                            <div class="" id="emailData">
                                Mails Not found.
                            </div>
                            <div class="d-none" id="draftsData">
                                Drafts Not found.
                            </div>
                            <div class="d-none" id="schedileData">
                                Scheduled Not found.
                            </div>
                        </div>
                    </div>

                    {{-- Invited Meetings Activities container --}}
                    <div style="" class="row info-container my-3" id="invitedMeetings">
                        <div class=" me-3 border-bottom ">
                            <h5 style="color:black">Invited Meetings</h5>

                        </div>
                        <div class="my-4">
                            <span style="font-size:15px">No records found.</span>
                        </div>
                    </div>

                    {{-- Campaigns container --}}
                    <div style="" class="row info-container my-3" id="Campaigns">
                        <div class=" me-3 border-bottom">
                            <h5 style="color:black">Campaigns</h5>

                        </div>
                        <div class="my-4">
                            <span style="font-size:15px">No records found</span>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class="ms-2 rounded-2" data-bs-toggle="modal"
                                data-bs-target="#campaignsModalTop">
                                Add Campaigns
                            </button>
                        </div>
                    </div>

                    {{-- Social container --}}
                    <div style="" class="row social-container my-2" id="Social">
                        <div class=" me-3 border-bottom mt-3">
                            <h5 style="color:black" class="ms-4">Social</h5>
                        </div>
                        <div class="row">
                            <div style="padding:0px; height:200px; background-color:#fdf0f0; border:1px solid rgba(184, 182, 182, 0.703)"
                                class=" col-md-4 ">
                                <div style="border-bottom: 1px solid rgba(184, 182, 182, 0.703);">
                                    <button class="text-start w-100 socialBtn ps-3">
                                        <a href="">
                                            <i style="color: rgb(134, 133, 133)"
                                                class="fa-brands fa-square-twitter pe-2"></i>
                                            <span style="color: rgb(181, 180, 180)">Associate Twitter</span>
                                        </a>
                                    </button>
                                </div>
                                <div style="border-bottom: 1px solid rgba(184, 182, 182, 0.703);">
                                    <button class="text-start w-100 socialBtn ps-3">
                                        <a href="">
                                            <i style="color: rgb(134, 133, 133)" class="fa-brands fa-facebook pe-2"></i>
                                            <span style="color: rgb(181, 180, 180)">Associate Facebook</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div style="height:200px" class="col-md-8 d-flex justify-content-center align-items-center">
                                <div>
                                    <div class="w-100 text-center"><i class="fa-solid fa-user-gear"
                                            style="color: #949494; font-size:5rem"></i></div>
                                    <small>You cannot search a profile in Facebook. This has to be associated from the
                                        Social Tab.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Zoho Desk container --}}
                    <div style="" class="row info-container my-3" id="zohoDesk">
                        <div class=" me-3 border-bottom ">
                            <h5 style="color:black">Zoho Desk</h5>

                        </div>
                        <div class="my-4">
                            <span style="font-size:15px">No records found</span>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class="ms-2 rounded-2">
                                New Ticket
                            </button>
                        </div>
                    </div>

                    {{-- Zoho Survey container --}}
                    <div style="" class="row info-container my-3" id="zohoSurvey">
                        <div class=" me-3 border-bottom ">
                            <h5 style="color:black">Zoho Survey</h5>

                        </div>
                        <div class="my-4">
                            <span style="font-size:15px">No records found</span>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class="ms-2 rounded-2">
                                Create Survey
                            </button>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class="ms-2 rounded-2">
                                Send Survey
                            </button>
                            <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class="ms-2 rounded-2">
                                Take Survey
                            </button>
                        </div>
                    </div>

                    {{-- Visits - Zoho SalesIQ status container --}}
                    <div style="" class="row info-container my-3" id="VisitsSalesIQ">
                        <div class="d-flex justify-content-between align-items-center me-3 border-bottom">
                            <h5 style="color:black">Visits - Zoho SalesIQ</h5>
                            {{-- <button style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                name="node" id="for-node" class=" rounded-2">
                                ddddd
                            </button> --}}
                            <select style="border: 1px solid #5a8dee; color:#5a8dee; backcround-color:#5a8eee8a"
                                class=" rounded-2" name="addNew" id="addNew">
                                <option value="Add New">All Accounts</option>
                                <option value="Add New">Portal3267</option>
                            </select>
                        </div>
                        <div class=" text-center  my-4">
                            No records found.
                        </div>
                    </div>

                    {{-- footer this scroll container --}}
                    <div style="background-color: #fff; margin-bottom:150px"
                        class="d-flex justify-content-between py-3 px-4">
                        <div>
                            <button class="footerBtn">Add Related List</button>
                        </div>
                        <div>
                            <span>Record detail page views :</span>
                            <button class="footerBtn-2 ms-2">
                                Create a custom record page
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Timeline container --}}
                <div style="margin-bottom: 150px" class="d-none" id="timelineContainer">
                    {{-- Products container --}}
                    <div style="" class="row info-container my-3" id="Products">
                        <div class=" me-3 border-bottom ">
                            <h5 style="color:black">Upcoming Actions</h5>

                        </div>
                        <div class="py-4 border-bottom">
                            <span>No upcoming actions</span>
                        </div>
                    </div>
                    {{-- History container --}}
                    <div style="" class="row info-container my-3" id="Products">
                        <div class=" me-3">
                            <h5 style="color:black">History</h5>

                        </div>
                        <div class="py-4 ">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Attachments file upload Modal -->
    <div class="modal modal-top fade" id="attachmentsModalTop" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Attach File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div style="border:1px dashed rgb(158, 169, 158);" class="file-drop-area">
                        <span class="fake-btn">Choose files</span>
                        <span class="file-msg">or drag and drop files here</span>
                        <input class="file-input" type="file" >
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Products Modal -->
    <div class="modal modal-top fade " id="productModalTop" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Add Products to Contacts : Christopher Maclead (Sample)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="table-wrapper ">
                        @include('Deals.DealsPages.deals_add_product')
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!--  Add Products Modal end -->

    <!-- Add Campaigns Modal -->
    <div class="modal modal-top fade " id="campaignsModalTop" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Add Products to Lead : Christopher Maclead (Sample)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="table-wrapper ">
                        @include('Leads.LeadsPages.add_campaigns_list')
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <!--  Add Campaigns Modal end -->

     <!-- activities file upload Modal -->
     <div class="modal modal-top fade" id="activitiesTaskModalTop" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Attach File</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <input class="form-control DropFiles" type="file" id="formFile">
                    <img src="" alt="" id="modalimage">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    


    {{-- script for Attachments modal file type input  --}}
    <script>
        var $fileInput = $('.file-input');
        var $droparea = $('.file-drop-area');

        // highlight drag area
        $fileInput.on('dragenter focus click', function() {
        $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
        $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
        var filesCount = $(this)[0].files.length;
        var $textContainer = $(this).prev();

        if (filesCount === 1) {
            // if single file is selected, show file name
            var fileName = $(this).val().split('\\').pop();
            $textContainer.text(fileName);
        } else {
            // otherwise show number of files
            $textContainer.text(filesCount + ' files selected');
        }
        });
    </script>


    {{-- this script for top Overview Timeline scroll-container --}}
    <script>
        const overviewFunc = (tag) =>{
            let timeline = document.getElementById("timelineId");
            timeline.style.background = 'none';
            timeline.style.border = 'none';

            tag.style.background = '#0192f930';
            tag.style.border = '1px solid #0192f9a2';


            document.getElementById("timelineContainer").classList.add('d-none')
            document.getElementById("scroll-container").classList.remove("d-none");
        }
        const timelineFunc  = (tag) =>{
            let  overview = document.getElementById("overviewId");
            overview.style.background = 'none';
            overview.style.border = 'none';

            tag.style.background = '#0192f930';
            tag.style.border = '1px solid #0192f9a2';

            document.getElementById("scroll-container").classList.add("d-none");
            document.getElementById("timelineContainer").classList.remove('d-none')
        }
    </script>


    {{-- this script for mail container --}}
    <script>
        const emailContainer = () =>{
            document.getElementById("draftsData").classList.add("d-none");
            document.getElementById("schedileData").classList.add("d-none");
            document.getElementById("emailData").classList.remove("d-none");
        }
        const draftsContainer = () =>{
            document.getElementById("emailData").classList.add("d-none");
            document.getElementById("schedileData").classList.add("d-none");
            document.getElementById("draftsData").classList.remove("d-none");
        }
        const scheduledContainer = () =>{
            document.getElementById("emailData").classList.add("d-none");
            document.getElementById("draftsData").classList.add("d-none");
            document.getElementById("schedileData").classList.remove("d-none");
        }
    </script>

    <!-- for data tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
    <script type="text/javascript"
        src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js">
    </script>
    <!-- for data tables end -->


</body>

</html>