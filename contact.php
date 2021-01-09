<?php echo file_get_contents("html/header.html"); ?>

<div id="about" class="about_section layout_padding">
    <div class="container">
        <div class="subcribe">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <h4>Kontakt</h4>
                  <p>Jeżeli chciał byś się ze mną skontaktować, zostaw wiadomość, odezwę się :)</p>
               </div>
               <div class="col-md-8 col-sm-6">
                  <form>
                     <input type="text" name="name" placeholder="Imię i Nazwisko">
                     <label for="name">Imię i Nazwisko</label>
                  </form>
                  <form>
                     <input type="email" name="email" placeholder="ImieNazwisko@domain.com">
                     <label for="email">Email</label>
                  </form>
                  <form>
                     <textarea cols="50" rows="4" placeholder="Treść wiadomości"></textarea>
                     <button onclick="myFunction()">Send</button>
                  </form>
               </div>
            </div>
            <br><br>
            <h4>Lokalizacja</h4>
            <div id="googleMap" style="width:100%;height:400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.519563004987!2d17.0501167159138!3d51.09887344831077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc287f74d6e7d%3A0xf136f78d747d8189!2sZgodna%2018%2C%2050-432%20Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1604785254387!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
            </div>
        </div>  
    </div>
</div>



<?php echo file_get_contents("html/footer.html"); ?>