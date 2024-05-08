<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::create([
            'domain_web' => 'https://lookindonesia.com',
            'images' => 'logo.png',
            'link_instagram' => 'https://instagram.com/',
            'link_facebook' => 'https://facebook.com/',
            'link_youtube'=> 'optional',
            'linktree'=> 'https://linktree.com/',
            'link_twitter'=>'https://twitter.com/',
            'link_maps'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.1204037151547!2d119.88244317533224!3d-8.487672491553644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db465b55c740295%3A0x2ce6ef55e75dbd07!2sLook%20Indonesia%20Adventure!5e0!3m2!1sid!2sid!4v1712332592728!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
            'no_telp'=>'08771588xxxxxxx',
            'no_wa_booking'=>'6287715xxxxxxxx',
            'about_company'=>'We are well experienced tour operators based in Labuan Bajo, Flores, NTT. Our Trip is family friendly, adventurous, and trip of a lifetime. Look Indonesia Adventure - established since 2015 in Bandung, West Java, Indonesia. Based on our passion for traveling, our aim is not to introduce the beautiful places in our country, but also to promote tourism for indonesia. Therefore, we offered you our best to provide good service and hospitality to be your travel partner. because we committed to giving our personal touch in each and every trip for your holiday.',
            'name_company'=>'Look Indonesia Adventure',
            'created_at'=> now(),
        ]);
    }
}
