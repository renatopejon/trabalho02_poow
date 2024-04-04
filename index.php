<?php
require_once "func.php";


if(isset($_POST['inserir'])){
    $nome = filter_input(INPUT_POST, "nome");
    
    $cpf = filter_input(
        INPUT_POST, "cpf"
    );

    $email = filter_input(
        INPUT_POST, "email"
    );

    $telefone = filter_input(
        INPUT_POST, "telefone"
    );

    $dataconsulta = filter_input(
        INPUT_POST, "dataconsulta"
    );

    $horario = filter_input(
        INPUT_POST, "horario"
    );

    inserirConsulta(
        $conexao, $nome, $cpf, $email, $telefone, $dataconsulta, $horario
    );

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
    <title>Trafalgar</title>
</head>
<body>
    
    <header>
        <div class="header_content">
            <div class="header_logo">
                <a href="#home"><img src="./image/logo.png" alt="logo"></a>
            </div>
            <nav class="header_menu">
                <ul>
                    <li><a href="#home">Início</a></li>
                    <li><a href="#service">Nossos Serviços</a></li>
                    <li><a href="#schedule">Agendar Consulta</a></li>
                    <li><a href="#about">Serviços</a></li>
                    <li><a href="#footer">Sobre nós</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="home" id="home">
        <div class="banner">
            <div class="banner_description">
                <h1>Saúde online<br>para você</h1>
                <p>A Trafalgar oferece cuidados com sua saúde de forma contínua e acessível, disponível online para todos os seus dispositivos.</p>
                <a href="#schedule"><button>Consulte-se hoje</button></a>
            </div>
            <div class="banner_image">
                <img src="./image/banner-principal.png" alt="banner-principal">
            </div>
        </div>
    </section>

    <section class="service" id="service">
        <div class="service_title">
            <h2>Nossos serviços</h2>
            <div class="service_border"></div>
            <p>Oferecemos as melhores escolhas pra você. O serviço que você precisa,  com os melhores médicos, tudo isso na palma da sua mão.</p>
        </div>
        <div class="service_body">
            <div class="service_card">
                <img src="./image/product/procurar-medico.png" alt="procurar-medico">
                <div class="service_card_description">
                    <h3>Pesquisar médico</h3>
                    <p>Pesquise entre milhares de médicos especialistas e hospitais de confiança.</p>
                </div>
            </div>
            <div class="service_card">
                <img src="./image/product/farmacia-online.png" alt="farmacia-online">
                <h3>Farmácia online</h3>
                <p>Compre seus medicamentos no nosso app, com entrega rápida e simplificada.</p>
            </div>
            <div class="service_card">
                <img src="./image/product/consulta.png" alt="consulta">
                <h3>Consulta</h3>
                <p>Consulte-se gratuitamente com nossos médicos.</p>
            </div>
            <div class="service_card">
                <img src="./image/product/informacoes.png" alt="informacoes">
                <h3>Diagnóstico preciso</h3>
                <p>Aqui o seu diagnóstico é preciso e confiável, graças aos nossos médicos altamente qualificados.</p>
            </div>
            <div class="service_card">
                <img src="./image/product/emergencia.png" alt="emergencia">
                <h3>Emergência</h3>
                <p>Estamos disponíveis 24 horas por dia, 7 dias por semana, sempre disponíveis para cuidar de você e de sua família.</p>
            </div>
            <div class="service_card">
                <img src="./image/product/rastreamento.png" alt="rastreamento">
                <h3>Prontuário</h3>
                <p>Acompanhe e salve seu histórico médico de maneira simples pelo nosso app.</p>
            </div>
        </div>
        <div class="service_button">
            <button>Saiba mais</button>
        </div>
    </section>

    <section class="schedule" id="schedule">
        <h2>Agendar Consulta</h2>
        <div class="service_border"></div><br>
        <div class="form_div">
            <form action="#" method="POST" id="consultation-form">
                <div class="schedule_form">
                    <div>
                        <label for="nome">Nome</label><br>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <div>
                        <label for="cpf">CPF</label><br>
                        <input type="text" name="cpf" id="cpf" required>
                    </div>
                    <div>
                        <label for="email">E-mail</label><br>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="telefone">Telefone</label><br>
                        <input type="text" name="telefone" id="telefone" maxlength="15" required>
                    </div>
                    <div>
                        <label for="dataconsulta">Data</label><br>
                        <input type="date" name="dataconsulta" id="dataconsulta" required>
                    </div>
                    <div>
                        <label for="horario">Horário</label><br>
                        <input type="time" name="horario" id="horario" required>
                    </div>
                </div>
                
                <div class="service_button" style="padding-bottom: 20px; max-width: 100%;">
                    <button type="submit" name="inserir">Enviar</button>
                </div>
            </form>
        </div>
    </section>


    <section class="about" id="about">
        <div class="about_card">
            <div class="about_image">
                <img src="./image/ilustracao-sec1.png" alt="ilustracao-sec1">
            </div>
            <div class="about_description">
                <h2>Líder em serviços de saúde</h2>
                <div class="about_border"></div>
                <p>A Trafalgar oferece assistência médica de alta qualidade e acessível no app e online para todos. Para nós, não é apenas trabalho. Nós nos orgulhamos das soluções que entregamos</p>
                <button>Saiba mais</button>
            </div>
        </div>
        
    </section>

    <footer class="flex" id="footer">
        <div class="dots tf">
            <img src="image/background/footer-element.png" alt="Bg-Dots" />
        </div>
        <div class="f1 flex">
            <div class="logo">
                <img src="image/logo-footer.png" alt="Company Logo" />
            </div>
            <p>
                A Trafalgar oferece assistência médica de alta qualidade e acessível no app e online para todos. Para nós, não é apenas trabalho. Nós nos orgulhamos das soluções que entregamos
            </p>
            <p> ©Trafalgar PTY LTD 2024. Todos os direitos reservados </p>
        </div>
        <div class="footerlist flex">
            <h3>A empresa</h3>
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#service">Serviços</a></li>
                <li><a href="#schedule">Agendar Consulta</a></li>
                <li><a href="#">App</a></li>
            </ul>
        </div>
        <div class="footerlist flex">
            <h3>Region</h3>
            <ul>
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">Estados Unidos</a></li>
                <li><a href="#">Coreia do Norte</a></li>
                <li><a href="#">Canada</a></li>
            </ul>
        </div>
        <div class="footerlist flex">
            <h3>Help</h3>
            <ul>
                <li><a href="#">Centro de Ajuda e Suporte</a></li>
                <li><a href="#">Contato </a></li>
                <li><a href="#">Instruções</a></li>
                <li><a href="#">FAQ </a></li>
            </ul>
        </div>
    </footer>

    <script src="./js/script.js"></script>
    <script src="./js/telefone.js"></script>
    

</body>
</html>