<div class="header_menu">
    <ul class="header_menu-list">


        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-card-list"></i>
                <span>Hành chính</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="/danh-sach-van-ban-dieu-hanh" class="header_submenu-link more_btn">
                        Văn bản điều hành <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/file-list" class="header_submenu-link">Văn thư</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Quy định & Chính sách</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-quy-trinh" class="header_submenu-link">Quy trình</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Biểu mẫu</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('meeting.open') }}" class="header_submenu-link more_btn">
                        Họp <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('meeting.open') }}" class="header_more-link">
                                Cuộc họp
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('meeting.archives') }}" class="header_more-link">
                                Kho biên bản họp
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Công cụ & Trang bị <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Nhập/Xuất CC/TB </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Cấp phát</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Kiểm kê</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Thanh lý</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Sửa chữa</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Chấm công<i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Bảng chấm công</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Nghỉ phép</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Làm thêm</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Công tác</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Lương(tạm tính)</a>

                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('report.list') }}" class="header_submenu-link">
                        Phản ánh & Đề xuất
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Nghiệp vụ khác<i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Giám sát & Nghiệm thu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Kiểm tra</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-people"></i>
                <span>Nhân sự</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('user.list') }}" class="header_submenu-link more_btn">
                        Danh sách nhân sự
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Lương<i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('Salary.list') }}" class="header_submenu-link">Danh sách bảng lương</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('incomes.list') }}" class="header_submenu-link">Cơ chế thu
                                nhập</a>
                        </li>

                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Tuyển dụng<i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Yêu cầu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Kho CV</a>
                        </li>

                    </ul>
                </li>

                {{-- <li class="header_more-item">
                    <a href="{{ route('positionLevel.list') }}" class="header_more-link">
                        Danh sách cấp nhân sự
                    </a>
                </li> --}}
                <li class="header_submenu-items more position-relative">
                    <a href="/danh-sach-bien-ban-dao-tao" class="header_submenu-link more_btn">
                        Huấn luyện & Đào tạo <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a class="header_submenu-link" href="#">
                                <span>Danh sách kỹ năng nghiệp vụ</span>
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a class="header_submenu-link" href="#">
                                <span>Thống kê đào tạo</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Khác<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Lộ trình thăng tiến</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đánh giá thi đua</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="/">
                <i class="bi bi-person-workspace"></i>
                <span>Công việc</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('project.index') }}" class="header_submenu-link more_btn">
                        Dự án</a>

                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="/nhat-trinh-cong-viec" class="header_submenu-link more_btn">
                        Nhật trình</a>

                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Kế hoạch làm việc<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/de-xuat-theo-mau" class="header_submenu-link">Đề xuất theo mẫu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/de-xuat-mo" class="header_submenu-link">Đề xuất mở</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/yeu-cau-trien-khai" class="header_submenu-link">Yêu cầu triển khai</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Ký duyệt</a>
                        </li>
                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Thực thi<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                            <li class="header_more-item">
                                <a href="{{ route('assignTask.list') }}" class="header_submenu-link">
                                    Giao Việc
                                </a>
                            </li>
                        @endif
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Giám sát - Nghiệm thu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/" class="header_submenu-link">Báo cáo</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/" class="header_submenu-link">KPI</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-bank"></i>
                <span>Mua hàng</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Kế hoạch mua hàng<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Yêu cầu mua hàng</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý đơn hàng<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Danh sách mặt hàng</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Nhà cung cấp</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>


        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-cart-check"></i>
                <span>Bán hàng</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="/danh-sach-khach-hang" class="header_submenu-link more_btn">
                        Khách hàng<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/danh-sach-khach-hang" class="header_submenu-link">Khách hàng</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Nhà phân phối</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đại lý</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Bán lẻ</a>
                        </li>
                    </ul>
                </li>
                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Sản phẩm
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Đơn hàng<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đơn đặt hàng</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đơn bán hàng</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đơn trả hàng</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đơn đổi hàng</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Lịch sử xoá đơn hàng</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        CS kinh doanh<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Chương trình khuyến mãi</a>
                        </li>

                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Thống kê<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Doanh số</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Thanh toán</a>
                        </li>

                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý hoạt động<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Số nhân viên online/offline</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Bản đồ vị trí nhân viên hôm nay</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-stickies"></i>
                <span>Sản xuất</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Kho<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/danh-sach-kho" class="header_submenu-link">Danh sách kho</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-vat-tu" class="header_submenu-link">Danh sách vật tư</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-goi-trang-bi" class="header_submenu-link">Danh sách gói trang bị</a>
                        </li>
                        {{-- <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Danh sách gói trang bị</a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-archive"></i>
                <span>Khác</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Canteen<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('weeklymenu.list') }}" class="header_submenu-link">Danh sách thực
                                đơn</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('foodticket.list') }}" class="header_submenu-link">Danh sách phiếu mua
                                nguyên liệu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Thống kê suất ăn</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a href="#" class="header_menu-link menu_btn-sub">
                <i class="bi bi-gear"></i>
                <span>Cấu hình</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('department.show', ['id' => 1]) }}" class="header_submenu-link more_btn">
                        Cơ cấu đơn vị <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('department.list') }}" class="header_more-link">
                                Hồ sơ đơn vị (Phòng ban)
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('user.list') }}" class="header_more-link">
                                Nhân sự
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('position.list') }}" class="header_more-link">
                                Vị trí/Chức danh
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('target.list') }}" class="header_submenu-link more_btn">
                        Công việc<i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('target.list') }}" class="header_more-link">
                                Định mức
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_more-link">
                                Mô tả công việc
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('key.list') }}" class="header_more-link">
                                Chỉ số kinh doanh
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('units.list') }}" class="header_more-link">
                                Danh mục đơn vị tính
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_more-link">
                                Lịch sử phản hồi
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="header_submenu-items more position-relative">
                    <a href="{{ route('user.list') }}" class="header_submenu-link more_btn">
                        Nhân sự<i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('position.list') }}" class="header_submenu-link">Vị trí làm việc</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">
                                Chức danh</a>
                        </li>

                    </ul>
                </li> --}}
                <li class="header_submenu-items more position-relative">
                    <a href="/danh-sach-mo-ta-cong-viec" class="header_submenu-link more_btn">
                        Phân loại <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('positionLevel.list') }}" class="header_more-link">Cấp nhân sự</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('location.list') }}" class="header_more-link">Vị trí địa lý</a>
                        </li>
                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Phân quyền
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="/kho-chart" class="header_submenu-link more_btn">
                        Hiển thị <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/kho-chart" class="header_more-link">Biểu đồ chart</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-key-chart" class="header_more-link">Danh sách key chart</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="/danh-sach-mo-ta-cong-viec" class="header_submenu-link more_btn">
                        Khác <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/danh-sach-mau-vi-tri" class="header_more-link">Mẫu vị trí</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('targetDetailForm.list') }}" class="header_more-link">
                                Mẫu nhiệm vụ
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
    </ul>
</div>
