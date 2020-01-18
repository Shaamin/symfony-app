<?php

namespace App\Controller\Test;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Тестовый контроллер
 *
 * @package App\Controller\Test
 */
class TestController extends AbstractFOSRestController
{
    /**
     * Тестовые АПИ метод
     *
     * @return Response
     */
    public function test(): Response
    {
        return $this->handleView($this->view(['result' => 'Hello world']));
    }
}