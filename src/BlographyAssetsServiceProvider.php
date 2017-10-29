<?php
/**
 * Created by PhpStorm.
 * User: 3ncode
 * Date: 2017/10/22
 * Time: 14:59
 */

namespace _3ncode\Assets;


use Illuminate\Support\ServiceProvider;

class BlographyAssetsServiceProvider extends ServiceProvider {

    public function boot() {
        require __DIR__ . '/../vendor/autoload.php';
    }

    public function register() {

        try {
            rename(base_path('resources/assets'), base_path('resources/assets-original'));
        } catch(\Exception $e) {

        }

        $this->publishes([
            __DIR__.'/public/assets' => base_path('resources/assets')
        ]);
    }

}