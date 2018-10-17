<!--NOT REVIEWED-->

<!-- Load header -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>

<!-- Change Default Page Title -->
<!-- To change default page title remove "//" and place new title in the parenthesis and quotation marks -->
<!-- To use default page title place "//" in front of "changeDefaultPageTitleTo('');" -->
<!-- vvvvvvvvvvvvvvvvvvvvvvvvv -->

<?php
	 include($_SERVER['DOCUMENT_ROOT'].'/php/titleChange.php');
	 // changeDefaultPageTitleTo('Place New Page Title Here');
?>
    
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^ -->
<!-- Change Default Page Title -->


<!-- <main> is opened in header.php -->
<!-- ------------------------------ -->

<section>
	<!-- Add site or application 403 error content below -->
    <!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
    
    <h1>403 Forbidden</h1>
    <p>You have requested to view a web page or directory to which you are not allowed.</p>
    <p>The webmaster may have put security in place so that certain web pages are not available to the general public (you have to be logged in to view) or that certain directories on the web server are not available for viewing.</p>

	<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- Add site or application 403 error content above -->
</section>

<!-- ------------------------------- -->
<!-- </main> is closed in footer.php -->
    
<!-- Load footer -->  
<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>