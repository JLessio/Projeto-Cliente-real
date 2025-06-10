<style>
.navbar-collapse {
  transition: height 0.3s ease;
}

.navbar {
  background-color: #A23B8F;
}

.nav-link {
  color: white !important;
}

.nav-link:hover {
  color: #D4AF37 !important;
  transition: color 0.3s ease;
}

.logo {
  color: white !important;
  text-decoration: none;
}

.navbar-toggler {
  background-color: #ffffff !important;
}
</style>

<header class="bg-primary text-center mb-4">
      <!-- Menu de Navegação -->
  <nav class="navbar navbar-expand-lg navbar-light">
  
    <div class="container">
      <a href="home" class="logo h4 mb-0">Moria Modas</a>
      <!-- Botão Hamburguer -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <?php 
            if ($param != 'home'){  
            ?>
              <a href="home" class="nav-link">Pagina inicial</a>
            <?php
                }
            ?>
            </li>
            <li class="nav-item">
              <?php 
            if ($param != 'roupas'){  
            ?>
              <a href="roupas" class="nav-link">Catálogo</a>
            <?php
                }
            ?>
            </li>
            <li class="nav-item">
              <?php 
            if ($param != 'acessorios'){  
            ?>
              <a href="acessorios" class="nav-link">Acessórios</a>
            <?php
                }
            ?>
            </li>
            <li class="nav-item">
              <?php 
            if ($param != 'contato'){  
            ?>
              <a href="contato" class="nav-link">Contato</a>
            <?php
                }
            ?>
            </li>
        </ul>
      </div>  
    </div>
  </nav>
</header>
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS Bundle (inclui Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarNav');
    const navLinks = document.querySelectorAll('.nav-link');

    // Fecha o menu ao clicar em qualquer link
    navLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        if (navbarCollapse.classList.contains('show')) {
          navbarToggler.click();
        }
      });
    });

    // Fecha o menu ao clicar novamente no botão hambúrguer
    navbarToggler.addEventListener('click', function () {
      if (navbarCollapse.classList.contains('show')) {
        navbarCollapse.classList.remove('show');
      } else {
        navbarCollapse.classList.add('show');
      }
    });
  });
</script>