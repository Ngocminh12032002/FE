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
                window.location.href = '/danh-sach-sinh-vien-theo-dieu-kien/' + {{ $subjectClassID }} + '/{0}' ;
            });

            $('#passed').click(function () {
                window.location.href = '/danh-sach-sinh-vien-theo-dieu-kien/' + {{ $subjectClassID }} + '/{1}';
            });

            $('#failed').click(function () {
                window.location.href = '/danh-sach-sinh-vien-theo-dieu-kien/' + {{ $subjectClassID }} + '/{2}';
            });

        });


        // $('#turnBack').click(function () {
        //         window.location.href = '/danh-sach-lop';
        // });

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector('input[name="keyword"]').addEventListener("keypress", function(event) {
                if (event.key === "Enter") { // Kiểm tra nếu phím được nhấn là Enter
                    event.preventDefault(); // Ngăn chặn hành động mặc định của phím Enter
                    this.closest('form').submit(); // Gọi hàm submit của form chứa input
                }
            });
        });
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
                                                    <input type="radio" id="all-student" style="display: inline-block !important" name="condition" class="filter-radio" value="0"/>
                                                    <span>Tất cả sinh viên</span>
                                                </label>
                                            </div>

                                            <div class=>
                                                <label class="d-flex align-items-center justify-content-center form-check-label gap-2">
                                                    <input type="radio" id="passed" style="display: inline-block !important" name="condition" class="filter-radio" value="1"/>
                                                    <span>Đủ điều kiện dự thi</span>
                                                </label>
                                            </div>

                                            <div class=>
                                                <label class="d-flex align-items-center justify-content-center form-check-label gap-2">
                                                    <input type="radio" id="failed" style="display: inline-block !important" name="condition" class="filter-radio" value="2"/>
                                                    <span>Không đủ điều kiện dự thi</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="action_wrapper d-flex justify-content-end align-items-center ">
                                            <div class="d-flex justify-content-between align-items-center mx-3">

                                                <form method="POST" action="{{ route('listStudentByKey', $subjectClassID) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group has-search">
                                                        <span type="submit"
                                                            class="bi bi-search form-control-feedback fs-5"></span>
                                                        <input type="text" class="form-control" placeholder="Tìm theo tên, mã SV" name="keyword">
                                                        <input type="text" class="form-control" value="{{$statusFilter}}" name="statusFilter" style="display: none ">
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="action_export mx-3 order-md-3" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Nhập/Xuất Excel">
                                                <button class="btn btn-outline-danger" data-bs-toggle="modal"
                                                    data-bs-target="#excelOptions">
                                                    <i class="bi bi-download"></i>
                                                </button>
                                                <!-- <a role="button" target="_blank" class="btn-export"><i class="bi bi-download"></i></a> -->
                                            </div>

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
                                                            {{ !empty($value->mark->attendance) ? $value->mark->attendance : '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ !empty($value->mark->test) ? $value->mark->test : '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ !empty($value->mark->assignment) ? $value->mark->assignment : '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="overText text-center " data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                            {{ !empty($value->mark->exam) ? $value->mark->exam : '' }}
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
                <form id="formNhapdiem_{{ $value->student->id }}" method="POST" action="{{ route('nhapdiem', $value->student->id) }}"
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
                                    id="attendance_{{ $value->student->id }}" data-bs-placement="top" title="Điểm chuyên cần"
                                    placeholder="Điểm chuyên cần" class="form-control mb-1 attendance" value="{{ $value->mark->attendance ?? '' }}">
                                <div id="attendanceError_{{ $value->student->id }}" class="text-danger"></div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card-title">2. Điểm kiểm tra</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm kiểm tra">
                                <input type="text" name="test" data-bs-toggle="tooltip"
                                    id="test_{{ $value->student->id }}" data-bs-placement="top" title="Điểm kiểm tra"
                                    placeholder="Điểm kiểm tra" class="form-control mb-1 test" value="{{ $value->mark->test ?? '' }}">
                                <div id="testError_{{ $value->student->id }}" class="text-danger"></div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card-title">3. Điểm bài tập</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm bài tập">
                                <input type="text" name="assignment" data-bs-toggle="tooltip"
                                    id="assignment{{ $value->student->id }}" data-bs-placement="top" title="Điểm bài tập"
                                    placeholder="Điểm bài tập" class="form-control mb-1 assignment" value="{{ $value->mark->assignment ?? '' }}">
                                <div id="assignmentError_{{ $value->student->id }}" class="text-danger"></div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card-title">4. Điểm thi</div>
                            </div>
                            <div class="col-md-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Điểm thi">
                                <input type="text" name="exam" data-bs-toggle="tooltip"
                                    id="exam{{ $value->student->id }}" data-bs-placement="top" title="Điểm thi"
                                    placeholder="Điểm thi" class="form-control mb-1 exam" value="{{ $value->mark->exam ?? '' }}">
                                <div id="examError_{{ $value->student->id }}" class="text-danger"></div>
                            </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputs = document.querySelectorAll('#formNhapdiem_{{ $value->student->id }} input[type="text"]');

            inputs.forEach(function(input) {
                input.addEventListener('blur', function() {
                    var value = this.value;
                    var fieldName = this.name;
                    var studentId = '{{ $value->student->id }}';
                    var errorMessageId = fieldName + 'Error_' + studentId;

                    if (!isValidInput(value)) {
                        document.getElementById(errorMessageId).innerText = "Trường điểm phải là số từ 0 đến 10";
                        this.value = '';
                        this.focus();
                    } else {
                        document.getElementById(errorMessageId).innerText = ""; // Xóa cảnh báo nếu giá trị hợp lệ
                    }
                });
            });

            function isValidInput(value) {
                if (isNaN(value)) {
                    return false;
                }
                var numericValue = parseFloat(value);
                return numericValue >= 0 && numericValue <= 10;
            }
        });
    </script>
    @endforeach



    <!-- Thao tác Excel  -->
    <div class="modal fade" id="excelOptions" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h2 class="modal-title w-100" id="exampleModalLabel">Nhập/ Xuất điểm sinh viên</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="create_user-wrapper">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="d-flex flex-column justify-content-center align align-items-center mb-3">
                                        <div class="upload_wrapper-items">
                                            <a href="{{ route('downloadSample', $subjectClassID) }}" class="modal-title1">
                                                Bấm vào đây để tải file mẫu về
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex flex-column justify-content-center align align-items-center">
                                        <div class="upload_wrapper-items">
                                            <button role="button" type="button"
                                                class="btn position-relative border d-flex w-100">
                                                <img style="width:16px;height:16px"
                                                    src="{{ asset('assets/img/upload-file.svg') }}" />
                                                <span class="ps-2">Đính kèm file</span>
                                                <input required accept=".xlsx" role="button" type="file"
                                                    class="modal_upload-input modal_upload-file" name="fileUrl"
                                                    onchange="updateList(event)" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul class="modal_upload-list"
                                        style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;">
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger test_cancel"
                            data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger test_save">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        updateList = function(e) {
            const input = e.target;
            const outPut = input.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(
                '.modal_upload-list');
            console.log(outPut);
            const notSupport = outPut.parentNode.parentNode.querySelector('.alertNotSupport');

            let children = '';
            // const allowedTypes = ['application/pdf'];
            // const allowedExtensions = ['.pdf'];
            const maxFileSize = 10485760; //10MB in bytes

            for (let i = 0; i < input.files.length; ++i) {
                const file = input.files.item(i);
                // if (file.size <= maxFileSize && allowedTypes.includes(file.type) && allowedExtensions.includes(
                //         getFileExtension(file.name))) {
                if (file.size <= maxFileSize) {
                    children += `<li>
                        <span class="fs-5">
                            <i class="bi bi-link-45deg"></i> ${file.name}
                        </span>
                        <span class="modal_upload-remote" onclick="removeFileFromFileList(event, ${i})">
                            <img style="width:18px;height:18px" src="{{ asset('assets/img/trash.svg') }}" />
                        </span>
                    </li>`;
                } else {

                    notSupport.style.display = 'block';
                    //remove all files from input
                    input.value = '';

                    setTimeout(() => {
                        notSupport.style.display = 'none';
                    }, 5000);
                }
            }
            outPut.innerHTML = children;
        }

        //delete file from input
        function removeFileFromFileList(event, index) {
            const deleteButton = event.target;
            //get tag name
            const tagName = deleteButton.tagName.toLowerCase();
            let liEl;
            if (tagName == "img") {
                liEl = deleteButton.parentNode.parentNode;
            }
            if (tagName == "span") {
                liEl = deleteButton.parentNode;
            }

            const inputEl = liEl.parentNode.parentNode.parentNode.querySelector('.modal_upload-input');
            const dt = new DataTransfer()

            const {
                files
            } = inputEl

            for (let i = 0; i < files.length; i++) {
                const file = files[i]
                if (index !== i)
                    dt.items.add(file) // here you exclude the file. thus removing it.
            }

            inputEl.files = dt.files // Assign the updates list
            liEl.remove();
        }

        function removeUploaded(event) {
            const deleteButton = event.target;
            //get tag name
            const tagName = deleteButton.tagName.toLowerCase();
            let liEl;
            if (tagName == "img") {
                liEl = deleteButton.parentNode.parentNode;
            }
            if (tagName == "span") {
                liEl = deleteButton.parentNode;
            }
            liEl.remove();
        }

        function getFileExtension(filename) {
            return '.' + filename.split('.').pop();
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
