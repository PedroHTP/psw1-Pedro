<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="imagem-esquerda">
            <div><img src="./imagens/marca-if-baiano-campus-guanambi-horizontal-removebg-preview.png" alt=""></div>
        </div>
        <div><h1 id="titulo-form">Atividade de Formulario</h1></div>
        <div id="imagem-direita">
            <div><img src="imagens/PSW.png" alt=""></div>
        </div>
    </header>
    <div id="reajuste">
        <nav>
            <ul>
                <li class="ativo"><a href="#home">Início</a></li>
                <li class="desativo"><a href="#home">Seu perfil</a></li>
                <li class="desativo"><a href="#news">Notícias</a></li>
                <li class="desativo"><a href="#contact">Contato</a></li>
                <li class="desativo"><a href="#about">Sobre</a></li>
            </ul>
        </nav>
        <main>
            <div id="formulario">
                <h2 id="titulo-secundario">▶ CRIE SEU PERFIL</h2>
                <form action="./perfil.php" method="post">
                    <label for="nome_completo">Digite seu nome completo: </label>
                    <input type="text" name="nome_completo" id="idnome_completo" placeholder="Ex: Pedro Castro Teixeira">

                    <label for="nascimento">Insira sua data de nascimento: </label>
                    <input type="date" name="nascimento" id="idnascimento" max="<?=date('D/M/Y')?>">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="idemail" placeholder="Ex: pedrocastot@gmail.com">
                    <label for="senha">Digite sua nova senha: </label>
                    <input type="password" name="senha" id="idsenha" placeholder="Ex: pedro123">
                    <label for="linguagem">Qual sua liguagem WEB favorita?</label>
                    <input type="radio" name="liguagem" id="idlinguagem">
                    <label for="cor">Selecione sua cor favorita: </label>
                    <input type="color" name="cor" id="idcor">
                    <label for="porcentagem">Escolha a porcentagem desejada: </label>
                    <input type="range" name="porcentagem" id="idporcentagem">
                    <label for="">Insira seu CPF: </label>
                    <input type="number" name="cpf" id="idcpf" maxlength="9">
                    <div id="alinhamento-de-botoes">
                        <input type="submit" value="Concluir">
                        <input type="reset" value="Reiniciar Formulário">
                    </div>
                </form>
            </div>
        </main>
    </div>
    <footer>
        <div id="redes">
            <a href="https://www.facebook.com" target="_blank"><img src="./imagens/facebook.png" alt="Logo do Facebook"></a>
            <a href="https://x.com/" target="_blank"><img src="./imagens/X-P.png" alt="Logo do X"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="./imagens/instagram-removebg-preview.png" alt="Logo do Instagram"></a>
            <a href="https://www.youtube.com" target="_blank"><img src="./imagens/Youtube.png" alt="Logo do Youtube" style="margin-bottom: 0.34%;"></a>
        </div>
        <div id="termo-logo">
            <div id="termo">
                <p><a href="#">POLITÍCA DE PRIVACIDE</a> | <a href="#">TERMOS DE USO</a></p>
                <p>&copy; 2024 - TODOS OS DIREITOS RESERVADOS A PEDRO HENRIQUE TEIXEIRA PIÃO</p>
            </div>
            <div id="logo">
                <img src="./imagens/PSW.png" alt="Logo de PSW" width="40%">
            </div>
        </div>   
    </footer>
</body>
</html>