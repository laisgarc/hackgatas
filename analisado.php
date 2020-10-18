<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://indestructibletype.com/fonts/Jost.css" type="text/css" charset="utf-8" />
    <meta charset="UTF-8">
    <title>Avalie seus hábitos</title>

    <!--Importando bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--Acabei de importar bootstrap-->

    <link rel="stylesheet" href="CSS/analisado.css">
</head>

<body>
    <div class='container'>
        <br><br>
        <h1 class='text-center'>Avalie seus hábitos e entenda<br> o que eles significam</h1></br>
        <p>O algoritmo de cálculo de respostas será validado por uma nutricionista.</p>
        <img class='logo' src='imgs/logo.png'>
        <br><br>

                <div class='row'>
                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Horas de sono</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/sono.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='1' class='seta seta-para-baixo1' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='1' style='display:none' class='seta seta-para-cima1' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico1-conteudo' style='display:none'>
                            
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Café da manhã</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/cafe-da-manha.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='2' class='seta seta-para-baixo2' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='2' style='display:none' class='seta seta-para-cima2' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico2-conteudo' style='display:none'>
                            
                        </div>

                    </div> <!--AQUIII-->
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Quantidade de refeições</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/quant-refeicoes.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='3' class='seta seta-para-baixo3' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='3' style='display:none' class='seta seta-para-cima3' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico3-conteudo' style='display:none'>
                            
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-sm-2'></div>

                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Frutas e verduras</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/frutas-verduras.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='4' class='seta seta-para-baixo4' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='4' style='display:none' class='seta seta-para-cima4' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico4-conteudo' style='display:none'>
                            
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Gorduras</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/gorduras.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='5' class='seta seta-para-baixo5' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='5' style='display:none' class='seta seta-para-cima5' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico5-conteudo' style='display:none'>
                            
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-2'></div>
                </div>

                <div class='row'>
                    <div class='col-sm-2'></div>

                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Processados</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/processados.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='6' class='seta seta-para-baixo6' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='6' style='display:none' class='seta seta-para-cima6' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico6-conteudo' style='display:none'>
                            
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-4'>
                        <div class="card mx-auto form-card">
                            <div class="card-body">
                            <div class='card topico'>
                        <div class='row'>
                            <div class='col-md-11'>
                                <h2 class='topico'>Álcool</h2>
                                <img class='fotinho' src='imgs/Formulario-analisado/alcool.jpg'>
                            </div>
                            <div class='col-md-1'>
                                <img id='7' class='seta seta-para-baixo7' src='imgs/Icones/seta-para-baixo.svg' onclick='mostraConteudo(this.id)'>
                                <img id='7' style='display:none' class='seta seta-para-cima7' src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                            </div>
                        </div>

                        <div class='topico7-conteudo' style='display:none'>
                            
                        </div>

                    </div>
                            </div>
                        </div>
                    </div>

                    <div class='col-sm-2'></div>
                </div>

    </div>

    <script type='text/javascript'>
            function mostraConteudo(id) {
                classe = '.topico' + id + '-conteudo';
                $(classe).slideDown()
                $('.seta-para-baixo' + id).hide()
                $('.seta-para-cima' + id).show()
            }

            function escondeConteudo(id) {
                classe = '.topico' + id + '-conteudo';
                $(classe).slideUp()
                $('.seta-para-baixo' + id).show()
                $('.seta-para-cima' + id).hide()
            }
        
    </script>

</body>

</html>