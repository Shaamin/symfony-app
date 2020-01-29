<?php


namespace App\Tests\api\User;


use App\Tests\ApiTester;
use Symfony\Component\HttpFoundation\Response;

/**
 * Тестирование АПИ метода /api/v1/createUser - создание юзера
 *
 * @package App\Tests\api\User
 */
class CreateUserCest
{
    /**
     * @param ApiTester $I
     */
    public function successCreateUser(ApiTester $I): void
    {
        $I->wantTo('Успешное создание юзера');
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('/api/v1/createUser');
        $I->seeResponseCodeIs(Response::HTTP_OK);
        $I->seeResponseIsJson();
    }
}