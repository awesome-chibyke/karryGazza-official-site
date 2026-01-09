<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;
use App\Traits\Generics;

class CareerSeed extends Seeder
{

    use Generics;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unique_id = $this->createNewUniqueId('careers', 'unique_id');

        $careers = new Career;
        $careers->unique_id = $unique_id;
        $careers->image = 'blog-author_1644443372.jpg';
        $careers->heading1 = 'EXPLORE YOUR CAREER OPTIONS';
        $careers->heading2 = 'Why Work With Us';
        $careers->text1 = 'Join us to help create a better world.We’re always looking for talented professionals.<br>
        Here are the current open positions you can apply today';
        $careers->text2 = 'In a world full of average folks, how well do you stand out? Head and shoulders above the rest? Do you enjoy teamwork ? Yes? Well then, welcome to FMCL.You can look forward to a very promising career. Challenging assignments, warm work culture and world-class facilities – they’re all part of the perks.';
        $careers->save();

    }
}
