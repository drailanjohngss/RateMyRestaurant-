<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restaurant $restaurant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Restaurant'), ['action' => 'edit', $restaurant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Restaurant'), ['action' => 'delete', $restaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="restaurants view large-9 medium-8 columns content">
    <h3><?= h($restaurant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($restaurant->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($restaurant->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel Number') ?></th>
            <td><?= h($restaurant->tel_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($restaurant->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($restaurant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lat') ?></th>
            <td><?= $this->Number->format($restaurant->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lng') ?></th>
            <td><?= $this->Number->format($restaurant->lng) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($restaurant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($restaurant->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Menu Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($restaurant->menu_desc)); ?>
    </div>
    <div class="row">
        <h4><?= __('Res Description') ?></h4>
        <?= $this->Text->autoParagraph(h($restaurant->res_description)); ?>
    </div>
</div>
