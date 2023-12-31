<nav>
    {{-- <div class="menuToggle"></div> --}}
    <i class='bx bx-menu menuToggle'></i>
    <div class="nav">
        <a href="/" class="nav-logo">
            <img src="{{ asset('assets/imgs/logo.png') }}">
        </a>
        <ul class="nav-links">
            <li>
                <a href="">Inicio</a>
            </li>
            <li>
                <a href="">Servicios</a>
            </li>
            <li>
                <a href="">Nosotros</a>
            </li>
            <li>
                <a href="">Productos</a>
            </li>
            <li>
                <a href="">Contacto</a>
            </li>
        </ul>
    </div>
    <div class="profile">
        <input type="checkbox" id="toggle" class="check">
        <label class="toggle" for="toggle">
            <i class='bx bx-sun'></i>
            <i class="bx bx-moon"></i>
            <span class="ball"></span>
        </label>
    </div>
    @auth
        <div class="profile">
            {{-- @foreach ($users as $user) --}}
            <h3>Usuario<br><span>Administrador</span></h3>
            <div class="imgBox">
                <img src="{{ asset('assets/imgs/user.png') }}">
            </div>
            {{-- @endforeach --}}
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('profile.edit') }}">
                        <ion-icon name="person-outline"></ion-icon>PERFIL
                    </a>
                </li>
                @can('admin.home')
                    <li>
                        <a href="{{ route('admin.home') }}">
                            <ion-icon name="chatbubble-outline"></ion-icon>Dashboard
                        </a>
                    </li>
                @endcan
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <ion-icon name="log-out-outline">
                            </ion-icon>Cerrar sesión
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <div>
        @else
            <div class="profile">
                <a href="{{ route('login') }}" class="btn btn-login">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn btn-register">Registrarse</a>
            </div>
        @endauth
    </div>
</nav>
