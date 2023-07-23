<?php session_start();
if (isset($_POST['email'])) { 

    require_once 'db.php';
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='{$_POST['email']}' AND `parola`='".md5($_POST['parola'])."'");
    if ($result->num_rows > 0 ) {
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['user'] = $row['prenume'].' '.$row['nume'];
        echo '<script>window.location = "index.php";</script>';
    }
} ?>

<?php require_once 'header.php'; ?>
            
            <section class="login">
                <div class="login__content container container--pall">
                    <div class="wrapper">
                        <h3>Autentificare</h3>
                        <?php if (isset($_POST['email']) && $result->num_rows < 1) echo '<div class="alert danger" style="display: block;">Combinatia de email/parola incorecta</div>'; ?>
                            <form action="" method="POST">
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="password" name="parola" placeholder="Parola" required> 
                                <input class="button" type="submit" value="Autentificare">
                            </form>
                            <div class="bottom-text">
                              <input type="checkbox" name="remember" checked="checked">Tine-ma minte
                              <a href="#">Ai uitat parola?</a>
                            </div>
                    </div>
                </div>
            </section>

<?php require_once 'footer.php'; ?>