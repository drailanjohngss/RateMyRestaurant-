<?php
 // remove webroot/ on the url
 $src  = str_replace('webroot', '', $elImageSrc);
?>


<div class="col-md-4">
    <figure class="card card-product">
        <div class="img-wrap"><img src="<?= $src ?>"></div>
        <figcaption class="info-wrap">
                <h4 class="title"><?= $elName ?></h4>
                <p class="desc"><?= $elDescription ?> <br /><?= $elAddress ?></p>
                <div class="rating-wrap">
                    <div class="label-rating">132 reviews</div>
                    <div class="label-rating">5.0 rating </div>
                </div> <!-- rating-wrap.// -->
        </figcaption>
        <div class="bottom-wrap">
            <a href="/restaurants/view/<?= $elId ?>" class="btn btn-sm btn-primary float-right">View</a>
            <!-- <div class="price-wrap h5">
                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
            </div> <!-- price-wrap.// -->
        </div> <!-- bottom-wrap.// -->
    </figure>
</div> <!-- col // -->
