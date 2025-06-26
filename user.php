<?php

class user {
    // praksa :varijable idu na vrh ,dok metode idu ispod njih
    public $email;
    public $password;
    public function __construct($email,$sifra) // dve privremene varijable unutar konstruktora nismo povezali(samo za ovu funkciju)
    {
       $this->email=$email;
       $this->password=$sifra;
    }
    public function  save()
    {
       $baza=mysqli_connect("localhost","root","","web_shop");
       $email=$baza->real_escape_string($this->email);// od ovog korisnika naseg uzmi email moramo eskpejovati zbog haka
        $sifra=$baza->real_escape_string($this->password);
        $baza->query("INSERT INTO korisnici (email,sifra) VALUES ('$email','$sifra')");
    }
}
// Kada je napravljen new User on treba da ispise napravljen objekat poruku
// treba kako smo u konstruktoru definisali privremena promenjive da ih povezemo sa funkcijama odnosno sa klasama i njihovim varijablama
// ovaj public function __construct($email,$password) sto sam prosledio u konstruktorski deo upisi u klasu odnosno public email