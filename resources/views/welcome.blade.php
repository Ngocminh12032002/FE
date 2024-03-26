<!DOCTYPE html> <html lang="en"> <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width,
    initial-scale=1.0" /> <title>Đăng nhập</title>
<!-- Favicon -->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

<!-- Vendor CSS Files -->
<link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/variables.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet" />
<script src="https://www.google.com/recaptcha/api.js"></script>
<style>
    .signup_acceptTerm {
        bottom: 0;
        color: #666;
        font-size: var(--fz-14);
        left: 0;
        line-height: 1.6;
        padding: 12px;
        position: absolute;
        right: 0;
    }

    .login_acceptTerm1 {
        color: #666;
        font-size: var(--fz-14);
        left: 0;
        line-height: 1.6;
        padding: 10px;
        right: 0;
        height: 15px;
    }

    .login_acceptTerm1 a {
        color: var(--primary-color);
    }

    .line {
        border-bottom: 1px solid #cccccc;
        margin-top: 25px;
    }
</style>
</head>

<body>
    <div class="wrapper">
        <div class="login_wrapper">
            <div class="login_container">
                <div class="login_content">
                    <div class="login_header">
                        <a href="/">
                            <img src="https://play-lh.googleusercontent.com/CoHZBnuWQRT15pi23JlZwi0WswnJEZXzPRGP3CYwn_Fid-SRkw8v2suUi31YvwC7zQ" alt="logo" class="login_logo" />
                        </a>
                    </div>
                    <div class="login_body">
                        <form action="{{ route('login') }}" method="POST" autocomplete="off" id="loginForm">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="admin"
                                    name="username" value="" />
                                <label for="floatingInput">Tên đăng nhập</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="matkhau"
                                    name="password" />
                                <label for="floatingPassword">Mật khẩu</label>
                            </div>
                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <div class="d-grid">
                                <button class="g-recaptcha btn btn-login text-uppercase fw-bold h-100"
                                    data-sitekey="" data-callback='onSubmit'
                                    data-action='login'>Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            if (localStorage.getItem('modalShown') != null) {
                localStorage.removeItem('modalShown', false);
            }
        });
    </script>

    <script>
        function onSubmit(token) {
            document.getElementById("loginForm").submit();
        }
    </script>

</body>

</html>