<?php
require_once 'models/UserModel.php';

class UserController {
    public function index() {
        $userModel = new UserModel();
        
        $users = $userModel->getUsers();
        
        require 'views/user.php';
    }
}
?>