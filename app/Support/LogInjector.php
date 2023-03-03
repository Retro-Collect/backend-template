<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Log\Logger;
use Monolog\Processor\ProcessIdProcessor;

class LogInjector
{
    public function __invoke(Logger $logger): void
    {
        /**
         * Illuminate\Log\Logger uses __call to forward methods to Monolog\Logger.
         *
         * @var Logger|\Monolog\Logger $logger
         */
        $logger->pushProcessor(new ProcessIdProcessor());
    }
}
