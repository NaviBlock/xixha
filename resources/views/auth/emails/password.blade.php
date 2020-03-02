<?php/*
|--------------------------------------------------------------------------
| Vista para recuperar el password
|--------------------------------------------------------------------------
| En esta vista se pasamos por el guardias la vista de password/reset, un token  
| para restablecer password y el email para la autentificación del usuario.
*/?>
Click here to reset your password: <a
    href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">
    {{ $link }} </a>