<?php
class mailer extends CI_Model{

	public function sendEmail($mail, $from,$subject,$message)
	{
			$message = wordwrap($message, 70);
			// send mail
			if(mail($mail,$subject,$message,"From: $from\n"))
			{
			
				$msg = "ოპერაცია წარმატებით დასრულდა !";
			
			}
			else
			{
				$msg = "მოხდა შეცდომა !";
			
			}
			
			return $msg;

	}
	
}