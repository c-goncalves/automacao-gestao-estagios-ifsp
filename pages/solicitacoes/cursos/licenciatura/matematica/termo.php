<?php
require_once __DIR__ . '/../../../../../includes/header.php';
require_once __DIR__ . '/../../../../../config/paths.php';
$page_title = "Solicitação de Estágio Curricular - Licenciatura em Matemática";

$feedback = $feedback ?? '';
?>

<div class="grid-alt">
    <section class="card" id="content-area">
        <h3>Termo de Compromisso de Estágio - Licenciatura em Matemática</h3>
        
        <div class="card nav" style="margin-top:12px">

           <div class="steps nav-link" aria-hidden="false">
                <a href="#" class="step" data-step="1">Estagiário</a>
                <a href="#" class="step" data-step="2">Unidade Concedente</a>
                <a href="#" class="step" data-step="3">Supervisor</a>
                <a href="#" class="step" data-step="4">Estágio</a>
                <a href="#" class="step" data-step="5">Anexos</a>
            </div>


            <form id="termoForm" action="<?php echo BASE_URL; ?>pages/solicitacoes/scripts/salvar_solicitacao.php" method="POST" enctype="multipart/form-data">
                
                <!-- <fieldset data-step="0">
                    <h4>Leia atentamente as orientações abaixo</h4>
                    <p>O Termo de Compromisso é ... (incluir texto completo das orientações)</p>
                    <div class="form-actions">
                        <button type="button" class="btn" data-next>Próximo</button>
                    </div>
                </fieldset> -->
                <!-- Step 0: Orientações Essenciais -->
                <fieldset data-step="0">
                    <div class="card full" style="margin-top:12px; border-left-color:var(--danger);">
                        <h5 style="color:var(--verde-escuro); margin-top:15px; font-size:1rem; font-weight: 600;">ATENÇÃO AOS PONTOS CRUCIAIS:</h5>
                        
                        <ul style="list-style:disc; margin-left:20px; font-size:14px; line-height:1.6;">
                            <li>Preenchimento: Preencha todos os campos com calma para não haver divergencias de informação.</li>
                            <li>Documentação: O Termo de Compromisso poderá ter várias páginas e deverá conter a numeração e a rubrica de todas as partes nas páginas anteriores à assinatura final.</li>
                            <li>Carga Horária Máxima (Cláusula VII): O estágio <strong>não pode</strong> ultrapassar <strong>06 horas diárias</strong> e <strong>30 horas semanais</strong>, nem coincidir com o horário das aulas.</li>
                            <li>Carga Horária Cumulativa: Se você já tiver outro estágio, a carga horária máxima deve ser respeitada de forma cumulativa.</li>
                        </ul>
                        
                        <div class="msg error" style="margin-top:15px;">
                            <strong>IMPORTANTE</strong>: Seu estágio só podera ser iniciado se o Termo de Compromisso e Plano de Atividades forem devidamente preenchidos e assinados pela empresa, orientador de estágio e a direção do campus.
                        </div>
                    </div>

                    <div class="form-actions" style="margin-top:20px;">
                        <button type="button" class="btn" data-next>Li e Continuar</button>
                    </div>
                </fieldset>
               <fieldset data-step="1" style="display:none">
    <h4 style="color:var(--verde-ifsp)">Dados Pessoais e Acadêmicos (Estagiário)</h4>
    <div class="row">
        <div>
            <label for="aluno_nome">Nome completo <span class="required">*</span></label>
            <input id="aluno_nome" name="aluno_nome" type="text" required>
        </div>
        <div>
            <label for="aluno_prontuario">Prontuário / Matrícula <span class="required">*</span></label>
            <input id="aluno_prontuario" name="aluno_prontuario" type="text" required>
        </div>
    </div>

    <div class="row" style="margin-top:12px">
        <div>
            <label for="aluno_curso">Curso <span class="required">*</span></label>
            <input id="aluno_curso" name="aluno_curso" type="text" value="Licenciatura em Matemática" readonly>
        </div>
        <div>
            <label for="aluno_semestre">Semestre <span class="required">*</span></label>
            <input id="aluno_semestre" name="aluno_semestre" type="text" required>
        </div>
    </div>

    <div class="row" style="margin-top:12px">
        <div>
            <label for="aluno_rg">RG <span class="required">*</span></label>
            <input id="aluno_rg" name="aluno_rg" type="text" required>
        </div>
        <div>
            <label for="aluno_cpf">CPF <span class="required">*</span></label>
            <input id="aluno_cpf" name="aluno_cpf" type="text" required>
        </div>
    </div>
    
    <div class="row" style="margin-top:12px">
        <div>
            <label for="aluno_nasc">Data de Nascimento <span class="required">*</span></label>
            <input id="aluno_nasc" name="aluno_nasc" type="date" required>
        </div>
        <div>
            <label for="aluno_email">E-mail <span class="required">*</span></label>
            <input id="aluno_email" name="aluno_email" type="email" required>
        </div>
    </div>

    <div class="row" style="margin-top:12px">
        <div class="full">
            <label for="aluno_endereco">Endereço (Rua e Número) <span class="required">*</span></label>
            <input id="aluno_endereco" name="aluno_endereco" type="text" required>
        </div>
        <div>
            <label for="aluno_cep">CEP</label>
            <input id="aluno_cep" name="aluno_cep" type="text">
        </div>
        <div>
            <label for="aluno_bairro">Bairro</label>
            <input id="aluno_bairro" name="aluno_bairro" type="text">
        </div>
    </div>

    <div class="row" style="margin-top:12px">
        <div>
            <label for="aluno_cidade">Cidade <span class="required">*</span></label>
            <input id="aluno_cidade" name="aluno_cidade" type="text" required>
        </div>
        <div>
            <label for="aluno_estado">Estado <span class="required">*</span></label>
            <input id="aluno_estado" name="aluno_estado" type="text" required>
        </div>
    </div>
    
    <div class="row" style="margin-top:12px">
        <div>
            <label for="aluno_telefone">Telefone</label>
            <input id="aluno_telefone" name="aluno_telefone" type="text">
        </div>
        <div>
            <label for="aluno_celular">Celular</label>
            <input id="aluno_celular" name="aluno_celular" type="text">
        </div>
    </div>
    
    <div style="margin-top:12px">
        <label>
            <input type="checkbox" name="estagio_obrigatorio" value="1"> Estágio Obrigatório (Marque se este for o caso)
        </label>
    </div>
    
    <div class="form-actions">
        <button type="button" class="btn secondary" data-prev>Anterior</button>
        <button type="button" class="btn" data-next>Próximo</button>
    </div>
