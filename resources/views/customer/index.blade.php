<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Gempol PlayStation - Rental PlayStation nyaman, seru dan terpercaya."
    >

    <title>Gempol PlayStation - Rental PlayStation</title>

    <style>

        /* =========================
   GALERI
========================= */

/* ================================
   GALLERY
================================ */

.gallery-section {
    width: 100%;
    padding: 90px 0;
    background: #ffffff;
}

.gallery-container {
    width: min(1200px, calc(100% - 40px));
    margin: 0 auto;
}


/* HEADER */

.gallery-heading {
    margin-bottom: 35px;
}

.section-badge {
    display: inline-block;
    padding: 7px 12px;
    border-radius: 999px;

    background: #e7f0ff;
    color: #1455d9;

    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
}

.gallery-heading h2 {
    margin: 14px 0 8px;

    color: #0b2558;

    font-size: clamp(30px, 4vw, 48px);
    line-height: 1.1;
    font-weight: 800;
}

.gallery-heading p {
    margin: 0;

    color: #64748b;

    font-size: 15px;
}


/* ================================
   GRID
================================ */

.gallery-grid {
    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    grid-template-rows:
        repeat(2, 260px);

    gap: 14px;

    width: 100%;
}


/* ================================
   CARD
================================ */

.gallery-card {
    position: relative;

    min-width: 0;
    min-height: 0;

    overflow: hidden;

    border-radius: 18px;

    background: #dbeafe;

    box-shadow:
        0 10px 30px rgba(15, 23, 42, 0.08);
}


/* FOTO */

.gallery-card img {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition:
        transform 0.5s ease;
}


/* EFEK HOVER */

.gallery-card:hover img {
    transform: scale(1.05);
}


/* ================================
   FOTO UTAMA
================================ */

.gallery-main {
    grid-column: span 2;
    grid-row: span 2;
}


/* ================================
   FOTO KECIL
================================ */

.gallery-small {
    grid-column: span 1;
    grid-row: span 1;
}


/* ================================
   OVERLAY
================================ */

.gallery-overlay {
    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;

    padding: 28px 22px 20px;

    color: #ffffff;

    background: linear-gradient(
        to top,
        rgba(5, 20, 55, 0.90),
        rgba(5, 20, 55, 0.45),
        transparent
    );

    transform: translateY(2px);
}

.gallery-overlay h3 {
    margin: 0 0 5px;

    font-size: 18px;
    line-height: 1.2;

    color: #ffffff;
}

.gallery-overlay p {
    margin: 0;

    font-size: 13px;
    line-height: 1.5;

    color: rgba(255, 255, 255, 0.88);
}


/* ================================
   RESPONSIVE TABLET
================================ */

@media (max-width: 900px) {

    .gallery-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        grid-template-rows:
            repeat(3, 250px);
    }

    .gallery-main {
        grid-column: span 2;
        grid-row: span 1;
    }

    .gallery-small {
        grid-column: span 1;
        grid-row: span 1;
    }
}


/* ================================
   RESPONSIVE HP
================================ */

@media (max-width: 600px) {

    .gallery-section {
        padding: 65px 0;
    }

    .gallery-container {
        width: min(
            100% - 30px,
            500px
        );
    }

    .gallery-heading {
        margin-bottom: 25px;
    }

    .gallery-heading h2 {
        font-size: 30px;
    }

    .gallery-heading p {
        font-size: 14px;
    }


    .gallery-grid {
        display: grid;

        grid-template-columns: 1fr;

        grid-template-rows: none;

        gap: 12px;
    }


    .gallery-main,
    .gallery-small {
        grid-column: span 1;
        grid-row: auto;

        height: 250px;
    }


    .gallery-main {
        height: 320px;
    }


    .gallery-overlay {
        padding: 24px 18px 18px;
    }


    .gallery-overlay h3 {
        font-size: 17px;
    }


    .gallery-overlay p {
        font-size: 12px;
    }
}

.gallery-section {
    padding: 100px 8%;
    background: #f8fafc;
}

.section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
}

.section-label {
    display: inline-block;
    padding: 7px 14px;
    border-radius: 50px;
    background: #dbeafe;
    color: #2563eb;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    margin-bottom: 15px;
}

.section-header h2 {
    margin: 0 0 15px;
    font-size: 38px;
    color: #0f172a;
}

.section-header h2 span {
    color: #2563eb;
}

.section-header p {
    margin: 0;
    color: #64748b;
    font-size: 16px;
    line-height: 1.7;
}


/* GRID FOTO */

.gallery-grid {
    max-width: 1200px;
    margin: auto;

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    grid-auto-rows: 240px;

    gap: 18px;
}


