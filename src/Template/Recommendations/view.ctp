<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recommendation $recommendation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recommendation'), ['action' => 'edit', $recommendation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recommendation'), ['action' => 'delete', $recommendation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recommendation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recommendations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recommendation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recommendations view large-9 medium-8 columns content">
    <h3><?= h($recommendation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $recommendation->has('user') ? $this->Html->link($recommendation->user->id, ['controller' => 'Users', 'action' => 'view', $recommendation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recommendation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Restaurant Id') ?></th>
            <td><?= $this->Number->format($recommendation->restaurant_id) ?></td>
        </tr>
    </table>
</div>
