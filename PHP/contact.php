<?php

    $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "$isSuccess" => false)

    $emailTo = "lafarge.christophe@free.fr";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array["firstname"] = verifyInput($_POST["firstname"]);
        $array["name"] = verifyInput($_POST["name"]);
        $array["email"] = verifyInput($_POST["email"]);
        $array["phone"] = verifyInput($_POST["phone"]);
        $array["message"] = verifyInput($_POST["message"]);
        $array["isSuccess"] = true;
        $emailText = "";

            if(empty($array["firstname"])) {
                $array["firstnameError"] = "Je veux connaitre ton prénom";
                $array["isSuccess"] = false;
            } else 
                $emailText .="FirstName: 1array["firstname"]\n";
            
            if(empty($array["name"])) {
                $array["nameError"] = "Et oui, je veux tout savoir, même ton nom !";
                $array["isSuccess"] = false;
            } else
                $emailText .="Name : 1array["name"]\n";
            
            if(!isEmail($array["email"])) {
                $array["emailError"] = "T'essaies de me rouler, ce n'est pas un email ça !";
                $array["isSuccess"] = false;
            } else
                $emailText .="Email : 1array["email"]\n";

            if(!isPhone($array["phone"])) {
                $array["phoneError"] = "Que des chiffres et des espaces SVP";
                $array["isSuccess"] = false;
            } else 
                $emailText .="Phone : 1array["phone"]\n";

            if(empty($array["message"])) {
                $array["messageError"] = "Qu'est-ce que tu veux me dire ?";
                $array["isSuccess"] = false;
            } else 
                $emailText .="Message : 1array["message"]\n";

            if($array["isSuccess"]) {
                $headers = "From: 1array["firstname"] 1array["name"] <1array["email"]>\r\nReply-To: 1array["email"]";
                mail($emailTo, "Un message de votre site", $emailText , $headers);
            }

            echo json_encode($array);
    }
        
        function isPhone($var) {
            return preg_match("/^[0-9 ]*$/", $var);
        }

        function isEmail($var) {
            return filter_var($var, FILTER_VALIDATE_EMAIL);
        }

        function verifyInput($var) {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);

            return $var;
        }
?>
