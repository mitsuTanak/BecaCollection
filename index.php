<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>BECCACOLLECTION</title>
</head>
<body>
    <header>
        <img src="assets/logo-roupa.png" alt="Logo" class="Logo" id="logo">

        <Ul class="paginas-N">
            <li><a href="#">Home</a></li>
            <li><a href="#">Novidades</a></li>
            <li><a href="#">Destaque</a></li>
            <li><a href="#">Contato</a></li>
        </Ul>
    </header>

    <main>

        <div class="titulo">
            <h1>Contato</h1>
        </div>

        <section class="form">

            <h2>Nosso Newsletter</h2>
            <form action="processa.php" method="post" class="input">

                <input type="text" name="nome" id="nome" placeholder="Nome Completo">
                <input type="email" name="email" id="email" placeholder="Seu E-mail">
                <input type="submit" value="Cadastrar" class="butão">

            </form>
        </section>
    </main>

    <footer class="footer">

        <img src="assets/logo-roupa.png" alt="" class="Logo">

        <p>Copyright@2024 FRONT All Right Reserved</p>

        <p>Tel: 5898-5874</p>
    </footer>
    
</body>
</html>