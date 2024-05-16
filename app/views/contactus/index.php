<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <?php if (!empty($data['cntu'])) : ?>
            <thead>
                <tr>
                    <th>id_user</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Massege</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['cntu'] as $row) : ?>
                    <tr>
                        <td><?= $row['id_contact']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['message']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php else : ?>
            <p>No data available</p>
        <?php endif; ?>
    </table>
</div>