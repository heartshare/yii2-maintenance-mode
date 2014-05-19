<?php

namespace ekaragodin\yii\maintenance;

/**
 * @author Evgeniy Karagodin <ekaragodin@gmail.com>
 */
class Controller extends \yii\web\Controller
{
    public function actionIndex($message)
    {
        return $message;
    }
}
