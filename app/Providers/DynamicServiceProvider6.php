<?php
namespace App\Providers;
use App\SiswaModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider6 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('siswa', SiswaModel::all());
    });
}

}
?>