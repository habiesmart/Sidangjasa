@extends('Auth.authBase')

@section('auth-content')

<!-- Back button -->
<button id="back-btn" class="btn position-absolute">
    <i class="fa-solid fa-arrow-left-long text-secondary fs-5 me-3"></i>
</button>
<h5 class="text-center mb-4"><strong>Reset Password</strong></h5>

<!-- Form -->
<form action="" class="row">
    <div class="input-group-sm mb-3">
        <label for="kredensial" class="form-label">Kode Pegawai</label>
        <input type="text" name="kredensial" class="form-control" id="kredensial">
    </div>

    <div class="col-md-6 input-group-sm mb-4">
        <label for="new_password" class="form-label">Password baru</label>
        <input type="password" name="new_password" class="form-control" id="new_password">
    </div>
    <div class="col-md-6 input-group-sm mb-4">
        <label for="new_password_confirm" class="form-label">Ketik ulang password baru</label>
        <input type="password" name="new_password_confirm" class="form-control" id="new_password_confirm">
    </div>
</form>

<!-- Submit Button -->
<button class="btn btn-warning px-4" type="button">
    Reset password
</button>

@endsection