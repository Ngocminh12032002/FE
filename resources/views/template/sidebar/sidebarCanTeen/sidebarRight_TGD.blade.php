<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody" style="overflow-y: scroll">
            <div class="container">
                <div class="sidebarBody_wrapper mt-3">
                    <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                            TỔNG QUAN ĐƠN VỊ
                        </h6>
                    </div>
                    <div class="sidebarBody_card background_gray2">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-file-earmark-spreadsheet-fill" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Suất ăn
                                </div>
                            </div>
                            {{-- <div class="col-6 d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-graph-up-arrow" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Tình hình chấm công của nhân viên
                                </div>
                            </div>
                            <div class="col-6" data-bs-toggle="tooltip" data-bs-placement="top" title="Chọn báo cáo">
                                <select class="selectpicker" data-dropup-auto="false" data-size="5" required title="Chọn báo cáo" name="type">
                                    <option selected>Chọn báo cáo</option>
                                    <option value="Nghỉ phép">Tuần</option>
                                    <option value="Nghỉ không lương">Tháng</option>
                                    <option value="Nghỉ không lương">Quý</option>
                                    <option value="Nghỉ không lương">Năm</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="sidebarBody_cardmini mt-3">
                            <table class="settable table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="" scope="col" style="width: 25%"></th>
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Thứ 2" scope="col" style="width: 15%">T2</th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Thứ 3" scope="col" style="width: 15%">T3</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Thứ 4" scope="col" style="width: 15%">T4</th>
                                        <th class="fw-bolder background_blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Thứ 5" scope="col" style="width: 15%">T5</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Thứ 6" scope="col" style="width: 15%">T6</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Suất ăn">
                                                Suất ăn
                                            </div>
                                        </td>
                                        <td class="background_green2 text-center">50</td>
                                        <td class="background_pink text-center">50</td>
                                        <td class="background_yellow text-center">50</td>
                                        <td class="background_blue text-center">50</td>
                                        <td class="background_white text-center">50</td>
                                    </tr> 
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Sỹ số">
                                                Sỹ số
                                            </div>
                                        </td>
                                        <td class="background_green2 text-center">50</td>
                                        <td class="background_pink text-center">48</td>
                                        <td class="background_yellow text-center">49</td>
                                        <td class="background_blue text-center">46</td>
                                        <td class="background_white text-center">50</td>
                                    </tr>                                                                         
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>

                {{-- <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-pink-blur">
                        Vấn đề tồn đọng
                        @include('template.components.KeyIndex.elementCard', ['heading' => 'Vấn đề tồn đọng', 'heading_mini' => 'Tồn đọng/Phát sinh', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-x-octagon-fill'])
                        
                        Đề xuất
                        @include('template.components.KeyIndex.elementCard', ['heading' => 'Đề xuất', 'title_today' => 'Đã duyệt', 'title_week' => 'Đã gửi', 'title_month' => 'Từ chối', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-list-ul'])
                        
                        Số nhiệm vụ quá hạn
                        @include('template.components.KeyIndex.elementCard', ['heading' => 'Số nhiệm vụ quá hạn', 'heading_mini' => 'Quá hạn/Tổng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-ticket-detailed'])
                    </div>
                </div> --}}

                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-card-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Báo cáo
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Báo cáo chi phí ăn</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người gửi: Nguyễn Văn A
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Báo cáo chi phí ăn</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người gửi: Nguyễn Văn A
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Báo cáo chi phí mua NVL</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người gửi: Nguyễn Văn A
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Báo cáo chi phí ăn</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người gửi: Nguyễn Văn A
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                              
                
            </div>
        </div>
        <span id="btn-right"
            ><i class="bi bi-arrow-bar-right"></i
        ></span>
    </div>
</div>
