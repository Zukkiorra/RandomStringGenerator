<?php

class RandomStringGenerator
{
	private $generatedStirng = "";
	private $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+=/;:(){}[]!@#$%^&*-_|?<>";

	public function setCharacters($characters)
	{
		$this->characters = $characters;
	}

	public function setRandomString($length=10)
	{
		$numOfCharacters = strlen($this->characters);
		for ($i=0; $i < $length; $i++) { 
			$this->generatedStirng .= $this->characters[rand(0, $numOfCharacters-1)];
		}
	}

	public function getRandomString()
	{
		return $this->generatedStirng;
	}
}
