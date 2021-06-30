<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Contact </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
<body>
<?php include("header.php") ?>
    <!-- Ici nous mettons le contenu de la page -->
    <main>

<br><br><br><br><br><br>
    	 <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <br>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>Nous Contacter</span>
            <span></span>
          </div>
          <div class="app-contact">Numéro de télephone : +33 6 65 19 95 54</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div>
              <form method="post" action="envoiContact.php">
              <input class="app-form-control" class="app-form-group" placeholder="Nom" name="nom" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control"  class="app-form-group" placeholder="EMAIL" name="mail" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Numéro de télephone" name="num" required>
            </div>
                      <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE" name="message" required>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button">Annuler</button>
              <button class="app-form-button">Envoyer</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="credits">
      Délais de réponse en 48 ouverts , hors jours féries et week-end.
      <a class="credits-link" href="" target="_blank">
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
            <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
            <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
            <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
          </g>
        </svg>
      </a>
    </div>
  </div>
<br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10503.965249912528!2d2.5874861!3d48.8393044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x880316474adbc473!2sESIPE%20-%20%C3%89cole%20Sup%C3%A9rieure%20d&#39;Ing%C3%A9nieurs%20Paris-Est%20Marne-la-Vall%C3%A9e!5e0!3m2!1sfr!2sfr!4v1583101545725!5m2!1sfr!2sfr" width="1600" height="300" frameborder="" style="border:3px solid black;" allowfullscreen=""></iframe>
</div>
        

    </main>

  <?php include("footer.php") ?>
  </body>
</html>