<div id="aside-left" class="aside-left">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_heading-wrapper">
                        <div class="wrapper">
                            <h1 class="text-danger">Cơ cấu đơn vị</h1>
                        </div>
                    </div>
                    <title>Danh sách đơn vị</title>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <form method="GET" action="">
                            <div class="form-group has-search">
                                <span type="submit" class="bi bi-search form-control-feedback fs-5"></span>
                                <input type="text" style="width: 250px;" class="form-control"
                                    value="{{ request()->search }}" placeholder="Tìm kiếm" name="search">
                            </div>
                        </form>
                    </div>

                    <br>

                    <div class="ui styled accordion mb-5">
                        <div class="title active d-flex align-items-center justify-content-between"
                            style="background: #EBEBEB">
                            <span class="fs-4 text-default fw-bold">Cơ cấu tổ chức</span>
                            <i class="dropdown icon fs-5"></i>
                        </div>
                        <div class="content">
                            <div id="list-container">
                                <ul>
                                    <li>
                                        <a style="padding-left:10px;" onclick="ToChucFunction()">
                                            <div class="d-flex align-items-center item-accordion fs-4 p-3 rounded"
                                                id="linkToChuc">
                                                Cơ cấu tổ chức
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a style="padding-left:10px;" onclick="DiaBanFunction()">
                                            <div class="d-flex align-items-center item-accordion fs-4 p-3 rounded"
                                                id="linkDiaBan">
                                                Cơ cấu địa bàn
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="CoCauToChuc" class="wapper-tree">
                        {{-- Style Old style="overflow: scroll" --}}
                        <ul id="tree1" style="overflow: scroll; padding-bottom: 30px">
                            @if ($listDepartmentsTree)
                                @foreach ($listDepartmentsTree->data as $parent)
                                    {{-- Style Old style="width: max-content" --}}
                                    <li data-id="{{ $parent->id }}" style="width: max-content">
                                        {{ $parent->order ?? '' }}<a
                                            href="{{ route('department.show', ['id' => $parent->id]) }}"
                                            class="title-child">{{ $parent->name }}</a>
                                        @if (isset($parent->sub_unit) && count($parent->sub_unit) > 0)
                                            @if ($parent->order != null)
                                                @include('template.sidebar.sidebarCoCauToChuc.child', [
                                                    'subUnit' => $parent->sub_unit,
                                                    'previous' => $parent->order,
                                                ])
                                            @else
                                                @include('template.sidebar.sidebarCoCauToChuc.child', [
                                                    'subUnit' => $parent->sub_unit,
                                                    'previous' => '',
                                                ])
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div id="CoCauDiaBan" class="wapper-tree d-lg-none">
                        <ul id="tree2">
                            @if ($listLocationsTree)
                                @foreach ($listLocationsTree->data as $parent)
                                    <li data-id="{{ $parent->id }}" style="width: max-content">
                                        {{ $parent->order ?? '' }}<a
                                            href="{{ route('location.show', ['id' => $parent->id]) }}"
                                            class="title-child">{{ $parent->name }}</a>
                                        @if (count($parent->sub_unit) > 0)
                                            @if ($parent->order != null)
                                                @include(
                                                    'template.sidebar.sidebarCoCauToChuc.childLocation',
                                                    [
                                                        'subUnit' => $parent->sub_unit,
                                                        'previous' => $parent->order,
                                                    ]
                                                )
                                            @else
                                                @include(
                                                    'template.sidebar.sidebarCoCauToChuc.childLocation',
                                                    [
                                                        'subUnit' => $parent->sub_unit,
                                                        'previous' => '',
                                                    ]
                                                )
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <span id="btn-left"><i class="bi bi-arrow-bar-left"></i></span>
    </div>
</div>

