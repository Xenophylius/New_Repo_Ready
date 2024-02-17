<?php
   try
   {
        $dsn = 'mysql:host=127.0.0.1;dbname=audition';
        $user = 'root';
        $password = '';
        $db = new PDO( $dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
   }
   catch (Exception $message){
        echo "ya un blem <br>" . "<pre>$message</pre>" ;
   }
   ?>