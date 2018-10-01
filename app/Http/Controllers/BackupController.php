<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;

class BackupController extends Controller
{
    public function backup()
    {
        $client = new Client(env('DROPBOX_TOKEN'));

        $files = Storage::disk('local')->files('Laravel');

        $now = Carbon::now()->format('Y-m-d-H-i-s');

        foreach($files as $file){
            $fileBackup = $file;
        }

        $file = Storage::get($fileBackup);

        $upload = $client->upload('/teste/back01.zip', $file);

        return 'backup gerado com sucesso!';
    }
}
