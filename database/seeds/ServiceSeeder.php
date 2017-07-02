<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `services` (`name`,`text`,`icon`) VALUES (?,?,?)', [
        'Android',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
        'fa-android'
    ]);

        DB::insert('INSERT INTO `services` (`name`,`text`,`icon`) VALUES (?,?,?)', [
        'Apple IOS',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
        'fa-apple'
    ]);

        DB::insert('INSERT INTO `services` (`name`,`text`,`icon`) VALUES (?,?,?)', [
        'Design',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
        'fa-dropbox'
    ]);

        DB::insert('INSERT INTO `services` (`name`,`text`,`icon`) VALUES (?,?,?)', [
        'Concept',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
        'fa-html5'
    ]);

        DB::insert('INSERT INTO `services` (`name`,`text`,`icon`) VALUES (?,?,?)', [
        'User Research',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
        'fa-slack'
    ]);

        DB::insert('INSERT INTO `services` (`name`,`text`,`icon`) VALUES (?,?,?)', [
        'User Experience',
        'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text..',
        'fa-users'
    ]);
    }
}
