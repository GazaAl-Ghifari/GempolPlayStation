@extends('layouts.app')

@section('title', 'Data PlayStation')

@section('page-title', 'Data PlayStation')

@section('content')

<style>
    * {
        box-sizing: border-box;
    }

    .ps-page {
        width: 100%;
        animation: fadeIn 0.3s ease;
    }

    /* =========================
       HEADER CONTENT
    ========================= */

    .ps-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 28px;
        padding: 0 4px;
    }

    .ps-header-left {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .ps-header-icon {
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

    .ps-header-title h2 {
        margin: 0;
        color: #172554;
        font-size: 25px;
        font-weight: 700;
        line-height: 1.2;
    }

    .ps-header-title p {
        margin: 5px 0 0;
        color: #94a3b8;
        font-size: 13px;
    }

    /* =========================
       ADD BUTTON
    ========================= */

    .btn-add-ps {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;

        min-width: 145px;
        height: 38px;

        padding: 0 18px;

        border: none;
        border-radius: 9px;

        background: linear-gradient(
            135deg,
            #172554,
            #2563eb
        );

        color: #ffffff;
        text-decoration: none;

        font-size: 12px;
        font-weight: 600;

        box-shadow: 0 5px 12px rgba(37, 99, 235, 0.16);

        transition: all 0.2s ease;
    }

    .btn-add-ps:hover {
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 7px 15px rgba(37, 99, 235, 0.22);
    }

    .btn-add-ps i {
        font-size: 13px;
    }

    /* =========================
       ALERT
    ========================= */

    .ps-alert {
        display: flex;
        align-items: center;
        gap: 10px;

        margin-bottom: 18px;
        padding: 12px 16px;

        border-radius: 9px;

        font-size: 13px;
    }

    .ps-alert-success {
        background: #ecfdf5;
        border: 1px solid #bbf7d0;
        color: #166534;
    }

    .ps-alert-error {
        background: #fef2f2;
        border: 1px solid #fecaca;
        color: #991b1b;
    }

    /* =========================
       TABLE CARD
    ========================= */

    .ps-table-card {
        width: 100%;

        background: #ffffff;

        border: 1px solid #e5e7eb;
        border-radius: 18px;

        overflow: hidden;

        box-shadow:
            0 7px 20px rgba(15, 23, 42, 0.05);
    }

    /* =========================
       TABLE CARD HEADER
    ========================= */

    .ps-table-card-header {
        height: 53px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        padding: 0 20px;

        border-bottom: 1px solid #edf0f4;
    }

    .ps-table-card-header strong {
        color: #334155;
        font-size: 13px;
        font-weight: 600;
    }

    .ps-table-card-header span {
        color: #a1a9b4;
        font-size: 11px;
    }

    /* =========================
       TABLE
    ========================= */

    .ps-table-wrapper {
        width: 100%;
        overflow-x: auto;
    }

    .ps-table {
        width: 100%;
        min-width: 850px;

        border-collapse: collapse;
        table-layout: fixed;
    }

    .ps-table thead tr {
        height: 38px;
        background: #f8fafc;
    }

    .ps-table thead th {
        padding: 0 16px;

        color: #64748b;

        font-size: 10px;
        font-weight: 600;

        text-align: left;

        border-bottom: 1px solid #e8ecf1;

        letter-spacing: 0.2px;
    }

    .ps-table tbody tr {
        height: 64px;
        transition: background 0.15s ease;
    }

    .ps-table tbody tr:hover {
        background: #fafcff;
    }

    .ps-table tbody td {
        padding: 0 16px;

        color: #64748b;

        font-size: 12px;

        border-bottom: 1px solid #eef1f5;

        vertical-align: middle;
    }

    .ps-table tbody tr:last-child td {
        border-bottom: none;
    }

    /* COLUMN WIDTH */

    .col-no {
        width: 9%;
    }

    .col-name {
        width: 23%;
    }

    .col-type {
        width: 20%;
    }

    .col-price {
        width: 20%;
    }

    .col-status {
        width: 14%;
    }

    .col-action {
        width: 20%;
    }

    /* =========================
       NUMBER BADGE
    ========================= */

    .ps-number {
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
       NAME
    ========================= */

    .ps-name {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .ps-avatar {
        width: 34px;
        height: 34px;

        border-radius: 9px;

        background: #f1f6ff;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #2563eb;

        font-size: 14px;

        flex-shrink: 0;
    }

    .ps-name-text {
        color: #334155;
        font-size: 12px;
        font-weight: 600;
    }

    /* =========================
       TYPE
    ========================= */

    .ps-type {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        color: #64748b;
        font-size: 12px;
    }

    .ps-type i {
        color: #2563eb;
        font-size: 12px;
    }

    /* =========================
       PRICE
    ========================= */

    .ps-price {
        color: #475569;
        font-size: 12px;
        font-weight: 600;
    }

    /* =========================
       STATUS
    ========================= */

    .ps-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        padding: 5px 10px;

        border-radius: 20px;

        font-size: 10px;
        font-weight: 600;
    }

    .ps-status::before {
        content: "";

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: currentColor;
    }

    .ps-status.tersedia {
        background: #ecfdf3;
        color: #16a34a;
    }

    .ps-status.disewa {
        background: #fff1f2;
        color: #e11d48;
    }

    .ps-status.maintenance {
        background: #fff7ed;
        color: #ea580c;
    }

    /* =========================
       ACTION
    ========================= */

    .ps-actions {
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .btn-edit,
    .btn-delete {
        height: 28px;

        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 5px;

        padding: 0 13px;

        border-radius: 8px;

        font-size: 10px;
        font-weight: 600;

        cursor: pointer;

        transition: all 0.15s ease;
    }

    .btn-edit {
        border: 1px solid #dbeafe;

        background: #eff6ff;
        color: #2563eb;

        text-decoration: none;
    }

    .btn-edit:hover {
        background: #dbeafe;
        color: #1d4ed8;
    }

    .btn-delete {
        border: 1px solid #fee2e2;

        background: #fff1f2;
        color: #ef4444;
    }

    .btn-delete:hover {
        background: #fee2e2;
        color: #dc2626;
    }

    .btn-edit i,
    .btn-delete i {
        font-size: 10px;
    }

    /* =========================
       EMPTY
    ========================= */

    .ps-empty {
        text-align: center !important;
        padding: 45px 20px !important;
    }

    .ps-empty-icon {
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

    .ps-empty strong {
        display: block;

        margin-bottom: 4px;

        color: #475569;
        font-size: 13px;
    }

    .ps-empty span {
        color: #94a3b8;
        font-size: 11px;
    }

    /* =========================
       ANIMATION
    ========================= */

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .ps-header {
            align-items: flex-start;
            gap: 15px;
            flex-direction: column;
        }

        .btn-add-ps {
            width: 100%;
        }

        .ps-table-card-header {
            padding: 0 15px;
        }
    }
</style>


<div class="ps-page">

    {{-- =========================
         PAGE HEADER
    ========================= --}}

    <div class="ps-header">

        <div class="ps-header-left">

            <div class="ps-header-icon">
                <i class="bi bi-controller"></i>
            </div>

            <div class="ps-header-title">

                <h2>
                    Data PlayStation
                </h2>

                <p>
                    Kelola seluruh data PlayStation Gempol PlayStation.
                </p>

            </div>

        </div>


        <a
            href="{{ route('ps.create') }}"
            class="btn-add-ps"
        >

            <i class="bi bi-plus-lg"></i>

            Tambah PlayStation

        </a>

    </div>


    {{-- =========================
         SUCCESS
    ========================= --}}

    @if(session('success'))

        <div class="ps-alert ps-alert-success">

            <i class="bi bi-check-circle-fill"></i>

            {{ session('success') }}

        </div>

    @endif


    {{-- =========================
         ERROR
    ========================= --}}

    @if(session('error'))

        <div class="ps-alert ps-alert-error">

            <i class="bi bi-exclamation-circle-fill"></i>

            {{ session('error') }}

        </div>

    @endif


    {{-- =========================
         TABLE CARD
    ========================= --}}

    <div class="ps-table-card">

        <div class="ps-table-card-header">

            <strong>
                Daftar PlayStation
            </strong>

            <span>
                Data PlayStation terdaftar
            </span>

        </div>


        <div class="ps-table-wrapper">

            <table class="ps-table">

                <thead>

                    <tr>

                        <th class="col-no">
                            NO
                        </th>

                        <th class="col-name">
                            NAMA PS
                        </th>

                        <th class="col-type">
                            JENIS PS
                        </th>

                        <th class="col-price">
                            HARGA / JAM
                        </th>

                        <th class="col-status">
                            STATUS
                        </th>

                        <th class="col-action">
                            AKSI
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @forelse($ps as $item)

                        <tr>

                            {{-- NO --}}

                            <td>

                                <span class="ps-number">
                                    {{ $loop->iteration }}
                                </span>

                            </td>


                            {{-- NAMA PS --}}

                            <td>

                                <div class="ps-name">

                                    <div class="ps-avatar">

                                        <i class="bi bi-controller"></i>

                                    </div>

                                    <span class="ps-name-text">
                                        {{ $item->nama_ps }}
                                    </span>

                                </div>

                            </td>


                            {{-- JENIS --}}

                            <td>

                                <span class="ps-type">

                                    <i class="bi bi-controller"></i>

                                    {{ $item->jenis_ps }}

                                </span>

                            </td>


                            {{-- HARGA --}}

                            <td>

                                <span class="ps-price">

                                    Rp
                                    {{ number_format($item->harga_per_jam, 0, ',', '.') }}

                                </span>

                            </td>


                            {{-- STATUS --}}

                            <td>

                                <span
                                    class="ps-status {{ strtolower($item->status) }}"
                                >

                                    {{ ucfirst($item->status) }}

                                </span>

                            </td>


                            {{-- AKSI --}}

                            <td>

                                <div class="ps-actions">

                                    <a
                                        href="{{ route('ps.edit', $item->id) }}"
                                        class="btn-edit"
                                    >

                                        <i class="bi bi-pencil-fill"></i>

                                        Edit

                                    </a>


                                    <form
                                        action="{{ route('ps.destroy', $item->id) }}"
                                        method="POST"
                                        style="display: inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus PlayStation ini?')"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-delete"
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
                                colspan="6"
                                class="ps-empty"
                            >

                                <div class="ps-empty-icon">

                                    <i class="bi bi-controller"></i>

                                </div>

                                <strong>
                                    Belum ada data PlayStation
                                </strong>

                                <span>
                                    Data PlayStation yang ditambahkan akan muncul di sini.
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