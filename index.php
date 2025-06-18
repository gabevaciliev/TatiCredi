<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TatiCredi - Soluções Financeiras</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <div class="container">
        <img src="img/logo.png" alt="Logo TatiCredi" class="logo">
        <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="contato.php">Contato</a>
        </nav>
    </div>
</header>

<section class="area-hero reveal">
    <div class="container hero-content">
        <div class="hero-text">
            <h1>Bem-vindo à <span class="destaque-tati">TatiCredi</span></h1>
            <p><strong>Soluções financeiras com agilidade, segurança e confiança.</strong></p>
        </div>
        <div class="hero-image">
            <img src="img/mulher.png" alt="Consultora TatiCredi">
            <div class="botao-centro">
                <button onclick="window.location.href='contato.php'">Fale Conosco</button>
            </div>
        </div>
    </div>
</section>

<section class="servicos reveal">
    <div class="container">
        <h2>Nossos serviços</h2>
        <p>Conheça as principais soluções financeiras que oferecemos:</p>
        <div class="cards">
            <div class="card" onclick="destacar(this); redirecionar('https://exemplo.com/fgts')">
                <i class="fas fa-piggy-bank"></i>
                <h3>Antecipação de FGTS</h3>
                <p>Antecipe seu FGTS com agilidade e segurança.</p>
            </div>
            <div class="card" onclick="destacar(this); redirecionar('https://exemplo.com/saque-aniversario')">
                <i class="fas fa-birthday-cake"></i>
                <h3>Saque Aniversário</h3>
                <p>Garanta seu saque aniversário de forma rápida.</p>
            </div>
            <div class="card" onclick="destacar(this); redirecionar('https://exemplo.com/emprestimos')">
                <i class="fas fa-hand-holding-usd"></i>
                <h3>Empréstimos</h3>
                <p>Linhas de crédito personalizadas para você.</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2025 TatiCredi - Todos os direitos reservados.</p>
        <a href="https://www.instagram.com/taticredicm?igsh=MW13NjJ3ZDcxcThx" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
        </a>
    </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>
