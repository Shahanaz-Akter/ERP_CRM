<div style="width:380px;" class="filter_sidebar">
    <label class="p-2">Filter Contacts By</label>
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
                        <input type="checkbox" id="latest_email_status" class="check_btn">
                        <label class="ms-1" for="latest_email_status">Latest Email Status</label>
                        <div class="content d-none">
                            <select class="ms-3 mb-1" name="" id=""
                                style="padding: 3px 10px;width:80%;">
                                <option value="sent">Sent</option>
                                <option value="not_sent">Not Sent</option>
                                <option value="opened">Opened</option>
                                <option value="not_opened">Not Opened</option>
                                <option value="clicked">Clicked</option>
                                <option value="received">Received</option>
                                <option value="not_received">Not Received</option>
                                <option value="bounced">Bounched</option>
                                <option value="Opened_and_not_responded">Opened and not responded</option>
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
                            <div class="content__2 ms-3 mt-1 d-flex">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="last_days">last days</option>
                                    <option value="on">On</option>
                                    <option value="before">before</option>
                                    <option value="after">after</option>
                                    <option value="between">between</option>
                                    <option value="today">today</option>
                                    <option value="yesterday">yesterday</option>
                                    <option value="this_week">This Week</option>
                                    <option value="this_month">This Month</option>
                                    <option value="this_year">This Year</option>
                                    <option value="last_week">Last Week</option>
                                    <option value="last_month">Last Month</option>
                                </select>

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center">

                                <select name="" class="myselect flex-grow-1">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                            <div class="content__3 ms-3 mb-2">
                                <b>and Status is</b>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="opened" style="border:1px solid gray;">
                                    <label class="form-check-label" for="opened">
                                        Opened
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="checked" style="border:1px solid gray;">
                                    <label class="form-check-label" for="checked">
                                        Clicked
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="not_opened" style="border:1px solid gray;">
                                    <label class="form-check-label" for="not_opened">
                                        Not Opened
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="bounced" style="border:1px solid gray;">
                                    <label class="form-check-label" for="bounced">
                                        Bounced
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="responded" style="border:1px solid gray;">
                                    <label class="form-check-label" for="responded">
                                        Responded
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="opened_and_not_responded" style="border:1px solid gray;">
                                    <label class="form-check-label" for="opened_and_not_responded">
                                        Opened and not responded
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="email_status"
                                        id="any_of_the_above" style="border:1px solid gray;">
                                    <label class="form-check-label" for="any_of_the_above">
                                        Any of the above
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="activities" class="check_btn">
                        <label class="ms-1 " for="activities">Activities</label>
                        <div class="content d-none ms-4">
                            <div class="radio_container__">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="activities"
                                        onchange="open_radio_subcontent(this)" id="without_open_activity"
                                        style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_open_activity">
                                        Without Open activity
                                    </label>
                                </div>
                                <div class="radio_container__content d-none">

                                </div>
                            </div>
                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio" name="activities"
                                        id="overdue" style="border:1px solid gray;"
                                        onchange="open_radio_subcontent(this)">
                                    <label class="form-check-label" for="overdue">
                                        Overdue
                                    </label>
                                </div>
                                <div class="radio_container__content d-none">
                                    <select name="" style="width: 100%;">
                                        <option value="Activities">Activities</option>
                                        <option value="Tasks">Tasks</option>
                                        <option value="Calls">Calls</option>

                                    </select>
                                </div>
                            </div>
                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio" name="activities"
                                        id="activity_due" style="border:1px solid gray;"
                                        onchange="open_radio_subcontent(this)">
                                    <label class="form-check-label" for="activity_due">
                                        Activity Due
                                    </label>
                                </div>
                                <div class="radio_container__content d-none">
                                    <select name="" style="width: 100%;">
                                        <option value="Today">Today</option>
                                        <option value="Tomorrow">Tomorrow</option>
                                        <option value="Next 7 Days">Next 7 Days</option>
                                        <option value="Today + Overdue" selected>Today + Overdue</option>

                                    </select>
                                </div>
                            </div>
                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio"
                                        onchange="open_radio_subcontent(this)" name="activities"
                                        id="without_any_activity" style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_any_activity">
                                        Without Any Activity
                                    </label>
                                </div>
                                <div class="radio_container__content d-none d-flex  align-items-center">
                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="last_days">last days</option>
                                        <option value="on">On</option>
                                        <option value="before">before</option>
                                        <option value="after">after</option>
                                        <option value="between">between</option>
                                        <option value="today">today</option>
                                        <option value="yesterday">yesterday</option>
                                        <option value="this_week">This Week</option>
                                        <option value="this_month">This Month</option>
                                        <option value="this_year">This Year</option>
                                        <option value="last_week">Last Week</option>
                                        <option value="last_month">Last Month</option>
                                    </select>

                                    <input type="text" placeholder="2" style="width: 40px;" class="text-center">

                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="days">Days</option>
                                        <option value="months">Months</option>
                                        <option value="weeks">Weeks</option>
                                    </select>
                                </div>
                            </div>
                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content"
                                        onchange="open_radio_subcontent(this)" type="radio" name="activities"
                                        id="activity_done" style="border:1px solid gray;">
                                    <label class="form-check-label" for="activity_done">
                                        Activity Done
                                    </label>
                                </div>
                                <div class="radio_container__content d-none d-flex  align-items-center">
                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="last_days">last days</option>
                                        <option value="on">On</option>
                                        <option value="before">before</option>
                                        <option value="after">after</option>
                                        <option value="between">between</option>
                                        <option value="today">today</option>
                                        <option value="yesterday">yesterday</option>
                                        <option value="this_week">This Week</option>
                                        <option value="this_month">This Month</option>
                                        <option value="this_year">This Year</option>
                                        <option value="last_week">Last Week</option>
                                        <option value="last_month">Last Month</option>
                                    </select>

                                    <input type="text" placeholder="2" style="width: 40px;" class="text-center">

                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="days">Days</option>
                                        <option value="months">Months</option>
                                        <option value="weeks">Weeks</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="notes" class="check_btn">
                        <label class="ms-1 " for="notes">Notes</label>
                        <div class="content d-none ms-4">

                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio"
                                        onchange="open_radio_subcontent(this)" name="activities"
                                        id="without_any_notes" style="border:1px solid gray;">
                                    <label class="form-check-label" for="without_any_notes">
                                        Without Any Notes
                                    </label>
                                </div>
                                <div class="radio_container__content d-none d-flex  align-items-center">
                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="last_days">last days</option>
                                        <option value="on">On</option>
                                        <option value="before">before</option>
                                        <option value="after">after</option>
                                        <option value="between">between</option>
                                        <option value="today">today</option>
                                        <option value="yesterday">yesterday</option>
                                        <option value="this_week">This Week</option>
                                        <option value="this_month">This Month</option>
                                        <option value="this_year">This Year</option>
                                        <option value="last_week">Last Week</option>
                                        <option value="last_month">Last Month</option>
                                    </select>

                                    <input type="text" placeholder="2" style="width: 40px;" class="text-center">

                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="days">Days</option>
                                        <option value="months">Months</option>
                                        <option value="weeks">Weeks</option>
                                    </select>
                                </div>
                            </div>


                            <div class="radio_container__ mb-2">
                                <div class="form-check">
                                    <input class="form-check-input with_sub_content" type="radio"
                                        onchange="open_radio_subcontent(this)" name="activities" id="notes_added"
                                        style="border:1px solid gray;">
                                    <label class="form-check-label" for="notes_added">
                                        Notes Added
                                    </label>
                                </div>
                                <div class="radio_container__content d-none d-flex  align-items-center">
                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="last_days">last days</option>
                                        <option value="on">On</option>
                                        <option value="before">before</option>
                                        <option value="after">after</option>
                                        <option value="between">between</option>
                                        <option value="today">today</option>
                                        <option value="yesterday">yesterday</option>
                                        <option value="this_week">This Week</option>
                                        <option value="this_month">This Month</option>
                                        <option value="this_year">This Year</option>
                                        <option value="last_week">Last Week</option>
                                        <option value="last_month">Last Month</option>
                                    </select>

                                    <input type="text" placeholder="2" style="width: 40px;" class="text-center">

                                    <select name="" class="myselect flex-grow-1" style="padding:2px;">
                                        <option value="days">Days</option>
                                        <option value="months">Months</option>
                                        <option value="weeks">Weeks</option>
                                    </select>
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
                        <input type="checkbox" id="campaigns" class="check_btn">
                        <label class="ms-1 " for="campaigns">Campaigns</label>
                        <div class="content d-none">
                            <div class="content__1 ms-3 ">

                                <select class="user_system_select ms-2 mb-1" style="width: 100%;">
                                    <option value="null" selected>
                                        <-Select Campaign Type->
                                    </option>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Banner Ads">Banner Ads</option>
                                    <option value="Conference">Conference</option>
                                    <option value="Direct Mail">Direct Mail</option>
                                    <option value="Email">Email</option>
                                    <option value="Others">Others</option>
                                    <option value="Partners">Partners</option>
                                    <option value="Public Relations">Public Relations</option>
                                    <option value="Referral Program">Referral Program</option>
                                    <option value="Telemarketing">Telemarketing</option>
                                    <option value="Trade Show">Trade Show</option>
                                    <option value="Webinar">Webinar</option>


                                </select>
                                <select class="user_system_select ms-2" style="width: 100%;">
                                    <option value="null" selected>
                                        <-Select Campaign Status->
                                    </option>
                                    <option value="Active">Active</option>
                                    <option value="Complete">Complete</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Planning">Planning</option>

                                </select>
                                <div style="@auth @endauth">
                                    <input class="ms-2 mt-1" type="text" width="100%;"
                                        placeholder="Campaign Name">
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
                        <label class="ms-2 " for="city">Assistant</label>

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
                        <label class="ms-2 " for="city">Asst Phone</label>

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
                        <label class="ms-2 " for="city">Contact Name</label>

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
                        <label class="ms-2 " for="city">Contact Owner</label>

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
                        <input type="checkbox" id="created_time" class="check_btn">
                        <label class="ms-2 " for="created_time">Date of Birth</label>
                        <div class="content d-none ms-3">
                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="user_system_select" oninput="DateOfBirthValue(this)">
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


                                <input type="text" placeholder="2" id="DateOfBirthText" style="width: 50px;margin:0;"
                                    class="text-center mx-1 ">

                                <select name="" class="user_system_select " id="DateOfBirthDuration">
                                    <option value="days">Days</option>
                                    <option value="weeks">Weeks</option>
                                    <option value="months">Months</option>
                                </select>

                                <input type="date" name="" id="DateOfBirthDate" class="ms-1 d-none">

                        
                                    <input type="date" name="" id="DateOfBirthFromDate" class="ms-1 d-none"> <span class=" d-none" id="DateOfBirthFromTo"> - </span>
                                    <input type="date" name="" id="DateOfBirthToDate" class=" d-none">
                                

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Department</label>

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
                        <input type="checkbox" id="email" class="check_btn">
                        <label class="ms-2 " for="email">Email</label>
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
                        <input type="checkbox" id="email_opt_out" class="check_btn">
                        <label class="ms-2 " for="email_opt_out">Email Opt Out</label>
                        <div class="content d-flex align-items-center d-none ms-3">
                            <div class="content__1  d-flex align-items-center me-2">
                                <label for="">Is</label>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <select class=" ">
                                    <option value="selected">Selected</option>
                                    <option value="not selected">Not Selected</option>

                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="Fax" class="check_btn">
                        <label class="ms-2 " for="Fax">Fax</label>
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
                        <input type="checkbox" id="first_name" class="check_btn">
                        <label class="ms-2 " for="first_name">First Name</label>
                        <div class="content d-none">
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
                        <input type="checkbox" id="phone" class="check_btn">
                        <label class="ms-2 " for="phone">Home Phone</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="last_activity_time" class="check_btn">
                        <label class="ms-2 " for="last_activity_time">Last Activity Time</label>
                        <div class="content d-none ms-3">

                            <div class="content__2 text-align-center d-flex">
                                <select name="" class="user_system_select">
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
                                    class="text-center mx-1">

                                <select name="" class="user_system_select">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="last_name" class="check_btn">
                        <label class="ms-2 " for="last_name">Last Name</label>
                        <div class="content d-none">
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
                        <input type="checkbox" id="lead_source" class="check_btn">
                        <label class="ms-2 " for="lead_source">Lead Source</label>
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
                                <select class="select2" name="" id="" multiple>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Cold Call">Cold Call</option>
                                    <option value="Employee Referral">Employee Referral</option>
                                    <option value="External Referral">External Referral</option>
                                    <option value="Online Store">Online Store</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Partner">Partner</option>
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
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Mailing City</label>

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
                        <input type="checkbox" id="country" class="check_btn">
                        <label class="ms-2 " for="country">Mailing Country</label>
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
                        <input type="checkbox" id="state" class="check_btn">
                        <label class="ms-2 " for="state">Mailing State</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <input type="checkbox" id="street" class="check_btn">
                        <label class="ms-2 " for="street">Mailing Street</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="zip_code" class="check_btn">
                        <label class="ms-2 " for="zip_code">Mailing Zip</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="mobile" class="check_btn">
                        <label class="ms-2 " for="mobile">Mobile</label>
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
                                <input class="form-control" type="text" placeholder="Type Here"
                                    style="width:100%;border:1px solid gray;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="modified_by" class="check_btn">
                        <label class="ms-2 " for="modified_by">Modified By</label>
                        <div class="content d-none mb-3 ms-3">
                           
                            <div class="content__1 d-flex align-items-center " style="width:100%;margin-left:10px;">
                                <select class="user_system_select ">
                                    <option value="is">is</option>
                                    <option value="isn't">isn't</option>
                                    <option value="is empty">is empty</option>
                                    <option value="is not empty">is not empty</option>
                                </select>
                                <select id="userType__3" class="user_system_select">
                                    <option value="null">Select</option>
                                    <option value="all">All</option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                    <option value="unconfirmed">unconfirmed</option>
                                    <option value="deleted">deleted</option>
                                </select>
                                
                            </div>
                        </div>
                    </li>
                     
                    <li>
                        <input type="checkbox" id="modified_time" class="check_btn">
                        <label class="ms-2 " for="modified_time">Modified Time</label>
                        <div class="content d-none">
                            
                            <div class="content__2 p-3 d-flex">
                                <select name="" class="user_system_select ">
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

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center mx-1">

                                <select name="" class="user_system_select ">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="weeks">Weeks</option>
                                </select>

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" class="check_btn" id="city">
                        <label class="ms-2 " for="city">Other City</label>

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
                        <input type="checkbox" id="country" class="check_btn">
                        <label class="ms-2 " for="country">Other Country</label>
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
                        <input type="checkbox" id="phone" class="check_btn">
                        <label class="ms-2 " for="phone">Other Phone</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="state" class="check_btn">
                        <label class="ms-2 " for="state">Other State</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <input type="checkbox" id="street" class="check_btn">
                        <label class="ms-2 " for="street">Other Street</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="zip_code" class="check_btn">
                        <label class="ms-2 " for="zip_code">Other Zip</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="zip_code" class="check_btn">
                        <label class="ms-2 " for="zip_code">Reporting To</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="salutation" class="check_btn">
                        <label class="ms-2 " for="salutation">Salutation</label>
                        <div class="content d-none ms-3">
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
                                <select class="user_system_select" >
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Prof.">Prof.</option>
                                </select>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="secondary_email" class="check_btn">
                        <label class="ms-2 " for="secondary_email">Secondary Email</label>
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
                                    <option value="is blocked">is blocked</option>
                                    <option value="is not blocked">is not blocked</option>

                                </select>
                            </div>
                            <div class="content__2 mt-1 mb-2">
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="skype_id" class="check_btn">
                        <label class="ms-2 " for="skype_id">Skype ID</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <input type="checkbox" id="tag" class="check_btn">
                        <label class="ms-2 " for="tag">Tag</label>
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
                                <select class="user_system_select ms-1 me-3" >
                                   <option value="">No records found</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="title" class="check_btn">
                        <label class="ms-2 " for="title">Title</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="twitter" class="check_btn">
                        <label class="ms-2 " for="twitter">Twitter</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="unsubscribed_mode" class="check_btn">
                        <label class="ms-2 " for="unsubscribed_mode">Unsubscribed Mode</label>
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
                                <select class="user_system_select" >
                                    <option value="Consent form">Consent form</option>
                                    <option value="Manual">Manual</option>
                                    <option value="Unsubscribed Link">Unsubscribed Link</option>
                                    <option value="Zoho Campaigns">Zoho Campaigns</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="unsubscribed_time" class="check_btn">
                        <label class="ms-2 " for="unsubscribed_time">Unsubscribed Time</label>
                        <div class="content d-none ms-3">
                            <div class="content__2  d-flex">
                                <select name="" class="user_system_select">
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

                                <input type="text" placeholder="2" style="width: 50px;" class="text-center mx-1">

                                <select name="" class="user_system_select">
                                    <option value="days">Days</option>
                                    <option value="weeks">Weeks</option>
                                    <option value="months">Months</option>
                                </select>

                            </div>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" id="website" class="check_btn">
                        <label class="ms-2 " for="website">Website</label>
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
                                <input type="text" class="form-control" placeholder="Type Here" style="width:100%;" class="">
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
