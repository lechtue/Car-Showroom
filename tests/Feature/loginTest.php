<?php 
use PHPUnit\Framework\TestCase;

class loginTest extends TestCase
{
    public function testLogin()
    {
        $res = $this->call('POST','/login',[
            'admin_email'=>'admin',
            'admin_password'=>'Aa123456'
        ]);
        $res->assertRedirect('/dashboard');
    }
}
