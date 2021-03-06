<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Granbery Consultoria">
    <title>III CAT</title>
    <link href="bundles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bundles/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="bundles/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="bundles/css/creative.css" rel="stylesheet">
    <style>
        .navbar-toggler {
            z-index: 1;
        }
        
        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>
    <?php $url = "http://" . $_SERVER['HTTP_HOST'] ?>
        <link rel="icon" type="image/x-icon" href="<?php echo $url ?>/bundles/img/favicon.ico">
</head>

<body id="page-top">
    <header class="masthead">
        <div class="header-content">
            <div class="header-content-inner">

            </div>
        </div>
    </header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="{{ url('app_home_show') }}"><img width="120" height="auto" src="bundles/img/bannercat2.png"></a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <p class="title-img text-center">III Congresso de Administração e Tecnologia
                    <br><span style="font-size: 11px">ISSN: 2525-7617</span></p>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cronogram">Cronograma</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="cronogram">
        <div class="container">
            <div class="col">
                <h1 class="display-5 text-center">Cronograma</h1>
                <hr class="primary">
            </div>
            <table class="table table-hover thead-inverse table-responsive">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Tema</th>
                        <th>Palestrante</th>
                        <th>Local</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="3">07/11/16</th>
                        <td>19h às 19h30</td>
                        <td>Credenciamento</td>
                        <td>-</td>
                        <td>Hall do Auditório Vitório Bergo</td>

                    </tr>
                    <tr>
                        <td>19h30 às 20h</td>
                        <td>Abertura</td>
                        <td>-</td>
                        <td>Auditório Vitório Bergo</td>
                    </tr>
                    <tr>
                        <td>20h às 21h30</td>
                        <td>Palestra Holocausto Brasileiro</td>
                        <td>Daniela Arbex</td>
                        <td>Auditório Vitório Bergo</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="5">08/11/16</th>
                        <td>18h às 19h</td>
                        <td>Apresentação de Pôster</td>
                        <td>-</td>
                        <td>Hall do Auditório Vitório Bergo</td>
                    </tr>
                    <tr>
                        <td>19h às 20h40</td>
                        <td>Mesa redonda: Intercâmbio</td>
                        <td>Everton R. Vecchi, Rafael Pontes e Israel M. de Souza Lima e Marcelo Mendes</td>
                        <td>Auditório Vitório Bergo</td>
                    </tr>
                    <tr>
                        <td>20h40 às 21h</td>
                        <td colspan="3" class="text-center"><strong>Intervalo</strong></td>
                    </tr>
                    <tr>
                        <td>21h às 22h30</td>
                        <td>Palestra: Paradoxos da Gestão de Pessoas em um mundo mutante</td>
                        <td>Dagmar Silva Pinto de Castro</td>
                        <td>Sala de Videoconferência</td>
                    </tr>
                    <tr>
                        <td>21h às 22h30</td>
                        <td>Palestra: Cenografia - do projeto à execução</td>
                        <td>Érika Moraes Lovisi</td>
                        <td>Auditório Vitório Bergo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section id="contact" class="no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-area">
                        <form method="post" action="php/send.php">
                            <br style="clear:both">
                            <h3 style="margin-bottom: 25px; text-align: center;">Formulário de Contato</h3>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Assunto">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Escreva sua mensagem aqui..." class="form-control message" rows="7" name="message"></textarea <span class="help-block">
                                <p id="characterLeft" class="help-block "></p>
                                </span>
                            </div>

                            <input id="btnSubmit" class="btn btn-primary pull-right" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5240.197217260528!2d-43.34661296611172!3d-21.765588546867107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xccaab1c690642b25!2sInstituto+Metodista+Granbery!5e0!3m2!1spt-BR!2sbr!4v1492303150845" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-4 offset-md-4 text-center">
                        <h3>VENHA ATÉ NÓS</h3>
                        <address>
                            <p><strong>FACULDADE METODISTA GRANBERY</strong></p>
                            <p>Telefone: (32) 2101-1800</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <p class="text-center">© 2017 - Todos os direitos reservados. Desenvolvido por <a style="color: white" href="https://www.granberyconsultoria.com.br">Granbery Consultoria</a></p>
            </div>
        </div>
    </div>
</body>

</html>
<script src="bundles/jquery/jquery.min.js"></script>
<script src="bundles/tether/tether.min.js"></script>
<script src="bundles/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="bundles/jquery-easing/jquery.easing.min.js"></script>
<script src="bundles/scrollreveal/scrollreveal.min.js"></script>
<script src="bundles/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="bundles/js/creative.min.js"></script>