<?php 
    include "../classes/User.php";

    $user = new User;

    # Call the method
    $user->update($_POST,$_FILES);
    # $_FILES holds an array of items uploaded to the current script via the HTTP POST method

?>