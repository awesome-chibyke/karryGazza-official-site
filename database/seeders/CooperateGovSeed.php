<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoopersteGov;
use App\Traits\Generics;

class CooperateGovSeed extends Seeder
{

    use Generics;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unique_id = $this->createNewUniqueId('cooperste_govs', 'unique_id');

        $cooperateGovernance = new CoopersteGov;
        $cooperateGovernance->unique_id = $unique_id;
        $cooperateGovernance->title1 = 'Anti-bribery, Corruption and Fraud' ;
        $cooperateGovernance->post1 = 'We have a long-standing commitment to doing business with integrity, combating bribery and complying with the anti-corruption laws of Nigeria.
 
        We conduct periodic anti-bribery assessments and audits of our business to detect potential misconduct and ensure complete compliance with local and international anti-bribery, corruption and fraud laws and policy.
         
        We maintain a zero tolerance approach to acts of bribery and corruption by its personnel or anyone acting on its behalf.
         ';
        $cooperateGovernance->image1 = 'blog-author_1644443372.jpg';
        $cooperateGovernance->title2 = 'Help us Fight Ethical Breaches';
        $cooperateGovernance->post2 = 'We encourages the active involvement of our consumers in the detection and prevention of misconduct and encourages the reporting of such activities.

        We believe – all mere appearance of impropriety should be avoided to ensure that the company holds the highest regard for the dignity of others.
        
        If you suspect or are aware of any illegal, non-compliant, fraudulent or unethical behaviour, yes, we want to know about it. Anonymously report any such incidents by contacting whistleblowing@fmclgrp.com.';
        $cooperateGovernance->image2 = 'blog-author_1644443372.jpg';
        $cooperateGovernance->save();
    }
}
