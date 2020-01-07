<?php
namespace App\Providers;
use App\PenerbitModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider1 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('penerbit', PenerbitModel::all());
    });
}

}
?>