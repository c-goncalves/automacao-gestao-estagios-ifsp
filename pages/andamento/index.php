<?php
$page_title = "Durante o Estágio - Relatórios";
require_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../config/paths.php';
require_once __DIR__ . '/../../config/db.php';
?>

<div class="grid-alt">
    <section class="" id="content-area">
        <h3 id="durante">Acompanhe a sua solicitação</h3>
         <p class="msg error">Funcionalidade Inativa</p>

        <!-- <div class="" style="margin-top:12px">
            <h4>Acompanhamento (Protótipo)</h4>
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
        </div> -->
    </section>

</div>

<?php
require_once __DIR__ . '/../../includes/footer.php';
?>
