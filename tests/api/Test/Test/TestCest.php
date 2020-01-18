<?php


namespace App\Tests\api\Test\Test;

use App\Tests\ApiTester;
use Symfony\Component\HttpFoundation\Response;

/**
 * Тестирвоание АПИ метода /api/v1/test - тестовый АПИ метод
 *
 * @package App\Tests\api\Test\Test
 */
class TestCest
{
    public function test(ApiTester $I)
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendGET('/api/v1/test');
        $I->seeResponseCodeIs(Response::HTTP_OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            'result' => 'Hello world'
        ]);
    }
}