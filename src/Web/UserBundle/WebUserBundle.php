<?php

namespace Web\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WebUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
