@extends('Auth.authBase')

@section('auth-content')
<h4 class="text-center mb-5"><strong>{{__("Registrasi Akun")}}</strong></h4>

<form action="{{route('register')}}" method="POST" class="row">
    @csrf

    <!-- Name input -->
    <div class="col-md-6 input-group-sm mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>

    <!-- Email input -->
    <div class="col-md-6 input-group-sm mb-3">
        <label class="form-label" for="email">Alamat Email</label>
        <input type="email" id="email" name="email" class="form-control" />
    </div>

    <!-- Kode Pegawai input -->
    <div class="input-group-sm mb-3">
        <label class="form-label" for="kredensial">Kode Pegawai</label>
        <input type="text" id="kredensial" name="kredensial" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="col-md-6 input-group-sm mb-3">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" />
    </div>
    
    <!-- Confirm Password input -->
    <div class="col-md-6 input-group-sm mb-4">
        <label class="form-label" for="password_confirmation">Ulangi Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <!-- <div class="row mb-4">
        <div class="col d-flex justify-content-center"> -->
            <!-- Checkbox -->
            <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

        <div class="col"> -->
            <!-- Simple link -->
            <!-- <a href="#!">Forgot password?</a>
        </div>
    </div> -->

    <!-- Submit button -->
    <div class="d-grid">
       <button type="button" class="btn btn-primary px-4">Registrasi Akun</button>
    </div>
</form>

@endsection