/* ITEM FOTO */

.gallery-item {
    position: relative;

    overflow: hidden;

    border-radius: 20px;

    background: #e2e8f0;

    box-shadow:
        0 10px 30px rgba(15, 23, 42, 0.08);
}


/* FOTO BESAR */

.gallery-large {
    grid-row: span 2;
}


/* IMAGE */

.gallery-item img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    display: block;

    transition: transform 0.5s ease;
}


/* HOVER */

.gallery-item::after {
    content: "";

    position: absolute;

    inset: 0;

    background: linear-gradient(
        to top,
        rgba(15, 23, 42, 0.35),
        transparent 60%
    );

    opacity: 0;

    transition: 0.3s;
}

.gallery-item:hover::after {
    opacity: 1;
}

.gallery-item:hover img {
    transform: scale(1.06);
}


/* =========================
   RESPONSIVE TABLET
========================= */

@media (max-width: 900px) {

    .gallery-section {
        padding: 80px 5%;
    }

    .section-header h2 {
        font-size: 32px;
    }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);

        grid-auto-rows: 220px;
    }

    .gallery-large {
        grid-row: span 2;
    }
}


/* =========================
   RESPONSIVE HP
========================= */

@media (max-width: 600px) {

    .gallery-section {
        padding: 65px 20px;
    }

    .section-header {
        margin-bottom: 30px;
    }

    .section-header h2 {
        font-size: 27px;
    }

    .section-header p {
        font-size: 14px;
    }

    .gallery-grid {
        grid-template-columns: 1fr;

        grid-auto-rows: 230px;

        gap: 14px;
    }

    .gallery-large {
        grid-row: span 1;
    }

    .gallery-item {
        border-radius: 16px;
    }
}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

            background: #f8fafc;
            color: #172554;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* =========================
           VARIABLES
        ========================= */

        :root {
            --navy: #0f1f4b;
            --navy-dark: #081535;
            --blue: #2563eb;
            --blue-light: #eff6ff;
            --blue-soft: #dbeafe;
            --white: #ffffff;
            --text: #172554;
            --muted: #64748b;
            --border: #e2e8f0;
            --success: #16a34a;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;

            z-index: 999;

            background: rgba(255, 255, 255, 0.94);

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .nav-container {
            width: min(1180px, 92%);
            margin: auto;

            min-height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        /* LOGO */

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;

            font-weight: 800;
            color: var(--navy);
        }

        .logo-icon {
            width: 44px;
            height: 44px;

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #0f1f4b
                );

            box-shadow:
                0 8px 20px rgba(37, 99, 235, 0.25);
        }

        .logo-text {
            line-height: 1.1;
        }

        .logo-title {
            font-size: 17px;
            font-weight: 800;
        }

        .logo-subtitle {
            margin-top: 3px;

            font-size: 10px;
            font-weight: 500;

            color: var(--muted);
        }


        /* NAV MENU */

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;

            list-style: none;
        }

        .nav-menu a {
            position: relative;

            font-size: 14px;
            font-weight: 600;

            color: #334155;

            transition: 0.25s;
        }

        .nav-menu a:hover {
            color: var(--blue);
        }

        .nav-menu a::after {
            content: "";

            position: absolute;

            width: 0;
            height: 2px;

            left: 0;
            bottom: -7px;

            background: var(--blue);

            transition: 0.25s;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }


        /* NAV BUTTON */

        .nav-button {
            padding: 11px 18px;

            border-radius: 10px;

            color: white !important;

            background: var(--blue);

            box-shadow:
                0 8px 18px rgba(37, 99, 235, 0.22);

            transition: 0.25s;
        }

        .nav-button:hover {
            background: #1d4ed8;

            transform: translateY(-2px);
        }

        .nav-button::after {
            display: none;
        }


        /* MOBILE MENU */

        .menu-toggle {
            display: none;

            width: 42px;
            height: 42px;

            border: none;
            border-radius: 10px;

            background: var(--blue-light);

            color: var(--navy);

            font-size: 21px;

            cursor: pointer;
        }


        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;

            min-height: 720px;

            padding-top: 76px;

            overflow: hidden;

            background:
                radial-gradient(
                    circle at 80% 20%,
                    rgba(37, 99, 235, 0.20),
                    transparent 30%
                ),

                linear-gradient(
                    135deg,
                    #081535 0%,
                    #10265c 55%,
                    #183b86 100%
                );

            color: white;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            right: -180px;
            bottom: -250px;

            background: rgba(255,255,255,0.04);
        }

        .hero-container {
            position: relative;

            width: min(1180px, 92%);

            min-height: 644px;

            margin: auto;

            display: grid;

            grid-template-columns:
                1.05fr
                0.95fr;

            align-items: center;

            gap: 70px;
        }

        .hero-content {
            animation: fadeUp 0.8s ease;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 13px;

            margin-bottom: 22px;

            border-radius: 30px;

            background: rgba(255,255,255,0.10);

            border: 1px solid rgba(255,255,255,0.12);

            color: #dbeafe;

            font-size: 12px;
            font-weight: 700;

            backdrop-filter: blur(10px);
        }

        .hero-badge span {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: #60a5fa;

            box-shadow:
                0 0 12px #60a5fa;
        }

        .hero h1 {
            max-width: 650px;

            font-size: clamp(42px, 5vw, 68px);

            line-height: 1.04;

            letter-spacing: -2px;

            margin-bottom: 22px;
        }

        .hero h1 span {
            color: #60a5fa;
        }

        .hero-description {
            max-width: 560px;

            color: #cbd5e1;

            font-size: 17px;

            line-height: 1.8;

            margin-bottom: 32px;
        }

        .hero-buttons {
            display: flex;
            gap: 13px;

            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 14px 22px;

            border-radius: 11px;

            background: #2563eb;
            color: white;

            font-size: 14px;
            font-weight: 700;

            box-shadow:
                0 12px 25px rgba(0,0,0,0.20);

            transition: 0.25s;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            background: #3b82f6;
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 14px 22px;

            border-radius: 11px;

            border: 1px solid rgba(255,255,255,0.25);

            color: white;

            font-size: 14px;
            font-weight: 700;

            transition: 0.25s;
        }

        .btn-outline:hover {
            background: rgba(255,255,255,0.08);
        }


        /* HERO VISUAL */

        .hero-visual {
            position: relative;

            min-height: 470px;

            display: flex;

            align-items: center;
            justify-content: center;

            animation: fadeUp 1s ease;
        }

        .visual-glow {
            position: absolute;

            width: 360px;
            height: 360px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(59,130,246,0.30),
                    transparent 65%
                );
        }

        .console-card {
            position: relative;

            width: 390px;
            max-width: 90%;

            padding: 34px;

            border-radius: 25px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,0.13),
                    rgba(255,255,255,0.04)
                );

            border:
                1px solid rgba(255,255,255,0.16);

            box-shadow:
                0 30px 70px rgba(0,0,0,0.30);

            backdrop-filter: blur(20px);

            transform: rotate(2deg);

            transition: 0.4s;
        }

        .console-card:hover {
            transform: rotate(0deg) translateY(-8px);
        }

        .console-top {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 35px;
        }

        .console-title {
            font-size: 14px;
            color: #bfdbfe;
        }

        .console-status {
            padding: 6px 10px;

            border-radius: 20px;

            font-size: 10px;
            font-weight: 700;

            color: #bbf7d0;

            background: rgba(22,163,74,0.15);
        }

        .controller {
            position: relative;

            width: 260px;
            height: 135px;

            margin: 10px auto 30px;

            border-radius: 65px;

            background:
                linear-gradient(
                    145deg,
                    #f8fafc,
                    #cbd5e1
                );

            box-shadow:
                inset 0 -8px 15px rgba(0,0,0,0.10),
                0 20px 30px rgba(0,0,0,0.15);
        }

        .controller::before,
        .controller::after {
            content: "";

            position: absolute;

            width: 55px;
            height: 55px;

            top: 39px;

            border-radius: 50%;

            background: #172554;
        }

        .controller::before {
            left: 45px;
        }

        .controller::after {
            right: 45px;
        }

        .controller-center {
            position: absolute;

            width: 50px;
            height: 24px;

            top: 57px;
            left: 105px;

            border-radius: 10px;

            background: #94a3b8;
        }

        .console-bottom {
            text-align: center;
        }

        .console-bottom strong {
            display: block;

            font-size: 27px;

            margin-bottom: 4px;
        }

        .console-bottom small {
            color: #cbd5e1;
        }


        /* =========================
           GENERAL SECTION
        ========================= */

        section {
            scroll-margin-top: 90px;
        }

        .section {
            padding: 95px 0;
        }

        .section-container {
            width: min(1180px, 92%);
            margin: auto;
        }

        .section-heading {
            max-width: 650px;

            margin-bottom: 48px;
        }

        .section-label {
            display: inline-block;

            margin-bottom: 10px;

            color: var(--blue);

            font-size: 12px;
            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }

        .section-heading h2 {
            margin-bottom: 12px;

            color: var(--navy);

            font-size: clamp(30px, 4vw, 42px);

            line-height: 1.15;
        }

        .section-heading p {
            color: var(--muted);

            font-size: 15px;
        }


        /* =========================
           ABOUT
        ========================= */

        .about {
            background: white;
        }

        .about-grid {
            display: grid;

            grid-template-columns:
                0.9fr
                1.1fr;

            gap: 70px;

            align-items: center;
        }

        .about-visual {
            position: relative;

            min-height: 410px;

            border-radius: 24px;

            overflow: hidden;

            background:
                linear-gradient(
                    135deg,
                    #0f1f4b,
                    #2563eb
                );

            box-shadow:
                0 25px 50px rgba(15,31,75,0.16);
        }

        .about-visual::before {
            content: "";

            position: absolute;

            width: 250px;
            height: 250px;

            border-radius: 50%;

            right: -80px;
            top: -80px;

            background: rgba(255,255,255,0.10);
        }

        .about-content h3 {
            color: var(--navy);

            font-size: 29px;

            margin-bottom: 16px;
        }

        .about-content p {
            color: var(--muted);

            margin-bottom: 16px;

            font-size: 15px;
        }

        .about-list {
            margin-top: 25px;

            display: grid;

            gap: 13px;
        }

        .about-list-item {
            display: flex;
            align-items: center;
            gap: 12px;

            color: #334155;

            font-size: 14px;
            font-weight: 600;
        }

        .check {
            width: 28px;
            height: 28px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 8px;

            background: var(--blue-light);

            color: var(--blue);

            font-weight: 800;
        }


        /* =========================
           INFORMATION
        ========================= */

        .information {
            background: #f8fafc;
        }

        .price-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 24px;
        }

        .price-card {
            position: relative;

            padding: 30px;

            border-radius: 20px;

            background: white;

            border: 1px solid var(--border);

            box-shadow:
                0 10px 30px rgba(15,31,75,0.05);

            transition: 0.3s;
        }

        .price-card:hover {
            transform: translateY(-7px);

            box-shadow:
                0 20px 40px rgba(15,31,75,0.10);
        }

        .price-icon {
            width: 52px;
            height: 52px;

            margin-bottom: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            color: white;

            background:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #0f1f4b
                );

            font-size: 18px;
            font-weight: 800;
        }

        .price-card h3 {
            color: var(--navy);

            font-size: 22px;

            margin-bottom: 7px;
        }

        .price-card p {
            color: var(--muted);

            font-size: 14px;

            margin-bottom: 18px;
        }

        .price {
            color: var(--blue);

            font-size: 27px;
            font-weight: 800;
        }

        .price span {
            color: var(--muted);

            font-size: 13px;
            font-weight: 500;
        }


        /* =========================
           FEATURES
        ========================= */

        .feature-grid {
            margin-top: 25px;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;
        }

        .feature-card {
            padding: 25px;

            border-radius: 16px;

            background: white;

            border: 1px solid var(--border);

            transition: 0.25s;
        }

        .feature-card:hover {
            transform: translateY(-4px);

            border-color: #bfdbfe;
        }

        .feature-number {
            color: var(--blue);

            font-size: 13px;
            font-weight: 800;

            margin-bottom: 13px;
        }

        .feature-card h3 {
            color: var(--navy);

            font-size: 17px;

            margin-bottom: 7px;
        }

        .feature-card p {
            color: var(--muted);

            font-size: 13px;
        }


        /* =========================
           GALLERY
        ========================= */

        .gallery {
            background: white;
        }

        .gallery-grid {
            display: grid;

            grid-template-columns:
                1.3fr
                0.7fr
                0.7fr;

            grid-template-rows:
                210px
                210px;

            gap: 15px;
        }

        .gallery-item {
            position: relative;

            overflow: hidden;

            border-radius: 18px;

            min-height: 160px;

            background:
                linear-gradient(
                    135deg,
                    #0f1f4b,
                    #2563eb
                );

            display: flex;
            align-items: flex-end;

            padding: 22px;

            color: white;
        }

        .gallery-item:first-child {
            grid-row: span 2;
        }

        .gallery-item:nth-child(2) {
            background:
                linear-gradient(
                    135deg,
                    #172554,
                    #3b82f6
                );
        }

        .gallery-item:nth-child(3) {
            background:
                linear-gradient(
                    135deg,
                    #1e3a8a,
                    #60a5fa
                );
        }

        .gallery-item:nth-child(4) {
            background:
                linear-gradient(
                    135deg,
                    #0c4a6e,
                    #2563eb
                );
        }

        .gallery-item::before {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            right: -50px;
            top: -50px;

            background: rgba(255,255,255,0.08);
        }

        .gallery-content {
            position: relative;
            z-index: 2;
        }

        .gallery-content strong {
            display: block;

            font-size: 19px;
        }

        .gallery-content span {
            font-size: 12px;

            color: #dbeafe;
        }


        /* =========================
           LOCATION
        ========================= */

        .location {
            background: #f8fafc;
        }

        .location-grid {
            display: grid;

            grid-template-columns:
                0.9fr
                1.1fr;

            gap: 25px;
        }

        .location-card {
            padding: 32px;

            background: white;

            border-radius: 20px;

            border: 1px solid var(--border);
        }

        .location-card h3 {
            color: var(--navy);

            font-size: 23px;

            margin-bottom: 15px;
        }

        .location-card p {
            color: var(--muted);

            font-size: 14px;

            margin-bottom: 22px;
        }

        .location-info {
            display: grid;

            gap: 14px;

            margin-bottom: 25px;
        }

        .location-info div {
            display: flex;

            gap: 12px;

            color: #334155;

            font-size: 14px;
        }

        .location-icon {
            color: var(--blue);

            font-weight: 800;
        }

        .map-placeholder {
            min-height: 330px;

            border-radius: 20px;

            background:
                linear-gradient(
                    135deg,
                    #dbeafe,
                    #eff6ff
                );

            border: 1px solid #bfdbfe;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            padding: 30px;
        }

        .map-placeholder-content strong {
            display: block;

            color: var(--navy);

            font-size: 20px;

            margin-bottom: 7px;
        }

        .map-placeholder-content p {
            color: var(--muted);

            font-size: 13px;

            margin-bottom: 18px;
        }

        .map-button {
            display: inline-block;

            padding: 11px 18px;

            border-radius: 9px;

            color: white;

            background: var(--blue);

            font-size: 13px;
            font-weight: 700;
        }


        /* =========================
           CONTACT
        ========================= */

        .contact {
            background:
                linear-gradient(
                    135deg,
                    #081535,
                    #10265c
                );

            color: white;
        }

        .contact-container {
            width: min(1000px, 92%);
            margin: auto;

            text-align: center;
        }

        .contact .section-label {
            color: #60a5fa;
        }

        .contact h2 {
            color: white;

            font-size: clamp(30px, 4vw, 45px);

            margin-bottom: 13px;
        }

        .contact p {
            max-width: 580px;

            margin: 0 auto 30px;

            color: #cbd5e1;

            font-size: 15px;
        }

        .whatsapp-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;

            padding: 15px 25px;

            border-radius: 11px;

            color: white;

            background: #16a34a;

            font-size: 14px;
            font-weight: 800;

            box-shadow:
                0 15px 30px rgba(0,0,0,0.20);

            transition: 0.25s;
        }

        .whatsapp-button:hover {
            background: #15803d;

            transform: translateY(-3px);
        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            padding: 25px 0;

            background: #060f29;

            color: #94a3b8;
        }

        .footer-container {
            width: min(1180px, 92%);
            margin: auto;

            display: flex;

            align-items: center;
            justify-content: space-between;

            gap: 20px;
        }

        .footer-brand {
            color: white;

            font-size: 14px;
            font-weight: 700;
        }

        .footer-text {
            font-size: 12px;
        }


        /* =========================
           ANIMATION
        ========================= */

        @keyframes fadeUp {
            from {
                opacity: 0;

                transform:
                    translateY(25px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        /* =========================
           RESPONSIVE TABLET
        ========================= */

        @media (max-width: 900px) {

            .nav-menu {
                gap: 17px;
            }

            .hero-container {
                grid-template-columns: 1fr;

                padding-top: 60px;
                padding-bottom: 70px;

                text-align: center;
            }

            .hero {
                min-height: auto;
            }

            .hero-content {
                display: flex;

                flex-direction: column;

                align-items: center;
            }

            .hero-description {
                max-width: 650px;
            }

            .hero-visual {
                min-height: 360px;
            }

            .about-grid,
            .location-grid {
                grid-template-columns: 1fr;
            }

            .about-visual {
                min-height: 350px;
            }

            .feature-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }
        }


        /* =========================
           RESPONSIVE HP
        ========================= */

        @media (max-width: 700px) {

            .nav-container {
                min-height: 68px;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
            }

            .logo-title {
                font-size: 15px;
            }

            .logo-subtitle {
                font-size: 9px;
            }

            .menu-toggle {
                display: block;
            }

            .nav-menu {
                position: absolute;

                top: 68px;
                left: 4%;

                width: 92%;

                display: none;

                flex-direction: column;

                align-items: stretch;

                gap: 0;

                padding: 12px;

                border-radius: 14px;

                background: white;

                box-shadow:
                    0 20px 40px rgba(15,31,75,0.12);

                border: 1px solid var(--border);
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu li {
                width: 100%;
            }

            .nav-menu a {
                display: block;

                padding: 12px 10px;
            }

            .nav-menu a::after {
                display: none;
            }

            .nav-button {
                text-align: center;
            }

            .hero-container {
                padding-top: 55px;
            }

            .hero h1 {
                font-size: 42px;

                letter-spacing: -1.5px;
            }

            .hero-description {
                font-size: 15px;
            }

            .hero-buttons {
                width: 100%;

                flex-direction: column;
            }

            .btn-primary,
            .btn-outline {
                width: 100%;
            }

            .console-card {
                width: 330px;

                padding: 25px;
            }

            .controller {
                transform: scale(0.85);
            }

            .section {
                padding: 70px 0;
            }

            .price-grid {
                grid-template-columns: 1fr;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                grid-template-columns: 1fr 1fr;

                grid-template-rows:
                    180px
                    180px;
            }

            .gallery-item:first-child {
                grid-column: span 2;
                grid-row: span 1;
            }

            .gallery-item {
                min-height: 150px;
            }

            .footer-container {
                flex-direction: column;

                text-align: center;
            }
        }


        @media (max-width: 430px) {

            .hero h1 {
                font-size: 36px;
            }

            .console-card {
                width: 300px;
            }

            .controller {
                transform: scale(0.75);
                margin-left: -20px;
                margin-right: -20px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;

                grid-template-rows:
                    repeat(4, 180px);
            }

            .gallery-item:first-child {
                grid-column: auto;
            }

            .gallery-item:nth-child(2),
            .gallery-item:nth-child(3),
            .gallery-item:nth-child(4) {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

   


    {{-- =========================
         NAVBAR
    ========================== --}}

    <header class="navbar">

        <div class="nav-container">

            <a href="#beranda" class="logo">

                <div class="logo-icon">
                    🎮
                </div>

                <div class="logo-text">

                    <div class="logo-title">
                        Gempol PlayStation
                    </div>

                    <div class="logo-subtitle">
                        Rental PlayStation
                    </div>

                </div>

            </a>


            <button
                class="menu-toggle"
                id="menuToggle"
                type="button"
            >
                ☰
            </button>


            <ul class="nav-menu" id="navMenu">

                <li>
                    <a href="#beranda">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="#tentang">
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="#informasi">
                        Informasi
                    </a>
                </li>

                <li>
                    <a href="#galeri">
                        Galeri
                    </a>
                </li>

                <li>
                    <a href="#lokasi">
                        Lokasi
                    </a>
                </li>

                <li>
                    <a href="#kontak" class="nav-button">
                        Hubungi Kami
                    </a>
                </li>

            </ul>

        </div>

    </header>



    {{-- =========================
         HERO
    ========================== --}}

    <section
        class="hero"
        id="beranda"
    >

        <div class="hero-container">


            <div class="hero-content">

                <div class="hero-badge">

                    <span></span>

                    Rental PlayStation Terpercaya

                </div>


                <h1>

                    Main Lebih Seru
                    <span>di Gempol.</span>

                </h1>


                <p class="hero-description">

                    Nikmati pengalaman bermain PlayStation
                    dengan nyaman, seru, dan menyenangkan.
                    Pilih PlayStation favoritmu dan
                    hubungi kami untuk melakukan pemesanan.

                </p>


                <div class="hero-buttons">

                    <a
                        href="#informasi"
                        class="btn-primary"
                    >
                        Lihat Informasi
                    </a>


                    <a
                        href="#kontak"
                        class="btn-outline"
                    >
                        Hubungi Kami
                    </a>

                </div>

            </div>



            <div class="hero-visual">

                <div class="visual-glow"></div>


                <div class="console-card">

                    <div class="console-top">

                        <span class="console-title">
                            GEMPOL PLAYSTATION
                        </span>

                        <span class="console-status">
                            ● OPEN
                        </span>

                    </div>


                    <div class="controller">

                        <div class="controller-center"></div>

                    </div>


                    <div class="console-bottom">

                        <strong>
                            PLAY. RELAX. ENJOY.
                        </strong>

                        <small>
                            Your gaming time starts here.
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================
         TENTANG
    ========================== --}}

    <section
        class="section about"
        id="tentang"
    >

        <div class="section-container">

            <div class="section-heading">

                <span class="section-label">
                    Tentang Kami
                </span>

                <h2>
                    Tempat bermain yang
                    dibuat untuk bersenang-senang.
                </h2>

                <p>
                    Kenalan lebih dekat dengan
                    Gempol PlayStation.
                </p>

            </div>


            <div class="about-grid">


                <div class="about-visual">

                </div>


                <div class="about-content">

                    <h3>
                        Gempol PlayStation
                    </h3>


                    <p>
                        Gempol PlayStation merupakan tempat
                        rental PlayStation yang menyediakan
                        pengalaman bermain untuk kamu yang
                        ingin menghabiskan waktu bersama
                        teman, keluarga, maupun bermain santai.
                    </p>


                    <p>
                        Kami berusaha memberikan tempat bermain
                        yang nyaman dengan pilihan PlayStation
                        yang dapat disesuaikan dengan kebutuhan.
                    </p>


                    <div class="about-list">

                        <div class="about-list-item">

                            <div class="check">
                                ✓
                            </div>

                            PlayStation 4 dan PlayStation 5

                        </div>


                        <div class="about-list-item">

                            <div class="check">
                                ✓
                            </div>

                            Harga rental terjangkau

                        </div>


                        <div class="about-list-item">

                            <div class="check">
                                ✓
                            </div>

                            Tempat bermain yang nyaman

                        </div>


                        <div class="about-list-item">

                            <div class="check">
                                ✓
                            </div>

                            Pelayanan yang ramah

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================
         INFORMASI
    ========================== --}}

    <section
        class="section information"
        id="informasi"
    >

        <div class="section-container">

            <div class="section-heading">

                <span class="section-label">
                    Informasi
                </span>

                <h2>
                    Pilih PlayStation favoritmu.
                </h2>

                <p>
                    Tersedia pilihan PlayStation
                    untuk menemani waktu bermainmu.
                </p>

            </div>


            <div class="price-grid">


                <div class="price-card">

                    <div class="price-icon">
                        PS4
                    </div>

                    <h3>
                        PlayStation 4
                    </h3>

                    <p>
                        Cocok untuk bermain bersama
                        teman dan menikmati berbagai
                        pilihan game.
                    </p>

                    <div class="price">
                        Rp5.000
                        <span>/ jam</span>
                    </div>

                </div>



                <div class="price-card">

                    <div class="price-icon">
                        PS5
                    </div>

                    <h3>
                        PlayStation 5
                    </h3>

                    <p>
                        Nikmati pengalaman bermain dengan
                        performa dan grafis generasi terbaru.
                    </p>

                    <div class="price">
                        Rp10.000
                        <span>/ jam</span>
                    </div>

                </div>

            </div>


            <div class="feature-grid">

                <div class="feature-card">

                    <div class="feature-number">
                        01
                    </div>

                    <h3>
                        Pilih PS
                    </h3>

                    <p>
                        Tentukan PlayStation yang
                        ingin kamu gunakan.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-number">
                        02
                    </div>

                    <h3>
                        Hubungi Kami
                    </h3>

                    <p>
                        Hubungi admin melalui WhatsApp
                        untuk melakukan pemesanan.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-number">
                        03
                    </div>

                    <h3>
                        Mulai Bermain
                    </h3>

                    <p>
                        Datang ke lokasi dan
                        nikmati waktu bermainmu.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================
         GALERI
    ========================== --}}

    

    <section
        class="section gallery"
        id="galeri"
    >

        <div class="section-container">

            <div class="section-heading">

                <span class="section-label">
                    Galeri
                </span>

                <h2>
                    Suasana Gempol PlayStation.
                </h2>

                <p>
                    Tempat untuk bermain,
                    bersantai, dan menikmati game.
                </p>

            </div>


           <section class="gallery-section" id="galeri">
    <div class="gallery-container">

        <div class="gallery-heading">
            <span class="section-badge">GALERI</span>

            <h2>Suasana Gempol PlayStation.</h2>

            <p>
                Tempat untuk bermain, bersantai, dan menikmati game.
            </p>
        </div>


        <div class="gallery-grid">

            {{-- FOTO UTAMA --}}
            <div class="gallery-card gallery-main">

                <img
                    src="{{ asset('images/galeri-1.jpg') }}"
                    alt="Suasana Gempol PlayStation"
                >

                <div class="gallery-overlay">
                    <h3>Suasana Gempol PlayStation</h3>
                    <p>Tempat bermain yang nyaman dan menyenangkan.</p>
                </div>

            </div>


            {{-- FOTO PS4 --}}
            <div class="gallery-card gallery-small">

                <img
                    src="{{ asset('images/galeri-2.jpg') }}"
                    alt="PlayStation 4"
                >

                <div class="gallery-overlay">
                    <h3>PlayStation 4</h3>
                    <p>Nikmati berbagai game favoritmu.</p>
                </div>

            </div>


            {{-- FOTO TV --}}
            <div class="gallery-card gallery-small">

                <img
                    src="{{ asset('images/galeri-3.jpg') }}"
                    alt="Gaming Experience"
                >

                <div class="gallery-overlay">
                    <h3>Gaming Experience</h3>
                    <p>Nikmati waktu bermainmu.</p>
                </div>

            </div>


            {{-- FOTO PLAYSTATION --}}
            <div class="gallery-card gallery-small">

                <img
                    src="{{ asset('images/galeri-4.jpg') }}"
                    alt="PlayStation"
                >

                <div class="gallery-overlay">
                    <h3>PlayStation</h3>
                    <p>Siap digunakan untuk bermain.</p>
                </div>

            </div>


            {{-- FOTO TEMPAT --}}
            <div class="gallery-card gallery-small">

                <img
                    src="{{ asset('images/galeri-5.jpg') }}"
                    alt="Tempat Bermain"
                >

                <div class="gallery-overlay">
                    <h3>Comfortable Place</h3>
                    <p>Main dengan nyaman.</p>
                </div>

            </div>

        </div>

    </div>
