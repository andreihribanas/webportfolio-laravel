<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $admin = new User();
        $admin->name = 'Andrei Hribanas';
        $admin->email = 'andrei.hribanas@gmail.com';
        $admin->password = bcrypt('andreiadmin');
        $admin->created_at = date("Y-m-d H:i:s");
        $admin->updated_at = date("Y-m-d H:i:s");
        $admin->save();
    }
}
