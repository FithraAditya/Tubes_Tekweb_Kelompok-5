<?php
session_start();
// mengecek admin login atau tidak
if (isset($_SESSION['username'])) {
?>
    <script>
        alert('Anda sedang aktif, tidak dapat mengakses halaman ini!');
        window.location.href = 'dashboard';
    </script>
<?php
    return false;
}

$base_url = 'http://localhost/terascafe/';
include 'app/koneksi.php';

include 'views/layout/user/header.php';
include 'views/layout/user/navbar.php';
?>

<?php
if (isset($_GET['views_user']) && $_GET['views_user'] == "beranda") {
    include 'views/pages/user/beranda.php';
} else {
    include 'views/pages/user/beranda.php';
}
?>

<?php include 'views/layout/user/footer.php'; ?>