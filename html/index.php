<?php

/* -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   Page: index.php - Site default document.  Runs functions to validate session, validate requested page, and generate HTML to be displayed
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

    #Load system framework
    include ('vitae/system_on_load.php');

    #Validate session and requested page definition
    validate_session(); $display_page = load_page_definition();

    #Generate page and print to console/browser
    echo '<pre>'; var_dump($_SESSION); echo '</pre>';
    echo $display_page->print_title();