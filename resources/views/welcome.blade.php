<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">

    {{-- Main CSS --}}
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body class="body">
    <div class="nav-tab" id="navigator_tab">
        <div class="row h-100 justify-content-around">
            <div class=" col-3 text-center align-self-center">
                <img src={{ asset('images/bda_logo.png') }}>
            </div>
            <div class="col-6">
                <div class="row h-100" id="menu">
                    <div class="col text-center align-self-center" id="contact">
                        <a class="text-gray" href="#">เกี่ยวกับเรา</a>
                    </div>
                    <div class="col text-center align-self-center" id="solution">
                        <a class="text-gray" href="#">BDA โซลูชั่น</a>
                    </div>
                    <div class="col text-center align-self-center" id="price">
                        <a class="text-gray" href="#">ราคา</a>
                    </div>
                    <div class="col text-center align-self-center" id="partner">
                        <a class="text-gray" href="#">บริษัทคู่ค้า</a>
                    </div>
                    <div class="col text-center align-self-center" id="leanmore">
                        <a class="text-gray" href="#">เรียนรู้เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                {{-- Empty Right --}}
            </div>
        </div>
    </div>

    <div class="content">
        <div class="banner" id="banner">
            <div class="row h-80 justify-content-center">
                <div class="align-self-center">
                    <div class="row justify-content-end">
                        <a class="col banner-text text-right" style="color: #FFCC00;">
                            BDA Cloud
                        </a>
                        <div class="col-1 vline ml-2 mr-3">

                        </div>
                    </div>
                </div>
                <div class="align-self-center">
                    <h4 class="row text-white text-res justify-content-center">สัมผัสประสบการณ์ Cloud storage
                        แบบใหม่ได้ที่นี่
                    </h4>
                    <a class="row text-white justify-content-center">คลิกเลย >></a>
                </div>
            </div>
            <p class="text-white text-center">
                <span style="font-size: 19px;">เริ่มต้นใช้งานฟรี!</span><span> 1 เดือนแรก</span>
            </p>
        </div>

        <div class="row justify-content-center" id="plan">
            <div class="row package-zone">
                <div class="mt-3 col-xl p-0 pr-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-bold text-gold">นักพัฒนาระบบ</h5>
                            <img class="center" src={{ asset('images/Icon_1.png') }}>
                            <a class="center text-14 text-gray">คุณกำลังเริ่มต้นสิ่งใหม่ๆ อยู่ใช่ไหม ?</a>
                            <div class="center">
                                <button class="btn btn-blue">เริ่มกันเลย !</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-xl p-0 pl-xl-1 pr-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-bold text-gold">ธุรกิจสตาร์ทอัพ</h5>
                            <img class="center" src={{ asset('images/Icon_2.png') }}>
                            <a
                                class="center text-14 text-gray">หากคุณกำลังมองหาสิ่งที่คุ้มค่าและตอบโจทย์กับธุรกิจของคุณ</a>
                            <div class="center">
                                <button class="btn btn-green">สัมผัสประสบการณ์ใหม่</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 col-xl p-0 pl-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-bold text-gold">องค์กรขนาดใหญ่</h5>
                            <img class="center" src={{ asset('images/Icon_3.png') }}>
                            <a class="center text-14 text-gray">คุณกำลังเริ่มต้นสิ่งใหม่ๆ อยู่ใช่ไหม ?</a>
                            <div class="center">
                                <button class="btn btn-purple">เพิ่มประสิทธิภาพสูงสุด</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center" id="package">
            <div class="card package-zone">
                <div class="card-body">
                    <h5 class="text-center text-bold">เลือกแพ็คเกจที่เหมาะกับคุณ</h5>
                    <a class="center text-gray">แพ็คเกจของเราเริ่มต้นที่ 639 บาท/เดือนเท่านั้น</a>
                    <div class="row m-2 mt-5">
                        <div class="col-xl-3 col-md-6 p-2">
                            <div class="package-blue">
                                <div class="card-body">
                                    <h5 class="text-gray text-bold">นักพัฒนาระบบ</h5>
                                    <img class="img-over" src={{ asset('images/Icon_4.png') }}>
                                    <p class="text-14">
                                        <span class="text-bold" style="font-size:30px;">639&nbsp;</span>
                                        <span style="font-size:20px;">บาท/เดือน</span>
                                    </p>
                                    <a class="text-14 text-gray">2 ผู้ใช้งาน</a>
                                    <div class="hline" style="border: 1px solid #299DF5;">
                                    </div>
                                    <p class="text-14">
                                        <span class="text-blue">10&nbsp;</span><span>โปรเจ็ค</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-blue">3&nbsp;</span><span>ลูกค้า</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-blue">ไม่จำกัด&nbsp;</span><span>จำนวนข้อความ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 p-2">
                            <div class="package-green">
                                <div class="card-body">
                                    <h5 class="text-gray text-bold">ธุรกิจสตาร์ทอัพ</h5>
                                    <img class="img-over" src={{ asset('images/Icon_5.png') }}>
                                    <p class="text-14">
                                        <span class="text-bold" style="font-size:30px;">969&nbsp;</span>
                                        <span style="font-size:20px;">บาท/เดือน</span>
                                    </p>
                                    <a class="text-14 text-gray">6 ผู้ใช้งาน</a>
                                    <div class="hline" style="border: 1px solid #34AA44;">
                                    </div>
                                    <p class="text-14">
                                        <span class="text-green">100&nbsp;</span><span>โปรเจ็ค</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-green">300&nbsp;</span><span>ลูกค้า</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-green">ไม่จำกัด&nbsp;</span><span>จำนวนข้อความ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 p-2">
                            <div class="package-gold">
                                <div class="card-body">
                                    <h5 class="text-brown text-bold">เพิ่มประสิทธิภาพ</h5>
                                    <img class="img-over" src={{ asset('images/Icon_6.png') }}>
                                    <p class="text-14">
                                        <span class="text-bold" style="font-size:30px;">1,899&nbsp;</span>
                                        <span class="text-brown" style="font-size:20px;">บาท/เดือน</span>
                                    </p>
                                    <a class="text-14 text-brown">15 ผู้ใช้งาน</a>
                                    <div class="hline" style="border: 1px solid #5A3325;">
                                    </div>
                                    <p class="text-14">
                                        <span class="text-gold">ไม่จำกัด&nbsp;</span><span
                                            class="text-brown">จำนวนโปรเจ็ค</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-gold">ไม่จำกัด&nbsp;</span><span
                                            class="text-brown">จำนวนลูกค้า</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-gold">ไม่จำกัด&nbsp;</span><span
                                            class="text-brown">จำนวนข้อความ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 p-2">
                            <div class="package-purple">
                                <div class="card-body">
                                    <h5 class="text-gray text-bold">องค์กรขนาดใหญ่</h5>
                                    <img class="img-over" src={{ asset('images/Icon_7.png') }}>
                                    <p class="text-14">
                                        <span class="text-bold" style="font-size:30px;">8,559&nbsp;</span>
                                        <span style="font-size:20px;">บาท/เดือน</span>
                                    </p>
                                    <a class="text-14 text-gray">100 ผู้ใช้งาน</a>
                                    <div class="hline" style="border: 1px solid #815DE6;">
                                    </div>
                                    <p class="text-14">
                                        <span class="text-purple">ไม่จำกัด&nbsp;</span><span>จำนวนโปรเจ็ค</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-purple">ไม่จำกัด&nbsp;</span><span>จำนวนลูกค้า</span>
                                    </p>
                                    <p class="text-14">
                                        <span class="text-purple">ไม่จำกัด&nbsp;</span><span>จำนวนข้อความ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center" id="table">
            <div class="card package-zone">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h4 class="text-bold table-name">BDA Cloud Service</h4>
                            </th>
                            <th scope="col">
                                <div class="row m-0 mb-3">
                                    <img src={{ asset('images/Icon_8.png') }}>
                                    <h5 class="text-gray align-self-center m-1">นักพัฒนาระบบ</h5>
                                </div>
                            </th>
                            <th scope="col">
                                <div class="row m-0 mb-3">
                                    <img src={{ asset('images/Icon_9.png') }}>
                                    <h5 class="text-gray align-self-center m-1">ธุรกิจสตาร์ทอัพ</h5>
                                </div>
                            </th>
                            <th scope="col">
                                <div class="row m-0 mb-3">
                                    <img src={{ asset('images/Icon_10.png') }}>
                                    <h5 class="text-gray align-self-center m-1">เพิ่มประสิทธิภาพ</h5>
                                </div>
                            </th>
                            <th scope="col">
                                <div class="row m-0 mb-3">
                                    <img src={{ asset('images/Icon_11.png') }}>
                                    <h5 class="text-gray align-self-center m-1">องค์กรขนาดใหญ่</h5>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">processor (Cpu)</p>
                            </td>
                            <td>
                                <p class="text-upper">1 x 2.70 GHz</p>
                            </td>
                            <td>
                                <p class="text-upper">2 x 2.70 ghz</p>
                            </td>
                            <td>
                                <p class="text-upper">3 x 2.70 ghz</p>
                            </td>
                            <td>
                                <p class="text-upper">4 x 2.70 ghz</p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">operating system</p>
                            </td>
                            <td>
                                <p class="text-upper">linux/windows</p>
                            </td>
                            <td>
                                <p class="text-upper">linux/windows</p>
                            </td>
                            <td>
                                <p class="text-upper">linux/windows</p>
                            </td>
                            <td>
                                <p class="text-upper">linux/windows</p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">storage</p>
                            </td>
                            <td>
                                <p class="text-upper">50 gb</p>
                            </td>
                            <td>
                                <p class="text-upper">75 gb</p>
                            </td>
                            <td>
                                <p class="text-upper">100 gb</p>
                            </td>
                            <td>
                                <p class="text-upper">125 gb</p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">additional storage</p>
                            </td>
                            <td>
                                <p class="text-upper">option</p>
                            </td>
                            <td>
                                <p class="text-upper">option</p>
                            </td>
                            <td>
                                <p class="text-upper">option</p>
                            </td>
                            <td>
                                <p class="text-upper">option</p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">ram</p>
                            </td>
                            <td>
                                <p class="text-upper">2 gb</p>
                            </td>
                            <td>
                                <p class="text-upper">3 gb</p>
                            </td>
                            <td>
                                <p class="text-upper">4 gb</p>
                            </td>
                            <td>
                                <p class="text-upper">5 gb</p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">data transfer</p>
                            </td>
                            <td>
                                <p class="text-upper">10 tb<br>bandwidth</p>
                            </td>
                            <td>
                                <p class="text-upper">15 tb<br>bandwidth</p>
                            </td>
                            <td>
                                <p class="text-upper">20 tb<br>bandwidth</p>
                            </td>
                            <td>
                                <p class="text-upper">30 tb<br>bandwidth</p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">ชำระราย 1 เดือน</p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">639</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">969</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">1,899</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">8,559</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">ชำระราย 1 ปี<br>ส่วนลด 15%</p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">543</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">823</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">1,614</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                            <td>
                                <p class="text-upper">
                                    <span style="font-size: 20px">7,275</span>
                                    <span style="font-size: 14px">บาท/ เดือน</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <p class="text-upper">ค่าติดตั้ง (ครั้งแรก)</p>
                            </td>
                            <td>
                                <button class="btn-clean">
                                    <p class="text-12 text-purple">ฟรี</p>
                                </button>
                            </td>
                            <td>
                                <button class="btn-clean">
                                    <p class="text-12 text-purple">ฟรี</p>
                                </button>
                            </td>
                            <td>
                                <button class="btn-clean">
                                    <p class="text-12 text-purple">ฟรี</p>
                                </button>
                            </td>
                            <td>
                                <button class="btn-clean">
                                    <p class="text-12 text-purple">ฟรี</p>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-3 justify-content-center" id="partner">
            <div class="card package-zone">
                <div class="card-body">
                    <h5 class="text-center text-bold">ลูกค้าที่ไว้วางใจให้เราดูแล</h5>
                    <div class="row justify-content-center">
                        <img class="col-2" src={{ asset('images/THAI_POST.png') }}>
                        <img class="col-2" src={{ asset('images/PPS.png') }}>
                        <img class="col-2" src={{ asset('images/NSP.png') }}>
                        <img class="col-2" src={{ asset('images/STEP.png') }}>
                        <img class="col-2" src={{ asset('images/CMU.png') }}>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 justify-content-center" id="contact">
            <div class="card package-zone">
                <div class="card-body mt-2 ml-5 mr-5">
                    <h5 class="text-bold">ติดต่อเรา</h5>
                    <div class="row">
                        <div class="col mr-5">
                            <div class="row form-group">
                                <label class="col-3 col-form-label">ชื่อ-นามสกุล</label>
                                <input type="text" class="col form-control" required>
                            </div>
                            <div class="row form-group">
                                <label class="col-3 col-form-label">อีเมล</label>
                                <input type="text" class="col form-control" required>
                            </div>
                            <div class="row form-group">
                                <label class="col-3 col-form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="col form-control" required>
                            </div>
                        </div>
                        <div class="col border-row">
                            <div class="row form-group">
                                <label class="col-3 col-form-label">หัวข้อ</label>
                                <select class="col form-control"></select>
                            </div>
                            <div class="row form-group">
                                <label class="col-3 col-form-label">รายละเอียด</label>
                                <textarea class="col form-control" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <button class="btn btn-violet">ส่ง<i class="ml-3 fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
