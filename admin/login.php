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
                if ($result['admin-level'] >= 2) {
                    session_start();
                    $_SESSION['connected'] = true;
                    header('Location: ./admin.php');
                }
                else {
                    echo "Votre niveau d'administrateur n'est pas assez haut.";
                }
            }
            else {
                $ConnexionError = "Pseudo ou Mot de Passe incorrect !";
                include 'connection.php';
                exit();
            }
        
        }
    
    }

?>