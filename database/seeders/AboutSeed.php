<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use App\Traits\Generics;

class AboutSeed extends Seeder
{
    use Generics;
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */
    public function run()
    {
        $unique_id = $this->createNewUniqueId('abouts', 'unique_id');

        $about_us = new About();
        $about_us->unique_id = $unique_id;
        $about_us->title = 'About Us';
        $about_us->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit';
        $about_us->image =  'blog-author_1644443372.jpg';
        $about_us->vision = 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip';
        $about_us->mission = 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt';
        $about_us->save();
    }
}
