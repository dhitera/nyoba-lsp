<nav class="navbar navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand text-light fs-3 fw-bold" href="#">Pengaduan</a>
    <div>
      <a class="navbar-brand text-light fs-2" href="search" data-bs-toggle="modal" data-bs-target="#modalPencarian">
        <i class="bi bi-search"></i>
      </a>
      <a class="navbar-brand text-light fs-2" href="#"><i class="bi bi-person-circle"></i></a>
    </div>
  </div>

  {{-- Pop-Up Pencarian --}}
  <div class="modal fade" id="modalPencarian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cari Aspirasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="d-flex" role="search">
            @csrf
            <input class="form-control me-1" type="search" placeholder="Cari berdasarkan Nomor Laporan" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

</nav>