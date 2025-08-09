<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StundetController extends Controller
{
    public function index(){
        $students = [
            [
                'id' => 1,
                'username' => 'andi_tkj',
                'nama' => 'Sandi Sung',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.ibb.co.com/FqXkXXtz/download.jpg',
                'deskripsi' => 'Saya sangat beradrenalin untuk berolahraga dan memennagkan kompetisi'
            ],
            [
                'id' => 2,
                'username' => 'avan_chef',
                'nama' => 'Leonavan Kim',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Masak',
                'foto' => 'https://i.ibb.co.com/xK39LgZY/8a76fa77a4f741ab07cc70269df0b11e.jpg',
                'deskripsi' => 'Saya sangat ingin masuk master chef iran.'
            ],
            [
                'id' => 3,
                'username' => 'surya_artist',
                'nama' => 'Suryangga Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Memancing',
                'foto' => 'https://i.ibb.co.com/kVPTgvPQ/sjawadw.jpg',
                'deskripsi' => 'Memancing adalah seni dan air seni'
            ],
            [
                'id' => 4,
                'username' => 'budi_gamer',
                'nama' => 'Budianto Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Bermain Game',
                'foto' => 'https://i.ibb.co.com/G3958MWj/dahwda.jpg',
                'deskripsi' => 'Saya adalah gamer sejati yang ingin menjadi pro player.'
            ]
        ];

        return view('students.index', compact('students'));
    }

    public function show($id){
        $students = [
            [
                'id' => 1,
                'username' => 'andi_tkj',
                'nama' => 'Sandi Sung',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.ibb.co.com/FqXkXXtz/download.jpg',
                'deskripsi' => 'Saya sangat beradrenalin untuk berolahraga dan memennagkan kompetisi'
            ],
            [
                'id' => 2,
                'username' => 'avan_chef',
                'nama' => 'Leonavan Kim',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Masak',
                'foto' => 'https://i.ibb.co.com/xK39LgZY/8a76fa77a4f741ab07cc70269df0b11e.jpg',
                'deskripsi' => 'Saya sangat ingin masuk master chef iran.'
            ],
            [
                'id' => 3,
                'username' => 'surya_artist',
                'nama' => 'Suryangga Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Memancing',
                'foto' => 'https://i.ibb.co.com/kVPTgvPQ/sjawadw.jpg',
                'deskripsi' => 'Memancing adalah seni dan air seni'
            ],
            [
                'id' => 4,
                'username' => 'budi_gamer',
                'nama' => 'Budianto Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Bermain Game',
                'foto' => 'https://i.ibb.co.com/G3958MWj/dahwda.jpg',
                'deskripsi' => 'Saya adalah gamer sejati yang ingin menjadi pro player.'
            ]
        ];

        $result = array_filter($students, function($item) use ($id) {
            return $item['id'] == $id;
        });

        $student = reset($result);
        
        return view('students.show', compact('student'));
    }
}