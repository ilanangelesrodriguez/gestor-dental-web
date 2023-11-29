<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BernalDent | Home</title>
    <link rel="icon" href="../media/logo-empresa.png" type="image/png">


    <meta name="theme-color" content="#0373BF">

    <link rel="stylesheet" href="../public/css/output.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body id="body">
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
        <a href="" class="header__bar"></a>
        <div class="header__user flex justify-center">
            <a href="../public/login.php" class="header__login flex px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
                <?php
                $base_path = __DIR__;
                include dirname($base_path) . '/media/user.svg';
                ?>
                Entrar
            </a>

            <button class="w-32 h-10 text-white bg-gradient-to-r from-indigo-500 via-blue-500 to-sky-500 rounded-lg shadow hover:scale-105 duration-200 hover:drop-shadow-2xl hover:shadow-[#7dd3fc] hover:cursor-pointer">
                <a href="../public/registro.php">
                    Registrarse
                </a>
            </button>

        </div>

    </nav>

</header>

<div id="navbar" class="navbar__footer">
    <a href="#home">
        <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M13.45 2.533a2.25 2.25 0 0 0-2.9 0L3.8 8.228a2.25 2.25 0 0 0-.8 1.72v9.305c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V15.25c0-.68.542-1.232 1.217-1.25h2.566a1.25 1.25 0 0 1 1.217 1.25v4.003c0 .966.784 1.75 1.75 1.75h3a1.75 1.75 0 0 0 1.75-1.75V9.947a2.25 2.25 0 0 0-.8-1.72l-6.75-5.694Z"/>
        </svg>
    </a>

    <a href="#service">
        <svg width="35" height="32" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" fill-rule="evenodd" d="M6 1a1.75 1.75 0 0 0-1.75 1.75V4H3a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.25V2.75A1.75 1.75 0 0 0 10 1H6Zm4.25 3V2.75A.25.25 0 0 0 10 2.5H6a.25.25 0 0 0-.25.25V4h4.5ZM3 5.5h10a.5.5 0 0 1 .5.5v1h-11V6a.5.5 0 0 1 .5-.5Zm-.5 3V13a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8.5H9V10H7V8.5H2.5Z" clip-rule="evenodd"/>
        </svg>
    </a>

    <a href="#calendar">
        <svg width="35" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/>
            <path class="svg__path" fill="#6b7280" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"/>
        </svg>
    </a>

    <a href="#aboutus">
        <svg width="35" height="32" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
            <path class="svg__path" fill="#6b7280" d="M96 128a128 128 0 1 1 256 0a128 128 0 1 1-256 0zM0 482.3C0 383.8 79.8 304 178.3 304h91.4c98.5 0 178.3 79.8 178.3 178.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4c89.1 0 161.3 72.2 161.3 161.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9c19.7-26.6 31.3-59.5 31.3-95.1c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
        </svg>
    </a>
</div>

