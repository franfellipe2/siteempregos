<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Emprego</title>
    <link rel="stylesheet" href="styles.css">
    <img>
    <!-- Adicionando um link para o Google Fonts para melhorar a tipografia -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>/* Reset de margens e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Fonte padrão */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
            color: #333;
            line-height: 1.6;
            padding-top: 50px;
        }
        
        /* Cabeçalho */
        header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        header h1 {
            font-size: 2.5em;
        }
        
        header h1 span {
            color: #ffcc00;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
        }
        
        nav a:hover {
            text-decoration: underline;
        }
        
        /* Seção Hero */
        .hero {
            background-image: image(img);
            color: white;
            padding: 100px 20px;
            text-align: center;
            background-color: #333;
        }
        
        .hero h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2em;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .cta-buttons .btn {
            background-color: #ffcc00;
            color: #333;
            padding: 12px 30px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-transform: uppercase;
        }
        
        .cta-buttons .btn:hover {
            background-color: #e6b800;
        }
        
        /* Seção de Benefícios */
        .benefits {
            padding: 60px 20px;
            text-align: center;
            background-color: #f8f8f8;
        }
        
        .benefits h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }
        
        .benefit-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .benefit-cards .card {
            background-color: white;
            padding: 20px;
            width: 280px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .benefit-cards .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-cards .card h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
        }
        
        .benefit-cards .card p {
            font-size: 1em;
            color: #555;
        }
        
        /* Seção Testemunhos */
        .testimonials {
            padding: 60px 20px;
            background-color: #f0f4f8;
            text-align: center;
        }
        
        .testimonials h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #333;
        }
        
        .testimonial-cards {
            display: flex;
            justify-content: space-around;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .testimonial-cards .testimonial-card {
            background-color: white;
            padding: 30px;
            width: 300px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            font-style: italic;
            color: #555;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .testimonial-cards .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-cards .testimonial-card strong {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }
        
        /* Rodapé */
        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        
        footer p {
            font-size: 0.9em;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            header .container {
                flex-direction: column;
                text-align: center;
            }
        
            .cta-buttons {
                flex-direction: column;
                gap: 15px;
            }
        
            .benefit-cards {
                flex-direction: column;
                align-items: center;
            }
        
            .testimonial-cards {
                flex-direction: column;
                align-items: center;
            }
        }
        </style>
</head>
<body>
    <!-- Cabeçalho com título e navegação -->
    <header>
        <div class="container">
            <h1>Bem-vindo ao <span>Portal de Emprego</span></h1>
            <nav>
                <a href="login_candidato.html">Login Candidato</a>
                <a href="login_empresa.html">Login Empresa</a>
            </nav>
        </div>
    </header>

    <!-- Seção Principal (Hero) -->
    <section class="hero">
        <div class="container">
            <h2>Conectando Talentos às Oportunidades</h2>
            <p>Se você está procurando uma nova oportunidade ou uma empresa buscando profissionais qualificados, este é o lugar certo para você!</p>
            <div class="cta-buttons">
                <a href="cadastrocandidato.php" class="btn">Cadastre-se como Candidato</a>
                <a href="cadastroempresa.php" class="btn">Cadastre-se como Empresa</a>
            </div>
        </div>
    </section>

    <!-- Seção de Benefícios -->
    <section class="benefits">
        <div class="container">
            <h2>Por que escolher o nosso portal?</h2>
            <div class="benefit-cards">
                <div class="card">
                    <h3>Para Candidatos</h3>
                    <p>Acesse diversas oportunidades e cadastre seu currículo para ser encontrado por empresas.</p>
                </div>
                <div class="card">
                    <h3>Para Empresas</h3>
                    <p>Encontre candidatos qualificados e gerencie suas vagas com facilidade e eficiência.</p>
                </div>
                <div class="card">
                    <h3>Segurança e Privacidade</h3>
                    <p>Garantimos a segurança dos seus dados e a privacidade de todas as informações compartilhadas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Testemunhos -->
    <section class="testimonials">
        <div class="container">
            <h2>O que nossos usuários dizem</h2>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p>"O Portal de Emprego foi fundamental para encontrar minha primeira vaga de trabalho. O processo foi rápido e simples!"</p>
                    <strong>- João Silva, Candidato</strong>
                </div>
                <div class="testimonial-card">
                    <p>"Encontramos ótimos candidatos para nossa empresa! A plataforma é intuitiva e muito eficiente."</p>
                    <strong>- Maria Oliveira, RH da Empresa XYZ</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>© 2024 Portal de Emprego. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
