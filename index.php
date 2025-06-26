<?php

require_once "models/user.php";

$korisnikMiodrag=new User("realsosijedad123@gmail.com","123456" ); // pravimo novog korisnika
$korisnikMiodrag->save();

$korisnikAngie=new User("angie@gmail.com","12345");
$korisnikAngie->save();

echo $korisnikMiodrag->email;
echo $korisnikAngie->email;

/*
 * Sta smo dobili sa ovim kodom za prikazivanje dobili smo :
 * 1)Email i lozinka moraju se proslediti kada se pravi novi korisnik
 * 2)Uzimamo Email i Lozinku i povezujemo sa korisnickim emailom definisani u klasi
 *
 */
