<div class="header_menu">
    <ul class="header_menu-list">
        <li class="header_menu-item">
            <a href="#" class="header_menu-link menu_btn-sub">
                <i class="bi bi-gear"></i>
                <span>Cấu hình</span>
            <a href="#" class="header_menu-link menu_btn-sub">
                <i class="bi bi-gear"></i>
                <span>Cấu hình</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('department.list') }}" class="header_submenu-link">
                       Cơ cấu tổ chức
                    <a href="{{ route('department.list') }}" class="header_submenu-link">
                       Cơ cấu tổ chức
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Danh sách công việc
                    </a>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Danh sách công việc
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Phân quyền
                    </a>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Phân quyền
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Cấu hình hiển thị
                    </a>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Cấu hình hiển thị
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Biểu đồ <i class="bi bi-chevron-right"></i>
                        Biểu đồ <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/kho-chart" class="header_more-link">Kho chart</a>
                            <a href="/kho-chart" class="header_more-link">Kho chart</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-key-chart" class="header_more-link">Danh sách key chart</a>
                        <li class="header_more-item">
                            <a href="/danh-sach-key-chart" class="header_more-link">Danh sách key chart</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">Dashboard<i
                        class="bi bi-chevron-right"></i></a>
                    <a href="#" class="header_submenu-link more_btn">Dashboard<i
                        class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/dashboard_admin" class="header_submenu-link">Dashboard quản trị</a>
                            <a href="/dashboard_admin" class="header_submenu-link">Dashboard quản trị</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_human_resources" class="header_submenu-link">Human Resources Dashboard</a>
                            <a href="/dashboard_human_resources" class="header_submenu-link">Human Resources Dashboard</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_weekly" class="header_submenu-link">Weekly & YTD Sale Statistics</a>
                            <a href="/dashboard_weekly" class="header_submenu-link">Weekly & YTD Sale Statistics</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_report" class="header_submenu-link">Department Store Staff and Income Report</a>
                        <li class="header_more-item">
                            <a href="/dashboard_report" class="header_submenu-link">Department Store Staff and Income Report</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="header_submenu-items more position-relative">
                {{-- <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->routeIs('department.list', 'position.list', 'positionOri.list', 'positionLevel.list', 'equimentPack.list') ? 'active' : '' }}">
                        class="header_submenu-link more_btn {{ request()->routeIs('department.list', 'position.list', 'positionOri.list', 'positionLevel.list', 'equimentPack.list') ? 'active' : '' }}">
                        Hồ sơ đơn vị <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('department.list') }}"
                                class="header_more-link {{ request()->routeIs('department.list') ? 'active' : '' }}">Cơ
                                cấu
                                class="header_more-link {{ request()->routeIs('department.list') ? 'active' : '' }}">Cơ
                                cấu
                                đơn vị</a>
                        </li>


                        <li class="header_more-item">
                            <a href="{{ route('positionOri.list') }}"
                                class="header_more-link {{ request()->routeIs('positionOri.list') ? 'active' : '' }}">Danh
                                sách cấp
                            <a href="{{ route('positionOri.list') }}"
                                class="header_more-link {{ request()->routeIs('positionOri.list') ? 'active' : '' }}">Danh
                                sách cấp
                                tổ chức</a>
                        </li>


                        <li class="header_more-item">
                            <a href="{{ route('equimentPack.list') }}"
                                class="header_more-link {{ request()->routeIs('equimentPack.list') ? 'active' : '' }}">Danh
                                class="header_more-link {{ request()->routeIs('equimentPack.list') ? 'active' : '' }}">Danh
                                mục gói
                                trang bị</a>
                        </li>
                    </ul>
                </li>


                <li class="header_submenu-items">
                    <a href="/mo-ta-cong-viec" class="header_submenu-link">Mô tả công việc</a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->routeIs('target.list', 'targetDetailForm.list', 'key.list', 'units.list') ? 'active' : '' }}">
                        class="header_submenu-link more_btn {{ request()->routeIs('target.list', 'targetDetailForm.list', 'key.list', 'units.list') ? 'active' : '' }}">
                        Định mức lao động <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">


                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">Quy trình<i
                            class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/ky-nang-nghiep-vu" class="header_more-link">Kỹ Năng Nghiệp Vụ</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Phân quyền người dùng</a>
                </li>




                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Cấu hình hiển thị</a>
                </li>


                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Cấu hình thông tin doanh nghiệp</a>
                </li> --}}



            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-card-list"></i>
                <span>Quản lý hành chính</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Văn thư lưu trữ <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Hồ sơ công ty</a>
                        </li>
                        <li class="header_more-item">
                            <a class="header_submenu-link" href="/danh-sach-van-ban-dieu-hanh">
                                <span>Văn bản điều hành</span>
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Kho tài liệu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Quản lý văn bản</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-quy-trinh" class="header_submenu-link">Danh sách quy trình</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Họp hành chính
                        {{-- <i class="bi bi-chevron-right"></i> --}}
                    </a>
                </li>
                {{-- <li class="header_submenu-items">
                    <a href="{{ route('meeting.archives') }}"
                        class="header_submenu-link {{ request()->routeIs('meeting.archives') ? 'active' : '' }}">Kho
                        biên bản họp</a>
                </li> --}}

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý công vụ và trang bị <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Danh sách công cụ và trang bị</a>
                        </li>
                        <li class="header_more-item">
                            <a class="header_submenu-link" href="#">
                                <span>Quản lý thông tin cấp phát và theo dõi tình trạng sử dụng</span>
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Danh sách nhập/xuất kho công cụ và trang bị</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Đánh giá tình trạng công cụ dụng cụ và trang bị định kỳ</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Chấm công
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý suất ăn <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Menu hàng ngày</a>
                        </li>
                        <li class="header_more-item">
                            <a class="header_submenu-link" href="{{ route('foodticket.list') }}">
                                <span>Danh sách phiếu mua nguyên liệu</span>
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Thống kê suất ăn</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Kế hoạch vui chơi, giải trí
                    </a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-people"></i>
                <span>Quản lý nhân sự</span>
            </a>
            <ul id="header_submenu">
                <li class="header_more-item">
                    <a href="{{ route('position.list') }}"
                        class="header_more-link">
                        Danh sách vị trí
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="#"
                        class="header_more-link">
                        Danh sách chức danh
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="{{ route('user.list') }}"
                        class="header_more-link">
                        Danh sách nhân viên
                    </a>
                </li>
                {{-- <li class="header_more-item">
                    <a href="{{ route('department.list') }}" class="header_more-link">
                        Cơ cấu tổ chức
                    </a>
                </li> --}}


                {{-- <li class="header_more-item">
                    <a href="{{ route('positionLevel.list') }}" class="header_more-link">
                        Danh sách cấp nhân sự
                    </a>
                </li> --}}

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Tuyển dụng   <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Thông tin tuyển dụng</a>
                        </li>
                        <li class="header_more-item">
                            <a class="header_submenu-link" href="#">
                                <span>Thông tin ứng viên</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Lộ trình thăng tiến
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Huấn luyện & Đào tạo   <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Danh sách huấn luyện và đào tạo</a>
                        </li>
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

                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Đánh giá thi đua
                    </a>
                </li>

            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-person-workspace"></i>
                <span>Quản lý công việc</span>
            </a>
            <ul id="header_submenu">

                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                    <li class="header_submenu-items">
                        <a href="{{ route('assignTask.list') }}"
                            class="header_submenu-link">
                            Giao Việc
                        </a>
                    </li>
                @endif
                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Kế hoạch làm việc
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="/" class="header_more-link">
                        Nhật trình công việc
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        KPI
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Định mức lao động   <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('target.list') }}"
                                class="header_more-link">
                                Định mức
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('targetDetailForm.list') }}"
                                class="header_more-link">
                                Mẫu nhiệm vụ
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('key.list') }}"
                                class="header_more-link">
                                Chỉ số kinh doanh
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('units.list') }}" class="header_more-link">
                                Danh mục đơn vị tính
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Đề xuất & Xét duyệt   <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/de-xuat-theo-mau"
                                class="header_more-link">
                                Đề xuất theo mẫu
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="/de-xuat-mo"
                                class="header_more-link">
                                Đề xuất mở
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="/yeu-cau-trien-khai"
                                class="header_more-link">
                                Yêu cầu triển khai
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Lịch sử phản hồi
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Họp <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('meeting.open') }}"
                                class="header_more-link">
                                Danh sách cuộc họp
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('meeting.archives') }}"
                                class="header_more-link">
                                Kho biên bản họp
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Phản ánh
                    </a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-bank"></i>
                <span>Quản lý mua hàng</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý nhà cung cấp
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Danh sách mặt hàng
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Yêu cầu mua hàng
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý đơn mua hàng
                    </a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-stickies"></i>
                <span>Quản lý bán hàng</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý sản phẩm
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý đơn hàng
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý khách hàng <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Cửa hàng tự sở hữu
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Đại lý
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Bán lẻ
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Doanh số
                        Họp <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('meeting.open') }}"
                                class="header_more-link">
                                Danh sách cuộc họp
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('meeting.archives') }}"
                                class="header_more-link">
                                Kho biên bản họp
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Phản ánh
                    </a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-bank"></i>
                <span>Quản lý mua hàng</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý nhà cung cấp
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Danh sách mặt hàng
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Yêu cầu mua hàng
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý đơn mua hàng
                    </a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-stickies"></i>
                <span>Quản lý bán hàng</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý sản phẩm
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý đơn hàng
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý khách hàng <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Cửa hàng tự sở hữu
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Đại lý
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Bán lẻ
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Doanh số
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Quản lý hoạt động <i class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Số nhân viên online/offline
                            </a>
                        </li>
                        <li class="header_more-item">
                            <a href="#"
                                class="header_more-link">
                                Bản đồ vị trí nhân viên hôm nay
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Thanh toán
                    </a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub"
                href="#">
                <i class="bi bi-archive"></i>
                <span>Quản lý kho vận</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Theo dõi hàng hóa
                    </a>
                </li>

                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý vị trí kho
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Quản lý tồn kho
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Nhập kho
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Xuất kho
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Kiểm kê kho
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Báo cáo
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
