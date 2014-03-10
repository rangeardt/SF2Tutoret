<?php

namespace Projet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProjetUserBundle extends Bundle
{
	 public function getParent()
    {
        return 'FOSUserBundle';
    }
}
