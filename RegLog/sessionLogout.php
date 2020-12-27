<?php
session_start();
session_destroy();

?>
<script type="text/javascript">
	alert("LOGOUT BERHASIL \u2665");
	window.location.href = "../../index.html";
</script>
<?php