<?php
if (isset($_POST['download_btn']) && isset($_POST['image_url'])) {
    $image_url = $_POST['image_url'];
    
    header('Content-Disposition: attachment; filename="kode_qr.png"');
    readfile($image_url);
    exit;
}
?>
