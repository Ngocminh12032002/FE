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

                <div class="sidebarBody_card background_gray2">
                    {{-- Họp giao ban --}}
                    {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                    <div class="row d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-calendar3" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Số giờ làm cá nhân
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
                                    <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Số giờ Overtime" scope="col" style="width: 18%">OT</th>
                                    <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Dự án" scope="col" style="width: 18%">DA</th>
                                    <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Nhiệm vụ" scope="col" style="width: 18%">NV</th>
                                    <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Hoàn thành nhiệm vụ" scope="col" style="width: 18%">HTNV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="background_white text-center">
                                        <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                            Tháng 8
                                        </div>
                                    </td>
                                    <td class="background_green2 text-center">5</td>
                                    <td class="background_pink text-center">1</td>
                                    <td class="background_yellow text-center">2</td>
                                    <td class="background_white text-center">1</td>
                                </tr>                                                                  
                            </tbody>
                        </table>
                    </div>
                </div> 

                <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                    <div class="sidebarBody_card" style="line-height: 16px; max-height: 165px;">
                        <div class="d-flex align-items-center">
                        <div class="" style="padding-right: 4px">
                            <i class="sidebarBody_heading bi bi-table" style="margin: 0;"></i>
                        </div>
                        <div class="sidebarBody_heading mt-2 mb-2">
                            Dự án làm thêm
                        </div>
                    </div>                    
                    <div class="" style="line-height: 16px; height:100%;">
                        {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                        <div class="sidebarBody_cardmini mt-2">
                            <table class="table table-bordered"> 
                                <thead>
                                    <tr>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Dự án"
                                         scope="col" style="width:20%">DA</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Trạng thái"
                                         scope="col" style="width:32%">TT</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="NV cần Overtime"
                                         scope="col" style="width:16%">NVOT</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã Overtime"
                                         scope="col" style="width:16%">ĐOT</th>
                                        <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="Nhiệm vụ hoàn thành"
                                         scope="col" style="width:16%">NVHT</th>                                        
                                    </tr>
                                </thead>                       
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="A">
                                                A
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Đang Overtime">
                                                Đang OT
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="4">
                                                4
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="2">
                                                2
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1">
                                                1
                                            </div>
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="B">
                                                B
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Yêu cầu Overtime">
                                                Yêu cầu OT
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="3">
                                                3
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                -
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="-">
                                                -
                                            </div>
                                        </td>                                        
                                    </tr>  
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="C">
                                                C
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Đang Overtime">
                                                Đang OT
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="5">
                                                5
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="3">
                                                3
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="0">
                                                0
                                            </div>
                                        </td>                                        
                                    </tr>                                                                      
                                </tbody>                                
                            </table>
                        </div> 
                    </div>                   
                </div>  
                
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-yellow-blur" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-check-circle-fill" style="margin: 0;"></i>
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
                                            >Overtime dự án A</span>
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
                                            >Overtime dự án A</span>
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
                                            >Overtime dự án A</span>
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
                                            >Overtime dự án A</span>
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
                             
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card background_gray2" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-journal-text" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Quy định OT
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Cách tính lương làm thêm theo giờ</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Trạng thái: Còn hiệu lực
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
                                            >Quy định về thời gian làm thêm</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Trạng thái: Còn hiệu lực
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
                                            >Quy định về phân công làm</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Trạng thái: Còn hiệu lực
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
                                            >Điều khoản chấm dứt làm thêm giờ</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            Trạng thái: Còn hiệu lực
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
