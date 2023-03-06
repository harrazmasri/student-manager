@include('layout/header')

@if (isset($success))
    <div class="alert alert-success position-absolute top-10 start-50 translate-middle alert-dismissible fade show" role="alert">
        <div class="px-3">{{ $success }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif

<div class="container top-20 text-light rounded-4 p-5 blur w-75">
    <div class="d-flex flex-row">
        <div class="d-flex flex-row">
            <img class="avatar rounded-circle" src="{{ $student->avatar ? asset('storage/avatars/'.$student->avatar) : asset('media/avatar.jpg') }}" draggable="false" alt="">
            <p class="p-5 fs-3">{{ $username }}</p>
        </div>
        <a class="btn btn-dark icon-button m-4" href="{{ route('student.logout') }}"><i class="bi bi-box-arrow-right fs-1"></i></a>
    </div>

    <div class="d-flex flex-column">
        <a class="btn btn-dark text-light m-3 fs-3" href="{{ route('student.edit', ['id' => $ic_num]) }}"><i class="bi bi-pencil px-3"></i>Update personal details</a>
        <a class="btn btn-dark text-light m-3 fs-3" href="{{ route('student.view_education', ['id' => $ic_num]) }}"><i class="bi bi-book px-3"></i>Add education background</a>
        <a class="btn btn-dark text-light m-3 fs-3" href="{{ route('student.user', ['id' => $ic_num]) }}"><i class="bi bi-person px-3"></i>View personal details</a>
        <a class="btn btn-dark text-light m-3 fs-3" href="{{ route('student.delete', ['id' => $ic_num]) }}"><i class="bi bi-trash3 px-3"></i>Delete my account</a>
    </div>

</div>

<img src="{{ asset('media/bg.jpg') }}" alt="" class="login-bg">
<div id="bg-effect" class="login-bg"></div>


@include('layout/footer')
