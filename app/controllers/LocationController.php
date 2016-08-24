<?php

class LocationController extends JoshController
{
	public function findProvinciasByRegion($id_re)
	{
		$data = Provincia::where('id_re', (int)$id_re)->lists('str_descripcion', 'id_pr');
		if (Request::ajax()) {
			return View::make('location.provincia', array('provincias' => $data));
		}

		return $data;
	}

	public function findComunasByProvincia($id_pr)
	{
		$data = Comuna::where('id_pr', (int)$id_pr)->lists('str_descripcion', 'id_co');
		if (Request::ajax()) {
			return View::make('location.comuna', array('comunas' => $data));
		}

		return $data;
	}
}
