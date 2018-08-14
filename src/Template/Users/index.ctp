<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Registered Users</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
          </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user): ?>
          <tr>
              <td><?= $this->Number->format($user->id) ?></td>
              <td><?= h($user->first_name) ?></td>
              <td><?= h($user->middle_name) ?></td>
              <td><?= h($user->last_name) ?></td>
              <td><?= h($user->email) ?></td>
              <td><?= h($user->address) ?></td>
          </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>
