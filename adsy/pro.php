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
    	  <div class="col-md-6 col-md-offset-2">
    	    <div class="row">
	    	  <section id="work" class="col-md-12">
	              <h3>Expériences</h3>
	              <article>
	                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat convallis arcu, congue vestibulum erat aliquam at. Donec gravida purus a justo venenatis maximus. Nam sit amet tristique elit, sit amet rhoncus nulla. Fusce semper felis nec metus ullamcorper ultricies. Etiam ultrices tellus ut lectus mollis rutrum. Phasellus id pharetra purus. Ut risus metus, convallis eu nibh vel, consectetur luctus diam. Aenean nec neque odio. Donec cursus est non augue sodales rutrum. Phasellus at ex mollis, laoreet risus in, egestas nulla. 
	              </article>
	            </section>

	          <section id="hobbys" class="col-md-12">
	            <h3>Formations</h3>
	            <article>
	              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat convallis arcu, congue vestibulum erat aliquam at. Donec gravida purus a justo venenatis maximus. Nam sit amet tristique elit, sit amet rhoncus nulla. Fusce semper felis nec metus ullamcorper ultricies. Etiam ultrices tellus ut lectus mollis rutrum. Phasellus id pharetra purus. Ut risus metus, convallis eu nibh vel, consectetur luctus diam. Aenean nec neque odio. Donec cursus est non augue sodales rutrum. Phasellus at ex mollis, laoreet risus in, egestas nulla. 
	            </article>
	          </section>
            </div>
          </div>
		  
		  <div class="col-md-2 col-md-offset-1"  style="text-align:center;">
		  	<h3><span class="glyphicon glyphicon-list-alt"></span>Compétences</h3>
		  	<ul class="list-group">
		  		<li class="list-group-item">HTML5</li>
		  		<li class="list-group-item">CSS3</li>
		  		<li class="list-group-item">PHP</li>
		  		<li class="list-group-item">SQL</li>
		  	</ul>
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