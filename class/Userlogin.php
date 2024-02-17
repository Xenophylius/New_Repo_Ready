<?php

class Userlogin extends User {
    protected string $password;

    public function setPassword(string $password) 
    {
        $this->password = $password;
    }

    public function getpassword() 
    {
        return $this->password;
    }

    public function removePassword()
    {
        $this->password = true;
    }
}