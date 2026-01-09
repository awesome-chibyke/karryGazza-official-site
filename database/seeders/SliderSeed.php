<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Traits\Generics;
use Illuminate\Database\Seeder;

class SliderSeed extends Seeder
{
    use Generics;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id 	unique_id 	title 	description 	photo
        $unique_id = $this->createNewUniqueId('abouts', 'unique_id');

        $slider = new Slider();
        $slider->unique_id = $unique_id;
        $slider->title = 'Welcome to <span>Flattern</span>';
        $slider->description = 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.';
        $slider->photo =  'slide-1.jpg';
        $slider->save();



        $unique_id = $this->createNewUniqueId('abouts', 'unique_id');

        $slider2 = new Slider();
        $slider2->unique_id = $unique_id;
        $slider2->title = 'Lorem Ipsum Dolor';
        $slider2->description = 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.';
        $slider2->photo =  'slide-1.jpg';
        $slider2->save();


        $unique_id = $this->createNewUniqueId('abouts', 'unique_id');

        $slider3 = new Slider();
        $slider3->unique_id = $unique_id;
        $slider3->title = 'Sequi ea ut et est quaerat';
        $slider3->description = 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.';
        $slider3->photo =  'slide-1.jpg';
        $slider3->save();
    }
}