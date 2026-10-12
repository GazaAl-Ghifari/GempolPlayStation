@extends('layouts.app')

@section('title', 'Pembayaran - Gempol PlayStation')

@section('page-title', 'Data Pembayaran')

@section('content')

<style>
    .payment-page {
        width: 100%;
    }

    /* =========================
       PAGE HEADER
    ========================= */

    .payment-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 20px;

        margin-bottom: 28px;
        padding: 0 4px;
    }

    .payment-heading-left {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .payment-heading-icon {
        width: 48px;
        height: 48px;

        border-radius: 13px;

        background: #eef4ff;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #2563eb;
        font-size: 21px;

        flex-shrink: 0;
    }

    .payment-heading-title h2 {
        margin: 0;

        color: #172554;

        font-size: 25px;
        font-weight: 700;

        line-height: 1.2;
    }

    .payment-heading-title p {
        margin: 5px 0 0;

        color: #94a3b8;

        font-size: 13px;
    }

    /* =========================
       BACK BUTTON
    ========================= */

    .payment-back {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;

        height: 38px;

        padding: 0 17px;

        border-radius: 9px;

        background: #eef4ff;
        color: #2563eb;

        border: 1px solid #dbeafe;

        text-decoration: none;

        font-size: 11px;
        font-weight: 600;

        transition: .2s;
    }

    .payment-back:hover {
        background: #dbeafe;
        color: #1d4ed8;
    }

    /* =========================
       ALERT
    ========================= */

    .payment-alert {
        display: flex;
        align-items: center;
        gap: 9px;

        margin-bottom: 18px;
        padding: 12px 15px;

        border-radius: 9px;

        font-size: 12px;
    }

    .payment-success {
        background: #ecfdf5;
        border: 1px solid #bbf7d0;
        color: #166534;
    }

    .payment-error {
        background: #fef2f2;
        border: 1px solid #fecaca;
        color: #991b1b;
    }

    /* =========================
       TABLE CARD
    ========================= */

    .payment-table-card {
        width: 100%;

        background: #ffffff;

        border: 1px solid #e5e7eb;
        border-radius: 18px;

        overflow: hidden;

        box-shadow:
            0 7px 20px rgba(15, 23, 42, 0.05);
    }

    /* =========================
       CARD HEADER
    ========================= */

    .payment-table-header {
        height: 53px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 20px;

        border-bottom: 1px solid #edf0f4;
    }

    .payment-table-header strong {
        color: #334155;

        font-size: 13px;
        font-weight: 600;
    }

    .payment-table-header span {
        color: #a1a9b4;

        font-size: 11px;
    }

    /* =========================
       TABLE
    ========================= */

    .payment-table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    .payment-table {
        width: 100%;
        min-width: 1150px;

        border-collapse: collapse;
        table-layout: fixed;
    }

    .payment-table thead tr {
        height: 38px;

        background: #f8fafc;
    }

    .payment-table thead th {
        padding: 0 13px;

        color: #64748b;

        font-size: 10px;
        font-weight: 600;

        text-align: left;

        border-bottom: 1px solid #e8ecf1;

        white-space: nowrap;
    }

    .payment-table tbody tr {
        height: 63px;

        transition: background .15s ease;
    }

    .payment-table tbody tr:hover {
        background: #fafcff;
    }

    .payment-table tbody td {
        padding: 0 13px;

        color: #64748b;

        font-size: 11px;

        border-bottom: 1px solid #eef1f5;

        vertical-align: middle;
    }

    .payment-table tbody tr:last-child td {
        border-bottom: none;
    }

    /* =========================
       COLUMN WIDTH
    ========================= */

    .payment-col-no {
        width: 5%;
    }

    .payment-col-kode {
        width: 11%;
    }

    .payment-col-pelanggan {
        width: 13%;
    }

    .payment-col-ps {
        width: 11%;
    }

    .payment-col-total {
        width: 12%;
    }

    .payment-col-bayar {
        width: 12%;
    }

    .payment-col-kembali {
        width: 12%;
    }

    .payment-col-metode {
        width: 9%;
    }

    .payment-col-status {
        width: 9%;
    }

    .payment-col-tanggal {
        width: 13%;
    }

    /* =========================
       NUMBER
    ========================= */

    .payment-number {
        width: 30px;
        height: 30px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #f1f6ff;
        color: #2563eb;

        font-size: 11px;
        font-weight: 600;
    }

    /* =========================
       KODE
    ========================= */

    .payment-code {
        color: #334155;
        font-size: 11px;
        font-weight: 600;
    }

    /* =========================
       CUSTOMER
    ========================= */

    .payment-person {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .payment-avatar {
        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #f1f6ff;
        color: #2563eb;

        font-size: 13px;

        flex-shrink: 0;
    }

    .payment-person-name {
        color: #334155;
        font-size: 11px;
        font-weight: 600;
    }

    /* =========================
       PS
    ========================= */

    .payment-ps {
        display: flex;
        align-items: center;
        gap: 7px;

        color: #475569;
        font-size: 11px;
    }

    .payment-ps i {
        color: #2563eb;
        font-size: 11px;
    }

    /* =========================
       PRICE
    ========================= */

    .payment-price {
        color: #475569;
        font-size: 11px;
        font-weight: 600;

        white-space: nowrap;
    }

    /* =========================
       METHOD
    ========================= */

    .payment-method {
        display: inline-flex;

        padding: 5px 9px;

        border-radius: 7px;

        background: #f1f5f9;
        color: #475569;

        font-size: 9px;
        font-weight: 700;

        white-space: nowrap;
    }

    /* =========================
       STATUS
    ========================= */

    .payment-status {
        display: inline-flex;
        align-items: center;
        gap: 5px;

        padding: 5px 9px;

        border-radius: 20px;

        background: #ecfdf3;
        color: #16a34a;

        font-size: 9px;
        font-weight: 700;

        white-space: nowrap;
    }

    .payment-status::before {
        content: "";

        width: 5px;
        height: 5px;

        border-radius: 50%;

        background: currentColor;
    }

    /* =========================
       DATE
    ========================= */

    .payment-date {
        color: #64748b;

        font-size: 10px;

        line-height: 1.4;
    }

    /* =========================
       EMPTY
    ========================= */

    .payment-empty {
        text-align: center !important;

        padding: 45px 20px !important;
    }

    .payment-empty-icon {
        width: 45px;
        height: 45px;

        margin: 0 auto 10px;

        border-radius: 11px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #f1f6ff;
        color: #2563eb;

        font-size: 18px;
    }

    .payment-empty strong {
        display: block;

        margin-bottom: 4px;

        color: #475569;

        font-size: 13px;
    }

    .payment-empty span {
        color: #94a3b8;

        font-size: 11px;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .payment-heading {
            align-items: flex-start;
            flex-direction: column;
        }

        .payment-back {
            width: 100%;
        }

        .payment-table-header {
            padding: 0 15px;
        }
    }
</style>


<div class="payment-page">

    {{-- =========================
         PAGE HEADER
    ========================= --}}

    <div class="payment-heading">

        <div class="payment-heading-left">

            <div class="payment-heading-icon">

                <i class="bi bi-credit-card-fill"></i>

            </div>


            <div class="payment-heading-title">

                <h2>
                    Data Pembayaran
                </h2>

                <p>
                    Kelola seluruh data pembayaran Gempol PlayStation.
                </p>

            </div>

        </div>


        <a
            href="{{ route('rentals.index') }}"
            class="payment-back"
        >

            <i class="bi bi-arrow-left"></i>

            Kembali ke Rental

        </a>

    </div>


    {{-- =========================
         SUCCESS
    ========================= --}}

    @if(session('success'))

        <div class="payment-alert payment-success">

            <i class="bi bi-check-circle-fill"></i>

            {{ session('success') }}

        </div>

    @endif


    {{-- =========================
         ERROR
    ========================= --}}

    @if(session('error'))

        <div class="payment-alert payment-error">

            <i class="bi bi-exclamation-circle-fill"></i>

            {{ session('error') }}

        </div>

    @endif


    {{-- =========================
         TABLE
    ========================= --}}

    <div class="payment-table-card">

        <div class="payment-table-header">

            <strong>
                Daftar Pembayaran
            </strong>

            <span>
                Data pembayaran terdaftar
            </span>

        </div>


        <div class="payment-table-wrapper">

            <table class="payment-table">

                <thead>

                    <tr>

                        <th class="payment-col-no">
                            NO
                        </th>

                        <th class="payment-col-kode">
                            KODE RENTAL
                        </th>

                        <th class="payment-col-pelanggan">
                            PELANGGAN
                        </th>

                        <th class="payment-col-ps">
                            PS
                        </th>

                        <th class="payment-col-total">
                            TOTAL
                        </th>

                        <th class="payment-col-bayar">
                            DIBAYAR
                        </th>

                        <th class="payment-col-kembali">
                            KEMBALIAN
                        </th>

                        <th class="payment-col-metode">
                            METODE
                        </th>

                        <th class="payment-col-status">
                            STATUS
                        </th>

                        <th class="payment-col-tanggal">
                            TANGGAL
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($pembayarans as $pembayaran)

                        <tr>

                            {{-- NO --}}

                            <td>

                                <span class="payment-number">

                                    {{ $loop->iteration }}

                                </span>

                            </td>


                            {{-- KODE RENTAL --}}

                            <td>

                                <span class="payment-code">

                                    {{ $pembayaran->rental->kode_rental }}

                                </span>

                            </td>


                            {{-- PELANGGAN --}}

                            <td>

                                <div class="payment-person">

                                    <div class="payment-avatar">

                                        <i class="bi bi-person-fill"></i>

                                    </div>

                                    <span class="payment-person-name">

                                        {{ $pembayaran->rental->pelanggan->nama }}

                                    </span>

                                </div>

                            </td>


                            {{-- PS --}}

                            <td>

                                <span class="payment-ps">

                                    <i class="bi bi-controller"></i>

                                    {{ $pembayaran->rental->ps->nama_ps }}

                                </span>

                            </td>


                            {{-- TOTAL --}}

                            <td>

                                <span class="payment-price">

                                    Rp
                                    {{ number_format(
                                        $pembayaran->rental->total_harga,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </span>

                            </td>


                            {{-- DIBAYAR --}}

                            <td>

                                <span class="payment-price">

                                    Rp
                                    {{ number_format(
                                        $pembayaran->jumlah_bayar,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </span>

                            </td>


                            {{-- KEMBALIAN --}}

                            <td>

                                <span class="payment-price">

                                    Rp
                                    {{ number_format(
                                        $pembayaran->kembalian,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </span>

                            </td>


                            {{-- METODE --}}

                            <td>

                                <span class="payment-method">

                                    {{ strtoupper($pembayaran->metode_pembayaran) }}

                                </span>

                            </td>


                            {{-- STATUS --}}

                            <td>

                                <span class="payment-status">

                                    {{ strtoupper($pembayaran->rental->status) }}

                                </span>

                            </td>


                            {{-- TANGGAL --}}

                            <td>

                                <span class="payment-date">

                                    {{ $pembayaran->tanggal_pembayaran
                                        ? $pembayaran->tanggal_pembayaran->format('d/m/Y H:i')
                                        : '-' }}

                                </span>

                            </td>

                        </tr>


                    @empty

                        <tr>

                            <td
                                colspan="10"
                                class="payment-empty"
                            >

                                <div class="payment-empty-icon">

                                    <i class="bi bi-credit-card"></i>

                                </div>

                                <strong>
                                    Belum ada data pembayaran
                                </strong>

                                <span>
                                    Data pembayaran yang berhasil dilakukan akan muncul di sini.
                                </span>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection