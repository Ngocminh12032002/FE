<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="row">
                    <div
                        class="sidebarBody_heading-wrapper mb-3  mt-3 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                            Tổng quan đơn vị
                        </h6>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn
                            đề</button>
                    </div>
                    @if(env('FE_LAYOUT'))

                    <div class="sidebarBody_wrapper">
                        <div class="sidebarBody_card" style="line-height: 26px; height: 200px; overflow-y: scroll">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading">Chỉ số công việc đơn vị</h6>
                            </div>
                            @include('template.components.KeyIndex.elementCardMini')
                        </div>
                    </div>
                    
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card bg-pink-blur">
                            {{-- Sỹ số --}}
                            @include('template.components.KeyIndex.elementCardThree', ['heading' => 'Sỹ số', 'title_today' => 'Vắng', 'title_week' => 'Công tác', 'title_month' => 'Mới', 'today_completed' => '2', 'week_completed' => '3','month_completed' => '4', 'icon' => 'bi-person-lines-fill'])
    
                            {{-- Số vi phạm hành chính --}}
                            @include('template.components.KeyIndex.elementCardThree', ['heading' => 'Số vi phạm hành chính', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'week_completed' => '3','month_completed' => '4', 'color' => 'text-danger', 'icon' => 'bi-radioactive'])
    
                            {{-- Số vi phạm nghiệp vụ --}}
                            @include('template.components.KeyIndex.elementCardThree', ['heading' => 'Số vi phạm nghiệp vụ', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'week_completed' => '3','month_completed' => '4', 'color' => 'text-danger', 'icon' => 'bi-exclamation-octagon-fill'])
    
                            {{-- Số sự cố CCDC --}}
                            @include('template.components.KeyIndex.elementCard', ['heading' => 'Số sự cố CCDC', 'heading_mini' => 'Phát sinh / Đã xử lý', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-x-octagon-fill'])
                        </div>
                    </div>
    
                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        {{-- Số khoản chi tiêu mua sắm --}}
                        @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Số khoản chi tiêu mua sắm', 'heading_mini' => 'Khoản: trị giá', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '3', 'today_total' => '32M', 'week_completed' => '6', 'week_total' => '62M','month_completed' => '9', 'month_total' => '92M', 'separate' => ':', 'color_after' => 'text-black', 'icon' => 'bi-cash-stack'])
                    </div>
    
                    <div class="sidebarBody_wrapper mt-4  col-6 col-md-12">
                        {{-- Tuyển dụng --}}
                        @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Tuyển dụng', 'heading_mini' => 'Phát sinh / Đã tuyển', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '22', 'week_total' => '30','month_completed' => '10', 'month_total' => '160', 'separate' => '/', 'icon' => 'bi-person-plus-fill'])
                    </div>
    
                    <div class="sidebarBody_wrapper mt-4  col-6 col-md-12">
                        {{-- Huấn luyện & Đánh giá --}}
                        @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Huấn luyện & Đánh giá', 'heading_mini' => 'Yêu cầu / Hoàn thành', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '1', 'week_completed' => '22', 'week_total' => '20','month_completed' => '40', 'month_total' => '30', 'separate' => '/', 'icon' => 'bi-yelp'])
                    </div>
    
                    <div class="sidebarBody_wrapper mt-4  col-6 col-md-12">
                        {{-- Kiểm soát NV & CV --}}
                        @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Kiểm soát NV & CV', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '1', 'week_completed' => '22', 'week_total' => '20','month_completed' => '40', 'month_total' => '30', 'separate' => '/' , 'icon' => 'bi-fingerprint'])
                    </div>

                    @else
                    
                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card bg-pink-blur" style="line-height: 16px; max-height:165px; min-height: 165px; overflow-y: scroll">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1" style="text-align: center; font-size:16px; color:black">
                                    Báo cáo công việc</h6>
                            </div>
                            {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                            <h6 class="sidebarBody_heading mt-1">                                
                                <i class="bi bi-file-earmark-text"></i>                              
                                Báo cáo chấm công                              
                                <span class="sidebarBody_heading-mini text-black"></span>
                            </h6>
                            <div class="table-responsive">
                                <table class="table table-borderless text-right" style="margin: 0">
                                    <thead>
                                        <tr>
                                            <th style="padding: 0; width:35%; text-align: left">Hôm nay</th>
                                            <th style="padding: 0; width:35%; text-align: left">Tuần này</th>
                                            <th style="padding: 0; width:30%; text-align: left">Tháng này</th>
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
                                                    <span class="sidebarBody_card-body-subtitle-before">50</span>
                                                   <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                    <span class="sidebarBody_card-body-subtitle-after">100</span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>                                    
                                </table>
                        </div>
                        <h6 class="sidebarBody_heading mt-1">                                
                            <i class="bi bi-file-earmark-text"></i>                              
                            Báo cáo kế hoạch chương trình nội bộ                           
                            <span class="sidebarBody_heading-mini text-black"></span>
                        </h6>
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
                                                <span class="sidebarBody_card-body-subtitle-before">50</span>
                                               <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                <span class="sidebarBody_card-body-subtitle-after">100</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>                                    
                            </table>
                    </div>
                    <h6 class="sidebarBody_heading mt-1">                                
                        <i class="bi bi-file-earmark-text"></i>                              
                        Báo cáo bảo trì & máy móc thiết bị định kỳ                             
                        <span class="sidebarBody_heading-mini text-black"></span>
                    </h6>
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
                                            <span class="sidebarBody_card-body-subtitle-before">50</span>
                                           <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                            <span class="sidebarBody_card-body-subtitle-after">100</span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>                                    
                        </table>
                </div>
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card" style="height:100%">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1">                                
                                    <i class="bi bi-house-check-fill"></i>                               
                                    Kiểm tra vệ sinh                               
                                    <span class="sidebarBody_heading-mini text-black"></span>
                                </h6>
                            
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless text-right" style="margin: 0">
                                    <thead>
                                        <tr>
                                            <th style="padding: 0; width:35%; text-align: left">Hôm nay</th>
                                            <th style="padding: 0; width:35%; text-align: left">Định kỳ</th>
                                            <th style="padding: 0; width:35%; text-align: left">Vi phạm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                                        
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before">1</span>
                                                   <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                    <span class="sidebarBody_card-body-subtitle-after">1</span>
                                                </span>
                                            </td>
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before">3</span>
                                                   <span class="sidebarBody_card-body-subtitle-separate">/</span>
                                                    <span class="sidebarBody_card-body-subtitle-after">10</span>
                                                </span>
                                            </td>
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before"></span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="text-danger">4</span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>                                    
                                </table>                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card" style="height:100%">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1">                                
                                    <i class="bi bi-person-exclamation"></i>                              
                                    Vi phạm                             
                                    <span class="sidebarBody_heading-mini text-black"></span>
                                </h6>
                            
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless text-right" style="margin: 0">
                                    <thead>
                                        <tr>
                                            <th style="padding: 0; width:35%; text-align: left">Hôm nay</th>
                                            <th style="padding: 0; width:35%; text-align: left">Tuần này</th>
                                            <th style="padding: 0; width:30%; text-align: left">Tháng này</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                                        
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before">2</span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="sidebarBody_card-body-subtitle-after"></span>
                                                </span>
                                            </td>
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before">22</span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="sidebarBody_card-body-subtitle-after"></span>
                                                </span>
                                            </td>
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before">50</span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="sidebarBody_card-body-subtitle-after"></span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>                                
                                </table>                            
                            </div>
                        </div>
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        {{-- Huấn luyện & Đánh giá --}}
                        @include('template.components.KeyIndex.elementCardTwo', [
                            'heading' => 'Sự cố CCDC',
                            'title_today' => 'Hôm nay',
                            'title_week' => 'Tuần này',
                            'title_month' => 'Tháng này',
                            'today_completed' => '2',
                            'today_total' => '3',
                            'week_completed' => '22',
                            'week_total' => '30',
                            'month_completed' => '50',
                            'month_total' => '100',
                            'separate' => '/',
                            'icon' => 'bi-house-exclamation-fill',
                        ])
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card" style="height:100%">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1">                                
                                    <i class="bi bi-explicit-fill"></i>                               
                                    Trang thiết bị                             
                                    <span class="sidebarBody_heading-mini text-black"></span>
                                </h6>
                            
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless text-right" style="margin: 0">
                                    <thead>
                                        <tr>
                                            <th style="padding: 0; width:35%; text-align: left">Tài sản hỏng</th>
                                            <th style="padding: 0; width:35%; text-align: left">Đề xuất/YCMS</th>
                                            <th style="padding: 0; width:35%; text-align: left">Bảo trì</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                                        
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before"></span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="text-danger">3</span>
                                                </span>
                                            </td>
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before"></span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="text-danger">9</span>
                                                </span>
                                            </td>
                                            <td style="font-weight: 700; padding: 0; text-align: left">
                                                <span class="sidebarBody_card-body-subtitle">
                                                    <span class="sidebarBody_card-body-subtitle-before"></span>
                                                   <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                    <span class="text-danger">2</span>
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
                            <h6 class="sidebarBody_heading">Bảng tin nội bộ</h6>
                        </div>
                        <div class="sidebarBody_card">
                            @if(env('FE_LAYOUT'))
                            <div class="sidebarBody_card-items">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >Công bố nhân viên xuất sắc quý 1/2023 31/03/2023</span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">
                                        Công bố nhân viên xuất sắc quý 1/2023 31/03/2023
                                    </div>
                                </div>
                            </div>
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >Công bố nhân viên xuất sắc quý 1/2023 31/03/2023</span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">
                                        Công bố nhân viên xuất sắc quý 1/2023 31/03/2023
                                    </div>
                                </div>
                            </div>
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >Công bố nhân viên xuất sắc quý 1/2023 31/03/2023</span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">
                                        Công bố nhân viên xuất sắc quý 1/2023 31/03/2023
                                    </div>
                                </div>
                            </div>
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >Công bố nhân viên xuất sắc quý 1/2023 31/03/2023</span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">
                                        Công bố nhân viên xuất sắc quý 1/2023 31/03/2023
                                    </div>
                                </div>
                            </div>
                            <!-- End Item Bảng tin -->
                            @else
                            <div class="sidebarBody_card-items">
    
                                <a href="#" class=" none_default_a ">
                                    <div class="sidebarBody_card-posts">
                                        <span>
                                            1. Bản tin hành chính hàng tuần, tháng
                                        </span>
                                    </div>                                    
                                </a>
                            </div>
                            
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
    
                                <a href="#" class="none_default_a ">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >2. Bản tin an ninh và sự an toàn</span
                                        >
                                    </div>                                    
                                </a>
                            </div>
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
    
                                <a href="#" class="none_default_a ">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >3. Bản tin tiết kiệm năng lượng và môi trường</span
                                        >
                                    </div>                                    
                                </a>
                            </div>
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
    
                                <a href="#" class=" none_default_a ">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >4. Bản tin nhân sự</span
                                        >
                                    </div>                                    
                                </a>
                            </div>
                            <!-- End Item Bảng tin -->
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        <div style="height:64px;"></div>
        </div>
        <span id="btn-right"><i class="bi bi-arrow-bar-right"></i>
        </span>
    </div>
</div>
