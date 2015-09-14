<?php

/* -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   SECURITY WARNING: THIS FILE IS EXECUTED BEFORE THE USER'S SESSION IS VALIDATED.
                     DO NOT INCLUDE ANY CODE THAT COULD OUTPUT TO CONSOLE.
                     DOING SO COULD POTENTIALLY MAKE PRIVATE INFORMATION AVAILABLE TO UNAUTHORIZED USERS.

   System Information: Includes and definitions for the system framework.
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

    #System files to load
    include 'class_page.php';
    include 'function_validate_session.php';
    include 'function_load_page_definition.php';

    #System definitions
    define("SITE_DEBUG", "0");