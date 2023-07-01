<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="../../assets/" data-template="vertical-menu-template-semi-dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> Horizontal Layouts - Forms | Frest - Bootstrap Admin Template</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords"
        content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css" class="template-customizer-core-css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-semi-dark.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/select2/select2.css') }}" />

    <script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('/assets/js/config.js') }}"></script>
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>


</head>

<body>

    @include('components.navbar')
    <!-- Content -->

    <div class="container-xxl  container-p-y">
        <!-- Multi Column with Form Separator -->
        <div class="d-flex">
            <h5 class="">Create Deal</h5>

        </div>
        <div class="row ">
            <!-- Form Label Alignment -->
            <div class="col-md-6 me-10">
                <div class=" mb-4">


                    <h6 class="mb-b fw-normal">Deal Information
                    </h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Deal Owner</label>
                        <div class="col-sm-9">
                            <select class="form-select select2">
                                <option value="null" selected>Select</option>
                                <option value="1">
                                    s
                                </option>
                                <option value="2">
                                    sff
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">First Name</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-3 row g-0">
                                <div class="col-3">
                                    <select class="form-select select2 ">
                                        <option value="null" selected>None</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                    </select>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control " placeholder=""
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-email">Deal Source</label>
                        <div class="col-sm-9">
                            <select class="form-select select2">
                                <option value="null" selected>Select</option>
                                <option value="null">None</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="Cold Call">Cold Call</option>
                                <option value="Employee Referral">Employee Referral</option>
                                <option value="External Referral">External Referral</option>
                                <option value="Online Store">Online Store</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Google+">Google+</option>
                                <option value="Public Relations">Public Relations</option>
                                <option value="Sales Email Alias">Sales Email Alias</option>
                                <option value="Seminar Partner">Seminar Partner</option>
                                <option value="Internal Seminar">Internal Seminar</option>
                                <option value="Trade Show">Trade Show</option>
                                <option value="Web Download">Web Download</option>
                                <option value="Web Research">Web Research</option>
                                <option value="Chat">Chat</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-email">Industry</label>
                        <div class="col-sm-9">
                            <select class="form-select select2">
                                <option value="null" selected>Select</option>
                                <option value="null">None</option>
                                <option value="ASP(Application Service Provider)">ASP(Application Service Provider)
                                </option>
                                <option value="Data/Telecom OEM">Data/Telecom OEM</option>
                                <option value="ERP(Enterprise Resource Planning)">ERP(Enterprise Resource Planning)
                                </option>
                                <option value="Government/Military">Government/Military</option>
                                <option value="Large Enterprise">Large Enterprise</option>
                                <option value="Management ISV">Management ISV</option>
                                <option value="Network Equipment Enterprise">Network Equipment Enterprise</option>
                                <option value="Non management ISV">Non management ISV</option>
                                <option value="Optical Networking">Optical Networking</option>
                                <option value="Service Provider">Service Provider</option>
                                <option value="Small/Medium Enterprise">Small/Medium Enterprise</option>
                                <option value="Storage Equipment">Storage Equipment</option>
                                <option value="Storage Service Provider">Storage Service Provider</option>
                                <option value="System Integrator">System Integrator</option>
                                <option value="Wireless Industry">Wireless Industry</option>
                                <option value="ERP">ERP</option>
                                <option value="Management ISV">Management ISV</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-password">Annual
                            Revenue</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-password">Email Opt
                            Out</label>
                        <div class="col-sm-9 ">
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="checkbox" />
                            </div>
                        </div>
                    </div>
                    <hr class="my-4 mx-n4" />
                    <h6 class="mb-3 fw-normal">2. Personal Info</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="alignment-full-name" class="form-control" placeholder="John Doe" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-country">Country</label>
                        <div class="col-sm-9">
                            <select id="alignment-country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 select2-primary">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-language">Language</label>
                        <div class="col-sm-9">
                            <select id="alignment-language" class="select2 form-select" multiple>
                                <option value="en" selected>English</option>
                                <option value="fr" selected>French</option>
                                <option value="de">German</option>
                                <option value="pt">Portuguese</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">Birth
                            Date</label>
                        <div class="col-sm-9">
                            <input type="text" id="alignment-birthdate" class="form-control dob-picker"
                                placeholder="YYYY-MM-DD" />
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label text-sm-end" for="alignment-phone">Phone No</label>
                        <div class="col-sm-9">
                            <input type="text" id="alignment-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" aria-label="658 799 8941" />
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary me-sm-2 me-1">Submit</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- Form Label Alignment -->
            <div class="col-md-6">
                <div class=" mb-4">
                    {{-- <h5 class="card-header">Form Label Alignment</h5> --}}
                    <form class="card-body">
                        <h6 class="mb-b fw-normal">1. Account Details</h6>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Username</label>
                            <div class="col-sm-9">
                                <input type="text" id="alignment-username" class="form-control"
                                    placeholder="john.doe" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-email">Email</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="alignment-email" class="form-control" placeholder="john.doe"
                                        aria-label="john.doe" aria-describedby="alignment-email2" />
                                    <span class="input-group-text" id="alignment-email2">@example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 form-password-toggle">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-password">Password</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <input type="password" id="alignment-password" class="form-control"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="alignment-password2" />
                                    <span class="input-group-text cursor-pointer" id="alignment-password2"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 mx-n4" />
                        <h6 class="mb-3 fw-normal">2. Personal Info</h6>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Full
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="alignment-full-name" class="form-control"
                                    placeholder="John Doe" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-country">Country</label>
                            <div class="col-sm-9">
                                <select id="alignment-country" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 select2-primary">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-language">Language</label>
                            <div class="col-sm-9">
                                <select id="alignment-language" class="select2 form-select" multiple>
                                    <option value="en" selected>English</option>
                                    <option value="fr" selected>French</option>
                                    <option value="de">German</option>
                                    <option value="pt">Portuguese</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-birthdate">Birth
                                Date</label>
                            <div class="col-sm-9">
                                <input type="text" id="alignment-birthdate" class="form-control dob-picker"
                                    placeholder="YYYY-MM-DD" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="alignment-phone">Phone No</label>
                            <div class="col-sm-9">
                                <input type="text" id="alignment-phone" class="form-control phone-mask"
                                    placeholder="658 799 8941" aria-label="658 799 8941" />
                            </div>
                        </div>
                        <div class="pt-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-2 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('/assets/vendor/libs/hammer/hammer.js') }}"></script>


    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/select2/select2.js') }}"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/form-layouts.js"></script>
    <script>
        $(".select2").select2();
    </script>
</body>

</html>