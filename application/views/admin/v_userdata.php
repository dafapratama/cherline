<section class="content">
    <div class="box">
        <div class="box-body table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>
                        <th>Kategori Pengguna</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $admin => $data) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->role == "3" ? "System Admin" : ($data->role == "2" ? "Sales" : "Pembeli") ?></td>
                            <td><?= $data->role ?></td>
                            <td>
                                <a class="xs-auto fa fa-edit" href="<?= base_url('admin/user_edit/' . $data->id_user) ?> "></a>
                            </td>
                            <td>
                                <a class="xs-auto fa fa-trash-alt" href="<?= base_url('admin/user_del/' . $data->id_user) ?>">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>