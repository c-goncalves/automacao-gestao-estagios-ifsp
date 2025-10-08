<?php
require_once __DIR__ . '/../config/db.php';
// Validação

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../pages/antes.php");
    exit();
}

// Place holder de validação
$dados = [
    'aluno_nome' => filter_input(INPUT_POST, 'aluno_nome', FILTER_SANITIZE_STRING),
    'aluno_email' => filter_input(INPUT_POST, 'aluno_email', FILTER_VALIDATE_EMAIL),
    'aluno_prontuario' => filter_input(INPUT_POST, 'aluno_prontuario', FILTER_SANITIZE_STRING),
    'curso_id' => filter_input(INPUT_POST, 'curso_id', FILTER_VALIDATE_INT),
    'empresa_razao_social' => filter_input(INPUT_POST, 'empresa_razao_social', FILTER_SANITIZE_STRING),
    'empresa_cnpj' => filter_input(INPUT_POST, 'empresa_cnpj', FILTER_SANITIZE_STRING),
    'data_inicio' => filter_input(INPUT_POST, 'data_inicio', FILTER_SANITIZE_STRING),
    'data_fim' => filter_input(INPUT_POST, 'data_fim', FILTER_SANITIZE_STRING),
    'plano_atividades' => filter_input(INPUT_POST, 'plano_atividades', FILTER_SANITIZE_STRING),
];

if (empty($dados['aluno_nome']) || empty($dados['aluno_email']) || empty($dados['curso_id'])) {
    // Inserir logica de erro
    die("Erro: Campos obrigatórios não preenchidos.");
}


// um orientador para o curso_id 
$orientador_id_simulado = 1; // ID fixo 

// Geração de Chaves de Acesso
$chave_aluno = uniqid('ALUNO_', true); // UUID - aluno
$chave_orientador = uniqid('ORIENTADOR_', true); // UUID  orientador


$conn = getDbConnection();

try {
    $stmt = $conn->prepare("
        INSERT INTO solicitacoes_estagio (
            status_id, chave_acesso_aluno, chave_acesso_orientador, 
            aluno_nome, aluno_email, aluno_prontuario, 
            curso_id, orientador_id, 
            empresa_razao_social, empresa_cnpj, 
            data_inicio, data_fim, plano_atividades
        ) VALUES (
            :status_id, :chave_aluno, :chave_orientador, 
            :aluno_nome, :aluno_email, :aluno_prontuario, 
            :curso_id, :orientador_id, 
            :empresa_razao_social, :empresa_cnpj, 
            :data_inicio, :data_fim, :plano_atividades
        )
    ");

    $stmt->execute([
        ':status_id' => 1, // 1 = Em Análise pela Coordenação
        ':chave_aluno' => $chave_aluno,
        ':chave_orientador' => $chave_orientador,
        ':aluno_nome' => $dados['aluno_nome'],
        ':aluno_email' => $dados['aluno_email'],
        ':aluno_prontuario' => $dados['aluno_prontuario'],
        ':curso_id' => $dados['curso_id'],
        ':orientador_id' => $orientador_id_simulado,
        ':empresa_razao_social' => $dados['empresa_razao_social'],
        ':empresa_cnpj' => $dados['empresa_cnpj'],
        ':data_inicio' => $dados['data_inicio'],
        ':data_fim' => $dados['data_fim'],
        ':plano_atividades' => $dados['plano_atividades'],
    ]);

    $nova_solicitacao_id = $conn->lastInsertId();

    // email enviado ao aluno/orientador
    $success_url = "../pages/antes.php?status=success&id=" . $nova_solicitacao_id;
    header("Location: $success_url");
    exit();

} catch (PDOException $e) {
    error_log("Erro de Inserção: " . $e->getMessage());
    // Redirecionamento em caso de falha
    header("Location: ../pages/antes.php?status=error&msg=Falha na inserção.");
    exit();
}
?>
