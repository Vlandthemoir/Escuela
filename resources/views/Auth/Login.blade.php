<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('CSS/Auth/Login.css')}}">
        <script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
        <title>Ignacio Zaragoza</title>
    </head>
    <body>
        <div class="general-container">
            <div class="form">
                <form class="" action="/" method="POST">
                    @csrf
                    <div class="icon">
                        <i id="icon" class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <label for=""><b>Ignacio Zaragoza</b></label>
                    <input type="email" name="correo" placeholder="Correo">
                    <input type="password" name="contraseña" placeholder="Contraseña">
                    <button type="submit" name="button"><b>Iniciar Sesion</b></button>
                </form>
            </div>
        </div>
    </body>
</html>