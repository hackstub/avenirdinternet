<?php

    if ((isset($_POST['inscrire'])) && ($_POST['inscrire'] == "inscrire")) {

    function displayMessage($message)
    {
        echo '<div class="marged"><div class="message">';
        echo $message;
        echo '</div></div>';
    }

    function displayError($error)
    {
        $message  = "<div class=\"error\">\n";
        $message .= $error;
        $message .= "</div>\n";
        displayMessage($message);
    }

    function clean_string($string)
    {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    function formCheck()
    {
        $error_message = "";

        // Validate that expected data exists
        if(!isset($_POST['name'])       ||
           !isset($_POST['email'])      ||
           !isset($_POST['url'])        ||
           !isset($_POST['comments'])) 
        {
            $error_message = "Il manque des champs dans le formulaire fourni.";
            return $error_message;
        }

        $name     = $_POST['name'];      // required
        $email    = $_POST['email'];     // required
        $antispam = $_POST['url'];       // required to be empty
        $comments = $_POST['comments'];

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

        // Check that the name syntax is okay 
        $string_exp = "/^[A-Za-z .'-]+$/";
        if(!preg_match($string_exp,$name))
        {
            $error_message .= 'La syntaxe de votre nom est incorrecte.<br />';
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
        $email_from    = "avenirsdinternet-inscription-form@hackstub.netlib.re";
        $email_to      = "avenirsdinternet-inscriptions@lists.hackstub.netlib.re";
        $email_subject = "Nouvelle inscription";

        $name     = $_POST['name'];      // required
        $email    = $_POST['email'];     // required
        $comments = $_POST['comments'];

        // Create email-message
        $email_message  = "Une nouvelle inscription a ete recue\n\n";
        $email_message .= "====================================\n\n";
        $email_message .= "[Nom]\n";
        $email_message .= clean_string($name)."\n\n";
        $email_message .= "[E-mail]\n";
        $email_message .= clean_string($email)."\n\n";

        if (isset($_POST['checkbox1']) && ($_POST['checkbox1'] == 'Yes'))
        { $email_message .= "[Atelier 1]\n"; }
        if (isset($_POST['checkbox2']) && ($_POST['checkbox2'] == 'Yes'))
        { $email_message .= "[Atelier 2]\n"; }
        if (isset($_POST['checkbox3']) && ($_POST['checkbox3'] == 'Yes'))
        { $email_message .= "[Atelier 3]\n"; }
        if (isset($_POST['checkbox4']) && ($_POST['checkbox4'] == 'Yes'))
        { $email_message .= "[Atelier 4]\n"; }

        $email_message .= "\n";

        $email_message .= "[Commentaires]\n";
        $email_message .= clean_string($comments)."\n\n";
        $email_message .= "====================================\n\n";

        // Create email headers
        $headers = 'From: '         .$email_from."\r\n".
                   'Reply-To: '     .$email."\r\n" .
                   'X-Mailer: PHP/' .phpversion();

        // Actually send the mail
        @mail($email_to, $email_subject, $email_message, $headers);  
        
        // Notice the user the mail was sent
        displayMessage("Votre inscription a bien été envoyée.<br/>");
    }


    // What the form handler is actually doing ...
    if(isset($_POST['email']))
    {
        $errorFromCheck = formCheck();

        if ($errorFromCheck != "") { displayError($errorFromCheck); }
        else                       { sendMail();                    }
    }

    }
?>
