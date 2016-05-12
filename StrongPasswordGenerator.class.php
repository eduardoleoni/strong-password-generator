<?php
class StrongPasswordGenerator 
{
	public function generate($howManyChars=20) 
	{
		$count = 0;
		$password = "";
		
		while($howManyChars > $count) {
		
			$type = $this->generateRandom3options();
		
			if ($type == 0) {
				$password .= $this->generateRandomNumber();
			}
		
			if ($type == 1) {
				$letter = $this->generateRandomLetter();
				if ($this->generateRandomTrueOrFalse()) {
					$password .= strtoupper($letter);
				} else {
					$password .= $letter;
				}
			}
		
			if ($type == 2) {
				$password .= $this->generateRandomSpecialChar();
			}
		
			$count++;
		
		}
		
		return $password;

	}

	function generateRandomNumber() 
	{
		return rand(0, 9);
	}

	function generateRandomLetter() 
	{
		$letters = ["a", "b", "c", "d","e", "f", "g", "h","i", "j", "k", "l","m", "n", "o", "p","q", "r", "s", "t","u", "v", "w", "x","y", "z"];
		return $letters[rand(0, 25)];
	}

	function generateRandomSpecialChar() 
	{
		$chars = ["-", "_", ".", ":", "*", "@", "="];
		return $chars[rand(0, 6)];
	}

	function generateRandomTrueOrFalse() 
	{
		return rand(0, 1);
	}

	function generateRandom3options() 
	{
		return rand(0, 2);
	}
}
