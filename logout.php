<?php
	session_start();
	session_destroy();
	echo '<script>alert("Akun anda telah logout.");window.location="login.php"</script>';
?>
