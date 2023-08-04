<!-- src/Template/TryoutCustKits/add.php -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Kit ID</h1>
            <?= $this->Form->create($tryoutCustKit) ?>
            <fieldset>
                <div class="form-group">
                    <?= $this->Form->control('kit_id', ['label' => 'New Kit ID', 'type'=>'text','class' => 'form-control']) ?>
                </div>
            </fieldset>
            <?= $this->Form->button('Add Kit ID', ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>