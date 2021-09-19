<?php

    if(isset($_POST['name'],$_POST['purpose'],$_POST['email'],$_POST['tel'],$_POST['message'])){
        echo 'Your name is '. $_POST['name'].
         'Your purpose is '. $_POST['purpose'].
         'Your email is '. $_POST['email'].
         'Your phone no is '. $_POST['tel'].
         'Your message is '. $_POST['message'];
    }


?>