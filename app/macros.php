<?php

// macros.php
\Form::macro("chosen", function ($name, $defaults = array(), $selected = null, $options = array()) {

    // For empty Input::old($name) session, $selected is an empty string

//	if(!$selected) $selected = array();

    $opts = array(
        'class' => '',
        'id' => $name,
        'name' => $name
    );
    $options = array_merge($opts, $options);
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

\Str::macro('genUsername', function (Usuario $user = null, $username = '') {
    if (is_null($user)) {
        return;
    }

    if ($username == '') {
        $username = \Str::limit($user->nombre, 3) . \Str::limit($user->ape_paterno, 1);
    }

    if (Usuario::where('nombre_usuario', $username)->count()) {
        $username .= \Str::random($length = 1);

        return \Str::genUsername($user, $username);
    }

    return $username;
});