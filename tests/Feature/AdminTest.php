<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\AdminServices;
use App\Models\User;


class AdminTest extends TestCase
{
    private AdminServices $adminservices;

    public function setUp():void
    {
        parent::setUp();
        $this->adminservices = $this->app->make(AdminServices::class);
    }
    
    public function testAdminlogin()
    {
        $this->post('/syslogin',['email'=>'asepm4s3p@gmail.com','password'=>'asepm0000'])
        ->assertStatus(200);

        self::assertTrue(true);
    }

    // public function testUser()
    // {
    //     $user  = new User();
    //     $user->name = 'asepm';
    //     $user->email = 'asepm4s3p@gmail.com';
    //     $user->password = bcrypt('asepm0000');
    //     $user->save();

    //     self::assertNotNull($user->save());
    // }

    
}
