<?php
require_once "true-flag-file.php";
require_once $app_main_res . "/lib/main.php";


?>


<html><body>
<p>
I would go to <?php echo htmlspecialchars(app_invocation_url()); ?> and back.
With a dash of (<?php echo htmlspecialchars($_SERVER["PATH_INFO"]); ?>).
</p>
</body></html>