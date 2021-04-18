<?php


require __DIR__ . "/header.php";


if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'home';
}


switch ($pagina) {
    case 'cadastro_paciente':
        include __DIR__ . "/paginas/paciente/Cadastro_Paciente_View.php";
        break;
    case 'home':
        require __DIR__ . "/paginas/inicio.php";
        break;
    case 'cadastro_medico':
        require __DIR__ . "/paginas/medico/cadastro_medico_view.php";
        break;
    case 'paciente':
        require __DIR__ . "/paginas/paciente/paciente_view.php";
        break;
    case 'medico':
        require __DIR__ . "/paginas/medico/medico_view.php";
        break;
}

require __DIR__ . "/footer.php";