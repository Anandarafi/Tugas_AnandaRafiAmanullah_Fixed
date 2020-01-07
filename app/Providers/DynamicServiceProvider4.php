<?php
namespace App\Providers;
use App\KelasModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider4 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('kelas', KelasModel::all());
    });
}

}
?>