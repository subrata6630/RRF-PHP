<?php
class User {
    private $email;
    private $password;
    public $photo;
    private $db;

    public function __construct($email, $password, Database $db)
    {
        $this->email = $email;
        $this->password = $password;
        $this->db = $db;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return sha1($this->password);
    }

    public function setEmail($email)
    {
        $this->validateEmail($email);
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->validatePassword($password);
        $this->password = $password;
    }

    public function register()
    {
        $this->validate();
        // db operation
        $this->db->create();

        echo 'User registered.';
    }

    private function validate()
    {
        $this->validateEmail($this->email);
        $this->validatePassword($this->password);
    }

    protected function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    protected function validatePassword($password)
    {
        return (6 < strlen($password));
    }
}
