<!DOCTYPE html>

<html lang="id">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Gempol PlayStation</title>

{{-- Bootstrap 5 --}}

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


{{-- Bootstrap Icons --}}

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>


<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        min-height: 100%;
    }

    body {
        margin: 0;
        font-family:
            "Segoe UI",
            Inter,
            Arial,
            sans-serif;
        background: #f8fafc;
        overflow-x: hidden;
    }

    .login-page {
        min-height: 100vh;
        display: flex;
        background: #f8fafc;
    }

    .login-left {
        width: 45%;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px;
        position: relative;
        z-index: 10;
        background:
            radial-gradient(
                circle at 10% 10%,
                rgba(37, 99, 235, 0.07),
                transparent 30%
            ),
            #ffffff;
        animation: leftAppear 0.8s ease forwards;
    }

    @keyframes leftAppear {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .login-content {
        width: 100%;
        max-width: 440px;
    }

    .brand {
        margin-bottom: 38px;
    }

    .brand-logo {
        width: 54px;
        height: 54px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #ffffff;
        font-size: 25px;
        background:
            linear-gradient(
                135deg,
                #172554,
                #2563eb
            );
        box-shadow:
            0 12px 28px
            rgba(37, 99, 235, 0.25);
        animation:
            logoFloat 3s ease-in-out infinite;
    }

    @keyframes logoFloat {
        0%,
        100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }

    }

    .brand h1 {
        margin: 0;
        color: #172554;
        font-size: 30px;
        font-weight: 750;
        letter-spacing: -0.8px;
    }


    .brand p {
        margin: 8px 0 0;
        color: #64748b;
        font-size: 14px;
    }

    .form-title {
        margin-bottom: 25px;
    }

    .form-title h2 {
        margin: 0;
        color: #0f172a;
        font-size: 24px;
        font-weight: 700;
    }

    .form-title p {
        margin: 7px 0 0;
        color: #94a3b8;
        font-size: 13px;
    }

    .form-group {
        margin-bottom: 19px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #334155;
        font-size: 13px;
        font-weight: 650;
    }

    .input-box {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 17px;
        z-index: 2;
        transition: 0.25s ease;
        pointer-events: none;
    }

    .form-control-custom {
        width: 100%;
        height: 53px;
        padding:
            0 48px;
        border:
            1px solid #e2e8f0;
        border-radius: 12px;
        outline: none;
        background: #f8fafc;
        color: #0f172a
        font-size: 14px;
        transition:
            border 0.25s ease,
            box-shadow 0.25s ease,
            background 0.25s ease;
    }

    .form-control-custom::placeholder {
        color: #a0aec0;
    }

    .form-control-custom:hover {
        border-color: #cbd5e1;
        background: #ffffff;
    }

    .form-control-custom:focus {
        border-color: #2563eb;
        background: #ffffff;
        box-shadow:
            0 0 0 4px
            rgba(37, 99, 235, 0.09);
    }

    .form-control-custom:focus ~ .input-icon {
        color: #2563eb;
    }

    .password-toggle {
        position: absolute;
        right: 13px;
        top: 50%;
        transform: translateY(-50%);
        border: 0;
        background: transparent;
        color: #94a3b8;
        font-size: 17px;
        cursor: pointer;
        padding: 5px;
        transition: 0.2s ease;
    }

    .password-toggle:hover {
        color: #2563eb;
    }

    .remember-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 3px 0 22px;
    }

    .remember {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #64748b;
        font-size: 13px;
        cursor: pointer;
    }

    .remember input {
        width: 17px;

        height: 17px;

        accent-color: #2563eb;

        cursor: pointer;
    }


    /* =====================================================
       LOGIN BUTTON
    ===================================================== */

    .login-button {
        width: 100%;

        height: 53px;

        border: none;

        border-radius: 12px;

        color: #ffffff;

        background:
            linear-gradient(
                135deg,
                #172554 0%,
                #1d4ed8 55%,
                #2563eb 100%
            );

        font-size: 14px;

        font-weight: 700;

        letter-spacing: 0.2px;

        cursor: pointer;

        position: relative;

        overflow: hidden;

        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease;
    }


    .login-button::before {
        content: "";

        position: absolute;

        top: 0;

        left: -120%;

        width: 70%;

        height: 100%;

        background:
            linear-gradient(
                90deg,
                transparent,
                rgba(255,255,255,0.20),
                transparent
            );

        transform: skewX(-20deg);

        transition: 0.7s ease;
    }


    .login-button:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 25px
            rgba(37, 99, 235, 0.25);
    }


    .login-button:hover::before {
        left: 140%;
    }


    .login-button:active {
        transform: translateY(0);
    }


    /* =====================================================
       ALERT
    ===================================================== */

    .custom-alert {
        border: none;

        border-radius: 11px;

        padding: 12px 14px;

        display: flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 20px;

        font-size: 13px;

        animation:
            alertIn 0.4s ease;
    }


    @keyframes alertIn {

        from {
            opacity: 0;

            transform:
                translateY(-8px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    .success-alert {
        background: #ecfdf5;

        color: #047857;
    }


    .error-alert {
        background: #fef2f2;

        color: #b91c1c;
    }


    .alert-icon {
        font-size: 17px;
    }


    /* =====================================================
       FOOTER
    ===================================================== */

    .login-footer {
        margin-top: 28px;

        color: #94a3b8;

        font-size: 11px;

        text-align: center;
    }


    /* =====================================================
       RIGHT - VISUAL
    ===================================================== */

    .visual-right {
        width: 55%;

        min-height: 100vh;

        position: relative;

        overflow: hidden;

        display: flex;

        align-items: center;

        justify-content: center;

        background:
            linear-gradient(
                135deg,
                #0f172a 0%,
                #172554 38%,
                #1d4ed8 100%
            );

        animation:
            rightAppear 0.9s ease forwards;
    }


    @keyframes rightAppear {

        from {
            opacity: 0;

            transform: translateX(30px);
        }

        to {
            opacity: 1;

            transform: translateX(0);
        }

    }


    /* =====================================================
       VISUAL BACKGROUND
    ===================================================== */

    .visual-right::before {
        content: "";

        position: absolute;

        width: 600px;

        height: 600px;

        border-radius: 50%;

        border:
            1px solid
            rgba(255,255,255,0.08);

        animation:
            rotateCircle 25s linear infinite;
    }


    .visual-right::after {
        content: "";

        position: absolute;

        width: 800px;

        height: 800px;

        border-radius: 50%;

        border:
            1px solid
            rgba(255,255,255,0.05);

        animation:
            rotateCircleReverse 35s linear infinite;
    }


    @keyframes rotateCircle {

        from {
            transform:
                rotate(0deg)
                scale(1);
        }

        to {
            transform:
                rotate(360deg)
                scale(1.05);
        }

    }


    @keyframes rotateCircleReverse {

        from {
            transform:
                rotate(360deg);
        }

        to {
            transform:
                rotate(0deg);
        }

    }


    /* =====================================================
       GLOW
    ===================================================== */

    .glow {
        position: absolute;

        border-radius: 50%;

        filter: blur(70px);

        pointer-events: none;
    }


    .glow-one {
        width: 280px;

        height: 280px;

        background:
            rgba(59,130,246,0.35);

        top: -80px;

        right: -50px;

        animation:
            glowMove 6s ease-in-out infinite;
    }


    .glow-two {
        width: 220px;

        height: 220px;

        background:
            rgba(96,165,250,0.20);

        bottom: -50px;

        left: -50px;

        animation:
            glowMove 8s ease-in-out infinite reverse;
    }


    @keyframes glowMove {

        0%,
        100% {
            transform:
                translate(0,0);
        }

        50% {
            transform:
                translate(25px,-20px);
        }

    }


    /* =====================================================
       VISUAL CONTENT
    ===================================================== */

    .visual-content {
        position: relative;

        z-index: 5;

        width: 80%;

        max-width: 650px;

        color: #ffffff;

        text-align: center;

        animation:
            visualContentIn 1s
            cubic-bezier(.2,.8,.2,1)
            forwards;
    }


    @keyframes visualContentIn {

        from {
            opacity: 0;

            transform:
                scale(0.9)
                translateY(25px);
        }

        to {
            opacity: 1;

            transform:
                scale(1)
                translateY(0);
        }

    }


    /* =====================================================
       CONTROLLER
    ===================================================== */

    .controller-wrapper {
        position: relative;

        width: 350px;

        height: 240px;

        margin:
            0 auto 35px;

        display: flex;

        align-items: center;

        justify-content: center;

        animation:
            controllerFloat
            5s
            ease-in-out
            infinite;
    }


    @keyframes controllerFloat {

        0%,
        100% {
            transform:
                translateY(0)
                rotate(0deg);
        }

        50% {
            transform:
                translateY(-12px)
                rotate(-1deg);
        }

    }


    .controller {
        width: 280px;

        height: 165px;

        position: relative;

        background:
            linear-gradient(
                145deg,
                #ffffff,
                #dbeafe
            );

        border-radius:
            85px 85px 65px 65px;

        transform:
            rotate(-4deg);

        box-shadow:
            0 30px 60px
            rgba(0,0,0,0.25);

        filter:
            drop-shadow(
                0 15px 15px
                rgba(0,0,0,0.12)
            );
    }


    .controller::before,
    .controller::after {
        content: "";

        position: absolute;

        width: 105px;

        height: 100px;

        background:
            linear-gradient(
                145deg,
                #ffffff,
                #dbeafe
            );

        bottom: -20px;

        border-radius: 50%;
    }


    .controller::before {
        left: -25px;
    }


    .controller::after {
        right: -25px;
    }


    .controller-center {
        position: absolute;

        left: 50%;

        top: 50%;

        transform:
            translate(-50%,-50%);

        width: 95px;

        height: 48px;

        border-radius: 30px;

        background:
            #bfdbfe;

        opacity: 0.7;
    }


    .dpad {
        position: absolute;

        left: 52px;

        top: 55px;

        width: 48px;

        height: 48px;
    }


    .dpad::before,
    .dpad::after {
        content: "";

        position: absolute;

        background: #172554;

        border-radius: 4px;
    }


    .dpad::before {
        width: 16px;

        height: 48px;

        left: 16px;

        top: 0;
    }


    .dpad::after {
        width: 48px;

        height: 16px;

        left: 0;

        top: 16px;
    }


    .buttons {
        position: absolute;

        right: 45px;

        top: 48px;

        width: 60px;

        height: 60px;
    }


    .game-button {
        position: absolute;

        width: 18px;

        height: 18px;

        border-radius: 50%;

        background: #2563eb;

        box-shadow:
            0 3px 8px
            rgba(37,99,235,0.3);
    }


    .button-one {
        top: 0;

        left: 21px;
    }


    .button-two {
        top: 21px;

        left: 0;
    }


    .button-three {
        top: 21px;

        right: 0;
    }


    .button-four {
        bottom: 0;

        left: 21px;
    }


    /* =====================================================
       VISUAL TEXT
    ===================================================== */

    .visual-title {
        font-size: 39px;

        line-height: 1.15;

        font-weight: 750;

        letter-spacing: -1px;

        margin-bottom: 15px;
    }


    .visual-title span {
        color: #93c5fd;
    }


    .visual-description {
        max-width: 500px;

        margin:
            0 auto;

        color:
            rgba(255,255,255,0.72);

        font-size: 14px;

        line-height: 1.8;
    }


    /* =====================================================
       FLOATING INFO CARDS
    ===================================================== */

    .floating-card {
        position: absolute;

        z-index: 8;

        display: flex;

        align-items: center;

        gap: 10px;

        padding:
            11px 15px;

        border:
            1px solid
            rgba(255,255,255,0.14);

        border-radius: 13px;

        background:
            rgba(255,255,255,0.09);

        backdrop-filter:
            blur(12px);

        color: #ffffff;

        font-size: 11px;

        box-shadow:
            0 15px 35px
            rgba(0,0,0,0.12);
    }


    .floating-card i {
        width: 31px;

        height: 31px;

        border-radius: 9px;

        display: flex;

        align-items: center;

        justify-content: center;

        background:
            rgba(255,255,255,0.12);

        color: #93c5fd;

        font-size: 15px;
    }


    .floating-card strong {
        display: block;

        font-size: 11px;
    }


    .floating-card small {
        color:
            rgba(255,255,255,0.55);

        font-size: 9px;
    }


    .card-one {
        top: 19%;

        left: 8%;

        animation:
            floatCard 4s ease-in-out infinite;
    }


    .card-two {
        bottom: 19%;

        right: 8%;

        animation:
            floatCard 5s ease-in-out infinite reverse;
    }


    @keyframes floatCard {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-10px);
        }

    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 1100px) {

        .login-left {
            width: 48%;

            padding: 35px;
        }


        .visual-right {
            width: 52%;
        }


        .visual-title {
            font-size: 32px;
        }


        .controller-wrapper {
            transform:
                scale(0.85);
        }

    }


    @media (max-width: 850px) {

        .login-page {
            display: block;
        }


        .login-left {
            width: 100%;

            min-height: 100vh;

            padding:
                45px 25px;
        }


        .visual-right {
            width: 100%;

            min-height: 480px;

            padding:
                60px 20px;
        }


        .login-content {
            max-width: 470px;
        }

    }


    @media (max-width: 575px) {

        .login-left {
            min-height: 100vh;

            padding:
                35px 20px;
        }


        .brand {
            margin-bottom: 30px;
        }


        .brand h1 {
            font-size: 25px;
        }


        .form-title h2 {
            font-size: 21px;
        }


        .visual-right {
            min-height: 420px;
        }


        .visual-content {
            width: 92%;
        }


        .controller-wrapper {
            transform:
                scale(0.68);

            margin-bottom: 5px;
        }


        .visual-title {
            font-size: 27px;
        }


        .visual-description {
            font-size: 12px;

            line-height: 1.7;
        }


        .floating-card {
            transform:
                scale(0.8);
        }


        .card-one {
            top: 10%;

            left: -5%;
        }


        .card-two {
            bottom: 9%;

            right: -5%;
        }

    }


    @media (max-width: 380px) {

        .login-left {
            padding:
                28px 17px;
        }


        .brand-logo {
            width: 48px;

            height: 48px;

            font-size: 21px;
        }


        .brand h1 {
            font-size: 22px;
        }


        .form-title h2 {
            font-size: 19px;
        }


        .form-control-custom,
        .login-button {
            height: 49px;
        }

    }

</style>


</head>

<body>

<div class="login-page">


<!-- =================================================
     LEFT SIDE
================================================== -->

<section class="login-left">

    <div class="login-content">


        <!-- BRAND -->

        <div class="brand">

            <div class="brand-logo">

                <i class="bi bi-controller"></i>

            </div>


            <h1>
                Gempol PlayStation
            </h1>


            <p>
                Sistem Informasi Rental PlayStation
            </p>

        </div>


        <!-- TITLE -->

        <div class="form-title">

            <h2>
                Selamat Datang 👋
            </h2>

            <p>
                Silakan masuk untuk mengakses sistem.
            </p>

        </div>


        <!-- SUCCESS -->

        @if(session('success'))

            <div class="custom-alert success-alert">

                <i class="bi bi-check-circle-fill alert-icon"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        <!-- ERROR -->

        @if($errors->any())

            <div class="custom-alert error-alert">

                <i class="bi bi-exclamation-circle-fill alert-icon"></i>

                <span>
                    {{ $errors->first() }}
                </span>

            </div>

        @endif


        <!-- LOGIN FORM -->

        <form
            method="POST"
            action="{{ route('login.process') }}"
        >

            @csrf


            <!-- USERNAME -->

            <div class="form-group">

                <label
                    for="username"
                    class="form-label"
                >
                    Username
                </label>


                <div class="input-box">

                    <i
                        class="bi bi-person input-icon">
                    </i>


                    <input
                        type="text"
                        id="username"
                        name="username"
                        value="{{ old('username') }}"
                        placeholder="Masukkan username"
                        class="form-control-custom"
                        required
                        autofocus
                        autocomplete="username"
                    >

                </div>

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label
                    for="password"
                    class="form-label"
                >
                    Password
                </label>


                <div class="input-box">

                    <i
                        class="bi bi-lock input-icon">
                    </i>


                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="form-control-custom"
                        required
                        autocomplete="current-password"
                    >


                    <button
                        type="button"
                        class="password-toggle"
                        id="togglePassword"
                    >

                        <i
                            class="bi bi-eye"
                            id="passwordIcon"
                        ></i>

                    </button>

                </div>

            </div>


            <!-- REMEMBER -->

            <div class="remember-row">

                <label class="remember">

                    <input
                        type="checkbox"
                        name="remember"
                        value="1"
                    >

                    <span>
                        Ingat saya
                    </span>

                </label>

            </div>


            <!-- BUTTON -->

            <button
                type="submit"
                class="login-button"
            >

                <i class="bi bi-box-arrow-in-right"></i>

                Masuk ke Sistem

            </button>


        </form>


        <!-- FOOTER -->

        <div class="login-footer">

            Gempol PlayStation
            &nbsp;•&nbsp;
            Sistem Rental PlayStation

        </div>


    </div>

</section>


<!-- =================================================
     RIGHT SIDE
================================================== -->

<section class="visual-right">


    <!-- GLOW -->

    <div class="glow glow-one"></div>

    <div class="glow glow-two"></div>


    <!-- FLOATING CARD -->

    <div class="floating-card card-one">

        <i class="bi bi-controller"></i>

        <div>

            <strong>
                Rental PlayStation
            </strong>

            <small>
                Kelola rental dengan mudah
            </small>

        </div>

    </div>


    <!-- FLOATING CARD -->

    <div class="floating-card card-two">

        <i class="bi bi-bar-chart-line-fill"></i>

        <div>

            <strong>
                Sistem Terintegrasi
            </strong>

            <small>
                Data rental lebih terorganisir
            </small>

        </div>

    </div>


    <!-- VISUAL -->

    <div class="visual-content">


        <!-- CONTROLLER -->

        <div class="controller-wrapper">

            <div class="controller">

                <div class="controller-center"></div>


                <div class="dpad"></div>


                <div class="buttons">

                    <div
                        class="game-button button-one">
                    </div>

                    <div
                        class="game-button button-two">
                    </div>

                    <div
                        class="game-button button-three">
                    </div>

                    <div
                        class="game-button button-four">
                    </div>

                </div>

            </div>

        </div>


        <!-- TEXT -->

        <h2 class="visual-title">

            Kelola Rental PS
            <br>

            <span>
                Lebih Mudah & Teratur.
            </span>

        </h2>


        <p class="visual-description">

            Kelola pelanggan, PlayStation, rental,
            pembayaran, dan berbagai aktivitas
            operasional Gempol PlayStation
            dalam satu sistem.

        </p>


    </div>


</section>


</div>

<!-- =================================================
     BOOTSTRAP
================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<!-- =================================================
     PASSWORD TOGGLE
================================================== -->

<script>

    const passwordInput =
        document.getElementById('password');

    const togglePassword =
        document.getElementById('togglePassword');

    const passwordIcon =
        document.getElementById('passwordIcon');


    togglePassword.addEventListener(
        'click',
        function () {

            const isPassword =
                passwordInput.type === 'password';


            passwordInput.type =
                isPassword
                    ? 'text'
                    : 'password';


            passwordIcon.classList.toggle(
                'bi-eye',
                !isPassword
            );


            passwordIcon.classList.toggle(
                'bi-eye-slash',
                isPassword
            );

        }
    );

</script>

</body>

</html>
