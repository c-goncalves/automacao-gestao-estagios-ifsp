<?php
require_once __DIR__ . '/../config/paths.php';
$current_uri = $_SERVER['REQUEST_URI'];
?>

<nav class="nav-links" aria-label="Navegação principal">
   <a href="<?php echo BASE_URL; ?>"
      class="<?php echo $current_uri === BASE_URL . 'index.php' ? 'active' : ''; ?>">
      Início
   </a>

   <a href="<?php echo PAGES_PATH; ?>solicitacoes/"
      class="<?php echo strpos($current_uri, '/pages/solicitacoes/') !== false ? 'active' : ''; ?>">
      Solicitação
   </a>

   <a href="<?php echo PAGES_PATH; ?>andamento/"
      class="<?php echo strpos($current_uri, '/pages/andamento/') !== false ? 'active' : ''; ?>"
      aria-disabled="true" role="button">
      Acompanhamento
   </a>

   <a href="<?php echo PAGES_PATH; ?>encerramento/"
      class="<?php echo strpos($current_uri, '/pages/encerramento/') !== false ? 'active' : ''; ?>">
      Finalização
   </a>

   <a href="<?php echo PAGES_PATH; ?>recursos/"
      class="<?php echo strpos($current_uri, '/pages/recursos/') !== false ? 'active' : ''; ?>">
      Recursos
   </a>

   <a href="#<?php //echo PAGES_PATH; ?>noticias/"
      class="<?php echo strpos($current_uri, '/pages/noticias/') !== false ? 'active' : ''; ?>">
      Notícias
   </a>
</nav>
