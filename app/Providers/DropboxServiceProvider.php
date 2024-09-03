<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Console\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Spatie\FlysystemDropbox\DropboxAdapter;



class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Storage::extend('dropbox', function (Application $app, array $config) {
            $adapter = new DropboxAdapter(new Client($config ['authoraization_token']));
            


        $fileSystem = new Filesystem( $adapter, ['case_sensitive' => false ]);
        return new FilesystemAdapter($fileSystem, $adapter, $config);
           } );
         }
}
