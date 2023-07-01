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
        #mass-email-box{
            height: 100%;
            background-color: white;
            padding: 15px;
        }
        #Follow-up-email{
            height: 100%;
            background-color: white;
            padding: 15px;
        }
        </style>

</head>

<body class="" style="color:black; background-color:#f8eeec">

    @include('components.navbar')
    <!-- Layout wrapper -->
    <div>
        <div style="background-color:#fff"  class="d-flex justify-content-between py-2">
            <h5 class=" mx-4 pt-2">New Mass Email</h5>

            {{-- <div style="color:black" class="d-flex border border-2 rounded-pill p-1">
                <h5 class=" mx-4 pt-2">New Mass Email</h5>
            </div> --}}
            <div class="me-4">
                <button type="button" class="btn btn-secondary"><a style="color:white" href="{{url('/contacts/mass-email')}}">Cancel</a></button>
                <button type="button" class="btn btn-primary">Schedule</button>
            </div>
        </div>


        
        <div class="px-3 mx-4 mt-4 rounded-3" id="mass-email-box">
           <p class="fw-bold m-4">Email Details</p>
           <div>
            <div style="width:40%; margin-left:2rem">
                <table style="" class="w-75">
                    <tbody style="">
                        <tr >
                            <td style="" class="text-center">To</td>
                            <td style="" class="md-w-50 py-4" >
                                <select class="form-select border border-secondary" id="inputGroupSelect04" aria-label="Example select with button addon">
                                    <option selected >All Leads</option>
                                    <option value="1">Unread Leads</option>
                                    <option value="2">Today's Leads</option>
                                    <option value="3">Recently Leads</option>
                                    <option value="4">Recently Modified Leads</option>
                                    <option value="5">My Leads</option>
                                    <option value="6">Converted Leads</option>
                                    <option value="7">MyConverted Leads</option>
                                    <option value="8">Junk Leads</option>
                                    <option value="9">Not wualified Leads</option>
                                    <option value="10">Open Leads</option>
                                    <option value="11">Unsubscribed Leads</option>
                                  </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="" class="text-center">Template</td>
                            {{-- <td style="border-radius: 30px;" class="md-w-50 border border-secondary " > --}}
                            <td class="md-w-50" >
                                   <div class="w-100 border border-secondary rounded">
                                        <button class="border-0 rounded m-1 py-1 px-4"><a class="text-dark" href="">Select Template</a></button>
                                   </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="" class="text-center">From</td>
                            <td style="" class="md-w-50 py-4" >
                                   <input class="w-100 p-1 border border-secondary rounded" type="email" name="email" id="email"  placeholder="sefalibegumimo@gmail.com">
                            </td>
                        </tr>
                        <tr>
                            <td style="" class="text-center">Send Options</td>
                            <td style="" class="md-w-50 " >
                                <div class="form-check custom-option-basic" onclick="hideDateBox()">
                                    <label class="form-check-label custom-option-content" for="customRadioTemp1">
                                      <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp1" checked />
                                      <span class="custom-option-header">
                                        <span class="h6 mb-0">Send Immediately</span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="form-check custom-option-basic" onclick="showDateBox()">
                                    <label class="form-check-label custom-option-content" for="customRadioTemp2">
                                      <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp2" />
                                      <span class="custom-option-header">
                                        <span class="h6 mb-0">Schedule Later</span>
                                      </span>
                                    </label>
                                  </div>
                                  <div class="bg-secondary text-white d-flex py-4 ms-3 mb-4 d-none " id="dateBox">
                                    <div class="px-3">
                                        <label for="date">Date</label><br>
                                        <input type="date" name="date" id="date">
                                    </div>
                                    <div class="px-3">
                                        <label for="date">Time</label><br>
                                        <input type="time" name="time" id="time">
                                    </div>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="" class="text-center">Follow-up Action</td>
                            <td style="" class="md-w-50" >
                                <div class="input-group">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Trigger an action</button>
                                    <ul class="dropdown-menu">
                                      <li data-bs-toggle="modal" data-bs-target="#modalTop"><a class="dropdown-item" href="javascript:void(0);">Email is opened</a></li>
                                      <li data-bs-toggle="modal" data-bs-target="#secondModalTop"><a class="dropdown-item" href="javascript:void(0);">Email is clicked</a></li>
                                      <li data-bs-toggle="modal" data-bs-target="#thirdModalTop"><a class="dropdown-item" href="javascript:void(0);">Email is bounced</a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
      
           </div>

        </div>

    </div>

    <div class="px-3 mx-4 mt-4 rounded-3" id="Follow-up-email">
        <p class="fw-bold m-4 ">Follow-up Emails</p>
        <hr class="w-100">
        <div class="d-flex justify-content-start align-items-center">
            <p class="text-secondary mx-4">No Follow-up Emails</p>
            <button type="button" class="btn btn-outline-primary">Add Follow-up </button>
        </div>
    </div>




          <!-- Modal -->
          <div class="modal modal-top fade" id="modalTop" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTopTitle">Follow-up Action</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="ms-4 mt-3">
                    <h6 style="margin-bottom:5px">Trigger</h6>
                    <p>When the email is opened by a Lead</p>
                </div>
                <div class="modal-body">
                    <h6>Action</h6>
                  <div class="row g-2 border p-1 rounded ">
                    <div class="col mb-0 d-flex">
                        <i style="color:rgba(49, 41, 151, 0.904)" class="fa-solid fa-file-pen me-2"></i>
                        <h6>Update Fields</h6>
                    </div>
                    <div class="col mb-0 text-end me-3">
                      <a href="">+ Configure</a>
                    </div>
                  </div>
                  <div class="row g-2 border p-1 rounded my-3">
                    <div class="col mb-0 d-flex">
                        <i style="color:rgba(241, 76, 76, 0.904)" class="fa-solid fa-square-check me-2"></i>
                        <h6>Add Follow-up Task</h6>
                    </div>
                    <div class="col mb-0 text-end me-3">
                      <a href="">+ Configure</a>
                    </div>
                  </div>
                  <div class="row g-2 border p-1 rounded">
                    <div class="col mb-0">
                     <div style="color:rgb(108, 212, 108)" class="d-flex">
                        <i class="fa-sharp fa-solid fa-phone me-2"></i>
                        <h6>Schedule a Call</h6>
                     </div>
                    </div>
                    <div class="col mb-0 text-end me-3">
                      <a href="">+ Configure</a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Modal 2 -->
          <div class="modal modal-top fade" id="secondModalTop" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTopTitle">Follow-up Action</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="ms-4 mt-3">
                        <h6 style="margin-bottom:5px">Trigger</h6>
                        <p>When a link is clicked by a Lead</p>
                    </div>
                    <div class="modal-body">
                        <h6>Action</h6>
                      <div class="row g-2 border p-1 rounded ">
                        <div class="col mb-0 d-flex">
                            <i style="color:rgba(49, 41, 151, 0.904)" class="fa-solid fa-file-pen me-2"></i>
                            <h6>Update Fields</h6>
                        </div>
                        <div class="col mb-0 text-end me-3">
                          <a href="">+ Configure</a>
                        </div>
                      </div>
                      <div class="row g-2 border p-1 rounded my-3">
                        <div class="col mb-0 d-flex">
                            <i style="color:rgba(241, 76, 76, 0.904)" class="fa-solid fa-square-check me-2"></i>
                            <h6>Add Follow-up Task</h6>
                        </div>
                        <div class="col mb-0 text-end me-3">
                          <a href="">+ Configure</a>
                        </div>
                      </div>
                      <div class="row g-2 border p-1 rounded">
                        <div class="col mb-0">
                         <div style="color:rgb(108, 212, 108)" class="d-flex">
                            <i class="fa-sharp fa-solid fa-phone me-2"></i>
                            <h6>Schedule a Call</h6>
                         </div>
                        </div>
                        <div class="col mb-0 text-end me-3">
                          <a href="">+ Configure</a>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save</button>
                    </div>
                  </form>
            </div>
          </div>
          <!-- Modal 3 -->
          <div class="modal modal-top fade" id="thirdModalTop" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTopTitle">Follow-up Action</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="ms-4 mt-3">
                        <h6 style="margin-bottom:5px">Trigger</h6>
                        <p>When the email is bounced</p>
                    </div>
                    <div class="modal-body">
                        <h6>Action</h6>
                      <div class="row g-2 border p-1 rounded ">
                        <div class="col mb-0 d-flex">
                            <i style="color:rgba(49, 41, 151, 0.904)" class="fa-solid fa-file-pen me-2"></i>
                            <h6>Update Fields</h6>
                        </div>
                        <div class="col mb-0 text-end me-3">
                          <a href="">+ Configure</a>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save</button>
                    </div>
                  </form>
            </div>
          </div>


    {{-- Radio button value get and how date box --}}
        <script>
          const showDateBox  = () => {
                document.getElementById("dateBox").classList.remove('d-none');
          }
          const hideDateBox = () => {
                document.getElementById("dateBox").classList.add('d-none');
          }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        

   
</body>

</html>