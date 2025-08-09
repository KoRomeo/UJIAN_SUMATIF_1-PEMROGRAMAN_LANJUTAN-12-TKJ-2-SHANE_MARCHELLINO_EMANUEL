<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardShow extends Component
{
    public $id;
    public $username;
    public $nama;
    public $kelas;
    public $hobi;
    public $foto;
    public $deskripsi;
    public function __construct($id = null, $username = null, $nama = null, $kelas = null, $hobi = null, $foto = null, $deskripsi = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->hobi = $hobi;
        $this->foto = $foto;
        $this->deskripsi = $deskripsi;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-show');
    }
}