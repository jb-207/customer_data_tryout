<!-- templates/TryoutCust/confirm_delete.php -->

<div class="modal-header">
    <h5 class="modal-title">Confirm Deletion</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <p>Are you sure you want to delete this customer?</p>
</div>
<div class="modal-footer">
    <?= $this->Form->postLink(
        'Delete',
        ['action' => 'delete', $customer->id],
        ['class' => 'btn btn-danger']
    ) ?>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
</div>
