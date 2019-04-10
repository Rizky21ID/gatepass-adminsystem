<?php
session_start();
session_destroy();

//header('location:login.php?module=signin');
?>
<script>
document.location="login.php?module=signin";
</script>