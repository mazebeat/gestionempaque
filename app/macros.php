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

HTML::macro('calendar', function ($turns) {
	
	$html = '';
	foreach ($turns as $turn) {
		$html .= '<div class="row">';
		
		for ($i = 0; $i < 7; $i++) {
			$init = date('H:i', strtotime($turn->hora_turno_inicio));
			$fin  = date('H:i', strtotime($turn->hora_turno_fin));
			$html .= '<div class="col-xs-12 calendar-day">';
			$html .= '<div class="text-center vertical">';
			$html .= '<span>' . $init . '&nbsp;' . $fin . '</span></br>';
			$html .= '<a href="#" class="btn btn-block btn-primary taketurn" 
                                    style="color: #ffffff;"
                                    data-url="' . URL::to('frontend/takeTurn', $turn->id) . '"
                                    data-total="' . $turn->max_empaques . '"
                                    data-left="' . $turn->max_empaques . '"
                                    data-taken="false">';
			$html .= 'Tomar <small class="count">(' . $turn->max_empaques . '/' . $turn->max_empaques . ')</small></a>';
			$html .= '</div><time datetime=""></time></div>';
		}
		$html .= '</div>';
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