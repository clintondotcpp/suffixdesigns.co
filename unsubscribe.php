<?php
    /*This works with my email nnamdichukwunyere@yahoo.com */
    include './mailchimpapi.php';
    use \DrewM\MailChimp\MailChimp;

    $MailChimp = new MailChimp('a830a7a594f24814b47669e20adaeeea-us12');
    if($_POST){
        $email = $_POST['email'];
    
    $list_id = 'cd829a4558';

 
    $subscriber_hash = MailChimp::subscriberHash($email);
    
    $MailChimp->delete("lists/$list_id/members/$subscriber_hash");
    
    if($MailChimp->success()){
        header('Location: emailunsubscribe.html');
    }else{
        header('Location: emailunsubfail.html');
    }

    /*$Mailchimp->getLastError()*/
}      
?>