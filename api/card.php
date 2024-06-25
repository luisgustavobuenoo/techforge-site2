<?php

header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");



    $game[1] = array(
        "id" => 1,
        "title" => "Suvival of the Undead",
        "description" => "Prepare-se para um mundo devastado pela praga dos mortos-vivos. Em Survival of the Undead, você enfrentará hordas intermináveis de zumbis sedentos.",
        "linkJogo" => "https://localhost/projetotech2/projetozumbie/index.html",
   
        "fotoCard" => "http://localhost/projetotech2/images/card1.jpeg",
      );
      

    $game[2] = array(
        "id" => 2,
        "title" => "Space Thunder",
        "description" => "embarque em uma jornada épica através das estrelas desconhecidas. Pilote sua nave espacial através de sistemas solares interligados, desafiando piratas espaciais.",
        "linkJogo" => "http://localhost/projetotech2/SpaceThunder/index.html",
   
        "fotoCard" => "http://localhost/projetotech2/images/card2.jpeg",
      );
  
    $game[3] = array(
        "id" => 3,
        "title" => "Em Breve: Noite dos Espíritos Sombrios",
        "description" => "Em breve, mergulhe em uma noite de Halloween repleta de mistério e terror. Explore uma cidade abandonada.",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card3.jpeg",
      );
  
    $game[4] = array(
        "id" => 4,
        "title" => "Em Breve: Pesadelo Aquático",
        "description" => "Prepare-se para uma experiência de terror única em águas profundas. Em breve, navegue por um lago assombrado.",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card4.jpeg",
      );
  
    $game[5] = array(
        "id" => 5,
        "title" => "Em Breve: Noite de Tormento",
        "description" => "Prepare-se para uma noite de pesadelo, onde as sombras se contorcem e o medo se materializa. Em breve.",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card5.jpeg",
      );
  
    $game[6] = array(
        "id" => 6,
        "title" => "Em Breve: Pesadelo Profundo",
        "description" => "Em breve, mergulhe em um pesadelo de terror psicológico onde os limites entre sonho e realidade se desfazem.",
        "linkJogo" => "http://localhost/projetotech2/",
   
        "fotoCard" => "http://localhost/projetotech2/images/card6.jpeg",
      );



// converte jason 
    echo json_encode($game);






