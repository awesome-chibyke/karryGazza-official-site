<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Traits\Generics;
use App\Models\Settings;

class SettingsSeed extends Seeder
{

    use Generics;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unique_id = $this->createNewUniqueId('abouts', 'unique_id');

        $app_settings = new Settings();
        $app_settings->unique_id = $unique_id;
        $app_settings-> company_name = 'Jocohs Stores';
        $app_settings-> email1 = 'Jocohstores1@gmail.com';
        $app_settings-> email2 = 'Jocohstores2@gmail.com';
        $app_settings-> phone1 = '0123456789';
        $app_settings-> phone2 = '0123456789';
        $app_settings-> address1 = 'Jocohs Stores Nigeria';
        $app_settings-> address2 = 'Jocohs Stores Nigeria';
        $app_settings-> linkedin = 'Jocohsstores/linkedin';
        $app_settings-> twitter = 'Jocohsstores/twitter';
        $app_settings-> facebook = 'Jocohsstores/facebook';
        $app_settings-> instagram = 'Jocohsstores/instagram';
        $app_settings-> slogan = 'Jocohs Stores the one stop store for your home';

        $app_settings->save();
    }
}
