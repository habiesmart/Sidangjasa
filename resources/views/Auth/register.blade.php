{{__("Register form")}}
<form action="{{route('register')}}" method="POST">
    @csrf

    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" />
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="email">Email address</label>
        <input type="text" id="email" name="email" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" />
    </div>
    
    <!-- Confirm Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="password_confirmation">Password Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
    </div>
    
    <!-- Submit button -->
    <button type="button" class="btn btn-primary btn-block mb-4">Log in</button>
</form>