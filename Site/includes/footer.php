<?php
// footer.php - Rodapé do site
?>
<style>
  footer {
    background-color: #8A2977;
  }

  i {
    color: #E9C969;
  }

  .fa-solid, .fa-brands  {
    font-size: 2.5rem;
    margin: 0 5px;
  }

.mapa-empresa {
  width: 100%;
  height: 100%;
  min-height: 200px;
  border-radius: 8px;
}

</style>
<footer class="text-white py-4 mt-5" id="contato">
  <div class="container">
    <div class="row flex-column flex-md-row">
      <!-- Mapa do Google -->
        <div class="col-md-4 mb-4 order-3 order-md-1">
          <div class="h-100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.5840587609223!2d-53.02034942499703!3d-24.186315984848612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f28b6c94cc677d%3A0x5b618d961e00d156!2sAv.%20Venezuela%2C%20300%20-%20Jardim%20Morumbi%2C%20Goioer%C3%AA%20-%20PR%2C%2087360-000!5e0!3m2!1spt-BR!2sbr!4v1746657708149!5m2!1spt-BR!2sbr"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      
      <!-- Informações da empresa -->
      <div class="col-md-4 mb-4 order-2 order-md-2 d-flex flex-column justify-content-center">
        <div class="info">
          <h4 class="h5">Moria Modas LTDA</h4>
          <p>CNPJ: 01.123.123.0001/01</p>
          <p><i class="fas fa-map-marker-alt"></i> R. Venezuela 300, Bairro Morumbi, Goioerê PR-BR</p>
          <p><i class="fas fa-phone"></i> (44) 9 9704-0561</p>
        </div>
      </div>
      
      <!-- Redes sociais e contato -->
      <div class="col-md-4 mb-4 order-1 order-md-3 d-flex flex-column justify-content-center">
        <h3 class="h5 mb-3">Entre em contato:</h3>
        <div class="d-flex gap-3 fs-3">
          <a href="https://www.instagram.com/moria_atacado/?img_index=1" target="_blank" class="text-white">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="mailto:contato@moria.com" target="_blank" class="text-white">
            <i class="fa-solid fa-envelope"></i>
          </a>
          <a href="https://wa.me/5544997040561" target="_blank" class="text-white">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 text-center mt-3">
        <p class="mb-0">&copy; 2025 Moria Modas. Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>
