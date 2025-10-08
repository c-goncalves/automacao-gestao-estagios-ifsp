<?php
require_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../config/paths.php';
$page_title = "Solicitação de Estágio";

$step  = $_GET['step']  ?? 'inicio';
$tipo  = $_GET['tipo']  ?? null;
$curso = $_GET['curso'] ?? null;

$include_file = '';

if ($step === 'inicio') {
    $include_file = __DIR__ . '/cursos/inicio.php';
} elseif ($tipo && $curso && $step) {
    $include_file = __DIR__ . '/cursos/' . $step . '-' . $tipo . '-' . $curso . '.php';
}

if ($include_file && file_exists($include_file)) {
    include $include_file;
} else {
    echo "<div class='msg error'>Etapa não encontrada: " . htmlspecialchars($step) . "</div>";
}

require_once __DIR__ . '/../../includes/footer.php';
?>

