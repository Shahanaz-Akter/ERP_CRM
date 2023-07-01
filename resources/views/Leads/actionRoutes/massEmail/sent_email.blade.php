<!DOCTYPE html>

<!-- beautify ignore:start -->
<html lang="en"  class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

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
    <link rel="stylesheet"
         href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>



<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        textarea:focus{
            border: none;
            box-shadow: 0px 1px 1px rgb(17, 0, 255) inset, 0px 0px 8px rgb(0, 4, 255);
        }

        #dropdown-1{
            width:20%;
        }
        #mass-email-box{
            height: 600px;
            background-color: white;
            padding: 15px;
        }
        #down-icon{
            height: 20px;
        }
        
        
        </style>

</head>

<body class="" style="color:black; background-color:#f8eeec">

    @include('components.navbar')
    <!-- Layout wrapper -->
    <div>
        <div style="background-color:#fff" class="d-flex align-content-center flex-wrap pt-2">
                <a href="{{ url('/leads') }}" class="fs-4 ms-4"><i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
                <h5 class=" mx-4 pt-2">Mass Email</h5>
        </div>


        
        <div class="px-3 mx-4 mt-4 rounded-3" id="mass-email-box">
            {{-- @include('Leads.actionRoutes.manageTags.manage_tags_list') --}}

            <div class="d-flex justify-content-between">
                <div style="color:black" class="d-flex border border-2 rounded-pill p-1">
                    <a style="color:black; height:25px" class="p-2 fw-bolder py-0 Scheduled" href="{{url('/leads/mass-email')}}" id="scheduledId">Scheduled</a>
                    <a style="color:black; height:25px" class="p-2 mx-3 fw-bolder border rounded-pill py-0 Sent" href="" id="sentId">Sent</a>
                    <a style="color:black; height:25px" class="p-2 fw-bolder py-0 Stopped"  href="{{url('/leads/stopped-mass-email')}}" id="stoppedId">Stopped</a>
                </div>
                <div>
                    <button type="button" id="table-top-btn" class="btn btn-primary"><a class="text-white" href="{{url('/leads/new-mass-email')}}">Create Mass Email</a></button>
                </div>
            </div>
            
            <div>
                <p class="mt-1">Total Emails 0</p>
                <div class="border rounded-2">
                    <table>
                        <thead>
                        <tr>
                            <th style="width:15%">Tag Color</th>
                            <th style="width:25%">Tag Name</th>
                            <th style="width:60%">Last Modified</th>
                        </tr>
                        </thead>
                        
                        <tbody id="myTable" class="d-none">
                        <tr >
                            {{-- <td>John</td> --}}
                            <td>
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1" id="dropdown-1">
                                    <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i>
                                    <i class="fa-solid fa-sort-down"  id="down-icon"></i>
                                </div>
                            </td>
                            <td>
                                <span>
                                    <span><i class="fa-duotone fa-trash"></i></span>
                                    <span class="badge bg-secondary">doe</span>
                                </span>
                                </td>
                            <td>john@example.com</td>
                        </tr>
                        <tr >
                            <td>
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1" id="dropdown-1">
                                    <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i>
                                    <i class="fa-solid fa-sort-down"  id="down-icon"></i>
                                </div>
                            </td>
                            <td class="badge bg-secondary">Moe</td>
                            <td>mary@mail.com</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1" id="dropdown-1">
                                    <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i>
                                    <i class="fa-solid fa-sort-down"  id="down-icon"></i>
                                </div>
                            </td>
                            <td class="badge bg-secondary">Dooley</td>
                            <td>july@greatstuff.com</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1" id="dropdown-1">
                                    <i class="fa-solid fa-ban  text-dark "></i>
                                    <i class="fa-solid fa-sort-down"  id="down-icon"></i>
                                </div>
                            </td>
                            <td class="badge bg-secondary">Ravendale</td>
                            <td>a_r@test.com</td>
                        </tr>
                        </tbody>
                        </table>
                            <div id="table_text" class="text-center my-4 ">
                                <p class="text-muted fw-bolder">No records found</p>
                            </div>
                </div>
            </div>

        </div>

    </div>


    {{-- color dropdown menue bg color select js  --}}
    <script>
        const bgColorIs = (tag) => {
            // document.getElementById("color-select")
            $cValue = tag.value;
            console.log(tag.value);
            tag.style.backgroundColor = $cValue
        }
    </script>

        <script>
            const searchTable = (tag) => {
                $searchText = tag.value.toLowerCase()
                console.log("omar", $searchText);

                $oTable = document.getElementById('myTable');
                $rowLength = $oTable.rows.length;

                for ($i = 0; $i < $rowLength; $i++) {

                    $oCells = $oTable.rows.item($i).cells;
                    $oCellss = $oTable.rows[$i];
                    console.log("test  11", $oCellss);
                    $cellLength = $oCells.length;

                    for ($j = 0; $j < $cellLength; $j++) {
                        $cellVal = $oCells.item($j).innerHTML.toLowerCase();
                        if ($cellVal.includes($searchText)) {
                            console.log("test2", $oCells.item($j), $cellVal);
                            $oTable.rows[$i].classList.remove('d-none');
                        } else {
                            $oTable.rows[$i].classList.add('d-none');

                        }
                    }
                }
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        

   
</body>

</html>