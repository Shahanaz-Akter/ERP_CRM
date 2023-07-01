<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> --}}
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        body {
            box-sizing: border-box;
            position: sticky;
            top: 100px;
        }

        .nav_dropdown_item {
            padding: 5px 13px;
        }

        .nav_dropdown_item:hover {
            background: rgb(17, 112, 129);
            color: white;
        }
    </style>
</head>

<body class="p-0 m-0 border-0" style="">
    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg " style="background:rgb(17, 112, 129);">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/assets/images/crm_logo_white_5d9e026_.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{url('/leads')}}">Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/contacts')}}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/accounts')}}">Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="{{url('/deals')}}">Deals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="{{url('/task')}}">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="{{url('/meeting')}}">Meetings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="/cells">Cells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="/reports">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="{{url('/analytics')}}">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   text-white" href="/products">Products</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/services">Services</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/projects">Projects</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="material-symbols-outlined" style="color:white;font-weight:900;">
                                more_horiz
                            </span>
                        </a>
                        <div class="dropdown-menu " style="padding: 9px 6px;">
                            <input type="text" class="form-control" id="myInput" />
                            <ul style="width: 240px;list-style-type:none;padding:0;" id="myList">

                                <li><a class="dropdown-item nav_dropdown_item" href="/quotes">Quotes</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/sales_order">Sales Order</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/purchase_order">Purchase Order</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/invoices">Invoices</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/sales_inbox">SalesInbox</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/invoices">Invoices</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/campaigns">Campaigns</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/vendors">Vendors</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/price_books">Price Books</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/cases">Cases</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/solutions">Solutions</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/documents">Documents</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/forcasts">Forcasts</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/visits">Visits</a></li>
                                <li><a class="dropdown-item nav_dropdown_item" href="/social">Social</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Create New Module</a></li>
                            </ul>
                        </div>

                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <script src="https://kit.fontawesome.com/5e53d7a4f7.js" crossorigin="anonymous"></script>

    <!-- End Example Code -->
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myList li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>