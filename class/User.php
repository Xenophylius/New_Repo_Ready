<?php 

class User extends Model{

    protected int $id;
    protected string $lastname;
    protected string $firstname;
    protected string $city;
    protected string $center;
    protected string $password;
    protected bool $admin = false;


    public function setPassword(string $password) 
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->password = $password;
    }
    
}