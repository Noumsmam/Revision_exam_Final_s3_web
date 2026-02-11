<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

$router->group('', function(Router $router) use ($app) {

    /*
    |--------------------------------------------------------------------------
    | Helper function pour éviter répétition
    |--------------------------------------------------------------------------
    */
    $renderPage = function(string $view, array $data = []) use ($app) {
        // Génère le contenu de la page
        $content = $app->view()->fetch('pages/' . $view . '.php', $data);

        // Affiche le layout en injectant le contenu
        $app->render('layout.php', array_merge($data, [
            'content' => $content
        ]));
    };

    /*
    |--------------------------------------------------------------------------
    | Routes Web
    |--------------------------------------------------------------------------
    */

    $router->get('/', function() use ($renderPage) {
        $renderPage('home', [
            'title' => 'Accueil - Takalo Takalo'
        ]);
    });

    $router->get('/profil', function() use ($renderPage) {
        $renderPage('profil', [
            'title' => 'Mon Profil'
        ]);
    });

    $router->get('/gestion-objets', function() use ($renderPage) {
        $renderPage('gestion_objets', [
            'title' => 'Mes Objets'
        ]);
    });

    $router->get('/ajout-objet', function() use ($renderPage) {
        $renderPage('ajout_objet', [
            'title' => 'Ajout Objet'
        ]);
    });

    $router->get('/fiche-objet', function() use ($renderPage) {
        $renderPage('fiche_objet', [
            'title' => 'Fiche Objet'
        ]);
    });

    $router->get('/gestion-echanges', function() use ($renderPage) {
        $renderPage('gestion_echanges', [
            'title' => 'Gestion Échanges'
        ]);
    });

    $router->get('/historique-objet', function() use ($renderPage) {
        $renderPage('historique_objet', [
            'title' => 'Historique Objet'
        ]);
    });

    $router->get('/inscription', function() use ($renderPage) {
        $renderPage('inscription', [
            'title' => 'Inscription'
        ]);
    });

    $router->get('/login', function() use ($renderPage) {
        $renderPage('login', [
            'title' => 'Login'
        ]);
    });

    $router->get('/objets-autres', function() use ($renderPage) {
        $renderPage('objets_autres', [
            'title' => 'Objets Autres'
        ]);
    });

    $router->get('/proposer_echange', function() use ($renderPage) {
        $renderPage('proposer_echange', [
            'title' => 'Proposer Échange'
        ]);
    });

    $router->get('/fiche_objet', function() use ($renderPage) {
        $renderPage('fiche_objet', [
            'title' => 'Fiche Objet'
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Routes API
    |--------------------------------------------------------------------------
    */

    $router->group('/api', function() use ($router) {
        $router->get('/users', [ ApiExampleController::class, 'getUsers' ]);
        $router->get('/users/@id:[0-9]', [ ApiExampleController::class, 'getUser' ]);
        $router->post('/users/@id:[0-9]', [ ApiExampleController::class, 'updateUser' ]);
    });

}, [ SecurityHeadersMiddleware::class ]);
