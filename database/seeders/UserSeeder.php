<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    $user  = new User();
    $user->name = 'asepm';
    $user->email = 'asepm4s3p@gmail.com';
    $user->password = bcript('asepm0000');
    $user->save();
}
