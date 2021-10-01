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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
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
                        <a class="text-secondary" href="#">เกี่ยวกับเรา</a>
                    </div>
                    <div class="col text-center align-self-center" id="solution">
                        <a class="text-secondary" href="#">BDA โซลูชั่น</a>
                    </div>
                    <div class="col text-center align-self-center" id="price">
                        <a class="text-secondary" href="#">ราคา</a>
                    </div>
                    <div class="col text-center align-self-center" id="partner">
                        <a class="text-secondary" href="#">บริษัทคู่ค้า</a>
                    </div>
                    <div class="col text-center align-self-center" id="leanmore">
                        <a class="text-secondary" href="#">เรียนรู้เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                {{-- Empty Right --}}
            </div>
        </div>
    </div>
    <div class="banner" id="banner">
        <div class="row h-80 justify-content-center">
            <div class="align-self-center">
                <div class="row justify-content-end">
                    <a class="col banner-text text-right" style="color: #FFCC00;">
                        BDA Cloud
                    </a>
                    <div class="col-1 vl ml-2 mr-3">
    
                    </div>
                </div>
            </div>
            <div class="align-self-center">
                <h4 class="row text-white justify-content-center">สัมผัสประสบการณ์ Cloud storage แบบใหม่ได้ที่นี่</h4>
                <a class="row text-white justify-content-center">คลิกเลย >></a>
            </div>
        </div>
        <a class="row text-white justify-content-center">เริ่มต้นใช้งานฟรี! 1 เดือนแรก</a>
    </div>
</body>

</html>
