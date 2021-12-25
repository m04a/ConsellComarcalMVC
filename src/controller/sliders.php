<?php

function ctrlSliders($peticio, $resposta, $contenidor)
{
    $slidersPDO = $contenidor->slidersPDO();

    $dadesliders = $slidersPDO->getllistat();

    $comprobacioFitxerExisteix = false;

    if(file_exists($dadesliders['imatge']))
    { 
        $comprobacioFitxerExisteix = true;
    }

    $resposta->set('comprobacioFitxerExisteix', $comprobacioFitxerExisteix);

    $resposta->set('dadesliders', $dadesliders);

    $resposta->SetTemplate("sliders.php");

    return $resposta;
}
