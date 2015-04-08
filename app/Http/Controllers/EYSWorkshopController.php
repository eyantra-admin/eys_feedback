<?php namespace App\Http\Controllers;
use View;
use Response;
use Input;
use Request;

class EYSWorkshopController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function downloadResourcesLand()
	{
		return View::make('workshop.resources_land');
		//return view('workshop.resources_land');
	}

	public function dwnldPython(){
		return Response::download(DOWNLOAD_FILES_BASE . 'python-2.7.9.msi');
	}

	public function dwnldPythonNumpy(){
		return Response::download(DOWNLOAD_FILES_BASE . 'numpy-1.7.1-win32-superpack-python2.7.exe');
	}

	public function dwnldOpenCV(){
		return Response::download(DOWNLOAD_FILES_BASE . 'cv2.pyd');
	}

	public function feedback_land(){
		return View::make('workshop.feedback_land');
	}

	public function feedback_data(){
		if (!Input::has('teacher')){
    		//Redirect to the feedback page with error
		}
		if (!Input::has('student')){
    		//Redirect to the feedback page with error
		}
		if (!Input::has('teacher')){
    		//Redirect to the feedback page with error
		}
		if (!Input::has('teacher')){
    		//Redirect to the feedback page with error
		}

		$teacher = Request::input('teacher');
		$student = Request::input('student');
		$yes = Request::input('student');


		return View::make('workshop.feedback_land');
	}

}
