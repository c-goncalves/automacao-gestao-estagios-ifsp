<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
if (strpos($_SERVER['REQUEST_URI'], '/pages/') !== false) {
    $base_path = '../'; 
    $pages_path = ''; 
} else {
    $base_path = './'; 
    $pages_path = 'pages/'; 
}

?>
<nav class="nav-links" aria-label="Navegação principal">
  
    <a href="<?php echo $base_path; ?>index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Início</a>
     <a href="<?php echo $base_path; ?>pages/antes.php" 
       class="<?php echo $current_page == 'antes.php' ? 'active' : ''; ?>">
      Solicitação
    </a>  
    <a href="<?php echo $base_path; ?>pages/atualizacao.php" 
       class="<?php echo $current_page == 'atualizacao.php' ? 'active' : ''; ?>" aria-disabled="true" role="button">
      Acompanhamento
    </a>  
    <a href="<?php echo $base_path; ?>pages/finalizacao.php" 
       class="<?php echo $current_page == 'finalizacao.php' ? 'active' : ''; ?>">
      Finalização
    </a> 
    
</nav>