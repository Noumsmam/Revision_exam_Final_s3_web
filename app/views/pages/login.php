<?php $title = 'Connexion'; ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/assets/images/img-01.png" alt="Login Image">
            </div>
            <form class="login100-form validate-form" method="post" action="/login">
                <span class="login100-form-title">Connexion</span>

                <div class="wrap-input100 validate-input" data-validate="Email doit être de la forme: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="symbol-input100"><i class="fa fa-envelope"></i></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Mot de passe requis">
                    <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                    <span class="symbol-input100"><i class="fa fa-lock"></i></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">Se connecter</button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">Pas encore de compte ?</span>
                    <a class="txt2" href="/inscriptions">S'inscrire</a>
                </div>
            </form>
        </div>
    </div>
</div>
