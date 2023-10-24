<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent</title>
    <meta name="theme-color" content="#0373BF">
    <link rel="stylesheet" href="../public/css/output.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<header class="header flex justify-center space-x-10">
    <div class="icon flex">
        <?php
        $base_path = __DIR__;
        include dirname($base_path) . '/templates/icon-dental.php';
        ?>
        <h3 class="icon__h3 px-3 py-2 text-black font-semibold">
            Bernal<span class="icon__span">Dent</span>
        </h3>

    </div>
    <nav class="header__nav flex justify-center space-x-4">
        <a href="#home" class="header__nav-a px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Inicio</a>
        <a href="#service" class="header__nav-a px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Servicios</a>
        <a href="#aboutus" class="header__nav-a px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Sobre Nosotros</a>
        <a href="#contact" class="header__nav-a px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Contacto</a>
        <a href="" class="header__bar"></a>
        <div class="header__user flex justify-center">
            <a href="" class="header__login flex px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/media/user.svg';
                ?>
                Entrar
            </a>

            <button class="w-32 h-10 text-white bg-gradient-to-r from-indigo-500 via-blue-500 to-sky-500 rounded-lg shadow hover:scale-105 duration-200 hover:drop-shadow-2xl hover:shadow-[#7dd3fc] hover:cursor-pointer">
                Registrarse
            </button>

        </div>

    </nav>

</header>
