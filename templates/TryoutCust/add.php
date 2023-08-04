<!-- src/Template/TryoutCust/add.ctp -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Customer</h1>
            <?= $this->Form->create($tryoutCust, ['class' => '']) ?>
            <fieldset>
                <div class="form-group">
                    <?= $this->Form->control('customer_name', ['label' => 'Customer Name', 'class' => 'form-control', 'required' => true]) ?>
                </div>
                <div class="form-group">
                    <?php
                        $kitOptions = ['' => 'Select a Kit ID'] + $existingKitIds;
                        echo $this->Form->control('kit_id', ['options' => $kitOptions, 'label' => 'Select Kit ID', 'class' => 'form-control','required' => true]);
                    ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('description', ['label' => 'Description', 'class' => 'form-control', 'required' => true]) ?>
                </div>
            </fieldset>
            <?= $this->Form->button('Add Customer', ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>