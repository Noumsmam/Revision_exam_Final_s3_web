<?php

namespace app\controllers;

use app\models\User;
use flight\Engine;
use Flight;

class UserController {
	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

    public function inscription() {
        $data = [];
        $data['username'] = $_POST['nom'] ?? '';
        $data['email'] = $_POST['email'] ?? '';
        $data['password'] = $_POST['pass'] ?? '';
        $data['mode'] = 'USER';
        
        $user = new User(Flight::db());

        $user->save($data);
        Flight::render('pages/login');
    }
}

?>