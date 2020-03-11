<?php
 
 namespace APP\Http\Controllers;
 use APP\Http\Controllers\Controller;
 
class pagesController extends Controller{
	public function getIndex() {
		return view('welcome');  

	} 
	public function getAbout() {
		return view('about');

	}
	public function getcontact() {
		return view(' contact');
	}

}      