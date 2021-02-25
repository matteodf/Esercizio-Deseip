<?php include "functions.php"?>

<!DOCTYPE html>
<html>
<head>
  <title>Esercizio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php echo create_popups($connect)?>
    <div class="container" style="padding-right: 0; padding-left: 0; width:100%;">
      <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php echo make_slide_indicators($connect); ?>
        </ol>

        <div class="carousel-inner">
          <?php echo make_slides($connect); ?>
        </div>
    
        <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev" style="top:-50%">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next" style="top:-50%">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container">
      <div class="row" style="display:flex; margin:5% 5% 0 5%">
        <div class="column" style="flex:35%">
          <h2 style="font-weight:600">Impianti usati</h2>  
        </div>
        <div class="column" style="flex:65%; font-size: 0.9em">
          L’affidabilità di Priess consente di avere impianti già presenti sul mercato da anni ma ancora in ottimo stato. L’azienda è presente in Italia da molti anni ma, dal 2018, ha aperto ufficialmente la filiale commerciale italiana per consentire un contatto diretto con la Casa Madre. I macchinari usati consentono di poter sfruttare appieno la tecnologia Priess senza dover attendere i normali tempi di consegna.</div>
        </div>
      </div>
    <div class="container">
      <?php echo create_cards($connect); ?>
    </div>
  </body>
</html>