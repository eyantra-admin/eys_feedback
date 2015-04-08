<?php namespace App\Http\Controllers;
use View;
use Response;

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

}
