<?php
include 'config.php';
echo'<textarea style="width: 100%; height: 100%;">
<script src="'.$site.'/'.$safelink_js.'" type="text/javascript"></script>
<script type="text/javascript">
protected_links = "'.$host.',google.com";
auto_anonymize();
auto_safelink();
</script>
</textarea>';
?>
