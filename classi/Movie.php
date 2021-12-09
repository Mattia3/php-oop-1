<?php
require_once "./data/movieData.php";
class Movie {
  public $titolo;
  public $regista;
  public $annoProduzione;
  public $genere;

  public function __construct( $titolo, $regista, $annoProduzione,  $genere){
    $this ->titolo = $titolo;
    $this ->regista = $regista;
    $this ->annoProduzione = $annoProduzione;
    $this ->genere = $genere;
  }

  // public function setTitolo($newValue) {
  //   $this->titolo = $newValue;
  // }
  // public function setRegista($newValue) {
  //   $this->regista = $newValue;
  // }
  // public function setAnno($newValue) {
  //   $this->annoProduzione = $newValue;
  // }
  // public function setGenere($newValue) {
  //   $this->genere = $newValue;
  // }

  // public function getTitolo(){
  //   return "TITOLO:" . " " . $this ->titolo . "<br>";
  // }
  // public function getRegista(){
  //   return "REGISTA:" . " " . $this ->regista . "<br>";
  // }
  // public function getAnnoProduzione(){
  //   return "ANNO:" . " " . $this ->annoProduzione . "<br>";
  // }
  // public function getGenere(){
  //   return "GENERE:" . " ".  $this ->genere;
  // }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
      foreach($arrayMovie as $movies){
       $singleMovie = new Movie($movies[ "titolo"],$movies[ "regista"],$movies[ "annoProduzione"],$movies[ "genere"]); 
       echo "<li>";
       echo "<h2>" . $singleMovie ->  titolo . "</h2>" ;
       echo "<p>  Regista:" . " " . $singleMovie ->  regista . "</p>";
       echo "<p> Anno:". " " . $singleMovie ->  annoProduzione . "</p>";
       echo "<p> Genere:" . " " . $singleMovie ->  genere . "</p>";
       echo "</li>";
      }

    ?>
  </ul>
</body>
</html>