<aside class="sidebar">

<!-- ================================================
     BRAND
================================================= -->

<div class="brand">

    <div class="brand-logo">

        <i class="bi bi-controller"></i>

    </div>


    <div class="brand-text">

        <strong>
            Gempol PlayStation
        </strong>

        <small>
            Sistem Rental PlayStation
        </small>

    </div>

</div>


<!-- ================================================
     MENU
================================================= -->

<nav class="menu">

    <div class="menu-label">
        MENU UTAMA
    </div>


    <a
        href="{{ route('dashboard') }}"
        class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
    >

        <span class="menu-icon">
            <i class="bi bi-grid-1x2-fill"></i>
        </span>

        <span class="menu-text">
            Dashboard
        </span>

        @if(request()->routeIs('dashboard'))

            <span class="active-dot"></span>

        @endif

    </a>


    <a
        href="{{ route('pelanggan.index') }}"
        class="{{ request()->routeIs('pelanggan.*') ? 'active' : '' }}"
    >

        <span class="menu-icon">
            <i class="bi bi-people-fill"></i>
        </span>

        <span class="menu-text">
            Pelanggan
        </span>

        @if(request()->routeIs('pelanggan.*'))

            <span class="active-dot"></span>

        @endif

    </a>


    <a
        href="{{ route('ps.index') }}"
        class="{{ request()->routeIs('ps.*') ? 'active' : '' }}"
    >

        <span class="menu-icon">
            <i class="bi bi-controller"></i>
        </span>

        <span class="menu-text">
            PlayStation
        </span>

        @if(request()->routeIs('ps.*'))

            <span class="active-dot"></span>

        @endif

    </a>


    <a
        href="{{ route('rentals.index') }}"
        class="{{ request()->routeIs('rentals.*') ? 'active' : '' }}"
    >

        <span class="menu-icon">
            <i class="bi bi-calendar2-check-fill"></i>
        </span>

        <span class="menu-text">
            Rental
        </span>

        @if(request()->routeIs('rentals.*'))

            <span class="active-dot"></span>

        @endif

    </a>


    <a
        href="{{ route('pembayaran.index') }}"
        class="{{ request()->routeIs('pembayaran.*') ? 'active' : '' }}"
    >

        <span class="menu-icon">
            <i class="bi bi-credit-card-fill"></i>
        </span>

        <span class="menu-text">
            Pembayaran
        </span>

        @if(request()->routeIs('pembayaran.*'))

            <span class="active-dot"></span>

        @endif

    </a>

</nav>


<!-- ================================================
     USER AREA
================================================= -->

<div class="sidebar-user">

    <div class="sidebar-user-avatar">

        <i class="bi bi-person-fill"></i>

    </div>


    <div class="sidebar-user-info">

        <strong>
            {{ auth()->user()->name }}
        </strong>

        <small>
            {{ ucfirst(auth()->user()->role) }}
        </small>

    </div>

</div>


<!-- ================================================
     LOGOUT
================================================= -->

<div class="logout">

    <form
        method="POST"
        action="{{ route('logout') }}"
    >

        @csrf

        <button type="submit">

            <span class="logout-icon">
                <i class="bi bi-box-arrow-left"></i>
            </span>

            <span>
                Logout
            </span>

        </button>

    </form>

</div>

</aside>

