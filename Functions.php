<?php

function sim_nao($valor)
{
    return isset($valor) ? "SIM" : "não";

}

function executarQuery($connection, $query)
{
    mysqli_query($connection,$query);
}
