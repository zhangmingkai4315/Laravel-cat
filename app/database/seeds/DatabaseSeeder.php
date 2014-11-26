<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('petinfoseeder');
        //$this->call('userinformationseeder');
        //$this->call('PostCommentSeeder');

        // $this->call('UserTableSeeder');
    }

}


