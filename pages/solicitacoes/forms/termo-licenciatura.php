<?php
require_once __DIR__ . '/../../../includes/header.php';
$page_title = "Solicitação de Estágio Curricular - Licenciatura em Matemática";
$feedback = $feedback ?? '';
?>

<div class="flex justify-center mt-4 px-4">
  <section id="content-area" class="bg-white border-l-4 border-[#006633] p-6 rounded-xl shadow w-full">
    
    <h3 class="text-green-800 text-xl font-semibold mb-4">Termo de Compromisso de Estágio - Licenciatura em Matemática</h3>

    <!-- Steps Nav -->
    <div id="stepsNav" class="flex justify-between mb-6 hidden">
        <a href="#" class="step text-sm font-medium text-gray-500 px-3 py-1 rounded transition-colors" data-step="1">Estagiário</a>
        <a href="#" class="step text-sm font-medium text-gray-500 px-3 py-1 rounded transition-colors" data-step="2">Unidade Concedente</a>
        <a href="#" class="step text-sm font-medium text-gray-500 px-3 py-1 rounded transition-colors" data-step="3">Supervisor</a>
        <a href="#" class="step text-sm font-medium text-gray-500 px-3 py-1 rounded transition-colors" data-step="4">Estágio</a>
        <a href="#" class="step text-sm font-medium text-gray-500 px-3 py-1 rounded transition-colors" data-step="5">Anexos</a>
    </div>

    <form id="termoForm" action="<?php echo BASE_URL; ?>pages/solicitacoes/scripts/salvar_solicitacao.php" method="POST" enctype="multipart/form-data">

        <!-- Step 0: Orientações Essenciais -->
        <fieldset data-step="0" class="mb-4">
            <div>
                <h5 class="text-[#09332a] font-semibold mb-2 text-sm">ATENÇÃO AOS PONTOS CRUCIAIS:</h5>
                <ul class="list-none space-y-1 text-sm text-gray-700 text-left">
                    <li class="flex items-start gap-2">
                        <span class="text-[#006633] mt-0.5">➤</span>
                        Preenchimento: Preencha todos os campos com calma para não haver divergências de informação.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#006633] mt-0.5">➤</span>
                        Documentação: O Termo de Compromisso poderá ter várias páginas e deverá conter a numeração e a rubrica de todas as partes nas páginas anteriores à assinatura final.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#006633] mt-0.5">➤</span>
                        Carga Horária Máxima (Cláusula VII): O estágio <strong>não pode</strong> ultrapassar <strong>06 horas diárias</strong> e <strong>30 horas semanais</strong>, nem coincidir com o horário das aulas.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#006633] mt-0.5">➤</span>
                        Carga Horária Cumulativa: Se você já tiver outro estágio, a carga horária máxima deve ser respeitada de forma cumulativa.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#006633] mt-0.5">➤</span>
                        O estágio não pode ser iniciado sem assinatura de todas as partes.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#006633] mt-0.5">➤</span>
                        Mantenha-se informado: 
                        <a href="<?php echo PAGES_PATH; ?>recursos/" class="text-[#007a4d] underline <?php echo strpos($current_uri, '/pages/recursos/') !== false ? 'font-bold' : ''; ?>">
                          Recursos
                        </a>
                    </li>
                </ul>

                <div class="mt-3 p-3 rounded bg-red-50 text-red-700 border-l-4 border-red-500">
                    <strong>IMPORTANTE:</strong> Seu estágio só poderá ser iniciado se o Termo de Compromisso e Plano de Atividades forem devidamente preenchidos e assinados pela empresa, orientador de estágio e a direção do campus.
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <button type="button" class="bg-[#006633] text-white font-bold px-4 py-2 rounded hover:bg-[#004d26]" data-next>Li e Continuar</button>
            </div>
        </fieldset>

        <!-- Step 1: Dados do Estagiário -->
        <fieldset data-step="1" class="mb-4 hidden">
            <h4 class="text-[#006633] font-semibold mb-4">Dados do Estagiário</h4>
             <div>
                <div class="mb-3">
                <label class="font-medium text-sm" for="nome">Nome Completo</label>
                <input type="text" id="nome" class="w-full p-2 border rounded">
                </div>
                <div class="mb-3">
                <label class="font-medium text-sm" for="email">E-mail</label>
                <input type="email" id="email" class="w-full p-2 border rounded">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div>
                    <label for="nome" class="font-medium text-sm">Nome Completo</label>
                    <input type="text" id="nome" class="w-full p-2 border rounded">
                </div>
                <div>
                    <label for="email" class="font-medium text-sm">E-mail</label>
                    <input type="email" id="email" class="w-full p-2 border rounded">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                <div>
                    <label for="curso" class="font-medium text-sm">Curso</label>
                    <select id="curso" class="w-full p-2 border rounded">
                        <option>Selecione seu curso</option>
                        <option>Licenciatura em Matemática</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-between mt-4">
                <button type="button" class="bg-gray-100 text-[#006633] font-bold px-4 py-2 rounded hover:bg-gray-200" data-prev>Anterior</button>
                <button type="button" class="bg-[#006633] text-white font-bold px-4 py-2 rounded hover:bg-[#004d26]" data-next>Continuar</button>
            </div>
        </fieldset>

        <!-- Step 2: Dados da Unidade Concedente -->
        <fieldset data-step="2" class="mb-4 hidden">
            <h4 class="text-[#006633] font-semibold mb-4">Dados da Unidade Concedente (Escola)</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="md:col-span-2">
                            <label for="unidade_nome" class="font-semibold text-sm">Nome da Escola/Empresa <span class="text-red-500">*</span></label>
                            <input id="unidade_nome" name="unidade_nome" type="text" required class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_diretoria" class="font-semibold text-sm">Diretoria de Ensino</label>
                            <input id="unidade_diretoria" name="unidade_diretoria" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_cnpj" class="font-semibold text-sm">CNPJ (Opcional, se for escola particular)</label>
                            <input id="unidade_cnpj" name="unidade_cnpj" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                        <div class="md:col-span-2">
                            <label for="unidade_endereco" class="font-semibold text-sm">Endereço (Rua e Número)</label>
                            <input id="unidade_endereco" name="unidade_endereco" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_cep" class="font-semibold text-sm">CEP</label>
                            <input id="unidade_cep" name="unidade_cep" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_bairro" class="font-semibold text-sm">Bairro</label>
                            <input id="unidade_bairro" name="unidade_bairro" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_cidade" class="font-semibold text-sm">Cidade</label>
                            <input id="unidade_cidade" name="unidade_cidade" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_estado" class="font-semibold text-sm">Estado</label>
                            <input id="unidade_estado" name="unidade_estado" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                        <div>
                            <label for="unidade_diretor" class="font-semibold text-sm">Diretor(a)</label>
                            <input id="unidade_diretor" name="unidade_diretor" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="unidade_telefone" class="font-semibold text-sm">Telefone</label>
                            <input id="unidade_telefone" name="unidade_telefone" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                    </div>
            <div class="flex justify-between mt-4">
                <button type="button" class="bg-gray-100 text-[#006633] font-bold px-4 py-2 rounded hover:bg-gray-200" data-prev>Anterior</button>
                <button type="button" class="bg-[#006633] text-white font-bold px-4 py-2 rounded hover:bg-[#004d26]" data-next>Continuar</button>
            </div>
        </fieldset>

        <!-- Step 3: Supervisor -->
        <fieldset data-step="3" class="mb-4 hidden">
            <h4 class="text-[#006633] font-semibold mb-4">Dados do Supervisor de Estágio</h4>
             <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label for="supervisor_nome" class="font-semibold text-sm">Nome completo <span class="text-red-500">*</span></label>
                            <input id="supervisor_nome" name="supervisor_nome" type="text" required class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="supervisor_cpf" class="font-semibold text-sm">CPF <span class="text-red-500">*</span></label>
                            <input id="supervisor_cpf" name="supervisor_cpf" type="text" required class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                        <div>
                            <label for="supervisor_cargo" class="font-semibold text-sm">Cargo</label>
                            <input id="supervisor_cargo" name="supervisor_cargo" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="supervisor_formacao" class="font-semibold text-sm">Formação Acadêmica</label>
                            <input id="supervisor_formacao" name="supervisor_formacao" type="text" class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="supervisor_email" class="font-semibold text-sm">E-mail</label>
                        <input id="supervisor_email" name="supervisor_email" type="email" class="w-full border rounded px-3 py-2 text-sm"/>
                    </div>
            <div class="flex justify-between mt-4">
                <button type="button" class="bg-gray-100 text-[#006633] font-bold px-4 py-2 rounded hover:bg-gray-200" data-prev>Anterior</button>
                <button type="button" class="bg-[#006633] text-white font-bold px-4 py-2 rounded hover:bg-[#004d26]" data-next>Continuar</button>
            </div>
        </fieldset>

        <!-- Step 4: Período e Atividades -->
        <fieldset data-step="4" class="mb-4 hidden">
            <h4 class="text-[#006633] font-semibold mb-3">Período e Atividades do Estágio</h4>
           <div class="p-3 rounded border-l-4 border-red-500 bg-red-50 text-red-700 mb-3">
                        <strong>ATENÇÃO:</strong> Garanta que a carga horária <strong>NÃO EXCEDA 6 horas diárias / 30 horas semanais</strong> e não conflite com o horário de aulas.
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label for="estagio_inicio" class="font-semibold text-sm">Data Início <span class="text-red-500">*</span></label>
                            <input id="estagio_inicio" name="estagio_inicio" type="date" required class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                        <div>
                            <label for="estagio_fim" class="font-semibold text-sm">Data Término <span class="text-red-500">*</span></label>
                            <input id="estagio_fim" name="estagio_fim" type="date" required class="w-full border rounded px-3 py-2 text-sm"/>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="estagio_horario" class="font-semibold text-sm">Dias da Semana e Horários de Cumprimento <span class="text-red-500">*</span></label>
                        <textarea id="estagio_horario" name="estagio_horario" required class="w-full border rounded px-3 py-2 text-sm resize-y"></textarea>
                        <div class="text-sm text-gray-500 mt-1">Ex: Segunda a Sexta, das 8h às 12h.</div>
                    </div>

                    <div class="mt-3">
                        <label for="estagio_atividades" class="font-semibold text-sm">Resumo das Atividades Previstas <span class="text-red-500">*</span></label>
                        <textarea id="estagio_atividades" name="estagio_atividades" required class="w-full border rounded px-3 py-2 text-sm resize-y"></textarea>
                        <div class="text-sm text-gray-500 mt-1">Descreva as principais atividades que serão desenvolvidas no Termo de Compromisso.</div>
                    </div>
            <div class="flex justify-between mt-4">
                <button type="button" class="bg-gray-100 text-[#006633] font-bold px-4 py-2 rounded hover:bg-gray-200" data-prev>Anterior</button>
                <button type="button" class="bg-[#006633] text-white font-bold px-4 py-2 rounded hover:bg-[#004d26]" data-next>Continuar</button>
            </div>
        </fieldset>

        <!-- Step 5: Anexos e Finalização -->
        <fieldset data-step="5" class="mb-4 hidden">
            <h4 class="text-[#006633] font-semibold mb-3">Anexos e Finalização</h4>
