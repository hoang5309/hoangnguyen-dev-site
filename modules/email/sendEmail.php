<?php
    require '..\..\assets\vendor\autoload.php';
    $emailList = json_decode($_POST['emailList']);
    $success = 0;
    $fail = 0;
    $subject = $_POST["subject"];
    $return = array();
    for($i = 0; $i < Count($emailList); $i++){
        $emailListSplit = explode("-", $emailList[$i]);
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("hoangdev5309@gmail.com", "Hoang Nguyen");
        $email->setSubject($subject );
        $email->addTo($emailListSplit[0], "Example User");
        //$email->addContent("text/plain", $contentHN);
        $emailTemplate = file_get_contents('templates/template1.html');
        $email->addContent(
            "text/html", 
            $emailTemplate
        );
        /*
        $file_encoded = base64_encode(file_get_contents('..\Invoice for '.$aSplit[1].'.pdf'));
        $email->addAttachment(
            $file_encoded,
            "application/text",
            "Invoice for ".$aSplit[1].".pdf",
            "attachment"
        );
        */
        //SENDGRID_API_KEY
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
            if ($response->statusCode() == 202) {
                $success++;
                $return = array(
                    'status'=>1,
                    'data'=>$success
                );
            }else{
                $fail++;
                $return = array(
                    'status'=>0,
                    'data'=>$fail
                );
            }
        } catch (Exception $e) {
            $return = array(
                'status'=>3,
                'data'=>'Caught exception: ' . $e->getMessage() . "\n"
            );
        }
    }
    echo json_encode($return);
?>