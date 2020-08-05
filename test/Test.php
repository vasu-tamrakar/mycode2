<?php
require __DIR__ .'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase {
    /*
    *   @ App::setUser
    */
    
    function testset(){
        /*
        *   @ App::setUser
        */
        $user = new App();
        $rt = $user->setUser('vtest','lastv',15);
        $this->assertTrue($rt);
        /*
        *   @ App::getUser
        */
        $user->getUser();
        /*
        *   @ App::ageTest
        */
        $res = $user->ageTest(15);
        $this->assertEquals('child',$res);

    } 
}
?>