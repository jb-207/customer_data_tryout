<!-- src/Template/TryoutCustKits/index.php -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All Kits IDs</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kit Locator ID</th>
                            <th>Kit ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tryoutCustKits as $tryoutCustKit): ?>
                            <tr>
                                <td><?= h($tryoutCustKit->id) ?></td>
                                <td><?= h($tryoutCustKit->kit_id) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>