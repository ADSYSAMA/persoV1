<!DOCTYPE HTML>

<html>


  <head>
    <meta charset="utf-8">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
            <div id="custom-bootstrap-menu" class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                  <div id="refresh" class="navbar-header"><a class="navbar-brand" href="#">ADSY</a>
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder" ><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                      </button>
                  </div>
                  <div class="collapse navbar-collapse navbar-menubuilder" >
                      <ul class="nav navbar-nav navbar-left">
                          <li><a href="pro.php"><span class="glyphicon glyphicon-briefcase"></span>  Work</a>
                          </li>
                          <li><a href="hobbys.php"><span class="glyphicon glyphicon-star"></span>  Hobbys</a>
                          </li>
                          <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>  Me contacter</a>
                          </li>
                      </ul>
                  </div>
              </div>
            </div>
    </div>
  </body>
  <style>
    #custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(119, 119, 119, 1);
}
#custom-bootstrap-menu.navbar-default {
    font-size: 14px;
    background-color: #FEFFFF;
    border-width: 1px;
    border-radius: 4px;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(119, 119, 119, 1);
    background-color: rgba(248, 248, 248, 0);
    -webkit-transition: all .2s ease-in;
    -moz-transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    transition: all .3s ease-in;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(51, 51, 51, 1);
    background-color: #CDE7E8;
    color: #17232E;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(231, 231, 231, 1);

}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #ddd;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #ddd;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #888;
}
ul li {
  font-size: 15px;
}
  </style>
  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
    $('#refresh').on('click', function() {
    window.location="index.php";
    });
  </script>
</html>