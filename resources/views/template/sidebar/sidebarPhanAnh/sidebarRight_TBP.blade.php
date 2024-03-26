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
                                <i class="sidebarBody_heading bi bi-calculator" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Số lượt phản ánh
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
                                    <th class="fw-bolder background_green2" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã gửi" scope="col" style="width: 18%">ĐG</th>
                                    <th class="fw-bolder background_yellow" data-bs-toggle="tooltip" data-bs-placement="top" title="Được phản hồi" scope="col" style="width: 18%">ĐPH</th>
                                    <th class="fw-bolder background_blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Chờ phản hồi" scope="col" style="width: 18%">CPH</th>
                                    <th class="fw-bolder background_pink" data-bs-toggle="tooltip" data-bs-placement="top" title="Đã phản hồi" scope="col" style="width: 18%">ĐPH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="background_white text-center">
                                        <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" title="Tháng 8">
                                            Tháng 8
                                        </div>
                                    </td>
                                    <td class="background_green2 text-center"><strong>5</strong></td>
                                    <td class="background_yellow text-center"><strong>2</strong></td>
                                    <td class="background_blue text-center"><strong>1</strong></td>
                                    <td class="background_pink text-center"><strong>3</strong></td>
                                </tr>                             
                            </tbody>
                        </table>
                    </div>


                </div>   
                   
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-pink-blur">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-clock-history" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Phản hồi
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">                            
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title overText">
                                        <span
                                            >Nguyễn Văn A đã nhắc đến bạn trong</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            <strong>Đề xuất mua sắm vật tư</strong>
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
                                            >Nguyễn Văn A đã nhắc đến bạn trong</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            <strong>Đề xuất mua sắm vật tư</strong>
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
                                            >Nguyễn Văn A đã nhắc đến bạn trong</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            <strong>Đề xuất mua sắm vật tư</strong>
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
                                            >Nguyễn Văn A đã nhắc đến bạn trong</span>
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text">
                                            <strong>Đề xuất mua sắm vật tư</strong>
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
                    <div class="sidebarBody_card bg-yellow-blur">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-clock-history" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Đã gửi
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">                            
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
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
                    <div class="sidebarBody_card bg-gray-blur">
                        <div class="d-flex align-items-center">
                            <div class="" style="padding-right: 4px">
                                <i class="sidebarBody_heading bi bi-clock-history" style="margin: 0;"></i>
                            </div>
                            <div class="sidebarBody_heading mt-2 mb-2">
                                Phản ánh có liên quan
                            </div>
                        </div>
                        <div class="sidebarBody_card-items-pdf">                            
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">18/07/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-status overText">
                                        <span>Yêu cầu duyệt</span>
                                    </div>
                                    <div class="sidebarBody_notification-title">
                                        <div class="sidebarBody_card-text">
                                            Đề xuất mua sắm trang thiết bi vật tư
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
