<?php
global $SETTINGS;
$SETTINGS->pageTitle = "Newpage";

include('partials/header.php');

$SETTINGS->currentPage = "newpage";
include('partials/menu.php');

?>
    
<!-- Add your site or application content here -->
This page has new stuff on it!!
    
<!-- FOOTER -->
<?php 
    include('partials/footer.php');
    include('partials/scripts.inc');
?>

</body>
</html>