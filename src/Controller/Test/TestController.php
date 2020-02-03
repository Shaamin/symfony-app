<?php

namespace App\Controller\Test;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/api/v1/test", name="api_get_test", methods="GET")
     * @return Response
     */
    public function test(): Response
    {
        return $this->handleView($this->view(['result' => 'Hello world']));
    }
}