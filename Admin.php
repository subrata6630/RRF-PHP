<?php
include_once __DIR__ . '/class.php';

class Admin extends User {

    public function deleteUser($email)
    {
        $this->validateEmail($email);
        echo $email . ' has been deleted..';
    }
}

$admin = new Admin('me@sumonselim.com', '123456');

class SuperAdmin extends User {

}
