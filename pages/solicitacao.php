<?php
$page_title = "Antes de Iniciar - Estágio IFSP";
include '../config/db.php'; 
include '../includes/header.php'; 

$feedback = '';
$current_step = 1;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    
}

?>

<div class="grid">
    <section class="card" id="content-area">
        <h3 id="antes">Antes de Iniciar um Estágio</h3>
        <p class="muted">Formulário principal para solicitar início de estágio. Preencha todas as etapas.</p>

        <?php if ($feedback): ?>
            <div class="msg success"><?php echo htmlspecialchars($feedback); ?></div>
        <?php endif; ?>
        
        
        <div class="card" style="margin-top:12px">
            <div class="steps" aria-hidden="false">
                <div class="step active" data-step="1">1. Aluno</div>
                <div class="step" data-step="2">2. Empresa</div>
                <div class="step" data-step="3">3. Estágio</div>
                <div class="step" data-step="4">4. Anexos</div>
            </div>

            <form id="solicitacaoForm" action="../scripts/salvar_solicitacao.php" method="POST" enctype="multipart/form-data" novalidate>
                
                <input type="hidden" name="current_step" id="current_step" value="1">
                <input type="hidden" name="solicitacao_id" value="<?php echo isset($_GET['id']) ? (int)$_GET['id'] : ''; ?>">

                
                <fieldset data-step="1">
                    <div class="row">
                        <div>
                            <label for="aluno_nome">Nome completo <span class="required">*</span></label>
                            <input id="aluno_nome" name="aluno_nome" type="text" required />
                        </div>
                        <div>
                            <label for="aluno_prontuario">Prontuário / Matrícula <span class="required">*</span></label>
                            <input id="aluno_prontuario" name="aluno_prontuario" type="text" required />
                        </div>
                    </div>

                    <div class="row" style="margin-top:12px">
                        <div>
                            <label for="curso_id">Curso / Semestre <span class="required">*</span></label>
                            
                            <select id="curso_id" name="curso_id" required>
                                <option value="">Selecione</option>
                                <option value="1">ADS - 6º Semestre</option>
                                <option value="2">Engenharia da Computação</option>
                                <option value="3">Téc. Administração</option>
                            </select>
                        </div>
                        <div>
                            <label for="aluno_email">E-mail institucional <span class="required">*</span></label>
                            <input id="aluno_email" name="aluno_email" type="email" required />
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn" data-next>Próximo</button>
                        <div class="small muted">Campos com <span class="required">*</span> são obrigatórios</div>
                    </div>
                </fieldset>

                
                <fieldset data-step="2" style="display:none">
                    <h4>Dados da Empresa</h4>
                    <div class="row">
                        <div>
                            <label for="empresa_razao_social">Razão Social da Empresa <span class="required">*</span></label>
                            <input id="empresa_razao_social" name="empresa_razao_social" type="text" required />
                        </div>
                        <div>
                            <label for="empresa_cnpj">CNPJ</label>
                            <input id="empresa_cnpj" name="empresa_cnpj" type="text" />
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn secondary" data-prev>Anterior</button>
                        <button type="button" class="btn" data-next>Próximo</button>
                    </div>
                </fieldset>

                
                <fieldset data-step="3" style="display:none">
                    <h4>Dados do Estágio</h4>
                    
                    <div class="row" style="margin-top:12px">
                        <div>
                            <label for="data_inicio">Data prevista de início <span class="required">*</span></label>
                            <input id="data_inicio" name="data_inicio" type="date" required />
                        </div>
                        <div>
                            <label for="data_fim">Data prevista de término <span class="required">*</span></label>
                            <input id="data_fim" name="data_fim" type="date" required />
                        </div>
                    </div>

                    <div style="margin-top:12px">
                        <label for="plano_atividades">Plano de Atividades Resumido <span class="required">*</span></label>
                        <textarea id="plano_atividades" name="plano_atividades" required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn secondary" data-prev>Anterior</button>
                        <button type="button" class="btn" data-next>Próximo</button>
                    </div>
                </fieldset>

                
                <fieldset data-step="4" style="display:none">
                    <h4>Anexos</h4>
                    <p class="small muted">A funcionalidade de upload de arquivos exigiria um ambiente de servidor mais complexo (ex: S3 ou Google Storage) e não está inclusa neste protótipo inicial. Este formulário apenas simula a coleta de dados de texto para o BD.</p>
                    
                    <div style="margin-top:12px">
                        <label>
                            <input type="checkbox" id="liReg" name="liReg" required />
                            Declaro que li o regulamento e concordo com as condições.
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn secondary" data-prev>Anterior</button>
                        <button type="submit" class="btn">Enviar Solicitação</button>
                    </div>
                </fieldset>
            </form>
        </div>

    </section>

    
    <aside class="card">
       <?php include '../includes/recursos.php'; ?>
    </aside>
</div>


<script>
    (function(){
        const form = document.getElementById('solicitacaoForm');
        const steps = Array.from(form.querySelectorAll('fieldset'));
        const stepIndicators = Array.from(document.querySelectorAll('.step'));
        const currentStepInput = document.getElementById('current_step');
        let current = parseInt(currentStepInput.value) || 0;

        function showStep(index){
            steps.forEach((fs,i)=> fs.style.display = i===index ? 'block':'none');
            stepIndicators.forEach((si,i)=> si.classList.toggle('active', i===index));
            current = index;
            currentStepInput.value = index + 1; 
            window.scrollTo({top:form.offsetTop-20, behavior:'smooth'});
        }

        form.addEventListener('click', function(e){
            if(e.target.matches('[data-next]')){
                
                const requiredFields = Array.from(steps[current].querySelectorAll('[required]'));
                let ok = requiredFields.every(f => f.checkValidity()); 

                if(ok && current < steps.length-1) showStep(current+1);
            }
            if(e.target.matches('[data-prev]')){
                if(current>0) showStep(current-1);
            }
        });

        
        showStep(0);
    })();
</script>

<?php
include '../includes/footer.php'; 
?>
