<?php
class contactForm extends CI_Model{

	public function output()
	{
		$out = '<form action="" method="post">';
		
		$out .= '<label for="namelname">სახელი გვარი</label>';
		$out .= '<input type="text" name="namelname" id="namelname" />';
		
		$out .= '<label for="email">ელ-ფოსტა</label>';
		$out .= '<input type="text" name="email" id="email" />';
		
		$out .= '<label for="text">შეტყობინება</label>';
		$out .= '<textarea name="text" id="text"></textarea>';
		$out .= '<div style="clear:both"></div>';
		$out .= '<input type="submit" value="გაგზავნა" />';
		
		$out .= '</form>';
		return $out;
	}	
	
}