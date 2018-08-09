<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<?= $this->Form->create($user) ?>
    <div class="container-fluid bg-light py-3 body-bg">
        <div class="row">
            <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center mb-4">Sign-up</h3>
                        <!-- <div class="alert alert-danger">
                            <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                        </div> -->
                        <fieldset>
                            <?= $this->Flash->render(); ?>
                            <div class="form-group has-error">
                                <?= $this->Form->control('email', [
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'Input Email'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('password', [
                                    'type' => 'password',
                                    'class' => 'form-control input-lg',
                                    'placeholder' => '***********'
                                ]); ?>
                            </div>
                            <div class="form-group has-success">
                                <?= $this->Form->control('first_name', [
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'Input First Name'
                                ]); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-group has-success">
                                    <?= $this->Form->control('middle_name', [
                                        'class' => 'form-control input-lg',
                                        'placeholder' => 'Input Middle Name'
                                    ]); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group has-success">
                                    <?= $this->Form->control('last_name', [
                                        'class' => 'form-control input-lg',
                                        'placeholder' => 'Input Last Name'
                                    ]); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group has-success">
                                    <?= $this->Form->control('address', [
                                        'class' => 'form-control input-lg',
                                        'placeholder' => 'Input Address'
                                    ]); ?>
                                </div>
                            </div>
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
                        </fieldset>
                    </div>
            </div>
        </div>
    </div>
<?= $this->Form->end() ?>
