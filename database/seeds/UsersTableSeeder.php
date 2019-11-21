<?php
    
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        User::create([
            'role_id' => 2,
            'active' => 1,
            'name' => 'sumon',
            'username' => 'sumon',
            'email' => 'sumon@gmail.com',
            'password' => bcrypt('aminur93'),
            'remember_token' => str_random(10)
        ]);
    }
}
