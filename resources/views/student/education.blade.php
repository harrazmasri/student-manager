@include('layout/header')

<div class="container top-5 text-light rounded-4 p-5 blur w-75">

    <div class="row w-100 bg-transparent">
        <a class="text-light fs-3 fit-content text-decoration-none" href="{{ url()->previous() }}"><i class="bi bi-arrow-left bg-transparent text-light fs-3 px-3"></i>Back</a>
    </div>

    <form id="update-form" action="{{ route('student.add_education', session()->get('ic_num')) }}" method="POST">
        @csrf

        <div class="my-3">
            <label class="form-label" for="upsr">UPSR</label>
            <input class="form-control bg-transparent text-light" id="upsr" name="upsr" type="text">
            <p class="form-text text-light">e.g 3A 2B</p>
        </div>

        <div class="my-3">
            <label class="form-label" for="pt3">PT 3</label>
            <input class="form-control bg-transparent text-light" id="pt3" name="pt3" type="text">
            <p class="form-text text-light">e.g 5A 2C</p>
        </div>

        <div class="my-3">
            <label class="form-label" for="svm">SVM</label>
            <input class="form-control bg-transparent text-light" id="svm" name="svm" type="text">
            <p class="form-text text-light">e.g CGPA 3.54</p>
        </div>

        <div class="my-3">
            <label class="form-label" for="dvm">DVM</label>
            <input class="form-control bg-transparent text-light" id="dvm" name="dvm" type="text">
            <p class="form-text text-light">e.g CGPA 4.00</p>
        </div>

        <div class="my-3">
            <label class="form-label" for="skm">SKM</label>
            <input class="form-control bg-transparent text-light" id="skm" name="skm" type="text">
            <p class="form-text text-light">e.g Level 3</p>
        </div>

        <div class="text-center pt-3">
            <button type="submit" name="update-btn" class="p-4 w-50 btn btn-dark">Submit</button>
        </div>
    </form>

</div>
<img src="{{ asset('media/bg.jpg') }}" alt="" class="login-bg">
<div id="bg-effect" class="login-bg"></div>


@include('layout/footer')
