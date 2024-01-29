<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\AdminServices;

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
        $this->post('/syslogin',['email'=>'yadi@gmail.com','password'=>'000000'])
        ->assertStatus(200);

        self::assertTrue(true);
    }

    
}
