<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class WapcrazutSyliusDhlExpressShippingExportPlugin extends Bundle
{
    use SyliusPluginTrait;
}
