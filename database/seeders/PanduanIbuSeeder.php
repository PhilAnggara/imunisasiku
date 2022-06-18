<?php

namespace Database\Seeders;

use App\Models\PanduanIbu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PanduanIbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PanduanIbu::create([
            'title' => 'Lorem ipsum dolor sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quam, quaerat perspiciatis eaque accusantium alias quae consequatur amet. Accusamus non, atque animi maiores hic, similique rerum quasi eius dolore ducimus praesentium itaque? Minus eaque dolores, porro illum ducimus excepturi cum exercitationem earum et ratione ex fugiat necessitatibus atque sunt nulla nisi tempora quo expedita libero a laudantium ad rem laborum. Aliquam, explicabo consectetur consequuntur enim dolore voluptas officiis pariatur qui ad provident perferendis molestiae dolorem sit quis fugit amet temporibus eius eum iste. Consequuntur numquam aspernatur unde nulla, modi labore expedita ipsa non nemo, libero ipsam ea provident neque. Iure.</p>',
        ]);
    }
}
