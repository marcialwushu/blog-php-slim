<?php

namespace App\Handlers;

use Slim\Views\Twig;

class ErrorHandler
{
    private $view;
    // call class like a function
    public function __construct(Twig $view) {
        $this->view = $view;
    }

    public function __invoke($request, $response)
    {
        return $this->view->render($response, 'errors/500.twig')->withStatus(500);
    }
}