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
        Flight::redirect('/');
    }

    public function login() {
        $email = $_POST['email'] ?? '';
        $pwd = $_POST['pass'] ?? '';
        $user = new User(Flight::db());
        $userModel = $user->findByEmail($email);
        if($userModel) {
            $passCheck = $user->checkPwd($email);
            if($pwd!=$passCheck['password']){
                Flight::redirect('/');
            }
            Flight::redirect('/home');
        } else {
            Flight::redirect('/');
        }
    }
}

?>