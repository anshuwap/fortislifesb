<?php 
session_start();
session_unset();
unset($_SESSION['user']);
session_destroy();
if(empty($_SESSION['user'])){
?> 
<script>location.href="index.php"</script>
<?php 
}

?>