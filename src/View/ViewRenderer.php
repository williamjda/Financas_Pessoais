<?php

namespace SONFin\View;


use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;

class ViewRenderer implements ViewRendererInterface
{
    /**
     * @var \Twig_Environment
     */
    private $twigEnvironment;

    /**
     * ViewRenderer constructor.
     */
    public function __construct(\Twig_Environment $twigEnvironment)
    {
        $this->twigEnvironment = $twigEnvironment;
    }

    public function render(string $template, array $context = []): ResponseInterface
    {
        $this->twigEnvironment->render($template, $context);
        $response = new Response();
        $response->getBody()->write($result);
        return $response;
    }
}