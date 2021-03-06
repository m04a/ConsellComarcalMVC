<?php

function ctrlMostrarTramits($peticio, $resposta, $contenidor)
{
    $articlesPDO = $contenidor->articlesPDO();
    $usuarisPDO = $contenidor->usuarisPDO();

    $usuarilogat2 = $peticio->get(INPUT_COOKIE, "usuarilogat");

    $usuarilogat = trim(filter_var($usuarilogat2, FILTER_SANITIZE_STRING));

    $articlesPortadaTramits = $articlesPDO->getllistatPortadaTramits(0);

    $articlesFavoritsTots = $articlesPDO->getllistatTotsFavorits();

    $dadesUsuari = $usuarisPDO->get($usuarilogat);

    $resposta->set("articlesPortadaTramits", $articlesPortadaTramits);
    $resposta->set("articlesFavoritsTots", $articlesFavoritsTots);
    $resposta->set("dadesUsuari", $dadesUsuari);

    $resposta->SetTemplate("mostrarTramits.php");

    return $resposta;
}
