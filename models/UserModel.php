<?php
class UserModel {
    private $users = [
        ['id' => 1, 'name' => 'Gp The God', 'email' => 'gpthegod1@example.com'],
        ['id' => 2, 'name' => 'Gp Bro', 'email' => 'gpbro@example.com'],
        ['id' => 3, 'name' => 'Gp', 'email' => 'gp@example.com']
    ];
    
    public function getUsers() {
        return $this->users;
    }
    
    public function getUserById($id) {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        
        return null;
    }
}
?>