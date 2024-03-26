<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper mt-3">
                    <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                            Tổng quan
                        </h6>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn
                            đề</button>
                    </div>
                    <div class="sidebarBody_card bg-yellow-blur">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading mt-2">
                                Chỉ số công việc cá nhân
                            </h6>
                        </div>
                        <div class="sidebarBody_cardmini-wrapper" style="line-height: 2">
                            <div class="sidebarBody_cardmini">
                                <span class="sidebarBody_card-title">
                                    <i class="bi bi-person-add"></i>
                                    Số ca đào tạo
                                </span>
                                <strong><span class="text-success">65</span>/120</strong>
                            </div>
                            <div class="sidebarBody_cardmini">
                                <span class="sidebarBody_card-title">
                                    <i class="bi bi-person-add"></i>
                                    Số XNCB
                                </span>
                                <strong><span class="text-success">3</span>/10</strong>
                            </div>
                            <div class="sidebarBody_cardmini">
                                <span class="sidebarBody_card-title">
                                    <i class="bi bi-person-add"></i>
                                    Số GPQC
                                </span>
                                <strong><span class="text-success">3</span>/10</strong>
                            </div>
                            <div class="sidebarBody_cardmini">
                                <span class="sidebarBody_card-title">
                                    <i class="bi bi-person-add"></i>
                                    Số GPQC
                                </span>
                                <strong><span class="text-success">3</span>/10</strong>
                            </div>
                            <div class="sidebarBody_cardmini">
                                <span class="sidebarBody_card-title">
                                    <i class="bi bi-person-add"></i>
                                    Số GPQC
                                </span>
                                <strong><span class="text-success">3</span>/10</strong>
                            </div>
                            <div class="sidebarBody_cardmini">
                                <span class="sidebarBody_card-title">
                                    <i class="bi bi-person-add"></i>
                                    Số GPQC
                                </span>
                                <strong><span class="text-success">3</span>/10</strong>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_wrapper">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading">Báo cáo tháng {{ $month }}</h6>
                        </div>
                            <div class="sidebarBody_card">                      
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        1.Đi làm không đúng giờ
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="text-danger">{{ $total_all_late_for_work }}</span>
                                        {{-- <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">30</span> --}}
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        2.Vi phạm nội quy
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="text-danger">{{ $total_all_violation_of_rules }}</span>
                                        {{-- <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">100</span> --}}
                                    </span>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        3.Đã kiểm tra định kỳ
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_periodic_check_performed }}</span>
                                        {{-- <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">30</span> --}}
                                    </span>
                                </div>  
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        4.Tài sản hỏng
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="text-danger">{{ $total_all_damaged_property }}</span>
                                        {{-- <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">15</span> --}}
                                    </span>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        5.Tài sản cần mua mới
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after"></span>
                                        {{-- <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">100</span> --}}
                                    </span>
                                </div>           
                        </div>
                    </div>
                </div>

                <div class="sidebarBody_wrapper mt-4">

                    <div class="sidebarBody_card bg-pink-blur">

                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading">Số vi phạm hành chính</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless text-right" style="margin: 0">
                                <thead>
                                    <tr>
                                        <th style="padding: 0; width:35%; text-align: left">
                                            Hôm nay: <span class="text-danger">1</span>
                                        </th>
                                        <th style="padding: 0; width:35%; text-align: left">
                                            Tuần này: <span class="text-danger">2</span>
                                        </th>
                                        <th style="padding: 0; width:35%; text-align: left">
                                            Tháng này: <span class="text-danger">3</span>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading">Số vi phạm nghiệp vụ</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless text-right" style="margin: 0">
                                <thead>
                                    <tr>
                                        <th style="padding: 0; width:35%; text-align: left">
                                            Hôm nay: <span class="text-danger">1</span>
                                        </th>
                                        <th style="padding: 0; width:35%; text-align: left">
                                            Tuần này: <span class="text-danger">2</span>
                                        </th>
                                        <th style="padding: 0; width:35%; text-align: left">
                                            Tháng này: <span class="text-danger">3</span>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading">
                                Số sự cố CCDC
                                <span class="sidebarBody_heading-mini">( Phát sinh / Đã xử lý )</span>
                            </h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless text-left" style="margin: 0">
                                <thead>
                                    <tr>
                                        <th style="padding: 0; text-align: left; letter-spacing: -1px">
                                            Hôm nay:&nbsp;
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">
                                                    2</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">3</span>
                                            </span>
                                        </th>
                                        <th style="padding: 0; text-align: left; letter-spacing: -1px">
                                            Tuần này:&nbsp;
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">2</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">3</span>
                                            </span>
                                        </th>
                                        <th style="padding: 0; text-align: left; letter-spacing: -1px">
                                            Tháng này:&nbsp;
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">2</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">3</span>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_heading-wrapper">
                        <h6 class="sidebarBody_heading">Huẩn luyện / Đánh giá</h6>
                    </div>
                    <div class="sidebarBody_card">
                        <div class="table-responsive">
                            <table class="table table-borderless text-right" style="margin: 0">
                                <thead>
                                    <tr>
                                        <th style="padding: 0; width:35%; text-align: left">Hôm nay</th>
                                        <th style="padding: 0; width:35%; text-align: left">Tuần này</th>
                                        <th style="padding: 0; width:35%; text-align: left">Tháng này</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">2</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">3</span>
                                            </span>
                                        </td>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">22</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">30</span>
                                            </span>
                                        </td>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">10</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">160</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_heading-wrapper">
                        <h6 class="sidebarBody_heading">
                            Kiểm soát CV cá nhân
                            <span class="sidebarBody_heading-mini">(Kế hoạch/Hoàn thành)</span>
                        </h6>

                    </div>
                    <div class="sidebarBody_card">
                        <div class="table-responsive">
                            <table class="table table-borderless text-right" style="margin: 0">
                                <thead>
                                    <tr>
                                        <th style="padding: 0; width:35%; text-align: left">Hôm nay</th>
                                        <th style="padding: 0; width:35%; text-align: left">Tuần này</th>
                                        <th style="padding: 0; width:35%; text-align: left">Tháng này</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">2</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">1</span>
                                            </span>
                                        </td>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">12</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">10</span>
                                            </span>
                                        </td>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before">20</span>
                                                <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">16</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span id="btn-right"><i class="bi bi-arrow-bar-right"></i>
        </span>
    </div>
</div>
