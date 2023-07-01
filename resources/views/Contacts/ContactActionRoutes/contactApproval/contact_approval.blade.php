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
     <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

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
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />



    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>



    {{-- for multiselect dropdown --}}
    <link rel="stylesheet" href="{{ asset('/assets/css/virtual-select.min.css') }}" />
    

    <style>
        *,*:after,*:before{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        }
        body{
            font-family: arial;
            font-size: 16px;
            margin: 0;
            background: #02bfc5;
            min-height: 100vh;
        }

        .multi_select_box{
            width: 400px;
            margin: 80px auto;
        }
        .multi_select_box select{
            width: 100%;
        }
        .multi_select_box button{
            background-color: darkblue !important;
            color: #fff !important;
            padding: 15px 25px;
        } 


        .textInput{
            width: 320px;
            border: none;
            border: 2px solid  rgb(213, 213, 213);
            padding: 10px  15px;
            border-radius: 6px;
            margin: 10px 30px 5px 30px;
            font-size: 18px;
        }

 

        /* User dropdown */
        .dropdown {
            width: 320px
        }
        #selectField{
            width: 100%;
            padding: 10px 15px;
            margin: 10px 30px 10px 30px;
            box-sizing: border-box;
            background: rgba(255,255,255,0.7);
            border-radius: 6px;
            border: 2px solid rgb(213, 213, 213);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }
        #selectField p{
            margin-bottom: 0px;
        }
        #selectField img{
            width: 15px;
        }
        #list{
            widows: 100%;
            background-color: rgba(255,255,255,0.7);
            overflow: hidden;
            background-color: rgba(205, 203, 203, 0.719);
            padding-left: 0px;
            border-radius: 5px;
            margin-left: 32px;
        }
        .list_option{
            widows: 100%;
            padding: 5px 0 5px 75px;
            list-style: none;
            cursor: pointer;
            box-sizing: border-box;
            position: relative;
        }
        .list_option:hover{
            background-color: rgba(253, 253, 253, 0.719)
        }
        .list_option img{
            width: 50px;
            height: 50px;
            position: absolute;
            top: 6px;
            left: 15px;
        }
        .list_option div p{
            margin-bottom: 1px
        }
        .selectedDesign{
            background-color: rgba(171, 171, 171, 0.593);
            padding: 2px 4px;
            border-radius: 5px;
        }
        .hide{
            visibility: hidden;
        }
        .rotate{
            transform: rotate(180deg);
        }
        .option_style{
            background-color: rgb(233, 233, 233);
            padding: 3px 4px;
            margin: 3px 2px;
            border-radius: 3px;
        }
        .option_style i{
            padding: 0 3px;
            margin-left: 5px;
        }
    </style>




</head>

<body class="" style="color:black; background-color:#fff">

    @include('components.navbar')
    <!-- Layout wrapper -->
    <div>
        <div class="d-flex align-content-center flex-wrap border pt-2">
            <a href="{{ url('/contacts') }}" class="fs-4 ms-4"><i class="fa-sharp fa-solid fa-arrow-left"></i> </a>
            <h5 class="mx-4 pt-2">Contact Approval</h5>
            <i class="fa-solid fa-users mt-2"></i>
        </div>

        <div class=" p-3">
            <span class="fs-5 ms-5">Please approve the Contacts listed below.</span>
            <div class="row">
                <!-- Tagify -->
                <div class="col-12">
                    <div class="card mb-4 ">
                        <h5 class="card-header">Tagify</h5>
                        {{-- <div class="d-flex align-items-center"> --}}
                            <div>
                                <input class="textInput" type="text">
                            </div>
                            <div class="dropdown"> 
                                <div id="selectField">
                                    <p id="selectedText">Select User</p>
                                    <img src="{{asset('/assets/img/avatars/downArrow.png')}}" alt="" id="upDownArrow">
    
                                </div>
                                <ul id="list" style="width: 320px;" class="hide">
                                    <li class="list_option" onclick="thisOption(this)" >
                                        <img src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419407&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd5089eb6a3a218e8329c30db20f3d331566089afe58f9cc4ea6ebcc552bda6a8cd1f85ea1e02d560adc5895d37621e4a5b9" alt="">
                                        <div>
                                            <p>Ms. Carissa Kidman (Sample) 1</p>
                                            <p>carissa-kidman@yahoo.com</p>
                                        </div>
                                    </li>
                                    <li class="list_option" onclick="thisOption(this)">
                                        <img src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419407&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd5089eb6a3a218e8329c30db20f3d331566089afe58f9cc4ea6ebcc552bda6a8cd1f85ea1e02d560adc5895d37621e4a5b9" alt="">
                                        <div>
                                            <p>Ms. Carissa Kidman (Sample)  2</p>
                                            <p>carissa-kidman@yahoo.com</p>
                                        </div>
                                    </li>
                                    <li class="list_option" onclick="thisOption(this)">
                                        <img src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419407&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd5089eb6a3a218e8329c30db20f3d331566089afe58f9cc4ea6ebcc552bda6a8cd1f85ea1e02d560adc5895d37621e4a5b9" alt="">
                                        <div>
                                            <p>Ms. Carissa Kidman (Sample)  3</p>
                                            <p>carissa-kidman@yahoo.com</p>
                                        </div>
                                    </li>
                                </ul>
                              
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center border-top border-bottom py-4">
            <span>No data available</span>
        </div>

    </div>

    <script>
        let selectField = document.getElementById("selectField");
        let upDownArrow = document.getElementById("upDownArrow")
        let selectedText = document.getElementById("selectedText");
        let list_option = document.getElementsByClassName("list_option");
        let list = document.getElementById("list");
        let allValues = [];

        selectField.onclick = function(){
            list.classList.remove("hide");
            upDownArrow.classList.add("rotate");
        }
        window.addEventListener("click", (e) => {
        if (!e.target.children[2].children[1].classList.contains('hide')) {
            list.classList.add("hide");
            upDownArrow.classList.remove("rotate");
        }
      });

        const thisOption = (tag) =>{
            let seletedValue = tag.children[1].children[0].innerText;
            if(allValues.includes(seletedValue)){

            }else{
                allValues.push(seletedValue);
            }
            tag.dataset.u_index;
            deleteThis(tag)
        }

        const deleteThis = (tag) =>{
            selectedText.innerHTML = '';
            for (var i = 0; i < allValues.length; i++) {
                var disp = document.createElement("div");
                disp.classList.add("option_style")
                disp.innerHTML = allValues[i];
                selectedText.appendChild(disp);
                var del = document.createElement("i");
                del.classList.add('fa-solid')
                del.classList.add('fa-xmark')
                disp.appendChild(del);
                del.setAttribute('data-item-index', i);

                //set onclick fn for del button
                del.onclick = function() {
                    var itemIndex = this.getAttribute('data-item-index');
                    allValues.splice(itemIndex, 1);
                    selectedText.innerHTML = '';
                    allValues = allValues;
                    deleteThis(); 
                    // setEvent(tag) 
                }
            }
        }

    </script>






    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>


    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/tagify/tagify.js"></script>
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/libs/bloodhound/bloodhound.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/forms-selects.js"></script>
    <script src="../../assets/js/forms-tagify.js"></script>
    <script src="../../assets/js/forms-typeahead.js"></script>


   


</body>

</html>