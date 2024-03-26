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
                                Cấp bộ phận
                            </h6>
                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn đề</button>
                        </div>

                        <div class="sidebarBody_card bg-pink-blur" style="margin-bottom: 16px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <div class="sidebarBody_heading mt-2 mb-2 text-black">
                                            Biến động nhân sự
                                        </div>
                                    </div>
                                    <div class="mainSection_chart-container2 mt-3" id="Biến động nhân sự">
                                        <canvas id="CNS_BienDongNhanSu"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card bg-yellow-blur" style="line-height: 16px; min-height: 165px;">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-calculator-fill" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Thống kê cấp tổ chức
                                </div>
                            </div>
                            <table class="table table-bordered bg_white">
                                <thead>
                                    <tr>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Cấp tổ chức"
                                        scope="col" style="width: 32%">Cấp tổ chức</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Sản xuất"
                                        scope="col" style="width: 17%">SX</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Kinh doanh"
                                        scope="col" style="width: 17%">KD</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Văn phòng"
                                        scope="col" style="width: 17%">VP</th>  
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tổng"
                                        scope="col" style="width: 17%">Tổng</th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Lãnh đạo">
                                                Lãnh đạo
                                            </div>
                                        </td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>8</td>
                                        <th class="fw-bolder">14</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Giám đốc">
                                                Giám đốc
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>5</td>
                                        <th class="fw-bolder">7</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Trưởng ban/Quản đốc">
                                                Trưởng ban/Quản đốc
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <th class="fw-bolder">16</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Trưởng phòng/Đội trưởng">
                                                Trưởng phòng/Đội trưởng
                                            </div>
                                        </td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>12</td>
                                        <th class="fw-bolder">21</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Trưởng nhóm/Đội trưởng">
                                                Trưởng nhóm/Đội trưởng
                                            </div>
                                        </td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>15</td>
                                        <th class="fw-bolder">26</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Chuyên viên">
                                                Chuyên viên
                                            </div>
                                        </td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>15</td>
                                        <th class="fw-bolder">26</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Nhân viên">
                                                Nhân viên
                                            </div>
                                        </td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>15</td>
                                        <th class="fw-bolder">26</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Cộng tác">
                                                Cộng tác
                                            </div>
                                        </td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>15</td>
                                        <th class="fw-bolder">26</th>
                                    </tr>
                                    <tr>
                                        <td class="text-end">
                                            <div class="overText text_tb" data-bs-toggle="tooltip" data-bs-placement="top" title="Lao động phổ thông">
                                                Lao động phổ thông
                                            </div>
                                        </td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>15</td>
                                        <th class="fw-bolder">26</th>
                                    </tr>                                    
                                    <tr>
                                        <th class="fw-bolder">Tổng</th>
                                        <th class="fw-bolder">35</th>
                                        <th class="fw-bolder">43</th>
                                        <th class="fw-bolder">110</th>
                                        <th class="fw-bolder">188</th>
                                    </tr>
                                </tbody>
                            </table>
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
