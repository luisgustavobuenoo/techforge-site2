<?php

header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");



    $game[1] = array(
        "id" => 1,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card8.jpeg",
      );

    $game[2] = array(
        "id" => 2,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card9.jpeg",
      );
  
    $game[3] = array(
        "id" => 3,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card10.jpeg",
      );
  
    $game[4] = array(
        "id" => 4,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card11.jpeg",
      );
  
    $game[5] = array(
        "id" => 5,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card12.jpeg",
      );
  
    $game[6] = array(
        "id" => 6,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card13.jpeg",
      );
  
    $game[7] = array(
        "id" => 7,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card1.jpeg",
      );
  
    $game[8] = array(
        "id" => 8,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card2.jpeg",
      );
  
    $game[9] = array(
        "id" => 9,
        "title" => "vesper",
        "description" => "jogo mais bem avaliado...",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card3.jpeg",
      );
  



// converte jason 
    echo json_encode($game);






