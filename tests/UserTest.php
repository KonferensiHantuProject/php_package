<?php 

declare(strict_types=1);

namespace Nazhim\FirstPackage\Test;

use PHPUnit\Framework\TestCase;
use Nazhim\FirstPackage\User;

final class UserTest extends TestCase
{
    /**
     * @group testClassConstructor
     */
    public function testClassConstructor()
    {
        $user = new User(18, 'John');
    
        $this->assertSame('John', $user->name);
        $this->assertSame(18, $user->age);
        $this->assertEmpty($user->favorite_movies);
    }

    /**
     * @group testTellName
     */
    public function testTellName()
    {
        $user = new User(18, 'John');

        $this->assertIsString($user->tellName());
        $this->assertStringContainsStringIgnoringCase('John', $user->tellName());
    }
}