<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>GattiDev ~ Calendario de Alquileres :: Login</title>
        
        <link rel="stylesheet" href="css/login_style.css">
    </head> 
    
    <body>
        <div id="login-button"></div>
        <div id="container">
            
            <h1>Iniciar sesión</h1>
      
            <span class="close-btn">
                <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>

            <h4>Ezequiel</h4>
      
            <form id="form_login" class="inp" action="controllers/validation.php" method='post'>               
                <label for="inp">
                    <input type="password" name="password" id="inp" placeholder="Password" pattern=".{8,}" maxlength="17" required>
                    <svg width="280px" height="18px" viewBox="0 0 280 18" class="border">
                        <path d="M0,12 L223.166144,12 C217.241379,12 217.899687,12 225.141066,12 C236.003135,12 241.9279,12 249.827586,12 C257.727273,12 264.639498,12 274.514107,12 C281.097179,12 281.755486,12 276.489028,12"></path>
                    </svg>
                    <svg width="14px" height="12px" viewBox="0 0 14 12" class="check">
                        <path d="M1 7 5.5 11 L13 1"></path>
                    </svg>
                </label>

                <div id="remember-container">
          
                    <span id="forgotten">Contraseña olvidada</span>
                </div>
            </form>

            
        </div>
        
        <!-- Contraseña Olvidada -->
        <div id="forgotten-container" class="container">
            
            <h1>Olvidada</h1>
            
            <span class="close-btn">
                <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
            </span>

            <form action="controllers/recover_password.php" method='post'>
                <input class="email_input" type="email" name="email" placeholder="E-mail">
                <button type="submit" class="btn">Obtener contraseña</button>                    
            </form>
        </div>
                 
    </body>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/login_script.js"></script>
</html>
