<?php


namespace App\Controller\User;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Сервис создания юзера
 *
 * @package App\Controller\User
 */
class UserController extends AbstractFOSRestController
{
    /**
     * Создание юзера
     *
     * @return Response
     */
    public function createUser(): Response
    {
        return $this->handleView($this->view([], Response::HTTP_BAD_REQUEST));
    }
}