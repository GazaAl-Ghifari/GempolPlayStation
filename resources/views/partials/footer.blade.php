<footer class="footer">

<div class="footer-content">

    <div class="footer-brand">

        <div class="footer-logo">
            <i class="bi bi-controller"></i>
        </div>

        <div>
            <strong>Gempol PlayStation</strong>

            <span>
                Sistem Rental PlayStation berbasis Laravel.
            </span>
        </div>

    </div>


    <div class="footer-copy">

        © {{ date('Y') }} Gempol PlayStation.

    </div>

</div>

</footer>

<style>

    .footer {
        width: 100%;

        margin-top: 25px;

        padding: 0 5px 10px;

        animation:
            footerAppear .7s ease both;
    }


    @keyframes footerAppear {

        from {
            opacity: 0;

            transform:
                translateY(10px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    .footer-content {
        min-height: 70px;

        padding:
            15px 20px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 20px;

        border:
            1px solid #e8edf4;

        border-radius: 16px;

        background: #ffffff;

        box-shadow:
            0 5px 20px
            rgba(15, 23, 42, .04);
    }


    .footer-brand {
        display: flex;

        align-items: center;

        gap: 11px;
    }


    .footer-logo {
        width: 38px;
        height: 38px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        color: white;

        background:
            linear-gradient(
                135deg,
                #172554,
                #2563eb
            );

        box-shadow:
            0 5px 14px
            rgba(37, 99, 235, .18);

        animation:
            footerIcon 3s ease-in-out infinite;
    }


    @keyframes footerIcon {

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


    .footer-brand strong {
        display: block;

        color: #172554;

        font-size: 12px;

        font-weight: 700;
    }


    .footer-brand span {
        display: block;

        margin-top: 3px;

        color: #94a3b8;

        font-size: 10px;
    }


    .footer-copy {
        color: #94a3b8;

        font-size: 11px;

        white-space: nowrap;
    }


    @media (max-width: 650px) {

        .footer-content {
            flex-direction: column;

            align-items: flex-start;

            gap: 10px;

            padding: 16px;
        }


        .footer-copy {
            white-space: normal;
        }

    }


    @media (max-width: 400px) {

        .footer-brand span {
            max-width: 210px;

            line-height: 1.5;
        }

    }

</style>
