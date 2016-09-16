<?php

// macros.php
\Form::macro("chosen", function ($name, $defaults = array(), $selected = null, $options = array()) {
	
	$opts       = array(
		'class' => '',
		'id'    => $name,
		'name'  => $name,
	);
	$options    = array_merge($opts, $options);
	$attributes = \HTML::attributes($options);

	unset($options);

	$ret = '<select ' . $attributes . '>';
	$ret .= '<option value=""></option>';
	
	unset($attributes);

	foreach ($defaults as $key => $value) {
		$ret .= '<option value="' . $key . '"';
		
		if ($key == $selected) {
			$ret .= ' selected="selected"';
		}
		$ret .= '>' . \HTML::entities($value) . '</option>';
	}
	$ret .= '</select>';
	
	return $ret;
});

\HTML::macro('calendar', function () {

	$days = \JoshController::$days2;
	$html = '';

	try {
		$id_planilla = \Auth::user()->local->id_planilla;

		if(\Session::has('takeTurn.hrs')) {
			$hrs = \Session::get('takeTurn.hrs');
		} else {
			$hrs = \HoraTurno::where('id_planilla', $id_planilla)
				->groupBy('hora_turno_inicio')
				->orderBy('hora_turno_inicio', 'ASC')
				->lists('hora_turno_inicio');
		}

		$count = count($hrs) + 1;

		for ($i = 0; $i < $count; $i++) {
			for ($j = 0; $j < 7; $j++) {
				$matriz[$j][$i] = \HTML::genTurn();
			}
		}

		$matriz[0][0] = "Lunes";
		$matriz[1][0] = "Martes";
		$matriz[2][0] = "Miercoles";
		$matriz[3][0] = "Jueves";
		$matriz[4][0] = "Viernes";
		$matriz[5][0] = "Sabado";
		$matriz[6][0] = "Domingo";

		for ($i = 0; $i < $count; $i++) {
			for ($j = 0; $j < 7; $j++) {
				$turnos = HoraTurno::where('id_planilla', $id_planilla)
					->where('dia_semana', \Str::upper($days[$j]))
					->orderBy('hora_turno_inicio', 'ASC')
					->get();
				foreach ($turnos as $turno) {
					$c = array_search($turno->hora_turno_inicio, $hrs) + 1;
					$matriz[$j][$c] = \HTML::genTurn($turno);
				}
			}
		}

		for ($i = 1; $i < $count; $i++) {
			$html .= '<tr>';
			for ($j = 0; $j < 7; $j++) {
				$html .= $matriz[$j][$i];
			}
			$html .= '</tr>';
		}

		unset($matriz);
	} catch(\Exception $e) {
		$html = '';
		\Log::error($e);
	}

	return $html;
});

\HTML::macro('genHrs', function ($hr = null) {
	if (isset($hr)) {
		$init = date('H:i', strtotime($hr->hora_turno_inicio));
		$fin = date('H:i', strtotime($hr->hora_turno_fin));
		
		$html = '';
		$html .= '<div class="col-xs-12 calendar-day">' . "\n";
		$html .= '<div class="text-center vertical">' . "\n";
		$html .= '<span>' . $init . '&nbsp;' . $fin . '</span>' . "\n";
		$html .= '</div></div>' . "\n";

		unset($init);
		unset($fin);
	} else {
		$html = '';
		$html .= '<div class="col-xs-12 calendar-day">' . "\n";
		$html .= '<div class="text-center vertical">' . "\n";
		$html .= '<span></span>' . "\n";
		$html .= '</div></div>' . "\n";
	}

	return $html;
});

\HTML::macro('genTurn', function ($turn = null) {
	if (!is_null($turn)) {
		$url = url('frontend/takeTurn', $turn->id);
		$init = date('H:i', strtotime($turn->hora_turno_inicio));
		$fin = date('H:i', strtotime($turn->hora_turno_fin));
		
		$html = "<td class='calendar-day'>\n";
		$html .= "<div class='text-center vertical'>\n";
		$html .= "<span>$init&nbsp;$fin</span></br>\n";
		$html .= "<a href='#' class='btn btn-block btn-primary taketurn' style = 'color: #ffffff;' data-url='$url' data-total='$turn->max_empaques' data-left='$turn->max_empaques' data-taken='false'>\n";
		$html .= "Tomar <small class='count'>($turn->max_empaques / $turn->max_empaques)</small></a>\n";
		$html .= "</div><time datetime=''></time>";
		$html .= "</td>\n";

		unset($url);
		unset($init);
		unset($fin);
	} else {
		$html = "<td class='calendar-day'>\n";
		$html .= "<div class='text-center vertical'>\n";
		$html .= "<span></span></br>\n";
		$html .= "</div>\n";
		$html .= "</td>\n";
	}

	return $html;
});

\Str::macro('genUsername', function (Usuario $user = null, $username = '') {
	if (is_null($user)) {
		return;
	}
	
	if ($username == '') {
		$username = \Str::lower(\Str::limit($user->nombre, 3, '') . \Str::limit($user->ape_paterno, 1, ''));
	}
	
	if ($count = \Usuario::where('nombre_usuario', $username)->count()) {
		$username .= \Str::random($length = 1);
		
		return \Str::genUsername($user, $username);
	}
	
	return \Str::lower($username);
});