<!--
4 [projetinho] - Neste projeto, criaremos um blog em que teremos uma
pagina Titulo + artigo, onde as pessoas podem comentar em baixo da
pagina. (incluindo HTML + CSS + PHP)
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        div {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        article {
            border-bottom: 1px solid #ddd;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }

        .comentarios {
            margin-top: 2rem;
            border-top: 1px solid #ddd;
            padding-top: 1rem;
        }

        form {
            margin-top: 1rem;
        }

        button {
            background-color: #333;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        .nomecomments {
            font-size: larger;
            font-weight: bold;
            margin-top: 50px;

        }
    </style>
</head>

<body>
    <header>
        <h1>Blog do sem ideia</h1>
    </header>
    <div>
        <article>
            <h2>Isso era pra ser um Titulo</h2>
            <p>Fiquei sem ideia para titulo e estou sem ideia para artigo, então vamos de Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis neque commodi veritatis quae nihil maxime delectus nisi facilis culpa. Vel, quod ut rerum ad voluptatem asperiores nihil quo iusto tenetur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi possimus ducimus, reprehenderit aperiam saepe voluptatibus illum sequi accusamus consequuntur eligendi maxime maiores animi harum. Nemo eos error et excepturi blanditiis.
            </p>
        </article>
        <section class="comentarios">
            <h3>Comentários</h3>
            <form action="./Ex4comments.php" method="post">
                <div>
                <label for="name">Nome:</label>
                <input name="name" type="text" required>
                </div>
                <div>
                <label for="comments">Comentário:</label>
                <textarea name="comments" rows="4" required></textarea>
                </div>
                <div>
                <button name="submit" type="submit">Enviar Comentário</button>
                </div>
            </form>
            <hr>
            <?php

            require_once('Ex4comments.php');

            $select = $conexao->query('SELECT * FROM comentarios');

            while ($lista = $select->fetch_assoc()) {
            ?>

                <p class="nomecomments"><?php echo $lista['name']; ?> </p>
                <fieldset>
                    <p class="comentariocomments"><?php echo $lista['comments']; ?> </p>
                </fieldset>

            <?php  }; ?>


        </section>
    </div>
    <footer>
    </footer>
</body>
</html>