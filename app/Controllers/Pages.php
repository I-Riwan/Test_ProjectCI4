<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Riwan | Halaman Utama'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Riwan | About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Riwan | Contact Us',
            'alamat' => [
                [
                    'almt' => 'Jl Sejahtera',
                    'kota' => 'Jakarta'
                ],
                [
                    'almt' => 'Jl Sengsara',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
