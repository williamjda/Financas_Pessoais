<?php
/**
 * Created by PhpStorm.
 * User: William.Aquino
 * Date: 27/02/2018
 * Time: 16:48
 */
declare(strict_types=1);
namespace SONFin\View;


use Psr\Http\Message\ResponseInterface;

interface ViewRendererInterface
{
    public function render(string $template, array $context = []): ResponseInterface;
}