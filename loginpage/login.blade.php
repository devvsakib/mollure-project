<style>
    body {
        font-family: 'Playfair Display', serif;
        background: url(./leftShape.svg), url(./rightShape.svg);
        background-position: left bottom, right bottom;
        background-repeat: no-repeat;
        background-size: auto, auto;
    }

    .container {
        max-width: 1200px;
    }

    h4 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    p {
        color: #5A5A5A;
        font-weight: 400;
        margin-bottom: 20px;
        font-size: 12px;
    }

    .login-card {
        width: 495px;
        height: 460px;
        border: 1px solid #E4E4E4;
        border-radius: 22px;
        margin-top: 45px;
        margin-bottom: 451px;
        padding: 25px;
    }

    a {
        text-decoration: none;
        color: #000;
    }

    a:hover {
        color: #1a924e;
    }



    .leftCircle {
        width: 330.17px;
        height: 272.62px;
        position: absolute;
        left: 50px;
        top: 400px;
        background: radial-gradient(50% 50% at 50% 50%, #21B8BF 0%, #21B8BF 19.06%, #21B8BF 40.42%, rgba(217, 217, 217, 0) 100%);
        opacity: 0.08;
        z-index: -1;
        transform: rotate(24.6deg);
    }

    .rightCircle {
        position: absolute;
        width: 301.6px;
        height: 249.03px;
        right: 50px;
        top: 277px;
        background: radial-gradient(50% 50% at 50% 50%, #66C68F 0%, #66C68F 19.06%, #66C68F 40.42%, rgba(217, 217, 217, 0) 100%);
        opacity: 0.1;
        z-index: -1;
        transform: rotate(24.6deg);
    }

    .mollure-text-color {
        color: #66c68f;
    }


    label {
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        text-transform: capitalize;
        color: #5A5A5A;
    }

    input {
        font-style: normal;
        font-weight: 400;
        font-size: 14px !important;
        background: #FFFFFF;
        border: 1px solid #E4E4E4 !important;
        border-radius: 8px !important;
        color: #000000 !important;
        padding: 10px 14px 15px 10px !important;
    }

    input:focus {
        outline: none !important;
        border: 1px solid #66C68F !important;
    }

    /* Password Icon */
    .password-input {
        position: relative;
    }

    .input-container {
        position: relative;
    }

    .eye-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }


    /* target checkbox */
    input[type="checkbox"] {
        width: 18px;
        height: 18px;
        position: relative;
        opacity: 0.15;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 2px;
        background-color: #66C68F;
    }

    input[type="checkbox"]:checked {
        outline: none;
        cursor: pointer;
        opacity: 0.3;
        border: 1px solid #66C68F;
    }

    input[type="password"] {
        margin-bottom: 10px;
    }

    .check {
        display: block;
        font-size: 12px;
        font-weight: 400;
        color: #5A5A5A;
    }

    .forgetPass {
        color: #5A5A5A;
        font-size: 12px;
    }

    #login {
        font-weight: 500;
        font-size: 16px;
        background: #66C68F;
        border: 1px solid #66C68F;
        box-shadow: 0px 0px 30px rgba(102, 198, 143, 0.05);
        border-radius: 8px;
        padding: 9px 0;
    }

    .notaMember {
        font-size: 14px;
    }

    @media (max-width: 600px) {
        .login-card {
            width: 400px;
        }

        body {
            background-size: 200px, 200px;
        }
    }

    .lang-btn {
        border: 1px solid rgb(0, 0, 0, 0.3);
        border-radius: 37px;
        background: transparent;
        width: 70px;
        font-weight: 400;
        color: #000000;
        font-size: 15px;
        padding: -6px 0px 0px 0px !important;
        height: 30px;
    }

    .lang-btn>.btn {
        margin-top: -5px;
    }

    .lang-btn>button {
        outline: none;
        border: none;
    }

    .lang-btn>.dropdown-menu {
        list-style: none;
        padding: 5px 0;
        margin: 0;
        background: #ffffff;
        color: #000000;
        border-radius: 4px;
        z-index: 1;
        min-width: 90px !important;
        padding: 0 20px;
        box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
        border-radius: 8px;
        border: none;
    }

    .dropdown-toggle::after {
        display: inline-block;
        content: url(./arrow.svg);
        border-top: 0 solid;
        border-right: 0 solid transparent;
        border-bottom: 0;
        margin-top: -5px;
        margin-left: 10px;
        border-left: 0 solid transparent;
    }
</style>

