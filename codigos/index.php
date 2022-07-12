<!DOCTYPE html><!--Declarando o tipo de documento-->
<html lang="pt-br"><!--abrindo o documento e determinando a linguagem-->
<head><!--cabeçalho-->

    <!--ESTA AULA É PARA REALIZAR APENAS A MARCAÇÃO DOS ITENS DO SITE-->

    <!--Corrige acentuação-->
    <meta charset="UTF-8">

    <!--Esta meta é exclusiva para Internet Explorer, ela pode configurar a página para ser renderizada como em outra versão do Internet Explorer.-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Design Responsivel, ou seja, irá se adaptar a qualquer tela com largura inicial de 1.0-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!--Para o google saber a descrição do site quando for pesquisar-->
    <meta name="description" content="Descrição do meu WebSite">

    
    <!--Para o google saber as palavras-chaves quando for pesquisar-->
    <meta name="keywords" content="palavra-chave,do,meu,site">

    <!--fonte da letra pelo google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <!--Incluindo link de estilo para uso css, rel -e pra mostrar q esta trabalhando com folha de estilo-->
    <link rel="stylesheet" href="estilo/style.css">
     
    <!--Titulo-->
    <title>Projeto 01</title>
</head>
<body><!--Corpo do Site-->
    
    <!--Iniciando a marcação do Menu-->

    <header><!--Topo do site-->
        <div class="center">
            <!--logo-->
            <div class="logo">Logomarca</div>

            <!--Navegaçao no pc-->
            <nav class="desktop">

                <!--Lista Ordenada-->
                <ul>
                    <!--Links do menu-->
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>

            <!--Navegaçao mobile-->
            <nav class="mobile">

                <!--lista Ordenada-->
                <ul>
                    <!--Links do menu-->
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </div><!--center-->
    </header>

    <!--1° seçao - banner principal-->
    <section class="banner-principal">

        <!--formulario do email-->

        <div class="center">
            <form action="">
                <!--titulo da pergunta-->
                <h2>Qual seu melhor e-mail?</h2>
                <!--tipo de entrada:email, nome:email, required=obriga a preencher-->
                <input type="email" name="email" required/>
                <!--tipo de entrada:enviar, nome:acao, required=obriga a preencher-->
                <input type="submit" name="acao" value="Cadastrar"/>
            </form>
        </div><!--center-->
    </section>

    <!--2° seçao - Descriçao do Autor-->
    <section class="descricao-autor">
        <div class="center">
            <div class="w50">
                <h2>Lohuama Lima</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure vel eos assumenda earum aspernatur soluta natus? Eveniet dicta, recusandae reprehenderit eos quibusdam, voluptatibus sit dignissimos minima assumenda dolorem architecto asperiores?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, aperiam deserunt neque accusamus, tempora necessitatibus atque expedita ullam hic corrupti tenetur quidem sed veniam commodi sequi odio itaque. Ratione, velit.</p>
            </div><!--w50, significa q vai pegar 50% da largura da tela-->
            <div class="w50">
                <!--Pegar imagem depois-->
                <img src="images/loh.jpg" alt="">
            </div><!--w50, significa q vai pegar 50% da largura da tela-->
        </div><!--center-->
    </section>
        

    <!--especialidades-->
    <section class="especialidades">
        <h2 class="title">Especialidades</h2>

        <!--vai ser o container pra o designer responsivel-->
        <div class="center">
            <div class="box-especialidades">
                <h3>icone1</h3><!--icone-->
                <h3>CSS3</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus ducimus, delectus incidunt sint hic consectetur veniam nobis magni quam deserunt ex dolorum ab non qui. Animi perferendis corrupti ipsa.</p>
            </div><!--box-especialidades-->

            <div class="box-especialidades">
                <h3>icone1</h3><!--icone-->
                <h3>HTML5</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus ducimus, delectus incidunt sint hic consectetur veniam nobis magni quam deserunt ex dolorum ab non qui. Animi perferendis corrupti ipsa.</p>
            </div><!--box-especialidades-->

            <div class="box-especialidades">
                <h3>icone1</h3><!--icone-->
                <h3>JAVASCRIPT</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptatibus ducimus, delectus incidunt sint hic consectetur veniam nobis magni quam deserunt ex dolorum ab non qui. Animi perferendis corrupti ipsa.</p>
            </div><!--box-especialidades-->
        </div>
    </section>
    <section class='extras'>
        <div class='center'>
            <div class='w50'>

                <h2 class='title'>Depoimentos</h2>
                <div class='depoimento-single'>
                    <p class='depoimento-descricao'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quas asperiores aliquid accusamus sapiente vero debitis voluptate praesentium quaerat odit temporibus fugiat laudantium itaque, nostrum, nesciunt deserunt voluptatum recusandae provident.</p>
                    <p class='nome-autor'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut fugit quo dicta repudiandae reprehenderit. Dolore distinctio earum explicabo eum cum ad facere aspernatur officia magni, quidem delectus praesentium deleniti est!
                    </p>
                </div><!--dpoimento-single-->
                <div class='depoimento-single'>
                    <p class='depoimento-descricao'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quas asperiores aliquid accusamus sapiente vero debitis voluptate praesentium quaerat odit temporibus fugiat laudantium itaque, nostrum, nesciunt deserunt voluptatum recusandae provident.</p>
                    <p class='nome-autor'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut fugit quo dicta repudiandae reprehenderit. Dolore distinctio earum explicabo eum cum ad facere aspernatur officia magni, quidem delectus praesentium deleniti est!
                    </p>
                </div><!--dpoimento-single-->
                <div class='depoimento-single'>
                    <p class='depoimento-descricao'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At quas asperiores aliquid accusamus sapiente vero debitis voluptate praesentium quaerat odit temporibus fugiat laudantium itaque, nostrum, nesciunt deserunt voluptatum recusandae provident.</p>
                    <p class='nome-autor'>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut fugit quo dicta repudiandae reprehenderit. Dolore distinctio earum explicabo eum cum ad facere aspernatur officia magni, quidem delectus praesentium deleniti est!
                    </p>
                </div><!--dpoimento-single-->
            </div><!--w50-->
            <div class='w50'>

                <h2 class='title'>Serviços</h2>
                <div class='servicos'>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quo incidunt laudantium distinctio nostrum recusandae libero nemo impedit. Pariatur ab quibusdam excepturi ad, tempora animi harum eligendi in sit minima?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quo incidunt laudantium distinctio nostrum recusandae libero nemo impedit. Pariatur ab quibusdam excepturi ad, tempora animi harum eligendi in sit minima?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quo incidunt laudantium distinctio nostrum recusandae libero nemo impedit. Pariatur ab quibusdam excepturi ad, tempora animi harum eligendi in sit minima?</li>
                </ul>
            </div><!--w50-->
        </div><!--center-->
    </section>
    <footer>
        <div class='center'>
            <p>Todos os direitos reservados/1</p>
        </div>
    </footer>

</body>
</html>