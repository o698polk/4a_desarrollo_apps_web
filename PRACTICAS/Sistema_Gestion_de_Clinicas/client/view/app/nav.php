<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Clinica<span>APP</span></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">INICIO</a></li>
          <li><a href="#">NOSOTROS</a></li>
          <li><a href="#">SERVICIOS</a></li>
          <li><a href="#">CONTACTO</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="auth-buttons">
        <a class="btn-login" href="login.php">INICIAR SESIÓN</a>
        <a class="btn-register" href="register.php">REGISTRO</a>
      </div>
    </div>
</header>

<style>
.auth-buttons {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.btn-login, .btn-register {
    padding: 8px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-login {
    background-color: transparent;
    border: 2px solid #1977cc;
    color: #1977cc;
}

.btn-login:hover {
    background-color: #1977cc;
    color: white;
}

.btn-register {
    background-color: #1977cc;
    border: 2px solid #1977cc;
    color: white;
}

.btn-register:hover {
    background-color: #1565c0;
    border-color: #1565c0;
}

@media (max-width: 768px) {
    .auth-buttons {
        margin-top: 1rem;
        flex-direction: column;
        width: 100%;
    }
    
    .btn-login, .btn-register {
        width: 100%;
        text-align: center;
    }
}
</style>
