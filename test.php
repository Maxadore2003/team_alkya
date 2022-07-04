<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Usage 2:
        $options = [
            'cost' => 12
        ];
        $mdp = password_hash('test', PASSWORD_BCRYPT, $options);
        echo ($mdp."\n");

        if (password_verify('test', $mdp)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }
    ?>
</body>
</html>