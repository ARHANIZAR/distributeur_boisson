<?php

require_once "Boisson.php";
class Distributeur{
	private $boissons = array();

	public function addBoisson($boisson, $key = null){
		if( $key == null){
			$this->boissons[] = $boisson;
		}else if(isset($this->boissons[$key])){
			throw new keyHasUseException("key $key already in use");
		}else{
			$this->boissons[$key] = $boisson;
		}
		
	}

	public function deleteBoisson($key){
		if (isset($this->boissons[$key])) {
        	unset($this->boissons[$key]);
    	}else {
        	throw new KeyInvalidException("Invalid key $key");
    	}
	}

	public function getBoisson($key){
		if (isset($this->boissons[$key])) {
        	return $this->boissons[$key];
    	}else {
        	throw new KeyInvalidException("Invalid key $key.");
    	}
	}

	public function getBoissonByName($name){
		foreach ($this->boissons as $boisson) {
			if($boisson->getName() == $name){
				return $boisson;
			}
		}
	}

	//compter le total des boissons dans le distributeur
	public function countBoissons(){
		$count = 0;
		foreach ( $this->boissons as $boisson){
			$count = $count + $boisson->getCount();
				
		}
		return $count;
	}

	public function countBoissonsByType(){
		return count($this->boissons);
	}

	//retourner les noms des boissons qui existes dans le distributeur
	public function getBoissons(){
		$boissonsName = array();
		foreach ( $this->boissons as $boisson){
			$boissonsName[] = $boisson;
				
		}
		return $boissonsName;
	}



}
?>
