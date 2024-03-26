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
                            <h6 class="sidebarBody_heading">Nhiệm vụ tháng {{ $month }}</h6>
                        </div>
                            <div class="sidebarBody_card">                      
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        1.Lái thử
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_test_drive }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">300</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        2.KH Tiềm năng
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_potential_customers }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">100</span>
                                    </span>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        3.Chi phí tiếp cận KH
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ formatNumber($total_all_costs) }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">{{ formatNumber($total_all_costs) }}</span>
                                    </span>
                                </div>  
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        4.Số xe đã bàn giao
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_car_handover }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">15</span>
                                    </span>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                        5.Số bài viết đã đăng
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_posts }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">100</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       6.Số bài truyền thông đã đăng
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_videos }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">100</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       7.Số xe đã bán
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_car_sold }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">50</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       8.Số xe đã cho thuê
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_rental_car }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">50</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       9.Số khiếu nại
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_complaint_handling }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">50</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       10.Số đại lý ký hợp đồng
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $total_all_contracted_agent }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">50</span>
                                    </span>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       11.Xe phân khúc hơn 500 triệu đã bán
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $sales_car_more_than_500m }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">50</span>
                                    </span>
                                </div> 
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">                                    
                                       12.Xe phân khúc dưới 500 triệu đã bán
                                    </span>
                                    <span class="sidebarBody_card-body-subtitle">
                                        <span class="sidebarBody_card-body-subtitle-after">{{ $sales_car_less_than_500m }}</span>
                                        <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                        <span class="sidebarBody_card-body-subtitle-before">50</span>
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
