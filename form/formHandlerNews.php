<?php


    function died($error)
    {
        echo "<div style=\"color:#D03030\">\n";
        echo $error;
        echo "</div>\n";
    }

    function formCheck()
    {
        $error_message = "";

        // Validate that expected data exists
        if(!isset($_POST['email'])       ||
           !isset($_POST['url']))
        {
            $error_message .= "Il manque des champs dans le formulaire fourni";
        }

        $email    = $_POST['email'];     // required
        $antispam = $_POST['url'];       // required to be empty

        // Check the email syntax is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error_message .= "La syntaxe de votre adresse email est incorrecte.<br />";
        }
        else
        {
            // Check that the email domain has a MX record
            $email_domain = substr(strrchr($email, "@"), 1);
            if (!checkdnsrr($email_domain, 'MX'))
            {
                $error_message .= "Le domaine de l'adresse email est invalide (pas de MX record).<br />";
            }
        }

        // Check antispam is empty 
        if(strlen($antispam) > 0)
        {
            $error_message .= "Sneaky spammer ! This will go in /dev/null !<br />";
        }

        return $error_message;
    }

    function sendMail()
    {
        // From, to, subject, message ...
        $email_from    = $_POST['email'];
        $email_to      = "avenirsdinternet-news-join@lists.hackstub.netlib.re";
        $email_subject = "Nouvelle inscription";
        $email_message = "Une nouvelle inscription a été reçue\n\n";

        // Create email headers
        $headers = 'From: '         .$email_from."\r\n".
                   'Reply-To: '     .$email_from."\r\n" .
                   'X-Mailer: PHP/' .phpversion();

        // Actually send the mail
        @mail($email_to, $email_subject, $email_message, $headers);

        // Notice the user the mail was sent
        echo "Votre inscription a bien été envoyée.<br/>";
    }

    if(isset($_POST['email']))
    {
        $errorFromCheck = formCheck();

        if ($errorFromCheck != "") { died($errorFromCheck); }
        else                       { sendMail();             }
    }

?>