<style>
    ul {
        padding: 0;
    }

    .wapper-tree {
        height: calc(100vh - 210px);
        overflow: auto;
    }

    .title-child {
        font-size: 1.2rem;
        color: black;
        padding: 5px;
    }

    .title-child.active {
        color: #ca1f24;
        font-weight: 700
    }

    .title-child:hover {
        color: #ca1f24;
    }

    .item-accordion {
        background-color: #EBEBEB;
        color: black;
    }

    .item-accordion:hover {
        background-color: #ca1f24;
        color: #fff;
        font-weight: 700;
    }

    .tree,
    .tree ul {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .tree ul {
        margin-left: 1em;
        position: relative
    }

    .tree ul ul {
        margin-left: .5em
    }

    .tree ul:before {
        content: "";
        display: block;
        width: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        border-left: 2px dotted #ca1f24;
    }

    .tree li {
        margin: 0;
        padding: 0 1em;
        line-height: 2em;
        position: relative;
        font-size: 12px;
    }


    .tree ul li:last-child:before {
        background: #fff;
        height: auto;
        top: 1em;
        bottom: 0
    }

    .tree li a {
        text-decoration: none;
    }

    .indicator {
        font-size: 14px;
        color: #ca1f24;
        margin-right: 5px
    }

    .indicator a {
        color: #ca1f24;
    }

    .tree li.open>ul {
        display: block;
    }
</style>

@section('script-chart')
    <script>
        $(document).ready(function() {
            var url = window.location.href;
            if (url.includes("danh-sach-dia-ban")) {
                DiaBanFunction(); // Display CoCauDiaBan
            } else {
                ToChucFunction(); // Display CoCauToChuc (default)
            }
        });

        function ToChucFunction() {
            var elementDiaBan = document.getElementById("CoCauDiaBan");
            var elementToChuc = document.getElementById("CoCauToChuc");
            var linkToChuc = document.getElementById("linkToChuc");
            var linkDiaBan = document.getElementById("linkDiaBan");

            elementDiaBan.classList.add("d-lg-none");
            elementToChuc.classList.remove("d-lg-none");
            linkToChuc.classList.add("element-active");
            linkDiaBan.classList.remove("element-active");
        }

        function DiaBanFunction() {
            var elementDiaBan = document.getElementById("CoCauDiaBan");
            var elementToChuc = document.getElementById("CoCauToChuc");
            var linkToChuc = document.getElementById("linkToChuc");
            var linkDiaBan = document.getElementById("linkDiaBan");

            elementDiaBan.classList.remove("d-lg-none");
            elementToChuc.classList.add("d-lg-none");

            linkDiaBan.classList.add("element-active");
            linkToChuc.classList.remove("element-active");
        }
    </script>

    <script>
        $.fn.extend({
            treed: function(o) {
                var openedClass = 'bi-dash-square';
                var closedClass = 'bi-plus-square';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                };

                var tree = $(this);
                tree.addClass("tree");

                tree.find('li').has("ul").each(function() {
                    var branch = $(this);
                    branch.prepend("<i class='indicator bi " + closedClass + "'></i>");
                    branch.addClass('branch');
                    branch.on('click', function(e) {
                        if (this == e.target) {
                            var icon = $(this).children('i');
                            var a = $(this).children('a');
                            icon.toggleClass(openedClass + " " + closedClass);
                            a.toggleClass('active')
                            $(this).children().children().toggle();

                        }
                    });

                    branch.children().children().toggle();
                });

                tree.find('li:not(.branch)').css('margin-left', '2.2rem');

                tree.find('.branch .indicator').each(function() {
                    $(this).on('click', function() {
                        $(this).closest('li').click();
                    });
                });
            }
        });

        $(document).ready(function() {
            $("#tree1").children("li:first-child").click();
        })

        $(document).ready(function() {
            $("#tree2").children("li:first-child").click();
        })

        $('#tree1').treed();
        $('#tree2').treed();

        var activeLink = localStorage.getItem('activeLink');
        if (activeLink) {
            var $activeLink = $('#' + activeLink);
            if ($activeLink.length) {
                $activeLink.addClass('activeLink');
            }
        }

        $('#tree1 a').on('click', function() {
            var linkId = $(this).attr('id');
            localStorage.setItem('activeLink', linkId);
        });
    </script>
@endsection
