<?php if($getUser == NULL) :
    echo $this->element('Home/Masthead')
 ?>
<?php else : ?>
<?php foreach($users as $u) : ?>
    <?= $u['first_name'] ?>
<?php endforeach ?>
<?php endif ?>
