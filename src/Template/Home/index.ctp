<!-- Masthead -->
<header class="masthead text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">Find the Highest Rated Restaurants in the World!</h1>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Start Search here...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-warning">Find</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
<?php if($getUser == NULL) :
    echo $this->element('Home/Masthead')
 ?>
<?php else : ?>

    <div class="container">
        <h4 class="mt50">Restaurants that you rated.</h4>
        <div class="row mt50">
            <?php foreach($restaurants as $r) :?>
            <?= $this->element('Cards/ListCards',
                [
                    'elName' => $r->name,
                    'elDescription' => $r->res_description,
                ]
            ) ?>
        <?php endforeach ?>
        </div>
    </div>
<?php endif ?>
