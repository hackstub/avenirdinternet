<?php

    $email_from    = "avenirsdinternet-inscription-form@hackstub.netlib.re";
    $email_to      = "avenirsdinternet-inscriptions@lists.hackstub.netlib.re";
    $email_subject = "Atelier1 - Nouvelle inscription";

    if(isset($_POST['email'])) {

    function died($error) 
    {
        // your error code can go here
        echo "Désolé, mais votre formulaire contient les erreurs suivantes :";
        echo "<div style=\"color:#D03030\">\n";
        echo $error;
        echo "</div>\n";
        die();
    }

    function clean_string($string)
    {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    // Validate that expected data exists
    if(!isset($_POST['name'])       ||
       !isset($_POST['email'])      ||
       !isset($_POST['url'])        ||
       !isset($_POST['comments'])) 
    {
        died("Il manque des champs dans le formulaire fourni.");
    }

    $name     = $_POST['name'];      // required
    $email    = $_POST['email'];     // required
    $antispam = $_POST['url'];       // required to be empty
    $comments = $_POST['comments'];

    $error_message = "";

    // Check the email syntax is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $error_message .= "La syntaxe de votre adresse email est incorrecte.<br />";
    } else {
    // Check that the email domain has a MX record
    $email_domain = substr(strrchr($email, "@"), 1);
    if (!checkdnsrr($email_domain, 'MX')) 
    {
        $error_message .= "Le domaine de l'adresse email est invalide (pas de MX record).<br />";
    } }

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

    // If there was error, show them to the user and exit
    if(strlen($error_message) > 0) 
    {
        died($error_message);
    }

    // Create email-message
    $email_message  = "Une nouvelle inscription a été reçue\n\n";
    $email_message  = "           Atelier 1\n\n";
    $email_message .= "====================================\n\n";

    $email_message .= "[Nom]\n";
    $email_message .= clean_string($name)."\n\n";
    $email_message .= "[E-mail]\n";
    $email_message .= clean_string($email)."\n\n";
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
    echo "Votre inscription a bien été envoyée.<br/>";

    }
?>
