<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="painel-page">

    
    <div class="dashboard-container">

        <
        <nav>
            <div class="nav-brand">
                <span class="brand-icon">◈</span>
                <span>Painel Admin</span>
            </div>

            <ul class="nav-menu">
                <li class="nav-item active"><a href="#">⬛ Dashboard</a></li>
                <li class="nav-item"><a href="#">👤 Usuários</a></li>
                <li class="nav-item"><a href="#">📝 Postagens</a></li>
                <li class="nav-item"><a href="#">📊 Relatórios</a></li>
                <li class="nav-item"><a href="#">⚙ Configurações</a></li>
            </ul>

            <div class="nav-footer">
                <a href="login.php" class="btn-logout">↩ Sair</a>
            </div>
        </nav>

        <main>
            <header class="main-header">
                <h2>Dashboard</h2>
                <span class="header-sub">Bem-vindo, Administrador</span>
            </header>

            
            <div class="cards-row">
                <div class="card"><span class="card-num">128</span><span class="card-label">Usuários</span></div>
                <div class="card"><span class="card-num">47</span><span class="card-label">Postagens</span></div>
                <div class="card"><span class="card-num">3</span><span class="card-label">Pendências</span></div>
            </div>

           
            <section class="table-section">
                <h3>Últimas Postagens</h3>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       
                        $posts = [
                            ["Introdução ao PHP",        "Ana Lima",    "08/04/2026", "Publicado"],
                            ["Flexbox na Prática",       "Carlos Melo", "07/04/2026", "Rascunho"],
                            ["Segurança em Formulários", "Ana Lima",    "06/04/2026", "Publicado"],
                            ["MySQL para Iniciantes",    "Pedro Souza", "05/04/2026", "Revisão"],
                            ["CSS Grid vs Flexbox",      "Julia Costa", "04/04/2026", "Publicado"],
                            ["POO com PHP",              "Carlos Melo", "03/04/2026", "Publicado"],
                            ["Deploy com Apache",        "Pedro Souza", "02/04/2026", "Rascunho"],
                            ["APIs REST com PHP",        "Ana Lima",    "01/04/2026", "Revisão"],
                        ];

                        for ($i = 0; $i < count($posts); $i++) {
                            $post   = $posts[$i];
                            $status = $post[3];
                            $classe = strtolower(str_replace('ã', 'a', iconv('UTF-8','ASCII//TRANSLIT',$status)));
                            echo "<tr>";
                            echo "  <td>" . ($i + 1) . "</td>";
                            echo "  <td>" . $post[0] . "</td>";
                            echo "  <td>" . $post[1] . "</td>";
                            echo "  <td>" . $post[2] . "</td>";
                            echo "  <td><span class=\"badge badge-{$classe}\">{$status}</span></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>

        </main>
    </div>

</body>
</html>
