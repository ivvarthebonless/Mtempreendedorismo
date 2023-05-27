<?php
  
 if(isset($_POST['submit']))
 {
 //   print_r($_POST['nome']);
 //   print_r($_POST['telefone']);
 //   print_r($_POST['email']);
 //   print_r($_POST['projeto']);
//
 // }
  include_once('conexao.php');

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['phone'];

    $result = mysqli_query($conexao, "INSERT INTO Cliente(Nome, Telefone, email)
    VALUES ('$nome', '$telefone', '$email')");
 }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketing Digital</title>
    <!-- Text font -->
    <link rel="stylesheet" href="estilos/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Icons Font -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <header id="event-subscription">
      <div id="disclaimer">
        <h2>Marketing Digital</h2>
        <p class="about-event">
          O serviço para impulsionar a presença de sua empresa na internet
        </p>
        <p></p>
        <p class="event-date"></p>
      </div>
      <div id="subscription-form">
        <p>Quer receber promoções em primeira mão? Insira suas informação</p>

        <form action="index.php" method="POST">
          <div class="form-group">
            <label for="name">Nome</label>
            <input name="name" type="text" placeholder="Digite seu nome" />
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input name="email" type="email" placeholder="Digite seu melhor e-mail" />
          </div>
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input name="phone" type="text" placeholder="Número de Whatsapp" />
          </div>
          
          <input type="submit" class="btn" name="submit" value="Quero me inscrever" />
        </form>
      </div>
    </header>
    <section id="key-benefits">
      <h2>Serviços prestados por nós:</h2>
      <div class="benefits">
        <div class="benefit">
          <div id="benefit-1" class="benefit-img"></div>
          <p>
            Alguma coisa muito legal, que vai fazer a diferença na vida do
            participante.
          </p>
        </div>
        <div class="benefit">
          <div id="benefit-2" class="benefit-img"></div>
          <p>
            Alguma coisa muito legal, que vai fazer a diferença na vida do
            participante.
          </p>
        </div>
        <div class="benefit">
          <div id="benefit-3" class="benefit-img"></div>
          <p>
            Alguma coisa muito legal, que vai fazer a diferença na vida do
            participante.
          </p>
        </div>
      </div>
    </section>
    <section id="location">
      <div id="address">
        <i class="bi bi-geo-alt-fill"></i>
        <div id="address-details">
          <p>Rua do evento, 1333</p>
          <p>Bairro</p>
          <p>Abertura: 14h</p>
        </div>
      </div>
      <div id="about-location">
        <h3>Nosso endereço</h3>
        <p>
          A nossa sede está em minas gerais, na cidade de Sabinopolis.
        </p>
      </div>
    </section>
    <section id="details">
      <div class="detail" id="detail-1">
        <div class="detail-description">
          <h3>Saiba um pouco mais sobre a empresa</h3>
        </div>
      </div>
      <div class="detail" id="detail-2">
        <div class="detail-description">
          <h3>Sobre nós</h3>
          <ul>
            <li>Empresa de midias sociais</li>
            <li>Clientes satisfeitos</li>
            <li>Especialistas nas áreas</li>
            <li>Organização</li>
            <li>E muito mais...</li>
          </ul>
        </div>
        <img src="imagem/hrz-5.jpg" alt="" />
      </div>
    </section>

    <?php
 if(isset($_POST1['submit']))
 {
  include_once('conexao.php');

    $nome = $_POST1['nome'];
    $email = $_POST1['email'];
    $servico = $_POST1['servico'];
    
    $result = mysqli_query($conexao, "INSERT INTO Projeto(Nome, Email, servicoescolhido)
    VALUES ('$nome','$email', '$servico' )");
 }
  ?>

    <section id="cta">
        <form action="index.php" method="POST1">
        <div class="form-group">
        <h2>Contato</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
        </div>
        <div class="form-group" >
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="exemplo@exemplo.com" required>
        </div>
        <div class="form-group" >
        <label for="servico">Serviço:</label>
        <input type="ser" id="servico" name="servico" placeholder="Serviço desejado" required>
        </div>
        <div class="form-group" >
        <input class="btn" type="submit" name ="submit"value="Fazer Orçamento">
      </form>
    </section>
    <footer id="footer">
      <h3>Mt Marketing</h3>
      <p>Democratizando o acesso as empresas no meio digital</p>
      <p><span>Entre em contato:</span> miguel123@gmail.com.br</p>
      <p><span>Ou pelo telefone:</span> (55)99990-9999</p>
    </footer>
  </body>
</html>
