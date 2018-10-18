<!--NOT REVIEWED-->
<!--<style>

        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

        h1 {
            color: #555;
            font-size: 2em;
            font-weight: 400;
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (max-width: 280px) {

            body, p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }

        }

    </style>-->

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
	<!-- Add site or application 404 error content below -->
    <!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->

    <h1>404 Page Not Found</h1>
    <p>Sorry, but the page you were trying to view does not exist.</p>
    <p>The web page you requested cannot be found on the web server.</p>
    <p>
    	This is caused by:
    	<ul>
        	<li>A link to a non existing page was clicked.</li>
            <li>A page has been moved or renamed and the web designer did not put a permanant 301 redirect in place.</li>
            <li>Someone found an old listing in a search engine or directory results and clicked it.</li>
            <li>The user made a typing error when manually typing the url of a web page.</li>
        </ul>
    </p>
    
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    <!-- Add site or application 404 error content above -->
</section>

<!-- ------------------------------- -->
<!-- </main> is closed in footer.php -->
    
<!-- Load footer -->  
<?php include($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>

<!-- IE needs 512+ bytes: https://blogs.msdn.microsoft.com/ieinternals/2010/08/18/friendly-http-error-pages/ -->
