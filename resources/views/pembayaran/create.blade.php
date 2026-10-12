@extends('layouts.app')

@section('title', 'Pembayaran - Gempol PlayStation')

@section('page-title', 'Data Pembayaran')

@section('content')

<style>
    .payment-page {
        width: 100%;
    }

    .payment-card {
        width: 100%;
        max-width: 760px;
        margin: 0 auto;
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);
        animation: fadeUp 0.35s ease;
    }

    /* =========================
       HEADER
    ========================= */

    .payment-header {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 25px 28px;
        background: linear-gradient(135deg, #172554, #1d4ed8);
        color: #ffffff;
    }

    .payment-icon {
        width: 50px;
        height: 50px;
        border-radius: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.15);
        font-size: 23px;
        flex-shrink: 0;
    }

    .payment-header h2 {
        margin: 0 0 5px;
        font-size: 22px;
        font-weight: 700;
    }

    .payment-header p {
        margin: 0;
        color: #dbeafe;
        font-size: 13px;
    }

    /* =========================
       BODY
    ========================= */

    .payment-body {
        padding: 28px;
    }

    /* =========================
       ERROR
    ========================= */

    .payment-errors {
        margin-bottom: 20px;
        padding: 14px 16px;
        border: 1px solid #fecaca;
        border-radius: 10px;
        background: #fef2f2;
        color: #991b1b;
        font-size: 13px;
    }

    .payment-errors strong {
        display: block;
        margin-bottom: 6px;
    }

    .payment-errors ul {
        margin: 0;
        padding-left: 18px;
    }

    .payment-errors li {
        margin-bottom: 3px;
    }

    /* =========================
       RENTAL INFO
    ========================= */

    .rental-info {
        margin-bottom: 20px;
        padding: 16px 18px;
        background: #f8fafc;
        border: 1px solid #edf0f4;
        border-radius: 11px;
    }

    .rental-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 30px;
        gap: 20px;
    }

    .rental-row + .rental-row {
        border-top: 1px solid #edf0f4;
    }

    .rental-label {
        color: #64748b;
        font-size: 12px;
    }

    .rental-value {
        color: #172554;
        font-size: 12px;
        font-weight: 600;
        text-align: right;
    }

    /* =========================
       TOTAL
    ========================= */

    .payment-total {
        margin-bottom: 24px;
        padding: 18px;
        background: #eff6ff;
        border: 1px solid #dbeafe;
        border-radius: 11px;
        text-align: center;
    }

    .payment-total-label {
        margin-bottom: 5px;
        color: #64748b;
        font-size: 11px;
    }

    .payment-total-value {
        color: #0d47a1;
        font-size: 25px;
        font-weight: 700;
    }

    /* =========================
       FORM
    ========================= */

    .payment-form-group {
        margin-bottom: 19px;
    }

    .payment-form-group label {
        display: block;
        margin-bottom: 8px;
        color: #334155;
        font-size: 13px;
        font-weight: 600;
    }

    .payment-form-group label i {
        margin-right: 5px;
        color: #2563eb;
    }

    .payment-input {
        position: relative;
    }

    .payment-input select,
    .payment-input input {
        width: 100%;
        min-height: 44px;
        padding: 10px 42px 10px 13px;
        border: 1px solid #dbe1e8;
        border-radius: 9px;
        background: #ffffff;
        color: #334155;
        font-size: 13px;
        outline: none;
        transition: .2s;
    }

    .payment-input select:focus,
    .payment-input input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, .08);
    }

    .payment-input > i {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        pointer-events: none;
    }

    /* =========================
       PAYMENT METHOD BOX
    ========================= */

    .method-box {
        display: none;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid #dbeafe;
        background: #f8fbff;
        animation: fadeUp .25s ease;
    }

    .method-box.active {
        display: block;
    }

    .method-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 6px;
        color: #172554;
        font-size: 14px;
        font-weight: 700;
    }

    .method-title i {
        color: #2563eb;
        font-size: 17px;
    }

    .method-description {
        margin-bottom: 15px;
        color: #64748b;
        font-size: 12px;
        line-height: 1.5;
    }

    /* =========================
       TRANSFER
    ========================= */

    .transfer-info {
        display: grid;
        gap: 0;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        overflow: hidden;
    }

    .transfer-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding: 11px 13px;
    }

    .transfer-row + .transfer-row {
        border-top: 1px solid #edf0f4;
    }

    .transfer-label {
        color: #64748b;
        font-size: 12px;
    }

    .transfer-value {
        color: #172554;
        font-size: 12px;
        font-weight: 700;
        text-align: right;
    }

    /* =========================
       QRIS
    ========================= */

    .qris-box {
        text-align: center;
    }

    .qris-image-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 15px auto;
        padding: 15px;
        width: fit-content;
        max-width: 100%;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        box-shadow: 0 5px 15px rgba(15, 23, 42, 0.06);
    }

    .qris-image {
        display: block;
        width: 300px;
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .qris-note {
        margin: 8px 0 0;
        color: #64748b;
        font-size: 12px;
        line-height: 1.5;
    }

    /* =========================
       CASH
    ========================= */

    #cashPaymentSection {
        display: none;
    }

    .payment-warning {
        margin-top: 7px;
        color: #b91c1c;
        font-size: 11px;
        display: none;
    }

    .payment-change {
        margin-top: 4px;
        padding: 15px 17px;
        background: #f8fafc;
        border: 1px solid #edf0f4;
        border-radius: 10px;
    }

    .payment-change-label {
        color: #64748b;
        font-size: 11px;
    }

    .payment-change-value {
        margin-top: 4px;
        color: #166534;
        font-size: 20px;
        font-weight: 700;
    }

    /* =========================
       FOOTER
    ========================= */

    .payment-footer {
        display: flex;
        justify-content: flex-end;
        gap: 9px;
        margin-top: 26px;
        padding-top: 21px;
        border-top: 1px solid #edf0f4;
    }

    .payment-btn {
        min-height: 40px;
        padding: 10px 18px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: .2s;
    }

    .payment-btn-back {
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #64748b;
    }

    .payment-btn-back:hover {
        background: #f1f5f9;
        color: #334155;
    }

    .payment-btn-submit {
        border: none;
        background: linear-gradient(135deg, #172554, #2563eb);
        color: #ffffff;
    }

    .payment-btn-submit:hover {
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 5px 12px rgba(37, 99, 235, .18);
    }

    /* =========================
       ANIMATION
    ========================= */

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 600px) {

        .payment-body {
            padding: 19px;
        }

        .payment-header {
            padding: 22px 20px;
        }

        .payment-header h2 {
            font-size: 20px;
        }

        .rental-row {
            align-items: flex-start;
            flex-direction: column;
            gap: 3px;
            padding: 8px 0;
        }

        .rental-value {
            text-align: left;
        }

        .transfer-row {
            flex-direction: column;
            gap: 4px;
        }

        .transfer-value {
            text-align: left;
        }

        .payment-footer {
            flex-direction: column-reverse;
        }

        .payment-btn {
            width: 100%;
        }

        .qris-image {
            width: 260px;
        }
    }
