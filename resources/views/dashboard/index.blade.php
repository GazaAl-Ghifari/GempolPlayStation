@extends('layouts.app')

@section('title', 'Dashboard - Gempol PlayStation')

@section('page-title', 'Dashboard')

@section('content')

<style>

    /* =====================================================
       WELCOME DASHBOARD - UI ONLY
    ===================================================== */

    .welcome-page {
        width: 100%;
        animation: pageIn .7s ease forwards;
    }


    @keyframes pageIn {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }


    /* =====================================================
       HERO
    ===================================================== */

    .welcome-hero {
        position: relative;
        overflow: hidden;

        min-height: 360px;

        border-radius: 24px;

        padding: 45px;

        display: flex;
        align-items: center;

        background:
            linear-gradient(
                135deg,
                #0f172a 0%,
                #172554 42%,
                #1d4ed8 100%
            );

        box-shadow:
            0 20px 45px
            rgba(15, 23, 42, .14);
    }


    /* =====================================================
       GLOW
    ===================================================== */

    .glow {
        position: absolute;

        border-radius: 50%;

        pointer-events: none;

        filter: blur(5px);
    }


    .glow-1 {
        width: 310px;
        height: 310px;

        right: -100px;
        top: -130px;

        background:
            rgba(96, 165, 250, .17);

        animation:
            glowMove 7s ease-in-out infinite;
    }


    .glow-2 {
        width: 230px;
        height: 230px;

        left: 42%;
        bottom: -150px;

        background:
            rgba(59, 130, 246, .18);

        animation:
            glowMove 9s ease-in-out infinite reverse;
    }


    @keyframes glowMove {

        0%,
        100% {
            transform:
                translate(0, 0)
                scale(1);
        }

        50% {
            transform:
                translate(20px, -15px)
                scale(1.08);
        }
    }


    /* =====================================================
       CIRCLES
    ===================================================== */

    .circle {
        position: absolute;

        border-radius: 50%;

        border:
            1px solid
            rgba(255,255,255,.08);

        pointer-events: none;
    }


    .circle-1 {
        width: 430px;
        height: 430px;

        right: -215px;
        top: -215px;

        animation:
            rotateCircle 25s linear infinite;
    }


    .circle-2 {
        width: 600px;
        height: 600px;

        right: -300px;
        top: -300px;

        animation:
            rotateCircleReverse 35s linear infinite;
    }


    @keyframes rotateCircle {

        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    @keyframes rotateCircleReverse {

        from {
            transform: rotate(360deg);
        }

        to {
            transform: rotate(0deg);
        }
    }


    /* =====================================================
       HERO CONTENT
    ===================================================== */

    .hero-content {
        position: relative;

        z-index: 5;

        max-width: 650px;
    }


    .hero-badge {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            7px 13px;

        margin-bottom: 18px;

        border-radius: 30px;

        border:
            1px solid
            rgba(255,255,255,.14);

        background:
            rgba(255,255,255,.08);

        backdrop-filter:
            blur(10px);

        color:
            #bfdbfe;

        font-size: 11px;

        font-weight: 600;

        animation:
            fadeUp .7s ease both;
    }


    .hero-badge i {
        color:
            #60a5fa;

        animation:
            iconPulse 2s ease-in-out infinite;
    }


    @keyframes iconPulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }
    }


    .hero-title {
        margin: 0 0 14px;

        color: white;

        font-size: 38px;

        line-height: 1.15;

        font-weight: 750;

        letter-spacing: -1px;

        animation:
            fadeUp .7s .1s ease both;
    }


    .hero-title span {
        color:
            #93c5fd;
    }


    .hero-description {
        max-width: 560px;

        margin: 0;

        color:
            rgba(255,255,255,.68);

        font-size: 14px;

        line-height: 1.8;

        animation:
            fadeUp .7s .2s ease both;
    }


    @keyframes fadeUp {

        from {
            opacity: 0;

            transform:
                translateY(15px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }
    }


    /* =====================================================
       USER INFO
    ===================================================== */

    .user-info {
        display: inline-flex;

        align-items: center;

        gap: 12px;

        margin-top: 25px;

        padding:
            9px 15px 9px 9px;

        border-radius: 15px;

        background:
            rgba(255,255,255,.08);

        border:
            1px solid
            rgba(255,255,255,.10);

        backdrop-filter:
            blur(10px);

        animation:
            fadeUp .7s .3s ease both;
    }


    .user-avatar {
        width: 42px;
        height: 42px;

        border-radius: 12px;

        display: flex;

        align-items: center;

        justify-content: center;

        background:
            rgba(255,255,255,.13);

        color:
            #bfdbfe;

        font-size: 18px;
    }


    .user-text strong {
        display: block;

        color: white;

        font-size: 13px;
    }


    .user-text span {
        display: block;

        margin-top: 2px;

        color:
            rgba(255,255,255,.55);

        font-size: 11px;
    }


    /* =====================================================
       CONTROLLER
    ===================================================== */

    .controller-area {
        position: absolute;

        right: 8%;

        bottom: 35px;

        width: 270px;

        height: 190px;

        z-index: 4;

        animation:
            controllerFloat 5s ease-in-out infinite;
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
                translateY(-13px)
                rotate(-2deg);
        }
    }


    .controller {
        position: absolute;

        width: 245px;
        height: 145px;

        left: 12px;
        top: 20px;

        border-radius:
            70px 70px 55px 55px;

        background:
            linear-gradient(
                145deg,
                #ffffff,
                #dbeafe
            );

        transform:
            rotate(-6deg);

        box-shadow:
            0 30px 55px
            rgba(0,0,0,.25);
    }


    .controller::before,
    .controller::after {
        content: "";

        position: absolute;

        width: 88px;
        height: 88px;

        bottom: -17px;

        border-radius: 50%;

        background:
            linear-gradient(
                145deg,
                #ffffff,
                #dbeafe
            );
    }


    .controller::before {
        left: -18px;
    }


    .controller::after {
        right: -18px;
    }


    /* =====================================================
       CONTROLLER CENTER
    ===================================================== */

    .controller-center {
        position: absolute;

        left: 50%;
        top: 50%;

        transform:
            translate(-50%, -50%);

        width: 78px;
        height: 40px;

        border-radius: 25px;

        background:
            #bfdbfe;
    }


    /* =====================================================
       D-PAD
    ===================================================== */

    .dpad {
        position: absolute;

        left: 43px;
        top: 47px;

        width: 43px;
        height: 43px;
    }


    .dpad::before,
    .dpad::after {
        content: "";

        position: absolute;

        background:
            #172554;

        border-radius: 4px;
    }


    .dpad::before {
        width: 14px;
        height: 43px;

        left: 14px;
    }


    .dpad::after {
        width: 43px;
        height: 14px;

        top: 14px;
    }


    /* =====================================================
       BUTTONS
    ===================================================== */

    .controller-buttons {
        position: absolute;

        right: 38px;
        top: 40px;

        width: 55px;
        height: 55px;
    }


    .game-button {
        position: absolute;

        width: 16px;
        height: 16px;

        border-radius: 50%;

        background:
            #2563eb;

        box-shadow:
            0 3px 7px
            rgba(37,99,235,.3);
    }


    .button-a {
        top: 0;
        left: 19px;
    }


    .button-b {
        top: 19px;
        right: 0;
    }


    .button-c {
        bottom: 0;
        left: 19px;
    }


    .button-d {
        top: 19px;
        left: 0;
    }


    /* =====================================================
       DECORATIVE DOTS
    ===================================================== */

    .dots {
        position: absolute;

        z-index: 2;

        width: 80px;
        height: 80px;

        right: 36%;
        top: 16%;

        opacity: .25;

        background-image:
            radial-gradient(
                rgba(255,255,255,.6) 1px,
                transparent 1px
            );

        background-size:
            12px 12px;

        animation:
            dotsFloat 5s ease-in-out infinite;
    }


    @keyframes dotsFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }


    /* =====================================================
       BOTTOM INFORMATION CARDS
    ===================================================== */

    .info-card {
        height: 100%;

        padding: 25px;

        border:
            1px solid #e8edf4;

        border-radius: 18px;

        background: white;

        box-shadow:
            0 8px 25px
            rgba(15,23,42,.05);

        transition:
            transform .3s ease,
            box-shadow .3s ease;
    }


    .info-card:hover {
        transform:
            translateY(-5px);

        box-shadow:
            0 15px 35px
            rgba(15,23,42,.09);
    }


    .info-icon {
        width: 45px;
        height: 45px;

        display: flex;

        align-items: center;

        justify-content: center;

        margin-bottom: 15px;

        border-radius: 13px;

        background:
            #eff6ff;

        color:
            #2563eb;

        font-size: 19px;
    }


    .info-card h3 {
        margin: 0 0 7px;

        color:
            #172554;

        font-size: 16px;

        font-weight: 700;
    }


    .info-card p {
        margin: 0;

        color:
            #64748b;

        font-size: 12px;

        line-height: 1.7;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 1100px) {

        .welcome-hero {
            padding: 38px;
        }


        .hero-title {
            font-size: 32px;
        }


        .controller-area {
            right: 3%;
            transform: scale(.85);
        }

    }


    @media (max-width: 850px) {

        .welcome-hero {
            min-height: 390px;

            padding:
                35px 30px;
        }


        .controller-area {
            right: -5%;
            bottom: 10px;

            transform:
                scale(.72);
        }


        .hero-content {
            max-width: 65%;
        }

    }


    @media (max-width: 767px) {

        .welcome-hero {
            min-height: 460px;

            padding:
                30px 25px;

            align-items:
                flex-start;
        }


        .hero-content {
            max-width: 100%;

            position: relative;

            z-index: 10;
        }


        .hero-title {
            font-size: 29px;
        }


        .hero-description {
            font-size: 13px;
        }


        .controller-area {
            left: 50%;

            right: auto;

            bottom: -10px;

            transform:
                translateX(-50%)
                scale(.65);
        }


        .circle-1,
        .circle-2 {
            opacity: .6;
        }

    }


    @media (max-width: 480px) {

        .welcome-hero {
            min-height: 480px;

            padding:
                27px 20px;

            border-radius: 19px;
        }


        .hero-title {
            font-size: 25px;

            letter-spacing:
                -.5px;
        }


        .hero-description {
            font-size: 12px;

            line-height: 1.7;
        }


        .hero-badge {
            font-size: 10px;
        }


        .user-info {
            margin-top: 20px;
        }


        .controller-area {
            transform:
                translateX(-50%)
                scale(.57);
        }


        .info-card {
            padding: 20px;
        }

    }


    @media (max-width: 350px) {

        .welcome-hero {
            min-height: 470px;
        }


        .hero-title {
            font-size: 22px;
        }


        .controller-area {
            transform:
                translateX(-50%)
                scale(.50);
        }

    }

