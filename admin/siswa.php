<?php include 'includes/admin_header.php'; ?>
<?php include 'includes/admin_navigation.php' ?>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '';
}

switch ($page) {
    case 'edit':
        include 'includes/data/edit_siswa.php';
        break;
    default:
        include 'includes/data/view_siswa.php';
        break;
}

?>

<?php include 'includes/admin_footer.php' ?>