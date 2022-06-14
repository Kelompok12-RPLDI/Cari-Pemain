<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\User;


class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'widi'
        ]);

    }
    public function test_Login()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);

    }
    public function test_Duplication()
    {
        $user1 = User::make([
            'name' => 'widi',
            'email' => 'widi@example.com',
        ]);
        $user2 = User::make([
            'name' => 'bilal',
            'email' => 'bilal@example.com',
        ]);
        $this->assertTrue($user1->name != $user2->name);
    }
}
