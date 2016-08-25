<?php

// macros.php
\Form::macro("chosen", function ($name, $defaults = array(), $selected = null, $options = array()) {
	
	// For empty Input::old($name) session, $selected is an empty string

//	if(!$selected) $selected = array();
	
	$opts       = array(
		'class' => '',
		'id'    => $name,
		'name'  => $name,
	);
	$options    = array_merge($opts, $options);
	$attributes = \HTML::attributes($options);
	
	// need an empty array to send if all values are unselected
	// $ret = '<input type="hidden" name="' . HTML::entities($name) . '">';
	$ret = '<select ' . $attributes . '>';
	$ret .= '<option value=""></option>';
	
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

HTML::macro('calendar', function () {

	$days = JoshController::$days2;
	$html = '';

//	$turnos = HoraTurno::where('dia_semana', Str::upper($days[$i]))->orderBy('hora_turno_inicio', 'ASC')->get();

//	for ($i = 0; $i < 7; $i++) {
//		$matriz[0][$i] = Str::upper($days[$i]);
//		$turnos         = HoraTurno::where('dia_semana', Str::upper($days[$i]))->orderBy('hora_turno_inicio',
//			'ASC')->get();
//		dd($turnos);
//		for ($j = 0; $j < count($turnos); $i++) {
//			$matriz[$j][$i] = $turnos[$j];
//		}
//	}
//	dd(count($matriz));
//	for ($i = 0; $i < 7; $i++) {
//
//		for ($j = 0; $j < count($matriz[$i]); $i++) {
//			$html .= $matriz[$j][$i];
//		}
//		$html .= '</br>';
//	}

//	foreach ($turns as $turn) {
//		$html .= '<div class="row">';
//		for ($i = 0; $i < 7; $i++) {
//			$week[][] = "";
//			$init     = date('H:i', strtotime($turn->hora_turno_inicio));
//			$fin      = date('H:i', strtotime($turn->hora_turno_fin));
//			$html .= '<div class="col-xs-12 calendar-day">';
//			$html .= '<div class="text-center vertical">';
//			$html .= '<span>' . $init . '&nbsp;' . $fin . '</span></br>';
//			$html .= '<a href="#" class="btn btn-block btn-primary taketurn"
//                                    style="color: #ffffff;"
//                                    data-url="' . URL::to('frontend/takeTurn', $turn->id) . '"
//                                    data-total="' . $turn->max_empaques . '"
//                                    data-left="' . $turn->max_empaques . '"
//                                    data-taken="false">';
//			$html .= 'Tomar <small class="count">(' . $turn->max_empaques . '/' . $turn->max_empaques . ')</small></a>';
//			$html .= '</div><time datetime=""></time></div>';
//		}
//		$html .= '</div>';
//}

	$hrs = HoraTurno::where('id_planilla', 1)
		->groupBy('hora_turno_inicio')
		->orderBy('hora_turno_inicio', 'ASC')
		->lists('hora_turno_inicio');

//	dd($hrs);
	$count = count($hrs) + 1;

//	for ($j = 0; $j < 7; $j++) {
//		if ($j == 0) {
//			$matriz[$j][0] = $hrs[$j];
//		} else {
//			$matriz[$j][0] = "0";
//		}
//	}


	for ($i = 0; $i < $count; $i++) {
		for ($j = 0; $j < 7; $j++) {
			$matriz[$j][$i] = HTML::genTurn();
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
			$turnos = HoraTurno::where('id_planilla', 1)
				->where('dia_semana', Str::upper($days[$j]))
				->orderBy('hora_turno_inicio', 'ASC')
				->get();
			foreach ($turnos as $turno) {
				$c = array_search($turno->hora_turno_inicio, $hrs) + 1;
				$matriz[$j][$c] = HTML::genTurn($turno);
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

	return $html;
});

HTML::macro('genHrs', function ($hr = null) {
	if (isset($hr)) {
		$init = date('H:i', strtotime($hr->hora_turno_inicio));
		$fin = date('H:i', strtotime($hr->hora_turno_fin));
		$html = '';
		$html .= '<div class="col-xs-12 calendar-day">' . "\n";
		$html .= '<div class="text-center vertical">' . "\n";
		$html .= '<span>' . $init . '&nbsp;' . $fin . '</span>' . "\n";
		$html .= '</div></div>' . "\n";
	} else {
		$html = '';
		$html .= '<div class="col-xs-12 calendar-day">' . "\n";
		$html .= '<div class="text-center vertical">' . "\n";
		$html .= '<span></span>' . "\n";
		$html .= '</div></div>' . "\n";
	}

	return $html;
});

HTML::macro('genTurn', function ($turn = null) {
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
	
	if ($count = Usuario::where('nombre_usuario', $username)->count()) {
		$username .= \Str::random($length = 1);
		
		return \Str::genUsername($user, $username);
	}
	
	return \Str::lower($username);
});