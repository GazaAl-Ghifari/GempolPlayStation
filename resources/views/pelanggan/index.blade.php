@extends('layouts.app')

@section('title', 'Pelanggan')

@section('page-title', 'Data Pelanggan')

@section('content')

<style>
    .customer-page {
        width: 100%;
        max-width: 1250px;
        margin: 0 auto;
        animation: pageEnter .65s ease both;
    }

    @keyframes pageEnter {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .page-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 20px;
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
        border-radius: 14px;
        color: #2563eb;
        background: #eff6ff;
        font-size: 21px;
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {
        0%, 100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-4px);
        }
    }

    .heading-info h2 {
        margin: 0;
        color: #172554;
        font-size: 21px;
        font-weight: 750;
    }

    .heading-info p {
        margin: 4px 0 0;
        color: #94a3b8;
        font-size: 11px;
    }

    .btn-add {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 17px;
        border-radius: 11px;
        color: white;
        background: linear-gradient(135deg, #172554, #2563eb);
        box-shadow: 0 7px 18px rgba(37, 99, 235, .18);
        text-decoration: none;
        font-size: 11px;
        font-weight: 700;
        transition: .25s ease;
    }

    .btn-add:hover {
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 11px 23px rgba(37, 99, 235, .27);
    }

    .alert-box {
        display: flex;
        align-items: center;
        gap: 11px;
        margin-bottom: 18px;
        padding: 13px 16px;
        border-radius: 12px;
        font-size: 11px;
        animation: alertIn .45s ease both;
    }

    @keyframes alertIn {
        from {
            opacity: 0;
            transform: translateY(-7px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert-box.success {
        border: 1px solid #bbf7d0;
        color: #166534;
        background: #f0fdf4;
    }

    .alert-box.error {
        border: 1px solid #fecaca;
        color: #991b1b;
        background: #fef2f2;
    }

    .alert-icon {
        width: 30px;
        height: 30px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        background: rgba(255,255,255,.65);
    }

    .table-card {
        overflow: hidden;
        border: 1px solid #e8edf4;
        border-radius: 18px;
        background: white;
        box-shadow: 0 10px 30px rgba(15, 23, 42, .055);
    }

    .table-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 20px;
        border-bottom: 1px solid #eef2f7;
    }

    .table-card-header strong {
        color: #172554;
        font-size: 13px;
    }

    .table-card-header span {
        color: #94a3b8;
        font-size: 10px;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .customer-table {
        width: 100%;
        min-width: 720px;
        border-collapse: collapse;
    }

    .customer-table th {
        padding: 13px 17px;
        color: #64748b;
        background: #f8fafc;
        border-bottom: 1px solid #e5eaf0;
        text-align: left;
        font-size: 10px;
        font-weight: 750;
        text-transform: uppercase;
        letter-spacing: .4px;
    }

    .customer-table td {
        padding: 15px 17px;
        border-bottom: 1px solid #eef2f7;
        color: #475569;
        font-size: 11px;
        vertical-align: middle;
    }

    .customer-table tbody tr {
        transition: .22s ease;
    }

    .customer-table tbody tr:hover {
        background: #f8fbff;
        transform: scale(1.002);
    }

    .customer-table tbody tr:last-child td {
        border-bottom: 0;
    }

    .number-badge {
        width: 27px;
        height: 27px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        color: #2563eb;
        background: #eff6ff;
        font-size: 10px;
        font-weight: 700;
    }

    .customer-name {
        display: flex;
        align-items: center;
        gap: 9px;
    }

    .customer-avatar {
        width: 33px;
        height: 33px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 10px;
        color: #2563eb;
        background: #eff6ff;
        font-size: 13px;
    }

    .customer-name strong {
        display: block;
        color: #172554;
        font-size: 11px;
    }

    .phone-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #475569;
    }

    .phone-badge i {
        color: #2563eb;
    }

    .address-text {
        max-width: 280px;
        color: #64748b;
        line-height: 1.5;
    }

    .action-group {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        min-width: 68px;
        padding: 7px 10px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 10px;
        font-weight: 650;
        transition: .22s ease;
    }

    .action-edit {
        color: #2563eb;
        background: #eff6ff;
    }

    .action-edit:hover {
        color: #1d4ed8;
        background: #dbeafe;
        transform: translateY(-2px);
    }

    .action-delete {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        min-width: 68px;
        padding: 7px 10px;
        border: 0;
        border-radius: 8px;
        color: #dc2626;
        background: #fef2f2;
        font-size: 10px;
        font-weight: 650;
        cursor: pointer;
        transition: .22s ease;
    }

    .action-delete:hover {
        color: #b91c1c;
        background: #fee2e2;
        transform: translateY(-2px);
    }

    .empty-state {
        padding: 55px 20px !important;
        text-align: center;
    }

    .empty-icon {
        width: 58px;
        height: 58px;
        margin: 0 auto 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        color: #94a3b8;
        background: #f8fafc;
        font-size: 23px;
    }

    .empty-state strong {
        display: block;
        color: #475569;
        font-size: 12px;
    }

    .empty-state span {
        display: block;
        margin-top: 4px;
        color: #94a3b8;
        font-size: 10px;
    }

    @media (max-width: 650px) {
        .page-heading {
            align-items: flex-start;
            flex-direction: column;
        }

        .btn-add {
            width: 100%;
            justify-content: center;
        }

        .heading-info h2 {
            font-size: 19px;
        }

        .table-card-header {
            padding: 16px;
        }
    }
</style>

<div class="customer-page">

<div class="page-heading">

    <div class="heading-info">

        <div class="heading-icon">
            <i class="bi bi-people-fill"></i>
        </div>

        <div>
            <h2>Data Pelanggan</h2>

            <p>
                Kelola seluruh data pelanggan Gempol PlayStation.
            </p>
        </div>

    </div>


    <a
        href="{{ route('pelanggan.create') }}"
        class="btn-add"
    >
        <i class="bi bi-person-plus-fill"></i>
        Tambah Pelanggan
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
            Daftar Pelanggan
        </strong>

        <span>
            Data pelanggan terdaftar
        </span>

    </div>


    <div class="table-responsive">

        <table class="customer-table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama</th>

                    <th>No. HP</th>

                    <th>Alamat</th>

                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse($pelanggans as $pelanggan)

                    <tr>

                        <td>

                            <span class="number-badge">
                                {{ $loop->iteration }}
                            </span>

                        </td>


                        <td>

                            <div class="customer-name">

                                <div class="customer-avatar">
                                    <i class="bi bi-person-fill"></i>
                                </div>

                                <strong>
                                    {{ $pelanggan->nama }}
                                </strong>

                            </div>

                        </td>


                        <td>

                            <span class="phone-badge">

                                <i class="bi bi-telephone-fill"></i>

                                {{ $pelanggan->no_hp }}

                            </span>

                        </td>


                        <td>

                            <div class="address-text">
                                {{ $pelanggan->alamat ?? '-' }}
                            </div>

                        </td>


                        <td>

                            <div class="action-group">

                                <a
                                    href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                                    class="action-btn action-edit"
                                >
                                    <i class="bi bi-pencil-fill"></i>
                                    Edit
                                </a>


                                <form
                                    action="{{ route('pelanggan.destroy', ['pelanggan' => $pelanggan->id]) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="action-delete"
                                    >
                                        <i class="bi bi-trash3-fill"></i>
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="empty-state"
                        >

                            <div class="empty-icon">
                                <i class="bi bi-people"></i>
                            </div>

                            <strong>
                                Belum ada data pelanggan
                            </strong>

                            <span>
                                Data pelanggan yang ditambahkan akan muncul di sini.
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
