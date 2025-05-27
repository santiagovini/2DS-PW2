<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GuiaFut</title>
  <link rel="icon" href="views/images/gflogo.png" type="image/png" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fefefe;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .left-column {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 0 10%;
      color: #1e1e2f;
    }

    .header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 24px;
    }

    .logo {
      height: 40px;
      width: auto;
    }

    .title {
      font-size: 36px;
      font-weight: bold;
    }

    .description {
      font-size: 18px;
      margin-bottom: 40px;
      max-width: 500px;
    }

    .btn-group {
      display: flex;
      gap: 16px;
    }

    .btn-primary {
      background-color: mediumblue;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-secondary {
      background-color: transparent;
      color: mediumblue;
      padding: 12px 24px;
      border: 2px solid mediumblue;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }

    .right-column {
      flex: 1;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Coluna da esquerda com conteúdo -->
    <div class="left-column">
      <div class="header">
        <img src="views/images/gflogo.png" alt="Logo GuiaFut" class="logo">
        <div class="title">GuiaFut</div>
      </div>
      <div class="description">
       Sua grande biblioteca de clubes de futebol do mundo, em apenas um lugar.
      </div>
      <div class="btn-group">
        <a href="?aaa=login" class="btn-primary">Entrar</a>
        <a href="?aaa=cadastro" class="btn-secondary">Cadastrar-se</a>
      </div>
    </div>

    <!-- Coluna da direita vazia -->
    <div class="right-column"></div>
  </div>
</body>
</html>
