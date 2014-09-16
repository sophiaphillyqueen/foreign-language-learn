<?php
require_once "true-flag-file.php";
header("Location: " . app_invocation_url() . "/index.html");
function lc_echo_dst ( ) {
  echo htmlspecialchars(app_invocation_url()) . "/index.html";
}
?><html><body>
<h1>Please Redirect your Browser</h1>

<p>
You should go to <a href = "<?php lc_echo_dst(); ?>"><?php lc_echo_dst(); ?></a>:
</p>



</body></html>
<?php exit(0); ?>