</style>


<div class="payment-page">

    <div class="payment-card">

        {{-- HEADER --}}
        <div class="payment-header">

            <div class="payment-icon">
                <i class="bi bi-wallet2"></i>
            </div>

            <div>

                <h2>
                    Pembayaran Rental
                </h2>

                <p>
                    Kelola pembayaran rental PlayStation.
                </p>

            </div>

        </div>


        {{-- BODY --}}
        <div class="payment-body">

            {{-- ERROR --}}
            @if($errors->any())

                <div class="payment-errors">

                    <strong>
                        <i class="bi bi-exclamation-circle-fill"></i>
                        Data belum dapat diproses
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- INFO RENTAL --}}
            <div class="rental-info">

                <div class="rental-row">

                    <span class="rental-label">
                        Kode Rental
                    </span>

                    <span class="rental-value">
                        {{ $rental->kode_rental }}
                    </span>

                </div>


                <div class="rental-row">

                    <span class="rental-label">
                        Pelanggan
                    </span>

                    <span class="rental-value">
                        {{ $rental->pelanggan->nama }}
                    </span>

                </div>


                <div class="rental-row">

                    <span class="rental-label">
                        PlayStation
                    </span>

                    <span class="rental-value">
                        {{ $rental->ps->nama_ps }}
                    </span>

                </div>


                <div class="rental-row">

                    <span class="rental-label">
                        Durasi
                    </span>

                    <span class="rental-value">
                        {{ $rental->durasi }} jam
                    </span>

                </div>

            </div>


            {{-- TOTAL --}}
            <div class="payment-total">

                <div class="payment-total-label">
                    Total yang harus dibayar
                </div>

                <div class="payment-total-value">

                    Rp {{ number_format(
                        $rental->total_harga,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


            {{-- FORM --}}
            <form
                action="{{ route('pembayaran.store', ['p' => $rental->id]) }}"
                method="POST"
                id="formPembayaran"
            >

                @csrf


                {{-- METODE PEMBAYARAN --}}
                <div class="payment-form-group">

                    <label for="metode_pembayaran">

                        <i class="bi bi-wallet2"></i>

                        Metode Pembayaran

                    </label>

                    <div class="payment-input">

                        <select
                            name="metode_pembayaran"
                            id="metode_pembayaran"
                            required
                        >

                            <option value="">
                                -- Pilih Metode --
                            </option>

                            <option value="tunai">
                                Tunai
                            </option>

                            <option value="qris">
                                QRIS
                            </option>

                            <option value="transfer">
                                Transfer
                            </option>

                        </select>

                        <i class="bi bi-chevron-down"></i>

                    </div>

                </div>


                {{-- =========================
                     INFORMASI TRANSFER
                ========================= --}}
                <div
                    class="method-box"
                    id="transferSection"
                >

                    <div class="method-title">

                        <i class="bi bi-bank"></i>

                        Informasi Transfer

                    </div>

                    <div class="method-description">

                        Silakan lakukan transfer sesuai informasi rekening
                        berikut.

                    </div>

                    <div class="transfer-info">

                        <div class="transfer-row">

                            <span class="transfer-label">
                                Bank
                            </span>

                            <span class="transfer-value">
                                NAMA BANK
                            </span>

                        </div>

                        <div class="transfer-row">

                            <span class="transfer-label">
                                No. Rekening
                            </span>

                            <span class="transfer-value">
                                NOMOR REKENING
                            </span>

                        </div>

                        <div class="transfer-row">

                            <span class="transfer-label">
                                Atas Nama
                            </span>

                            <span class="transfer-value">
                                GEMPOL PLAYSTATION
                            </span>

                        </div>

                    </div>

                </div>


                {{-- =========================
                     QRIS
                ========================= --}}
                <div
                    class="method-box"
                    id="qrisSection"
                >

                    <div class="qris-box">

                        <div class="method-title" style="justify-content: center;">

                            <i class="bi bi-qr-code"></i>

                            Pembayaran QRIS

                        </div>

                        <div class="method-description">

                            Scan QRIS berikut menggunakan aplikasi
                            pembayaran yang mendukung QRIS.

                        </div>

                        <div class="qris-image-wrapper">

                            <img
                                src="{{ asset('images/qris.jpg') }}"
                                alt="QRIS Gempol PlayStation"
                                class="qris-image"
                            >

                        </div>

                        <p class="qris-note">

                            Pastikan jumlah pembayaran sesuai dengan
                            total rental sebelum melakukan pembayaran.

                        </p>

                    </div>

                </div>


                {{-- =========================
                     UANG DIBAYAR + KEMBALIAN
                     KHUSUS TUNAI
                ========================= --}}
                <div
                    id="cashPaymentSection"
                    style="display: none;"
                >

                    <div class="payment-form-group">

                        <label for="uang_dibayar">

                            <i class="bi bi-cash-stack"></i>

                            Uang Dibayar

                        </label>

                        <div class="payment-input">

                            <input
                                type="number"
                                name="uang_dibayar"
                                id="uang_dibayar"
                                min="{{ $rental->total_harga }}"
                                step="1000"
                                placeholder="Masukkan jumlah uang"
                            >

                            <i class="bi bi-cash"></i>

                        </div>


                        <div
                            class="payment-warning"
                            id="warning"
                        >

                            Uang yang dibayar kurang dari
                            total pembayaran.

                        </div>

                    </div>


                    {{-- KEMBALIAN --}}
                    <div class="payment-change">

                        <div class="payment-change-label">
                            Kembalian
                        </div>

                        <div
                            class="payment-change-value"
                            id="kembalian"
                        >
                            Rp 0
                        </div>

                    </div>

                </div>


                {{-- BUTTON --}}
                <div class="payment-footer">

                    <a
                        href="{{ route('pembayaran.index') }}"
                        class="payment-btn payment-btn-back"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Kembali

                    </a>


                    <button
                        type="submit"
                        class="payment-btn payment-btn-submit"
                    >

                        <i class="bi bi-check-lg"></i>

                        Bayar Sekarang

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<script>

    const total = {{ $rental->total_harga }};

    const metodePembayaran =
        document.getElementById('metode_pembayaran');

    const cashSection =
        document.getElementById('cashPaymentSection');

    const transferSection =
        document.getElementById('transferSection');

    const qrisSection =
        document.getElementById('qrisSection');

    const uangInput =
        document.getElementById('uang_dibayar');

    const kembalian =
        document.getElementById('kembalian');

    const warning =
        document.getElementById('warning');

    const form =
        document.getElementById('formPembayaran');


    /*
    ==========================================
    GANTI TAMPILAN SESUAI METODE PEMBAYARAN
    ==========================================
    */

    metodePembayaran.addEventListener('change', function () {

        const metode = this.value;


        // Sembunyikan semua bagian terlebih dahulu
        cashSection.style.display = 'none';

        transferSection.classList.remove('active');

        qrisSection.classList.remove('active');


        // =========================
        // TUNAI
        // =========================

        if (metode === 'tunai') {

            cashSection.style.display = 'block';

            uangInput.required = true;

            // Kosongkan supaya kasir memasukkan uang
            uangInput.value = '';

            kembalian.textContent = 'Rp 0';

            warning.style.display = 'none';

        }


        // =========================
        // TRANSFER
        // =========================

        else if (metode === 'transfer') {

            transferSection.classList.add('active');

            /*
             * Tidak ada input uang yang terlihat.
             * Tetapi nilai dikirim otomatis sebesar total
             * agar validasi backend lama tetap aman.
             */

            uangInput.required = false;

            uangInput.value = total;

            kembalian.textContent = 'Rp 0';

            warning.style.display = 'none';

        }


        // =========================
        // QRIS
        // =========================

        else if (metode === 'qris') {

            qrisSection.classList.add('active');

            /*
             * Sama seperti transfer:
             * uang dibayar dianggap sama dengan total.
             */

            uangInput.required = false;

            uangInput.value = total;

            kembalian.textContent = 'Rp 0';

            warning.style.display = 'none';

        }


        // =========================
        // BELUM PILIH METODE
        // =========================

        else {

            uangInput.required = false;

            uangInput.value = '';

            kembalian.textContent = 'Rp 0';

            warning.style.display = 'none';

        }

    });


    /*
    ==========================================
    HITUNG KEMBALIAN - KHUSUS TUNAI
    ==========================================
    */

    uangInput.addEventListener('input', function () {

        // Jangan hitung kalau bukan tunai
        if (metodePembayaran.value !== 'tunai') {
            return;
        }

        const uang = Number(this.value);


        if (!uang) {

            kembalian.textContent = 'Rp 0';

            warning.style.display = 'none';

            return;
        }


        if (uang < total) {

            kembalian.textContent = 'Rp 0';

            warning.style.display = 'block';

            return;
        }


        warning.style.display = 'none';


        const hasil = uang - total;


        kembalian.textContent =
            'Rp ' +
            hasil.toLocaleString('id-ID');

    });


    /*
    ==========================================
    VALIDASI SEBELUM SUBMIT
    ==========================================
    */

    form.addEventListener('submit', function (event) {

        const metode =
            metodePembayaran.value;


        // Belum memilih metode
        if (!metode) {

            event.preventDefault();

            metodePembayaran.focus();

            return;

        }


        // =========================
        // VALIDASI TUNAI
        // =========================

        if (metode === 'tunai') {

            const uang =
                Number(uangInput.value);


            if (!uang || uang < total) {

                event.preventDefault();

                warning.style.display = 'block';

                uangInput.focus();

                return;

            }

        }


        // =========================
        // TRANSFER / QRIS
        // =========================

        else {

            /*
             * Pastikan backend menerima
             * nominal pembayaran sebesar total.
             */

            uangInput.value = total;

        }

    });

</script>

@endsection