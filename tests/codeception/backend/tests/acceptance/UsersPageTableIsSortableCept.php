<?php

/*
 * Codeception acceptance test to check sorting.
 */

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->actionLogin();
$I->see('Users');
$I->wait(1);

$randomFullName = rand(1,4);

for($i=0;$i<$randomFullName;$i++){
    $I->click('#fullname');
}

$fullnameDivClass = $I->grabAttributeFrom('//*[@id="fullname"]', 'class');

if($fullnameDivClass !='sorting'){
    //Taking Full name values from UI
    $fullnameRowValue = $I->grabMultiple('.fullname');
    $fullDetail = $fullname = array();
    $flag = 0;
    if($fullnameDivClass =='sorting_asc'){        
        $fullDetail = get_all("SELECT full_name FROM users WHERE deleted=0 ORDER BY full_name asc");
    }else{
        $flag = 1;
        $fullDetail = get_all("SELECT full_name FROM users WHERE deleted=0 ORDER BY full_name desc");
    }
    for($i=0; $i<count($fullDetail);$i++){
        $fullname[] = $fullDetail[$i]["full_name"];
    }
    if($fullname === $fullnameRowValue){
        \Codeception\Util\Debug::debug("Fullname is sorted in ". (($flag==0)?"ascending":"descending"));
    }else{
        \Codeception\Util\Debug::debug("Fullname is not sorted");
    }
}

// Checking Username sorting.
$randomUserName = rand(1,4);

for($i=0;$i<$randomUserName;$i++){
    $I->click('#username');
}

$usernameDivClass = $I->grabAttributeFrom('//*[@id="username"]', 'class');

if($usernameDivClass !='sorting'){
    //Taking Full name values from UI
    $usernameRowValue = $I->grabMultiple('.username');
    $usernameDetail = $username= array();
    $flag = 0;
    if($usernameDivClass =='sorting_asc'){        
        $usernameDetail = get_all("SELECT username FROM users WHERE deleted=0 ORDER BY username asc");
    }else{
        $flag = 1;
        $usernameDetail = get_all("SELECT username FROM users WHERE deleted=0 ORDER BY username desc");
    }
    for($i=0; $i<count($usernameDetail);$i++){
        $username[] = $usernameDetail[$i]["username"];
    }
    if($username === $usernameRowValue){
        \Codeception\Util\Debug::debug("Username is sorted in ". (($flag==0)?"ascending":"descending"));
    }else{
        \Codeception\Util\Debug::debug("Username is not sorted");
    }
}