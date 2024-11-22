
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
        <div>
            <h1 id="titulo-form">Atividade de Formulário</h1>
        </div>
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
                <div id="cabeca-formulario">
                    <div id="texto-esquerda">
                        <h2 id="titulo-secundario">▶ CRIE SEU PERFIL</h2>
                    </div>
                    <div id="botao-direita"><input type="button"
                            onclick="alert('Coloque seus dados no formulário para criarmos um perfil para você!!')"
                            value="Instruções"></div>
                </div>
                <div id="form-ajuste">
                    <div id="form-esquerdo">
                        <form action="./perfil.php" method="post">
                            <label for="nome_completo">Digite seu nome: </label>
                            <input type="text" name="nome" id="idnome" placeholder="Ex: Pedro Henrique" required>
                            <label for="nome_completo">Digite seu sobrenome: </label>
                            <input type="text" name="sobrenome" id="idsobrenome" placeholder="Ex: Castro Teixeira" required>
                            <label for="nascimento">Insira sua data de nascimento: </label>
                            <input type="date" name="nascimento" id="idnascimento"
                                max="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>"
                                title="Selecione uma data que seja antes de <?=date('d')?>/<?=date('m')?>/<?=date('Y')?>"
                                value="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>"  required>
                            <label for="genero">Qual seu Gênero? </label>
                            <select name="genero" id="idgenero">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="binario">Não binário</option>
                                <option value="outro">Outro não listado</option>
                            </select>
                            <label for="telefone">Digite seu telefone: </label>
                            <input type="tel" name="telefone" id="idtelefone" placeholder="(77) 99903-4680"  required>
                            <label for="numero">Digite o número da casa: </label>
                            <input type="number" name="numero" id="idnumero" placeholder="Ex: 100"  required>
                            <label for="bairro">Digite seu bairro: </label>
                            <input type="text" name="bairro" id="idbairro" placeholder="Ex: Monte Alto"  required>
                            <label for="rua">Digite sua rua: </label>
                            <input type="text" name="rua" id="idrua" placeholder="Ex: rua Dom Pedro I"  required>
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="idemail" placeholder="Ex: pedrocastro@gmail.com"  required>
                            <label for="CEP">CEP:</label>
                            <input type="text" name="CEP" id="CEP" required pattern="\d{5}-\d{3}"
                                placeholder="xxxxx-xxx"  required>

                            <label for="cpf">Insira seu CPF: </label>
                            <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                                placeholder="xxx.xxx.xxx-xx" title="Digite um CPF no formato: xxx.xxx.xxx-xx"  required>
                        </form>
                    </div>
                    <div id="form-direito">
                        <form action="./perfil.php" method="post">
                        <label for="senha">Digite sua nova senha: </label>
                            <input type="password" name="senha" id="idsenha" placeholder="Ex: pedro123">
                        <div id="cor">
                                <label for="cor">Selecione sua cor favorita:</label>
                                <input type="color" name="cor">
                            </div>
                            <label for="appt">Que horário você vai dormir?:</label>
                            <input type="time" id="appt" name="appt">
                            <label for="atendimento">Data e horário de atendimento: </label>
                            <input type="datetime-local" name="atendimento" id="idatendimento">
                            <label for="porcentagem">Selecione um ponto na linha: </label>
                            <input type="range" name="porcentagem" id="idporcentagem">
                            <div class="selecao">
                                <label for="linguagem">▶ Qual sua liguagem WEB favorita?</label>
                                <ul class="radio">
                                    <li>
                                        <input type="radio" name="linguagem" id="idhtml" value="html">
                                        <label for="li">HTML</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="linguagem" id="idcss" value="css">
                                        <label for="li">CSS</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="linguagem" id="idjavascript" value="javascript">
                                        <label for="li">Javascript</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="selecao">
                                <label for="linguagem">▶ Qual destas liguagens de programção você domina?</label>
                                <ul class="radio">
                                    <li>
                                        <input type="checkbox" id="iddomina_liguagem1" name="domina_liguagem1"
                                            value="python" class="caixa-maior">
                                        <label for="domina_liguagem1">Python</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="iddomina_liguagem2" name="domina_liguagem2"
                                            value="php" class="caixa-maior">
                                        <label for="domina_liguagem2">PHP</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="iddomina_liguagem3" name="domina_liguagem3"
                                            value="java" class="caixa-maior">
                                        <label for="domina_liguagem3">Java</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="iddomina_liguagem4" name="domina_liguagem4"
                                            value="C#" class="caixa-maior">
                                        <label for="domina_liguagem4">C#</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="selecao">
                                <label for="bio">Escreva uma bio para seu perfil</label>
                                <textarea name="message" rows="4"
                                    placeholder="Ex: Meu nome é Pedro Henrique e eu sou fã de ficção científica."></textarea>
                            </div>
                            <div id="alinhamento-de-botoes">
                                <input type="submit" value="Concluir">
                                <input type="reset" value="Reiniciar Formulário">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <div id="redes">
            <a href="https://www.facebook.com" target="_blank"><img src="./imagens/facebook.png"
                    alt="Logo do Facebook"></a>
            <a href="https://x.com/" target="_blank"><img src="./imagens/X-P.png" alt="Logo do X"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="./imagens/instagram-removebg-preview.png"
                    alt="Logo do Instagram"></a>
            <a href="https://www.youtube.com" target="_blank"><img src="./imagens/Youtube.png"
                    alt="Logo do Youtube"></a>
        </div>
        <div id="termo-logo">
            <div class="logo">

            </div>
            <div id="termo">
                <p><a href="#">POLITÍCA DE PRIVACIDE</a> | <a href="#">TERMOS DE USO</a></p>
                <p>&copy; 2024 - TODOS OS DIREITOS RESERVADOS A PEDRO HENRIQUE TEIXEIRA PIÃO</p>
            </div>
            <div class="logo">
                <img src="./imagens/PSW.png" alt="Logo de PSW" width="40%">
            </div>
        </div>
    </footer>
</body>

</html>