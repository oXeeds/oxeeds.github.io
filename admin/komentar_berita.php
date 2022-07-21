<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "sdn1pwtk";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak dapat terhubung ke database");
}

$id_komentar_berita = "";
$komentar_id_berita = "";
$nama_komentar = "";
$email_komentar = "";
$isi_komentar = "";
$tanggal_komentar = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// DELETE
if ($op == 'delete') {
    $id_komentar_berita = $_GET['id_komentar_berita'];
    $query   = "DELETE FROM komentar_berita WHERE id_komentar_berita = '$id_komentar_berita'";
    $q1     = mysqli_query($koneksi, $query);
    if ($q1) {
        $sukses     = "Menghapus data BERHASIL!";
    } else {
        $error      = "GAGAL menghapus data!";
    }
}

?>

<?php include 'includes/admin_header.php'; ?>
<?php include 'includes/admin_navigation.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Komentar Berita</h1>
        </div>
    </div>


    <!-- List Kontak -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
                <!-- Baris 1 (Jenis Kolom) -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Berita</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>

                <!-- Isi -->
                <tbody>
                    <?php
                    $query   = "SELECT * FROM komentar_berita";
                    $q2     = mysqli_query($koneksi, $query);
                    $index  = 1;
                    while ($row = mysqli_fetch_array($q2)) {
                        $id_komentar_berita = $row['id_komentar_berita'];
                        $komentar_id_berita = $row['komentar_id_berita'];
                        $nama_komentar = $row['nama_komentar'];
                        $email_komentar = $row['email_komentar'];
                        $isi_komentar = $row['isi_komentar'];
                        $tanggal_komentar = $row['tanggal_komentar']
                    ?>
                        <tr>
                            <th><?php echo $index++ ?></th>
                            <td><?php echo $komentar_id_berita ?></td>
                            <td><?php echo $nama_komentar ?></td>
                            <td><?php echo $email_komentar ?></td>
                            <td><?php echo $isi_komentar ?></td>
                            <td><?php echo $tanggal_komentar ?></td>
                            <td>
                                <a href="komentar_berita.php?op=delete&id_komentar_berita=<?php echo $id_komentar_berita ?>" onclick="return confirm('Ingin menghapus data ?')"><button type="button" class="btn btn-danger">Delete</button></a>
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
<?php include 'includes/admin_footer.php'; ?>