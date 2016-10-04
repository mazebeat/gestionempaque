<?php

class JoshController extends BaseController
{
	public static $days = array(
		'Lunes'     => 'Lunes',
		'Martes'    => 'Martes',
		'Miercoles' => 'Miercoles',
		'Jueves'    => 'Jueves',
		'Viernes'   => 'Viernes',
		'Sabado'    => 'Sabado',
		'Domingo'   => 'Domingo',
	);


	public static $days2 = array(
		0 => 'Lunes',
		1 => 'Martes',
		2 => 'Miercoles',
		3 => 'Jueves',
		4 => 'Viernes',
		5 => 'Sabado',
		6 => 'Domingo',
	);

	public static $turns = array(
		'08:00 - 09:45',
		'09:50 - 10:35',
		'10:40 - 11:25',
		'11:30 - 12:15',
		'12:20 - 13:05',
		'13:10 - 13:55',
	);

	/**
	 * Crop Demo
	 */
	public function crop_demo()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$targ_w = $targ_h = 150;
			$jpeg_quality = 99;

			$src = base_path() . '/public/assets/img/cropping-image.jpg';
			//dd($src);
			$img_r = imagecreatefromjpeg($src);

			$dst_r = ImageCreateTrueColor($targ_w, $targ_h);

			imagecopyresampled($dst_r, $img_r, 0, 0, intval($_POST['x']), intval($_POST['y']), $targ_w, $targ_h,
				intval($_POST['w']), intval($_POST['h']));

			header('Content-type: image/jpeg');
			imagejpeg($dst_r, null, $jpeg_quality);

			exit;
		}
	}

	/**
	 * Message bag.
	 *
	 * @var Illuminate\Support\MessageBag
	 */
	protected $messageBag = null;

	/**
	 * Initializer.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// CSRF Protection
		$this->beforeFilter('csrf', array('on' => 'post'));

		//
		$this->messageBag = new Illuminate\Support\MessageBag;
	}

	public function showHome()
	{
        if (Auth::check() && in_array(Auth::user()->id_perfil, array(1, 2))) {
			return View::make('admin.index');
		}

		return Redirect::to('admin/signin')->with('error', 'You must be logged in!');
	}

	public function showView($name = null)
	{
//		dd($name);
		if (View::exists('admin/' . $name)) {
            if (Auth::check()) {
                return View::make('admin/' . $name);
            } else {
                return Redirect::to('admin/signin')->with('error', 'You must be logged in!');
            }
		} else {
			return View::make('admin/404');
		}
	}
}