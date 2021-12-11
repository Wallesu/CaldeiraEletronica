<?php
    session_start();
    include('../backEnd/function.php')
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landing.CSS">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Landing Eletrônica Caldeira</title>
</head>
<body>
    <header class="navbar">
        <div class="container-fluid">
            <div>
                <h2 class="text-white">Eletrônica Caldeira</h2>
            </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#faça_seu_orçamento" class="btn btn-carousel text-white">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-carousel text-white" href="logaUsuario.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-carousel text-white" href="cadastraUsuario.php">Cadastro</a>
                    </li>
                </ul>
        </div>
    </header>
 
    <main class="fundo">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="src/img1-carousel.png" class="d-block w-100" alt="..." style="height: 33rem;">
            <div class="carousel-caption d-none d-md-block h-75 text-carousel">
              <h1>Quebrou?</h1>
              <p>Eletrônica Caldeira é a solução.</p>
              <a href="#faça_seu_orçamento" class="btn btn-carousel text-white">Entre em contato</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="src/img2-carousel.png" class="d-block w-100" alt="..." style="height: 33rem;">
            <div class="carousel-caption d-none d-md-block h-75 text-carousel">
              <h1>Metodologia exclusisa</h1>
              <p>Trabalhamos com as melhores praticas do mercado.</p>
              <a href="#faça_seu_orçamento" class="btn btn-carousel text-white">Entre em contato</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="b-example-divider"></div>

      <section class="Assistencia">
        <div class="container my-4">
          <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h3 class="display-6 fw-bold lh-1">Assistência técnica em TV`S, Computadores e celulares.</h3>
                <p class="lead">A Eletrônica Caldeira é uma empresa com modernos laboratórios de eletrônica. Isso garante à nossos clientes, excelência nos serviços que prestamos.</p>
                <p class="lead">nosso foco é proporcionar agilidade e qualidade em nossos serviços para todos os modelos e marcas.</p>
                <div class="d-grid gap-2 d-md-flex mb-4 mb-lg-3">
                  <button type="button" class="btn btn-outline-success btn-lg px-4" href="#faça_seu_orçamento">Faça seu orçamento</a>
                </div>
              </div>
            <div class="col-md-5 col-lg-4 p-0">
              <img class="featurette-image img-fluid mx-auto" src="src/img-empresa.png" alt="Generic placeholder image" style="width: 50rem; height: 20rem;">
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container container-duvidas p-0 my-4">
          <div class="row">
            <div class="col-sm-5">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="src/carousel2-img1.jpeg" class="d-block w-100" alt="..." style="height: 35rem;">
                  </div>
                  <div class="carousel-item">
                    <img src="src/carousel2-img2.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                  </div>
                  <div class="carousel-item">
                    <img src="src/carousel2-img3.jpg" class="d-block w-100" alt="..."  style="height: 35rem;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-sm-6 text-duvidas text-white m-4">
              <h2>Principar defeitos e principas dúvidas</h2>
              <p>Diversos problemas podem acontecer com seu aparelho, sendo necessário encamanhá-lo para o conserto em uma assistência técnica.</p>
              <p>Aqui na Eletrônica Caldeira somos especializados em resolver todos os tipos de questões relacionadas à seu aparelho eletronico.</p>
              <p>Sejam falhas mais simples ou mais complexas, nossos técnicos são altamente capacitados a realizar a manutenção do seu aparelho, independente da marca ou modelo</p>
              <h5>Principas dúvidas:</h5>
              <ul>
                <li>TV não liga</li>
                <li>Placa mãe queimou</li>
                <li>Tela quebrada</li>
                <li>TV com som e sem imagem</li>
                <li>Celular não carrega</li>
              </ul>
              <div class="d-grid gap-2 d-md-flex mb-4 mb-lg-3">
                  <a type="button" class="btn btn-outline-success btn-lg px-4" href="#faça_seu_orçamento">Solicitar orçamento</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container container d-flex justify-content-around mb-5">
          <div class="col-md-6 col-lg-10">
              <h4 class="col-sm-10 mb-3 p-2 bg-orçamento text-white" id="faça_seu_orçamento">Faça seu orçamento</h4>
              <form action="../backEnd/salva_contato.php" method="POST" novalidate>
                <div class="row g-3">

                  <div class="col-md-5">
                    <label for="country" class="form-label">Qual o seu nome?</label>
                    <input type="text" class="form-control " id="nome" name="nnome">
                  </div>

                  <div class="col-md-5">
                    <label for="country" class="form-label">Digite seu e-mail de contato</label>
                    <input type="email" class="form-control" id="email" name="nemail">
                  </div>

                  <div class="col-sm-10">
                      <label for="exampleFormControlTextarea1" class="form-label">Qual o problema com o produto?</label>
                      <textarea class="form-control " id="textArea" name="nProblema" rows="3" required></textarea>
                    <div class="invalid-feedback">
                      Invalido requer nome
                    </div>
                  </div>

                  <div class="col-md-5">
                    <label for="country" class="form-label">Qual o modelo do produto?</label>
                    <select class="form-select " id="modelo" name="nModeloproduto" required>
                      <option value="">Celular</option>
                      <option>Computador</option>
                      <option>TV</option>
                    </select>
                    <div class="invalid-feedback">
                      Selecione uma opção valida.
                    </div>
                  </div>
      
                  <div class="col-md-5">
                    <label for="state" class="form-label">Qual a marca?</label>
                    <select class="form-select" id="marca" name="nMarcaproduto" required>
                      <option value="0">Selecione</option>
                      <?php echo listaMarcas();?>
                    </select>
                    <div class="invalid-feedback">
                      Selecione uma opção valida.
                    </div>
                  </div>
                </div>
      
                <div class="row gy-3">
                  <div class="col-sm-10">
                      <label for="formFile" class="form-label ">Mande uma foto do produto</label>
                      <input class="form-control" type="file" id="foto" name="nFoto" value="">
                  </div>
      
                <hr class="my-3">
      
                <button class="col-md-7 col-lg-10 btn btn-outline-success btn-lg" type="submit">Continuar seu orçamento</button>
              </form>
            </div>
          </div>
      </section>
    </main>

    <div class="container-fluid container-footer">
        <footer class="py-4">
          <div class="row">
            <div class="col-6">
              <h5 class="text-white">Fale conosco</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="text-decoration-none text-white p-0">eletronica@caldeira.com.br</a></li>
                <li class="nav-item mb-2"><a href="#" class="text-decoration-none text-white p-0">(47)4002-8922</a></li>
              </ul>
              <h5 class="text-white">Endereço</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="text-decoration-none text-white p-0">Brasil, SC</a></li>
                <li class="nav-item mb-2"><a href="#" class="text-decoration-none text-white p-0">Joinville, Centro, 512</a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-1">
                <ul class="list-unstyled">
                    <h2 class="text-white">Contatos</h2>
                    <p class="text-white">Entre em contato:</p>
                    <button class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg> Instagram</button>
                    <button class="btn btn-outline-light my-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                      </svg> Whatsapp</button>
                </ul>
            </div>
          </div>
      
          <div class="d-flex justify-content-between py-4 my-4">
            <p class="text-white">&copy; 2021 Eletronica Caldeira Company, Todos os direitos reservados.</p>
          </div>
        </footer>
      </div>
    
</body>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
</html>
