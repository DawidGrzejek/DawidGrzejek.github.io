<!DOCTYPE html>
<html lang="pl">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="Autor" content="Dawid Grzejek">
		<meta name="robots" content="all" />
		<meta name="description" content="Zarządzaine Projektami Informatycznymi">
		<meta name="keywords" content="PHP, HTML, CSS, DSW, ZPI, WROCŁAW">
      <title>Zarządzanie Projektami Informatycznymi</title>
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/main.css?v=1">
      <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>
      <!--
        <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="index.php?about"><img src="imgs/logo2.png" alt="#" width="150"/></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                  <div class="collapse navbar-collapse" id="show-menu">
                  <div class="logo-name" id="show-menu" style="margin-top: 20px;">
                     <p><b>ZPI | DSW</b></p>
                  </div>
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php?about">Home</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php?about">About Me</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="test.php">Portftolio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="page_list.php">Zbiór stron</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="kody_teams.php">Kody MS Teams</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="usefull_links.php">Przydatne Linki</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php?about">Blog</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php?about">Contact</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      -->

      <div id="header" class="header">
        <div class="navbar">
          <a href="#home">Home</a>
          <a href="#news">News</a>
          <div class="dropdown">
            <button class="dropbtn">Dropdown
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
        </div>
      </div>

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

            <div class="container">
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
            </div>            
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
      <footer>
         <div class="container">
            <div class="footer-div" style="display:inline-block;">
                     <img src="imgs/witcher.png" alt="#" height="400" style="float:left;"/>
                     <p style="margin-top: 10%;"><i>Zło to zło, Stregoborze </i>- rzekł poważnie wiedźmin wstając. - <i>Mniejsze, większe, średnie, wszystko jedno, proporcje są umowne a granice zatarte. Nie jestem świątobliwym pustelnikiem, nie samo dobro czyniłem w życiu. Ale jeżeli mam wybierać pomiędzy jednym złem a drugim, to wolę nie wybierać wcale. </i>- Geralt z Rivi</p>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2020  Design by Dawid Grzejek</p>
         </div>
      </footer>
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
   </body>
</html>