<?php

include("./models/Prodotto.php");
include("./models/Giochi.php");
include("./models/Cibo.php");
include("./models/Cucce.php");
include("./models/Categoria.php");


$prod = new Prodotto("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("cane"));
var_dump($prod);
