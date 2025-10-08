<?php
$page_title = "Durante o Estágio - Relatórios";
include '../config/db.php'; 
include '../includes/header.php';
?>

<div class="grid">
    <section class="card" id="content-area">
        <h3 id="durante">Durante o Estágio</h3>
        <p class="small muted">Relatórios periódicos e solicitações de alteração/aditivo (funcionalidade em desenvolvimento).</p>

        <div class="card" style="margin-top:12px">
            <h4>Relatório de Acompanhamento (Protótipo)</h4>
            <p class="msg error">Esta página é um protótipo e a funcionalidade de salvar relatórios ainda não está ativa.</p>
            <form id="relatorioForm" action="../scripts/salvar_relatorio.php" method="POST" style="margin-top:8px">
                <div class="row">
                    <div>
                        <label for="relMat">Matrícula</label>
                        <input id="relMat" name="relMat" type="text" />
                    </div>
                    <div>
                        <label for="periodo">Período</label>
                        <input id="periodo" name="periodo" type="text" placeholder="Ex: 01/2025 - 03/2025" />
                    </div>
                </div>

                <div style="margin-top:12px">
                    <label for="ativReal">Atividades realizadas</label>
                    <textarea id="ativReal" name="ativReal"></textarea>
                </div>

                <div style="margin-top:12px" class="form-actions">
                    <button class="btn" type="submit">Enviar Relatório</button>
                </div>
            </form>
        </div>
    </section>

    <!-- SIDEBAR DE RECURSOS -->
     <aside class="card">
       <?php include '../includes/recursos.php'; ?>
    </aside>
</div>

<?php
include '../includes/footer.php';
?>
