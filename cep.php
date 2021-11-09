<?php
function cep($value)
{
    if (preg_match('/^[0-9]{2}[0-9]{3}-[0-9]{3}$/', $value)) {
        return true;
    }
    return false;
}
?>