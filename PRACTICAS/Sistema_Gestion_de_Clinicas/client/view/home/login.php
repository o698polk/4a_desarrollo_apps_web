<html>

<?php  include_once("../app/head.php"); ?>


<?php  include_once("../app/nav.php"); ?>
<body>
<main class="main">
    <section id="login" class="login section">
        <div class="container" data-aos="fade-up">
            <div class="login-container">
                <div class="login-form-box">
                    <h2>Iniciar Sesión</h2>
                    <p class="text-muted mb-4">Bienvenido de vuelta</p>
                    
                    <form class="login-form" action="" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Recordarme</label>
                            <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                        </div>

                        <button type="submit" class="btn-login-submit">Iniciar Sesión</button>
                        
                        <div class="divider">
                            <span>o</span>
                        </div>
                        
                        <button type="button" class="btn-google">
                            <img src="https://www.google.com/favicon.ico" alt="Google Icon">
                            Continuar con Google
                        </button>
                        
                        <p class="register-link">
                            ¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
    
</body>


<?php  include_once("../app/footer.php"); ?>


</html>

<style>
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    padding: 2rem 0;
}

.login-form-box {
    background: white;
    padding: 2.5rem;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.login-form-box h2 {
    color: #1977cc;
    text-align: center;
    margin-bottom: 0.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #1977cc;
    outline: none;
}

.form-check {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.forgot-password {
    color: #1977cc;
    text-decoration: none;
    font-size: 0.9rem;
}

.btn-login-submit {
    width: 100%;
    padding: 12px;
    background: #1977cc;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 500;
    transition: background 0.3s ease;
}

.btn-login-submit:hover {
    background: #1565c0;
}

.divider {
    text-align: center;
    margin: 1.5rem 0;
    position: relative;
}

.divider::before,
.divider::after {
    content: "";
    position: absolute;
    top: 50%;
    width: 45%;
    height: 1px;
    background: #ddd;
}

.divider::before {
    left: 0;
}

.divider::after {
    right: 0;
}

.divider span {
    background: white;
    padding: 0 10px;
    color: #666;
    font-size: 0.9rem;
}

.btn-google {
    width: 100%;
    padding: 12px;
    background: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn-google:hover {
    background: #f5f5f5;
}

.btn-google img {
    width: 18px;
    height: 18px;
}

.register-link {
    text-align: center;
    margin-top: 1.5rem;
    font-size: 0.9rem;
}

.register-link a {
    color: #1977cc;
    text-decoration: none;
    font-weight: 500;
}

@media (max-width: 768px) {
    .login-form-box {
        margin: 1rem;
        padding: 1.5rem;
    }
}
</style>