<?php


namespace App\Tests\api\User;


use App\Entity\SignupApplication;
use App\Tests\ApiTester;
use Symfony\Component\HttpFoundation\Response;

/**
 * Тестирование АПИ метода /api/v1/signupApplications - регистрация клиента
 *
 * @package App\Tests\api\User
 */
class SignupApplicationCest
{
    /**
     * @param ApiTester $I
     */
    public function successSignup(ApiTester $I): void
    {
        $I->wantTo('Успешная регистрация');
        $data = [
            'signupApplication' => [
                'email' => 'test@gmail.com'
            ]
        ];

        $I->dontSeeInRepository(SignupApplication::class, [
            'email' => 'test@gmail.com'
        ]);
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('/api/v1/signupApplications', $data);
        $I->seeResponseCodeIs(Response::HTTP_CREATED);

        $I->seeInRepository(SignupApplication::class, [
            'email' => 'test@gmail.com'
        ]);
        $I->seeResponseIsJson([
            'signupApplication' => [
                'email'     => 'test@gmail.com',
            ]
        ]);
    }
}