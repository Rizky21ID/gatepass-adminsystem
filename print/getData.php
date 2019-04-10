<?php
$userData = array();
if(!empty($_GET['id_gatepass'])){
    // Include the database configuration file
    require_once '../config/koneksi.php';
    
    // Get the user's ID from the URL
    $userID = $_GET['id'];
    
    // Fetch the user data based on the ID
    $query = $db->query("SELECT * FROM gatepass WHERE id_gatepass = ".$userID);
    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
    }
}
?>

<!-- Render the user details -->
<div class="container">
    <h2>User Details</h2>
    <?php if(!empty($userData)){ ?>
        <p><b>Kategori:</b> <?php echo $userData['kategori_id']; ?></p>
        <p><b>Pemilik:</b> <?php echo $userData['pemilik_id']; ?></p>
        <p><b>Tanggal Expired:</b> <?php echo $userData['tgl_expired']; ?></p>
        <p><b>Tanggal Update:</b> <?php echo $userData['tgl_update']; ?></p>
        <p><b>No Plat:</b> <?php echo $userData['no_plat']; ?></p>
        <p><b>Lokasi:</b> <?php echo $userData['lokasi_id']; ?></p>
        <p><b>Petugas:</b> <?php echo $userData['petugas_id']; ?></p>
    <?php }else{ ?>
        <p>User not found...</p>
    <?php } ?>
</div>