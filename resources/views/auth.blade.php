@include('layout/header')

<div class="container top-20 text-light rounded-4 p-5 blur w-25">
    <h1>KVS Management Dashboard</h1>
    @if (isset($success))
        <div class="alert alert-success">{{ $success }}</div>
    @endif
    @if (isset($error))
        <div class="alert alert-dark">{{ $error }}</div>
    @endif

    {{-- login to register switch buttons --}}
    <div class="switch d-flex flex-row my-4">
        <button id="login-button" type="button" class="text-light bg-transparent border border-0 fs-5">Login</button>
        <button id="register-button" type="button" class="text-secondary bg-transparent border border-0 fs-5">Register</button>
    </div>

    {{-- login form --}}
    <form id="login-form" action="{{ route('login.auth') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input name="username" type="text" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="harrazmasri">

        <label for="password">Password</label>
        <input name="password" type="password" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="123">

        <div class="text-center pt-3">
            <button type="submit" name="login-btn" class="p-4 w-50 btn btn-dark">Login</button>
        </div>
    </form>

    {{-- register form --}}
    <form id="register-form" action="{{ route('register.auth') }}" method="POST">
        @csrf
        <label for="ic_num">MyKad Number</label>
        <input name="ic_num" type="text" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="123456789012">

        <label for="username">Username</label>
        <input name="username" type="text" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="harrazmasri">

        <label for="password">Password</label>
        <input name="password" type="password" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="123">

        <label for="repeat-password">Repeat Password</label>
        <input name="repeat-password" type="password" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="123">

        <div class="text-center pt-3">
            <button type="submit" name="reg-btn" class="p-4 w-50 btn btn-dark">Register</button>
        </div>
    </form>

</div>

<img src="{{ asset('media/bg.jpg') }}" alt="" class="login-bg">
<div id="bg-effect" class="login-bg"></div>

@include('layout/footer')
