<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Log;

class UserValidationTest extends TestCase
{
    public function testUserRequest()
    {
        $data = [ "name"=>'eko','email'=>'eko',"password"=>'235'];

        $rules= ['name'=>'required','email'=>'email','password'=>'min:5'];
        $validator = Validator::make($data,$rules);
        $message = $validator->errors();

        self::assertFalse($validator->passes());
        log::info($message->toJson(JSON_PRETTY_PRINT));
    }
}
