@php
$userI = session('user');
$userRole = $userI['role'];
@endphp
@if ($userRole == 'admin')
    <div id="aside-right" class="aside-right" style="overflow-y: scroll">
        <div class="sidebar">
            <div class="sidebarBody">
                <div class="container">
                    <div class="sidebarBody_wrapper mt-3">
                        <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                            <h6 class="sidebarBody_heading-big m-0">
                                TỔNG QUAN ĐƠN VỊ
                            </h6>
                        </div>                  
                    
                    </div>

                    <div class="sidebarBody_card background_gray2">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-calculator" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Tài sản cấp phát
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
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản mới" scope="col" style="width: 18%">TSM</th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản hỏng" scope="col" style="width: 18%">TSH</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản nhân viên" scope="col" style="width: 18%">TSNV</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản chung" scope="col" style="width: 18%">TSC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_green2 text-center">20</td>
                                        <td class="background_pink text-center">12</td>
                                        <td class="background_yellow text-center">12</td>
                                        <td class="background_white text-center">2</td>
                                    </tr>                                 
                                </tbody>
                            </table>
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
                        <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px;">
                            <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-calculator-fill" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Thống kê số tài sản cấp phát
                            </div>
                        </div>
                        <table class="table" style="margin-right:5px">
                            <thead>
                                <tr>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản"
                                    scope="col" style="width: 37%">Tài sản</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Chi phí"
                                    scope="col" style="width: 14%">Chi phí</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Người nhận"
                                    scope="col" style="width: 14%">Người nhận</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã thanh toán"
                                    scope="col" style="width: 14%">Đã TT</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Chưa thanh toán"
                                    scope="col" style="width: 21%">Chưa TT</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="" style="line-height: 16px; max-height:165px; height:100%; overflow-y: scroll">
                            {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                            <div class="sidebarBody_cardmini mt-2">
                                <table class="table table-bordered">                        
                                    <tbody style="max-height: 50px; overflow-y: scroll;">
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop HP core i7">
                                                    Laptop HP core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Dell core i7">
                                                    Laptop Dell core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Asus core i7">
                                                    Laptop Asus core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Acer core i7">
                                                    Laptop Acer core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Văn phòng phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Chung">
                                                    Chung
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Văn phòng phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Chung">
                                                    Chung
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Văn phòng phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Chung">
                                                    Chung
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                        <table>
                            <tr>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tổng"
                                scope="col" style="width: 38%">Tổng</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="166.000.000"
                                scope="col" style="width: 18%">166M</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="-"
                                scope="col" style="width: 12%">-</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="200.000.000"
                                scope="col" style="width: 15%">200M</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="150.000.000"
                                scope="col" style="width: 15%">150M</th>
                            </tr>         
                        </table>
                    </div>
                
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-check-circle-fill" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Đã duyệt
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title overText">
                                            <span
                                                >Yêu cầu cấp phát Laptop làm việc</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                        <div class="sidebarBody_card background_gray2">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-file-earmark-x" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Đã từ chối
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title overText">
                                            <span
                                                >Yêu cầu cấp phát Laptop làm việc</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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

                </div>
            </div>
            <span id="btn-right"
                ><i class="bi bi-arrow-bar-right"></i
            ></span>
        </div>
    </div>
@elseif ($userRole == 'manager')
    <div id="aside-right" class="aside-right" style="overflow-y: scroll">
        <div class="sidebar">
            <div class="sidebarBody">
                <div class="container">
                    <div class="sidebarBody_wrapper mt-3">
                        <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                            <h6 class="sidebarBody_heading-big m-0">
                                TỔNG QUAN ĐƠN VỊ
                            </h6>
                        </div>                  
                    
                    </div>

                    <div class="sidebarBody_card background_gray2">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-calculator" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Tài sản cấp phát
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
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản mới" scope="col" style="width: 18%">TSM</th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản hỏng" scope="col" style="width: 18%">TSH</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản nhân viên" scope="col" style="width: 18%">TSNV</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản chung" scope="col" style="width: 18%">TSC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_green2 text-center">20</td>
                                        <td class="background_pink text-center">12</td>
                                        <td class="background_yellow text-center">12</td>
                                        <td class="background_white text-center">2</td>
                                    </tr>                                 
                                </tbody>
                            </table>
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
                        <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px;">
                            <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-calculator-fill" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Thống kê số tài sản cấp phát
                            </div>
                        </div>
                        <table class="table" style="margin-right:5px">
                            <thead>
                                <tr>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản"
                                    scope="col" style="width: 37%">Tài sản</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Chi phí"
                                    scope="col" style="width: 14%">Chi phí</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Người nhận"
                                    scope="col" style="width: 14%">Người nhận</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã thanh toán"
                                    scope="col" style="width: 14%">Đã TT</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Chưa thanh toán"
                                    scope="col" style="width: 21%">Chưa TT</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="" style="line-height: 16px; max-height:165px; height:100%; overflow-y: scroll">
                            {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                            <div class="sidebarBody_cardmini mt-2">
                                <table class="table table-bordered">                        
                                    <tbody style="max-height: 50px; overflow-y: scroll;">
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop HP core i7">
                                                    Laptop HP core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Dell core i7">
                                                    Laptop Dell core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Asus core i7">
                                                    Laptop Asus core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Acer core i7">
                                                    Laptop Acer core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Nguyễn Văn A">
                                                    Nguyễn Văn A
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Văn phòng phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Chung">
                                                    Chung
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Văn phòng phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Chung">
                                                    Chung
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Văn phòng phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Chung">
                                                    Chung
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="15.000.000">
                                                    15M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="7.000.000">
                                                    7M
                                                </div>
                                            </td>
                                        </tr>
                                                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                        <table>
                            <tr>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tổng"
                                scope="col" style="width: 38%">Tổng</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="166.000.000"
                                scope="col" style="width: 18%">166M</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="-"
                                scope="col" style="width: 12%">-</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="200.000.000"
                                scope="col" style="width: 15%">200M</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="150.000.000"
                                scope="col" style="width: 15%">150M</th>
                            </tr>         
                        </table>
                    </div>
                
                
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-check-circle-fill" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Đã duyệt
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title overText">
                                            <span
                                                >Yêu cầu cấp phát Laptop làm việc</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                        <div class="sidebarBody_card background_gray2">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-file-earmark-x" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Đã từ chối
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title overText">
                                            <span
                                                >Yêu cầu cấp phát Laptop làm việc</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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
                                                >Yêu cầu cấp phát VP phẩm</span>
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

                </div>
            </div>
            <span id="btn-right"
                ><i class="bi bi-arrow-bar-right"></i
            ></span>
        </div>
    </div>
@else
    <div id="aside-right" class="aside-right" style="overflow-y: scroll">
        <div class="sidebar">
            <div class="sidebarBody">
                <div class="container">
                    <div class="sidebarBody_wrapper mt-3">
                        <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                            <h6 class="sidebarBody_heading-big m-0">
                                TỔNG QUAN ĐƠN VỊ
                            </h6>
                        </div>                  
                    
                    </div>

                    <div class="sidebarBody_card background_gray2">
                        {{-- Họp giao ban --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                        <div class="row d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-calculator" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Tài sản cấp phát
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
                                        <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản mới" scope="col" style="width: 18%">TSM</th>
                                        <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản hỏng" scope="col" style="width: 18%">TSH</th>
                                        <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã yêu cầu" scope="col" style="width: 18%">ĐYC</th>
                                        <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Từ chối" scope="col" style="width: 18%">TC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="background_white text-center">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                                Tháng 8
                                            </div>
                                        </td>
                                        <td class="background_green2 text-center">1</td>
                                        <td class="background_pink text-center">0</td>
                                        <td class="background_yellow text-center">12</td>
                                        <td class="background_white text-center">2</td>
                                    </tr>                                 
                                </tbody>
                            </table>
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
                        <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px;">
                            <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-calculator-fill" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Thống kê TS sở hữu
                            </div>
                        </div>
                        <table class="table" style="margin-right:5px">
                            <thead>
                                <tr>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tài sản"
                                    scope="col" style="width: 37%">Tài sản</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Chi phí"
                                    scope="col" style="width: 14%">Chi phí</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Thời gian dùng"
                                    scope="col" style="width: 14%">TG dùng</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Khấu hao"
                                    scope="col" style="width: 14%">Khấu hao</th>
                                    <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Trạng thái"
                                    scope="col" style="width: 21%">Trạng thái</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="" style="line-height: 16px; max-height:165px; height:100%; overflow-y: scroll">
                            {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                            <div class="sidebarBody_cardmini mt-2">
                                <table class="table table-bordered">                        
                                    <tbody style="max-height: 50px; overflow-y: scroll;">
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop HP core i7">
                                                    Laptop HP core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="3 Tháng">
                                                    3M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Dell core i7">
                                                    Laptop Dell core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="3 Tháng">
                                                    3M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Asus core i7">
                                                    Laptop Asus core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="3 Tháng">
                                                    3M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Laptop Acer core i7">
                                                    Laptop Acer core i7
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="22.000.000">
                                                    22M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="3 Tháng">
                                                    3M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="VP Phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="40.000.000">
                                                    40M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="2 Tháng">
                                                    2M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="VP Phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="20.000.000">
                                                    20M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="2 Tháng">
                                                    2M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end" style="width: 37%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="VP Phẩm">
                                                    VP Phẩm
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="18.000.000">
                                                    18M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="2 Tháng">
                                                    2M
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 15%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                    -
                                                </div>
                                            </td>
                                            <td class="text-end" style="width: 18%">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Đã thanh toán">
                                                    Đã TT
                                                </div>
                                            </td>
                                        </tr> 
                                                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                        <table>
                            <tr>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Tổng"
                                scope="col" style="width: 31%">Tổng</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="166.000.000"
                                scope="col" style="width: 15%">166M</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                scope="col" style="width: 18%"></th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                scope="col" style="width: 15%"></th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                scope="col" style="width: 15%"></th>
                            </tr>         
                        </table>
                    </div> 
                
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                            <div class="d-flex align-items-center">
                                <div class="" style="padding-right: 4px">
                                    <i class="sidebarBody_heading bi bi-clock-history" style="margin: 0;"></i>
                                </div>
                                <div class="sidebarBody_heading mt-2 mb-2">
                                    Yêu cầu cấp phát đã gửi
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_notification-title overText">
                                            <span
                                                >Yêu cầu cấp Laptop làm việc</span>
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text">
                                                Trạng thái: Đang chờ duyệt
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
                                                >Yêu cầu cấp đồ dùng VP phẩm</span>
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text">
                                                Trạng thái: Đang chờ duyệt
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
                                                >Yêu cầu cấp đồ dùng VP phẩm</span>
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text">
                                                Trạng thái: Đang chờ duyệt
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
                                                >Yêu cầu cấp đồ dùng VP phẩm</span>
                                        </div>
                                        <div class="sidebarBody_notification-status">
                                            <div class="sidebarBody_card-text">
                                                Trạng thái: Đang chờ duyệt
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

                </div>
            </div>
            <span id="btn-right"
                ><i class="bi bi-arrow-bar-right"></i
            ></span>
        </div>
    </div>
@endif