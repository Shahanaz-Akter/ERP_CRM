<!DOCTYPE html>

<html lang="en">

<head class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
  data-assets-path="/assets/" data-template="vertical-menu-template-semi-dark">

  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
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
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">



  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-semi-dark.css') }}"
    class="template-customizer-theme-css" />
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
  <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <!--for date picker-->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
  <!--for date picker-->
  <link rel="stylesheet"
    href="{{ asset('/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
  <!--for date picker-->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
  <!--for date picker-->
  <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/pickr/pickr-themes.css') }}" />
  <!--for date picker-->

  {{-- export btns script start --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
  {{-- export btns script end --}}


  <!-- Page CSS -->
  {{-- serach material Icon --}}
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>



  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


  <style>
    #mass-email-box {
      height: 100%;
      background-color: white;
      padding: 15px;
    }

    #Follow-up-email {
      height: 100%;
      background-color: white;
      padding: 15px;
    }
  </style>

</head>

<body>
  @include('components.navbar')






  <div>
    <div style="background-color:#fff" class="py-2 border-bottom">
      <h5 class=" mx-4 pt-2">New Autoresponder</h5>
    </div>
    <div style="background-color:#fff; height:750px" class=" ">

      <!-- Multi Column with Form Separator -->
      <div class="row ">
        <!-- Form Separator -->
        <div class="row-cols-md-3 mt-4">
          <div class="card container w-50 mb-4">
            <form class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 text-danger" for="name">*Name:</label>
                <div class="col-sm-9">
                  <input type="text" id="name" class="form-control" placeholder="john.doe" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 " for="Module">Module:</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <span id="Module">Contacts</span>
                  </div>
                </div>
              </div>
              <div class="row form-password-toggle">
                <label class="col-sm-3 " for="assigned-to">Assigned To:</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <span id="assigned-to">sm khan</span>
                  </div>
                </div>
              </div>

              <div class="row my-3">
                <label class="col-sm-3 " for="custom-view">Custom View :</label>
                <div class="col-sm-9">
                  <select id="custom-view" class="select2 form-select" data-allow-clear="true">
                    <option value="">Select</option>
                    <option value="allLeads">All Contacts</option>
                    <option value="convertedLeads">Converted Contacts</option>
                    <option value="junkLeads">Junk Leads</option>
                    <option value="mailingLabels">Mailing Labels</option>
                    <option value="myConvertedLeads">My Converted Leads</option>
                    <option value="myLeads">My Contacts</option>
                    <option value="notQualifiedLeads">Not Qualified Leads</option>
                    <option value="openLeads">Open Leads</option>
                    <option value="recentlyCreatedLeads">Recently Created Contacts</option>
                    <option value="recentlyModifiedLeads">Recently Modified Contacts</option>
                    <option value="unreadLeads">Unread Contacts</option>
                    <option value="unsubscribedLeads">Unsubscribed Contacts</option>
                  </select>
                </div>
              </div>
              <div class="row my-3">
                <label class="col-sm-3 " for="select-folder">Select Folder:</label>
                <div class="col-sm-9">
                  <select id="select-folder" class=" form-select" data-allow-clear="true">
                    <option value="general">General</option>
                  </select>
                </div>
              </div>
              <div class="row my-3">
                <label class="col-sm-3 " for="select-folder">Type:</label>
                <div class="col-sm-9">
                  <div class="form-check custom-option-basic" onclick="hideRecurrenceBox()">
                    <label class="form-check-label custom-option-content" for="customRadioTemp1">
                      <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp1"
                        checked />
                      <span class="custom-option-header">
                        <span class="h6 mb-0">Static</span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check custom-option-basic" onclick="showRecurrenceBox()">
                    <label class="form-check-label custom-option-content" for="customRadioTemp2">
                      <input name="customRadioTemp" class="form-check-input" type="radio" value=""
                        id="customRadioTemp2" />
                      <span class="custom-option-header">
                        <span class="h6 mb-0">Dynamic</span>
                      </span>
                    </label>
                  </div>
                </div>

                {{-- Dynamic radio click and show this  box --}}
                <div class="d-none" id="RecurrenceBox">
                  <div class="d-flex justify-content-between">
                    <h5>Recurrence Pattern</h5>
                    <p class="text-danger">All fields are mandatory.</p>
                  </div>
                  <div class="text-center">
                    <button style="background-color: rgba(179, 176, 176, 0.822); color:black; font-weight:600; border:none; border-top-left-radius: 5px; border-top-right-radius: 5px; padding:8px" type="button" onclick="byDay(this)">By Day</button>
                    <button style="background-color: white; color:black; font-weight:600; border:none; border-top-left-radius: 5px; border-top-right-radius: 5px; padding:8px" type="button" onclick="byWeek(this)">By Week</button>
                    <button style="background-color: white; color:black; font-weight:600; border:none; border-top-left-radius: 5px; border-top-right-radius: 5px; padding:8px" type="button" onclick="byMonth(this)">By Month</button>
                  </div>

                  {{-- for dally --}}
                  <div style="background-color: rgba(179, 176, 176, 0.822)" class="" id="dayBox">
                    <div class="col-sm-9 px-3 pt-4">
                      <div class="form-check " onclick="">
                        <label class="form-check-label custom-option-content" for="">
                          <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" checked />
                          <span class="custom-option-header">
                            <span style="color: black" class=" mb-0">Recur every day</span>
                          </span>
                        </label>
                      </div>
                      <div class="form-check " onclick="">
                        <label class="form-check-label custom-option-content" for="">
                          <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" />
                          <span class="custom-option-header">
                            <span style="color: black" class="mb-0">Recur every</span>
                            <input style="width: 40px; border-radius:5px" type="text">
                            <span style="color: black">day(s)</span>
                          </span>
                        </label>
                      </div>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 d-flex justify-content-between">
                      <div>
                        <label style="color: black" for="date-time">Start by:</label><br>
                        <input type="date" name="date" id="date"><br>
                        <input type="time" name="time" id="tiem">
                      </div>
                      <div class="w-50 col-sm-9 px-2 pt-3">
                        <div class="form-check " onclick="">
                          <label class="form-check-label custom-option-content" for="">
                            <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" />
                            <span class="custom-option-header">
                              <span style="color: black" class="mb-0">End by:</span>
                              <input style="width: 100px; border-radius:5px" type="date">
                            </span>
                          </label>
                        </div>
                        <div class="form-check " onclick="">
                          <label class="form-check-label custom-option-content" for="">
                            <input name="customRadioTemp" class="form-check-input" type="radio" value="" id=""
                              checked />
                            <span class="custom-option-header">
                              <span style="color: black" class=" mb-0">No end date</span>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 ">
                      <span style="margin-right:10rem">Email Template</span>
                      <button style="border:1px solid gray; border-radius:5px;">Select Template</button>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 pb-4">
                      <a href="">Need Follow-Up</a>
                    </div>

                  </div>


                  {{-- for weelk --}}
                  <div style="background-color: rgba(179, 176, 176, 0.822)" class="d-none" id="weekBox">
                    <div class="col-sm-9 px-3 pt-4">
                      <div class="form-check " onclick="">
                        <label class="form-check-label custom-option-content" for="">
                          <span class="custom-option-header">
                            <span style="color: black" class="mb-0">Recur every</span>
                            <input style="width: 40px; border-radius:5px" type="text">
                            <span style="color: black">week(s) on :</span>
                          </span>
                        </label>
                      </div>
                      <div class="form-check " onclick="">
                        <label class="form-check-label custom-option-content" for="">
                          <span class="custom-option-header">
                            <form action="/action_page.php">
                              <input type="checkbox" id="Sunday" name="Sunday" value="Sunday">
                              <label style="color:black" for="Sunday"> Sunday</label><br>
                              <input type="checkbox" id="Monday" name="Monday" value="Monday">
                              <label style="color:black" for="Monday"> Monday</label><br>
                              <input type="checkbox" id="Tuesday" name="Tuesday" value="Tuesday">
                              <label style="color:black" for="Tuesday"> Tuesday</label><br>
                              <input type="checkbox" id="Wednesday" name="Wednesday" value="Wednesday">
                              <label style="color:black" for="Wednesday"> Wednesday</label><br>
                              <input type="checkbox" id="Thursday" name="Thursday" value="Thursday">
                              <label style="color:black" for="Thursday"> Thursday</label><br>
                              <input type="checkbox" id="Friday" name="Friday" value="Friday">
                              <label style="color:black" for="Friday"> Friday</label><br>
                              <input type="checkbox" id="Saturday" name="Saturday" value="Saturday">
                              <label style="color:black" for="Saturday"> Saturday</label><br>
                            </form>
                          </span>
                        </label>
                      </div>

                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 d-flex justify-content-between">
                      <div>
                        <label style="color: black" for="date-time">Start by:</label><br>
                        <input type="date" name="date" id="date"><br>
                        <input type="time" name="time" id="tiem">
                      </div>
                      <div class="w-50 col-sm-9 px-2 pt-3">
                        <div class="form-check " onclick="">
                          <label class="form-check-label custom-option-content" for="">
                            <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" />
                            <span class="custom-option-header">
                              <span style="color: black" class="mb-0">End by:</span>
                              <input style="width: 100px; border-radius:5px" type="date">
                            </span>
                          </label>
                        </div>
                        <div class="form-check " onclick="">
                          <label class="form-check-label custom-option-content" for="">
                            <input name="customRadioTemp" class="form-check-input" type="radio" value="" id=""
                              checked />
                            <span class="custom-option-header">
                              <span style="color: black" class=" mb-0">No end date</span>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 ">
                      <span style="margin-right:10rem">Email Template</span>
                      <button style="border:1px solid gray; border-radius:5px;">Select Template</button>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 pb-4">
                      <a href="">Need Follow-Up</a>
                    </div>

                  </div>

                  {{-- for month --}}
                  <div style="background-color: rgba(179, 176, 176, 0.822)" class="d-none" id="monthBox">
                    <div class="col-sm-9 px-3 pt-4">
                      <div class="form-check " onclick="">
                        <label class="form-check-label custom-option-content" for="">
                          <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" checked />
                          <span class="custom-option-header">
                            <span style="color: black" class="mb-0">Day</span>
                            <input style="width: 40px; border-radius:5px" type="text">
                            <span style="color: black">of every</span>
                            <input style="width: 40px; border-radius:5px" type="text">
                            <span style="color: black">month(s)</span>
                          </span>
                        </label>
                      </div>
                      <div class="form-check mt-2" onclick="">
                        <label class="form-check-label custom-option-content" for="">
                          <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" />
                          <span class="custom-option-header">
                            <select style="border: 1px solid gray; border-radius:5px" name="serial" id="serial">
                              <option value="first">First</option>
                              <option value="second">Second</option>
                              <option value="third">Third</option>
                              <option value="fourth">Fourth</option>
                              <option value="lastWeek">Last Week</option>
                            </select>
                            <select style="border: 1px solid gray; border-radius:5px" name="serial" id="serial">
                              <option value="first">Sunday</option>
                              <option value="second">Monday</option>
                              <option value="second">Tuesday</option>
                              <option value="second">Wednesday</option>
                              <option value="second">Thursday</option>
                              <option value="second">Friday</option>
                              <option value="second">Saturday</option>
                            </select>
                            <span style="color: black" class="mb-0">of every month</span>
                          </span>
                        </label>
                      </div>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 d-flex justify-content-between">
                      <div>
                        <label style="color: black" for="date-time">Start by:</label><br>
                        <input type="date" name="date" id="date"><br>
                        <input type="time" name="time" id="tiem">
                      </div>
                      <div class="w-50 col-sm-9 px-2 pt-3">
                        <div class="form-check " onclick="">
                          <label class="form-check-label custom-option-content" for="">
                            <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="" />
                            <span class="custom-option-header">
                              <span style="color: black" class="mb-0">End by:</span>
                              <input style="width: 100px; border-radius:5px" type="date">
                            </span>
                          </label>
                        </div>
                        <div class="form-check " onclick="">
                          <label class="form-check-label custom-option-content" for="">
                            <input name="customRadioTemp" class="form-check-input" type="radio" value="" id=""
                              checked />
                            <span class="custom-option-header">
                              <span style="color: black" class=" mb-0">No end date</span>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 ">
                      <span style="margin-right:10rem">Email Template</span>
                      <button style="border:1px solid gray; border-radius:5px;">Select Template</button>
                    </div>

                    <hr style="color:rgb(204, 201, 201)" class="my-4">

                    <div class="px-3 pb-4">
                      <a href="">Need Follow-Up</a>
                    </div>

                  </div>

                </div>


              </div>
              <div class="row my-3">
                <button style="width:150px; background-color:white; border:none; color:blue" data-bs-toggle="modal" data-bs-target="#modalTop">Add Follow-ups</button>
                <div class="col-sm-9">

                </div>
              </div>


              <div class="pt-4 mb-4">
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



    <!-- Modal for Add Follow-ups-->
    <div class="modal modal-top fade" id="modalTop" tabindex="-1">
      <div class="modal-dialog">
        <form class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-black" id="modalTopTitle">Add Follow-ups</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="row my-3">
                <label class="col-sm-4 " for="custom-view">Follow-up Date</label>
                <div class="col-sm-8">
                  <input style=" padding:2px; border-radius:5px" type="date" name="date" id="dates">
                  <input style=" padding:2px; border-radius:5px" type="time" name="time" id="times">
                </div>
              </div>
              <div class="row my-3">
                <label class="col-sm-4 " for="custom-view">Email Template</label>
                <div class="col-sm-8">
                  <input style="width:100%; padding:2px; border-radius:5px" type="text" name="modalText" id="modalText">
                </div>
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


    {{-- Radio button value get and how Recurrence Pattern box show--}}
    <script>
      const showRecurrenceBox  = () => {
            document.getElementById("RecurrenceBox").classList.remove('d-none');
      }
      const hideRecurrenceBox = () => {
            document.getElementById("RecurrenceBox").classList.add('d-none');
      }

      // Function  for day week month

      const byDay = (tag) => {
        document.getElementById("weekBox").classList.add('d-none');
        document.getElementById("monthBox").classList.add('d-none');
        document.getElementById("dayBox").classList.remove('d-none');
        let thisParent_1 = tag.parentElement.children[1]
        let thisParent_2 = tag.parentElement.children[2]
        thisParent_1.style.background = "#fff";
        thisParent_2.style.background = "#fff";
        tag.style.background = "rgba(179, 176, 176, 0.822)";
      }
      const byWeek = (tag) => {
        document.getElementById("dayBox").classList.add('d-none');
        document.getElementById("weekBox").classList.remove('d-none');
        document.getElementById("monthBox").classList.add('d-none');
        let thisParent_0 = tag.parentElement.children[0]
        let thisParent_2 = tag.parentElement.children[2]
        thisParent_0.style.background = "#fff";
        thisParent_2.style.background = "#fff";
        tag.style.background = "rgba(179, 176, 176, 0.822)";
      }
      const byMonth = (tag) => {
        document.getElementById("dayBox").classList.add('d-none');
        document.getElementById("weekBox").classList.add('d-none');
        document.getElementById("monthBox").classList.remove('d-none');
        let thisParent_0 = tag.parentElement.children[0]
        let thisParent_1 = tag.parentElement.children[1]
        thisParent_0.style.background = "#fff";
        thisParent_1.style.background = "#fff";
        tag.style.background = "rgba(179, 176, 176, 0.822)";
      }
    </script>


</body>

</html>