@extends('layouts.app')

@section('title', 'Rental - Gempol PlayStation')

@section('page-title', 'Data Rental')

@section('content')

<style>
    .page-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 24px;
        animation: fadeUp 0.35s ease;
    }

    .heading-info {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .heading-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 13px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 23px;
        flex-shrink: 0;
    }

    .heading-info h2 {
        margin: 0 0 4px;
        color: #172554;
        font-size: 24px;
        font-weight: 700;
    }

    .heading-info p {
        margin: 0;
        color: #64748b;
        font-size: 14px;
    }

    .btn-add {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 11px 17px;
        min-height: 44px;
        border-radius: 9px;
        background: #1d4ed8;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.2s ease;
        white-space: nowrap;
    }

    .btn-add:hover {
        background: #1e40af;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 5px 12px rgba(29, 78, 216, 0.20);
    }

    .alert-box {
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 13px 16px;
        margin-bottom: 20px;
        border-radius: 10px;
        font-size: 14px;
        animation: fadeUp 0.35s ease;
    }

    .alert-box.success {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        color: #166534;
    }

    .alert-box.error {
        background: #fef2f2;
        border: 1px solid #fecaca;
        color: #991b1b;
    }

    .alert-icon {
        font-size: 18px;
    }

    .table-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(15, 23, 42, 0.06);
        animation: fadeUp 0.4s ease;
    }

    .table-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 19px 22px;
        border-bottom: 1px solid #e5e7eb;
    }

    .table-card-header strong {
        color: #172554;
        font-size: 16px;
    }

    .table-card-header span {
        color: #64748b;
        font-size: 13px;
    }

    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

    .rental-table {
        width: 100%;
        border-collapse: collapse;
        min-width: 1200px;
    }

    .rental-table thead th {
        padding: 14px 16px;
        background: #172554;
        color: #ffffff;
        font-size: 13px;
        font-weight: 600;
        text-align: left;
        white-space: nowrap;
    }

    .rental-table tbody td {
        padding: 15px 16px;
        border-bottom: 1px solid #eef2f7;
        color: #334155;
        font-size: 14px;
        vertical-align: middle;
    }

    .rental-table tbody tr {
        transition: background 0.2s ease;
    }

    .rental-table tbody tr:hover {
        background: #f8fafc;
    }

    .rental-table tbody tr:last-child td {
        border-bottom: none;
    }

    .number-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 31px;
        height: 31px;
        border-radius: 9px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 13px;
        font-weight: 700;
    }

    .kode-badge {
        display: inline-flex;
        align-items: center;
        padding: 6px 10px;
        border-radius: 8px;
        background: #f1f5f9;
        color: #334155;
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
    }

    .person-info,
    .ps-info {
        display: flex;
        align-items: center;
        gap: 9px;
        white-space: nowrap;
    }

    .person-icon,
    .ps-icon {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        background: #eff6ff;
        color: #2563eb;
        flex-shrink: 0;
    }

    .ps-icon {
        background: #f1f5f9;
        color: #475569;
    }

    .date-text {
        color: #475569;
        font-size: 13px;
        white-space: nowrap;
    }

    .duration-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 6px 10px;
        border-radius: 8px;
        background: #f8fafc;
        color: #334155;
        font-weight: 600;
        white-space: nowrap;
    }

    .price-text {
        color: #172554;
        font-weight: 700;
        white-space: nowrap;
    }

    .status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
    }

    .status::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
    }

    .status.berjalan {
        background: #fef3c7;
        color: #92400e;
    }

    .status.selesai {
        background: #dcfce7;
        color: #166534;
    }

    .aksi {
        white-space: nowrap;
    }

    .action-group {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .button-selesai {
        border: none;
        min-height: 35px;
        padding: 7px 11px;
        border-radius: 8px;
        background: #16a34a;
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .button-selesai:hover {
        background: #15803d;
        transform: translateY(-1px);
    }

    .button-bayar {
        min-height: 35px;
        padding: 7px 11px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        background: #2563eb;
        color: #ffffff;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .button-bayar:hover {
        background: #1d4ed8;
        color: #ffffff;
        transform: translateY(-1px);
    }

    .sudah-bayar {
        min-height: 35px;
        padding: 7px 11px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        background: #dcfce7;
        color: #166534;
        font-size: 12px;
        font-weight: 700;
    }

    .empty-state {
        text-align: center !important;
        padding: 45px 20px !important;
    }

    .empty-icon {
        width: 58px;
        height: 58px;
        margin: 0 auto 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 25px;
    }

    .empty-state strong {
        display: block;
        margin-bottom: 5px;
        color: #334155;
        font-size: 15px;
    }

    .empty-state span {
        color: #94a3b8;
        font-size: 13px;
    }

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

    @media (max-width: 768px) {
        .page-heading {
            align-items: flex-start;
            flex-direction: column;
        }

        .btn-add {
            width: 100%;
        }

        .heading-info h2 {
            font-size: 21px;
        }

        .table-card-header {
            align-items: flex-start;
            flex-direction: column;
        }
    }

    @media (max-width: 520px) {
        .heading-icon {
            width: 44px;
            height: 44px;
            font-size: 20px;
        }

        .heading-info p {
            line-height: 1.5;
        }
    }
</style>

<div class="page-heading">

    <div class="heading-info">

        <div class="heading-icon">
            <i class="bi bi-controller"></i>
        </div>

        <div>

            <h2>Data Rental</h2>

            <p>
                Kelola seluruh transaksi rental Gempol PlayStation.
            </p>

        </div>

    </div>

    <a
        href="{{ route('rentals.create') }}"
        class="btn-add"
    >
        <i class="bi bi-plus-circle-fill"></i>
        Rental Baru
    </a>

</div>


@if(session('success'))

    <div class="alert-box success">

        <div class="alert-icon">
            <i class="bi bi-check-circle-fill"></i>
        </div>

        <span>
            {{ session('success') }}
        </span>

    </div>

@endif


@if(session('error'))

    <div class="alert-box error">

        <div class="alert-icon">
            <i class="bi bi-exclamation-circle-fill"></i>
        </div>

        <span>
            {{ session('error') }}
        </span>

    </div>

@endif


<div class="table-card">

    <div class="table-card-header">

        <strong>
            Daftar Rental
        </strong>

        <span>
            Seluruh transaksi rental PlayStation
        </span>

    </div>


    <div class="table-responsive">

        <table class="rental-table">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Kode</th>
                    <th>Pelanggan</th>
                    <th>PS</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Durasi</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse($rentals as $rental)

                    <tr>

                        <td>

                            <span class="number-badge">
                                {{ $loop->iteration }}
                            </span>

                        </td>


                        <td>

                            <span class="kode-badge">

                                <i class="bi bi-receipt me-1"></i>

                                {{ $rental->kode_rental }}

                            </span>

                        </td>


                        <td>

                            <div class="person-info">

                                <div class="person-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>

                                <span>
                                    {{ $rental->pelanggan->nama ?? '-' }}
                                </span>

                            </div>

                        </td>


                        <td>

                            <div class="ps-info">

                                <div class="ps-icon">
                                    <i class="bi bi-controller"></i>
                                </div>

                                <span>
                                    {{ $rental->ps->nama_ps ?? '-' }}
                                </span>

                            </div>

                        </td>


                        <td>

                            <span class="date-text">

                                {{ $rental->waktu_mulai
                                    ? $rental->waktu_mulai->format('d/m/Y H:i')
                                    : '-' }}

                            </span>

                        </td>


                        <td>

                            <span class="date-text">

                                {{ $rental->waktu_selesai
                                    ? $rental->waktu_selesai->format('d/m/Y H:i')
                                    : '-' }}

                            </span>

                        </td>


                        <td>

                            <span class="duration-badge">

                                <i class="bi bi-clock-fill"></i>

                                {{ $rental->durasi }} jam

                            </span>

                        </td>


                        <td>

                            <span class="price-text">

                                Rp {{ number_format(
                                    $rental->total_harga,
                                    0,
                                    ',',
                                    '.'
                                ) }}

                            </span>

                        </td>


                        <td>

                            <span class="status {{ $rental->status }}">

                                {{ ucfirst($rental->status) }}

                            </span>

                        </td>


                        <td class="aksi">

                            @if($rental->status === 'berjalan')

                                <form
                                    action="{{ route('rentals.selesai', ['p' => $rental->id]) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @method('PUT')

                                    <button
                                        type="submit"
                                        class="button-selesai"
                                    >
                                        <i class="bi bi-check-circle-fill"></i>
                                        Selesaikan
                                    </button>

                                </form>


                            @elseif($rental->status === 'selesai')

                                @if(!$rental->pembayaran)

                                    <a
                                        href="{{ route('pembayaran.create', ['p' => $rental->id]) }}"
                                        class="button-bayar"
                                    >
                                        <i class="bi bi-credit-card-fill"></i>
                                        Bayar
                                    </a>

                                @else

                                    <span class="sudah-bayar">

                                        <i class="bi bi-check-circle-fill"></i>

                                        Lunas

                                    </span>

                                @endif

                            @endif

                        </td>

                    </tr>


                @empty

                    <tr>

                        <td
                            colspan="10"
                            class="empty-state"
                        >

                            <div class="empty-icon">
                                <i class="bi bi-controller"></i>
                            </div>

                            <strong>
                                Belum ada transaksi rental
                            </strong>

                            <span>
                                Transaksi rental yang dibuat akan muncul di sini.
                            </span>

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection