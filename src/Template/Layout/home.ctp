<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RateMyRestaurant</title>

    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <!-- Custom fonts for this template -->
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('simple-line-icons.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <?= $this->Html->css('landing-page.css') ?>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <?= $this->Html->link('Rate My Restaurant','/', ['class' => 'navbar-brand']); ?>

            <?php if(empty($getUser)) : ?>
                <?= $this->Html->link('Sign in', '/login', ['class' => 'btn btn-danger']) ?>
            <?php else : ?>
                <?= $this->Html->link('Logout', '/logout', ['class' => 'btn btn-primary']) ?>
            <?php endif ?>
      </div>
    </nav>

    <?= $this->fetch('content') ?>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <?= $this->Html->link('About','#'); ?>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <?= $this->Html->link('Contact','#'); ?>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <?= $this->Html->link('Terms of Use','#'); ?>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <?= $this->Html->link('Privacy Policy','#'); ?>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <?= $this->Html->script('jquery/jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>

  </body>

</html>
