<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function getIndex() {
        return View::make('index');
    }

    public function getAboutBhdi() {
        return View::make('about_bhdi');
    }
    
    public function getWhyBhdi() {
        return View::make('why_bhdi');
    }
    
    public function getBigData() {
        return View::make('bigdata');
    }
    
    public function getHealthCare() {
        return View::make('healthcare');
    }
    
    public function getChallenges() {
        return View::make('challenges');
    }
    
    public function getOpporunities() {
        return View::make('opportunities');
    }
    
    public function getDonate() {
        return View::make('donate');
    }
    
    public function getResearch() {
        return View::make('research');
    }
    
    public function getContactUs() {
        return View::make('contact');
    }
    
    public function postContactUs () {
        $name = Input::get('name');
        
        return View::make('contact', [$name]);
    }
}
