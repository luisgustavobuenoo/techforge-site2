<?php
$api = file_get_contents("http://localhost/projetotech2/api/card.php");
$dadosApi = json_decode($api);

 foreach ($dadosApi as$jogo){
}
?>
    
    
    
    
    
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/cardcarrosel.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/cardcarosel2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/cardcarosel3.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="biblioteca">
      <h2>Biblioteca de jogos</h2>
    </div>
    <div class="container text-center"> 
      <div class="row">

      <?php
         foreach ($dadosApi as $jogo) {
         ?>

        <div class="col">
          <div class="card" style="width: 18rem;" data-aos="fade-up" data-aos-duration="400">
            <img src="<?=$jogo->fotoCard ?>" class="card-img-top" alt="card1">
            <div class="card-body">
              <h5 class="card-title"><?=$jogo->title ?></h5>
              <p class="card-text" data-bs-toggle="modal" data-bs-target="#exampleModal"><?=$jogo->description ?></p>
              <a href="#" class="btn btn-custom me-2">R$ 250,00</a>
              <a href="#" class="btn btn-custom me-2" >Demo
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                                <path d="M10.804 8 5 4.633v6.734zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696z" />
               </svg> 
              </a>
            </div>
          </div>
        </div>
        

      <?php
        }
        ?>
        

      </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">vesper</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>