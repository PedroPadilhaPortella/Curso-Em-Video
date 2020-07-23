<?php

interface Publicacao {

    public function abrir ();

    public function fechar ();

    public function folhear ($pg);

    public function avancarPagina ();

    public function voltarPagina ();
}
?>