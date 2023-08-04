<!-- src/Template/TryoutCust/edit.php -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Customer</h1>
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <div class="form-group">
                    <?= $this->Form->control('customer_name', ['label' => 'Customer Name', 'class' => 'form-control']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('kit_id', ['options' => $existingKitIds, 'label' => 'Kit ID', 'class' => 'form-control']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('tryout_cust_desc.description', ['label' => 'Description', 'class' => 'form-control']) ?>
                </div>
            </fieldset>
            <?= $this->Form->button('Save', ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>