<div class="mt-3">
                        <label for="termo_atividade" class="font-semibold text-sm">Termo de Compromisso (PDF) <span class="text-red-500">*</span></label>
                        <input id="termo_atividade" name="termo_atividade" type="file" accept=".pdf" required class="w-full border rounded px-3 py-2 text-sm"/>
                    </div>

                    <div class="mt-3">
                        <label for="plano_atividade" class="font-semibold text-sm">Plano de Atividades (PDF) <span class="text-red-500">*</span></label>
                        <input id="plano_atividade" name="plano_atividade" type="file" accept=".pdf" required class="w-full border rounded px-3 py-2 text-sm"/>
                    </div>            <div class="flex justify-between mt-4">
                <button type="button" class="bg-gray-100 text-[#006633] font-bold px-4 py-2 rounded hover:bg-gray-200" data-prev>Anterior</button>
                <button type="submit" class="bg-[#006633] text-white font-bold px-4 py-2 rounded hover:bg-[#004d26]">Enviar</button>
            </div>
        </fieldset>

    </form>
  </section>
</div>

<style>
  #stepsNav .step.active {
    background-color: #006633;
    color: white;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }

  #stepsNav .step:hover:not(.active) {
    background-color: #78BE20;
    color: white;
  }
</style>

<script>
const stepsNav = document.getElementById('stepsNav');
const steps = document.querySelectorAll('#stepsNav .step');
const form = document.getElementById('termoForm');
const fieldsets = form.querySelectorAll('fieldset');
const card = document.getElementById('content-area');

