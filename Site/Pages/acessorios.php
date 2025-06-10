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

    .tittle {
          color: #333333; 
        }

  .card img {
  height: 200px;
  object-fit: cover;
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
}

.card {
  border-radius: 16px;
  box-shadow: 0 4px 12px #FCF5DE;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: scale(1.03);
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

@media (max-width: 576px) {
  .card img {
    height: 180px;
  }
}
</style>

<section class="banner text-center">
    <div class="container">
      <div class="banner-texto">
        <h2 class="tittle display-5 fl-bold">Acessórios</h2>
      </div>
    </div>
  </section>

<section class="container my-5">
  <div class="row g-4">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/bone-preto.jpg" class="card-img-top" alt="Boné preto">
        <div class="card-body">
          <h5 class="card-title">Boné Preto</h5>
          <p class="card-text">R$ 149,90</p>
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20Boné%20Preto!" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/boina-Newsboy.jpeg" class="card-img-top" alt="boina Newsboy">
        <div class="card-body">
          <h5 class="card-title">Boina Newsboy</h5>
          <p class="card-text">R$ 159,90</p>
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20a%20Boina%20Newsboy!" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/bone-furado.jpeg" class="card-img-top" alt="Boné Furado">
        <div class="card-body">
          <h5 class="card-title">Boné Furado</h5>
          <p class="card-text">R$ 159,90</p>
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20Boné%20Furado!" target="_blank" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/bone-quepe.jpeg" class="card-img-top" alt="Boné Quepe">
        <div class="card-body">
          <h5 class="card-title">Boné 4</h5>
          <p class="card-text">R$ 149,90</p>
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20Boné%20Quepe!" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>
  </div>
</section>
