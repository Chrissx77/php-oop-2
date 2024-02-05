<?php

include("./models/Prodotto.php");
include("./models/Giochi.php");
include("./models/Cibo.php");
include("./models/Cucce.php");
include("./models/Categoria.php");


$array_prodotti = [
    
    $prod1 = new Giochi("30$", "RoyalCanin", "icon_cat", "giochi", "img_prod", new Categoria("cane"), "pallina"),

    $prod2 = new Cibo("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("gatto"),"15kg"),

    $prod3 = new Cibo("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("gatto"),"15kg"),

    $prod4 = new Cucce("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("cane"),"40x40cm"),

    $prod5 = new Cucce("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("cane"),"40x40cm"),

];

// var_dump($array_prodotti);
