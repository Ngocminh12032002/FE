<div id="aside-left" class="aside-left">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_heading-wrapper">
                        <h6 class="sidebarBody_heading">KPI năm toàn công ty</h6>
                        @if(env('FE_LAYOUT'))
                        <div class="sidebarBody_settings">
                            <div
                                id="sidebarBody_settings-body"
                                class="sidebarBody_settings-body"
                            >
                                <i class="bi bi-gear-wide"></i>
                            </div>
                        </div>
                        <div
                            id="sidebarBody_select-wrapper"
                            class="sidebarBody_select-wrapper"
                            style="display: none"
                        >
                            <select
                                id="select"
                                title="Chọn biểu đồ..."
                                class="selectpicker" data-dropup-auto="false"
                                multiple
                                data-live-search="true"
                                data-actions-box="true"
                                data-select-all-text="Chọn tất cả"
                                data-deselect-all-text="Bỏ chọn"
                                data-width="100%"
                                data-size="6"
                                data-selected-text-format="count > 3"
                                data-count-selected-text="Bạn đang chọn {0} biểu đồ"
                                data-live-search-placeholder="Tìm kiếm..."
                            ></select>
                        </div>
                        @endif
                    </div>
                    <div class="sidebarBody_card">
                        @if(env('FE_LAYOUT'))
                        <div class="data_chart">
                            <div class="row">
                                <div class="col-6">
                                    <div id="Doanh số" class="data_chart-items" style="display: block; box-sizing: border-box; height: 140px; width: 110px;">
                                        <canvas id="stackedChart_m_doanhSo"></canvas>
                                    </div>
                                    <div id="Chi phí" class="data_chart-items" style="display: block; box-sizing: border-box; height: 140px; width: 110px;">
                                        <canvas id="stackedChart_m_chiPhi"></canvas>
                                    </div>
                                    <div id="Khách hàng" class="data_chart-items" style="display: block; box-sizing: border-box; height: 140px; width: 110px;">
                                        <canvas id="stackedChart_m_khachHang"></canvas>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div id="Đơn hàng" class="data_chart-items" style="display: block; box-sizing: border-box; height: 140px; width: 110px;">
                                        <canvas id="stackedChart_m_donHang"></canvas>
                                    </div>
                                    <div id="Sản phẩm" class="data_chart-items" style="display: block; box-sizing: border-box; height: 140px; width: 110px;">
                                        <canvas id="stackedChart_m_sanPham"></canvas>
                                    </div>
                                    <div id="Nhân sự" class="data_chart-items" style="display: block; box-sizing: border-box; height: 140px; width: 110px;">
                                        <canvas id="stackedChart_m_nhanSu"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span id="data_chart-nopick" style="display: none">Hiện không chọn biểu đồ nào</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="data_chart">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="Số lượng xe" class="data_chart-items" style="display: block; box-sizing: border-box; height: 220px; width: 243px;">
                                        <canvas id="KeyBarChart_m_soLuongXe"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>                         --}}
                        @else
                        <div class="data_chart">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="Số lượng xe" class="data_chart-items">
                                        <canvas id="dash"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_heading-wrapper">
                        <h6 class="sidebarBody_heading">Bảng tin công ty</h6>
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

                            <a href="https://www.facebook.com/tbht.vn" class=" none_default_a ">
                                <div class="sidebarBody_card-posts">
                                    <span>
                                        Bế giảng khóa đào tạo "động cơ điện, hệ thống điện trên xe điện và xe ô tô điện" cho cán bộ, nhân viên.
                                    </span>
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">
                                        Chiều qua, ngày 27/2, Thái Hưng cùng trường Đại học Thái Bình đã tổ chức Lễ bế giảng khóa đào tạo "Động cơ điện, hệ thống điện trên xe điện và xe ô tô điện".
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <!-- End Item Bảng tin -->
                        <div class="sidebarBody_card-items">

                            <a href="https://www.facebook.com/tbht.vn" class="none_default_a ">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >Khai giảng khóa đào tạo "động cơ điện, hệ thống điện trên xe điện và xe ô tô điện" cho cán bộ, nhân viên.</span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">Ngày 20/02, Thái Hưng đã hợp tác cùng trường Đại học Thái Bình khai giảng khóa đào tạo "động cơ điện, hệ thống điện trên xe điện và xe ô tô điện" cho cán bộ, nhân viên Công ty Cổ phần Thái Bình Hưng Thịnh.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Item Bảng tin -->
                        <div class="sidebarBody_card-items">

                            <a href="https://www.facebook.com/tbht.vn" class="none_default_a ">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >Thái hưng tự hào là đơn vị cung cấp xe điện chất lượng.</span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">Hiện nay, Thái Hưng đã có sẵn các loại xe điện du lịch, đa dạng về số chỗ ngồi và chức năng sử dụng. Các dòng xe điện của Thái Hưng có thiết kế hiện đại, sang trọng, được sử dụng phổ biến tại các sân golf, khu du lịch và resort.
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Item Bảng tin -->
                        <div class="sidebarBody_card-items">

                            <a href="https://www.facebook.com/tbht.vn" class=" none_default_a ">
                                <div class="sidebarBody_card-posts">
                                    <span
                                        >(Thái hưng corp) bản tin tuyển dụng tháng 02/2023 </span
                                    >
                                </div>
                                <div class="sidebarBody_card-description">
                                    <div class="sidebarBody_card-text">HOT JOB Tháng 02 của THC đã chính thức lên sóng với hàng loạt cơ hội hấp dẫn đang chờ đón các bạn và hãy tham gia ứng tuyển ngay nhé:
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Item Bảng tin -->
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <span id="btn-left"
            ><i class="bi bi-arrow-bar-left"></i>
        </span>
    </div>
</div>

@section('script-chart')
    @if(!env('FE_LAYOUT'))
        <script type="text/javascript" src="{{ asset('/assets/js/chart/ChartSidebarleft/dash.js') }}"></script>
    @endif
@endsection