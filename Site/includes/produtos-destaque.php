<main class="produtos">
  <h2>Destaques</h2>

  <div class="swiper">
    <div class="swiper-wrapper">
      <?php
      $produtos = [
        [
          "img" => "images/vestido floral.jpg",
          "nome" => "Vestido Floral",
          "preco" => "149,90"
        ],
        [
          "img" => "images/blazer_alfaiataria.jpg",
          "nome" => "Blazer Alfaiataria",
          "preco" => "199,90"
        ],
        [
          "img" => "images/oversized.jpg",
          "nome" => "Camisa Oversized",
          "preco" => "89,90"
        ],
        [
          "img" => "images/wide_leg.jpg",
          "nome" => "Calça Wide Leg",
          "preco" => "159,90"
        ]
      ];

      foreach ($produtos as $p) {
        $nomeUrl = urlencode($p['nome']);
        echo "
          <div class='swiper-slide produto'>
            <img src='{$p['img']}' alt='{$p['nome']}' />
            <h3>{$p['nome']}</h3>
            <p>R$ {$p['preco']}</p>
            <a href='https://wa.me/5544997040561?text=Olá,%20quero%20comprar%20o%20{$nomeUrl}!' target='_blank' class='comprar'>Comprar</a>
          </div>
        ";
      }
      ?>
    </div>

    <!-- Navegação do Swiper -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </div>
</main>

<script>
  const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    }
  });
</script>
