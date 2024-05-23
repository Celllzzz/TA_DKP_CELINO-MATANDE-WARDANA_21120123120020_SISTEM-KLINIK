<?php
class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function validate() {
        // In a real application, you would query the database here
        $validUsers = [
            'Admin 1' => '12345678',
            'admin2' => '87654321'
        ];

        return isset($validUsers[$this->username]) && $validUsers[$this->username] === $this->password;
    }
}
?>
