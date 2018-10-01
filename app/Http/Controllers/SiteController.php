<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;

class SiteController extends Controller
{
    public function createFolder()
    {
        $client = new Client(env('DROPBOX_TOKEN'));

        $client->createFolder('teste');

        dd($client);
    }

    public function listFolders()
    {
        $client = new Client(env('DROPBOX_TOKEN'));

        $folders = $client->listFolder();

        dd($folders);
    }

    public function upload()
    {
        $client = new Client(env('DROPBOX_TOKEN'));

        $file = Storage::get('public/teste.txt');

        $upload = $client->upload('/teste/teste1.txt', $file);

        dd($upload);
    }
}
