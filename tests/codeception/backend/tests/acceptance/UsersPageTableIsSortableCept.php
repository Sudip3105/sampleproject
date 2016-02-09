<?php

/*
 * Codeception acceptance test to check sorting.
 */

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->actionLogin();
$I->see('Users');
$I->wait(1);
$I->click('#fullname');
$a = $I->grabAttributeFrom('//*[@id="fullname"]', 'class');
$I->click('#fullname');
$b = $I->grabAttributeFrom('//*[@id="fullname"]', 'class');
if ($a != $b) {
    $I->expect("Sorting Done");
} else {
    $I->see("Sorting was not performed");
}


