<?php
if (isset($_POST['add_berita'])) {
    $berita_category_id = escape($_POST['berita_category_id']);
    $berita_title = escape($_POST['berita_title']);
    $berita_description = escape($_POST['berita_description']);
    $berita_author = escape($_POST['berita_author']);

    $berita_image = $_FILES['berita_image']['name'];
    $berita_image_tmp = $_FILES['berita_image']['tmp_name'];

    move_uploaded_file($berita_image_tmp, "../img/$berita_image");

    $query = query("INSERT INTO berita(berita_category_id, berita_title, berita_image, berita_description, berita_author,  berita_date)
                        VALUES('$berita_category_id','$berita_title','$berita_image','$berita_description','$berita_author',now())");
    confirmQuery($query);
    redirect('berita.php');
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Form Tambah Berita</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <!-- Dibutuhkan enctype karena kita menginputkan file (gambar)-->
                    <form method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <select class="form-control" name="berita_category_id">
                                <option>Pilih Kategori</option>
                                <?php
                                $query = query("SELECT * FROM category_berita");
                                confirmQuery($query);
                                while ($item = mysqli_fetch_assoc($query)) {
                                ?>
                                    <option value="<?php echo $item['id_category_berita'] ?>"><?php echo $item['category_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Judul Berita</label>
                            <input type="text" name="berita_title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Pengarang</label>
                            <input type="text" name="berita_author" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Gambar Artikel</label>
                            <input type="file" name="berita_image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="berita_description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="add_berita" class="btn btn-primary btn-block">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>