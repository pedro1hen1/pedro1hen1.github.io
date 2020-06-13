        <?php 
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('A T E N Ç Â O essa pagina so pode ser acessada por usuario logado');
                window.location.href = 'login.html';
                </script>";

        }
        $logado = $_SESSION['login'];
        ?>
<html>
    <head>
        <meta charset="UTF-8">

    </head>
    <body>
        <fieldset style="width: 50%">
        <h1>Melhor lugar do mundo</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4185.754575313903!2d-47.90465103156115!3d-15.837987965037527!2
                m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a254090da18a3%3A0xfa5d53cc3e3075c4!2sParque%20Deck%20Sul!5e0!3m2!1spt-BR!2sbr!4v1587424403554!5m2!1spt-BR!2sbr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </fieldset>
    </body>
</html>
