<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/Layouts/Layout.css')}}">
    <script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name">{{ auth()->user()->nombre }}</span>
                    <span class="profession">{{ auth()->user()->tipo_usuario }}</span>
                </div>
            </div>
            <i class='fa-solid fa-caret-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i  class="fa-solid fa-magnifying-glass icon"></i>
                    <input type="text" placeholder="Buscar...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-circle-user icon"></i>
                            <span class="text nav-text">Perfil</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-users icon"></i>
                            <span class="text nav-text">Mi grupo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-user-plus icon"></i>
                            <span class="text nav-text">Inscripciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-pencil icon"></i>
                            <span class="text nav-text">Calificaciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-calculator icon"></i>
                            <span class="text nav-text">Promedios</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-a icon"></i>
                            <span class="text nav-text">Perfil Grupal</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i  class="fa-solid fa-chart-line icon"></i>
                            <span class="text nav-text">Estadisticas</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="{{route('login.destroy')}}">
                        <i class="fa-solid fa-right-from-bracket icon"></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class="fa-solid fa-moon icon moon"></i>
                        <i class="fa-solid fa-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Modo Noche</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">Ignacio Zaragoza</div>
        <div class="general-container">
			@yield('content')
		</div>
    </section>
    <script src="{{asset('JS/layout.js')}}"></script>
</body>
</html>