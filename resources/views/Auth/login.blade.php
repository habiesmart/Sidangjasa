@extends('Auth.authBase')

@section('auth-content')
<h5 class="text-center mb-4"><strong>Masuk ke Aplikasi</strong></h5>

<form action="{{route('login')}}" method="POST">
	@csrf
    <!-- Email input -->
    <div class="input-group-sm mb-3">
		<label class="form-label" for="email">Alamat Email</label>
		<input type="text" id="email" name="email" class="form-control" />
    </div>
  
    <!-- Password input -->
	<div class="input-group-sm mb-4">
		<label class="form-label" for="password">Password</label>
		<input type="password" id="password" name="password" class="form-control" />
	</div>
  
    <!-- 2 column grid layout for inline styling -->
	<div class="row mb-3">
		<div class="col d-flex">
		<!-- Checkbox -->
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="remember" name="remember" checked />
			<label class="form-check-label" for="remember"> Simpan akun </label>
		</div>
		</div>

		{{-- <div class="col">
		<!-- Simple link -->
		<a href="#!">Forgot password?</a>
		</div> --}}
	</div>
  
    <!-- Submit button -->
    <button type="button" class="btn btn-primary px-4">Log in</button>
	<!-- Reset pass button -->
	<button type="button" class="btn text-secondary">
		<u>Lupa Password</u>
	</button>

</form>
@endsection