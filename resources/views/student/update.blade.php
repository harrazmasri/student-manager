@include('layout/header')

<div class="container top-5 text-light rounded-4 p-5 blur w-75">

    <div class="row w-100 bg-transparent">
        <a class="text-light fs-3 fit-content text-decoration-none" href="{{ url()->previous() }}"><i class="bi bi-arrow-left bg-transparent text-light fs-3 px-3"></i>Back</a>
    </div>

    <form action="{{ route('student.update', $student->ic_num ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-row">
            <div class="left w-50 p-5">
                <div class="d-flex flex-row">
                    <img class="w-25 mx-3 rounded-circle" src="{{ $student->avatar ? asset('storage/avatars/'.$student->avatar) : asset('media/avatar.jpg') }}" draggable="false" alt="">
                    <input class="form-control bg-transparent text-light" type="file" name="avatar" id="avatar" value="{{ $student->avatar }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="ic_num">MyKad Number</label>
                    <input class="form-control bg-transparent text-light" id="ic_num" name="ic_num" type="text"
                        class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->ic_num }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control bg-transparent text-light" id="username" name="username" type="text"
                        class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->username }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control bg-transparent text-light" id="password" name="password" type="password"
                        class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->password }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="name">Full Name</label>
                    <input class="form-control bg-transparent text-light" id="name" name="name" type="text"
                        class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->name }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="age">Age</label>
                    <input class="form-control bg-transparent text-light" id="age" name="age" type="number"
                        class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->age }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="phone_num">Phone Number</label>
                    <input class="form-control bg-transparent text-light" id="phone_num" name="phone_num" type="number"
                        class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->phone_num }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="gender">Gender</label>
                    <div class="input-group bg-transparent text-light mb-3">
                        <label class="input-group-text bg-transparent text-light" for="gender">Options</label>
                        <select class="form-select bg-dark text-light" name="gender" id="gender" value="{{ $student->gender }}">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <p class="form-text text-secondary">We won't acknowledge any other gender, so please insert your gender
                        based on your birth certificate.</p>
                </div>
                <div class="my-3">
                    <label class="form-label" for="language">Communicating Language</label>
                    <input class="form-control bg-transparent text-light" id="language" name="language" type="text" value="{{ $student->language }}">
                </div>
            </div>
            <div class="right w-50 p-5">
                <div class="my-3">
                    <label class="form-label" for="biography">Biography</label>
                    <textarea id="biography" name="biography" type="text" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light">{{ $student->biography }}</textarea>
                </div>
                <div class="my-3">
                    <label class="form-label" for="course">Course</label>
                    <div class="input-group bg-transparent text-light mb-3">
                        <label class="input-group-text bg-transparent text-light" for="course">Options</label>
                        <select class="form-select bg-dark text-light" name="course" id="course" value="{{ $student->course }}">
                            <option value="Sistem Aplikasi Pengurusan Pangkalan Data dan Aplikasi Web">Sistem Aplikasi Pengurusan Pangkalan Data dan Aplikasi Web</option>
                            <option value="Sistem Komputer dan Rangkaian">Sistem Komputer dan Rangkaian</option>
                            <option value="Seni Kulinari">Seni Kulinari</option>
                            <option value="Akaun">Akaun</option>
                            <option value="Penyaman Udara dan Penyejuk Beku">Penyaman Udara dan Penyejuk Beku</option>
                            <option value="Automotif">Automotif</option>
                            <option value="Seni Fesyen">Seni Fesyen</option>
                        </select>
                    </div>
                </div>
                <div class="my-3">
                    <label class="form-label" for="address">Address</label>
                    <textarea id="address" name="address" type="text" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light">{{ $student->address }}</textarea>
                </div>
                <div class="my-3">
                    <label class="form-label" for="nationality">Nationality</label>
                    <input class="form-control bg-transparent text-light" id="nationality" name="nationality" type="text" class="form-control opacity opacity-2 border border-secondary p-3 my-4 text-light" value="{{ $student->nationality }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="religion">Religion</label>
                    <div class="input-group bg-transparent text-light mb-3">
                        <label class="input-group-text bg-transparent text-light" for="religion">Options</label>
                        <select class="form-select bg-dark text-light" name="religion" id="religion" value="{{ $student->religion }}">
                            <option value="Islam">Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Christian">Christian</option>
                            <option value="Atheist">Atheist</option>
                        </select>
                    </div>
                </div>
                <div class="my-3">
                    <label class="form-label" for="race">Race</label>
                    <div class="input-group bg-transparent text-light mb-3">
                        <label class="input-group-text bg-transparent text-light" for="race">Options</label>
                        <select class="form-select bg-dark text-light" name="race" id="race" value="{{ $student->race }}">
                            <option value="Melayu">Melayu</option>
                            <option value="Chinese">Chinese</option>
                            <option value="India">India</option>
                            <option value="Sikh">Sikh</option>
                            <option value="Native">Native</option>
                            <option value="Cat">Cat</option>
                        </select>
                    </div>
                </div>
                <div class="my-3">
                    <label class="form-label" for="skill">Skill</label>
                    <input class="form-control bg-transparent text-light" id="skill" name="skill" type="text" value="{{ $student->skill }}">
                </div>
                <div class="my-3">
                    <label class="form-label" for="curricular">Voluntary Curricular Activities / Achievements</label>
                    <textarea class="form-control bg-transparent text-light" id="curricular" name="curricular" type="text">{{ $student->curricular }}</textarea>
                </div>
            </div>
        </div>

        <div class="text-center pt-3">
            <button type="submit" name="update-btn" class="p-4 w-50 btn btn-dark">Update</button>
        </div>
    </form>

</div>
<img src="{{ asset('media/bg.jpg') }}" alt="" class="login-bg">
<div id="bg-effect" class="login-bg"></div>


@include('layout/footer')
