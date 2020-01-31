<?php 

function trataNome ($nomecompleto) {
     $nomecompleto = strtolower($nomecompleto);
    $nomecompleto = ucwords($nomecompleto);
    
    return $nomecompleto;
}


?>