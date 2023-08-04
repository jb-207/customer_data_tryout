<!-- templates/TryoutCust/index.php -->
<?php
// echo "<pre>";
// print_r($tryoutCust);
// echo "</pre>";
?>
<div class="container">
    <h1>Customer List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kit ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tryoutCust as $item): ?>
                <?php
                    // echo "<pre>";
                    // print($item);
                    // echo "------------";
                    // echo "</pre>";
                    ?>
                <tr>
                    <td><?= h($item->tryout_cust_kit->kit_id) ?></td>
                    <td><?= h($item->customer_name) ?></td>
                    <td><?= h($item->tryout_cust_desc->description) ?></td>
                    <td><?= $this->Html->link('Edit', ['action' => 'edit', $item->id],
                    [ 'class' => 'btn btn-primary']
                    ) ?></td>
                    <td>
                        <?= $this->Form->postLink('Delete', ['action' => 'delete', $item->id], [
                            'confirm' => 'Are you sure you want to delete this customer?', // Disable the browser's alert
                            // 'data-bs-toggle' => 'modal', // Add data attribute to trigger the modal
                            // 'data-bs-target' => '#deleteModal', // Specify the target modal ID as "#deleteModal"
                            'class' => 'btn btn-danger',
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< First') ?>
        <?= $this->Paginator->prev('< Previous') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Next >') ?>
        <?= $this->Paginator->last('Last >>') ?>
    </ul>
    <!-- Use a string format for the counter method -->
    <p><?= $this->Paginator->counter('{{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total') ?></p>
</div>
</div>
<br />
<div class="container">
    <h1>Search By Customer Name</h1>

    <form action="<?= $this->Url->build(['action' => 'index']) ?>" method="get" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search by Customer Name">
        <button type="submit" class="btn btn-primary my-2 my-sm-0">Search</button>
    </form>

    <table class="table table-striped">
        <!-- Table header and data display as before -->
    </table>
</div>
<br />
<hr />
<br />
<div class="container">
    <h1>Add Kit ID</h1>
    <!-- Button to navigate to TryoutCustKits add page -->
        <?= $this->Html->link('Add Kit ID', ['controller' => 'TryoutCustKits', 'action' => 'add'], ['class' => 'btn btn-primary']) ?>
</div>
<br />
<hr />
<br />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Customer</h1>
            <!-- Add New Customer button -->
            <div class="my-3">
                <?= $this->Html->link('Add New Customer', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal container -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal content will be loaded dynamically from confirm_delete.php -->
        </div>
    </div>
</div>
