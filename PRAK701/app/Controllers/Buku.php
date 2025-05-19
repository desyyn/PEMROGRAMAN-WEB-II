<?php

namespace App\Controllers;
use App\Models\BukuModel;

class Buku extends BaseController {
    protected $buku;

    public function __construct() {
        $this->buku = new BukuModel();
    }

    public function index() {
        $data['buku'] = $this->buku->findAll();
        return view('buku/index', $data);
    }

    public function create() {
        return view('buku/create');
    }

    public function store() {
    $rules = [
        'judul' => ['label' => 'Judul', 'rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]',
        'errors' => ['required' => 'Judul wajib diisi.', 'regex_match' => 'Judul hanya boleh berisi huruf dan spasi.']
        ],
        'penulis' => ['label' => 'Penulis','rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]',
        'errors' => ['required' => 'Penulis wajib diisi.','regex_match' => 'Penulis hanya boleh berisi huruf dan spasi.']
        ],
        'penerbit' => ['label' => 'Penerbit','rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]',
        'errors' => ['required' => 'Penerbit wajib diisi.','regex_match' => 'Penerbit hanya boleh berisi huruf dan spasi.']
        ],
        'tahun_terbit' => ['label' => 'Tahun Terbit','rules' => 'required|integer|greater_than[1901]|less_than[2025]',
        'errors' => ['required' => 'Tahun terbit wajib diisi.', 'integer' => 'Tahun terbit harus berupa angka.', 'greater_than' => 'Tahun terbit harus lebih dari 1901.','less_than' => 'Tahun terbit harus kurang dari 2025.']
        ]
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $this->buku->insert($this->request->getPost());
    return redirect()->to('/buku');
    }

    public function edit($id) {
        $data['buku'] = $this->buku->find($id);
        return view('buku/edit', $data);
    }

    public function update($id) {
        $this->buku->update($id, $this->request->getPost());
        return redirect()->to('/buku');
    }

    public function delete($id) {
        $this->buku->delete($id);
        return redirect()->to('/buku');
    }
}