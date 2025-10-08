<?php
$page_title = "Início - Coordenação de Estágios";
include 'includes/header.php'; 
?>

    
    <section class="hero">
      <div class="title">
        <h2>Bem-vindo(a) ao Sistema de Gestão de Estágios (SGE)</h2>
        <p>Solicite e acompanhe a documentação do seu Estágio Obrigatório dos cursos da IFSP Campus Guarulhos</p>
      </div>
      <div>
        <a class="btn" href="pages/antes.php">Iniciar Solicitação</a>
      </div>
    </section>

    <!-- GRID COM FORMULÁRIOS + SIDEBAR -->
<div class="grid">
  <section class="card" id="content-area">
    
    <!-- NOVO HUB DE REGRAS E FLUXO -->
    <h3>Estágio no IFSP</h3>
    <div style="margin-top: 15px;">
        <p class="muted small" style="margin-top:0;">
            <strong>Art. 1o Estágio é ato educativo escolar supervisionado</strong>, desenvolvido no ambiente de trabalho, que visa à preparação para o trabalho produtivo de educandos que estejam freqüentando o ensino regular em instituições de educação superior, de educação profissional, de ensino médio, da educação especial e dos anos finais do ensino fundamental, na modalidade profissional da educação de jovens e adultos.
        </p>
    </div>

    <hr style="margin: 20px 0;">


    <h4 style="color: var(--verde-escuro); margin-bottom: 12px;">Guia Rápido:</h4>
    
    <div style="display: flex; flex-direction: column; gap: 15px;">
        <div class="card" style="border-left: 4px solid var(--verde-ifsp); padding: 15px;">
            <a href="<?php echo $base_path; ?>pages/antes.php" style="font-weight: 700; color: var(--verde-escuro); text-decoration: none;">
                Você vai <strong>iniciar um estágio</strong>?

            </a>
            <p class="small" style="margin: 5px 0 0 0;">Inicie a sua solicitação aqui.</p>
        </div>

        <div class="card" style="border-left: 4px solid var(--verde-ifsp); padding: 15px;">
            <a href="<?php echo $base_path; ?>pages/durante.php" style="font-weight: 700; color: var(--verde-escuro); text-decoration: none;">
                Você já <strong>está estagiando</strong>?
            </a>
            <p class="small" style="margin: 5px 0 0 0;">Verifique se não possui pendências de relatórios periódicos e solicite termos aditivos, se necessário.</p>
        </div>

        <div class="card" style="border-left: 4px solid var(--verde-ifsp); padding: 15px;">
            <a href="<?php echo $base_path; ?>pages/encerrando.php" style="font-weight: 700; color: var(--verde-escuro); text-decoration: none;">
                Você precisa <strong>encerrar um estágio</strong>?
            </a>
            <p class="small" style="margin: 5px 0 0 0;">Verifique o que é necessário para a finalização e avaliação do estágio.</p>
        </div>
    </div>
    
  </section>

    <!-- <div class="grid">
      <section class="card" id="content-area">
        <h3>Avisos Importantes</h3>
        <p class="muted">
          Lembre-se de sempre consultar o <a href="#">Regulamento de Estágio</a> antes de iniciar qualquer procedimento.
        </p>
    <p class="muted">
      "Art. 1o Estágio é ato educativo escolar supervisionado, desenvolvido no ambiente de trabalho, que visa à preparação para o trabalho produtivo de educandos que estejam freqüentando o ensino regular em instituições de educação superior, de educação profissional, de ensino médio, da educação especial e dos anos finais do ensino fundamental, na modalidade profissional da educação de jovens e adultos".
    </p>

        
        <h4 style="margin-top:20px; color:var(--verde-ifsp);">Guia Rápido</h4>
        <ul style="list-style-type: disc; margin-left: 20px; font-size:15px;">
            <li><a href="pages/antes.php">Regulamentação</a></li>
            <li><a href="pages/antes.php">Solicitação de Estágio</a></li>
            <li><a href="pages/durante.php">Relatórios de Acompanhamento</a></li>
        </ul>
      </section> -->

      
      <aside class="card">
       <?php include 'includes/recursos.php'; ?>
    </aside>
    </div>

<?php
include 'includes/footer.php'; 
?>
