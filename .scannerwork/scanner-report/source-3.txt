<?php
require __DIR__ .'/../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase {
    function testset(){
        $user = new App();
        $rt = $user->setUser('vtest','lastv');
        $this->assertTrue($rt);
        
        $rtdata = $user->getUser();
        $this->assertArrayHasKey('first_name',$rtdata);

    } 
}
?>