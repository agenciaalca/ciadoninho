<!DOCTYPE html>
<html>
    <head>
        <?php include 'mail.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="icon" href="img/icone-instagram.png" />
        <title>Cia do Ninho</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110056870-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-110056870-1');
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div id="contato">
                    <div class="col-md-4 col-md-offset-8">
                        <div class="logo">
                            <img class="img-responsive" src="img/favicon.png">
                        </div>
                        <div class="titulo">
                            <h2>Site em Construção</h2>
                        </div>
                        <form method="post" action="index.php#formulario" name="formulario-contato">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="nome*" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="6" 
                                              id="mensagem" name="mensagem" placeholder="mensagem*" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input class = "btn btn-custom" id = "submit" name = "submit" type = "submit" value = "ENVIAR">

                                <br>
                                <a name="formulario"></a>
                                <div class="mensagem-alerta"><?php echo $msg ?></div>
                            </div>
                        </form>
                        <div class="redes-sociais col-md-12">
                            <a href="https://www.facebook.com/ciadoninho/" target="_blank"><img src="img/icone-facebook.png"></a>
                            <a href="https://www.instagram.com/ciadoninho/" target="_blank"><img src="img/icone-instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
