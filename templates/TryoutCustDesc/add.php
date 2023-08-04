<!-- templates/TryoutCust/add.php -->

<div class="container">
    <h1>Add New Customer</h1>
    <?= $this->Form->create(null, ['url' => ['controller' => 'TryoutCust', 'action' => 'add']]) ?>
        <?= $this->Form->control('customer_name', ['label' => 'Customer Name']) ?>
        <!-- Add other fields if needed -->
        <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
