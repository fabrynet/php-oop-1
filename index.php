<?php

// GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta.
// Generare inoltre costruttore e metodo toString nelle modalita' viste in classe.
// Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString

include ('data.php');

class User {

  public $name;
  public $lastname;
  public $email;
  public $password;
  public $address;
  public $tel;

  public function __construct($name, $lastname, $email, $password) {
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> email = $email;
    $this -> password = $password;
  }

  public function __toString() {

    $out =
    "<h2>Ciao ".$this -> name.", ti sei registrato!</h2>"
    ."<b>Nome:</b> ".$this -> name."<br>"
    ."<b>Cognome:</b> ".$this -> lastname."<br>"
    ."<b>Email:</b> ".$this -> email."<br>"
    ."<b>Password:</b> ".$this -> password."<br>";

    if ($this -> address) {
      $out .= "<b>Indirizzo:</b> ".$this -> address."<br>";
    } else {
      $out .= "<b>Indirizzo:</b>---<br>";
    }

    if ($this -> tel) {
      $out .= "<b>Telefono:</b> ".$this -> tel."<br>";
    } else {
      $out .= "<b>Telefono:</b>---<br>";
    }

    return $out;
  }
}

$user1 = $data['user1'];
$user2 = $data['user2'];

$getUser1 = new User($user1['name'], $user1['lastname'], $user1['email'], $user1['password']);
$getUser2 = new User($user2['name'], $user2['lastname'], $user2['email'], $user2['password']);

$getUser1 -> address = $user1['address'];
$getUser2 -> tel = $user2['tel'];

echo $getUser1;
echo $getUser2;
