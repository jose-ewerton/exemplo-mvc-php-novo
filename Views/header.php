<!--Inicio do Header -->    
<div id="header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light "> <!--bg-light adiciona um bg cinza-->
        <a class="navbar-brand" href="http://localhost/exemplo-mvc-php-novo/">
          <!--<img src="./Midias/logo2.svg" /> --> 
          <h1 class="h1">Somos 4 Eletrônicos</h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav"><!--justify-content-end adiciona o menu a direita -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=<?php echo "home"; ?>>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=<?php echo "sobre"; ?>>Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=<?php echo "produto"; ?>>Produtos</a>
            </li>
          </ul>
        </div>
    </nav>
  </div> <!--container centraliza o, existe o container e container-fluid um deixa breakpoints maiores que o outro, mais sem eles fica o tamanho da tela--> 
</div> <!--id header -->
<!--Final do Header -->





    
