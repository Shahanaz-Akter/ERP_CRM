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
        
        textarea:focus{
            border: none;
            box-shadow: 0px 1px 1px rgb(17, 0, 255) inset, 0px 0px 8px rgb(0, 4, 255);
        }

        .dropdown-size{
            width:40px;
        }
        .down-icon{
            height: 20px;
        }
        .del-icon{
            display: none;
            color: gray;
        }
        .show-icon:hover .del-icon{
            display:block;
            display: inline;
        }
        .del-icon:hover{
            color: rgba(255, 0, 0, 0.692);
        }
        .color-box{
            position: absolute;
            background-color: white;
            width: 250px;
            height: 180px;
            top:90%;
            left: 15%;
            z-index: 1;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        }

        .color-box::before {
            content: "";
            position: absolute;
            height: 150px;
            top:-100%;
            left:5%;
            z-index: 1;
            border-top: 0px solid transparent;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 10px solid white;
        }
        .more-color-button{
            width: 80%; 
            border:none; 
            background:#436de188;
            margin: 5px 10px;
            border-radius: 10px
        }
        hr{
            margin: 0px
        }
        
        
        </style>

</head>

<body class="bg-white" style="color:black;">

    @include('components.navbar')
    <!-- Layout wrapper -->
    <div>
        <div class="d-flex align-content-center flex-wrap mx-3 mt-3">
            <a href="{{ url('/leads') }}" class="fs-4 "><i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
            <h5 class=" mx-4 pt-1">Manage Tags</h5>
            <p><span class="badge bg-secondary  pt-2">Leads </span></p>
        </div>



        <p class="ms-5">Tags are keywords that help you categorize your records based on their characteristics. Tags help you sort your data and find it easily when you need it.</p>
        
        <div class="px-3 mx-4">

            <div style="height: 65px" class="d-flex justify-content-between">
                <input onkeyup="searchTable(this)" class="border border-dark border-2 rounded-3 px-2" style="height:35px" id="myInput" placeholder="Search  by mail" type="text" >
                <div class="text-end">
                    <button type="button" id="table-top-btn" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">New Tag</button>
                    <p >Tags used : 1 / 200</p>
                </div>
            </div>

            <div class="border rounded-2 ">
                <table>
                    <thead>
                        <tr>
                            <th style="width:15%">Tag Color</th>
                            <th style="width:25%">Tag Name</th>
                            <th style="width:60%">Last Modified</th>
                        </tr>
                    </thead>
                    
                    <tbody id="myTable">
                        <tr >
                            <td class="position-relative">
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1 ms-3 dropdown-size" onclick="setColor(this)" id="dropdown-1">
                                    {{-- <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i> --}}
                                    <i class="fa-solid fa-ban fs-5" id="none-color"></i>
                                    <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5 d-none drop-set-color" id="drop-icon"></i>
                                    <i class="fa-solid fa-sort-down down-icon" ></i>
                                </div>
                                <div class="rounded-2 d-none color-box" id="color1-box1">
                                    <h5 class=" text-center mt-2">Choose Color</h5> 
                                    <hr>
                                    <div class="text-center color-icons py-2 " id="">
                                        <i class="fa-solid fa-ban fs-5" onclick="noneColor(this)"></i>
                                        <i style="color:#e52b50" class="fa-sharp fa-solid fa-circle fs-5 t1" onclick="addColor(this)"></i>
                                        <i style="color:#9966cc" class="fa-sharp fa-solid fa-circle fs-5 t2" onclick="addColor(this)"></i>
                                        <i style="color:#a4c639" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#008000" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#00ffff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#b2beb5" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#ffe135" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i><br>
                                        <i style="color:#6699cc" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#fb607f" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#cd7f32" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#a67b5b" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#0070ff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#013220" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#560319" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                    </div><hr>
                                    <div class="text-center mt-2">
                                        <button class="more-color-button" onclick="setMoreColor(this)">Set</button>
                                        <input class="form-control" type="color" value="#666EE8" id="html5-color-input" />
                                    </div>
                                
                                </div>
                            </td>
                            <td class="ps-5 show-icon" id="d-1-r-2">
                                <span style="background-color: #4B4B4B" class="badge">doe</span>
                                <span><i class="fa-solid fa-trash pe-2 del-icon" id="delete_1"></i></span>
                            </td>
                            <td>john@example.com</td>
                        </tr>
                        <tr >
                            <td class="position-relative">
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1 ms-3 dropdown-size" onclick="setColor(this)" id="dropdown-1">
                                    {{-- <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i> --}}
                                    <i class="fa-solid fa-ban fs-5" id="none-color"></i>
                                    <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5 d-none drop-set-color" id="drop-icon"></i>
                                    <i class="fa-solid fa-sort-down down-icon" ></i>
                                </div>
                                <div class="rounded-2 d-none color-box" id="color2-box2">
                                    <h5 class=" text-center mt-2">Choose Color</h5> 
                                    <hr>
                                    <div class="text-center color-icons py-2 " id="">
                                        <i class="fa-solid fa-ban fs-5" onclick="noneColor(this)"></i>
                                        <i style="color:#e52b50" class="fa-sharp fa-solid fa-circle fs-5 t1" onclick="addColor(this)"></i>
                                        <i style="color:#9966cc" class="fa-sharp fa-solid fa-circle fs-5 t2" onclick="addColor(this)"></i>
                                        <i style="color:#a4c639" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#008000" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#00ffff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#b2beb5" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#ffe135" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i><br>
                                        <i style="color:#6699cc" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#fb607f" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#cd7f32" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#a67b5b" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#0070ff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#013220" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#560319" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                    </div><hr>
                                    <div class="text-center mt-2">
                                        <button class="more-color-button" onclick="setMoreColor(this)">Set</button>
                                        <input class="form-control" type="color" value="#666EE8" id="html5-color-input" />
                                    </div>
                                
                                </div>
                            </td>
                            <td class="ps-5 show-icon" id="d-1-r-2"    >
                                <span style="background-color: #4B4B4B" class="badge">Moe</span>
                                <span><i class="fa-solid fa-trash px-2 del-icon" id="delete_1"></i></span>
                            </td>
                            <td>mary@mail.com</td>
                        </tr>
                        <tr>
                            <td class="position-relative">
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1 ms-3 dropdown-size" onclick="setColor(this)" id="dropdown-1">
                                    {{-- <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i> --}}
                                    <i class="fa-solid fa-ban fs-5" id="none-color"></i>
                                    <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5 d-none drop-set-color" id="drop-icon"></i>
                                    <i class="fa-solid fa-sort-down down-icon" ></i>
                                </div>
                                <div class="rounded-2 d-none color-box" id="">
                                    <h5 class=" text-center mt-2">Choose Color</h5> 
                                    <hr>
                                    <div class="text-center color-icons py-2 " id="">
                                        <i class="fa-solid fa-ban fs-5" onclick="noneColor(this)"></i>
                                        <i style="color:#e52b50" class="fa-sharp fa-solid fa-circle fs-5 t1" onclick="addColor(this)"></i>
                                        <i style="color:#9966cc" class="fa-sharp fa-solid fa-circle fs-5 t2" onclick="addColor(this)"></i>
                                        <i style="color:#a4c639" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#008000" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#00ffff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#b2beb5" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#ffe135" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i><br>
                                        <i style="color:#6699cc" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#fb607f" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#cd7f32" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#a67b5b" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#0070ff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#013220" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#560319" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                    </div><hr>
                                    <div class="text-center mt-2">
                                        <button class="more-color-button" onclick="setMoreColor(this)">Set</button>
                                        <input class="form-control" type="color" value="#666EE8" id="html5-color-input" />
                                    </div>
                                
                                </div>
                            </td>
                            <td class="ps-5 show-icon">
                                <span style="background-color: #4B4B4B" class="badge">Dooley</span>
                                <span><i class="fa-solid fa-trash px-2 del-icon"></i></span>
                            </td>
                            <td>july@greatstuff.com</td>
                        </tr>
                        <tr>
                            <td class="position-relative">
                                <div class="form-check form-switch rounded-pill border d-flex justify-content-between align-items-center px-1 ms-3 dropdown-size" onclick="setColor(this)" id="dropdown-1">
                                    {{-- <i class="fa-solid fa-ban bg-dark text-dark rounded-pill"></i> --}}
                                    <i class="fa-solid fa-ban fs-5" id="none-color"></i>
                                    <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5 d-none drop-set-color" id="drop-icon"></i>
                                    <i class="fa-solid fa-sort-down down-icon" ></i>
                                </div>
                                <div class="rounded-2 d-none color-box" id="box-1">
                                    <h5 class=" text-center mt-2">Choose Color</h5> 
                                    <hr>
                                    <div class="text-center color-icons py-2 " id="">
                                        <i class="fa-solid fa-ban fs-5" onclick="noneColor(this)"></i>
                                        <i style="color:#e52b50" class="fa-sharp fa-solid fa-circle fs-5 t1" onclick="addColor(this)"></i>
                                        <i style="color:#9966cc" class="fa-sharp fa-solid fa-circle fs-5 t2" onclick="addColor(this)"></i>
                                        <i style="color:#a4c639" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#008000" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#00ffff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#b2beb5" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#ffe135" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i><br>
                                        <i style="color:#6699cc" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#fb607f" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#cd7f32" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#a67b5b" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#0070ff" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#013220" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#560319" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                        <i style="color:#e48400" class="fa-sharp fa-solid fa-circle fs-5" onclick="addColor(this)"></i>
                                    </div><hr>
                                    <div class="text-center mt-2">
                                        <button class="more-color-button" onclick="setMoreColor(this)">Set</button>
                                        <input class="form-control" type="color" value="#666EE8" id="html5-color-input" />
                                    </div>
                                
                                </div>
                            </td>
                            <td class="ps-5 show-icon">
                                <span style="background-color: #4B4B4B" class="badge">Ravendale</span>
                                <span><i class="fa-solid fa-trash px-2 del-icon"></i></span>
                            </td>
                            <td>a_r@test.com</td>
                        </tr>
                    </tbody>
                </table>

                {{-- When data don't show  --}}
                <div id="table_text" class="text-center my-4 d-none">
                    <p>There are currently no available Tags. Add new Tags by clicking the button below.</p>
                    <button type="button" id="table-in-btn" class="btn btn-primary fw-bold " data-bs-toggle="modal" data-bs-target="#exampleModal">New Tag</button>
                </div>

                
            </div>


        </div>


          
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Tags</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input class="w-100 p-1 fs-5 m-2"  type="text" name="name" placeholder="Name" id="">
                  <input class="w-100 p-1 fs-5 m-2"  type="text" name="email" placeholder="Email" id="">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
    </div>

    <script>
         const setColor = (tag)  => {
            let paraent = tag.parentElement;
            let child = paraent.children[1];
            child.classList.toggle('d-none');

            let colorBox = document.querySelectorAll('.color-box');
            let rr = Array.from(colorBox);
            rr.forEach(ele=>{
                if(ele==child){

                }else{
                    ele.classList.add('d-none');
                }
            });

        }
        
        const addColor = (tag) => {
            let p1 = tag.parentElement;
            let upperParent = p1.parentElement.parentElement;
            let colorbox = upperParent.children[1];
            let noneColor = upperParent.children[0].children[0];
            colorbox.classList.add('d-none');
            noneColor.classList.add('d-none');
            let firtstChild = upperParent.children[0].children[1];
            firtstChild.classList.remove("d-none");
            firtstChild.style.color= tag.style.color;

            upperParent = upperParent.parentElement
            let secondCol = upperParent.children[1].children[0]
            secondCol.style.background = tag.style.color
        }
        const noneColor = (tag) => {
            let p1 = tag.parentElement.parentElement;
            p1.classList.add('d-none');
            let upperParent = p1.parentElement;
            let noneColor = upperParent.children[0].children[0];
            noneColor.classList.remove("d-none");
            let firtstChild = upperParent.children[0].children[1];
            firtstChild.classList.add("d-none");

            upperParent = upperParent.parentElement;
            let secondCol = upperParent.children[1].children[0];
            secondCol.style.background = '#4B4B4B';
        }

      
        const setMoreColor = (tag) =>{
            let colorValue = tag.parentElement.children[1].value;
            let p1 = tag.parentElement.parentElement;
            let noneColor = p1.parentElement.children[0].children[0];
            let newColor = p1.parentElement.children[0].children[1];
            let paraent = tag.parentElement.parentElement;
            let trTag = p1.parentElement.parentElement;
            let secondCol  = trTag.children[1].children[0]
                paraent.classList.add('d-none');
                noneColor.classList.add('d-none');
                newColor.classList.remove("d-none");
                newColor.style.color= colorValue;
                secondCol.style.background = colorValue;
        }
       
    </script>

        <script>
            const searchTable = (tag) => {
                let searchText = tag.value.toLowerCase()

                let manageTable = document.getElementById('myTable');
                let rowLength = manageTable.rows.length;

                for (let i = 0; i < rowLength; i++) 
                {
                    let allData = manageTable.rows.item(i).cells;
                    let allRow = manageTable.rows[i];
                    let column_2 = allRow.children[1].children[0];
                    let column_2_text = column_2.innerText.toLowerCase()
                    
                    if (column_2_text.includes(searchText)) 
                            {
                                manageTable.rows[i].classList.remove('d-none');
                            } 
                    else{
                                    manageTable.rows[i].classList.add('d-none');
                            
                        }     
                }
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        

   
</body>

</html>