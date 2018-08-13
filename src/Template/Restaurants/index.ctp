<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Restaurant[]|\Cake\Collection\CollectionInterface $restaurants
 */
?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Registered Restaurants</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
                <th>Id</th>
                <th>name</th>
                <th>address</th>
                <th>tel_number</th>
                <th>url date</th>
                <th>lat</th>
                <th>lng</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach ($restaurants as $restaurant): ?>
          <tr>
              <td><?= $this->Number->format($restaurant->id) ?></td>
              <td><?= h($restaurant->name) ?></td>
              <td><?= h($restaurant->address) ?></td>
              <td><?= h($restaurant->tel_number) ?></td>
              <td><?= h($restaurant->url) ?></td>
              <td><?= $this->Number->format($restaurant->lat) ?></td>
              <td><?= $this->Number->format($restaurant->lng) ?></td>
          </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>
