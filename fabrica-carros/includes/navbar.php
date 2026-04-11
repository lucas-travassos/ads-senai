<?php
function renderNavbar()
{
    return '
    <header class="navbar-professional">
        <div class="navbar-container">
            <div class="navbar-brand">
                <a href="../visualizacao/index.php" style="text-decoration: none; color: inherit; display: flex; align-items: center; gap: 15px;">
                    <div class="logo-icon">
                        <img src="../assets/img/logo_inovadora.png" alt="Logo Inovadora" style="height: 40px;">
                    </div>
                    <div class="logo-text">
                        <span class="logo-main">FÁBRICA DE CARROS</span>
                        <span class="logo-subtitle">Sistema de Gestão</span>
                    </div>
                </a>
            </div>

            <nav class="navbar-nav">
                <ul class="nav-menu-list">

                    <!-- Home -->
                    <li class="nav-item">
                        <a href="../visualizacao/index.php" class="nav-link">
                            <span class="nav-icon">
                                <img src="../assets/img/casa.png" alt="Home" style="width: 20px; height: 20px;">
                            </span>
                            <span class="nav-text">Home</span>
                        </a>
                    </li>

                    <!-- Fabricar -->
                    <li class="nav-item">
                        <form action="../controlador/processa.php" method="POST" class="nav-form">
                            <input type="hidden" name="acao" value="fabricar">
                            <button type="submit" class="nav-link nav-button">
                                <span class="nav-icon">
                                    <img src="../assets/img/ferramenta.png" alt="Fabricar" style="width: 20px; height: 20px;">
                                </span>
                                <span class="nav-text">Fabricar</span>
                            </button>
                        </form>
                    </li>

                    <!-- Vender -->
                    <li class="nav-item">
                        <form action="../controlador/processa.php" method="POST" class="nav-form">
                            <input type="hidden" name="acao" value="vender">
                            <button type="submit" class="nav-link nav-button">
                                <span class="nav-icon">
                                    <img src="../assets/img/aperto.png" alt="Vender" style="width: 22px; height: 22px;">
                                </span>
                                <span class="nav-text">Vender</span>
                            </button>
                        </form>
                    </li>

                    <!-- Estoque -->
                    <li class="nav-item">
                        <form action="../controlador/processa.php" method="POST" class="nav-form">
                            <input type="hidden" name="acao" value="ver_info">
                            <button type="submit" class="nav-link nav-button">
                                <span class="nav-icon">
                                    <img src="../assets/img/garagem.png" alt="Estoque" style="width: 22px; height: 22px;">
                                </span>
                                <span class="nav-text">Estoque</span>
                            </button>
                        </form>
                    </li>

                    <!-- Finalizar Sessão -->
                    <li class="nav-item">
                        <form action="../controlador/processa.php" method="POST" class="nav-form">
                            <input type="hidden" name="acao" value="finalizar_sessao">
                            <button type="submit" class="nav-link nav-button nav-danger">
                                <span class="nav-icon">
                                    <img src="../assets/img/excluir.png" alt="Finalizar Sessão" style="width: 22px; height: 22px;">
                                </span>
                                <span class="nav-text">Finalizar</span>
                            </button>
                        </form>
                    </li>

                </ul>
            </nav>
        </div>
    </header>';
}
?>
