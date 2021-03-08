<?php
namespace Post;

use ApiTester;

class IndexCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET('');
        $I->seeResponseCodeIs(200);
        $I->canSeeResponseContains('Laravel');
    }
}
