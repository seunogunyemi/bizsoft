<?php
// We'll be outputting a PDF
header('Content-type: application/pdf');

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="BIZSOFT_SOLUTION_BROCHURE_V21.pdf"');

// The PDF source is in original.pdf
readfile('http://www.bizsoftsolutions.com/BIZSOFT_SOLUTION_BROCHURE_V21.pdf');
?>

<?php include "index.php";?>
<!-- <?php header ("Location: index.php", true, 301);
exit();
?> -->