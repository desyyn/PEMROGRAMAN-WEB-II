<?php

namespace App\Controllers;

use App\Models\PraktikanModel;

class Praktikan extends BaseController
{
    protected $praktikan;

    public function __construct() {
        $this->praktikan = new PraktikanModel();
    }

    public function index() {
        $data = $this->praktikan->getData();
        return view('layout/template', [
            'content' => view('beranda', $data)
        ]);
    }

    public function profil() {
        $data = $this->praktikan->getData();
        return view('layout/template', [
            'content' => view('profil', $data)
        ]);
    }
}