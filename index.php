<?php
$page_title = "Início - Coordenação de Estágios";
require_once __DIR__ . '/includes/header.php'; 
?>

<section class="hero">
  <div class="title">
    <h2>Bem-vindo(a) ao Sistema de Gestão de Estágios (SGE)</h2>
    <p>Solicite e acompanhe a documentação do seu Estágio Obrigatório dos cursos da IFSP Campus Guarulhos</p>
  </div>
  <div>
    <a href="<?php echo PAGES_PATH; ?>solicitacoes/"
      class="<?php echo strpos($current_uri, '/pages/solicitacoes/') !== false ? 'active' : ''; ?> btn">
      Iniciar Solicitação
   </a>
    
  </div>
</section>

<div class="grid">
  <section class="card" id="content-area">
    <h3>Estágio no IF</h3>
    <div style="margin-top: 15px;">
        <p class="muted small" style="margin-top:0;">
            <strong>Art. 1o Estágio é ato educativo escolar supervisionado</strong>, desenvolvido no ambiente de trabalho, que visa à preparação para o trabalho produtivo de educandos que estejam frequentando o ensino regular em instituições de educação superior, de educação profissional, de ensino médio, da educação especial e dos anos finais do ensino fundamental, na modalidade profissional da educação de jovens e adultos.
        </p>
    </div>

    <hr style="margin: 20px 0;">

    <h4 style="color: var(--verde-escuro); margin-bottom: 12px;">Guia Rápido:</h4>
    
    <div style="display: flex; flex-direction: column; gap: 15px;">
     
        <div class="card" style="border-left: 4px solid var(--verde-ifsp); padding: 15px;">
            <a href="<?php echo PAGES_PATH; ?>solicitacoes/"
                class="<?php echo strpos($current_uri, '/pages/solicitacoes/') !== false ? 'active' : ''; ?>" style="font-weight: 700; color: var(--verde-escuro); text-decoration: none;">
                 Você vai <strong>iniciar um estágio</strong>?
            </a>
            <p class="small" style="margin: 5px 0 0 0;">Inicie a sua solicitação aqui.</p>
        </div>

        <div class="card" style="border-left: 4px solid var(--verde-ifsp); padding: 15px;">
            <a href="#<?php //echo BASE_URL; pages/atualizacao.php ?>" style="font-weight: 700; color: var(--verde-escuro); text-decoration: none;">
                Você já <strong>está estagiando</strong>?
            </a>
            <p class="small" style="margin: 5px 0 0 0;">Verifique se não possui pendências de relatórios periódicos e solicite termos aditivos, se necessário.</p>
        </div>

        <div class="card" style="border-left: 4px solid var(--verde-ifsp); padding: 15px;">
            <a href="#<?php // echo BASE_URL; pages/finalizacao.php?>" style="font-weight: 700; color: var(--verde-escuro); text-decoration: none;">
                Você precisa <strong>encerrar um estágio</strong>?
            </a>
            <p class="small" style="margin: 5px 0 0 0;">Verifique o que é necessário para a finalização e avaliação do estágio.</p>
        </div>
    </div>
    
  </section>


  <aside class="card">
    <h4>Recursos e Documentos</h4>
    
    <ul style="list-style: none; padding: 0; margin: 0;">
      <li><a href="#<?php //echo BASE_URL; pages/recursos/modelos.php ?>" class="small">Modelos de Documentos</a></li>
      <li><a href="#<?php //echo BASE_URL; pages/recursos/normas.php ?>" class="small">Normas e Regulamentos</a></li>
      <li><a href="#<?php //echo BASE_URL; pages/recursos/faq.php ?>" class="small">Dúvidas Frequentes</a></li>
    </ul>

    <div style="margin-top: 10px;">
      <a href="<?php echo BASE_URL; ?>pages/recursos/" >
        + Recursos
      </a>
    </div>
  </aside>

</div>

<?php 
include __DIR__ . '/includes/footer.php';
?>

