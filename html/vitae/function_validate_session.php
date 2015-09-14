<?php

/* -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   Function: validate_session() - This function handles session control as well as redirecting to a login page if needed
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

function validate_session()
{
    #Check for an existing session, if none exists create one
    if(!session_id()) { session_start(); }

    #Check for user defined theme, if none exists set to default
    if(!isset($_SESSION['userinfo']['theme'])) { $_SESSION['userinfo']['theme'] = 'default'; }

    #Check for user defined time zone, if none exists set to Eastern
    if(!isset($_SESSION['userinfo']['time_zone'])) { $_SESSION['userinfo']['time_zone'] = 'US/Eastern'; }
    date_default_timezone_set($_SESSION['userinfo']['time_zone']);
}