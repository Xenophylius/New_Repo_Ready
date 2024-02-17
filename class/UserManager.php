<?php

class UserManager {
    private $db;

// CONSTRUCT
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

// METHOD
    public function addUser(User $user)
    {
        $preparedRequest = $this->db->prepare("INSERT INTO users(lastname, firstname, city, center, password) VALUES (?,?,?,?,?)");
        $preparedRequest->execute([
            $user->superGetter('lastname'),
            $user->superGetter('firstname'),
            $user->superGetter('city'),
            $user->superGetter('center'),
            $user->superGetter('password')
        ]);

        $id = $this->db->lastInsertId();
        $user->superSetter('id' ,$id);

        $_SESSION['user'] = $user;
        
    }

    public function verifyLogin(Userlogin $user) 
    {
        $preparedRequest = $this->db->prepare("SELECT * FROM users WHERE lastname = ? AND firstname = ?");
        $preparedRequest->execute([
            $user->superGetter('lastname'),
            $user->superGetter('firstname')
        ]);
        $userExist = $preparedRequest->fetch(PDO::FETCH_ASSOC);

        if (!$userExist) {
            return false;
            die;
        }

        if (!password_verify($user->superGetter('password'), $userExist['password'])) {
            return false;
            die;
        }

        $user->superSetter('id' , $userExist['id']);
        $user->superSetter('city' , $userExist['city']);
        $user->superSetter('center' , $userExist['center']);
        $user->removePassword();

        $_SESSION['user'] = $user;
        return true;
        die;
        
    }
}