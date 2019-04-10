<html>
<style>
</style>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
// Include the database configuration file
require_once '../config/koneksi.php';

// Fetch the users from the database
$result = query("SELECT id_gatepass, (SELECT nama_kategori FROM kategori where id_kategori=kategori_id) AS kategori_id FROM gatepass");
?>
<script>
$(document).ready(function(){
    $('#getUser').on('click',function(){
        var userID = $('#userSelect').val();
        $('#userInfo').load('getData.php?id='+userID,function(){
            var printContent = document.getElementById('userInfo');
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write(printContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        });
    });
});
</script>
<!-- Dropdown to select the user -->
<select id="userSelect">
    <option value="">Select Gatepass</option>
    <?php while($row = $result->fetch_assoc()){ ?>
    <option value="<?php echo $row['id_gatepass']; ?>"><?php echo $row['kategori_id']; ?></option>
    <?php } ?>
</select>

<!-- Print button -->
<button id="getUser">Print Details</button>

<!-- Hidden div to load the dynamic content -->
<div id="userInfo" style="display: none;"></div>
</body>