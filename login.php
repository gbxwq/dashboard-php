<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">

    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-brand">
                <span class="brand-icon">◈</span>
                <h1>Painel Admin</h1>
            </div>

            <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
                <div class="alert-error">
                    ✖ E-mail ou senha incorretos. Tente novamente.
                </div>
            <?php endif; ?>

            
            <form action="valida_login.php" method="POST" class="login-form">
                <div class="field-group">
                    <label for="email">E-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="seu@email.com"
                        required
                        autocomplete="email"
                    >
                </div>

                <div class="field-group">
                    <label for="senha">Senha</label>
                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="••••••••"
                        required
                        autocomplete="current-password"
                    >
                </div>

                <button type="submit" class="btn-login">Entrar no Painel →</button>
            </form>
        </div>
    </div>

</body>
</html>