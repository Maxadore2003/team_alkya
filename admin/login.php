<?php

    include '../includes/database.php';

    if (isset($_POST['send'])) {
        
        extract($_POST);

        if (!empty($pseudo) && !empty($password)) {
            
            $request = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo AND password = :password");
            $request->execute([
                'pseudo' => $pseudo,
                'password' => $password,
            ]);
            $result = $request->fetch();
            
            if ($result == true) {
                session_start();
                $_SESSION['connected'] = true;
                header('Location: ./admin.php');
            }
            else {
                echo "Connexion Échouée !";
            }
        
        }
    
    }

?>