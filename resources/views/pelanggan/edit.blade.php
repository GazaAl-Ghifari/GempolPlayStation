@extends('layouts.app')

@section('title', 'Pelanggan - Gempol PlayStation')

@section('page-title', 'Data Pelanggan')

@section('content')

<style>
    .customer-page {
        width: 100%;
        max-width: 1050px;
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

    .customer-form-card {
        position: relative;
        overflow: hidden;
        background: #fff;
        border: 1px solid #e8edf4;
        border-radius: 22px;
        box-shadow: 0 12px 35px rgba(15, 23, 42, .07);
    }

    .customer-form-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #172554, #2563eb, #60a5fa);
    }

    .form-top {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 28px 32px 22px;
        border-bottom: 1px solid #eef2f7;
    }

    .form-icon {
        width: 58px;
        height: 58px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        color: #2563eb;
        background: #eff6ff;
        font-size: 24px;
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

    .form-top h2 {
        margin: 0;
        color: #172554;
        font-size: 23px;
        font-weight: 750;
    }

    .form-top p {
        margin: 5px 0 0;
        color: #94a3b8;
        font-size: 12px;
    }

    .form-body {
        padding: 30px 32px 32px;
    }

    .error-box {
        display: flex;
        gap: 12px;
        margin-bottom: 25px;
        padding: 15px 17px;
        border: 1px solid #fecaca;
        border-radius: 13px;
        color: #991b1b;
        background: #fef2f2;
        animation: shake .4s ease;
    }

    @keyframes shake {
        0%, 100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-5px);
        }

        75% {
            transform: translateX(5px);
        }
    }

    .error-icon {
        width: 30px;
        height: 30px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        background: #fee2e2;
    }

    .error-box strong {
        display: block;
        margin-bottom: 4px;
        font-size: 12px;
    }

    .error-box ul {
        margin: 0;
        padding-left: 18px;
        font-size: 11px;
        line-height: 1.7;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group label {
        display: flex;
        align-items: center;
        gap: 7px;
        margin-bottom: 9px;
        color: #334155;
        font-size: 12px;
        font-weight: 700;
    }

    .form-group label i {
        color: #2563eb;
        font-size: 13px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-wrapper i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        pointer-events: none;
        transition: .25s ease;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 13px 15px 13px 43px;
        border: 1px solid #dbe3ed;
        border-radius: 12px;
        outline: none;
        color: #1e293b;
        background: #fbfdff;
        font-family: inherit;
        font-size: 13px;
        transition: .25s ease;
    }

    .form-group textarea {
        min-height: 125px;
        resize: vertical;
        padding-top: 14px;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #3b82f6;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, .09);
    }

    .input-wrapper:focus-within i {
        color: #2563eb;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-top: 30px;
        padding-top: 23px;
        border-top: 1px solid #eef2f7;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 16px;
        border: 1px solid #e2e8f0;
        border-radius: 11px;
        color: #64748b;
        background: #fff;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        transition: .25s ease;
    }

    .btn-back:hover {
        color: #172554;
        background: #f8fafc;
        transform: translateX(-3px);
    }

    .btn-save {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        min-width: 190px;
        padding: 12px 20px;
        border: 0;
        border-radius: 11px;
        color: #fff;
        background: linear-gradient(135deg, #172554, #2563eb);
        box-shadow: 0 7px 18px rgba(37, 99, 235, .20);
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: .25s ease;
    }

    .btn-save:hover {
        transform: translateY(-3px);
        box-shadow: 0 11px 23px rgba(37, 99, 235, .27);
    }

    @media (max-width: 650px) {
        .form-top {
            padding: 23px 20px 19px;
        }

        .form-body {
            padding: 24px 20px;
        }

        .form-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .form-top h2 {
            font-size: 19px;
        }

        .form-actions {
            flex-direction: column-reverse;
            align-items: stretch;
        }

        .btn-back,
        .btn-save {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="customer-page">

<div class="customer-form-card">

    <div class="form-top">

        <div class="form-icon">
            <i class="bi bi-person-gear"></i>
        </div>

        <div>
            <h2>Edit Pelanggan</h2>

            <p>
                Perbarui informasi pelanggan pada form di bawah ini.
            </p>
        </div>

    </div>


    <div class="form-body">

        @if ($errors->any())

            <div class="error-box">

                <div class="error-icon">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>

                <div>

                    <strong>
                        Terdapat kesalahan pada data
                    </strong>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            </div>

        @endif


        <form
            action="{{ route('pelanggan.update', $pelanggan->id) }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <div class="form-group">

                <label for="nama">
                    <i class="bi bi-person-fill"></i>
                    Nama Pelanggan
                </label>

                <div class="input-wrapper">

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama', $pelanggan->nama) }}"
                        placeholder="Masukkan nama pelanggan"
                        required
                    >

                    <i class="bi bi-person"></i>

                </div>

            </div>


            <div class="form-group">

                <label for="no_hp">
                    <i class="bi bi-phone-fill"></i>
                    Nomor HP
                </label>

                <div class="input-wrapper">

                    <input
                        type="text"
                        id="no_hp"
                        name="no_hp"
                        value="{{ old('no_hp', $pelanggan->no_hp) }}"
                        placeholder="Contoh: 081234567890"
                        required
                    >

                    <i class="bi bi-telephone"></i>

                </div>

            </div>


            <div class="form-group">

                <label for="alamat">
                    <i class="bi bi-geo-alt-fill"></i>
                    Alamat
                </label>

                <div class="input-wrapper">

                    <textarea
                        id="alamat"
                        name="alamat"
                        placeholder="Masukkan alamat pelanggan"
                        required
                    >{{ old('alamat', $pelanggan->alamat) }}</textarea>

                    <i class="bi bi-geo-alt"></i>

                </div>

            </div>


            <div class="form-actions">

                <a
                    href="{{ route('pelanggan.index') }}"
                    class="btn-back"
                >
                    <i class="bi bi-arrow-left"></i>
                    Kembali
                </a>


                <button
                    type="submit"
                    class="btn-save"
                >
                    <i class="bi bi-save2-fill"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

</div>

@endsection