<body>
    <div class="leftCircle"></div>
    <div class="rightCircle"></div>
    <nav class="my-4 container d-flex justify-content-between align-items-center">
        <img class="logo" src="./Logo.svg" alt="logo">
        <div class="dropdown lang-btn">
            <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                EN
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="p-2">
                    <a href="https://cynnaenterprises.com/mollure/nl/login">NL</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @if($errors->any())
        <div class="text-center" id="msg-alert1">

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
    <div class="container loginGroup d-flex justify-content-center">
        <div class="login-card p-4 grid gap-3 justify-content-center align-items-center">
            <div class="">
                <h4>Login</h4>
                <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
            </div>
            <form action="{{route('login_post')}}" id="frm1" method="post" class="d-grid gap-1 interCardGroupLogin">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="">
                    <label for="email" class="form-label">{{$lang_kwords['email']['english']}}</label>
                    <input type="email" placeholder="Enter Email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                </div>
                <div class="">
                    <label for="password" class="form-label">{{$lang_kwords['passwords']['english']}}</label>
                    <div class="input-container">
                        <input type="password" placeholder="Password" name="password" class="form-control" id="password" value="">
                        <img src="./Hide.svg" alt="Show/Hide Password" class="eye-icon" onclick="togglePasswordVisibility()">
                    </div>
                </div>

                <div class="d-flex justify-content-between align-content-center mb-4 mt-2">
                    <div class="d-flex justify-content-between align-content-center gap-2">
                        <input type="checkbox" name="remember" id="remember">
                        <span class="check"><label for="remmeber">Remember me</label></span>
                    </div>
                    <p class="forgetPass" href="#" role="button" onclick="show_forget_pass()">{{$lang_kwords['forgot-password']['english']}}</p>
                </div>
                <button type="submit" class="btn btn-primary mt-1" id="login" name="form_submit" id="form_submit" onclick="form_validate()">{{$lang_kwords['login_submit']['english']}}</button>
            </form>
            <div class="text-center" id="fp_er_sec" style="display:none">
                <div class="alert alert-danger">
                    <p id="fp_er_p"></p>
                </div>
            </div>
            <div>
                <p class="text-center notaMember mt-4 text-capitalize">Not a member? <a class="mollure-text-color" href="{{route('register')}}">Register</a></p>
            </div>
        </div>
    </div>


    <!-- Bootstrap CDN -->

    <script src="{{URL::asset('public/js/sweetalert.min.js')}} "></script>
 
   <script type="text/javascript">
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.querySelector(".eye-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.src = "./Hide.svg";
                eyeIcon.alt = "Hide Password";
            } else {
                passwordInput.type = "password";
                eyeIcon.src = "./Hide.svg";
                eyeIcon.alt = "Show Password";
            }
        }
        setTimeout(function() {
            $('#msg-alert1').hide();
        }, 5000);

        function form_validate() {

            var email = $('#email').val();
            var password = $('#password').val();

            if ($.trim(email) == '') {
                $('#email').focus();
                return false;
            }
            if ($.trim(password) == '') {
                $('#password').focus();
                return false;
            }

            $('#frm1').submit();
        }

        function show_forget_pass() {
            $('#frm1').hide();
            $('#email').val('');
            $('#password').val('');
            $('#frm2').show();
        }

        function show_login() {
            $('#frm1').show();
            $('#email1').val('');
            $('#frm2').hide();
        }

        function form_validate1() {
            $('#fp_er_sec').hide();
            var email = $('#email1').val();
            if ($.trim(email) == '') {
                $('#email1').focus();
                return false;
            }

            var frm = $('#frm2').serialize();

            $('#form_submit1').attr('disabled', true);

            $.ajax({
                url: '{{route("forget_pass")}}',
                type: 'post',
                data: frm,
                dataType: "json",
                success: function(r) {
                    if (r.status == 'SUCCESS') {
                        show_msg();
                    } else {
                        $('#form_submit1').attr('disabled', false);
                        $('#fp_er_sec').show();
                        if (r.msg == 'Not found') {
                            $('#fp_er_p').html('{{$lang_kwords["email-not-found"]["english"]}}');
                        } else {
                            $('#fp_er_p').html('{{$lang_kwords["incorrect_email"]["english"]}}');
                        }
                    }

                },
                error: function() {
                    $('#form_submit1').attr('disabled', false);
                }
            })
        }

        function show_msg() {
            swal(
                    "{{$lang_kwords['password-reset-link-send']['english']}}", {
                        buttons: {
                            catch: {
                                text: "{{$lang_kwords['alert_ok']['english']}}",
                            },
                            defeat: false,
                        },
                    }
                )
                .then((value) => {
                    switch (value) {

                        case "defeat":
                            swal("Got away safely!");
                            break;

                        case "catch":
                            location.reload();
                            break;

                        default:
                            // swal("Got away safely!");
                            return false;
                    }
                });
        }
    </script>
</body>