</style>

<div class="welcome-page">
<!-- =================================================
     HERO
================================================== -->

<div class="welcome-hero">


    <!-- BACKGROUND -->

    <div class="glow glow-1"></div>

    <div class="glow glow-2"></div>

    <div class="circle circle-1"></div>

    <div class="circle circle-2"></div>

    <div class="dots"></div>


    <!-- CONTENT -->

    <div class="hero-content">


        <div class="hero-badge">

            <i class="bi bi-stars"></i>

            GEMPOL PLAYSTATION

        </div>


        <h1 class="hero-title">

            Selamat Datang di
            <br>

            <span>
                Gempol PlayStation
            </span>

        </h1>


        <p class="hero-description">

            Halo, {{ auth()->user()->name }}.
            Kamu berhasil masuk ke sistem rental
            PlayStation. Kelola aktivitas rental,
            pelanggan, PlayStation, dan pembayaran
            dengan lebih mudah melalui satu sistem.

        </p>


        <!-- USER -->

        <div class="user-info">

            <div class="user-avatar">

                <i class="bi bi-person-fill"></i>

            </div>


            <div class="user-text">

                <strong>
                    {{ auth()->user()->name }}
                </strong>

                <span>

                    Role:
                    {{ ucfirst(auth()->user()->role) }}

                </span>

            </div>

        </div>


    </div>


    <!-- =================================================
         CONTROLLER DECORATION
    ================================================== -->

    <div class="controller-area">

        <div class="controller">

            <div class="controller-center"></div>


            <div class="dpad"></div>


            <div class="controller-buttons">

                <div class="game-button button-a"></div>

                <div class="game-button button-b"></div>

                <div class="game-button button-c"></div>

                <div class="game-button button-d"></div>

            </div>

        </div>

    </div>


</div>


<!-- =================================================
     INFORMATION CARDS
================================================== -->

<div class="row g-3 mt-3">


    <div class="col-12 col-md-4">

        <div class="info-card">

            <div class="info-icon">

                <i class="bi bi-controller"></i>

            </div>


            <h3>
                Kelola PlayStation
            </h3>


            <p>
                Kelola data PlayStation,
                jenis konsol, harga rental,
                dan status ketersediaannya.
            </p>

        </div>

    </div>


    <div class="col-12 col-md-4">

        <div class="info-card">

            <div class="info-icon">

                <i class="bi bi-people-fill"></i>

            </div>


            <h3>
                Kelola Pelanggan
            </h3>


            <p>
                Data pelanggan dapat dikelola
                dengan lebih terstruktur dan
                mudah ditemukan.
            </p>

        </div>

    </div>


    <div class="col-12 col-md-4">

        <div class="info-card">

            <div class="info-icon">

                <i class="bi bi-receipt"></i>

            </div>


            <h3>
                Rental & Pembayaran
            </h3>


            <p>
                Pantau transaksi rental dan
                pembayaran dalam satu sistem
                yang terorganisir.
            </p>

        </div>

    </div>


</div>

</div>

@endsection
