<?php
session_start();

?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey"><a href="https://www.linkedin.com/in/brendon-lina-9296041a5/" target="_blank">Desenvolvedor</a></h3>
                    <?php 
                        if(isset($_SESSION['Não autenticado'])):
                            ?>

                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                           <?php
                            endif;
                            unset($_SESSION['Não autenticado']);
                            ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                           
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" name="btn">Entrar</button>

                             <!--<?php 
                                if(empty($_SESSION['Not auth'])):

                                ?>
                                <div class="notification is-danger">
                                    <p>ERRO: Campo vazio.</p>
                                    </div>
                                <?php
                            endif;
                            unset($_SESSION['Not auth']);
                            ?>-->    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Desenvolvido</strong> por <a href="https://www.linkedin.com/in/brendon-lina-9296041a5/" target="_blank">Brendon Lina </a>. The source code is licensed
      <a href="https://www.linkedin.com/in/brendon-lina-9296041a5/" target="_blank">Linkedin</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>
</body>

</html>