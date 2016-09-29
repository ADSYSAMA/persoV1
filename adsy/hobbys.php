<!DOCTYPE HTML>

<html>


  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
  <?php require('menu.php'); ?>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <section id="collection" class="col-md-12">
            <h2><span class="glyphicon glyphicon-picture"></span>  Ma collection</h2>
            <div id="carousel" class="carousel slide" style="border-radius: 10px;">
              <div class="carousel-inner">
                <div class="item active"><img src="images/collection1.jpg"></div>
                <div class="item"><img src="images/collection2.jpg"></div>
                <div class="item"><img src="images/collection3.jpg"></div>
                <div class="item"><img src="images/collection4.jpg"></div>
                <div class="item"><img src="images/collection5.jpg"></div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-4">
          <aside>
              <h2 class="alert"><span class="glyphicon glyphicon-flash"></span>Mes jeux joués</h2>
              <ul class="list-group">
                <li class="list-group-item">League of Legends<a href="http://euw.leagueoflegends.com/fr" ><img src="images/lol.png" style="width:80px; height:50px;"></a></li>
                <li class="list-group-item">Hearthstone : Heroes of Warcraft<a href="http://eu.battle.net/hearthstone/fr/"><img class="img-rounded" src="images/hs.png"  style="width:80px; height:50px;"></a></li>
                <li class="list-group-item">Counter Strike : Global Offensive<a href="www.counter-strike.net/"><img src="images/csgo.png"  style="width:80px; height:50px;"></a></li>
              </ul>
            </aside> 
        </div>
      </div>  
	  </div>

  <br/>
  <?php require('footer.php'); ?>
  </body>
  
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    $(function () {
      $('.carousel').carousel({ interval: 2000 });
    });
  </script>
</html>