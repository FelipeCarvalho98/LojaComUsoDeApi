<?php
$url = "https://fakestoreapi.com/products";
$dados = file_get_contents( $url );
if($dados === FALSE){
    "erro ao acessar";
}
$produtos = json_decode($dados, true);
if ($produtos === NULL){
    echo "vazio";
}


foreach ($produtos as $pr){
    if($pr['category'] == "electronics"){
        $eletronicos[] = $pr;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="loja.css">
</head>
<body>
    <h1>Bem vindo a loja</h1>
   <div class="grid-container">
     <div class="item"> <A id="Oferta">Oferta do dia </A>  
     <div class="imagemp">
        <img src="<?php echo $eletronicos[0]['image'];?>"> 
     </div>
    <a class="titulop"><?php  echo $eletronicos[0]['title']?></a>

   <p class="precop">PELO VALOR DE <?php echo "R$ " . $eletronicos[0]['price'].",99"?></p>
   <p class="quantidade"> apenas <?php echo $eletronicos[0]['rating']['count'] ?> EM ESTOQUE</p>
 <p class="avaliação"> Avaliação: <?php echo $eletronicos[0]['rating']['rate']?> Estrelas</p>
</div>
<div class="item"> <A id="Oferta">Oferta do dia </A>  
     <div class="imagemp">
        <img src="<?php echo $eletronicos[1]['image'];?>"> 
     </div>
    <a class="titulop"><?php  echo $eletronicos[1]['title']?></a>

   <p class="precop">PELO VALOR DE <?php echo "R$ " . $eletronicos[1]['price'].",99"?></p>
   <p class="quantidade"> apenas <?php echo $eletronicos[1]['rating']['count'] ?> EM ESTOQUE</p>
 <p class="avaliação"> Avaliação: <?php echo $eletronicos[1]['rating']['rate']?> Estrelas</p>
</div>
<div class="item"> <A id="Oferta">Oferta do dia </A>  
     <div class="imagemp">
        <img src="<?php echo $eletronicos[2]['image'];?>"> 
     </div>
    <a class="titulop"><?php  echo $eletronicos[2]['title']?></a>

   <p class="precop">PELO VALOR DE <?php echo "R$ " . $eletronicos[2]['price'].",99"?></p>
   <p class="quantidade"> apenas <?php echo $eletronicos[2]['rating']['count'] ?> EM ESTOQUE</p>
 <p class="avaliação"> Avaliação: <?php echo $eletronicos[2]['rating']['rate']?> Estrelas</p>
</div>
<div class="item"> <A id="Oferta">Oferta do dia </A>  
     <div class="imagemp">
        <img src="<?php echo $eletronicos[3]['image'];?>"> 
     </div>
    <a class="titulop"><?php  echo $eletronicos[3]['title']?></a>

   <p class="precop">PELO VALOR DE <?php echo "R$ " . $eletronicos[3]['price'].",99"?></p>
   <p class="quantidade"> apenas <?php echo $eletronicos[3]['rating']['count'] ?> EM ESTOQUE</p>
 <p class="avaliação"> Avaliação: <?php echo $eletronicos[3]['rating']['rate']?> Estrelas</p>
</div>
<div class="item"> <A id="Oferta">Oferta do dia </A>  
     <div class="imagemp">
        <img src="<?php echo $eletronicos[4]['image'];?>"> 
     </div>
    <a class="titulop"><?php  echo $eletronicos[4]['title']?></a>

   <p class="precop">PELO VALOR DE <?php echo "R$ " . $eletronicos[4]['price'].",99"?></p>
   <p class="quantidade"> apenas <?php echo $eletronicos[4]['rating']['count'] ?> EM ESTOQUE</p>
 <p class="avaliação"> Avaliação: <?php echo $eletronicos[4]['rating']['rate']?> Estrelas</p>
</div>
<div class="item"> <A id="Oferta">Oferta do dia </A>  
     <div class="imagemp">
        <img src="<?php echo $eletronicos[5]['image'];?>"> 
     </div>
    <a class="titulop"><?php  echo $eletronicos[5]['title']?></a>

   <p class="precop">PELO VALOR DE <?php echo "R$ " . $eletronicos[5]['price'].",99"?></p>
   <p class="quantidade"> apenas <?php echo $eletronicos[5]['rating']['count'] ?> EM ESTOQUE</p>
 <p class="avaliação"> Avaliação: <?php echo $eletronicos[5]['rating']['rate']?> Estrelas</p>
</div>
   </div>
</body>
</html>