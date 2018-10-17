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
	<!-- Add site or application 400 error content below -->
    <!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
    
    <h1>400 Page Not Found</h1>
    <p>Sorry, but the page you were trying to view does not exist.</p>
    
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- Add site or application 400 error content above -->
</section>

<!-- ------------------------------- -->
<!-- </main> is closed in footer.php -->

<!-- Load footer -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>