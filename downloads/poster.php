<?php
header("Content-disposition: attachment; filename=poster.pdf");
header("Content-type: application/pdf");
readfile("poster.pdf");
?>