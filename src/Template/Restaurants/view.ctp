<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restaurant $restaurant
 */
?>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="container">
    <div class="card">
    	<div class="row">
    		<aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <?php foreach($uploads as $u) : ?>
                            <?php
                                $src  = str_replace('webroot', '',  $u->dir.$u->photo );
                            ?>
                        <div class="img-wrapper-card"> <a href="#"><img src="<?= $src ?>"></a></div>
                    <?php endforeach ?>
                    </div> <!-- slider-product.// -->
                </article> <!-- gallery-wrap .end// -->
    		</aside>
    		<aside class="col-sm-7">
                <article class="card-body p-5">
                	<h3 class="title mb-3"><?= h($restaurant->name) ?></h3>
                <dl class="item-property">
                    <dt>Description</dt>
                    <dd><?= $this->Text->autoParagraph(h($restaurant->res_description)); ?></dd>
                </dl>
                <dl class="item-property">
                    <dt>Address</dt>
                    <dd><p><?= h($restaurant->address) ?></p></dd>
                </dl>
                <dl class="param param-feature">
                    <dt>Telephone #</dt>
                    <dd><?= h($restaurant->tel_number) ?></dd>
                </dl>  <!-- item-property-hor .// -->
                <dl class="param param-feature">
                    <dt>Website</dt>
                    <dd><?= h($restaurant->url) ?></dd>
                </dl>  <!-- item-property-hor .// -->
                <dl class="param param-feature">
                    <dt>Menu</dt>
                    <dd><?= $this->Text->autoParagraph(h($restaurant->menu_desc)); ?></dd>
                </dl>  <!-- item-property-hor .// -->

                <hr />
                <!-- rating -->
                <div class="form-group" id="rating-ability-wrapper">
                    <label class="control-label" for="rating">
                        <span class="field-label-header">How would you rate your ability to use the computer and access internet?*</span><br>
                        <span class="field-label-info"></span>
                        <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                    </label>
                    <h2 class="bold rating-header" style="">
                        <span class="selected-rating">0</span><small> / 5</small>
                    </h2>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                </div>
                <hr>
                	<a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
                	<a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
                </article> <!-- card-body.// -->
    		</aside> <!-- col.// -->
    	</div> <!-- row.// -->
    </div> <!-- card.// -->
</div>
