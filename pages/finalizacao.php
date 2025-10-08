<?php
$page_title = "Encerrando o Estágio - Avaliação Final";
include '../config/db.php'; 
include '../includes/header.php';
?>

<div class="grid">
    <section class="card" id="content-area">
        <h3 id="encerrando">Encerrando o Estágio</h3>
        <p class="small muted">Formulário de encerramento e avaliação final (funcionalidade em desenvolvimento).</p>

        <div class="card" style="margin-top:12px">
            <h4>Encerramento (Protótipo)</h4>
            <p class="msg error">Esta página é um protótipo e a funcionalidade de encerramento ainda não está ativa.</p>
            <form id="encForm" action="../scripts/salvar_encerramento.php" method="POST">
                <div class="row">
                    <div>
                        <label for="encMat">Matrícula</label>
                        <input id="encMat" name="encMat" type="text" />
                    </div>
                    <div>
                        <label for="dataEnc">Data de término</label>
                        <input id="dataEnc" name="dataEnc" type="date" />
                    </div>
                </div>

                <div style="margin-top:12px">
                    <label for="relFinal">Relatório final (resumo)</label>
                    <textarea id="relFinal" name="relFinal"></textarea>
                </div>

                <div style="margin-top:12px" class="form-actions">
                    <button class="btn" type="submit">Enviar Encerramento</button>
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
