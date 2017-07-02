<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'Finance App',
            'portfolio_pic2.jpg',
            'GPS'
        ]);
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'Concept',
            'portfolio_pic3.jpg',
            'design'
        ]);
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'Shopping',
            'portfolio_pic4.jpg',
            'android'
        ]);
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'Managment',
            'portfolio_pic5.jpg',
            'web'
        ]);
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'iPhone',
            'portfolio_pic6.jpg',
            'web'
        ]);
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'Nexus',
            'portfolio_pic7.jpg',
            'GPS '
        ]);
        DB::insert('INSERT INTO `portfolios`(`name`,`images`, `filter`) VALUES (?,?,?)',
        [
            'Android',
            'portfolio_pic8.jpg',
            'android'
        ]);
    }
}
