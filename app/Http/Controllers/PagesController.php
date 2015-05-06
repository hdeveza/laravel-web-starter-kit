<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class PagesController extends Controller {

	//
	public function index(){

     return view('pages/index');

	}
  
  public function about(){

     return view('pages/about');

  }


  /*
|--------------------------------------------------------------------------
| 21/04/2015
|--------------------------------------------------------------------------
|
| 
| 
|  
|
*/


public function services() {

    return view('pages/services/page_services');
  }


public function sendContact() {

  
  } // form Contact





}