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
        include 'includes/ekstrakulikuler/edit.php';
        break;
    default:
        include 'includes/ekstrakulikuler/view.php';
        break;
}

?>

<?php include 'includes/admin_footer.php' ?>