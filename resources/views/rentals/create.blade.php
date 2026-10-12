@extends('layouts.app')

@section('title', 'Rental - Gempol PlayStation')

@section('page-title', 'Data Rental')

@section('content')

<style>
    .rental-form-card {
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

    .form-top {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 28px 32px;
        background: linear-gradient(135deg, #172554, #1d4ed8);
        color: #ffffff;
    }

    .form-icon {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.15);
        font-size: 25px;
        flex-shrink: 0;
    }

    .form-top h2 {
        margin: 0 0 5px;
        font-size: 24px;
        font-weight: 700;
    }

    .form-top p {
        margin: 0;
        color: #dbeafe;
        font-size: 14px;
        line-height: 1.5;
    }

    .form-body {
        padding: 30px 32px 32px;
    }

    .error-box {
        display: flex;
        gap: 12px;
        padding: 15px 16px;
        margin-bottom: 24px;
        border: 1px solid #fecaca;
        border-radius: 11px;
        background: #fef2f2;
        color: #991b1b;
        font-size: 14px;
    }

    .error-icon {
        font-size: 18px;
        flex-shrink: 0;
    }

    .error-box strong {
        display: block;
        margin-bottom: 6px;
    }

    .error-box ul {
        margin: 0;
        padding-left: 18px;
    }

    .error-box li {
        margin-bottom: 3px;
    }

    .form-group {
        margin-bottom: 21px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #1e293b;
        font-size: 14px;
        font-weight: 600;
    }

    .form-group label i {
        color: #2563eb;
        margin-right: 5px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-wrapper select,
    .input-wrapper input {
        width: 100%;
        min-height: 46px;
        padding: 11px 44px 11px 14px;
        border: 1px solid #cbd5e1;
        border-radius: 9px;
        background: #ffffff;
        color: #1e293b;
        font-size: 14px;
        outline: none;
        transition: all 0.2s ease;
    }

    .input-wrapper select:focus,
    .input-wrapper input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
    }

    .input-wrapper > i {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #64748b;
        pointer-events: none;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 30px;
        padding-top: 24px;
        border-top: 1px solid #e2e8f0;
    }

    .btn-back,
    .btn-save {
        min-height: 44px;
        padding: 11px 20px;
        border-radius: 9px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn-back {
        background: #e2e8f0;
        color: #334155;
    }

    .btn-back:hover {
        background: #cbd5e1;
        color: #1e293b;
    }

    .btn-save {
        border: none;
        background: #1d4ed8;
        color: #ffffff;
    }

    .btn-save:hover {
        background: #1e40af;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 5px 12px rgba(29, 78, 216, 0.20);
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
        .rental-form-card {
            border-radius: 14px;
        }

        .form-top {
            padding: 24px 20px;
        }

        .form-body {
            padding: 24px 20px;
        }

        .form-top h2 {
            font-size: 21px;
        }
    }

    @media (max-width: 520px) {
        .form-top {
            align-items: flex-start;
        }

        .form-icon {
            width: 46px;
            height: 46px;
            font-size: 21px;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .btn-back,
        .btn-save {
            width: 100%;
        }
    }
</style>

<div class="rental-form-card">

    <div class="form-top">

        <div class="form-icon">
            <i class="bi bi-controller"></i>
        </div>

        <div>
            <h2>Tambah Rental PS</h2>

            <p>
                Buat transaksi rental PlayStation baru.
            </p>
        </div>

    </div>

    <div class="form-body">

        @if(session('error'))

            <div class="error-box">

                <div class="error-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>

                <div>
                    {{ session('error') }}
                </div>

            </div>

        @endif

        @if($errors->any())

            <div class="error-box">

                <div class="error-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>

                <div>

                    <strong>
                        Data belum dapat disimpan
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            </div>

        @endif

        <form
            action="{{ route('rentals.store') }}"
            method="POST"
        >

            @csrf

            <div class="form-group">

                <label for="pelanggan_id">
                    <i class="bi bi-person-fill"></i>
                    Pelanggan
                </label>

                <div class="input-wrapper">

                    <select
                        name="pelanggan_id"
                        id="pelanggan_id"
                        required
                    >

                        <option value="">
                            -- Pilih Pelanggan --
                        </option>

                        @foreach($pelanggans as $pelanggan)

                            <option value="{{ $pelanggan->id }}">

                                {{ $pelanggan->nama }}

                            </option>

                        @endforeach

                    </select>

                    <i class="bi bi-chevron-down"></i>

                </div>

            </div>

            <div class="form-group">

                <label for="ps_id">
                    <i class="bi bi-controller"></i>
                    PlayStation
                </label>

                <div class="input-wrapper">

                    <select
                        name="ps_id"
                        id="ps_id"
                        required
                    >

                        <option value="">
                            -- Pilih PS --
                        </option>

                        @foreach($ps as $item)

                            <option value="{{ $item->id }}">

                                {{ $item->nama_ps }}
                                -
                                {{ $item->jenis_ps }}
                                -
                                Rp {{ number_format($item->harga_per_jam, 0, ',', '.') }}/jam

                            </option>

                        @endforeach

                    </select>

                    <i class="bi bi-chevron-down"></i>

                </div>

            </div>

            <div class="form-group">

                <label for="durasi">
                    <i class="bi bi-clock-fill"></i>
                    Durasi Rental (Jam)
                </label>

                <div class="input-wrapper">

                    <input
                        type="number"
                        name="durasi"
                        id="durasi"
                        min="1"
                        value="1"
                        required
                    >

                    <i class="bi bi-hourglass-split"></i>

                </div>

            </div>

            <div class="form-actions">

                <a
                    href="{{ route('rentals.index') }}"
                    class="btn-back"
                >
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>

                <button
                    type="submit"
                    class="btn-save"
                >
                    <i class="bi bi-check2-circle"></i>
                    Simpan Rental
                </button>

            </div>

        </form>

    </div>

</div>

@endsection