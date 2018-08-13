<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restaurant $restaurant
 */
?>

<?= $this->Form->create($restaurant) ?>
    <div class="container-fluid bg-light py-3 body-bg">
        <div class="row">
            <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center mb-4">Add Restaurant</h3>
                        <?= $this->Flash->render(); ?>
                        <fieldset>
                            <div class="form-group has-success">
                                <?= $this->Form->control('name', [
                                    'class' => 'form-control input-lg',
                                    'label' => 'Restaurants Name'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('menu_desc', [
                                    'class' => 'form-control input-lg',
                                    'type' => 'textarea',
                                    'label' => 'Menu Description'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('address', [
                                    'class' => 'form-control input-lg',
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('tel_number', [
                                    'class' => 'form-control input-lg',
                                    'label' => 'Telephone Number'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('url', [
                                    'class' => 'form-control input-lg',
                                    'label' => 'Website Address'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('res_description', [
                                    'type' => 'textarea',
                                    'class' => 'form-control input-lg',
                                    'label' => 'Restaurant Description'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('lat', [
                                    'class' => 'form-control input-lg',
                                    'label' => 'Latitude'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('lng', [
                                    'class' => 'form-control input-lg',
                                    'label' => 'Longitude'
                                ]); ?>
                            </div>
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
                        </fieldset>
                    </div>
            </div>
        </div>
    </div>
<?= $this->Form->end() ?>
