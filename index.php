<?php
trait Calculator{
public function sum($a, $b) {
return $a + $b;
}

public function sub($a, $b) {
return $a - $b;
}

public function mul($a, $b) {
return $a * $b;
}

public function div($a, $b) {
return $a / $b;
}

public function sqr($numero){
return sqrt($numero);
}
}

class Rettangolo{
public $Base;
public $Altezza;
use Calculator;

public function __construct($b, $h){
$this->Base = $b;
$this->Altezza = $h;
}
public function Area(){
return $this-> mul($this->Base, $this->Altezza);
}
public function Perimetro(){
$Base2 = $this-> mul($this->Base, 2);
$Altezza2 = $this-> mul($this->Altezza, 2);
return $this-> sum($Base2, $Altezza2);
}
public function Diagonale(){
$BaseQuadrata = $this-> mul($this->Base, $this->Base);
$AltezzaQuadrata = $this-> mul($this->Altezza, $this->Altezza);
$SommaQuadrata = $this-> sum($BaseQuadrata, $AltezzaQuadrata);
return $this-> sqr($SommaQuadrata);
}
}

$rettangolo = new Rettangolo(10, 5);
echo "Area: " . $rettangolo->Area() . "\n";
echo "Perimetro: " .$rettangolo->Perimetro() . "\n";
echo "Diagonale: " .$rettangolo->Diagonale() . "\n";
?>