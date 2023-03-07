<?= $this->extend('layouts/admin') ?>
<?= $this->section('title') ?>
Masyarakat
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <a href="#" data-petugas="" class="btn btn-outline-light" data-target="#modalMasyarakat" data-toggle="modal"><i class="fas fa-fw fa-solid fa-user-plus"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="masyarakat">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($masyarakat as $row) {
                            $no++;
                            $data = $row['nik'] . "," . $row['nama'] . "," . $row['username'] . "," . $row['password'] . "," .$row['telp'] . "," . base_url('masyarakat/edit/' . $row['id_masyarakat']);
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><?= $row['telp'] ?></td>
                                <td>
                                    <a href="" data-petugas="<?= $data ?>" data-target="#modalMasyarakat" data-toggle="modal" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('masyarakat/delete/' . $row['id_masyarakat']) ?>" onclick="return confirm('yakin mau hapus?')" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalMasyarakat" tabindex="-1" aria-labelledby="modalMasyarakatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModelLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmMasyarakat" action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" class="form-control" id="nik">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="telp" name="telp" class="form-control" id="telp">
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>
<?= $this->Section("script") ?>
<script>
    $(document).ready(function() {
        $("#modalMasyarakat").on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var data = button.data('masyarakat');
            alert(data);
            if (data != "") {
                alert(data);
                const barisdata = data.split(",");
                $('#nik').val(barisdata[0]);
                $('#nama').val(barisdata[1]);
                $('#username').val(barisdata[2]);
                $('#password').val(barisdata[3]).change();
                $('#telp').val(barisdata[4]).change();
                $('#frmMasyarakat').attr('action', barisdata[5]);
            } else {
                $('#nik').val('');
                $('#nama').val('');
                $('#username').val('');
                $('#password').val('').change();
                $('#telp').val('').change();
                $('#frmMasyarakat').attr('action', '/smasyarakat');
            }
        });
        $("#masyarakat").dataTable();
    })
</script>
<?= $this->endSection() ?>