  <style>
    .banner {
      background-color: 
      background-size: cover;
      background-position: center;
      color: white;
      z-index: 1; 
    }
    
    .banner-texto {
        background-color: #FCF5DE; 
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: #FCF5DE 0px 4px 12px;
    }

    .tittle, .sub-tittle, .tittle-sec {
          color: #333333; 
        }

    .tittle-sec {
      font-size: 2rem;
      font-weight: bold;
      padding-bottom: 20px;
    }

    .comprar {
      background-color: #762667;
      border-radius: 30px;
      padding: 0.5rem 1.25rem;
      font-weight: 500;
      color: white;
    }

    .comprar:hover {
      background-color: #8A2977;
      color: white;
    }

    .produto.card {
      border: #E0E0E0;
      object-fit: cover;
      box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 20px;
    }

    .card-img-top {
    height: 280px;
    object-fit: cover;
    }

    .ver-mais { 
      background-color: ;
      color: #D4AF37;
      font-size: 20px;
      font-weight: bold;
    }

    .ver-mais:hover {
        background-color: #B8941F;
        color: white;
      }

    /* Ajustes responsivos */
    @media (max-width: 768px) {
      .banner {
        min-height: 300px;
      }
      
      .banner-texto {
        padding: 1.5rem;
      }

      .ver-mais {
        background-color: #D4AF37;
        color: white;
      }
    }
  </style>

  <section class="banner text-center">
    <div class="container">
      <div class="banner-texto">
        <h2 class="tittle display-5 fl-bold">Moria Modas - Onde Estilo Encontra Economia</h2>
        <p class="sub-tittle lead">Do casual ao elegante, tudo em um só lugar.</p>
      </div>
    </div>
  </section>

  <main class="produtos container my-5">
    <h2 class="tittle-sec mb-4 text-center">Destaques</h2>

    <div class="row g-4">

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 text-center">
          <img src="./assets/images/saiamidi.jpeg" class="card-img-top" alt="Saia Midi Plissada">
          <div class="card-body">
            <h5 class="card-title"">Saia Midi Plissada</h3>
            <p class="card-text">R$ 129,90</p>
            <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20a%20Saia%20Midi%20Plissada!" target="_blank" class="btn comprar">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 text-center">
          <img src="./assets/images/camisalinho.jpeg" class="card-img-top" alt="Camisa de Linho">
          <div class="card-body">
            <h5 class="card-title">Camisa de Linho</h3>
            <p class="card-text">R$ 179,90</p>
            <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20a%20Camisa%20de%20Linho!" target="_blank" class="btn comprar">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 text-center">
          <img src="./assets/images/bone-furado.jpeg" class="card-img-top" alt="Boné 1">
          <div class="card-body">
            <h5 class="card-title">Boné furado</h5>
            <p class="card-text">R$ 149,90</p>
            <a href="#" class="btn comprar">Comprar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 text-center">
          <img src="./assets/images/bone-diferente.jpeg" class="card-img-top" alt="Boné 2">
          <div class="card-body">
            <h5 class="card-title">Boné diferente</h5>
            <p class="card-text">R$ 159,90</p>
            <a href="#" class="btn comprar">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <section class="text-center my-5">
    <div class="mais">
      <a href="roupas" class="btn ver-mais">Ver mais <i class="fas fa-plus"></i></a>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  