<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch List</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

<div class="container mt-4">
    <h2>Batches for <?= date("F", mktime(0, 0, 0, $month, 1)) ?></h2>
    <a href="<?= base_url('admin/admission') ?>" class="btn btn-secondary mb-3">Back</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Batch Name</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($batches)) : ?>
                <?php foreach ($batches as $batch) : ?>
                    <tr>
                        <td><?= esc($batch['batchname']) ?></td>
                        <td><?= esc($batch['starttime']) ?></td>
                        <td><?= esc($batch['endtime']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3" class="text-center">No batches found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
