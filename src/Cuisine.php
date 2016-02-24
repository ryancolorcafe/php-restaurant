<?php

class Cuisine
{
    private $name;
    private $id;

    function __construct($name, $id = null)
    {
        $this->name = $name;
        $this->id = $id;
    }

    function getName()
    {
        return $this->name;
    }
    function setName($new_name)
    {
        return $this->name = $new_name;
    }
}

?>