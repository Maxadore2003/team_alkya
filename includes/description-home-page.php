<?php
    include_once 'database.php';

    $request_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'description-home-page'");
    $request_title->execute();
    $request_description = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'description' AND `name` = 'description-home-page'");
    $request_description->execute();

    $data_title = $request_title->fetch();
    $data_description = $request_description->fetch();
?>

<h1><?php echo $data_title['description']?></h1>
<p class='home_page_description'><?php echo $data_description['description']?></p>
