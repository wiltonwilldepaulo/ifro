<?php

namespace App\Controller;

use App\Trait\DatabaseValueNormalizer;
use App\Trait\Response;
use App\Trait\Template;

abstract class Base
{
    use Template, Response, DatabaseValueNormalizer;
}
