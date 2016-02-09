<?php

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor {
     
    use _generated\AcceptanceTesterActions;

    public $username = 'demo';
    public $password = 'demo';
    
    /*
     * Login action to perform authentication
     */
    public function actionLogin() {
        $this->amOnPage('/users');
        $this->seeElement('input', ['name' => 'username']);
        $this->seeElement('input', ['name' => 'password']);
        $this->fillField(['name' => 'username'], $this->username);
        $this->fillField(['name' => 'password'], $this->password);
        $this->click('Sign in');
    }

}
