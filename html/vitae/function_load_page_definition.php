<?php

/* -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   Function: load_page_definition() - This function accepts the GET variable 'page' and checks if it is a valid page definition.  If it is the page definition is loaded, if it it not a 404 error page
                                      is loaded, if the GET variable does not exist or is empty the definition for 'home' is loaded.
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

function load_page_definition()
{
    #Check for a requested page definition
    if(array_key_exists('page', $_GET)) { return new page($_GET['page']); }
    #If no definition is requested default to home
    else { return new page('home'); }
}