<?php

/* -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   Class: page - This class defines a page to be displayed.
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

class page
{
    private $title;

    function __construct($title)
    {
        $this->title = $title;
    }

    public function print_title()
    {
        return $this->title;
    }
}