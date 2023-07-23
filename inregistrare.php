<?php require_once 'header.php'; ?>

            <section class="signup">
                <div class="signup__content container container--pall">
                    <div class="wrapper">
                        <h3>Înregistrare</h3>
                        <p id="form-msg" class="alert">test</p>
                            <form id="register-form">
                                <input type="text" id="nume" name="nume" placeholder="Numele" required>
                                <input type="text" id="prenume" name="prenume" placeholder="Prenumele" required>
                                <input type="email" id="email" name="email" placeholder="Adresa de email" required>
                                <input type="password" id="pwd" name="parola" placeholder="Parola" required>
                                <input type="password" id="cpwd" name="pwd" placeholder="Confirma parola">
                                <input class="button" type="submit" value="Înregistrare">
                            </form>
                    </div>
                </div>
            </section>

<?php require_once 'footer.php'; ?>