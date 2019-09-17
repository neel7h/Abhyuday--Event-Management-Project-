<?php
header("Content-disposition: attachment; filename=rules.pdf");
header("Content-type: application/pdf");
readfile("rules.pdf");
?>