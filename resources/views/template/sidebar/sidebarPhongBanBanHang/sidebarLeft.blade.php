<div id="aside-left" class="aside-left">
    <div class="sidebar">
        <!-- <div class="sidebarHeader">
            <div class="container">
                <div class="sidebarHeader_wrapper">
                    <div class="sidebarHeader_card">
                        <div class="sidebarHeader_content">
                            <span>Đơn vị: </span><strong>Kế toán</strong>
                        </div>
                        <div class="sidebarHeader_content">
                            <span>Trưởng đơn vị: </span><strong>{{Session::get('user')['name']}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_heading-wrapper">
                        <h6 class="sidebarBody_heading">KPI tháng {{ $month }} /KPI năm {{ $year }}</h6>
                        <div class="sidebarBody_settings">
                            <div id="sidebarBody_settings-body" class="sidebarBody_settings-body">
                                <i class="bi bi-gear-wide"></i>
                            </div>
                        </div>
                        <div id="sidebarBody_select-wrapper" class="sidebarBody_select-wrapper" style="display: none">
                            <select id="select" title="Chọn biểu đồ..." class="selectpicker" data-dropup-auto="false" multiple
                                data-live-search="true" data-actions-box="true" data-select-all-text="Chọn tất cả"
                                data-deselect-all-text="Bỏ chọn" data-width="100%" data-size="6"
                                data-selected-text-format="count > 3"
                                data-count-selected-text="Bạn đang chọn {0} biểu đồ"
                                data-live-search-placeholder="Tìm kiếm..."></select>
                        </div>
                    </div>
                    <div class="sidebarBody_card">
                        <div class="data_chart">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="Marketing" class="data_chart-items">
                                        <canvas id="stackedChart_banHang_Marketing"></canvas>
                                    </div>
                                    <div id="Chi phí" class="data_chart-items">
                                        <canvas id="stackedChart_banHang_chiPhi"></canvas>
                                    </div>
                                    <div id="Khiếu nại" class="data_chart-items">
                                        <canvas id="stackedChart_banHang_khieuNai"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="Đại lý ký hợp đồng" class="data_chart-items">
                                        <canvas id="stackedChart_banHang_kyHopDong"></canvas>
                                    </div>
                                    <div id="Xe phân khúc trên 500tr đã bán" class="data_chart-items">
                                        <canvas id="stackedChart_banHang_more500mCar"></canvas>
                                    </div>
                                    <div id="Xe phân khúc dưới 500tr đã bán" class="data_chart-items">
                                        <canvas id="stackedChart_banHang_less500mCar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebarBody_wrapper">
                    <div class="sidebarBody_heading-wrapper">
                        <h6 class="sidebarBody_heading">Bảng tin công ty</h6>
                    </div>
                    <div class="sidebarBody_card">
                        <div class="sidebarBody_card-items">
                            <div class="sidebarBody_card-posts">
                                <span>Công bố nhân viên xuất sắc quý 1/2023 Công bố nhân viên xuất sắc
                                    quý 1/2023</span>
                            </div>
                            <div class="sidebarBody_card-description">
                                <div class="sidebarBody_card-text">
                                    Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên xuất sắc nhất
                                    quý 1 là bạn gì đấy Nhân viên xuất sắc nhất quý 1 là bạn gì đấy
                                </div>
                            </div>
                        </div>
                        <!-- End Item Bảng tin -->
                        <div class="sidebarBody_card-items">
                            <div class="sidebarBody_card-posts">
                                <span>Công bố nhân viên xuất sắc quý 1/2023 Công bố nhân viên xuất sắc
                                    quý 1/2023</span>
                            </div>
                            <div class="sidebarBody_card-description">
                                <div class="sidebarBody_card-text">
                                    Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên xuất sắc nhất
                                    quý 1 là bạn gì đấy Nhân viên xuất sắc nhất quý 1 là bạn gì đấy
                                </div>
                            </div>
                        </div>
                        <!-- End Item Bảng tin -->
                        <div class="sidebarBody_card-items">
                            <div class="sidebarBody_card-posts">
                                <span>Công bố nhân viên xuất sắc quý 1/2023 Công bố nhân viên xuất sắc
                                    quý 1/2023</span>
                            </div>
                            <div class="sidebarBody_card-description">
                                <div class="sidebarBody_card-text">
                                    Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên xuất sắc nhất
                                    quý 1 là bạn gì đấy Nhân viên xuất sắc nhất quý 1 là bạn gì đấy
                                </div>
                            </div>
                        </div>
                        <!-- End Item Bảng tin -->
                        <div class="sidebarBody_card-items">
                            <div class="sidebarBody_card-posts">
                                <span>Công bố nhân viên xuất sắc quý 1/2023 Công bố nhân viên xuất sắc
                                    quý 1/2023</span>
                            </div>
                            <div class="sidebarBody_card-description">
                                <div class="sidebarBody_card-text">
                                    Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên xuất sắc nhất
                                    quý 1 là bạn gì đấy Nhân viên xuất sắc nhất quý 1 là bạn gì đấy
                                </div>
                            </div>
                        </div>
                        <!-- End Item Bảng tin -->
                    </div>
                </div>
            </div>
        </div>
        <span id="btn-left"><i class="bi bi-arrow-bar-left"></i>
        </span>
    </div>
</div>
