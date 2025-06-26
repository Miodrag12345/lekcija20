<?php


class Product  // definisemo klasu pravimo
{
    public $ime; // ovo je $this->ime nase
    public $opis;      //  definisemo polja klasa (ime,opis,cena,slika,kolicina)
    public $cena;
    public $slika;
    public $kolicina;

    public function __construct($ime, $opis, $cena, $slika, $kolicina) // u constructu stavili smo da se proslede ove  informacije
        // varijabla ime je vidljiva i moze se koristiti unutar konstrukt funkcije samo
    {
        $this->ime = $ime; // sa $this->ime=ime kaze da uzme funkciju Zelatin npr ako je product  on je vezan za public varijablu pored nje odnosno za klasu
        $this->opis = $opis;
        $this->cena = $cena;
        $this->slika = $slika;
        $this->kolicina = $kolicina;
    }
    public function save()
    {
        $baza=mysqli_connect("localhost","root","","web_shop"); // pravimo konekciju sa bazom
        $ime=$baza->real_escape_string($this->ime); // pravimo sigurno konekciju sa bazom odnosno mozemo upisemo lakse ja pozvati sa novom varijablom nego kucamo $this->ime
        $opis=$baza->real_escape_string($this->opis);
        $cena=$baza->real_escape_string($this->cena);
        $slika=$baza->real_escape_string($this->slika);
        $kolicina=$baza->real_escape_string($this->kolicina);
        $baza->query("INSERT INTO proizvodi (ime,opis,cena,slika,kolicina) VALUES ('$ime','$opis',$cena, '$slika', $kolicina)");
    }
}

