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

      <div class="row" style="margin-top: -20px;">
        <div class="col-md-8 col-md-offset-2">
          <div class="row">  
            <section id="resume" class="col-md-12">
              <h2><span class="glyphicon glyphicon-tasks"></span>  Résumé</h2>
              <img src="images/profil.png" style="float: left; height:100px; width:100px; margin-right: 10px; margin-bottom:80px; border-radius: 25px;">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id ligula ac metus tempor efficitur. Integer dapibus justo rhoncus nunc rutrum congue. Suspendisse gravida quam vel aliquet iaculis. Donec sed nulla eget ante tempus venenatis mattis et tortor. Maecenas vulputate erat magna, in porta mauris porta sed. Quisque ipsum purus, vulputate eget pharetra nec, vestibulum at nibh. Nunc congue varius arcu ac elementum. Aliquam vulputate risus nulla, id cursus metus volutpat eu. Ut vitae magna scelerisque, ullamcorper eros ac, scelerisque neque. Ut eget lorem eu odio sodales bibendum et id ex. Quisque luctus, odio ac lacinia convallis, elit libero tempus est, nec fermentum diam odio quis tortor. Praesent sit amet risus vel massa posuere faucibus at at ex. Integer ultricies ut neque eu ultrices. </p>
            </section>

            <section id="work" class="col-md-12">
              <h3><span class="glyphicon glyphicon-briefcase"></span>  Work</h3>
              <article>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat convallis arcu, congue vestibulum erat aliquam at. Donec gravida purus a justo venenatis maximus. Nam sit amet tristique elit, sit amet rhoncus nulla. Fusce semper felis nec metus ullamcorper ultricies. Etiam ultrices tellus ut lectus mollis rutrum. Phasellus id pharetra purus. Ut risus metus, convallis eu nibh vel, consectetur luctus diam. Aenean nec neque odio. Donec cursus est non augue sodales rutrum. Phasellus at ex mollis, laoreet risus in, egestas nulla. 
              </article>
            </section>

          <section id="hobbys" class="col-md-12">
            <h3><span class="glyphicon glyphicon-star-empty"></span>  Hobbys</h3>
            <article>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat convallis arcu, congue vestibulum erat aliquam at. Donec gravida purus a justo venenatis maximus. Nam sit amet tristique elit, sit amet rhoncus nulla. Fusce semper felis nec metus ullamcorper ultricies. Etiam ultrices tellus ut lectus mollis rutrum. Phasellus id pharetra purus. Ut risus metus, convallis eu nibh vel, consectetur luctus diam. Aenean nec neque odio. Donec cursus est non augue sodales rutrum. Phasellus at ex mollis, laoreet risus in, egestas nulla. 
            </article>
          </section>
        </div>
      </div>
  </div>
</div>
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