</fieldset>

<fieldset data-step="2" style="display:none">
    <h4 style="color:var(--verde-ifsp)">Dados da Unidade Concedente (Escola)</h4>
    <div class="row">
        <div class="full">
            <label for="unidade_nome">Nome da Escola/Empresa <span class="required">*</span></label>
            <input id="unidade_nome" name="unidade_nome" type="text" required>
        </div>
        <div>
            <label for="unidade_diretoria">Diretoria de Ensino</label>
            <input id="unidade_diretoria" name="unidade_diretoria" type="text">
        </div>
        <div>
            <label for="unidade_cnpj">CNPJ (Opcional, se for escola particular)</label>
            <input id="unidade_cnpj" name="unidade_cnpj" type="text">
        </div>
    </div>
    
    <div class="row" style="margin-top:12px">
        <div class="full">
            <label for="unidade_endereco">Endereço (Rua e Número)</label>
            <input id="unidade_endereco" name="unidade_endereco" type="text">
        </div>
        <div>
            <label for="unidade_cep">CEP</label>
            <input id="unidade_cep" name="unidade_cep" type="text">
        </div>
        <div>
            <label for="unidade_bairro">Bairro</label>
            <input id="unidade_bairro" name="unidade_bairro" type="text">
        </div>
        <div>
            <label for="unidade_cidade">Cidade</label>
            <input id="unidade_cidade" name="unidade_cidade" type="text">
        </div>
        <div>
            <label for="unidade_estado">Estado</label>
            <input id="unidade_estado" name="unidade_estado" type="text">
        </div>
    </div>
    
    <div class="row" style="margin-top:12px">
        <div>
            <label for="unidade_diretor">Diretor(a)</label>
            <input id="unidade_diretor" name="unidade_diretor" type="text">
        </div>
        <div>
            <label for="unidade_telefone">Telefone</label>
            <input id="unidade_telefone" name="unidade_telefone" type="text">
        </div>
    </div>
    
    <div class="form-actions">
        <button type="button" class="btn secondary" data-prev>Anterior</button>
        <button type="button" class="btn" data-next>Próximo</button>
    </div>
</fieldset>

<fieldset data-step="3" style="display:none">
    <h4 style="color:var(--verde-ifsp)">Dados do Supervisor de Estágio</h4>
    <div class="row">
        <div>
            <label for="supervisor_nome">Nome completo <span class="required">*</span></label>
            <input id="supervisor_nome" name="supervisor_nome" type="text" required>
        </div>
        <div>
            <label for="supervisor_cpf">CPF <span class="required">*</span></label>
            <input id="supervisor_cpf" name="supervisor_cpf" type="text" required>
        </div>
    </div>
    
    <div class="row" style="margin-top:12px">
        <div>
            <label for="supervisor_cargo">Cargo</label>
            <input id="supervisor_cargo" name="supervisor_cargo" type="text">
        </div>
        <div>
            <label for="supervisor_formacao">Formação Acadêmica</label>
            <input id="supervisor_formacao" name="supervisor_formacao" type="text">
        </div>
    </div>
    
    <div class="row" style="margin-top:12px">
        <div class="full">
            <label for="supervisor_email">E-mail</label>
            <input id="supervisor_email" name="supervisor_email" type="email">
        </div>
    </div>
    
    <div class="form-actions">
        <button type="button" class="btn secondary" data-prev>Anterior</button>
        <button type="button" class="btn" data-next>Próximo</button>
    </div>
