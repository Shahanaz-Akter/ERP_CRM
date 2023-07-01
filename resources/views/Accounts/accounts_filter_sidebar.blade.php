<div style="width:380px;" class="filter_sidebar">
    <label class="p-2">Filter Accounts By</label>
    <div class="search_btn d-flex align-items-center p-2 position-relative">
        <span class="material-symbols-outlined position-absolute" style="left: 15px">
            search
        </span>
        <input type="text" id="myInput" style="border:1px solid gray;width: 90%; border-radius:15px;padding:4px 8px 4px 30px;"
            placeholder="Search Here">
    </div>
    <div>
        <ul>
            <li>
                <span class="item"><b class="d-flex aligm-items-center" onclick="arrow__(this)">
                        <span class="material-symbols-outlined arrow_right" style="transform:rotate(90deg);">
                            arrow_right
                        </span>
                        System Defined Filters</b>
                </span>
                <ul class=" outer_ul">
                    <li>
                        <input type="checkbox" id="touched_records" class="check_btn">
                        <label class="ms-1 " for="touched_records">
                            Touched Records
                        </label>

                        <div class="content d-none">
                            <div class="content__1 ms-3 d-flex align-items-center">
                                <span class=""> By </span>
                                <select class="user_system_select ms-2">
                                    <option value="">User & System</option>
                                    <option value="">User or System</option>
                                    <option value="">User</option>
                                    <option value="">System</option>
                                    <option value="">Only by User</option>
                                    <option value="">Only by System</option>
                                </select>
                            </div>
                            <div class="content__2 p-3 mt-1 d-flex">
                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_30_days"> last 30 days</option>
                                    <option value="last_60_days">last 60 days</option>
                                    <option value="last_90_days">last 90 days</option>
                                    <option value="untill_now">Untill now</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>
                            </div>
                        </div>

                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="untouched_records">
                        <label class="ms-1 " for="untouched_records">Untouched Records</label>

                        <div class="content d-none">
                            <div class="content__1 ms-3 d-flex align-items-center">

                                <span class=""> By </span>
                                <select class="user_system_select ms-2">
                                    <option value="">User & System</option>
                                    <option value="">User or System</option>
                                    <option value="">User</option>
                                    <option value="">System</option>
                                    <option value="">Only by User</option>
                                    <option value="">Only by System</option>
                                </select>
                            </div>
                            <div class="content__2 p-3 d-flex">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_30_days"> last 30 days</option>
                                    <option value="last_60_days">last 60 days</option>
                                    <option value="last_90_days">last 90 days</option>
                                    <option value="untill_now">Untill now</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>

                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="record_action">
                        <label class="ms-1 " for="record_action">Record Action</label>


                        <div class="content d-none">
                            <select class="ms-3 mb-1" name="" id=""
                                style="padding: 3px 10px;width:80%;">
                                <option value="modified">Modified</option>
                                <option value="not_modified">Not Modified</option>

                            </select>
                            <div class="content__1 ms-3  d-flex align-items-center">

                                <span class=""> By </span>
                                <select class="user_system_select ms-2">
                                    <option value="">User & System</option>
                                    <option value="">User or System</option>
                                    <option value="">User</option>
                                    <option value="">System</option>
                                    <option value="">Only by User</option>
                                    <option value="">Only by System</option>
                                </select>
                            </div>
                            <div class="content__2 ms-3 mt-1 mb-2 d-flex">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_30_days"> last 30 days</option>
                                    <option value="last_60_days">last 60 days</option>
                                    <option value="last_90_days">last 90 days</option>
                                    <option value="untill_now">Untill now</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="related_records_action" class="mb-1 check_btn">
                        <label class="ms-1" for="related_records_action">Related Records Action</label>
                        <div class="content d-none">
                            <select class="ms-3 mb-1" name="" id=""
                                style="padding: 3px 10px;width:80%;">
                                <option value="done">Done</option>
                                <option value="not_done">Not Done</option>

                            </select>
                            <div class="content__1 ms-3 d-flex align-items-center">

                                <span class=""> By </span>
                                <select class="user_system_select ms-2">
                                    <option value="">User & System</option>
                                    <option value="">User or System</option>
                                    <option value="">User</option>
                                    <option value="">System</option>
                                    <option value="">Only by User</option>
                                    <option value="">Only by System</option>
                                </select>
                            </div>
                            <div class="content__2 ms-3 mt-1 mb-2 d-flex">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_30_days"> last 30 days</option>
                                    <option value="last_60_days">last 60 days</option>
                                    <option value="last_90_days">last 90 days</option>
                                    <option value="untill_now">Untill now</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="locked" class="check_btn">
                        <label class="ms-1 " for="locked">Locked</label>
                        <div class="content d-none ms-4">

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio" name="activities"
                                        id="without_any_locked" style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_any_locked">
                                        True
                                    </label>
                                </div>
                            </div>

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio" name="activities" id="locked_added"
                                        style="border:1px solid gray;">
                                    <label class="form-check-label" for="locked_added">
                                        False
                                    </label>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="deals" class="check_btn">
                        <label class="ms-1 " for="deals">Deals</label>
                        <div class="content d-none ms-4">

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio"
                                        onchange="open_radio_subcontent(this)" name="activities"
                                        id="without_any_notes" style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_any_notes">
                                        With Open Deal
                                    </label>
                                </div>
                                <div class="radio_container__content d-none d-flex  align-items-center">
                                    <select name="" class="myselect flex-grow-1 me-2" style="padding:2px;" oninput="withOpenoption(this)">
                                        <option value="inTheLast">in the last</option>
                                        <option value="thisWeek">This Week</option>
                                        <option value="thisMonth">This Month</option>
                                        <option value="lastWeek">Last Week</option>
                                        <option value="lastMonth">Last Month</option>
                                    </select>

                                    <select name="" class="myselect flex-grow-1 me-2" style="padding:2px;" id="WithOpenDeal">
                                        <option value="withMonth1">1 months</option>
                                        <option value="withMonth2">2 months</option>
                                        <option value="withMonth3">3 months</option>
                                        <option value="withMonth4">4 months</option>
                                        <option value="withMonth5">5 months</option>
                                        <option value="withMonth6">6 months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio"
                                        onchange="open_radio_subcontent(this)" name="activities"
                                        id="without_any_notes" style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_any_notes">
                                        Without Open Deal
                                    </label>
                                </div>
                                <div class="radio_container__content d-none d-flex  align-items-center">
                                    <select name="" class="myselect flex-grow-1 me-2" style="padding:2px;" oninput="withoutOpenOption(this)">
                                        <option value="inTheLast">in the last</option>
                                        <option value="thisWeek">This Week</option>
                                        <option value="thisMonth">This Month</option>
                                        <option value="lastWeek">Last Week</option>
                                        <option value="lastMonth">Last Month</option>
                                    </select>

                                    <select name="" class="myselect flex-grow-1 me-2" style="padding:2px;" id="WithoutOpenDeal">
                                        <option value="withoutMonth1">1 months</option>
                                        <option value="withoutMonth2">2 months</option>
                                        <option value="withoutMonth3">3 months</option>
                                        <option value="withoutMonth4">4 months</option>
                                        <option value="withoutMonth5">5 months</option>
                                        <option value="withoutMonth6">6 months</option>
                                    </select>
                                </div>
                            </div>

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio"
                                         name="activities" id="notes_added"
                                        style="border:1px solid gray;">
                                    <label class="form-check-label" for="notes_added">
                                        Without Any Deal
                                    </label>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="touched_records" class="check_btn">
                        <label class="ms-1 " for="touched_records">
                            Deal Amount
                        </label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">=</option>
                                    <option value="isn't">!=</option>
                                    <option value="contains"><</option>
                                    <option value="doesn't contain"><=</option>
                                    <option value="starts with">></option>
                                    <option value="ends with">>=</option>
                                    <option value="between">between</option>
                                    <option value="not between">not between</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="touched_records" class="check_btn">
                        <label class="ms-1 " for="touched_records">
                            Deal Stage
                        </label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="touched_records" class="check_btn">
                        <label class="ms-1 " for="touched_records">
                            Deal Owner
                        </label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="touched_records" class="check_btn">
                        <label class="ms-1 " for="touched_records">
                            Deal Closing Date
                        </label>

                        <div class="content d-none">
                            <div class="content__2 p-3 mt-1 d-flex">
                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_30_days"> last 30 days</option>
                                    <option value="last_60_days">last 60 days</option>
                                    <option value="last_90_days">last 90 days</option>
                                    <option value="untill_now">Untill now</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="Contacts" class="check_btn">
                        <label class="ms-1 " for="Contacts">Contacts</label>
                        <div class="content d-none ms-4">

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio" name="activities"
                                        id="without_any_locked" style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_any_locked">
                                        With Contact
                                    </label>
                                </div>
                            </div>

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio" name="activities" id="locked_added"
                                        style="border:1px solid gray;">
                                    <label class="form-check-label" for="locked_added">
                                        Without Any Contact
                                    </label>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <span class="item"><b class="d-flex aligm-items-center" onclick="arrow__(this)">
                        <span class="material-symbols-outlined arrow_right"  style="transform:rotate(90deg);">
                            arrow_right
                        </span>
                        Filter by Fields</b>
                </span>
                <ul class=" outer_ul">
                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Account Name</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Account Number</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">=</option>
                                    <option value="isn't">!=</option>
                                    <option value="contains"><</option>
                                    <option value="doesn't contain"><=</option>
                                    <option value="starts with">></option>
                                    <option value="ends with">>=</option>
                                    <option value="between">between</option>
                                    <option value="not between">not between</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Account Owner</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>

                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Account Site</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>

                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Account Type</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Annual Revenue</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">=</option>
                                    <option value="isn't">!=</option>
                                    <option value="contains"><</option>
                                    <option value="doesn't contain"><=</option>
                                    <option value="starts with">></option>
                                    <option value="ends with">>=</option>
                                    <option value="between">between</option>
                                    <option value="not between">not between</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Billing City</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Billing Code</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Billing Country</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Billing State</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Billing Street</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Created By</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="created_time" class="check_btn">
                        <label class="ms-2 " for="created_time">Created Time</label>
                        <div class="content d-none ms-3">
                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="user_system_select" oninput="CreatedTimeValue(this)">
                                    <option value="last">in the last</option>
                                    <option value="Due in">Due in</option>
                                    <option value="On">On</option>
                                    <option value="Before">Before</option>
                                    <option value="after"> after</option>
                                    <option value="between">between</option>
                                    <option value="today">today</option>
                                    <option value="yesterday">yesterday</option>
                                    <option value="this week">this week</option>
                                    <option value="this month">this month</option>
                                    <option value="last week">last week</option>
                                    <option value="last month">last month</option>
                                    <option value="this year">this year</option>
                                    <option value="current FY">current FY</option>
                                    <option value="current FQ">current FQ</option>
                                    <option value="last year">last year</option>
                                    <option value="Previous FY">Previous FY</option>
                                    <option value="Previous FQ">Previous FQ</option>
                                    <option value="next year">next year</option>
                                    <option value="Next FY">Next FY</option>
                                    <option value="Next FQ">Next FQ</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>


                                <input type="text" placeholder="2" id="createdTimeText" style="width: 50px;margin:0;"
                                    class="text-center mx-1 ">

                                <select name="" class="user_system_select " id="day-week-month">
                                    <option value="days">Days</option>
                                    <option value="weeks">Weeks</option>
                                    <option value="months">Months</option>
                                </select>

                                <input type="date" name="" id="CreatedTimeDate" class="ms-1 d-none">

                        
                                    <input type="date" name="" id="fromDate" class="ms-1 d-none"> <span class=" d-none" id="fromTo"> - </span>
                                    <input type="date" name="" id="toDate" class=" d-none">
                                

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Employees</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">=</option>
                                    <option value="isn't">!=</option>
                                    <option value="contains"><</option>
                                    <option value="doesn't contain"><=</option>
                                    <option value="starts with">></option>
                                    <option value="ends with">>=</option>
                                    <option value="between">between</option>
                                    <option value="not between">not between</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Fax</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Industry</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="created_time" class="check_btn">
                        <label class="ms-2 " for="created_time">Last Activity Time</label>
                        <div class="content d-none ms-3">
                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="user_system_select" oninput="CreatedTimeValue(this)">
                                    <option value="last">in the last</option>
                                    <option value="Due in">Due in</option>
                                    <option value="On">On</option>
                                    <option value="Before">Before</option>
                                    <option value="after"> after</option>
                                    <option value="between">between</option>
                                    <option value="today">today</option>
                                    <option value="yesterday">yesterday</option>
                                    <option value="this week">this week</option>
                                    <option value="this month">this month</option>
                                    <option value="last week">last week</option>
                                    <option value="last month">last month</option>
                                    <option value="this year">this year</option>
                                    <option value="current FY">current FY</option>
                                    <option value="current FQ">current FQ</option>
                                    <option value="last year">last year</option>
                                    <option value="Previous FY">Previous FY</option>
                                    <option value="Previous FQ">Previous FQ</option>
                                    <option value="next year">next year</option>
                                    <option value="Next FY">Next FY</option>
                                    <option value="Next FQ">Next FQ</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>


                                <input type="text" placeholder="2" id="createdTimeText" style="width: 50px;margin:0;"
                                    class="text-center mx-1 ">

                                <select name="" class="user_system_select " id="day-week-month">
                                    <option value="days">Days</option>
                                    <option value="weeks">Weeks</option>
                                    <option value="months">Months</option>
                                </select>

                                <input type="date" name="" id="CreatedTimeDate" class="ms-1 d-none">

                        
                                    <input type="date" name="" id="fromDate" class="ms-1 d-none"> <span class=" d-none" id="fromTo"> - </span>
                                    <input type="date" name="" id="toDate" class=" d-none">
                                

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Modified By</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="created_time" class="check_btn">
                        <label class="ms-2 " for="created_time">Modified Time</label>
                        <div class="content d-none ms-3">
                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="user_system_select" oninput="CreatedTimeValue(this)">
                                    <option value="last">in the last</option>
                                    <option value="Due in">Due in</option>
                                    <option value="On">On</option>
                                    <option value="Before">Before</option>
                                    <option value="after"> after</option>
                                    <option value="between">between</option>
                                    <option value="today">today</option>
                                    <option value="yesterday">yesterday</option>
                                    <option value="this week">this week</option>
                                    <option value="this month">this month</option>
                                    <option value="last week">last week</option>
                                    <option value="last month">last month</option>
                                    <option value="this year">this year</option>
                                    <option value="current FY">current FY</option>
                                    <option value="current FQ">current FQ</option>
                                    <option value="last year">last year</option>
                                    <option value="Previous FY">Previous FY</option>
                                    <option value="Previous FQ">Previous FQ</option>
                                    <option value="next year">next year</option>
                                    <option value="Next FY">Next FY</option>
                                    <option value="Next FQ">Next FQ</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>


                                <input type="text" placeholder="2" id="createdTimeText" style="width: 50px;margin:0;"
                                    class="text-center mx-1 ">

                                <select name="" class="user_system_select " id="day-week-month">
                                    <option value="days">Days</option>
                                    <option value="weeks">Weeks</option>
                                    <option value="months">Months</option>
                                </select>

                                <input type="date" name="" id="CreatedTimeDate" class="ms-1 d-none">

                        
                                    <input type="date" name="" id="fromDate" class="ms-1 d-none"> <span class=" d-none" id="fromTo"> - </span>
                                    <input type="date" name="" id="toDate" class=" d-none">
                                

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Ownership</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Parent Account</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Phone</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Rating</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Shipping City</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Shipping Code</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Shipping Country</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Shipping State</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Shipping Street</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">SIC Code</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">=</option>
                                    <option value="isn't">!=</option>
                                    <option value="contains"><</option>
                                    <option value="doesn't contain"><=</option>
                                    <option value="starts with">></option>
                                    <option value="ends with">>=</option>
                                    <option value="between">between</option>
                                    <option value="not between">not between</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Tag</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Ticker Symbol</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Website</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    {{-- <li>

                        <input type="checkbox" id="annual_revenue" class="check_btn">
                        <label class="ms-2 " for="annual_revenue">
                            Annual Revenue
                        </label>

                        <div class="content d-none">
                            <div class="content__1 ms-3 d-flex align-items-center">
                                <select name="" id="">
                                    <option value="equal">=</option>
                                    <option value="not equal">!=</option>
                                    <option value="less than">
                                        <p>
                                            << /p>
                                    </option>
                                    <option value="less than equal">
                                        <p>
                                            <=< /p>
                                    </option>
                                    <option value="greater than">></option>
                                    <option value="greater than equal">>=</option>
                                    <option value="between">between</option>
                                    <option value="not_between">not between</option>
                                    <option value="is_empty">is empty</option>
                                    <option value="is_not_empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 ms-3 mt-1 mb-2  d-flex">
                                <input type="text" placeholder="Type here">
                            </div>
                        </div>

                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" class="check_btn" id="company">
                        <label class="ms-2 " for="company">Company</label>

                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">

                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="converted_account" class="mb-1 check_btn">
                        <label class="ms-2" for="converted_account">Converted Account</label>
                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="converted_contact" class="check_btn">
                        <label class="ms-2" for="converted_contact">Converted Contact</label>
                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="converted_deal" class="check_btn">
                        <label class="ms-2 " for="converted_deal">Converted Deal</label>
                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="created_by" class="check_btn">
                        <label class="ms-2 " for="created_by">Created By</label>
                        <div class="content d-none ms-3">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2  ">
                                <div class="d-flex mt-1 g-1">
                                    <select id="userType">
                                        <option value="">Select</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>

                                    <select id="userList">
                                        <option value="">Select</option>
                                    </select>
                                </div>


                                <input type="text" class="d-none" id="selectedUsers" readonly
                                    style="width:100%;" />
                                <div id="selected_users_div" class="d-flex flex-wrap mt-1 mb-2">

                                </div>
                                <script>
                                    const userType = document.getElementById("userType");
                                    const userList = document.getElementById("userList");
                                    const selectedUsers = document.getElementById("selectedUsers");

                                    let adminUsers = ["admin1", "admin2", "admin3"];
                                    let regularUsers = ["user1", "user2", "user3"];

                                    userType.addEventListener("change", function() {
                                        userList.innerHTML = "";

                                        if (this.value === "admin") {
                                            adminUsers.forEach(function(user) {
                                                let option = document.createElement("option");
                                                option.value = user;
                                                option.text = user;
                                                userList.appendChild(option);
                                            });
                                        } else if (this.value === "user") {
                                            regularUsers.forEach(function(user) {
                                                let option = document.createElement("option");
                                                option.value = user;
                                                option.text = user;
                                                userList.appendChild(option);
                                            });
                                        }
                                    });

                                    userList.addEventListener("change", function() {
                                        selectedUsers.value += this.value + ", ";
                                        let selected_users_div = document.getElementById('selected_users_div');
                                        let span = document.createElement('span');
                                        let span1 = document.createElement('span');
                                        span1.classList.add('material-symbols-outlined');

                                        span1.textContent = 'Close';
                                        span.textContent = this.value;
                                        span.append(span1);
                                        span.setAttribute('onclick', 'remove_user(this)');
                                        selected_users_div.append(span);


                                        console.log(selected_users_div);
                                    });

                                    const remove_user = (tag) => {
                                        let str = tag.textContent.replace('Close', '');
                                        let selected_users = document.getElementById('selectedUsers');
                                        let repl = str + ', ';
                                        let p = selected_users.value.replace(repl, '');
                                        console.log(p);
                                        selected_users.value = p;
                                        tag.remove();

                                    }
                                </script>
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="created_time" class="check_btn">
                        <label class="ms-2 " for="created_time">Created Time</label>
                        <div class="content d-none ms-3">
                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_30_days"> last 30 days</option>
                                    <option value="last_60_days">last 60 days</option>
                                    <option value="last_90_days">last 90 days</option>
                                    <option value="untill_now">Untill now</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;margin:0;"
                                    class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="enrich_status" class="check_btn">
                        <label class="ms-2 " for="enrich_status">Enrich Status</label>
                        <div class="content d-none">

                            <div class="content__1  d-flex align-items-center me-2">
                                <label for="">Is</label>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <select class=" form-control select2 " multiple>
                                    <option value="available">available</option>
                                    <option value="enriched">enriched</option>
                                    <option value="data not found">data not found</option>
                                </select>
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="industry" class="check_btn">
                        <label class="ms-2 " for="industry">Industry</label>
                        <div class="content d-none">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <select class=" form-control select2 " multiple>

                                    <option value="ASP(Application Service Provider)">ASP(Application Service Provider)
                                    </option>
                                    <option value="Data/Telecom (ORM)">Data/Telecom (ORM)</option>
                                    <option value="ERP- Enterprise Resource Planning">ERP- Enterprise Resource Planning
                                    </option>
                                    <option value="Government/Military">Government/Military</option>
                                    <option value="Large Enterprise">Large Enterprise</option>
                                    <option value="MSP- Management Service Provider">MSP- Management Service Provider
                                    </option>
                                    <option value="Non-management ISV">Non-management ISV</option>
                                    <option value="Service Provider">Service Provider</option>
                                    <option value="Small/Medium Enterprise">Small/Medium Enterprise</option>
                                    <option value="Storage Equipment">Storage Equipment</option>
                                    <option value="Storage Service Provider">Storage Service Provider</option>
                                    <option value="Systems Integrator"> Systems Integrator</option>
                                    <option value="Wireless Industry">Wireless Industry</option>
                                    <option value="ERP">ERP</option>
                                    <option value="Management ISV">Management ISV</option>
                                </select>
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="last_enriched_time" class="check_btn">
                        <label class="ms-2 " for="last_enriched_time">Last Enriched Time</label>
                        <div class="content d-none ms-3">
                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="myselect flex-grow-1">
                                    <option value="last">in the last</option>
                                    <option value="Due in">Due in</option>
                                    <option value="On">On</option>
                                    <option value="Before">Before</option>
                                    <option value="after"> after</option>
                                    <option value="between">between</option>
                                    <option value="today">today</option>
                                    <option value="yesterday">yesterday</option>
                                    <option value="this week">this week</option>
                                    <option value="this month">this month</option>
                                    <option value="last week">last week</option>
                                    <option value="last month">last month</option>
                                    <option value="this year">this year</option>
                                    <option value="current FY">current FY</option>
                                    <option value="current FQ">current FQ</option>
                                    <option value="last year">last year</option>
                                    <option value="Previous FY">Previous FY</option>
                                    <option value="Previous FQ">Previous FQ</option>
                                    <option value="next year">next year</option>
                                    <option value="Next FY">Next FY</option>
                                    <option value="Next FQ">Next FQ</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;margin:0;"
                                    class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>
                    </li> --}}
                    
                    {{-- <li>
                        <input type="checkbox" id="lead_conversation_time" class="check_btn">
                        <label class="ms-2 " for="lead_conversation_time">Lead Conversation Time</label>
                        <div class="content d-none">

                            <div class="content__1 ms-3 d-flex align-items-center">
                                <select name="" id="">
                                    <option value="equal">=</option>
                                    <option value="not equal">!=</option>
                                    <option value="less than">

                                        < </option>
                                    <option value="less than equal">

                                        <= </option>
                                    <option value="greater than">></option>
                                    <option value="greater than equal">>=</option>
                                    <option value="between">between</option>
                                    <option value="not_between">not between</option>
                                    <option value="is_empty">is empty</option>
                                    <option value="is_not_empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 ms-3 mt-1 mb-2  d-flex">
                                <input type="text" placeholder="Text Here">
                            </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="lead_name" class="check_btn">
                        <label class="ms-2 " for="lead_name">Lead Name</label>
                        <div class="content d-none ms-3">

                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select " style="border:1px solid gray;">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="contains">contains</option>
                                    <option value="doesn't contain">doesn't contain</option>
                                    <option value="starts with">starts with</option>
                                    <option value="ends with">ends with</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" placeholder="Type Here"
                                    style="width:100%;border:1px solid gray;" class="">
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="lead_owner" class="check_btn">
                        <label class="ms-2 " for="lead_owner">Lead Owner</label>
                        <div class="content d-none mb-2">
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                                <select id="userType__" class="user_system_select">
                                    <option value="">Select</option>
                                    <option value="all">All</option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                    <option value="unconfirmed">unconfirmed</option>
                                    <option value="deleted">deleted</option>
                                </select>
                            </div>
                            <div class="content__2  ">
                                <div class=" mt-1 g-1">



                                    <div class="d-none" id="all_container">
                                        <label for="select2Success" class="form-label">All</label>
                                        <div class="select2-primary">
                                            <select id="all" class="select2 " multiple>
                                                <option value="1">Option1</option>
                                                <option value="2">Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4">Option4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-none" id="active_container">
                                        <label for="active" class="form-label">Active</label>
                                        <div class="select2-primary">
                                            <select id="active" class="select2 form-select" multiple>
                                                <option value="1">Option1</option>
                                                <option value="2">Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4">Option4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-none" id="inactive_container">
                                        <label for="inactive" class="form-label">Inactive</label>
                                        <div class="select2-primary">
                                            <select id="inactive" class="select2 form-select" multiple>
                                                <option value="1">Option1</option>
                                                <option value="2">Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4">Option4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-none" id="unconfirmed_container">
                                        <label for="unconfirmed" class="form-label">Unconfirmed</label>
                                        <div class="select2-primary">
                                            <select id="unconfirmed" class="select2 form-select" multiple>
                                                <option value="1">Option1</option>
                                                <option value="2">Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4">Option4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-none" id="deleted_container">
                                        <label for="deleted" class="form-label">Deleted</label>
                                        <div class="select2-primary">
                                            <select id="deleted" class="select2 form-select" multiple>
                                                <option value="1">Option1</option>
                                                <option value="2">Option2</option>
                                                <option value="3">Option3</option>
                                                <option value="4">Option4</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>



                                <script>
                                    const userType__ = document.getElementById("userType__");
                                    const all = document.getElementById("all");
                                    const all_container = document.getElementById("all_container");

                                    const active = document.getElementById("active");
                                    const active_container = document.getElementById("active_container");

                                    const inactive = document.getElementById("inactive");
                                    const inactive_container = document.getElementById("inactive_container");

                                    const unconfirmed = document.getElementById("unconfirmed");
                                    const unconfirmed_container = document.getElementById("unconfirmed_container");

                                    const deleted = document.getElementById("deleted");
                                    const deleted_container = document.getElementById("deleted_container");

                                    const selectedUsers__ = document.getElementById("selectedUsers__");
                                    let selected_users_div__ = document.getElementById('selected_users_div__');

                                    userType__.addEventListener("change", function() {
                                        if (this.value == "all") {
                                            all_container.classList.remove('d-none');
                                        }
                                        if (this.value == "active") {   
                                            active_container.classList.remove('d-none');
                                        }
                                        if (this.value == "inactive") {
                                            inactive_container.classList.remove('d-none');
                                        }
                                        if (this.value == "unconfirmed") {
                                            unconfirmed_container.classList.remove('d-none');
                                        }
                                        if (this.value == "deleted") {
                                            deleted_container.classList.remove('d-none');
                                        }
                                    });
                                    all.addEventListener("change", function() {

                                        selectedUsers__.value += this.value + ", ";

                                        let span = document.createElement('span');
                                        let span1 = document.createElement('span');
                                        span1.classList.add('material-symbols-outlined');

                                        span1.textContent = 'Close';
                                        span.textContent = this.value;
                                        span.append(span1);
                                        span.setAttribute('onclick', 'remove_user_(this)');
                                        selected_users_div__.append(span);


                                        console.log(selected_users_div__);
                                    });
                                    active.addEventListener("change", function() {
                                        selectedUsers__.value += this.value + ", ";

                                        let span = document.createElement('span');
                                        let span1 = document.createElement('span');
                                        span1.classList.add('material-symbols-outlined');

                                        span1.textContent = 'Close';
                                        span.textContent = this.value;
                                        span.append(span1);
                                        span.setAttribute('onclick', 'remove_user_(this)');
                                        selected_users_div__.append(span);


                                        console.log(selected_users_div__);
                                    });
                                    inactive.addEventListener("change", function() {
                                        selectedUsers__.value += this.value + ", ";

                                        let span = document.createElement('span');
                                        let span1 = document.createElement('span');
                                        span1.classList.add('material-symbols-outlined');

                                        span1.textContent = 'Close';
                                        span.textContent = this.value;
                                        span.append(span1);
                                        span.setAttribute('onclick', 'remove_user_(this)');
                                        selected_users_div__.append(span);


                                        console.log(selected_users_div__);
                                    });
                                    unconfirmed.addEventListener("change", function() {
                                        selectedUsers__.value += this.value + ", ";

                                        let span = document.createElement('span');
                                        let span1 = document.createElement('span');
                                        span1.classList.add('material-symbols-outlined');

                                        span1.textContent = 'Close';
                                        span.textContent = this.value;
                                        span.append(span1);
                                        span.setAttribute('onclick', 'remove_user_(this)');
                                        selected_users_div__.append(span);


                                        console.log(selected_users_div__);
                                    });
                                    deleted.addEventListener("change", function() {
                                        selectedUsers__.value += this.value + ", ";

                                        let span = document.createElement('span');
                                        let span1 = document.createElement('span');
                                        span1.classList.add('material-symbols-outlined');

                                        span1.textContent = 'Close';
                                        span.textContent = this.value;
                                        span.append(span1);
                                        span.setAttribute('onclick', 'remove_user_(this)');
                                        selected_users_div__.append(span);


                                        console.log(selected_users_div__);
                                    });
                                    const remove_user_ = (tag) => {
                                        let str = tag.textContent.replace('Close', '');
                                        let selected_users__ = document.getElementById('selectedUsers__');
                                        let repl = str + ', ';
                                        let p = selected_users__.value.replace(repl, '');
                                        console.log(p);
                                        selected_users__.value = p;
                                        tag.remove();

                                    }
                                </script>
                            </div>
                        </div>
                    </li> --}}

                    {{-- <li>
                        <input type="checkbox" id="lead_status" class="check_btn">
                        <label class="ms-2 " for="lead_status">Lead Status</label>
                        <div class="content ms-3 d-none">
                            
                            <div class="content__1  d-flex align-items-center">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <select class="select2" name="" id="" multiple>
                                    <option value="Attempted to contact">Attempted to contact</option>
                                    <option value="Contact in future">Contact in future</option>
                                    <option value="Contacted">Contacted</option>
                                    <option value="Junk Lead">Junk Lead</option>
                                    <option value="Lost Lead">Lost Lead</option>
                                    <option value="Not Contacted">Not Contacted</option>
                                    <option value="Pre-Qualified">Pre-Qualified</option>
                                    <option value="Not Qulaified">Not Qulaified</option>
                                </select>
                            </div>
                        </div>
                    </li> --}}
                    
                    {{-- <li>
                        <input type="checkbox" id="no_of_emnployees" class="check_btn">
                        <label class="ms-2 " for="no_of_emnployees">No of Employees</label>
                        <div class="content d-none">
                            <div class="content__1 ms-3 d-flex align-items-center">
                                <select name="" id="">
                                    <option value="equal">=</option>
                                    <option value="not equal">!=</option>
                                    <option value="less than">
                                            <
                                    </option>
                                    <option value="less than equal">
                                            <=
                                    </option>
                                    <option value="greater than">></option>
                                    <option value="greater than equal">>=</option>
                                    <option value="between">between</option>
                                    <option value="not_between">not between</option>
                                    <option value="is_empty">is empty</option>
                                    <option value="is_not_empty">is not empty</option>
                                </select>
                            </div>
                            <div class="content__2 ms-3 mt-1 mb-3  d-flex">
                                <input type="text" placeholder="Type here">
                            </div>
                        </div>
                    </li> --}}
                    
                    {{-- <li>
                        <input type="checkbox" id="rating" class="check_btn">
                        <label class="ms-2 " for="rating">Rating</label>
                        
                            <div class="content d-none ms-3">
                                <div class="content__1  d-flex align-items-center">
                                    <select class="user_system_select ">
                                        <option value="is">is</option>
                                        <option value="isn't">isn't</option>
                                        <option value="contains">contains</option>
                                        <option value="doesn't contain">doesn't contain</option>
                                        <option value="starts with">starts with</option>
                                        <option value="ends with">ends with</option>
                                        <option value="is empty">is empty</option>
                                        <option value="is not empty">is not empty</option>
    
                                    </select>
                                </div>
                                <div class="content__2 mt-1 mb-2">
                                    <select class="select2" multiple>
                                        <option value="Acquired">Acquired</option>
                                        <option value="Active">Active</option>
                                        <option value="Market Failed">Market Failed</option>
                                        <option value="Project Cancelled">Project Cancelled</option>
                                        <option value="Shut Down">Shut Down</option>
                                    </select>
                                </div>
                            </div>
                            
                        
                    </li> --}}
                    
                    
                   
                </ul>
            </li>
        </ul>
    </div>
</div>

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
<script>
    const check_btns = document.querySelectorAll('.check_btn');
    Array.from(check_btns).forEach(element => {
        element.addEventListener('change', (event) => {
            if (element.checked) {
                // console.log(element);
                // console.log(element.parentElement.children[2]);
                element.parentElement.children[2].classList.remove('d-none');
            } else {
                element.parentElement.children[2].classList.add('d-none');
            }
        });
    });
</script>
