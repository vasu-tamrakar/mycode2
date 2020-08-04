<?php
require __DIR__ .'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase {
    function testset(){
        $user = new App();
        $rt = $user->setUser('vtest','lastv');
        $this->assertTrue($rt);
        
        return $rt;
    }
    function getTest(){
        $user = new App();
        $rt = $user->setUser('vtest','lastv');
        $rtdata = $user->getUser();
        $this->assertArrayHasKey('first_name',$rtdata);
        return $rt;
    }
    function testFistname(){
        $user = new App();
        $rt = $user->setUser('vtest','lastv');
        $fname = $user->getfirst_name();
        $this->assertEquals('vtest',$fname);
        // $rts = $user->getage(19);
        return true;
    }
}
?>