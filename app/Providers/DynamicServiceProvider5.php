<?php
namespace App\Providers;
use App\StatusModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider5 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('status', StatusModel::all());
    });
}

}
?>