<?php
namespace Home\Controller;

use Marmot\Framework\Classes\Controller;
use Marmot\Framework\Controller\JsonApiTrait;

/**
 * @codeCoverageIgnore
 */
class HealthzController extends Controller
{
    use JsonApiTrait;

    public function healthz()
    {
        echo "Is Healthz";
        return true;
    }
}
