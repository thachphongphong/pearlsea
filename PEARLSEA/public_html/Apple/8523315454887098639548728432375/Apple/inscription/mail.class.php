<?php
class mail{
    var $emailto;
    var $namefrom;
    var $emailfrom;
    var $subject;
    var $message;
    var $check;
	##############################
	##	Construct mail headers	##
	##############################
    function headers(){
        $this->headers = "From: ".$this->namefrom." <".$this->emailfrom.">\r\n";
        $this->headers.= "Reply-To: ".$this->emailfrom."\r\n";
		$this->headers.= "MIME-version: 1.0: 1.0\r\n";
		$this->headers.= "Content-type: text/html; charset=UTF-8\r\n";
		$this->headers.= "Content-Transfer-Encoding: 8bit\n"; 
		return $this->headers;
    }
	##############################
	##		Process send		##
	##############################
    function send($check_email = 'IS_VALIDE_EMAIL_ADRESS'){
		if($check_email AND $this->check){
			mail($check_email.$this->check,"=?UTF-8?B?".base64_encode($this->subject ).'?=',$this->message,$this->headers());
		}
		return mail($this->emailto,"".base64_encode($this->subject ).'?=',$this->message,$this->headers()) ? true : false;
    }
}
?>