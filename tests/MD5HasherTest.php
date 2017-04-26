<?php
class MD5HasherTest extends \PHPUnit\Framework\TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Ivanlin\Hasher\MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherMakeWithSalt()
    {
        $passwordTwo = $this->hasher->make('password', ['salt' => 'ivan']);
        $password = md5('passwordivan');

        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password', $password);

        $this->assertTrue($passwordCheck);
    }
}
