<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Employer extends Eloquent
{
    protected $collection = 'employers';
}
