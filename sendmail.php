<?php
    class SendMail {
        private $dev_email = 'karesz0328@gmail.com';    // where to send the message
        private $word_wrap = 70;                        // wrap the message content by every 'x'. word

        function __construct() {
            $this->init();
        }
        public function init() {
            // check if there is any empty value that required
            array_map(function($e) {
                if(!isset($_POST[$e]) || empty($_POST[$e]))
                    $this->result(false, "Please fill up all the required fields!");
            }, ['email','msg','subject']);

            $subject = $_POST['subject'];
            $email = $_POST['email'];
            $msg = $email."\r\n".wordwrap($_POST['msg'], $this->word_wrap);

            $headers = 'From: '.$email.'' . "\r\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            // send message
            if(!mail($this->dev_email,$subject,$msg,$headers))
                $this->result(false, "Couldn't send the message!");
            $this->result(true, "Successfully sent!");
        }

        // send response
        private function result($type, $message) {
            echo json_encode(['result' => $type, 'data' => $message]);
            exit();
        }
    }

    new SendMail;
?>