<section class="container-fluid bg-dark">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">SSTV Tvrdošín - Administratión</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">



      <?php
        $menu = [];
        $chyba="";
        //$stranka = basename($_SERVER['SCRIPT_NAME'],".php");
        $stranka = basename(dirname($_SERVER['SCRIPT_NAME']));

        $riadkySuboru = file('../admin/menuAdmin.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach($riadkySuboru as $riadok){
          list($k,$h) = explode('::', $riadok);
          $menu[$k] = $h;
        }
      foreach($menu as $link => $hodnota) {
            echo '
            <li class="nav-item">
              <a class=" nav-link '.($link == $stranka?"active": "").'" href="'. $link.'.php">' .$hodnota.'</a>
            </li>';
          }
        ?>
  <?php
  if (!empty($chyba))
       {
       ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Opps!!!</strong> <?php  echo $chyba ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      }
      ?>
          </ul>
    </div>
  </nav>

</section>