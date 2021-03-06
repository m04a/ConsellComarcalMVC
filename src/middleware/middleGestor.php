<?php

/**
 * Middelware que gestiona el rol d'administrador i de gestor
 *
 * @param  petitcio $peticio
 * @param  resposta $resposta
 * @param  funcio   $next     ha de ser el controlador
 * @param  array    $config   paràmetres de configuració
 *                            de l'aplicació
 * @return result
 */
function middleGestor($peticio, $resposta, $contenidor, $next)
{
    $usuarisPDO = $contenidor->usuarisPDO();

    $usuarilogat2 = $peticio->get(INPUT_COOKIE, "usuarilogat");
    $logat2 = $peticio->get("SESSION", "logat");

    $usuarilogat = trim(filter_var($usuarilogat2, FILTER_SANITIZE_STRING));
    $logat = filter_var($logat2, FILTER_VALIDATE_BOOLEAN);

    $dadesUsuariLogat = $usuarisPDO->get($usuarilogat);

    // si l'usuari està logat permetem carregar el recurs
    if ($dadesUsuariLogat["rol"] === "Administrador" || $dadesUsuariLogat["rol"] === "Gestor") {
        $resposta = nextMiddleware($peticio, $resposta, $contenidor, $next);
    } else {
        $resposta->redirect("location: index.php");
    }
    return $resposta;
}
