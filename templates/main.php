<main id="home" class="main flex bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
    <div class="main__description">
        <span class="main__decription-span flex flex-row items-center">
            <svg height="30" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg">
                <path fill="#ffffff" d="M1024 512q70 0 132-20t124-44t123-44t133-20v128q-44 0-84 9t-78 24t-78 31t-81 31t-89 23t-102 10q-55 0-102-9t-89-24t-80-31t-78-31t-79-23t-84-10V384q69 0 132 20t124 44t124 44t132 20zm1024 67q0 177-26 360t-76 363t-126 349t-173 319q-24 36-61 57t-81 21q-55 0-99-31t-61-84l-178-532q-35 4-71 5t-72 2q-36 0-72-1t-71-6l-178 532q-17 52-61 83t-99 32q-44 0-81-21t-61-57q-98-149-173-318t-125-349t-77-363T0 579q0-112 34-216t99-185T293 49T510 0q71 0 133 20t124 44t123 44t134 20q71 0 133-20t124-44t123-44t134-20q122 0 217 48t160 129t99 185t34 217zm-128 2q0-93-25-175t-75-144t-126-98t-175-36q-58 0-111 20t-112 44t-124 44t-148 20q-83 0-148-20t-124-44t-114-44t-122-20q-97 0-170 38T225 267t-73 144t-24 170q0 98 11 211t34 234t55 241t75 236t95 216t112 182q15 19 38 19q12 0 31-36t40-94t45-126t43-133t37-118t24-77q8-26 30-45t52-20q44 0 87 4t87 5q44 0 87-4t87-5q29 0 51 19t31 46q8 24 24 77t36 117t44 134t44 126t41 93t31 37q23 0 38-19q60-80 112-182t94-216t75-235t55-241t34-234t12-212z"/>
            </svg>
            <p>Sonrisa - Radiante</p>
        </span>
        <h2 class="main__description-title">
            Empieza a sonreír más, ¡tu acceso a una sonrisa radiante te espera!
        </h2>
        <p class="main__description-content">
            Tu sonrisa es valiosa y cuidar de ella nunca fue tan fácil. Regístrate hoy y olvídate de las preocupaciones. Tu sonrisa merece lo mejor, y estamos aquí para hacerte la vida más sencilla. ¡Únete ahora y descubre la diferencia!
        </p>

        <button class="hover:scale-95 duration-300 relative group cursor-pointer text-sky-50  overflow-hidden h-13 w-64 rounded-md bg-sky-200 p-2 flex justify-center items-center">

            <div class="absolute right-32 -top-4  group-hover:top-1 group-hover:right-2 z-10 w-40 h-40 rounded-full group-hover:scale-150 duration-500 bg-sky-900"></div>
            <div class="absolute right-2 -top-4  group-hover:top-1 group-hover:right-2 z-10 w-32 h-32 rounded-full group-hover:scale-150  duration-500 bg-sky-800"></div>
            <div class="absolute -right-12 top-4 group-hover:top-1 group-hover:right-2 z-10 w-24 h-24 rounded-full group-hover:scale-150  duration-500 bg-sky-700"></div>
            <div class="absolute right-20 -top-4 group-hover:top-1 group-hover:right-2 z-10 w-16 h-16 rounded-full group-hover:scale-150  duration-500 bg-sky-600"></div>
            <p class="z-10">Comenzar ahora</p>
        </button>

    </div>
    <div class="main__image">
        <?php
        include dirname($base_path) . '/templates/icon-main.php';
        ?>
    </div>

</main>
