<?php
class Sigleton
{
    private $sigleton;

    private function __construct() {}

    public function getInstance()
    {
	if (!self::$sigleton instanceof self) {
	    self::$singleton = new self;	
	}

	return self::$sigleton;
     }

     private function __clone(){}       
