<style>
    .mainSection_chart-container2 {
    width: 100%;
    height: 150px;
}
</style>
<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody" style="overflow-y: scroll">
            <div class="container">
                <div class="sidebarBody_wrapper mt-3">
                    <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                            TỔNG QUAN XUẤT KHO
                        </h6>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn đề</button>
                    </div>              
                   
                </div>

                <div class="sidebarBody_card bg-pink-blur" style="margin-bottom: 16px;">
                    {{-- Họp giao ban --}}
                    {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                    <div class="row d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-calendar3" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Thống kê tình hình nhập hàng
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
                                    <th class="fw-bolder background_blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Chờ duyệt" scope="col" style="width: 25%">CD</th>
                                    <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã nhập hàng" scope="col" style="width: 25%">DNH</th>
                                    <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Từ chối" scope="col" style="width: 25%">TC</th>
                                    <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Thành tiền" scope="col" style="width: 25%">TT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="background_blue text-center">10</td>
                                    <td class="background_green2 text-center">20</td>
                                    <td class="background_pink text-center">5</td>                                    
                                    <td class="background_yellow text-center">128,3M</td>                                    
                                </tr>                                                      
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="sidebarBody_card bg-blue-blur" style="margin-bottom: 16px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="sidebarBody_heading mt-2 mb-2 text-black">
                                    Thành tiền xuất kho theo vùng
                                </div>
                            </div>
                            <div class="mainSection_chart-container2 mt-3" id="Thành tiền xuất kho theo vùng">
                                <canvas id="XuatKho_ChiPhiTheoVung"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebarBody_card bg-blue-blur" style="margin-bottom: 16px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="sidebarBody_heading mt-2 mb-2 text-black">
                                    Thành tiền xuất kho theo tháng
                                </div>
                            </div>
                            <div class="mainSection_chart-container2 mt-3" id="Thành tiền xuất kho theo tháng">
                                <canvas id="XuatKho_ChiPhiTheoThang"></canvas>
                            </div>
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
                    <div class="sidebarBody_card bg-yellow-blur" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-card-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Lịch sử
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Phiếu xuất kho <a href="#">XXX</a> đã được tạo</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người tạo: Nguyễn Văn A
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
                                            >Phiếu xuất kho <a href="#">XXX</a> đã được tạo</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người tạo: Nguyễn Văn A
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
                                            >Phiếu xuất kho <a href="#">XXX</a> đã được tạo</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người tạo: Nguyễn Văn A
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
                                            >Phiếu xuất kho <a href="#">XXX</a> đã được tạo</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Người tạo: Nguyễn Văn A
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
            <div style="height:64px;"></div>               
        </div>
        <span id="btn-right"
            ><i class="bi bi-arrow-bar-right"></i
        ></span>
    </div>
</div>