<style>
    .settable1 {
    padding: 4px;
    /* background-color: #fff; */
    box-shadow: rgb(0 0 0 / 5%) 0px 6px 24px 0px,
        rgb(0 0 0 / 8%) 0px 0px 0px 1px;
    }
    .bg_white 
    {
        background-color: #fff;
    }
    .text_tb 
    {
        text-align: left;
        margin-left: 4px;
    }
    .mainSection_chart-container2 
    {
    width: 100%;
    height: 150px;
    }
</style>
<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody">
            @if (env('FE_LAYOUT'))
                <div class="container">
                    <div class="sidebarBody_wrapper mt-3">
                        <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                            <h6 class="sidebarBody_heading-big m-0">
                                Cấp bộ phận
                            </h6>
                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn đề</button>
                        </div>
                        <div class="sidebarBody_card bg-yellow-blur">
                            {{-- Họp giao ban --}}
                            @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Chỉ tiêu', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '0', 'today_total' => '1', 'week_completed' => '4', 'week_total' => '6','month_completed' => '2', 'month_total' => '24', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week'])
                        </div>
                    </div>

                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card bg-pink-blur">
                            {{-- Vấn đề tồn đọng --}}
                            @include('template.components.KeyIndex.elementCard', ['heading' => 'Vấn đề tồn đọng', 'heading_mini' => 'Đã phản hồi/Phát sinh', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '0', 'today_total' => '0', 'week_completed' => '0', 'week_total' => '0','month_completed' => '0', 'month_total' => '0', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-x-octagon-fill'])
                            
                            {{-- Số nhiệm vụ quá hạn --}}
                            {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Số nhiệm vụ quá hạn', 'heading_mini' => 'Quá hạn/Tổng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-ticket-detailed']) --}}
                        </div>
                    </div>
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card bg-blue-blur">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-2 mb-2">
                                    Thông báo
                                </h6>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title">
                                            <span
                                                >Thanh toán cho agency thang máy Chicilon</span
                                            >
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text text-success">
                                                Hoàn thành
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <div class="sidebarBody_notification-date" href="">14/02/2023</div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title">
                                            <span
                                                >Thanh toán cho agency thang máy Chicilon</span
                                            >
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text text-danger">
                                                Không thể giải quyết
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <div class="sidebarBody_notification-date" href="">14/02/2023</div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title">
                                            <span
                                                >Thanh toán cho agency thang máy Chicilon</span
                                            >
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text text-danger">
                                                Không xác định được nguyên nhân
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <div class="sidebarBody_notification-date" href="">14/02/2023</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card bg-blue-blur">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-2 mb-2">
                                    Biên bản cuộc họp cấp đơn vị
                                </h6>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >Họp giao ban tuần 3 tháng 3/2023</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                14/02/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >Họp giao ban tuần 3 tháng 3/2023</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                14/02/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >Họp giao ban tuần 3 tháng 3/2023</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                14/02/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >Họp giao ban tuần 3 tháng 3/2023</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                14/02/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >Họp giao ban tuần 3 tháng 3/2023</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                14/02/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >Họp giao ban tuần 3 tháng 3/2023</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                14/02/2023
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarBody_card-items-right">
                                        <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            @else
                <div class="container">
                    <div class="sidebarBody_wrapper mt-3">
                        <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                            <h6 class="sidebarBody_heading-big m-0">
                                TỔNG QUAN GÓI TRANG BỊ
                            </h6>
                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn đề</button>
                        </div>                                           
                    </div>

                    <div class="sidebarBody_card bg-yellow-blur" style="margin-bottom: 16px;">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-calendar3" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Thống kê gói trang bị
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
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Gói" scope="col" style="width: 33%">Gói</th>
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Dụng cụ" scope="col" style="width: 33%">Dụng cụ</th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Trang bị" scope="col" style="width: 33%">Trang bị</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Số lượng">
                                                Số lượng
                                            </div>
                                        </td>
                                        <td class="background_green2 text-center">200</td>
                                        <td class="background_pink text-center">300</td>                                    
                                    </tr>                  
                                </tbody>
                            </table>
                        </div>
                    </div> 

                    <div class="sidebarBody_card bg-pink-blur" style="margin-bottom: 16px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <div class="sidebarBody_heading mt-2 mb-2 text-black">
                                        Lượng trang bị theo tháng
                                    </div>
                                </div>
                                <div class="mainSection_chart-container2 mt-3" id="Lượng trang bị theo tháng">
                                    <canvas id="GTB_TrangBiTheoThang"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>     

                    <div class="sidebarBody_card background_gray2" style="margin-bottom: 16px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <div class="sidebarBody_heading mt-2 mb-2 text-black">
                                        Số lượng trang bị/dụng cụ có trong vùng
                                    </div>
                                </div>
                                <div class="mainSection_chart-container2 mt-3" id="Số lượng trang bị/dụng cụ có trong vùng">
                                    <canvas id="GTB_SoLuongTrangBi"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>     
                                  
                </div>
            @endif
            {{-- <div style="height: 64px;"></div> --}}
        </div>
        <span id="btn-right"
            ><i class="bi bi-arrow-bar-right"></i
        ></span>
    </div>
</div>
