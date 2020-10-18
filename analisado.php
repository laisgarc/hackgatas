<?php
    session_start();
    $insigths = $_SESSION['insigth'];
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
        <h1 class='text-center'>Seus resultados estão prontos!<br>Confira!</h1></br>
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
                                    <img id='1' class='seta seta-para-baixo1' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='1' style='display:none' class='seta seta-para-cima1'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico1-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['horasSono']) {
                                        case 0:
                                            echo "<p>Dormir no mínimo oito horas é o recomendado pela OMS para um adulto. Tente dormir um pouco mais, e, se preciso, procure um profissional.</p>";
                                            break;
                                        case 1:
                                            echo "<p>Dormir no mínimo oito horas é o recomendado pela OMS para um adulto. Tente dormir um pouco mais, e, se preciso, procure um profissional.</p>";
                                            break;
                                        case 2:
                                            echo "<p>Está na medida certa de acordo com a OMS! Continue assim.</p>";
                                            break;
                                        case 4:
                                            echo "<p>De acordo com a OMS, dormir mais de 9 horas pode ser problemático para seu dia a dia. As refeições podem ficar mais difíceis de serem feitas, seu metabolismo pode ficar complexado, além de talvez não ser possível gastar toda a energia possível em seu corpo. Tente dormir menos, e, se preciso, procure um profissional.</p>";
                                            break;
                                        default:
                                            echo "<p>Está na medida certa de acordo com a OMS! Continue assim.</p>";
                                    }
                                ?>
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
                                    <img id='2' class='seta seta-para-baixo2' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='2' style='display:none' class='seta seta-para-cima2'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico2-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['cafeDaManha']) {
                                        case 0:
                                            echo "<p>Tente comer todos os dias! O café da manhã é uma refeição importante para todo o seu dia.</p>";
                                            break;
                                        case 1:
                                            echo "<p>Tente comer mais que somente um café  todos os dias! O café da manhã balanceado é uma refeição importante para todo o seu dia.</p>";
                                            break;
                                        case 2:
                                            echo "<p>Tente comer todos os dias! O café da manhã é uma refeição importante para todo o seu dia.</p>";
                                            break;
                                        default:
                                            echo "<p>É o hábito correto! Continue assim. </p>";
                                    }
                                ?>
                            </div>

                        </div>
                        <!--AQUIII-->
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
                                    <img id='3' class='seta seta-para-baixo3' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='3' style='display:none' class='seta seta-para-cima3'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico3-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['quantRefeicoes']) {
                                        case 0:
                                            echo "<p>Faça várias refeições, de forma a não estar mais de 3h30m sem comer, assim, poderá controlar o seu apetite ao longo do dia.</p>";
                                            break;
                                        case 1:
                                            echo "<p>Faça várias refeições, de forma a não estar mais de 3h30m sem comer, assim, poderá controlar o seu apetite ao longo do dia</p>";
                                            break;
                                        case 2:
                                            echo "<p>Faça várias refeições, de forma a não estar mais de 3h30m sem comer, assim, poderá controlar o seu apetite ao longo do dia</p>";
                                            break;
                                        default:
                                            echo "<p>É o hábito correto de acordo com a OMS! Continue assim!</p>";
                                    }
                                ?>
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
                                    <img id='4' class='seta seta-para-baixo4' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='4' style='display:none' class='seta seta-para-cima4'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico4-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['frutasVerduras']) {
                                        case 0:
                                            echo "<p>Ao longo do dia consuma 5 porções de fruta e hortícolas, por exemplo coma 3 peças de fruta por dia mais 2 porções de hortícolas, na sopa e ainda como acompanhamento do prato. Incremente ao seu dia um bom aporte de fibra, vitaminas e minerais</p>";
                                            break;
                                        case 1:
                                            echo "<p>Ao longo do dia consuma 5 porções de fruta e hortícolas, por exemplo coma 3 peças de fruta por dia mais 2 porções de hortícolas, na sopa e ainda como acompanhamento do prato. Incremente ao seu dia um bom aporte de fibra, vitaminas e minerais</p>";
                                            break;
                                        case 2:
                                            echo "<p>Ao longo do dia consuma 5 porções de fruta e hortícolas, por exemplo coma 3 peças de fruta por dia mais 2 porções de hortícolas, na sopa e ainda como acompanhamento do prato. Incremente ao seu dia um bom aporte de fibra, vitaminas e minerais</p>";
                                            break;
                                        default:
                                            echo "<p>É o hábito correto! Continue assim.</p>";
                                    }
                                ?>
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
                                    <img id='5' class='seta seta-para-baixo5' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='5' style='display:none' class='seta seta-para-cima5'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico5-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['gorduras']) {
                                        case 0:
                                            echo "<p>Limite o consumo de gordura na confecção e tempero, e quando o fizer, opte pelo consumo de azeite. Este é rico em gordura monoinsaturada importante para a prevenção das doenças cardiovasculares.  Tente evitar outros tipos.</p>";
                                            break;
                                        case 1:
                                            echo "<p>Limite o consumo de gordura na confecção e tempero, e quando o fizer, opte pelo consumo de azeite. Este é rico em gordura monoinsaturada importante para a prevenção das doenças cardiovasculares.  Tente evitar outros tipos.</p>";
                                            break;
                                        case 2:
                                            echo "<p>Limite o consumo de gordura na confecção e tempero, e quando o fizer, opte pelo consumo de azeite. Este é rico em gordura monoinsaturada importante para a prevenção das doenças cardiovasculares.  Tente evitar outros tipos.</p>";
                                            break;
                                        case 3:
                                            echo "<p>Limite o consumo de gordura na confecção e tempero, e quando o fizer, opte pelo consumo de azeite. Este é rico em gordura monoinsaturada importante para a prevenção das doenças cardiovasculares.  Tente evitar outros tipos.</p>";
                                            break;
                                        case 4:
                                            echo "<p>Limite o consumo de gordura na confecção e tempero, e quando o fizer, opte pelo consumo de azeite. Este é rico em gordura monoinsaturada importante para a prevenção das doenças cardiovasculares. Tente evitar outros tipos.
                                            </p>";
                                            break;
                                        default:
                                            echo "<p>Essas são as boas gorduras, continue assim! O peixe é rico em ácidos gordos ómega 3, importantes na redução do colesterol sanguíneo tal como na prevenção de doenças neurodegenerativas. Por isso, opte pelo seu consumo em detrimento do consumo de carne, optando pelas carnes brancas (peru, frango, coelho).</p>";
                                    }
                                ?>
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
                                    <img id='6' class='seta seta-para-baixo6' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='6' style='display:none' class='seta seta-para-cima6'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico6-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['processados']) {
                                        case 0:
                                            echo "<p>Esses alimentos ricos em sódio (normalmente presentes nos alimentos processados) não contêm a quantidade necessária de potássio, aumentando o risco de desenvolver doenças e até derrames. Tente evitar.</p>";
                                            break;
                                        case 1:
                                            echo "<p>Esses alimentos ricos em sódio (normalmente presentes nos alimentos processados) não contêm a quantidade necessária de potássio, aumentando o risco de desenvolver doenças e até derrames. Tente evitar.</p>";
                                            break;
                                        case 2:
                                            echo "<p>Esses alimentos ricos em sódio (normalmente presentes nos alimentos processados) não contêm a quantidade necessária de potássio, aumentando o risco de desenvolver doenças e até derrames. Tente evitar.</p>";
                                            break;
                                        default:
                                            echo "<p>É o hábito correto! Continue assim.</p>";
                                    }
                                ?>
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
                                    <img id='7' class='seta seta-para-baixo7' src='imgs/Icones/seta-para-baixo.svg'
                                        onclick='mostraConteudo(this.id)'>
                                    <img id='7' style='display:none' class='seta seta-para-cima7'
                                        src='imgs/Icones/seta-para-cima.svg' onclick='escondeConteudo(this.id)'>
                                </div>
                            </div>

                            <div class='topico7-conteudo' style='display:none'>
                                <?php
                                    switch ($insigths['alcool']) {
                                        case 0:
                                            echo "<p>Para quem costuma beber diariamente mais de duas latas de cerveja ou duas doses de destilado, como uísque ou pinga, aqui vai um alerta: o nível de álcool presente nessas quantidades de bebida está acima do recomendado pela Organização Mundial da Saúde (OMS), podendo causar danos ao organismo. De acordo com os especialistas, as pessoas saudáveis podem consumir, no máximo, 30 gramas de álcool por dia. Tente reduzir!</p>";
                                            break;
                                        case 1:
                                            echo "<p>Para quem costuma beber diariamente mais de duas latas de cerveja ou duas doses de destilado, como uísque ou pinga, aqui vai um alerta: o nível de álcool presente nessas quantidades de bebida está acima do recomendado pela Organização Mundial da Saúde (OMS), podendo causar danos ao organismo. De acordo com os especialistas, as pessoas saudáveis podem consumir, no máximo, 30 gramas de álcool por dia. Tente reduzir!</p>";
                                            break;
                                        case 2:
                                            echo "<p>Para quem costuma beber diariamente mais de duas latas de cerveja ou duas doses de destilado, como uísque ou pinga, aqui vai um alerta: o nível de álcool presente nessas quantidades de bebida está acima do recomendado pela Organização Mundial da Saúde (OMS), podendo causar danos ao organismo. De acordo com os especialistas, as pessoas saudáveis podem consumir, no máximo, 30 gramas de álcool por dia. Tente reduzir!</p>";
                                            break;
                                        case 3:
                                            echo "<p>Para quem costuma beber diariamente mais de duas latas de cerveja ou duas doses de destilado, como uísque ou pinga, aqui vai um alerta: o nível de álcool presente nessas quantidades de bebida está acima do recomendado pela Organização Mundial da Saúde (OMS), podendo causar danos ao organismo. De acordo com os especialistas, as pessoas saudáveis podem consumir, no máximo, 30 gramas de álcool por dia. Tente reduzir!</p>";
                                            break;
                                        case 4:
                                            echo "<p>É um bom hábito! Continue assim!</p>";
                                            break;
                                        default:
                                            echo "<p>É um bom hábito! Continue assim!</p>";
                                    }
                                ?>
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