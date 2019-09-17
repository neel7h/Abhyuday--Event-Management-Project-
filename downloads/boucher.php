<?php
header("Content-disposition: attachment; filename=boucher.pdf");
header("Content-type: application/pdf");
readfile("boucher.pdf");
?>