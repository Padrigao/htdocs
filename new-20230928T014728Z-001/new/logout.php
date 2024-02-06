<?php
session_start();
session_destroy();

echo "
<script>




alert(' you have been knocked out bayot');
window.location.href ='loginindex.php'

</script>";
?>