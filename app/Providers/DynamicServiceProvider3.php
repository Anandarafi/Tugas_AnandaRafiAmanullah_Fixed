<?php
namespace App\Providers;
use App\GenreModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider3 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('genre', GenreModel::all());
    });
}

}
?>