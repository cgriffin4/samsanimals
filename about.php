<?php
global $SETTINGS;
$SETTINGS->pageTitle = "About - Daisy Griffin";
$SETTINGS->pageCSS[] = 'about';

include('partials/header.php');

$SETTINGS->currentPage = "about";
include('partials/menu.php');

?>
    
<!-- Add your site or application content here -->
<img src="img/Daisyg.jpg" alt="Author Daisy Griffin" style="float:right;" />
<h1>Daisy T. Griffin</h1>

<p>
    The author enjoys writing books that educate as well as delight her readers. ;She was one of the first to embrace the new kindle format for children under age two, providing some of the first picture books for parents to read to their children from the Kindle. ;The author graduated from Auburn University in 2006 with a degree in Zoology. She is an award winning educator, developing curriculum that brings ecology lessons alive for young children. She is very active in local ecology awareness programs, and is employed at the <a href="http://www.facebook.com/auburnpreserve">Louise Kreher Forest Ecology Preserve</a> mentioned in the book.
</p>
<p>
    When she is not rescuing animals from the many things they can get into on their own, she and her husband are raising three children, who are as much or more interested in creatures as she is. While all the Samantha Stories are works of fiction they all start with an animal  found in real life.
</p>
<br/>
<img src="img/fanmail.png" width="350" height="263" alt="fan mail" class="pull-left" />
<p>
    I love hearing from my readers.
    <br/>
    Click <a href="mailto:daisyteele@gmail.com">here to email</a> the author!
</p>
    
<!-- FOOTER -->
<?php 
    include('partials/footer.php');
    include('partials/scripts.inc');
?>

</body>
</html>