<?php
        $param = $_GET['param'] ?? 'home';
        //print_r($_GET);
        $pagina = 'pages/' . $param . '.php';
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Moria Modas</title>
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/images/logo-page.png" type="image/x-icon">


  
</head>
<body>
  <!-- Header     -->
<?php include 'includes/header.php'; ?>

  <!-- Conteúdo Principal -->

  <?php
        // Verifica se o arquivo existe antes de incluí-lo
    if (file_exists($pagina)) {
        include $pagina;
    } else {
        include 'pages/erro.php';
    }
  ?>

    <!-- Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Botão WhatsApp flutuante -->
<a href="https://wa.me/5544997040561" class="whatsapp-float" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
</a>

<!-- Bootstrap JS Bundle com Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Javascript Personalizado -->
<script src="assets/script.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>