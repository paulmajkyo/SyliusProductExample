<?php

declare(strict_types=1);

namespace Wiseb2b\SyliusExamplePlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class Wiseb2bSyliusProductPlugin extends Bundle
{
    use SyliusPluginTrait;
}
