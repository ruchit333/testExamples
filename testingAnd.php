<?php
$str = "Jane & &#039;Tarzan&#039;";
echo html_entity_decode($str, ENT_HTML5); // Will only convert double quotes
echo "<br>";
echo htmlspecialchars_decode($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>