<?php
namespace App\Providers;
use App\BukuModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider7 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('buku',  BukuModel::all());
    });
}

}
?>