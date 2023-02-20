<nav class="navbar navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand text-light fs-3 fw-bold" href="#">Pengaduan</a>
    <div>
      @auth
      <form action="logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger mt-2">Logout</i></button>
      </form>
      @else
        <a class="navbar-brand text-light fs-2" href="#" data-bs-toggle="modal" data-bs-target="#modalSignin">
          <i class="bi bi-box-arrow-in-right"></i>
        </a>
        <a class="navbar-brand text-light fs-2" href="#"><i class="bi bi-person-circle"></i></a>
      @endauth
    </div>
  </div>

{{-- Form Login --}}
<div class="modal modal-signin fade" tabindex="-1" role="dialog" id="modalSignin" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-2 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Log in as Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="" action="login" method="post">
          @csrf
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Log in</button>
        </form>
      </div>
    </div>
  </div>
</div>
</nav>