<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en" style="overflow:hidden;" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>CRM | Leads</title>
    
    
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
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.6.0/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css"
    href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css"
    rel="stylesheet" />


{{-- css link for download data from datatable --}}
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css"> --}}



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
    .info-container {
        background-color: white;
        margin: 0 1rem;
        border-radius: 10px;
        padding: 20px 25px;
        font-size: 17px;
    }
    .leftText{
        color: #000;
        font-size: 13px;
        font-weight: 600;
    }
    .textInputs{
        width: 350px;
    }
    .textInputs:focus{
        color: #000;
    }
    .dolar-icon-div{
        position: relative;
        
    }
    .dolarIcon {
    position: absolute;
    left: 22px;
    top: 7px;
    }
    .twitterIcon {
        position: absolute;
        left: 22px;
        top: 8px;
    }
    .twitterInput{
        padding-left: 30px
    }
    .Description-box{
        max-width: 70%;
        height: 30px;
        transition: 1s
    }
    .Description-box:focus{
        height: 80px;
    }

    /* Image  preview  css  */
    .avatar-upload {
	 position: relative;
	 max-width: 205px;
    }
    .avatar-upload .avatar-edit {
        position: absolute;
        left: 55px;
        z-index: 1;
        top: 0;
    }
    .avatar-upload .avatar-edit input {
        display: none;
    }
    .avatar-upload .avatar-edit input + label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #f1f1f1;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
    }
    .avatar-upload .avatar-edit input + label:hover {
        background: #dcdbdb;
        border-color: #d6d6d6;
    }
    .avatar-upload .avatar-edit input + label:after {
        content: "\f040";
        font-family: 'FontAwesome';
        color: #141313;
        position: absolute;
        top: 9px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    }
    .avatar-upload .avatar-preview {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #f8f8f8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .avatar-upload .avatar-preview > div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
        
</style>
</head>

<body>

    @include('components.navbar')

    <div  style="background-color:#fff; height:100vh; width:100%;overflow:scroll;">
        <div style="width:100%"
            class="border-bottom d-flex justify-content-between align-items-center py-3 ps-3 ">
            <h4 style="color:black" class=" mx-4 pt-2">Edit Lead</h4>
            <div class="pe-5">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="button" class="btn btn-secondary mx-3">Save And Now</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>

        {{-- leads Image --}}
        <div style="padding-left: 40px" class="pt-4">
            <span style="color: #000;" class="fw-bold">Lead Image</span><br>  <br>



            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419408&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd50ad7ed1e2bd4c53d8ef278a348991b068a0f7bc76c9c2d91006652c0e2c6f41ce5fe17fd5afa53538c6110ed66c7a1f06">
                    </div>
                </div>
            </div>

        </div>

        {{-- Lead Information container --}}
        <div class="info-container pt-5">
            <h5 style="color:black">Lead Information</h5>
            <div class="row mx-4">
                <div class=" col-xl-6 col-lg-6 col-md-6">    
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Lead Owner</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="batman020120130114" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">First Name</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="Christopher" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Title</label>
                        <div class="col-md-9">
                            <input class="form-control textInputs" type="text" value="VP Accounting" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Phone</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="555-555-5555" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Mobile</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="555-555-5555" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Lead Source</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="Cold Call" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Industry</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="Service Provider" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Annual Revenue</label>
                        <div class="col-md-9 dolar-icon-div">
                            <span class="dolarIcon"><i class="fa-solid fa-dollar-sign"></i></span>
                            <input class="form-control textInputs ps-4" type="text" value="850,000.00" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Email Opt Out</label>
                        <div class="col-md-9">
                          <input class=" " type="checkbox" id="html5-text-input" />
                        </div>
                    </div>   
                </div>


                <div class=" col-xl-6 col-lg-6 col-md-6">
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Company</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="Rangoni Of Florence" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Lead Name</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="Mr. Christopher Maclead (Sample)" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Email</label>
                        <div class="col-md-9">
                            <input class="form-control textInputs" type="text" value="christopher-maclead@gmail.com" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Fax</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Website</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="http://www.rangoniofflorence.com" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Lead Status</label>
                        <div class="col-md-9">
                            <select id="select2Basic" class="select2 form-select textInputs" data-allow-clear="true">
                                <option value="None">-None-</option>
                                <option value="AC">Attempted to Contact</option>
                                <option value="CF">Contact in Future</option>
                                <option value="Contacted">Contacted</option>
                                <option value="JL">Junk Lead</option>
                                <option value="LL" selected>Lost Lead</option>
                                <option value="NC">Not Contacted</option>
                                <option value="PQ">Pre-Qualified</option>
                                <option value="NQ">Not Qualified</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">No. of Employees</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Rating</label>
                        <div class="col-md-9 dolar-icon-div">
                            <select id="select2Basic" class="select2 form-select textInputs" data-allow-clear="true">
                                <option value="None">-None-</option>
                                <option value="Acquired">Acquired</option>
                                <option value="CF">Active</option>
                                <option value="MF">Market Failed</option>
                                <option value="PC">Project Cancelled</option>
                                <option value="SD">Shut Down</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Skype ID</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="christopher-maclead" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Secondary Email</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Twitter</label>
                        <div class="col-md-9 dolar-icon-div">
                            <span class="twitterIcon"><i class="fa-solid fa-at"></i></span>
                            <input class="form-control textInputs twitterInput" type="text" value="christophermaclead_sample" id="html5-text-input" />
                        </div>
                    </div>  
                </div>

                {{-- <div class="col-xl-6 col-lg-6 col-md-2 d-flex">
                    <div class="me-5 text-end">
                        <span class="d-block">Company</span>
                        <span class="d-block line-space">Lead Name</span>
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
                </div> --}}
            </div>


            {{-- Address Information --}}
            <h5 style="color:black" class="pt-5">Address Information</h5>
            <div class="row mx-4">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Street</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="37275 St Rt 17m M" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">State</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="NY" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Country</label>
                        <div class="col-md-9">
                            <input class="form-control textInputs" type="text" value="United States" id="html5-text-input" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">City</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="Middle Island" id="html5-text-input" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label style=" " for="html5-text-input" class="col-md-3 col-form-label text-end leftText">Zip Code</label>
                        <div class="col-md-9">
                          <input class="form-control textInputs" type="text" value="11953" id="html5-text-input" />
                        </div>
                    </div>
                </div>
            </div>


            {{-- Visit Summary information --}}
            <h5 style="color:black">Description Information</h5>
            <div class="mb-5 pb-3">
                <div class="mb-3 row">
                    <label style=" " for="html5-text-input" class="col-md-2 col-form-label text-end leftText">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control Description-box" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    
    {{-- script for profile image preview --}}
    <script>
        function readURL(input) {
         if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log("reader", reader);
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
        }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>

</body>

</html>