let currentStep = 0;
steps.forEach(s => {
  s.addEventListener('click', (e) => {
    e.preventDefault();
    const step = parseInt(s.getAttribute('data-step'));
    if (!isNaN(step)) {
      currentStep = step;
      showStep(currentStep);
    }
  });
});

const showStep = (step) => {
  fieldsets.forEach((fs, index) => {
    fs.style.display = index === step ? 'block' : 'none';
  });

  stepsNav.classList.toggle('hidden', step === 0);

  steps.forEach(s => s.classList.remove('active'));
  const activeStep = document.querySelector(`#stepsNav .step[data-step="${step}"]`);
  if (activeStep) activeStep.classList.add('active');

  if (step === 0) {
    card.classList.remove('border-green-600');
    card.classList.add('border-red-500');
  } else {
    card.classList.remove('border-red-500');
    card.classList.add('border-green-600');
  }
};

form.querySelectorAll('[data-next]').forEach(btn => {
  btn.addEventListener('click', () => {
    if (currentStep < fieldsets.length - 1) {
      currentStep++;
      showStep(currentStep);
    }
  });
});

form.querySelectorAll('[data-prev]').forEach(btn => {
  btn.addEventListener('click', () => {
    if (currentStep > 0) {
      currentStep--;
      showStep(currentStep);
    }
  });
});

// Inicializa
showStep(currentStep);
</script>

<?php
require_once __DIR__ . '/../../../includes/footer.php';
?>
