@extends('layouts.app')

@section('title', 'Tambah PlayStation - Gempol PlayStation')

@section('page-title', 'Data PlayStation')

@section('content')

<style>
    .ps-form-page {
        width: 100%;
    }

    .ps-form-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 6px 20px rgba(15, 23, 42, 0.06);
    }

    .ps-form-header {
        padding: 20px 22px;
        border-bottom: 1px solid #edf0f4;
    }

    .ps-form-header h2 {
        margin: 0 0 5px;
        color: #172554;
        font-size: 17px;
        font-weight: 700;
    }

    .ps-form-header p {
        margin: 0;
        color: #94a3b8;
        font-size: 12px;
    }

    .ps-form-body {
        padding: 24px;
    }

    .ps-form-group {
        margin-bottom: 19px;
    }

    .ps-form-group label {
        display: block;
        margin-bottom: 8px;
        color: #334155;
        font-size: 12px;
        font-weight: 600;
    }

    .ps-form-group label i {
        margin-right: 5px;
        color: #2563eb;
    }

    .ps-input {
        position: relative;
    }

    .ps-input input,
    .ps-input select {
        width: 100%;
        height: 43px;
        padding: 0 42px 0 13px;

        border: 1px solid #dbe1e8;
        border-radius: 9px;

        background: #fff;
        color: #334155;

        font-size: 12px;
        outline: none;

        transition: .2s;
    }

    .ps-input input::placeholder {
        color: #a5afbb;
    }

    .ps-input input:focus,
    .ps-input select:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, .08);
    }

    .ps-input > i {
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);

        color: #94a3b8;
        font-size: 13px;

        pointer-events: none;
    }

    .ps-error {
        margin-bottom: 20px;
        padding: 13px 15px;

        border: 1px solid #fecaca;
        border-radius: 9px;

        background: #fef2f2;
        color: #991b1b;

        font-size: 12px;
    }

    .ps-error strong {
        display: block;
        margin-bottom: 5px;
    }

    .ps-error ul {
        margin: 0;
        padding-left: 17px;
    }

    .ps-error li {
        margin-bottom: 2px;
    }

    .ps-form-footer {
        display: flex;
        justify-content: flex-end;
        gap: 8px;

        margin-top: 25px;
        padding-top: 20px;

        border-top: 1px solid #edf0f4;
    }

    .ps-btn {
        height: 38px;
        padding: 0 17px;

        border-radius: 8px;

        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;

        font-size: 11px;
        font-weight: 600;

        text-decoration: none;
        cursor: pointer;

        transition: .2s;
    }

    .ps-btn-back {
        border: 1px solid #e2e8f0;
        background: #f8fafc;
        color: #64748b;
    }

    .ps-btn-back:hover {
        background: #f1f5f9;
        color: #334155;
    }

    .ps-btn-save {
        border: none;
        background: linear-gradient(135deg, #172554, #2563eb);
        color: #fff;
    }

    .ps-btn-save:hover {
        color: #fff;
        transform: translateY(-1px);
        box-shadow: 0 5px 12px rgba(37, 99, 235, .18);
    }

    @media (max-width: 600px) {
        .ps-form-body {
            padding: 18px;
        }

        .ps-form-footer {
            flex-direction: column-reverse;
        }

        .ps-btn {
            width: 100%;
        }
    }
</style>


<div class="ps-form-page">

    <div class="ps-form-card">

        {{-- HEADER --}}

        <div class="ps-form-header">

            <h2>
                Tambah PlayStation
            </h2>

            <p>
                Tambahkan data PlayStation baru ke dalam sistem rental.
            </p>

        </div>


        {{-- BODY --}}

        <div class="ps-form-body">

            @if($errors->any())

                <div class="ps-error">

                    <strong>
                        <i class="bi bi-exclamation-circle-fill"></i>
                        Data belum dapat disimpan
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('ps.store') }}"
                method="POST"
            >

                @csrf


                {{-- NAMA PS --}}

                <div class="ps-form-group">

                    <label for="nama_ps">

                        <i class="bi bi-controller"></i>

                        Nama PlayStation

                    </label>

                    <div class="ps-input">

                        <input
                            type="text"
                            id="nama_ps"
                            name="nama_ps"
                            value="{{ old('nama_ps') }}"
                            placeholder="Contoh: PS 1"
                            required
                        >

                        <i class="bi bi-controller"></i>

                    </div>

                </div>


                {{-- JENIS PS --}}

                <div class="ps-form-group">

                    <label for="jenis_ps">

                        <i class="bi bi-grid-fill"></i>

                        Jenis PlayStation

                    </label>

                    <div class="ps-input">

                        <select
                            id="jenis_ps"
                            name="jenis_ps"
                            required
                        >

                            <option value="">
                                -- Pilih Jenis PS --
                            </option>

                            <option value="PS 4">
                                PS 4
                            </option>

                            <option value="PS 5">
                                PS 5
                            </option>

                        </select>

                        <i class="bi bi-chevron-down"></i>

                    </div>

                </div>


                {{-- HARGA --}}

                <div class="ps-form-group">

                    <label for="harga_per_jam">

                        <i class="bi bi-cash-stack"></i>

                        Harga Per Jam

                    </label>

                    <div class="ps-input">

                        <input
                            type="number"
                            id="harga_per_jam"
                            name="harga_per_jam"
                            value="{{ old('harga_per_jam') }}"
                            min="0"
                            placeholder="Contoh: 5000"
                            required
                        >

                        <i class="bi bi-currency-dollar"></i>

                    </div>

                </div>


                {{-- STATUS --}}

                <div class="ps-form-group">

                    <label for="status">

                        <i class="bi bi-toggle-on"></i>

                        Status PlayStation

                    </label>

                    <div class="ps-input">

                        <select
                            id="status"
                            name="status"
                            required
                        >

                            <option value="tersedia">
                                Tersedia
                            </option>

                            <option value="disewa">
                                Disewa
                            </option>

                            <option value="maintenance">
                                Maintenance
                            </option>

                        </select>

                        <i class="bi bi-chevron-down"></i>

                    </div>

                </div>


                {{-- BUTTON --}}

                <div class="ps-form-footer">

                    <a
                        href="{{ route('ps.index') }}"
                        class="ps-btn ps-btn-back"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Kembali

                    </a>


                    <button
                        type="submit"
                        class="ps-btn ps-btn-save"
                    >

                        <i class="bi bi-check-lg"></i>

                        Simpan PS

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection