<div style="width:380px;" class="filter_sidebar">

    <div class="ms-3 mb-3 mt-4">
        <span style="color: black; font-weight: 500;">Dashboards</span>
        <span class="ms-5"><i class="fas fa-plus-circle text-primary"></i></span>
    </div>

    <div class="ms-3 mb-3 d-flex justify-content-between align-items-center">
        <div class="header w-75">
            <div class="">
                <select id="select2Basic" class="select2 form-select form-select-md" data-allow-clear="true">
                    <option value="">All</option>
                    <option value="">Favourite</option>
                    <option value="">Created by me</option>
                    <option value="">Shared with me</option>
                    <option value="Public"></option>
                </select>
            </div>
        </div>

        <div></div>
    </div>



    <div class="search_btn d-flex align-items-center p-2 position-relative mt-3 ms-2">
        <span class="material-symbols-outlined position-absolute" style="left: 15px">
            search
        </span>
        <input type="text" id="myInput" style="border:1px solid gray;width: 50%; border-radius:15px;padding:4px 8px 4px 40px;" placeholder="Search Here">
    </div>



    <div>
        <ul>

            <li style="list-style-type: none;">

                <ul class="outer_ul" style="list-style-type: none;">
                    <li class="mb-4 mt-3">
                        <!-- <input type="checkbox" id="annual_revenue" class="check_btn check_btn1"> -->
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2" for="org_overview">
                            <a href="{{url('/org_over_view')}}" class=" text_custom"> Org Overview</a>
                        </label>
                    </li>
                    <li class="mb-4">
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2 " for="lead_analytics"> <a href="{{url('/lead_analytics')}}" class=" text_custom"> Lead Anlytics</a></label>
                    </li>
                    <li class="mb-4">
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2 " for="deal_insights"><a href="{{url('/deal_insights')}}" class=" text_custom"> Deal Insights</a></label>
                    </li>
                    <li class="mb-4">
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2 " for="marketing_metrics"><a href="{{url('/marketing_metrics')}}" class=" text_custom"> Marketing Metrics</a></label>
                    </li>
                    <li class="mb-4">
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2 " for="sales_trend"><a href="{{url('/sales_trend')}}" class=" text_custom"> Sales Trend</a></label>
                    </li>
                    <li class="mb-4">
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2 " for="sales_followup_trend"><a href="{{url('/sales_followup_trend')}}" class=" text_custom"> Sales Follow-up Trend</a></label>
                    </li>
                    <li class="mb-4">
                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                        <label class="ms-2 " for="activity_status"><a href="{{url('/activity_status')}}" class=" text_custom">Activity Status</a></label>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</div>