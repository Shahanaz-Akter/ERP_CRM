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
      <h5 class=" mx-4 pt-2">Create Folder</h5>
    </div>
    <div style="background-color:#fff; height:750px" class=" ">

      <!-- Multi Column with Form Separator -->
      <div class="row ">
        <!-- Form Separator -->
        <div class="row-cols-md-3 mt-4">
          <div class="card container w-50 mb-4">
            <form class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 text-danger" for="name">*Folder Name:</label>
                <div class="col-sm-9">
                  <input style="border:1px solid  rgb(187, 185, 185); type="text" id="name" class="form-control" placeholder="john.doe" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 " for="Module">Description:</label>
                <div class="col-sm-9">
                  <div class="input-group input-group-merge">
                    <textarea style="border:1px solid  rgb(187, 185, 185); width:100%" class="rounded" id="w3review" name="w3review" rows="4" cols="50"></textarea>
                  </div>
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