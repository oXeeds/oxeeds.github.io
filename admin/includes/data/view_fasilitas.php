<?php
$sukses = '';
$error = '';

// CREATE
if (isset($_POST['simpan_fasilitas'])) {
    $nama_fasilitas = escape($_POST['nama_fasilitas']);
    $tahun_masuk_fasilitas = escape($_POST['tahun_masuk_fasilitas']);
    $keterangan_fasilitas = escape($_POST['keterangan_fasilitas']);

    $gambar_fasilitas = $_FILES['gambar_fasilitas']['name'];
    $gambar_fasilitas_tmp = $_FILES['gambar_fasilitas']['tmp_name'];

    move_uploaded_file($gambar_fasilitas_tmp, "../img/$gambar_fasilitas");

    if ($nama_fasilitas || $keterangan_fasilitas || $gambar_fasilitas) {
        // Simpan data
        $query = query("INSERT INTO fasilitas(nama_fasilitas, tahun_masuk_fasilitas, gambar_fasilitas, keterangan_fasilitas) 
                                VALUES ('$nama_fasilitas', '$tahun_masuk_fasilitas', '$gambar_fasilitas', '$keterangan_fasilitas') ");
        confirmQuery($query);
        if ($query) {
            $sukses     = "Menambahkan data baru BERHASIL!";
        } else {
            $error      = "GAGAL menambahkan data baru!";
        }
    } else {
        $error  = "Data KOSONG! Silahkan masukkan data!";
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id_fasilitas = $_GET['delete'];
    if ($id_fasilitas) {
        $query = query("DELETE FROM fasilitas WHERE id_fasilitas = '$id_fasilitas'");
        confirmQuery($query);
        if ($query) {
            $sukses     = "Menghapus data BERHASIL!";
        } else {
            $error      = "GAGAL menghapus data!";
        }
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Data Fasilitas</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Alert Gagal -->
                    <?php
                    if ($error) {
                    ?>
                        <div class="card-tools alert alert-danger opacity-50" role="alert">
                            <a href="fasilitas.php"><button type="button" class="btn btn-outline-danger"><i class="fas fa-times"></i></button></a>
                            <?php echo $error ?>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Alert Sukses -->
                    <?php
                    if ($sukses) {
                    ?>
                        <div class="alert alert-success opacity-50" role="alert">
                            <a href="fasilitas.php"><button type="button" class="btn btn-outline-success"><i class="fas fa-times"></i></button></a>
                            <?php echo $sukses ?>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- Edit Kontak  -->
                    <div class="card card-primary border-0 shadow-lg mb-5">
                        <!-- form start -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- No telp-->
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input type="text" class="form-control" name="nama_fasilitas" placeholder="Masukkan Fasilitas">
                                </div>
                                <!-- No telp-->
                                <div class="form-group">
                                    <label for="date">Tahun Masuk</label>
                                    <input id="date" type="date" class="form-control" name="tahun_masuk_fasilitas" placeholder="Masukkan Tahun Masuk">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control" name="gambar_fasilitas">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan_fasilitas" placeholder="Masukkan Keterangan">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="simpan_fasilitas" class="btn btn-primary btn-block">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /card -->

                    <!-- List Kontak -->
                    <div class="card border-0 shadow-lg">
                        <div class="card-header">
                            <h3 class="card-title">
                                List Fasilitas
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover table-striped">
                                <!-- Baris 1 (Jenis Kolom) -->
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Fasilitas</th>
                                        <th>Tahun Masuk</th>
                                        <th>Gambar Fasilitas</th>
                                        <th>Keterangan Fasilitas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <!-- Isi -->
                                <tbody>
                                    <?php
                                    $query   = query("SELECT * FROM fasilitas");
                                    $index  = 1;
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th><?= $index++ ?></th>
                                            <td><?= $row['nama_fasilitas'] ?></td>
                                            <td><?= $row['tahun_masuk_fasilitas'] ?></td>
                                            <td><img src="../img/<?= $row['gambar_fasilitas'] ?>" alt="<?= $row['gambar_fasilitas'] ?>" width="400"></td>
                                            <td><?= $row['keterangan_fasilitas'] ?></td>
                                            <td>
                                                <a href="fasilitas.php?page=edit&id_fasilitas=<?= $row['id_fasilitas'] ?>"><button type="button" class="btn btn-warning mt-1">Update</button></a>
                                                <a href="fasilitas.php?delete=<?= $row['id_fasilitas']  ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger mt-1">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>