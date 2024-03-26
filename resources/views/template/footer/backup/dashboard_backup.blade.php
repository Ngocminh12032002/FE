@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Bảng điều khiển')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="card">
                  {{-- @include('template.components.chart.chiphi') --}}
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    {{-- @dd(Session::get('listKpiKeys')) --}}
    {{-- @include('template.sidebar.sidebarMaster.sidebarRight') --}}

@endsection
@section('footer-script')
<!-- ChartJS -->
<script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-  @2.0.0.js') }}"></script>

<!-- Plugins -->
<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

<!-- Chart Types -->
<script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/DoughnutChart.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartThree.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartTwo.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/BarChart.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/LineChartTwo.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/LineChart.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/chart/PieChart.js') }}"></script>


@endsection
