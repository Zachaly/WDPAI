<?php

declare(strict_types=1);

namespace App\Controller;


abstract class AppController
{
    protected function render(string $template, array $variables = []): void
    {
        $templatePath = dirname(__DIR__, 2) . '/public/views/' . $template . '.html.php';
        $layoutPath = dirname(__DIR__, 2) . '/public/views/layout.html.php';

        if (!is_file($templatePath)) {
            throw new \RuntimeException('View not found: ' . $template);
        }

        if (!is_file($layoutPath)) {
            throw new \RuntimeException('View layout not found.');
        }

        extract($variables, EXTR_SKIP);

        ob_start();
        try {
            require $templatePath;
            $content = ob_get_contents();
            if ($content === false) {
                throw new \RuntimeException('Unable to capture view output: ' . $template);
            }
            ob_end_clean();
        } catch (\Throwable $exception) {
            ob_end_clean();
            throw $exception;
        }

        require $layoutPath;
    }
}