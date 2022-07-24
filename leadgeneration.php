<?php
    /*This works with SUFFIX DESIGNS email info@suffixdesigns.co*/
    include './mailchimpapi.php';
    use \DrewM\MailChimp\MailChimp;

    $MailChimp = new MailChimp('ef12f4270deeff54c7b2c695ea863bf5-us12');
    if($_POST){
        $email = $_POST['email'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $profession = $_POST['profession'];
        
    
    $list_id = '9f99ff1141';

    $result = $MailChimp->post("lists/$list_id/members", [
			'email_address' => $email,
            'merge_fields' => ['FNAME'=>$fname, 'LNAME' => $lname, 'PROFESSION'=>$profession],
			'status'        => 'subscribed',
	]);
    
    if($MailChimp->success()){
        header('Location: emailsuccess.html');
    }else{
        header('Location: emailfail.html');
    }
}      
?>