<?
class Boisson{

	private $name;
	private $slogan;
	private $prixPetite;
	private $prixMoyenne;
	private $prixGrande;
	private $count; //nombre de boisson de même type


	public function __construct($name, $slogan, $count, $prixPetite = null, $prixMoyenne = null, $prixGrande = null){
		$this->name = $name;
		$this->count = $count;
		$this->slogan = $slogan;
		$this->prixPetite = ($prixPetite == null ? "-" : $prixPetite);
		$this->prixMoyenne = $prixMoyenne == null ? "-" : $prixMoyenne;
		$this->prixGrande = $prixGrande ==null ? "-" : $prixGrande;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setPrixPetite($prixPetite){
		$this->prixPetite = $prixPetite;
	}

	public function setPrixMoyenne($prixMoyenne){
		$this->prixMoyenne = $prixMoyenne;
	}

	public function setPrixGrande($prixGrande){
		$this->prixGrande = $prixGrande;
	}

	public function getName(){
		return $this->name;
	}

	public function getPrixPetite(){
		return $this->prixPetite;
	}

	public function getPrixMoyenne(){
		return $this->prixMoyenne;
	}

	public function getPrixGrande(){
		return $this->prixGrande;
	}

	public function getCount(){
		return $this->count;
	}
}
?>
