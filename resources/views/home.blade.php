@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Màn hình chính')
@section('header-style')
<style>
.tree_wrapper {
overflow-y: scroll;
height: 100vmin;
padding-bottom: 150px;
}

.form-control-label{
    font-size: 14px
}

.form-group {
    margin-bottom: 1rem
}
</style> @endsection @php @endphp @section('content') <div id="mainWrap" class="mainWrap">
<div class="mainSection">
<div class="main">
    <div class="container-fluid">
        <div class="mainSection_heading">
            @include('template.components.sectionCard')
            <h4 class="mainSection_heading-title">
                Màn hình chính
            </h4>
        </div>
        <div class="card mb-3">
            <div class="card-body position-relative body_content-wrapper" id="body_content-1" style="display:block">
                <div class='row'>
                    <div class="col-md-8">
                        <div class="animated fadeIn">
                            <div class="row">
                                <div class="">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title" style="font-size: 16px ">Thông tin giáo viên</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="form-group">
                                                <label class=" form-control-label">Họ và tên</label>
                                                <div class="input-group">
                                                    <input class="form-control" value="{{ session('name') }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Ngày sinh</label>
                                                <div class="input-group">
                                                    <input class="form-control" value="{{ $dob }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Số điện thoại</label>
                                                <div class="input-group">
                                                    <input class="form-control" value="{{ $phone_number }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Email</label>
                                                <div class="input-group">
                                                    <input class="form-control" value="{{ $email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Nơi sinh</label>
                                                <div class="input-group">
                                                    <input class="form-control" value="{{ $country }}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Nơi làm việc</label>
                                                <div class="input-group">
                                                    <input class="form-control" value="Học viện Công nghệ Bưu chính viễn thông"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-header">
                            <strong class="card-title" style="font-size: 16px;">Thông tin giảng dạy</strong>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">Các kỳ giảng dạy</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <ul class="list-group">
                                    @foreach ( $course as $item)
                                        <a id="course{{$item->id}}" class="list-group-item"  onclick="redirectToDetailPage({{$item->id}})">{{$item->name}}</a>
                                    @endforeach
                                </ul>
                                <div class="panel-footer"></div>
                            </div>
                            </div>
                        </div>

<!--

                        <div class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Danh sách lớp giảng dạy" data-bs-original-title="Danh sách lớp giảng dạy" style="margin: 0 auto;">
                            <button class="btn btn-danger d-block " data-bs-toggle="modal"
                                id="dslop" data-bs-target="">Danh sách lớp giảng dạy</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js"
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function () {
                    $('#dslop').click(function () {
                        window.location.href = '/danh-sach-lop';
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    $('#xemtt').click(function () {
                        window.location.href = '/danh-sach-mau';
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    $('#turnBack').click(function () {
                        window.location.href = '/dang-xuat';
                    });
                });
            </script>

            <!-- <script>
                $(document).ready(function () {
                    $('#course1').click(function () {
                        window.location.href = '/danh-sach-lop-ky-hoc/1/' + {{ $id}};
                    });
                });
            </script> -->

            <script>
                function redirectToDetailPage(courseId) {
                    window.location.href = '/danh-sach-lop-ky-hoc/' + courseId + '/' + {{ $id}};
                }
            </script>
            @endsection