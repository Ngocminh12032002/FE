@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Danh sách lớp')
@section('header-style')
    <style>
        .dataTables_filter {
            margin: 0;
        }
    </style>
@endsection


@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#comeback').click(function () {
            window.history.back();
        });
    });
</script>

    @include('template.sidebar.sidebarMaster.sidebarLeft')

    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container">
                    <div class="mainSection_heading">
                        @include('template.components.sectionCard')

                        <h5 class="mainSection_heading-title">Danh sách lớp</h5>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="action_wrapper d-flex justify-content-start">
                                            <div class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                aria-label="Quay lại" data-bs-original-title="Quay lại">
                                                <button class="btn btn-danger d-block" id="comeback">Quay lại</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="table-responsive ">
                                            <table id="dsVanDe" class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-nowrap text-center" style="width: 5%">STT</th>
                                                        <th class="text-nowrap text-center" style="width: 20%">
                                                            Môn học
                                                        </th>
                                                        <th class="text-nowrap text-center" style="width: 20%">
                                                            Lớp học
                                                        </th>
                                                        <th class="text-nowrap text-center" style="width: 10%">
                                                            Sĩ số
                                                        </th>
                                                        <th class="text-nowrap text-center" style="width: 10%">
                                                            Xem chi tiết
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($listClass as $value)
                                                    <tr>
                                                        <!-- <td style="text-align: center;">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck" data-id="">
                                                        </td> -->
                                                        <td>
                                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                {{ $value->subjectClass->id }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                {{ $value->subject->name }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                {{ $value->subjectClass->name }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="overText" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                {{ $value->numberStudent }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <!-- <div class="btn chitietModel-" data-bs-toggle="modal"
                                                                data-bs-target="">
                                                                <img style="width:16px;height:16px"
                                                                    onclick=""
                                                                    src="{{ asset('assets/img/edit.svg') }}" />
                                                            </div> -->
                                                            <div class="btn chitietModel-" data-bs-toggle="modal"
                                                                data-bs-target="" id="chitiet" onclick="redirectToDetailPage({{ $value->subjectClass->id }})">
                                                                <img style="width:16px;height:16px"
                                                                    src="{{ asset('assets/img/file.svg') }}" />
                                                            </div>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
        <!-- @include('template.sidebar.sidebarMaster.sidebarRight') -->
    </div>
    <script>
        function redirectToDetailPage(subjectClassId) {
            window.location.href = '/danh-sach-sinh-vien/' + subjectClassId;
        }
    </script>
@endsection
@section('footer-script')
    <!-- Plugins -->
    <script type="text/javascript" charset="utf-8"
        src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>
@endsection
