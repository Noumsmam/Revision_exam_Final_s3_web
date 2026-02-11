<?php $title = 'Inscription'; ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="/assets/images/img-01.png" alt="Signup Image">
            </div>
            <form class="login100-form validate-form" method="post" action="/inscriptions">
                <span class="login100-form-title">Inscription</span>

                <div class="wrap-input100 validate-input" data-validate="Nom requis">
                    <input class="input100" type="text" name="nom" placeholder="Nom">
                    <span class="symbol-input100"><i class="fa fa-user"></i></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Email requis">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="symbol-input100"><i class="fa fa-envelope"></i></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Mot de passe requis">
                    <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                    <span class="symbol-input100"><i class="fa fa-lock"></i></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">S'inscrire</button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">Vous avez déjà un compte ?</span>
                    <a class="txt2" href="/login">Se connecter</a>
                </div>
            </form>
        </div>
    </div>
</div>