<style>

    /* =====================================================
       SIDEBAR
    ===================================================== */

    .sidebar {
        width: 265px;

        height: 100vh;

        position: fixed;

        top: 0;
        left: 0;

        z-index: 1000;

        display: flex;

        flex-direction: column;

        padding:
            22px 15px;

        color: white;

        background:
            linear-gradient(
                180deg,
                #0f172a 0%,
                #172554 55%,
                #0f172a 100%
            );

        box-shadow:
            8px 0 30px
            rgba(15,23,42,.10);

        overflow-y: auto;

        animation:
            sidebarIn .65s ease both;
    }


    @keyframes sidebarIn {

        from {
            opacity: 0;

            transform:
                translateX(-20px);
        }

        to {
            opacity: 1;

            transform:
                translateX(0);
        }

    }


    /* =====================================================
       BRAND
    ===================================================== */

    .brand {
        display: flex;

        align-items: center;

        gap: 11px;

        padding:
            7px 8px 22px;

        border-bottom:
            1px solid
            rgba(255,255,255,.07);
    }


    .brand-logo {
        width: 43px;
        height: 43px;

        flex-shrink: 0;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 13px;

        color: #ffffff;

        background:
            linear-gradient(
                135deg,
                #2563eb,
                #3b82f6
            );

        box-shadow:
            0 8px 20px
            rgba(37,99,235,.28);

        animation:
            brandFloat 3s ease-in-out infinite;
    }


    @keyframes brandFloat {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-3px);
        }

    }


    .brand-text strong {
        display: block;

        color: #ffffff;

        font-size: 13px;

        font-weight: 700;

        white-space: nowrap;
    }


    .brand-text small {
        display: block;

        margin-top: 3px;

        color:
            rgba(255,255,255,.45);

        font-size: 9px;

        white-space: nowrap;
    }


    /* =====================================================
       MENU
    ===================================================== */

    .menu {
        flex: 1;

        padding-top: 24px;
    }


    .menu-label {
        padding:
            0 12px 10px;

        color:
            rgba(255,255,255,.32);

        font-size: 9px;

        font-weight: 700;

        letter-spacing:
            1.1px;
    }


    .menu a {
        position: relative;

        display: flex;

        align-items: center;

        gap: 12px;

        min-height: 48px;

        margin-bottom: 5px;

        padding:
            0 12px;

        border-radius: 12px;

        color:
            rgba(255,255,255,.58);

        text-decoration: none;

        font-size: 12px;

        font-weight: 500;

        transition:
            color .25s ease,
            background .25s ease,
            transform .25s ease;
    }


    .menu a:hover {
        color: white;

        background:
            rgba(255,255,255,.07);

        transform:
            translateX(3px);
    }


    .menu a.active {
        color: #ffffff;

        background:
            linear-gradient(
                90deg,
                rgba(37,99,235,.32),
                rgba(37,99,235,.12)
            );

        box-shadow:
            inset 3px 0 0
            #3b82f6;
    }


    .menu-icon {
        width: 30px;
        height: 30px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 9px;

        color:
            rgba(255,255,255,.50);

        font-size: 14px;

        transition:
            .25s ease;
    }


    .menu a:hover .menu-icon {
        color: #93c5fd;

        transform:
            scale(1.08);
    }


    .menu a.active .menu-icon {
        color: #ffffff;

        background:
            rgba(59,130,246,.20);
    }


    .menu-text {
        flex: 1;
    }


    .active-dot {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background:
            #60a5fa;

        box-shadow:
            0 0 10px
            rgba(96,165,250,.8);

        animation:
            dotPulse 2s ease-in-out infinite;
    }


    @keyframes dotPulse {

        0%,
        100% {
            opacity: .6;

            transform:
                scale(.8);
        }

        50% {
            opacity: 1;

            transform:
                scale(1.15);
        }

    }


    /* =====================================================
       USER
    ===================================================== */

    .sidebar-user {
        display: flex;

        align-items: center;

        gap: 10px;

        padding:
            13px 11px;

        margin-bottom: 10px;

        border:
            1px solid
            rgba(255,255,255,.07);

        border-radius: 13px;

        background:
            rgba(255,255,255,.045);
    }


    .sidebar-user-avatar {
        width: 36px;
        height: 36px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 10px;

        color: #bfdbfe;

        background:
            rgba(59,130,246,.18);

        font-size: 15px;
    }


    .sidebar-user-info {
        min-width: 0;
    }


    .sidebar-user-info strong {
        display: block;

        overflow: hidden;

        text-overflow: ellipsis;

        white-space: nowrap;

        color: white;

        font-size: 11px;
    }


    .sidebar-user-info small {
        display: block;

        margin-top: 3px;

        color:
            rgba(255,255,255,.40);

        font-size: 9px;
    }


    /* =====================================================
       LOGOUT
    ===================================================== */

    .logout {
        padding-top: 5px;
    }


    .logout form {
        width: 100%;
    }


    .logout button {
        width: 100%;

        min-height: 45px;

        display: flex;

        align-items: center;

        gap: 11px;

        padding:
            0 12px;

        border:
            1px solid
            rgba(255,255,255,.07);

        border-radius: 11px;

        color:
            rgba(255,255,255,.55);

        background:
            rgba(255,255,255,.035);

        font-size: 11px;

        font-weight: 600;

        cursor: pointer;

        transition:
            .25s ease;
    }


    .logout button:hover {
        color: #ffffff;

        background:
            rgba(239,68,68,.13);

        border-color:
            rgba(248,113,113,.15);

        transform:
            translateY(-2px);
    }


    .logout-icon {
        width: 29px;
        height: 29px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 8px;

        font-size: 14px;
    }


    .logout button:hover .logout-icon {
        color: #fca5a5;

        background:
            rgba(239,68,68,.12);
    }


    /* =====================================================
       SCROLLBAR
    ===================================================== */

    .sidebar::-webkit-scrollbar {
        width: 4px;
    }


    .sidebar::-webkit-scrollbar-track {
        background: transparent;
    }


    .sidebar::-webkit-scrollbar-thumb {
        background:
            rgba(255,255,255,.10);

        border-radius: 10px;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 850px) {

        .sidebar {
            width: 225px;
        }

    }


    @media (max-width: 650px) {

        .sidebar {
            width: 72px;

            padding:
                18px 10px;

            align-items: center;
        }


        .brand {
            justify-content: center;

            padding:
                5px 0 18px;
        }


        .brand-logo {
            width: 43px;
            height: 43px;
        }


        .brand-text,
        .menu-label,
        .menu-text,
        .active-dot,
        .sidebar-user-info,
        .logout button > span:last-child {
            display: none;
        }


        .menu {
            width: 100%;
        }


        .menu a {
            justify-content: center;

            padding: 0;

            width: 100%;
        }


        .menu-icon {
            width: 38px;
            height: 38px;
        }


        .menu a.active {
            box-shadow: none;
        }


        .sidebar-user {
            width: 100%;

            justify-content: center;

            padding: 8px;
        }


        .sidebar-user-avatar {
            width: 37px;
            height: 37px;
        }


        .logout button {
            justify-content: center;

            padding: 0;
        }


        .logout-icon {
            width: 38px;
            height: 38px;
        }

    }


    @media (max-width: 400px) {

        .sidebar {
            width: 64px;

            padding:
                15px 7px;
        }

    }

</style>
