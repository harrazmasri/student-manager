@include('layout/header')

<div class="paper-size shadow-lg">
    <div class="width-100 d-flex flex-row">
        <div class="left px-3 pb-3 width-40 text-light">
            <img class="rounded-circle width-80 mx-4 mb-5 shadow"
                src="{{ $student->avatar ? asset('storage/avatars/' . $student->avatar) : asset('media/avatar.jpg') }}"
                draggable="false" alt="">
            <h1 class="title"><i class="bi bi-chat-square-text-fill"></i> About Me</h1>
            <h2 class="text-light fs-6 p-2">{{ $student->biography ? $student->biography : '-' }}</h2>

            <h1 class="title"><i class="bi bi-person-fill"></i> Personal Particulars</h1>
            <table class="m-0 p-0">
                <thead>
                  <tr>
                    <th class="text-light fs-6 p-2 fw-bold" scope="row">Age</th>
                    <td class="text-light fs-6 p-2">{{ $student->age ? $student->age : '-' }}</td>
                  </tr>
                  <tr>
                    <th class="text-light fs-6 p-2 fw-bold" scope="row">Nationality</th>
                    <td class="text-light fs-6 p-2">{{ $student->nationality ? $student->nationality : '-' }}</td>
                  </tr>
                  <tr>
                    <th class="text-light fs-6 p-2 fw-bold" scope="row">Religion</th>
                    <td class="text-light fs-6 p-2">{{ $student->religion ? $student->religion : '-' }}</td>
                  </tr>
                  <tr>
                    <th class="text-light fs-6 p-2 fw-bold" scope="row">Gender</th>
                    <td class="text-light fs-6 p-2">{{ $student->gender ? $student->gender : '-' }}</td>
                  </tr>
                  <tr>
                    <th class="text-light fs-6 p-2 fw-bold" scope="row">Race</th>
                    <td class="text-light fs-6 p-2">{{ $student->race ? $student->race : '-' }}</td>
                  </tr>
                </thead>
              </table>


            <h1 class="title"><i class="bi bi-telephone-fill"></i> Contact Me</h1>
            <h2 class="text-light fs-6 p-2">{{ $student->address ? $student->address : '-' }}</h2>
            <h2 class="text-light fs-6 p-2">+60 {{ $student->phone_num ? $student->phone_num : '-' }}</h2>

        </div>

        <div class="right px-4 pb-4 width-60 ">
            {{-- name and course --}}
            <p class="text-dark fs-2 pt-3">{{ $student->name ? $student->name : '-' }}</p>
            <p class="text-dark fs-6 pb-4">{{ $student->course ? $student->course : '-' }}</p>

            <h1 class="title"><i class="bi bi-mortarboard-fill"></i> Education Background</h1>
            <table class="m-0 p-0">
                <tbody>
                    <tr>
                        <td>
                            <h1 class="text-dark fs-5 p-2 fw-bold">UPSR</h1>
                            <h2 class="text-dark fs-6 p-2">{{ $education->upsr ? $education->upsr : '-' }}</h2>
                        </td>
                        <td>
                            <h1 class="text-dark fs-5 p-2 fw-bold">PT3</h1>
                            <h2 class="text-dark fs-6 p-2">{{ $education->pt3 ? $education->pt3 : '-' }}</h2>
                        </td>
                        <td>
                            <h1 class="text-dark fs-5 p-2 fw-bold">SVM</h1>
                            <h2 class="text-dark fs-6 p-2">{{ $education->svm ? $education->svm : '-' }}</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1 class="text-dark fs-5 p-2 fw-bold">DVM</h1>
                            <h2 class="text-dark fs-6 p-2">{{ $education->dvm ? $education->dvm : '-' }}</h2>
                        </td>
                        <td>
                            <h1 class="text-dark fs-5 p-2 fw-bold">SKM</h1>
                            <h2 class="text-dark fs-6 p-2">{{ $education->skm ? $education->skm : '-' }}</h2>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h1 class="title"><i class="bi bi-translate"></i> Language</h1>
            <h2 class="text-dark fs-6 p-2">{{ $student->language ? $student->language : '-' }}</h2>

            <h1 class="title"><i class="bi bi-tools"></i> Skills</h1>
            <h2 class="text-dark fs-6 p-2">{{ $student->skill ? $student->skill : '-' }}</h2>

            <h1 class="title"><i class="bi bi-award-fill"></i> Voluntary curricular activities / Achievements</h1>
            <h2 class="text-dark fs-6 p-2">{{ $student->curricular ? $student->curricular : '-' }}</h2>
        </div>
    </div>
    <div class="strip-1"></div>
    <div class="strip-2"></div>
</div>


@include('layout/footer')