</fieldset>

<fieldset data-step="4" style="display:none">
    <h4 style="color:var(--verde-ifsp)">Período e Atividades do Estágio (Cláusulas VII e VIII)</h4>
    <p class="msg error">
        <strong>ATENÇÃO:</strong> Garanta que a carga horária <strong>NÃO EXCEDA 6 horas diárias / 30 horas semanais</strong> e não conflite com o horário de aulas.
    </p>
    
    <div class="row">
        <div>
            <label for="estagio_inicio">Data Início <span class="required">*</span></label>
            <input id="estagio_inicio" name="estagio_inicio" type="date" required>
        </div>
        <div>
            <label for="estagio_fim">Data Término <span class="required">*</span></label>
            <input id="estagio_fim" name="estagio_fim" type="date" required>
        </div>
    </div>
    
    <div style="margin-top:12px" class="full">
        <label for="estagio_horario">Dias da Semana e Horários de Cumprimento <span class="required">*</span></label>
        <textarea id="estagio_horario" name="estagio_horario" required></textarea>
        <div class="field-note">Ex: Segunda a Sexta, das 8h às 12h.</div>
    </div>
    
    <div style="margin-top:12px" class="full">
        <label for="estagio_atividades">Resumo das Atividades Previstas <span class="required">*</span></label>
        <textarea id="estagio_atividades" name="estagio_atividades" required></textarea>
        <div class="field-note">Descreva as principais atividades que serão desenvolvidas no Termo de Compromisso.</div>
    </div>
    
    <div class="form-actions">
        <button type="button" class="btn secondary" data-prev>Anterior</button>
        <button type="submit" class="btn" data-next>Próximo</button>
    </div>
</fieldset>

<fieldset data-step="5" style="display:none">
    <!-- <h4 style="color:var(--verde-ifsp)">Anexos e Finalização</h4>
    <p class="small muted">Esta seção será usada posteriormente para anexar o Termo de Compromisso e o Plano de Atividades assinados.</p> -->
    
    <div style="margin-top:20px">
        <label>
            <input type="checkbox" id="liReg" name="liReg" required />
            Declaro que li o regulamento e as orientações da <strong>Cláusula VII</strong> sobre a carga horária. <span class="required">*</span>
        </label>
    </div>

    <div class="form-actions">
        <button type="button" class="btn secondary" data-prev>Anterior</button>
        <button type="submit" class="btn">Enviar Solicitação ao Orientador</button>
    </div>
</fieldset>

<script>
document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('termoForm');
    if(!form) return;

    const steps = Array.from(form.querySelectorAll('fieldset'));
    const stepLinks = Array.from(document.querySelectorAll('.steps .step'));
    const stepsNav = document.querySelector('.steps.nav-link');
    let current = 0;

    function showStep(index){
        steps.forEach((fs,i)=> fs.style.display = i===index ? 'block':'none');
        stepLinks.forEach((link,i)=> link.classList.toggle('active', i===index));

        // Esconde nav completamente no step 0
        if(index === 0){
            stepsNav.style.opacity = '0';
            stepsNav.style.pointerEvents = 'none';
            stepsNav.style.height = '0';
        } else {
            stepsNav.style.opacity = '1';
            stepsNav.style.pointerEvents = 'auto';
            stepsNav.style.height = 'auto';
        }

        current = index;
        window.scrollTo({top: 0, behavior: 'smooth'});
    }

    form.addEventListener('click', function(e){
        const nextBtn = e.target.closest('[data-next]');
        const prevBtn = e.target.closest('[data-prev]');

        if(nextBtn){
            e.preventDefault();
            if(current < steps.length - 1){
                showStep(current + 1);
            }
            return;
        }

        if(prevBtn){
            e.preventDefault();
            if(current > 0){
                showStep(current - 1);
            }
            return;
        }
    });

    stepLinks.forEach(link => {
        link.addEventListener('click', function(e){
            e.preventDefault();
            const index = parseInt(this.dataset.step, 10);
            showStep(index);
        });
    });

    showStep(0);
});

</script>


<?php
require_once __DIR__ . '/../../../../../includes/footer.php';
?>
