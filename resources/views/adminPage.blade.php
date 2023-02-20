@extends('layouts.main')
@section('content')
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="#pengaduan" data-bs-toggle="tab">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#histori" data-bs-toggle="tab">Link</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
        <div class="tab-pane d-flex justify-content-center" id="pengaduan" role="tabpanel">
            <select class="form-select w-25 me-4" aria-label="Default select example">
                <option selected>Pilih Kategori</option>
                @foreach ($kategori as $ktg)
                <option value="{{ $ktg->id }}">{{ $ktg->kategori }}</option> 
                @endforeach
            </select>
            <input type="text" class="w-25 me-4" placeholder="Cari berdasarkan Nama...">
            <input type="date">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                <i class="bi bi-search"></i>
            </button>
        </div>
        <div class="tab-pane active" id="histori" role="tabpanel">
            
        </div>
    </div>
  </div>
@endsection