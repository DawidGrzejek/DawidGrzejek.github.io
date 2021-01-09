<?php echo file_get_contents("html/header.html"); ?>

      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h4>O nas</h4>
                  <h3 style="text-transform: none !important">A kimże my jesteśmy?</h3>
                  <p>Najlepsi Studenci Z Najlepszej Niepublicznej Uczelni Według Niezależnych Rankingów.</p>
                  <h3 style="text-transform:  none !important;">Co to w ogóle jest za strona i o co tutaj chodzi?</h3>
                  <p>A to nasza strona z zadaniami na przedmiot Projektowanie Stron Internetowych.</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="imgs/about.png" alt="About Us" />
                  </div>
               </div>
            </div>
            <br>

            <!--<div class="container">
            <img src="imgs/divide_line.png" alt="Vertical Line" width="100%">
            </div>
            
            <div class="subcribe">
                  <div class="row">
                     <div class="col-md-4 col-sm-6">
                        <h4>Koncept</h4>
                        <h3 style="text-transform: none !important">Masz jakiś pomysł?</h3>
                        <p>Jeżeli chciał byś się z nami czymś podzielić, śmiało :)</p>
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
                           <textarea cols="50" rows="4" placeholder="Napisz coś do nas"></textarea>
                           <button onclick="myFunction()">Send</button>
                        </form>
                     </div>
                  </div>
            </div> --->          
         </div>
      </div>
      <script>
      function myFunction() {
        alert("Wiadomość została wysłana, dziękujemy!");
      }
      </script>
      <!--<div class="container">
         <img src="imgs/divide_line.png" alt="Vertical Line" width="100%">
      </div>-->
      <div class="facebook_group">
         <div class="container">
            <div class="row">
               <div class="col-md-5" style="margin:auto;">
               <h3 style="text-transform:  none !important;">Nasza grupa na Facebook:</h3>
               <a href="https://www.facebook.com/groups/743684763079816/"><br />Zarządzanie Projektami Informatycznymi - DSW</a> 
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <a href="https://www.facebook.com/groups/743684763079816/"><img class="img-responsive" src="imgs/facebook_logo.png" alt="Facebook Logo" width="50%"/></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<?php echo file_get_contents("html/footer.html"); ?>
