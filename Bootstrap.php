<?php

namespace ekaragodin\yii\maintenance;

use yii\base\BootstrapInterface;
use yii\web\Application;

/**
 * @author Evgeniy Karagodin <ekaragodin@gmail.com>
 */
class Bootstrap implements BootstrapInterface
{
    public $isEnabled = false;
    public $message = 'Site is currently down for maintenance.';
    public $catchAllRoute = 'maintenance/index';

    /**
     * @param Application $app
     */
    public function bootstrap($app)
    {
        if (!$app instanceof Application || !$this->isEnabled) {
            return;
        }

        if ($this->catchAllRoute == 'maintenance/index') {
            $app->controllerMap['maintenance'] = 'ekaragodin\yii\maintenance\Controller';
        }

        $app->catchAll = [$this->catchAllRoute, 'message' => $this->message];
    }
}
