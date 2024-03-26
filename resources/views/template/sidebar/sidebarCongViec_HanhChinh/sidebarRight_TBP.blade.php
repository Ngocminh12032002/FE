<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody" style="overflow-y: scroll">
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

                    <div class="sidebarBody_wrapper">
                        <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px; overflow-y: scroll">
                            <div class="data_chart">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="Số lượng xe" class="data_chart-items">
                                            <canvas id="dash"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card bg-pink-blur" style="line-height: 16px; max-height:165px; min-height: 165px; overflow-y: scroll">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1">Chỉ số công việc đơn vị</h6>
                            </div>
                            {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                            <div class="sidebarBody_cardmini-wrapper" style="line-height: 2">
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số báo cáo chấm công
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số báo cáo vi phạm
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số ca kiểm tra định kỳ đã thực hiện
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lượt đánh giá tình trạng vệ sinh
                                    </span>
                                    <strong>2</strong>
                                </div>                               
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số chương trình nội bộ đã tổ chức
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số ca đào tạo đã thực hiện
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lần xử lí công việc chuyển phát
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lần kiểm tra các thiết bị, tài sản
                                    </span>
                                    <strong>2</strong>
                                </div>  
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số báo cáo kế hoạch bảo trì và máy móc
                                    </span>
                                    <strong>2</strong>
                                </div>                                  
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số đề xuất YCMS thiết bị văn phòng cần thiết
                                    </span>
                                    <strong>2</strong>
                                </div>  
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lần kiểm kê các trang thiết bị, tài sản
                                    </span>
                                    <strong>2</strong>
                                </div>  
                            </div>
                        </div>
                    </div>                    

                <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                    <div class="sidebarBody_card" style="height:100%">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading mt-1">                                
                                <i class="bi bi-cash"></i>                               
                                Chi phí                              
                                <span class="sidebarBody_heading-mini text-black"></span>
                            </h6>
                        
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless text-right" style="margin: 0">
                                <thead>
                                    <tr>
                                        <th style="padding: 0; width:35%; text-align: left">Hành chính</th>
                                        <th style="padding: 0; width:35%; text-align: left">Văn phòng phẩm</th>
                                        <th style="padding: 0; width:30%; text-align: left">Cấp tài sản</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before"></span>
                                               <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                <span class="sidebarBody_card-body-subtitle-after">15M</span>
                                            </span>
                                        </td>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before"></span>
                                               <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                <span class="sidebarBody_card-body-subtitle-after">3M</span>
                                            </span>
                                        </td>
                                        <td style="font-weight: 700; padding: 0; text-align: left">
                                            <span class="sidebarBody_card-body-subtitle">
                                                <span class="sidebarBody_card-body-subtitle-before"></span>
                                               <span class="sidebarBody_card-body-subtitle-separate"></span>
                                                <span class="sidebarBody_card-body-subtitle-after">27M</span>
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
                        'heading' => 'Họp giao ban',
                        'heading_mini' => 'Đã thực hiện/ Số phòng',
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
                        'icon' => 'bi-calendar4-week',
                    ])
                </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        {{-- Huấn luyện & Đánh giá --}}
                        @include('template.components.KeyIndex.elementCardTwo', [
                            'heading' => 'Vấn đề cần xử lý',
                            'heading_mini' => 'Tồn đọng & phát sinh',
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
                            'icon' => 'bi-search',
                        ])
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
                            'heading' => 'Vắng mặt',
                            'heading_mini' => 'Nghỉ phép/ Tổng vắng',
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
                            'icon' => 'bi-slash-circle-fill',
                        ])
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        <div class="sidebarBody_card" style="height:100%">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1">                                
                                    <i class="bi bi-house-exclamation-fill"></i>                             
                                    Tài sản hỏng                           
                                    <span class="sidebarBody_heading-mini text-black">(Hỏng/Bảo trì/Sửa chữa)</span>
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
                            'heading' => 'Nhiệm vụ quá hạn',
                            'heading_mini' => 'Đã xử lý',
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
                            'icon' => 'bi-briefcase-fill',
                        ])
                    </div>
                    
                    <div class="sidebarBody_wrapper">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading">Bảng tin nội bộ hành chính</h6>
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
                                            1. Quy trình làm việc, hướng dẫn, biểu mẫu và mẫu tài liệu quan trọng
                                        </span>
                                    </div>                                    
                                </a>
                            </div>
                            
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
    
                                <a href="#" class="none_default_a ">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >2. Thông tin và hướng dẫn bảo vệ tài sản và thông tin của công ty</span
                                        >
                                    </div>                                    
                                </a>
                            </div>
                            <!-- End Item Bảng tin -->
                            <div class="sidebarBody_card-items">
    
                                <a href="#" class="none_default_a ">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >3. Thông tin về các hoạt động, sự kiện và chương trình văn hoá tổ chức</span
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
