<div class="header_menu">
    <ul class="header_menu-list">
        <li class="header_menu-item">
            <a href="#" class="header_menu-link menu_btn-sub">
                <i class="bi bi-gear"></i>
                <span>Cấu hình</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="{{ route('user.list') }}" class="header_submenu-link">
                        Hồ sơ người dùng
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Phân quyền
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link">
                        Cấu hình hiển thị
                    </a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Biểu đồ <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/kho-chart" class="header_more-link">Kho chart</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-key-chart" class="header_more-link">Danh sách key chart</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">Dashboard<i
                        class="bi bi-chevron-right"></i></a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="/dashboard_admin" class="header_submenu-link">Dashboard quản trị</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_human_resources" class="header_submenu-link">Human Resources Dashboard</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_weekly" class="header_submenu-link">Weekly & YTD Sale Statistics</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/dashboard_report" class="header_submenu-link">Department Store Staff and Income Report</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->routeIs('department.list', 'position.list', 'positionOri.list', 'positionLevel.list', 'equimentPack.list') ? 'active' : '' }}">
                        Hồ sơ đơn vị <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('department.list') }}"
                                class="header_more-link {{ request()->routeIs('department.list') ? 'active' : '' }}">Cơ
                                cấu
                                đơn vị</a>
                        </li>

                        <li class="header_more-item">
                            <a href="{{ route('positionOri.list') }}"
                                class="header_more-link {{ request()->routeIs('positionOri.list') ? 'active' : '' }}">Danh
                                sách cấp
                                tổ chức</a>
                        </li>

                        <li class="header_more-item">
                            <a href="{{ route('equimentPack.list') }}"
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
                        Văn thư lưu trữ   <i class="bi bi-chevron-right"></i></a>
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
                            <a href="/danh-sach-quy-trinh" class="header_submenu-link">Danh sách quy trình</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Kho tài liệu</a>
                        </li>
                        <li class="header_more-item">
                            <a href="#" class="header_submenu-link">Quản lý văn bản</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link">
                        Nghiệp vụ hành chính
                        {{-- <i class="bi bi-chevron-right"></i> --}}
                    </a>
                </li>
                {{-- <li class="header_submenu-items">
                    <a href="{{ route('meeting.archives') }}"
                        class="header_submenu-link {{ request()->routeIs('meeting.archives') ? 'active' : '' }}">Kho
                        biên bản họp</a>
                </li> --}}
                <li class="header_submenu-items">
                    <a href="#"
                        class="header_submenu-link">Quản lý công vụ và tài sản</a>
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
                    <a href="{{ route('department.list') }}" class="header_more-link">
                        Cơ cấu tổ chức
                    </a>
                </li>

                <li class="header_more-item">
                    <a href="{{ route('position.list') }}"
                        class="header_more-link">
                        Danh sách vị trí
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="{{ route('positionLevel.list') }}" class="header_more-link">
                        Danh sách cấp nhân sự
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Danh sách CV
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Tuyển dụng
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
                        Họp đơn vị   <i class="bi bi-chevron-right"></i></a>
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
                        KPI
                    </a>
                </li>
                <li class="header_more-item">
                    <a href="#" class="header_more-link">
                        Vấn đề tồn đọng và giải quyết
                    </a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-cash-coin"></i>
                <span>Quản lý chi phí</span>
            </a>
        </li>
    </ul>
</div>
