<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_admins')->insert(['name'=>'admin','email'=>'admin@admin.vn','password'=>'$2y$10$QaHAgzUPJt0W4ZDkHl5XcegvwDdoG2jPYHQuvj/3dXofbnaj.SLdG','level'=>'9']);
    }
}
