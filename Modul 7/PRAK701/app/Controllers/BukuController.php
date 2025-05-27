<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    private function requireLogin()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login terlebih dahulu!');
            return redirect()->to('/login')->send();
        }
    }

    public function index()
    {
        $this->requireLogin();

        $data = [
            'buku' => $this->bukuModel->findAll(),
            'title' => 'Daftar Buku'
        ];
        return view('buku/index', $data);
    }

    public function create()
    {
        helper('form');
        return view('buku/create', ['title' => 'Tambah Buku']);
    }

    public function store()
    {
        $this->requireLogin();
        helper('form');

        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|greater_than[1901]|less_than[2024]'
        ];

        $messages = [
            'judul' => ['required' => 'Judul harus diisi'],
            'penulis' => ['required' => 'Penulis harus diisi'],
            'penerbit' => ['required' => 'Penerbit harus diisi'],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi',
                'numeric' => 'Tahun harus berupa angka',
                'greater_than' => 'Tahun minimal lebih dari 1901',
                'less_than' => 'Tahun maksimal kurang dari 2024'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return view('buku/create', [
            'title' => 'Tambah Buku',
            'validation' => $this->validator
            ]);
        }

        $this->bukuModel->insert($this->request->getPost());
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $this->requireLogin();
        $buku = $this->bukuModel->find($id);
        if (!$buku) {
            throw PageNotFoundException::forPageNotFound("Buku tidak ditemukan");
        }

        return view('buku/edit', [
            'buku' => $buku,
            'title' => 'Edit Buku'
        ]);
    }

    public function update($id)
    {
        $this->requireLogin();
        helper('form');

        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|greater_than[1901]|less_than[2024]'
        ];

        $messages = [
            'judul' => ['required' => 'Judul harus diisi'],
            'penulis' => ['required' => 'Penulis harus diisi'],
            'penerbit' => ['required' => 'Penerbit harus diisi'],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi',
                'numeric' => 'Tahun harus berupa angka',
                'greater_than' => 'Tahun minimal lebih dari 1901',
                'less_than' => 'Tahun maksimal kurang dari 2024'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            $buku = $this->bukuModel->find($id);
            return view('buku/edit', [
                'title' => 'Edit Buku',
                'buku' => $buku,
                'validation' => $this->validator
            ]);
        }

        $this->bukuModel->update($id, $this->request->getPost());
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->requireLogin();
        $this->bukuModel->delete($id);
        return redirect()->to('/buku');
    }
}
