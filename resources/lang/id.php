<?php

return [
    /**
     * AuthManager.
     */
    \Core\Auth\AuthManager::NAME => [

        'failed' => ':email atau :password salah.',
    ],

    /**
     * Time.
     */
    \Core\Support\Time::NAME => [

        'y' => 'tahun',
        'm' => 'bulan',
        'd' => 'hari',
        'h' => 'jam',
        'i' => 'minit',
        's' => 'saat',

        'ago' => 'yang lalu.',
        'recently' => 'baru saja.',
    ],

    /**
     * Validator.
     */
    \Core\Valid\Validator::NAME => [

        'request' => [
            'required' => ':field perlu diisi!.',
            'email' => ':field tidak sah!.',
            'dns' => ':field tidak sah!.',
            'url' => ':field tidak sah!.',
            'uuid' => ':field bukan uuid!.',
            'int' => ':field perlu diisi angka!.',
            'float' => ':field perlu diisi nombor!.',
            'min' => ':field panjang minimal: :attribute',
            'max' => ':field panjang maxsimal: :attribute',
            'sama' => ':field tidak sama dengan :attribute',
            'unik' => ':field sudah dimiliki!.',
        ],

        'file' => [
            'required' => ':field perlu diisi!.',
            'min' => ':field panjang minimum: :attribute',
            'max' => ':field panjang maksimum: :attribute',
            'mimetypes' => ':field dibolehkan: :attribute',
            'mimes' => ':field dibolehkan: :attribute',
            'unsafe' => ':field tidak selamat!.',
            'corrupt' => ':field sudah rosak!.',
        ],
    ]
];
