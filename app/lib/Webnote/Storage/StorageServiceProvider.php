<?php
namespace Webnote\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'Webnote\Storage\User\UserRepository',
            'Webnote\Storage\User\EloquentUserRepository'
        );
    }

}