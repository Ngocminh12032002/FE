@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Danh sách sinh viên')
@section('header-style')
    <style>
        .dataTables_filter {
            margin: 0;
        }


        .input-edit-value {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            width: 60px;
            outline: none !important;
            border: none !important;
            background-color: transparent !important;
        }

        .overText.text-center {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
        }


    </style>
@endsection
@section('content')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#comeBack').click(function () {
                window.history.back();
            });

            $('.filter-radio').change(function() {
                // Kiểm tra nếu input đó được chọn
                if ($(this).is(':checked')) {
                    // Lấy thẻ <span> tiếp theo của input
                    var spanContent = $(this).next('span').text();
                    // In nội dung của thẻ <span>
                    console.log(spanContent);
                }
            });

            $('.update-point-btn').click(function() {
                console.log("click");

            });

            $('.txtScr').focus(function() {
                console.log("focus");
                // Xử lý khi phần tử được focus
                $('.update-point-btn').attr("disabled", false);
            });

            $('.txtScr').blur(function(e) {
                console.log("blur");
                const btn = $('.update-point-btn')
                // Xử lý khi phần tử 0 được focus
                // if (!btn.is(e.target) && btn.has(e.target).length === 0) {
                //     console.log('Không click vào button');
                // }

                btn.attr("disabled", true);
            });

            $('#all-student').click(function () {
                window.location.href = '/danh-sach-sinh-vien-theo-dieu-kien/' + {{ $listStudent[0]->student->subject_class_id }} + '/{0}' ;
            });

            $('#passed').click(function () {
                window.location.href = '/danh-sach-sinh-vien-theo-dieu-kien/' + {{ $listStudent[0]->student->subject_class_id }} + '/{1}';
            });

            $('#failed').click(function () {
                window.location.href = '/danh-sach-sinh-vien-theo-dieu-kien/' + {{ $listStudent[0]->student->subject_class_id }} + '/{2}';
            });
        });


        // $('#turnBack').click(function () {
        //         window.location.href = '/danh-sach-lop';
        // });

        function validateForm(studentId) {
        var isValid = true;

        // Kiểm tra và validate các trường dữ liệu trong form
        // Nếu dữ liệu không hợp lệ, cập nhật nội dung của modal alert và hiển thị
        // Nếu dữ liệu hợp lệ, trả về true để submit form

        // Kiểm tra trường "Điểm chuyên cần"
        var attendance = $('#attendance' + studentId).val();
        if (!validateInput(attendance)) {
            isValid = false;
        }

        // Kiểm tra trường "Điểm kiểm tra"
        var test = $('#test' + studentId).val();
        if (!validateInput(test)) {
            isValid = false;
        }

        // Kiểm tra trường "Điểm bài tập"
        var assignment = $('#assignment' + studentId).val();
        if (!validateInput(assignment)) {
            isValid = false;
        }

        // Kiểm tra trường "Điểm thi"
        var exam = $('#exam' + studentId).val();
        if (!validateInput(exam)) {
            isValid = false;
        }

        // Nếu không hợp lệ, hiển thị thông báo
        if (!isValid) {
            alert('Dữ liệu không hợp lệ. Vui lòng nhập số nguyên từ 0 đến 10.');
        }

        return isValid;
        }

        function validateInput(input) {
            // Kiểm tra xem input có chứa ký tự đặc biệt hoặc không nằm trong phạm vi từ 0 đến 10 không
            var regex = /^[0-9]{1,2}$/;
            return regex.test(input) && parseInt(input) >= 0 && parseInt(input) <= 10;
        }


    </script>



    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Danh sách sinh viên</h5>
                        @include('template.components.sectionCard')
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class='row mb-3'>
                                <div class="col-md-4">
                                    <div class="action_wrapper d-flex justify-content-start">
                                        <div class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Quay lại" data-bs-original-title="Quay lại">
                                            <button class="btn btn-danger d-block" id="comeBack">Quay lại</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="action_wrapper d-flex justify-content-end d-flex align-items-center">
                                        <div class="action_export me-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Nhập điểm" data-bs-original-title="Nhập điểm" style="display: none">
                                            <button class="btn btn-danger d-block testCreateUser update-point-btn" disabled data-bs-toggle="modal"
                                                data-bs-target="#settingFactor">Cập nhật điểm</button>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center gap-4 me-3">
                                            <div class=>
                                                <label class="d-flex align-items-center justify-content-center form-check-label gap-2">
                                                    <input type="radio" id="all-student" style="display: inline-block !important" name="radio-select" class="filter-radio"/>
                                                    <span>Tất cả sinh viên</span>
                                                </label>
                                            </div>

                                            <div class=>
                                                <label class="d-flex align-items-center justify-content-center form-check-label gap-2">
                                                    <input type="radio" id="passed" style="display: inline-block !important" name="radio-select" class="filter-radio"/>
                                                    <span>Đủ điều kiện dự thi</span>
                                                </label>
                                            </div>

                                            <div class=>
                                                <label class="d-flex align-items-center justify-content-center form-check-label gap-2">
                                                    <input type="radio" id="failed" style="display: inline-block !important" name="radio-select" class="filter-radio"/>
                                                    <span>Không đủ điều kiện dự thi</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="action_wrapper d-flex justify-content-end align-items-center ">
                                            <div class="d-flex justify-content-between align-items-center mx-3">

                                                <form method="GET" action="#">
                                                    <div class="form-group has-search">
                                                        <span type="submit"
                                                            class="bi bi-search form-control-feedback fs-5"></span>
                                                        <input type="text" class="form-control" placeholder="Tìm kiếm"
                                                            value="" name="q">
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- <div class="action_export mx-3 order-md-3" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Lọc">
                                                <button class="btn btn-outline-danger" data-bs-toggle="modal"
                                                    data-bs-target="#filterOptions">
                                                    <i class="bi bi-funnel"></i>
                                                </button>
                                            </div> -->

                                        </div>

                                        <div class="action_export" data-bs-toggle="tooltip" data-bs-placement="top"
                                            aria-label="Xem hệ số" data-bs-original-title="Xem hệ số">
                                            <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                                                data-bs-target="#settingFactor">Xem hệ số</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    <div class="table-responsive ">
                                        <table id="dsVanDe" class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-nowrap text-center" style="width: 5%">STT</th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Mã sinh viên
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 15%">
                                                        Họ và tên
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Email
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Điểm chuyên cần
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Điểm kiểm tra
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Điểm bài tập
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Điểm thi
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Điểm trung bình
                                                    </th>
                                                    <th class="text-nowrap text-center" style="width: 10%">
                                                        Sửa điểm
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($listStudent as $value)
                                                <tr>
                                                    <!-- <td style="text-align: center;">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck" data-id="">
                                                    </td> -->
                                                    <td>
                                                        <div class="overText text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ $value->student->id }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ $value->student->code }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ $value->student->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ $value->student->email }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center  " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            <input class="input-edit-value txtScr" type="text" value="{{ !empty($value->mark->attendance) ? $value->mark->attendance : '' }}">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            <input class="input-edit-value txtScr" type="text" value="{{ !empty($value->mark->test) ? $value->mark->test : '' }}">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">

                                                            <input class="input-edit-value txtScr" type="text" value="{{ !empty($value->mark->assignment) ? $value->mark->assignment : '' }}">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">

                                                            <input class="input-edit-value txtScr" type="text" value="{{ !empty($value->mark->exam) ? $value->mark->exam : '' }}">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">

                                                            <input readonly class="input-edit-value" type="text" value="{{ !empty($value->mark->gpa) ? $value->mark->gpa : '' }}">

                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table_actions d-flex justify-content-center">
                                                        <div class="btn chitietModel-" data-bs-toggle="modal"
                                                            data-bs-target="#nhapdiem{{ $value->student->id }}">
                                                            <img style="width:16px;height:16px"
                                                                onclick=""
                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                        </div>
                                                        <!-- <div class="btn chitietModel-" data-bs-toggle="modal"
                                                            data-bs-target="#thongtinchitiet{{ $value->student->id }}">
                                                            <img style="width:16px;height:16px"
                                                                onclick=""
                                                                src="{{ asset('assets/img/file.svg') }}" />
                                                        </div> -->
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
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

    <!-- Thiết lập điều kiện  -->
    <div class="modal fade" id="settingFactor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Hệ số thiết lập</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formThangDiem" method="POST" action=""
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                        <div class="col-md-12 mb-3">
                                <div class="card-title">1. Điểm chuyên cần</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="attendanceFactor" data-bs-toggle="tooltip"
                                    id="attendanceFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1" value="10%">
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="card-title">2. Điểm kiểm tra</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="testFactor" data-bs-toggle="tooltip"
                                    id="testFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1" value="10%">
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="card-title">3. Điểm bài tập</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="assignmentFactor" data-bs-toggle="tooltip"
                                    id="assignmentFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1" value="20%">
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class="card-title">4. Điểm thi</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="examFactor" data-bs-toggle="tooltip"
                                    id="examFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1" value="70%">
                            </div>
                        </div>
                        <!-- <div class="modal-footer justify-content-between">
                            <button type="submit" class="btn btn-danger" style="display: none"></button>
                            <p></p>
                            <button type="reset" class="btn btn-outline-danger justify-content-between">Đóng</button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Nhập điểm  -->
    @foreach ($listStudent as $value)
    <div class="modal fade" id="nhapdiem{{ $value->student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa điểm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formNhapdiem" method="POST" action="{{ route('nhapdiem', $value->student->id ) }}"
                    enctype="multipart/form-data" onsubmit="return validateForm('{{ $value->student->id }}')">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="card-title">1. Điểm chuyên cần</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm chuyên cần">
                                <input type="text" name="attendance" data-bs-toggle="tooltip"
                                    id="" data-bs-placement="top" title="Điểm chuyên cần"
                                    placeholder="Điểm chuyên cần" class="form-control mb-1 attendance" value="{{ $value->mark->attendance ?? '' }}">
                            </div>
                            <!-- <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="attendanceFactor" data-bs-toggle="tooltip"
                                    id="attendanceFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1">
                            </div> -->

                            <div class="col-md-12 mb-3">
                                <div class="card-title">2. Điểm kiểm tra</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm kiểm tra">
                                <input type="text" name="test" data-bs-toggle="tooltip"
                                    id="" data-bs-placement="top" title="Điểm kiểm tra"
                                    placeholder="Điểm kiểm tra" class="form-control mb-1 test" value="{{ $value->mark->test ?? '' }}">
                            </div>
                            <!-- <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="testFactor" data-bs-toggle="tooltip"
                                    id="testFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1">
                            </div> -->

                            <div class="col-md-12 mb-3">
                                <div class="card-title">3. Điểm bài tập</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm bài tập">
                                <input type="text" name="assignment" data-bs-toggle="tooltip"
                                    id="" data-bs-placement="top" title="Điểm bài tập"
                                    placeholder="Điểm bài tập" class="form-control mb-1 assignment" value="{{ $value->mark->assignment ?? '' }}">
                            </div>
                            <!-- <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="assignmentFactor" data-bs-toggle="tooltip"
                                    id="assignmentFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1">
                            </div> -->


                            <div class="col-md-12 mb-3">
                                <div class="card-title">4. Điểm thi</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm thi">
                                <input type="text" name="exam" data-bs-toggle="tooltip"
                                    id="" data-bs-placement="top" title="Điểm thi"
                                    placeholder="Điểm thi" class="form-control mb-1 exam" value="{{ $value->mark->exam ?? '' }}">
                            </div>
                            <!-- <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hệ số điểm">
                                <input type="text" name="examFactor" data-bs-toggle="tooltip"
                                    id="examFactor" data-bs-placement="top" title="Hệ số điểm"
                                    placeholder="Hệ số điểm" class="form-control mb-1">
                            </div> -->

                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <div>
                            <button type="submit" class="btn btn-danger">Lưu</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-danger me-3"
                                data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach




    <!-- Lọc  -->
    @foreach ($listStudent as $value)
    <div class="modal fade" id="filterOptions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Lọc dữ liệu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-original-title="Lọc theo điều kiện">
                                    <select id="condition" class="selectpicker" data-dropup-auto="false"
                                        title="Lọc theo điều kiện" name='condition'>
                                        <option value="0">Tất cả sinh viên</option>
                                        <option value="1">Đủ điều kiện dự thi</option>
                                        <option value="2">Không đủ điều kiện dự thi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="reset" class="btn btn-outline-danger">Làm
                                mới</button>
                            <button type="submit" class="btn btn-danger">Lọc</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

@endsection
@section('footer-script')
    <!-- Plugins -->
    <script type="text/javascript" charset="utf-8"
        src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>


@endsection
