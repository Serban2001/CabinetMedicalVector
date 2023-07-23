<?php require_once 'header.php'; ?>

    <section class="contact-section">
        <div class="contact"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d91160.56672590262!2d26.024598375249276!3d44.437926920075995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sro!4v1621466277351!5m2!1sen!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <h2 class="p-2">Contact</h2>
        <div class="container flex flex-column flex-md-row p-3">    
            <div class="flex-grow-1 p-2">
                
                    <table>
                        <tr>
                          <th>Telefon:</th>
                          <td><a href="tel: 0744 123 456">0744 123 456</a> </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><a href="mailto: contact@vector.ro">contact@vector.ro</a></td>
                          </tr>
                        <tr>
                          <th rowspan="2">Adresa:</th>
                          <td>Bucuresti</td>
                        </tr>
                        <tr>
                          <td>Revolutie nr. 10</td>
                        </tr>
                      </table>
            </div>
                <div class="flex-grow-1 p-2">
                <form action="" method="POST">
                    <label for="email">Email</label>
                    <input class="focus" type="email" id="email" name="email">

                    <label for="message">Mesaj</label>
                    <textarea class="focus" name="message" id="" cols="30" rows="10"></textarea>

                    <input class="button" type="submit" value="Trimite Mesaj">
                </form> 
                </div>
            </div>
            
        </div>
    </section>

<?php require_once 'footer.php'; ?>