<?php

namespace App\Models;

use CodeIgniter\Model;

class PraktikanModel extends Model
{
    public function getData() {
        return [
            'nama' => 'Dessy Nurulita',
            'nim' => '2310817220024',
            'asal_prodi' => 'Teknologi Informasi',
            'hobi' => ['Baking', 'Listening to music', 'Playing Roblox'],
            'skill' => ['design', 'editing'],
            'comfort_food' => ['pisang keju', 'terang bulan', 'mie kuah'],
            'comfort_song' => ['atlas - keshi', 'to let a good thing die - bruno major', 'photograph - ed sheeran']
        ];
    }
}