<style>
  .banner {
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
        <img src="./assets/images/bone.jpg" class="card-img-top" alt="Boné">
        <div class="card-body">
          <h5 class="card-title">Boné</h5>
          <!-- <p class="card-text">R$ 16,90</p> -->
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20Boné!" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/cueca de algodao.jpg" class="card-img-top" alt="Cueca de algodão">
        <div class="card-body">
          <h5 class="card-title">Cueca de algodão</h5>
          <!-- <p class="card-text">R$ 9,90</p> -->
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20Cueca%20De%20Algodão!" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/bone-furado.jpg" class="card-img-top" alt="Boné Malha Fresca">
        <div class="card-body">
          <h5 class="card-title">Boné Malha Fresca</h5>
          <!-- <p class="card-text">R$ 16,90</p> -->
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20Boné%20Malha!" target="_blank" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 text-center">
        <img src="./assets/images/cueca malha.jpg" class="card-img-top" alt="Cueca Microfibra">
        <div class="card-body">
          <h5 class="card-title">Cueca Microfibra</h5>
          <!-- <p class="card-text">R$ 5,90</p> -->
          <a href="https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20Cueca%20De%20Microfibra!" class="btn comprar">Comprar</a>
        </div>
      </div>
    </div>
  </div>
</section>
