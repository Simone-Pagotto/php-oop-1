<!-- Quindi, dopo aver studiato le slide di oggi, vorrei che definiste una
 classe PHP che modella il concetto di una "Stanza di Hotel"; oltre a 
 definire almeno 3 proprieta' distinte, vorrei che implementaste un 
 costruttore che assegna un valore ad almeno una di queste proprieta', 
 a vostro piacimento. Infine, implementate anche una funzione che, quando
  invocata sull'oggetto, stampi il contenuto di tutte le sue proprieta' 
  ( concatenate i valori per formare una stringa ). Testate il tutto 
  creando qualche istanza e invocando l'unica funzione che avete scritto.
Vi auguro un buon weekend, a lunedi! :laptop_parrot:
 -->

<?php

class HotelRoom {
    //definisco proprietà della classe
    public $number = 101;
    public $bed;
    public $price;

    //nella classe posso mettere delle funzione : sono dette metodi
    public function show_object(){
        $room = 'La stanza n°' . $this->number . ' ha ' . $this->bed .
        ' posti letto. Alla modica cifra di ' . $this->price . ' $ per notte!';
        return $room;
    } 

    //contructor
    function __construct($bed,$price){
        $this->bed = $bed;
        $this->price =$price;
    }

}

//creo istanza di classe auto
$myRoom = new HotelRoom(2,200);
echo $myRoom->show_object();
var_dump($myRoom);

