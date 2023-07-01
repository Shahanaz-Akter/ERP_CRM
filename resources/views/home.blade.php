<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstarp --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- serach material Icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('assets/css/filter_sidebar.css')}}">
    <title>Document</title>

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL'0,
                'wght'400,
                'GRAD'0,
                'opsz'48
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        select {
            width: 150px;
            height: 35px;
            margin: 10px 0;
            padding: 5px;
        }

        input[type="text"] {
            width: 250px;
            height: 35px;
            margin: 10px 0;
            padding: 5px;
        }

        #selected_users_div span {
            margin-left: 5px;
            padding: 0.21em 0.4em;
            background: #d1d9e0;
            position: relative;

        }

        #selected_users_div span .material-symbols-outlined {

            font-size: 10px;
            display: none;
            position: absolute;
            right: 0;
            top: 0;
        }

        #selected_users_div span:hover {
            cursor: pointer;
            background: limegreen;
        }

        #selected_users_div span:hover .material-symbols-outlined {
            display: inline-block;

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

<body>

    {{-- bootstarp --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        const open_radio_subcontent = (tag) => {

            tag.parentElement.parentElement.children[1].classList.remove('d-none');
            let others = document.querySelectorAll('.with_sub_content');

            Array.from(others).forEach(element => {

                if (element != tag) {
                    // console.log(element);
                    element.parentElement.parentElement.children[1].classList.add('d-none');
                }
            });
        }
    </script>
    <script type="text/javascript">
        const arrow__ = (tag) => {
            let parent = tag.parentElement;

            let arrow = parent.children[0].children[0];
            console.log(arrow);
            let li = parent.parentElement;
            let outerul = li.children[1];
            console.log(outerul);
            if (arrow.style.transform == "rotate(90deg)") {
                arrow.style.transform = "";
                outerul.classList.add('d-none');
            } else {
                arrow.style.transform = "rotate(90deg)";
                outerul.classList.remove('d-none');
            }
        }
    </script>
</body>

</html>