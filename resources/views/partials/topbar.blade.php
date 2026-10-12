<header class="topbar">

<div class="topbar-left">

    <div class="topbar-icon">

        <i class="bi bi-grid-1x2-fill"></i>

    </div>


    <div class="topbar-title">

        <span>
            GEMPOL PLAYSTATION
        </span>

        <h1>
            @yield('page-title', 'Dashboard')
        </h1>

    </div>

</div>


<div class="topbar-right">

    <div class="online-status">

        <span class="status-dot"></span>

        Online

    </div>


    <div class="topbar-divider"></div>


    <div class="user">

        <div class="user-avatar">

            <i class="bi bi-person-fill"></i>

        </div>


        <div class="user-info">

            <strong>
                {{ auth()->user()->name }}
            </strong>

            <small>
                {{ ucfirst(auth()->user()->role) }}
            </small>

        </div>


        <i class="bi bi-chevron-down user-arrow"></i>

    </div>

</div>

</header>

<style>

    /* =====================================================
       TOPBAR
    ===================================================== */

    .topbar {
        min-height: 78px;

        width: 100%;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;

        padding:
            0 28px;

        background:
            rgba(255,255,255,.92);

        border-bottom:
            1px solid #e8edf4;

        backdrop-filter:
            blur(14px);

        position: sticky;   

        top: 0;

        z-index: 900;

        animation:
            topbarIn .65s ease both;
    }


    @keyframes topbarIn {

        from {
            opacity: 0;

            transform:
                translateY(-12px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    /* =====================================================
       LEFT
    ===================================================== */

    .topbar-left {
        display: flex;

        align-items: center;

        gap: 13px;

        min-width: 0;
    }


    .topbar-icon {
        width: 40px;
        height: 40px;

        display: flex;

        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 12px;

        color: #2563eb;

        background:
            #eff6ff;

        font-size: 15px;

        transition:
            .25s ease;
    }


    .topbar-icon:hover {
        transform:
            rotate(-5deg)
            scale(1.05);
    }


    .topbar-title span {
        display: block;

        margin-bottom: 3px;

        color: #94a3b8;

        font-size: 8px;

        font-weight: 700;

        letter-spacing:
            1.2px;
    }


    .topbar h1 {
        margin: 0;

        color: #172554;

        font-size: 20px;

        font-weight: 750;

        line-height: 1.1;
    }


    /* =====================================================
       RIGHT
    ===================================================== */

    .topbar-right {
        display: flex;

        align-items: center;

        gap: 17px;
    }


    .online-status {
        display: flex;

        align-items: center;

        gap: 7px;

        color: #64748b;

        font-size: 10px;

        font-weight: 600;
    }


    .status-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: #22c55e;

        box-shadow:
            0 0 0 4px
            rgba(34,197,94,.10);

        animation:
            onlinePulse 2s ease-in-out infinite;
    }


    @keyframes onlinePulse {

        0%,
        100% {
            box-shadow:
                0 0 0 3px
                rgba(34,197,94,.10);
        }

        50% {
            box-shadow:
                0 0 0 6px
                rgba(34,197,94,.03);
        }

    }


    .topbar-divider {
        width: 1px;

        height: 28px;

        background:
            #e2e8f0;
    }


    /* =====================================================
       USER
    ===================================================== */

    .user {
        display: flex;

        align-items: center;

        gap: 9px;

        padding:
            5px 7px;

        border-radius: 12px;

        transition:
            .25s ease;

        cursor: default;
    }


    .user:hover {
        background:
            #f8fafc;
    }


    .user-avatar {
        width: 36px;
        height: 36px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        color: #2563eb;

        background:
            #eff6ff;

        font-size: 15px;
    }


    .user-info {
        min-width: 75px;
    }


    .user-info strong {
        display: block;

        max-width: 130px;

        overflow: hidden;

        text-overflow: ellipsis;

        white-space: nowrap;

        color: #172554;

        font-size: 11px;

        font-weight: 700;
    }


    .user-info small {
        display: block;

        margin-top: 2px;

        color: #94a3b8;

        font-size: 9px;
    }


    .user-arrow {
        color: #94a3b8;

        font-size: 10px;
    }


    /* =====================================================
       RESPONSIVE
    ===================================================== */

    @media (max-width: 700px) {

        .topbar {
            min-height: 68px;

            padding:
                0 18px;
        }


        .topbar-icon {
            width: 36px;
            height: 36px;
        }


        .topbar h1 {
            font-size: 17px;
        }


        .online-status,
        .topbar-divider,
        .user-arrow {
            display: none;
        }


        .topbar-right {
            gap: 0;
        }

    }


    @media (max-width: 450px) {

        .topbar {
            padding:
                0 13px;
        }


        .topbar-title span {
            font-size: 7px;
        }


        .topbar h1 {
            font-size: 15px;
        }


        .user-info {
            display: none;
        }


        .user {
            padding: 0;
        }

    }

</style>
