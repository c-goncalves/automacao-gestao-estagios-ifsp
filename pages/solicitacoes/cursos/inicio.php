<section class="intro">
  <h2>Antes de Iniciar o Estágio</h2>
  <p>Confira abaixo os passos, documentos e orientações essenciais antes de iniciar seu estágio. Selecione seu curso ou modalidade para ver os requisitos específicos.</p>
  <p>Caso tenha dúvidas, entre em contato com a Coordenação de Estágios pelo e-mail coord.estagios@ifsp.edu.br</p>

  <section class="info-geral">
    <h3>Informações gerais</h3>
    <ul>
      <li>O <strong>Termo de Compromisso de Estágio</strong> e <strong>Plano de Atividades</strong> devem ser preenchidos e enviados conforme modelos disponibilizados.</li>
      <li>Prazo de análise: até 5 dias úteis após envio completo.</li>
      <li>A CEX não assina documentos com data retroativa.</li>
      <li>O estágio não pode ser iniciado sem assinatura de todas as partes.</li>
      <li>Mantenha-se informado: 
        <a href="<?php echo PAGES_PATH; ?>recursos/" class="<?php echo strpos($current_uri, '/pages/recursos/') !== false ? 'active' : ''; ?>">
          Recursos
        </a>
      </li>
    </ul>
  </section>

  <h3>Selecione o seu curso:</h3>
  <select id="cursoSelect">
    <option value="">Selecione seu curso</option>
    <option value="matematica">Licenciatura em Matemática</option>
    <option value="ads">Tecnologia em Análise e Desenvolvimento de Sistemas</option>
    <option value="automacao">Tecnologia em Automação Industrial</option>
    <option value="engenharia_computacao">Engenharia de Computação</option>
    <option value="engenharia_controle">Engenharia de Controle e Automação</option>
    <option value="nao_obrigatorio">Estágio Não Obrigatório</option>
  </select>

  <div id="informacoesCurso"></div>
</section>

<!-- Modal -->
<div id="cursoModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="modalBody"></div>
  </div>
</div>

<style>
.modal {
  display: none; 
  position: fixed; 
  z-index: 1000; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto;
  background-color: rgba(0,0,0,0.5); 
}
.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  border-radius: 8px;
  width: 90%;
  max-width: 600px;
  position: relative;
}
.close {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 24px;
  cursor: pointer;
}
</style>

<script>
const cursosInfo = {
  matematica: `
    <h3>Licenciatura em Matemática</h3>
    <ul>
      <li>Termo de Compromisso específico para licenciaturas.</li>
      <li>Plano de Atividades específico para licenciaturas.</li>
      <li>Documentos obrigatórios:
        <ul>
          <li><a href="https://gru.ifsp.edu.br/images/CEX/TermoDeCompromissoLicenciaturasEstagioObrigatorio_Abril2025.docx" target="_blank">Termo de Compromisso (docx)</a></li>
          <li><a href="https://gru.ifsp.edu.br/images/CEX/AnexoIV-PlanoDeAtividadesDoEstagiario_MAT_1.doc" target="_blank">Plano de Atividades do Estagiário (docx)</a></li>
        </ul>
      </li>
    </ul>
    <a href="/projeto/pages/solicitacoes/cursos/licenciatura/matematica/termo" class="btn" style="margin-top:10px; display:inline-block;">Iniciar Solicitação</a>
  `,
  ads: `
    <h3>Tecnologia em Análise e Desenvolvimento de Sistemas</h3>
    <ul>
      <li>Documentos obrigatórios: Termo de Compromisso e Plano de Atividades padrão.</li>
      <li>Prazo de análise: até 5 dias úteis.</li>
    </ul>
    <a href="/projeto/pages/solicitacoes/cursos/tecnologia/ads/termo" class="btn" style="margin-top:10px; display:inline-block;">Iniciar Solicitação</a>
  `,
  automacao: `
    <h3>Tecnologia em Automação Industrial</h3>
    <ul>
      <li>Documentos obrigatórios: Termo de Compromisso e Plano de Atividades padrão.</li>
      <li>É necessário apresentar plano de atividades detalhado com supervisão da empresa.</li>
    </ul>
    <a href="/projeto/pages/solicitacoes/cursos/tecnologia/automacao/termo" class="btn" style="margin-top:10px; display:inline-block;">Iniciar Solicitação</a>
  `,
  engenharia_computacao: `
    <h3>Engenharia de Computação</h3>
    <ul>
      <li>Termo de Compromisso e Plano de Atividades padrão.</li>
      <li>Coordenação recomenda envio de cronograma de atividades antes do início do estágio.</li>
    </ul>
    <a href="/projeto/pages/solicitacoes/cursos/engenharia/engenharia_computacao/termo" class="btn" style="margin-top:10px; display:inline-block;">Iniciar Solicitação</a>
  `,
  engenharia_controle: `
    <h3>Engenharia de Controle e Automação</h3>
    <ul>
      <li>Termo de Compromisso e Plano de Atividades padrão.</li>
      <li>Documentação deve ser assinada pela empresa e aluno antes do início do estágio.</li>
    </ul>
    <a href="/projeto/pages/solicitacoes/cursos/engenharia/engenharia_controle/termo" class="btn" style="margin-top:10px; display:inline-block;">Iniciar Solicitação</a>
  `,
  nao_obrigatorio: `
    <h3>Estágio Não Obrigatório (Pago)</h3>
    <ul>
      <li>Estágio remunerado, opcional para o aluno.</li>
      <li>Documentos obrigatórios:
        <ul>
          <li><a href="https://gru.ifsp.edu.br/images/CEX/AnexoI-TermoDeCompromissoDeEstagioNaoObrigatorio_Abril2025.docx" target="_blank">Termo de Compromisso</a></li>
        </ul>
      </li>
      <li>Plano de Atividades deve ser enviado e aprovado antes do início.</li>
    </ul>
    <a href="/projeto/pages/solicitacoes/cursos/nao_obrigatorio/termo" class="btn" style="margin-top:10px; display:inline-block;">Iniciar Solicitação</a>
  `
};


const select = document.getElementById('cursoSelect');
const modal = document.getElementById('cursoModal');
const modalBody = document.getElementById('modalBody');
const closeBtn = document.querySelector('.modal .close');

select.addEventListener('change', () => {
  const valor = select.value;
  if (valor && cursosInfo[valor]) {
    modalBody.innerHTML = cursosInfo[valor];
    modal.style.display = 'block';
  }
});

closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});
</script>
