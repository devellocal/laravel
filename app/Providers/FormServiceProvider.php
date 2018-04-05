<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsTextArea', 'com.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'com.form.submit', ['value' => 'Submit', 'attributes' => []]);
        Form::component('hidden', 'com.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsText', 'com.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsFile', 'com.form.file', ['name', 'attributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
