<?php


namespace App\Controller\SignupApplication;


use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Сервис создания юзера
 *
 * @package App\Controller\User
 */
class SignupApplication extends AbstractFOSRestController
{
    /**
     * Регистрация
     *
     * @Route("/api/v1/signupApplications", name="api_post_signup_application", methods="POST")
     * @return Response
     */
    public function signupApplication(): Response
    {
        return $this->handleView($this->view([], Response::HTTP_BAD_REQUEST));
    }
}