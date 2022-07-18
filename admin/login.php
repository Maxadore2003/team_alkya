<?php

    include '../includes/database.php';

    if (isset($_POST['send'])) {
        
        extract($_POST);

        if (!empty($pseudo) && !empty($password)) {
            
            $request = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
            $request->execute([
                'pseudo' => $pseudo,
            ]);
            $result = $request->fetch();

            // config.conf
            // pepper=c1isvFdxMDdmjOlvxpecFw

            // Faire le config.conf
            // $option = getConfigVariable("pepper");


            $option = "c1isvFdxMDdmjOlvxpecFw";
            $peppered_password = hash_hmac("sha256", $password, $option);
            $hashed_password = $result['password'];

            
            if ($result == true) {
                if (password_verify($peppered_password, $hashed_password)) {
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
            else {
                $ConnexionError = "Pseudo ou Mot de Passe incorrect !";
                include 'connection.php';
                exit();
            }
        
        }
    
    }

?>