</section>

        </div>

    </section>



    {{-- =========================
         LOKASI
    ========================== --}}

    <section
        class="section location"
        id="lokasi"
    >

        <div class="section-container">

            <div class="section-heading">

                <span class="section-label">
                    Lokasi
                </span>

                <h2>
                    Temukan kami dengan mudah.
                </h2>

                <p>
                    Datang langsung dan nikmati
                    pengalaman bermain di Gempol PlayStation.
                </p>

            </div>


            <div class="location-grid">


                <div class="location-card">

                    <h3>
                        Gempol PlayStation
                    </h3>


                    <p>
                        Silakan kunjungi lokasi kami
                        untuk menikmati pengalaman
                        bermain PlayStation.
                    </p>


                    <div class="location-info">

                        <div>

                            <span class="location-icon">
                                📍
                            </span>

                            <span>
                                Alamat Gempol PlayStation
                            </span>

                        </div>


                        <div>

                            <span class="location-icon">
                                🕐
                            </span>

                            <span>
                                Jam operasional menyesuaikan
                            </span>

                        </div>


                        <div>

                            <span class="location-icon">
                                📱
                            </span>

                            <span>
                                Hubungi kami melalui WhatsApp
                            </span>

                        </div>

                    </div>

                </div>



                <div class="map-placeholder">

                    <div class="map-placeholder-content">

                        <strong>
                            Lokasi Gempol PlayStation
                        </strong>

                        <p>
                            Klik tombol di bawah untuk
                            membuka lokasi melalui Google Maps.
                        </p>

                        {{-- GANTI LINK INI DENGAN LINK GOOGLE MAPS KAMU --}}

                        <a
                            href="https://maps.google.com"
                            target="_blank"
                            class="map-button"
                        >
                            Buka Google Maps
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================
         KONTAK
    ========================== --}}

    <section
        class="section contact"
        id="kontak"
    >

        <div class="contact-container">

            <span class="section-label">
                Hubungi Kami
            </span>


            <h2>
                Mau rental PlayStation?
            </h2>


            <p>
                Hubungi Gempol PlayStation melalui
                WhatsApp untuk menanyakan ketersediaan
                PlayStation atau melakukan pemesanan.
            </p>


            {{-- 
                GANTI NOMOR DI BAWAH DENGAN
                NOMOR WHATSAPP GEMPOL PLAYSTATION
            --}}

            <a
                href="https://wa.me/62XXXXXXXXXX?text=Halo%20Gempol%20PlayStation%2C%20saya%20ingin%20bertanya%20mengenai%20rental%20PlayStation."
                target="_blank"
                class="whatsapp-button"
            >
                <span>
                    WhatsApp
                </span>

                <span>
                    →
                </span>
            </a>

        </div>

    </section>



    {{-- =========================
         FOOTER
    ========================== --}}

    <footer>

        <div class="footer-container">

            <div class="footer-brand">
                Gempol PlayStation
            </div>

            <div class="footer-text">
                © {{ date('Y') }} Gempol PlayStation.
                Sistem Rental PlayStation berbasis Laravel.
            </div>

        </div>

    </footer>



    {{-- =========================
         JAVASCRIPT MENU MOBILE
    ========================== --}}

    <script>

        const menuToggle =
            document.getElementById('menuToggle');

        const navMenu =
            document.getElementById('navMenu');


        menuToggle.addEventListener(
            'click',
            function () {

                navMenu.classList.toggle('active');

            }
        );


        document
            .querySelectorAll('.nav-menu a')
            .forEach(function(link) {

                link.addEventListener(
                    'click',
                    function() {

                        navMenu.classList.remove('active');

                    }
                );

            });

    </script>

</body>
</html>