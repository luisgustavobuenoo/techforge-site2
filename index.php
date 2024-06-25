<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vesper</title>
  <base href="http://localhost/projetotech2/">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="logoh.png">
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/logov.png" alt="logo site">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="quemsomos">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contato">Contato</a>
          </li>
        </ul>
        <div class="cart-icon">
          <a href="#" class="btn btn-custom me-2">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </div>
        <a href="#" class="btn btn-custom me-2">sing-up</a>
        <a href="#" class="btn btn-custom">Login</a>
      </div>
    </div>
  </nav>
</header>


<body class="bg-black">
  
 <main>
 <?php

if (isset($_GET["param"])) {
    $param = $_GET["param"];
    // serapar o parametro por /
    $p = explode("/", $param);
    //print_r($p);
}

$page = $p[0] ?? "home";
$jogo = $p[1] ?? NULL;

if ($page == "jogo") {
    $pagina = "jogo/{$jogo}.php";

} else {
    $pagina = "paginas/{$page}.php";
}

if (file_exists($pagina)) {
    include $pagina;
} else {
    include "paginas/erro.php";
}

?>
 </main>
  
  <!-- footer  -->
  <footer>
   <div class="container">
      <div class="footer-info">
        <div class="footer-logo">
        <a class="navbar-brand" href="index.php">
        <img src="images/logov.png" alt="logo site">
      </a>
        </div>
        <div class="footer-section">
          <h3>Contato</h3>
          <p>Endereço: Rua Interventor Manoel Ribas, n°2235</p>
          <p>Email: luisgustavobueno1@gmail.com</p>
          <p>Telefone: (44) 99986-0439</p>
        </div>
        <div class="footer-section social-section">
          <h3>Redes Sociais</h3>
          <ul class="social-icons" data-aos="flip-left">
            <li><a href="https://wa.me/5544999860439" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/luisgustavob___/" target="_blank"><i
                  class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://github.com/luisgustavobuenoo" target="_blank"><i class="fa-brands fa-github"></i></a>
            </li>
            <li><a href="https://www.linkedin.com/in/luis-gustavo-bueno-686396238/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Criado e Desenvolvido por Luis Gustavo. Transformando ideias em realidade digital. Todos os Direitos Reservados.</p>
      </div>
    </div>
  </footer>
  
  <!-- scripts  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>
</body>

</html>