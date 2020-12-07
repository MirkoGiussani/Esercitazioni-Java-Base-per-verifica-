<html>
    <body>

            <?php
                if (isset($_COOKIE["user"])) {
                    header("Location: data.php"); 
                }
            ?>
            <form action="data.php" method="post">
                Utente<input type="text" name="utente" placeholder="Inserisci nome utente">
                Password <input type="password" name="pssw" placeholder="Inserisci password">
                <input type="submit">
            </form>

    </body>
</html>