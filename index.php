<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/includes_css.php'; ?>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <main>
        <div class="row no-margin">
            <div class="col l4 hide-on-med-and-down login_img">
            </div>
            <div class="col s12 l8">
                <div class="container_form">
                    <h5 class="center">BUENAS TARDES BIENVENIDO</h5>
                    <div class="divider"></div>
                    <form id="loginForm" action="" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="user_email" type="email">
                                <label for="user_email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock</i>
                                <input id="user_password" type="password">
                                <label for="user_password">Contraseña</label>
                            </div>
                        </div>
                    </form>
                    <div class="divider"></div>
                    <button class="btn waves-effect waves-light indigo accent-2 right" style="top: 10px;" type="submit" form="loginForm" value="Submit">
                        Ingresar
                    </button>
                </div>
            </div>
        </div>
    </main>

    <?php include 'components/includes_js.php'; ?>
</body>

</html>