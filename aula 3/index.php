<?php
class BOOK{
    public $title;
    public $author;
    public $pric



        function getTitle(){
        return $this->title;
    }
    function author() {
        return $this->author;
    }
    function getprice() {
        return $this->pric;
    }
}

$livro1 = new Book("harry potter", "J K Rolling",28.99);
$livro2 = new Book("Biblia", "Deus",90.99);
$livro3 = new Book("MOMO", "Thomas Mann",18.99);
$livro4 = new Book("ensaio sobre a cegueira", "saramgo",38.99);
$carrinhoCompras = array($livro1,$livro2,$livro3,$livro4);
?>



<html>
    <head>
        <title> PHP OBJECT </title>
    </head>
    <body>
        <h1>carrinho de compras</h1>
        <?php
        for(i=0;i<$carrinhoCompras.count;i++){
            echo "titulo:".$carrinhoCompras[i]->getTitle();
            
        }
        