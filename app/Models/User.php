<?php

namespace App\Models;

class User
{
    public $first_name;
    public $last_name;

    public function setFirstName( string $name )
    {
        $this->first_name = $name;
    }

    public function setLastName( string $name )
    {
        $this->last_name = $name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

}
