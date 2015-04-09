<?php namespace App\Http\Controllers;

use App\Models\WorkshopFeedback;
use View;
use Response;
use Input;
use Request;
use Redirect;

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

	public function dwnldContent(){
			return Response::download(DOWNLOAD_FILES_BASE . 'eYS_Workshop.zip');
	}

	public function feedback_data(){

		$name = Input::get('name');
		$email = Input::get('email');
		$college = Input::get('college');

		if($name == Null || $name == '' || empty($name)){
			return View::make('workshop.feedback_land')->with('error', 'Name not entered. Please fill the feedback form again!');
		}
		if($email == Null || $email == '' || empty($email)){
			return View::make('workshop.feedback_land')->with('error', 'email not entered. Please fill the feedback form again!');
		}
		if($college == Null || $college == '' || empty($college)){
			return View::make('workshop.feedback_land')->with('error', 'college not entered. Please fill the feedback form again!');
		}

		$desig = Input::get('desig');
		$first = Input::get('first');
		$sec = Input::get('sec');
		$third = Input::get('third');
		$fourth = Input::get('fourth');
		$fifth = Input::get('fifth');
		$sixth = Input::get('sixth');
		$seventh = Input::get('seventh');
		$eighth = Input::get('eighth');
		$ninth = Input::get('ninth');
		$tenth = Input::get('tenth');


		$feedback = new WorkshopFeedback;
		$feedback->name = $name;
		$feedback->email = $email;
		$feedback->college = $college;
		$feedback->desig = $desig;
		$feedback->q1 = $first;
		$feedback->q2 = $sec;
		$feedback->q3 = $third;
		$feedback->q4 = $fourth;
		$feedback->q5 = $fifth;
		$feedback->q6 = $sixth;
		$feedback->q7 = $seventh;
		$feedback->q8 = $eighth;
		$feedback->q9 = $ninth;
		$feedback->q10 = $tenth;

		$feedback->save();

		return View::make('workshop.feedback_success');

		/*$rules = array(
			'name' => 'required',
			'email' => 'required',

			);
		$validator = Validator::make(Input::all(), $rules);
		if($validator -> fails())
			return Redirect::to('workshop/feedback_land')
			->withInput()
			->withErrors($validator->messages());

		$data = array(
		$name=Input::get('name');
		//if (DB::table('feedback')->whereName($name))
		$email=Input::get('email');
		$teacher=Input::get('teacher');
		$student=Input::get('student');
		
		);*/

		/*if (!Input::has('teacher')){
    		//Redirect to the feedback page with error
		}*/
		
		

	}

}
