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
                        <div class="sidebarBody_card" style="line-height: 16px; min-height: 165px; overflow-y: scroll">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-1">Tổng quan tình hình kinh doanh</h6>
                            </div>
                            {{-- @include('template.components.KeyIndex.elementCardMini') --}}
                            <div class="sidebarBody_cardmini mt-2">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="fw-bolder" scope="col" style="width: 42%">Các loại xe</th>
                                            <th class="fw-bolder" scope="col" style="width: 16%">Số lượng</th>
                                            <th class="fw-bolder" scope="col" style="width: 16%">Doanh thu</th>
                                            <th class="fw-bolder" scope="col" style="width: 16%">Dư nợ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            {{-- <th scope="row">1</th> --}}
                                            <td class="text-end">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Trolley & Cargo cart">
                                                    Trolley & Cargo cart
                                                </div>
                                            </td>
                                            <td>300</td>
                                            <td>156,8M</td>
                                            <td>30M</td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">2</th> --}}
                                            <td class="text-end">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Xe Golf & nội khu">
                                                    Xe Golf & nội khu
                                                </div>
                                            </td>
                                            <td>500</td>
                                            <td>254,9M</td>
                                            <td>90M</td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">3</th> --}}
                                            <td class="text-end">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Xe tham quan">
                                                    Xe tham quan
                                                </div>
                                            </td>
                                            <td>600</td>
                                            <td>390,7M</td>
                                            <td>60M</td>
                                        </tr>
                                        <tr>
                                            {{-- <th scope="row">3</th> --}}
                                            <td class="text-end">
                                                <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" style="text-align: left;" title="Xe tải Van"> 
                                                    Xe tải Van
                                                </div>
                                            </td>
                                            <td>100</td>
                                            <td>190,7M</td>
                                            <td>20M</td>
                                        </tr>
                                        <tr>
                                            <th class="fw-bolder" scope="col" style="width: 42%">Tổng</th>
                                            <th class="fw-bolder" scope="col" style="width: 16%">1500</th>
                                            <th class="fw-bolder" scope="col" style="width: 16%">970M</th>
                                            <th class="fw-bolder" scope="col" style="width: 16%">200M</th>
                                        </tr>
                                    </tbody>
                                </table>
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
                                        Lượt mời lái thử thành công
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Lượt hẹn tư vấn khách hàng
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số sự kiện được tổ chức
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số xe đã bán
                                    </span>
                                    <strong>2</strong>
                                </div>                               
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số xe đã cho thuê
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lượt chăm sóc khách hàng sau mua
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lần xử lí khiếu nại của khách hàng
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số đại lý tiềm năng
                                    </span>
                                    <strong>2</strong>
                                </div>  
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số lượt khảo sát thị trường
                                    </span>
                                    <strong>2</strong>
                                </div>                              
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số hợp đồng thuê/ mua
                                    </span>
                                    <strong>2</strong>
                                </div>
                                <div class="sidebarBody_cardmini">
                                    <span class="sidebarBody_card-title">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Số đại lý đã ký hợp đồng
                                    </span>
                                    <strong>2</strong>
                                </div>                                
                            </div>
                        </div>
                    </div>                   
                    
                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        {{-- Huấn luyện & Đánh giá --}}
                        @include('template.components.KeyIndex.elementCardTwo', [
                            'heading' => 'Họp giao ban',
                            'heading_mini' => 'Đã thực hiện/Số phòng',
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
                            'heading' => 'Thống kê khách hàng',
                            'title_today' => 'Khách mới',
                            'title_week' => 'Đơn hàng mới',
                            'title_month' => 'Đã bán',
                            'today_completed' => '2',
                            'today_total' => '32M',
                            'week_completed' => '6',
                            'week_total' => '62M',
                            'month_completed' => '9',
                            'month_total' => '92M',
                            'separate' => ':',
                            'icon' => 'bi-cart4',
                        ])
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">
                        {{-- Huấn luyện & Đánh giá --}}
                        @include('template.components.KeyIndex.elementCardTwo', [
                            'heading' => 'Quản lý công việc',
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
                            'icon' => 'bi-pencil-square',
                        ])
                    </div>                    
                    
                    <div class="sidebarBody_wrapper mt-4">
                        <div class="sidebarBody_card bg-blue-blur">
                            <div class="sidebarBody_heading-wrapper">
                                <h6 class="sidebarBody_heading mt-2 mb-2">
                                    Bản tin tuyển dụng nội bộ
                                </h6>
                            </div>
                            <div class="sidebarBody_card-items-pdf">
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >1. Chuyên viên phân tích nghiệp vụ</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                JD
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >2. Nhân viên truyền thông số</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                JD
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                    <div class="sidebarBody_card-items-left">
                                        <div class="sidebarBody_card-posts">
                                            <span
                                                >3. Trưởng phòng kinh doanh</span
                                            >
                                        </div>
                                        <div class="sidebarBody_card-description">
                                            <div class="sidebarBody_card-text">
                                                JD
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>                                                    
                            </div>
    
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
