<?php
$page_title = "Início - Coordenação de Estágios";
require_once BASE_PATH . '/includes/header.php';
?>

<section class="bg-white py-1 px-6 rounded-xl  flex flex-col md:flex-row items-start justify-between gap-4">
  <div class="flex-1">
    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Bem-vindo(a) ao Sistema de Gestão de Estágios (SGE)</h2>
    <p class="text-gray-700">Solicite e acompanhe a documentação do seu Estágio Obrigatório dos cursos da IFSP Campus Guarulhos</p>
  </div>
  <div class="flex-shrink-0">
    <a href="<?php echo BASE_URL; ?>solicitacoes/"
       class="inline-block bg-[#006633] text-white font-bold px-6 py-2 rounded hover:bg-[#004d26] transition-colors">
       Iniciar Solicitação
    </a>
  </div>
</section>

<div class="mt-2 grid grid-cols-1 lg:grid-cols-3 gap-6">
  <!-- Conteúdo principal -->
  <section class="lg:col-span-2 bg-white p-6 rounded-xl shadow-md border-l-4 border-[#006633] bg-green-50 p-4 rounded" id="content-area">
    <h3 class="text-xl font-semibold text-[#006633] mb-4">Estágio no IF</h3>
    <p class="text-gray-700 text-sm mb-4">
      <strong>Art. 1o Estágio é ato educativo escolar supervisionado</strong>, desenvolvido no ambiente de trabalho, que visa à preparação para o trabalho produtivo de educandos que estejam frequentando o ensino regular em instituições de educação superior, de educação profissional, de ensino médio, da educação especial e dos anos finais do ensino fundamental, na modalidade profissional da educação de jovens e adultos.
    </p>

    <hr class="my-5 border-gray-300">

    <h4 class="text-[#006633] font-semibold mb-3">Guia Rápido:</h4>

    <div class="flex flex-col gap-4">
      <!-- Card 1 -->
      <div class="border-l-4 border-[#006633] bg-green-50 p-4 rounded">
        <a href="<?php echo BASE_URL; ?>solicitacoes"
           class="font-semibold text-[#09332a] hover:underline block mb-1">
          Você vai <strong>iniciar um estágio</strong>?
        </a>
        <p class="text-sm text-gray-700">Inicie a sua solicitação aqui.</p>
      </div>

      <!-- Card 2 -->
      <div class="border-l-4 border-[#006633] bg-green-50 p-4 rounded">
        <a href="<?php echo BASE_URL; ?>" class="font-semibold text-[#09332a] hover:underline block mb-1">
          Você já <strong>está estagiando</strong>?
        </a>
        <p class="text-sm text-gray-700">Verifique se não possui pendências de relatórios periódicos e solicite termos aditivos, se necessário.</p>
      </div>

      <!-- Card 3 -->
      <div class="border-l-4 border-[#006633] bg-green-50 p-4 rounded">
        <a href="<?php echo BASE_URL; ?>" class="font-semibold text-[#09332a] hover:underline block mb-1">
          Você precisa <strong>encerrar um estágio</strong>?
        </a>
        <p class="text-sm text-gray-700">Verifique o que é necessário para a finalização e avaliação do estágio.</p>
      </div>
    </div>
  </section>

  <!-- Sidebar / Recursos -->
  <aside class="bg-white p-6 shadow-md border-l-4 border-[#006633] bg-green-50 p-4 rounded">
    <h4 class="text-[#006633] font-semibold mb-3">Recursos e Documentos</h4>

    <ul class="space-y-2">
      <li><a href="#<?php echo BASE_URL; ?>" class="text-sm text-gray-700 hover:underline">Modelos de Documentos</a></li>
      <li><a href="#<?php echo BASE_URL; ?>" class="text-sm text-gray-700 hover:underline">Normas e Regulamentos</a></li>
      <li><a href="#<?php echo BASE_URL;?>" class="text-sm text-gray-700 hover:underline">Dúvidas Frequentes</a></li>
    </ul>

    <div class="mt-4">
      <a href="<?php echo BASE_URL; ?>/pages/recursos/" class="text-[#006633] font-semibold hover:underline">
        + Recursos
      </a>
    </div>
  </aside>
</div>

<?php 
require_once BASE_PATH . '/includes/footer.php';
?>
