<?php
namespace App\Providers;
use App\KategoriModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('kategori', KategoriModel::all());
    });
}

}
?>