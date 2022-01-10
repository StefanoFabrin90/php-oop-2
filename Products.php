<?php
// Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Eseguire poi degli output istanziando oggetti delle varie classi.


//classe prodotti
class Products
{
    public $products1;
    public $products2;
    public $products3;
    public $products4;

    public function __construct($products1, $products2, $products3, $products4)
    {
        $this->products1 = $products1;
        $this->products2 = $products2;
        $this->products3 = $products3;
        $this->products4 = $products4;
    }
};

//classe utenti
class User
{
    public $employed1;
    public $employed2;
    public $employed3;
    public $employed4;

    public function __construct($employed1, $employed2, $employed3, $employed4)
    {
        $this->employed1 = $employed1;
        $this->employed2 = $employed2;
        $this->employed3 = $employed3;
        $this->employed3 = $employed4;
    }
}


//prodotti apple
$appleProduct = new Products('Iphone', 'Ipad', 'Airpos', 'MacAir');
//var_dump($appleProduct);

$appleUser = new User('luca', 'paolo', 'stefano', 'chiara');
var_dump($appleUser);

echo $appleProduct->products1 . " " . $appleUser->employed1 . '<br>';
echo $appleProduct->products2 . " " . $appleUser->employed2 . '<br>';
echo $appleProduct->products3 . " " . $appleUser->employed3 . '<br>';
echo $appleProduct->products4 . " " . $appleUser->employed4 . '<br>';
