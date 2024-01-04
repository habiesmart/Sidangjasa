@extends('Auth.authBase')

@section('auth-content')

<!-- Back button -->
<button id="back-btn" class="btn position-absolute">
    <i class="fa-solid fa-arrow-left-long text-secondary fs-5 me-3"></i>
</button>
<h5 class="text-center mb-4"><strong>Reset Password</strong></h5>

<!-- Form -->
<form action="" >
    <div class="input-group-sm mb-3">
        <label for="" class="form-label">Kode Pegawai</label>
        <input type="text" name="kredensial" class="form-control" id="">
    </div>
</form>

<!-- Submit Button -->
<button class="btn btn-warning px-4" type="button">
    Reset password
</button>

@endsection