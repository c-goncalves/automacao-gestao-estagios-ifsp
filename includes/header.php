<?php

$page_title = $page_title ?? "Coordenação de Estágios — IFSP";
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="Protótipo HTML das páginas e formulários: Antes de Iniciar, Durante e Encerrando o Estágio. Baseado no manual de identidade visual do IFSP." />

  
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --verde-ifsp: #006633;
      --verde-claro: #78BE20;
      --verde-secundario: #007a4d;
      --verde-escuro: #09332a;
      --cinza-neutro: #6b6b6b;
      --fundo-claro: #f7f9f8;
      --branco: #ffffff;
      --danger: #d9534f;
      --success: #28a745;
      --max-width: 1100px;
      font-family: 'Open Sans', Arial, sans-serif;
    }

    *{box-sizing:border-box}
    body{margin:0;background:var(--fundo-claro);color:#111;line-height:1.45}
    
    header{
      position: sticky;
      top: 0;
      background: var(--verde-escuro);
      color: var(--branco);
      padding:18px 16px;
      z-index: 1000;
    }
    .container{max-width:var(--max-width);margin:0 auto;padding:20px}
    .brand{display:flex;align-items:center;gap:12px}
    
    .brand img{height:70px;width:auto;background:white;padding:6px;border-radius:6px}
    .brand h1{font-size:20px;margin:0;font-weight:700;color:var(--branco)}

    nav{margin-top:8px}
    .nav-links{display:flex;gap:12px;flex-wrap:wrap}
    .nav-links a{
      color: var(--branco);
      text-decoration:none;
      padding:6px 10px;
      border-radius:6px;
      font-weight:600;
      transition: color 0.2s;
    }
    .nav-links a:hover{color: var(--verde-claro);}
    .nav-links a.active{background:rgba(255,255,255,0.15)}

    main{padding:28px 0}
    .hero{display:flex;gap:24px;align-items:flex-start}
    .hero .title{flex:1}
    .hero h2{margin:0 0 8px 0;font-size:26px;color:var(--verde-escuro)}
    .hero p{margin:0;color:var(--cinza-neutro)}

    .grid{display:grid;grid-template-columns:1fr 360px;gap:24px;margin-top:18px}
    .card{
      background:var(--branco);
      padding:18px;
      border-radius:10px;
      box-shadow:0 6px 16px rgba(18,18,18,0.05);
      border-left:6px solid var(--verde-ifsp);
    }
    .card h3{margin-top:0;color:var(--verde-escuro)}
    .card h4{margin-top:0;color:var(--verde-escuro)}

    .btn{
      display:inline-block;
      background:var(--verde-ifsp);
      color:white;
      padding:10px 14px;
      border-radius:8px;
      text-decoration:none;
      font-weight:700;
      transition: background 0.2s;
    }
    .btn:hover{background:#004d26;}
    .btn.secondary{background:#fff;color:var(--verde-ifsp);border:1px solid rgba(0,0,0,0.08)}

    form .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
    form label{font-weight:600;font-size:14px;margin-bottom:6px;display:block}
    input[type=text], input[type=email], input[type=date], input[type=number], select, textarea{
      width:100%;padding:10px;border-radius:8px;border:1px solid #e3e6e6;background:#fff;font-size:14px}
    textarea{min-height:120px;resize:vertical}
    .full{grid-column:1/-1}
    .field-note{font-size:12px;color:var(--cinza-neutro);margin-top:6px}

    .required{color:var(--danger);margin-left:6px;font-weight:700}

    .form-actions{display:flex;gap:12px;align-items:center;margin-top:12px}

    @media (max-width:900px){
      .grid{grid-template-columns:1fr}
      form .row{grid-template-columns:1fr}
      .brand img{height:44px}
    }

    .muted{color:var(--cinza-neutro);font-size:14px}
    .small{font-size:13px;color:var(--cinza-neutro)}

    .error{border-color:var(--danger);box-shadow:0 0 0 3px rgba(217,83,79,0.06)}
    .msg{padding:10px;border-radius:8px}
    .msg.success{background:rgba(40,167,69,0.09);border:1px solid rgba(40,167,69,0.12);color:var(--success)}
    .msg.error{background:rgba(217,83,79,0.06);border:1px solid rgba(217,83,79,0.12);color:var(--danger)}

    .steps{display:flex;gap:8px;align-items:center;margin-bottom:14px}
    .step{padding:8px 12px;border-radius:8px;background:#f1f4f3;font-weight:600}
    .step.active{background:var(--verde-ifsp);color:white}

    aside.card{background:var(--fundo-claro)}

    footer{
      background: var(--verde-escuro);
      padding:18px 0;
      margin-top:28px;
      text-align:center;
      color: var(--branco);
    }
    footer a{color: var(--verde-claro);text-decoration:none;}
    footer a:hover{text-decoration:underline;}
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="brand">
        
        <!-- <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='60'><rect width='200' height='60' rx='6' fill='%23ffffff'/><text x='14' y='38' font-family='Open Sans, Arial' font-weight='700' font-size='16' fill='%2300663f'>IFSP - Estágios</text></svg>" alt="Logo IFSP"> -->
        <img src="../assets/logo_ifsp.png" alt="Logo IFSP Campus Guarulhos">


        <div>
          <h1>Coordenação de Estágios — IFSP</h1>
          <?php include 'nav.php'; ?>
        </div>
      </div>
    </div>
  </header>
  <main class="container">
