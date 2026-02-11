<?php $title = 'Accueil'; ?>

<section class="featured">
    <h1>Bienvenue sur Takalo Takalo</h1>
    <p style="margin-top:10px; font-size:18px; color: rgba(255,255,255,0.85);">
        Échangez des objets avec d'autres personnes près de chez vous.
    </p>

    <div class="hero-search">
        <input type="text" placeholder="Rechercher un objet...">
        <select>
            <option value="">Toutes catégories</option>
            <option value="Maison">Maison</option>
            <option value="Électronique">Électronique</option>
        </select>
        <button>Rechercher</button>
    </div>

    <div class="section-header">
        <h2>Objets en vedette</h2>
        <a href="objets_autres">Voir tout →</a>
    </div>

    <div class="cards-modern">

        <div class="modern-card">
            <img src="/assets/images/iphone.jpg" alt="iPhone">
            <div class="card-body">
                <h3>iPhone 17 Pro Max</h3>
                <p>Marie</p>
                <div class="card-buttons">
                    <a href="fiche_objet" class="btn-outline">Voir</a>
                    <a href="proposer_echange" class="btn-main">Proposer</a>
                </div>
            </div>
        </div>

        <div class="modern-card">
            <img src="/assets/images/img-01.png" alt="Lampe Vintage">
            <div class="card-body">
                <h3>Lampe Vintage</h3>
                <p>Alice</p>
                <div class="card-buttons">
                    <a href="fiche_objet" class="btn-outline">Voir</a>
                    <a href="proposer_echange" class="btn-main">Proposer</a>
                </div>
            </div>
        </div>

        <div class="modern-card">
            <img src="/assets/images/iphone.jpg" alt="Montre Classique">
            <div class="card-body">
                <h3>Montre Classique</h3>
                <p>Bruno</p>
                <div class="card-buttons">
                    <a href="fiche_objet" class="btn-outline">Voir</a>
                    <a href="proposer_echange" class="btn-main">Proposer</a>
                </div>
            </div>
        </div>

        <div class="modern-card">
            <img src="/assets/images/img-01.png" alt="Vase Décoratif">
            <div class="card-body">
                <h3>Vase Décoratif</h3>
                <p>Claire</p>
                <div class="card-buttons">
                    <a href="fiche_objet" class="btn-outline">Voir</a>
                    <a href="proposer_echange" class="btn-main">Proposer</a>
                </div>
            </div>
        </div>

    </div>
</section>