<?php
/**
 * Language file for auth error messages
 *
 */

return array(

	'account_already_exists' => 'Ya existe una cuenta con este e-mail.',
	'account_not_found'      => 'Usuario o contraseña incorrectos.',
	'account_not_activated'  => 'Este usuario aún no ha sido activado.',
	'account_suspended'      => 'Cuenta suspendida por fallar varias verces su inicio. Intentelo más tarde.',
	'account_banned'         => 'Este usuario ha sido bloqueado.',

	'signin' => array(
		'error'   => 'Ha ocurrido un problema mientras ingresabas, por favor intentalo nuevamente.',
		'success' => 'Ha iniciado sesión correctamente.',
	),

	'signup' => array(
		'error'   => 'Ha ocurrido un problema mientras creabamos tú cuenta, por favor intentalo nuevamente.',
		'success' => 'Account sucessfully created.',
	),

	'forgot-password' => array(
		'error'   => 'Ha ocurrido un problema mientras obteniamos tu codigo de reseteo, por favor intentalo nuevamente.',
		'success' => 'Password recovery email successfully sent.',
	),

	'forgot-password-confirm' => array(
		'error'   => 'Ha ocurrido un problema mientras reseteamos tú contraseña, por favor intentalo nuevamente.',
		'success' => 'Your password has been successfully reset.',
	),

	'activate' => array(
		'error'   => 'Ha ocurrido un problema mientras activabamos tú cuenta, por favor intentalo nuevamente.',
		'success' => 'Your account has been successfully activated.',
	),

);
