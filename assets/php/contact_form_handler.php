<?php
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $message = $_POST['message'];
        $subject = "reply from my website"
                
        $to = "ahmedamer7401@outlook.com";
                
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved email from ".$userName.".\n\n".$message;
                
        mail($to, $subject, $txt, $headers);

?>