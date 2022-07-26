<?php
$id_guru_karyawan = $_GET['id_guru_karyawan'];
if (isset($_GET['id_guru_karyawan'])) {
    $query = query("SELECT * FROM guru_karyawan WHERE id_guru_karyawan='$id_guru_karyawan' ");
    confirmQuery($query);
    $result = mysqli_fetch_array($query);

    // Query Edit ke Database
    if (isset($_POST['update_guru_karyawan'])) {
        $nama = escape($_POST['nama']);
        $nip = escape($_POST['nip']);
        $gol_ruang = escape($_POST['gol_ruang']);
        $posisi = escape($_POST['posisi']);
        $jumlah_kelas = escape($_POST['jumlah_kelas']);
        $jam_tatap_muka = escape($_POST['jam_tatap_muka']);
        $total_jam = escape($_POST['total_jam']);
        $keterangan = escape($_POST['keterangan']);

        $query = query("UPDATE guru_karyawan SET nama='$nama', 
                                                    nip='$nip',
                                                    gol_ruang='$gol_ruang',
                                                    posisi='$posisi',
                                                    jumlah_kelas='$jumlah_kelas',
                                                    jam_tatap_muka='$jam_tatap_muka',
                                                    total_jam='$total_jam',
                                                    keterangan='$keterangan'
                                                    WHERE id_guru_karyawan='$id_guru_karyawan' ");
        if ($query) {
            redirect('guru_karyawan.php');
        }
    }
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Update Guru dan Karyawan</h1>
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
                <!-- Edit Guru & Karyawan  -->
                <div class="card card-primary">
                    <!-- form start -->
                    <form method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $result['nama'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="nip">Nip</label>
                                <input type="text" class="form-control" id="nip" name="nip" value="<?= $result['nip'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="gol_ruang">Gol Ruang</label>
                                <input type="text" class="form-control" id="gol_ruang" name="gol_ruang" value="<?= $result['gol_ruang']?>">
                            </div>

                            <div class="form-group">
                                <label for="posisi">Posisi</label>
                                <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $result['posisi'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kelas">Jumlah Kelas</label>
                                <input type="text" class="form-control" id="jumlah_kelas" name="jumlah_kelas" value="<?= $result['jumlah_kelas'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="jam_tatap_muka">Jam Tatap Muka</label>
                                <input type="text" class="form-control" id="jam_tatap_muka" name="jam_tatap_muka" value="<?= $result['jam_tatap_muka'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="total_jam">Total Jam</label>
                                <input type="text" class="form-control" id="total_jam" name="total_jam" value="<?= $result['total_jam'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $result['keterangan'] ?>">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="update_guru_karyawan" class="btn btn-warning btn-block">Update Data Guru dan Karyawan</button>
                        </div>
                    </form>
                </div>
                <!-- /card -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</section>
<!-- /.content -->