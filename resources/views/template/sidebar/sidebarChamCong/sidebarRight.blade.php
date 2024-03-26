@php
$userI = session('user');
$userRole = $userI['role'];
@endphp
@if ($userRole == 'admin')
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
                                    Tình hình chấm công của nhân viên
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
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="" scope="col" style="width: 28%"></th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Vắng" scope="col" style="width: 18%">V</th>
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đi muộn" scope="col" style="width: 18%">ĐM</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Về sớm" scope="col" style="width: 18%">VS</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Vi phạm" scope="col" style="width: 18%">VP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_pink text-center">20</td>
                                        <td class="background_green2 text-center">5</td>
                                        <td class="background_yellow text-center">5</td>
                                        <td class="background_white text-center">10</td>
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

                <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                    <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px; overflow-y: scroll">
                        <div class="sidebarBody_heading-wrapper">
                            <p style="text-align: center; font-size:24px; font-weight:700;"><i class="bi bi-stopwatch"></i>48.00 <br>
                                <span style="text-align: center; font-size:14px; font-weight:700;">Tổng giờ làm (tháng)</span>
                            </p>
                        </div>                        
                        
                            <table class="table-reponsive mt-4 col-6 col-md-12">
                                <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 4.2 giờ <br> <span style="color:rgb(184, 184, 184)">Hôm nay</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 0 giờ <br> <span style="color:rgb(184, 184, 184)">Làm thêm</span></th>                                        
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 1 ngày <br> <span style="color:rgb(184, 184, 184)">Đi công tác</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 1 ngày <br> <span style="color:rgb(184, 184, 184)">Nghỉ lễ</span></th>                                        
                                </tr>
                            </thead>
                            </table>

                            {{-- <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> <span style="border: 1px solid red; width: 20px; margin:0px;"></span><br> 4.2 giờ <br> <span>Hôm nay</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 0 giờ <br> <span>Làm thêm</span></th>                                        
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 1 ngày <br> <span>Đi công tác</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 1 ngày <br> <span>Nghỉ lễ</span></th>                                        
                                </tr>
                            </thead> --}}
                            
                                                   
                    </div>
                </div>                         

                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-card-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Đề xuất của cấp dưới
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Chấm công muộn do cấp trên yêu cầu</span>
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
                                            >Không chấm công do đi công tác</span>
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
                                            >Về sớm vì....</span>
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
                                            >Chấm công muộn vì.....</span>
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
@elseif ($userRole == 'manager')
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
                                    Tình hình chấm công của cá nhân
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
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="" scope="col" style="width: 28%"></th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Đúng giờ" scope="col" style="width: 18%">ĐG</th>
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đi muộn" scope="col" style="width: 18%">ĐM</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Về sớm" scope="col" style="width: 18%">VS</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Vi phạm" scope="col" style="width: 18%">VP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_pink text-center">1</td>
                                        <td class="background_green2 text-center">0</td>
                                        <td class="background_yellow text-center">2</td>
                                        <td class="background_white text-center">2</td>
                                    </tr>                                                                        
                                </tbody>
                            </table>
                        </div>


                    </div>

                    <div class="sidebarBody_card background_gray2 mt-4 col-6 col-md-12">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-file-earmark-spreadsheet-fill" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Tình hình chấm công của nhân viên
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
                                                                            <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="" scope="col" style="width: 28%"></th>

                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Vắng" scope="col" style="width: 18%">V</th>
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đi muộn" scope="col" style="width: 18%">ĐM</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Về sớm" scope="col" style="width: 18%">VS</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Vi phạm" scope="col" style="width: 18%">VP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_pink text-center">20</td>
                                        <td class="background_green2 text-center">5</td>
                                        <td class="background_yellow text-center">5</td>
                                        <td class="background_white text-center">10</td>
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

                <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                    <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px; overflow-y: scroll">
                        <div class="sidebarBody_heading-wrapper">
                            <p style="text-align: center; font-size:24px; font-weight:700;"><i class="bi bi-stopwatch"></i>48.00 <br>
                                <span style="text-align: center; font-size:14px; font-weight:700;">Tổng giờ làm (tháng)</span>
                            </p>
                        </div>                        
                        
                            <table class="table-reponsive mt-4 col-6 col-md-12">
                                <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 4.2 giờ <br> <span style="color:rgb(184, 184, 184)">Hôm nay</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 0 giờ <br> <span style="color:rgb(184, 184, 184)">Làm thêm</span></th>                                        
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 1 ngày <br> <span style="color:rgb(184, 184, 184)">Đi công tác</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 1 ngày <br> <span style="color:rgb(184, 184, 184)">Nghỉ lễ</span></th>                                        
                                </tr>
                            </thead>
                            </table>

                            {{-- <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> <span style="border: 1px solid red; width: 20px; margin:0px;"></span><br> 4.2 giờ <br> <span>Hôm nay</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 0 giờ <br> <span>Làm thêm</span></th>                                        
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 1 ngày <br> <span>Đi công tác</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 1 ngày <br> <span>Nghỉ lễ</span></th>                                        
                                </tr>
                            </thead> --}}
                            
                                                   
                    </div>
                </div>     
                
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-file-earmark-text-fill" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Gửi đề xuất
                            </div>                            
                        </div> 
                        <div class="col-md-6 mb-3 position-relative" style="width:100%">
                            <form method="GET" action="#">                                
                                <div class="form-group has-search">
                                    <span type ="submit" class="bi bi-send form-control-feedback fs-5"></span>
                                    <input type="text" class="form-control" placeholder="Viết đề xuất... (Ấn enter để gửi)">                                    
                                </div>
                            </form>
                        </div>                                              
                    </div>
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-card-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Đề xuất đã gửi
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Chấm công muộn do cấp trên yêu cầu</span>
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
                                            >Không chấm công do đi công tác</span>
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
                                            >Về sớm vì....</span>
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
                                            >Chấm công muộn vì.....</span>
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

                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-card-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Đề xuất của nhân viên
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Chấm công muộn do cấp trên yêu cầu</span>
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
                                            >Không chấm công do đi công tác</span>
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
                                            >Về sớm vì....</span>
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
                                            >Chấm công muộn vì.....</span>
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
@else
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

                    <div class="sidebarBody_card background_gray2 mt-4 col-6 col-md-12">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-file-earmark-spreadsheet-fill" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Tình hình chấm công
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
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="" scope="col" style="width: 28%"></th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Đúng giờ" scope="col" style="width: 18%">ĐG</th>
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đi muộn" scope="col" style="width: 18%">ĐM</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Về sớm" scope="col" style="width: 18%">VS</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Vi phạm" scope="col" style="width: 18%">VP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_pink text-center">4</td>
                                        <td class="background_green2 text-center">1</td>
                                        <td class="background_yellow text-center">2</td>
                                        <td class="background_white text-center">0</td>
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

                <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                    <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px; overflow-y: scroll">
                        <div class="sidebarBody_heading-wrapper">
                            <p style="text-align: center; font-size:24px; font-weight:700;"><i class="bi bi-stopwatch"></i>48.00 <br>
                                <span style="text-align: center; font-size:14px; font-weight:700;">Tổng giờ làm (tháng)</span>
                            </p>
                        </div>                        
                        
                            <table class="table-reponsive mt-4 col-6 col-md-12">
                                <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 4.2 giờ <br> <span style="color:rgb(184, 184, 184)">Hôm nay</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 0 giờ <br> <span style="color:rgb(184, 184, 184)">Làm thêm</span></th>                                        
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 1 ngày <br> <span style="color:rgb(184, 184, 184)">Đi công tác</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"><br> 1 ngày <br> <span style="color:rgb(184, 184, 184)">Nghỉ lễ</span></th>                                        
                                </tr>
                            </thead>
                            </table>

                            {{-- <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> <span style="border: 1px solid red; width: 20px; margin:0px;"></span><br> 4.2 giờ <br> <span>Hôm nay</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 0 giờ <br> <span>Làm thêm</span></th>                                        
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 1 ngày <br> <span>Đi công tác</span></th>
                                    <th class="fw-bolder" scope="col" style="width: 50%"> nnn<br> 1 ngày <br> <span>Nghỉ lễ</span></th>                                        
                                </tr>
                            </thead> --}}
                            
                                                   
                    </div>
                </div>     
                
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-file-earmark-text-fill" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Gửi đề xuất
                            </div>                            
                        </div> 
                        <div class="col-md-6 mb-3 position-relative" style="width:100%">
                            <form method="GET" action="#">                                
                                <div class="form-group has-search" >
                                    <span type ="submit" class="bi bi-send form-control-feedback fs-5"></span>
                                    <input type="text" class="form-control" placeholder="Viết đề xuất... (Ấn enter để gửi)">                                    
                                </div>
                            </form>
                        </div>                                              
                    </div>
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-card-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Đề xuất đã gửi
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Chấm công muộn do cấp trên yêu cầu</span>
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
                                            >Không chấm công do đi công tác</span>
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
                                            >Về sớm vì....</span>
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
                                            >Chấm công muộn vì.....</span>
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
@endif