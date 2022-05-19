<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // обработчик http://muzei-mira/
	public function acMain () {
		// формируем данные для представления main.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", "mainPage")->first();
		return view("main")->with("data", $data);
	}
	
	// обработчик http://muzei-mira/velikie-muzei
	public function acAboutNitchse () {
		// формируем данные для представления velikie-muzei.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "AboutNitchse")->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление 
		return view("about-nitchse")->with(["data" => $data, "attachdata" => $attachdata]);
	}
	
	// обработчик http://muzei-mira/novosti
	public function acNovosti () {
		// формируем данные для представления novosti.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where(["name" => "novosti"])->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)
			->orderBy('id','desc')
			->take(3)
			->get();
		// отдадим полученные данные в представление
		return view("novosti", ["data" => $data,  "attachdata" => $attachdata]);
	}


	// обработчик http://muzei-mira/zhivopis/{параметр}
	public function acSubPhilosophy ($subzhivopis) {
		// формируем данные для представления по переданному параметру
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $subzhivopis)->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		return view ("philosophy")->with(["data" => $data,  "attachdata" => $attachdata]);
	}
	
	// обработчик http://muzei-mira/skulptura
	public function acPhotos () {
		// формируем данные для представления skulptura.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "photos")->first();
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)
		->orderBy('id', 'desc')
		->take(3)
		->get(); 
		// отдадим полученные данные в представление
		return view("photos")->with(["data" => $data, "attachdata" => $attachdata]);
	}

}