<?php
// Samedy
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Test User1',
                'email' => 'testuser1@gmail.com',
                'phone' => '01234',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Test User2',
                'email' => 'testuser2@gmail.com',
                'phone' => '12345',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Test User3',
                'email' => 'testuser3@gmail.com',
                'phone' => '123456',
                'password' => Hash::make('12345'),
            ],
        ];

        foreach ($users as $key=>$value) {
            User::create($value);
        }
    }
}
