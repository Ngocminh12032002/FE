<div id="aside-right" class="aside-right" style="display: none">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="row">
                    <div
                        class="sidebarBody_heading-wrapper mb-3  mt-3 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                        </h6>
                    </div>

                    <div class="sidebarBody_wrapper mt-4 col-6 col-md-12">

                        @include('template.components.KeyIndex.elementCardTwo', [
                            'heading' => 'Thống kê truy cập',
                            'title_today' => 'Đang truy cập',
                            'title_week' => 'SV đăng nhập',
                            'title_month' => 'GV đăng nhập',
                            'today_completed' => '3',
                            'today_total' => '32M',
                            'week_completed' => '6',
                            'week_total' => '62M',
                            'month_completed' => '9',
                            'month_total' => '92M',
                            'separate' => ':',
                            'color_after' => 'text-black',
                            'icon' => 'bi-cash-stack',
                        ])
                    </div>
                </div>
            </div>
        </div>
        <span id="btn-right"><i class="bi bi-arrow-bar-right"></i>
        </span>
    </div>
</div>
