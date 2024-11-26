<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Registrasi - BAKASe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="themes/images/logo unsrat.png">
    <style>
        .form-btns {
            margin-top: -20px; /* Sesuaikan nilai negatif sesuai kebutuhan Anda */
        }
    </style>
</head>

<body>

<div class="wrapper" style="background-image: url('kosong latar.png');">
    <div class="inner">
        <div class="image-holder">
            <img src="images/latar.png" alt="">
        </div>
        <form action="">
            <h3>Form Pendaftaran</h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Nama Lengkap" class="form-control">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="NIM" class="form-control">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">
                <select name="" id="" class="form-control">
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option> <!-- Typo correction -->
                </select>
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Confirm Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-btns">
                <button>Login
                    <i class="zmdi zmdi-arrow-left"></i>
                </button>
                <button>Daftar
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </div>
        </form>
    </div>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
