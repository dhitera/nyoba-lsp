@extends('layouts.main')
@section('content')
    <div class="container w-75">
        {{-- Alert Section --}}
        @if (session('status') == 1)
            <div class="alert alert-success alert-dismissible fade show " role="alert">
                <i class="bi bi-info-circle-fill"></i>
                Terimakasih sudah melapor! <br>
                <strong>No. Pelaporan anda adalah {{ $noUrut -1 }}</strong>
                <div class="vr"></div>
                <small class="text-muted">Mohon untuk diingat</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('status') == 2)
            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                <i class="bi bi-exclamation-triangle-fill"></i>
                NIK yang anda gunakan salah atau belum terdaftar!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Form Section --}}
        <form action="formAspirasi" method="POST" class="bg-secondary bg-opacity-50 rounded-3 p-2">
            @csrf
            <div class="mb-2 d-flex">
                <label class="form-label fs-5 fw-bold me-2">No. Lapor :</label><br>
                <input type="text" class="form-control bg-primary text-white bg-opacity-75 text-center" name="id_aspirasi" style="width: 15%" value="{{ $noUrut }}" readonly>
            </div>
            <div class="mb-2">
                <label for="nik" class="form-label fs-5 fw-bold">NIK</label>
                <input type="text" class="form-control w-25" id="nik" name="nik" minlength="16" maxlength="16" autofocus required>
            </div>
            <div class="mb-2">
                <label class="form-label fs-5 fw-bold">Kategori</label>
                <select class="form-select" name="kategori_id">
                    @foreach ($kategori as $ktg)
                        <option value="{{ $ktg->id }}">{{ $ktg->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="Lokasi" class="form-label fs-5 fw-bold">Lokasi</label>
                <input type="text" class="form-control" id="Lokasi" name="lokasi" required>
            </div>
            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label fs-5 fw-bold">Aspirasi / Keluhan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" required></textarea>
            </div>
            <div class="mb-1">
                <button type="submit" class="btn btn-lg btn-success w-100">Kirim!</button>
            </div>
        </form>
    </div>
@endsection