<?php $title = "Ajouter un objet"; ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" enctype="multipart/form-data">
                <span class="login100-form-title">Ajouter un objet</span>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="titre" placeholder="Titre de l'objet">
                </div>
                <div class="wrap-input100 validate-input">
                    <textarea class="input100" name="description" placeholder="Description"></textarea>
                </div>
                <div class="wrap-input100">
                    <select class="input100" name="categorie"><option>Maison</option><option>Électronique</option></select>
                </div>
                <div class="wrap-input100">
                    <input class="input100" type="number" step="0.01" name="prix" placeholder="Prix estimatif">
                </div>
                <div class="wrap-input100">
                    <input class="input100-2" type="file" name="photos[]" multiple accept="image/*">
                </div>
                <div class="container-login100-form-btn"><button class="login100-form-btn">Ajouter</button></div>
            </form>
        </div>
    </div>
</div>
