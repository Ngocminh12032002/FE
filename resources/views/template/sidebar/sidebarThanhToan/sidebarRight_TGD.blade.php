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

                <div class="sidebarBody_card background_gray2">
                    {{-- Họp giao ban --}}
                    {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Số phòng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week']) --}}
                    <div class="row d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-calculator" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Các khoản thanh toán
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
                                    <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã thanh toán" scope="col" style="width: 18%">ĐTT</th>
                                    <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Chưa thanh toán" scope="col" style="width: 18%">CTT</th>
                                    <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã duyệt" scope="col" style="width: 18%">ĐD</th>
                                    <th class="fw-bolder background_white" data-bs-toggle="tooltip" data-bs-placement="top" title="Chờ duyệt" scope="col" style="width: 18%">CD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="background_white text-center">
                                        <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Cá nhân">
                                            Cá nhân
                                        </div>
                                    </td>
                                    <td class="background_green2 text-center"><strong>3</strong></td>
                                    <td class="background_pink text-center"><strong>2</strong></td>
                                    <td class="background_yellow text-center"><strong>4</strong></td>
                                    <td class="background_white text-center"><strong>1</strong></td>
                                </tr>
                                <tr>
                                    <td class="background_white text-center">
                                        <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="CBNV">
                                            CBNV
                                        </div>
                                    </td>
                                    <td class="background_green2 text-center">10</td>
                                    <td class="background_pink text-center">4</td>
                                    <td class="background_yellow text-center">10</td>
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
                            Thống kê các khoản thanh toán
                        </div>
                    </div>
                    <table class="table" style="margin-right:5px">
                        <thead>
                            <tr>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                                scope="col" style="width: 37%"></th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                                title="Đã thanh toán" scope="col" style="width: 20%">Đã TT</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                                title="Chưa thanh toán" scope="col" style="width: 20%">Chưa TT</th>
                                <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                                title="Tổng thanh toán" scope="col" style="width: 23%">Tổng TT</th>                                
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
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn A">
                                                Nguyễn Văn A
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr> 
                                    
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn B">
                                                Nguyễn Văn B
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>      

                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn C">
                                                Nguyễn Văn C
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>      

                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn D">
                                                Nguyễn Văn D
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>      

                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn E">
                                                Nguyễn Văn E
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>      

                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn F">
                                                Nguyễn Văn F
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>  
                                    
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn G">
                                                Nguyễn Văn G
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>      
                                   

                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td class="text-end" style="width: 40%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="Nguyễn Văn H">
                                                Nguyễn Văn H
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="9.100.000">
                                                9,1M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="1.200.000">
                                                1,2M
                                            </div>
                                        </td>
                                        <td class="text-end" style="width: 20%">
                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: center;" title="10.300.000">
                                                10,3M
                                            </div>
                                        </td>                                        
                                    </tr>      
                                   
                                   
                                                                     
                                </tbody>
                            </table>
                        </div> 
                    </div>
                    <table class="table" style="margin-right:5px">
                        <tr>
                            <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                            title="Tổng" scope="col" style="width: 37%">Tổng</th>
                            <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                            title="30.000.000" scope="col" style="width: 20%">30M</th>
                            <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                            title="8.000.000" scope="col" style="width: 20%">8M</th>
                            <th class="fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" 
                            title="38.000.000" scope="col" style="width: 23%">38M</th>                                
                        </tr>      
                    </table>
                </div>
               
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-pink-blur" style="line-height: 16px; max-height:250px; height:100%; overflow-y: scroll">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-file-text" style="margin: 0;"></i>
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
                                            >Yêu cầu thanh toán chi phí công tác</span>
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
                                            >Yêu cầu thanh toán thưởng tháng 7</span>
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
                                            >Yêu cầu thanh toán chi phí công tác</span>
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
                                            >Yêu cầu thanh toán chi phí công tác</span>
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