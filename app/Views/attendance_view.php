<!DOCTYPE html>
<html>
<head>
    <title>Attendance List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Attendance List</h1>
        <a href="<?= site_url('attendance/create') ?>" class="btn btn-primary mb-3">Add New</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendance as $item): ?>
                <tr>
                    <td><?= esc($item['id']) ?></td>
                    <td><?= esc($item['employee_name']) ?></td>
                    <td><?= esc($item['date']) ?></td>
                    <td><?= esc($item['status']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>