<style>
/* Página de roupas */

.banner {
  background-color: 
  background-size: cover;
  background-position: center;
  color: white;
  z-index: 1; 
  /* margin-top: 30px; */
}
    
.banner-texto {
  background-color: #FCF5DE; 
  padding: 1rem;
  border-radius: 0.5rem;
  box-shadow: #FCF5DE 0px 4px 12px;
}

.tittle {
  color: #333333;
}

.pagina-roupas {
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
}

.btn {
  border-radius: 30px;
}

.barra-filtros {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-bottom: 30px;
}

.barra-filtros h2 {
  font-size: 1.5rem;
  text-align: center;
}

.barra-filtros span {
  font-size: 1rem;
  text-align: center;
}

.filtros {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
}

.filtros select {
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-family: inherit;
  background-color: #f8f8f8;
  cursor: pointer;
}

.close {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.icone {
  background-color: white;
  color: #ffc107;
  border: none;
  transition: background 0.3s;
  font-size: 1.8rem !important;
}

.filtros button:hover {
  background-color: #c2185b;
}

/* Grid de produtos */
.grid-produtos {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 20px;
}

.produto-card {
  background: #fafafa;
  border-radius: 10px;
  overflow: hidden;
  padding: 15px;
  text-align: center;
  box-shadow: 0 2px 8px #FCF5DE;
  transition: transform 0.2s ease;
}

.produto-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px #FCF5DE;
}

.produto-card img {
  height: 300px;
  object-fit: cover;
}

.produto-card h3 {
  font-size: 1rem;
  margin-bottom: 5px;
}

.produto-card p {
  color: black !important;
  font-weight: bold;
  margin-bottom: 10px;
}

.filtro.ativo {
  background-color: #ffc107;
  color: black;
  border: 1px solid #ffc107;
}

/* Botão comprar */
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

/* Responsivo geral */
@media (max-width: 600px) {
  .banner {
        min-height: 300px;
      }
      
  .banner-texto {
    padding: 1.5rem;
  }

  .filtros {
    flex-direction: column;
    width: 100%;
  }

  .filtros select,
  .filtros button {
    width: 100%;
  }

  .barra-filtros {
    align-items: center;
  }
}
</style>

<section class="banner text-center">
    <div class="container">
      <div class="banner-texto">
        <h1 class="tittle display-5 fl-bold">Catálogo de Roupas</h1>
      </div>
    </div>
  </section>

<div class="container py-5">
  <!-- Filtros -->
  <div class="row mb-4">
    <div class="col-md-12">
      <div class="d-flex flex-wrap justify-content-center gap-2">
        <button class="btn btn-outline-warning filtro" data-categoria="Todos">Todos</button>
        <button class="btn btn-outline-warning filtro" data-categoria="Vestidos">Vestidos</button>
        <button class="btn btn-outline-warning filtro" data-categoria="Blusas">Blusas</button>
        <button class="btn btn-outline-warning filtro" data-categoria="Calças">Calças</button>
        <button class="btn btn-outline-warning filtro" data-categoria="Saias">Saias</button>
        <button class="btn btn-outline-warning filtro" data-categoria="Casacos">Casacos</button>
        <button class="close limpar-filtros" alt="Limpar filtros"><i class="icone fa-solid fa-trash"></i></button>
      </div>
    </div>
  </div>

  <!-- Grade de Produtos -->
  <div class="row">
    <?php
    // Array de produtos 
    include './produtos/produtos.php';

    // Exibir produtos
    foreach ($produtos as $produto) {
      echo '<div class="col-sm-6 col-md-4 col-lg-3 mb-4 produto" data-categoria="' . $produto['categoria'] . '">';
      echo '<div class="card produto-card h-100">';
      echo '<img src="' . $produto['imagem'] . '" class="card-img-top" alt="' . $produto['nome'] . '">';
      echo '<div class="card-body text-center">';
      echo '<h5 class="card-title">' . $produto['nome'] . '</h5>';
      echo '<p class="card-text">' . $produto['preco'] . '</p>';
      echo '<a href="' . $produto['link'] . '" target="_blank" class="btn comprar">Comprar</a>';
      echo '</div></div></div>';
    }
    ?>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  const botoesFiltro = document.querySelectorAll('.filtro');
  const botaoLimpar = document.querySelector('.limpar-filtros');
  const produtos = document.querySelectorAll('.produto');

  botoesFiltro.forEach(botao => {
    botao.addEventListener('click', function () {
      const categoriaSelecionada = this.getAttribute('data-categoria');

      // Atualiza os produtos exibidos com base na categoria selecionada
      produtos.forEach(produto => {
        const categoriaProduto = produto.getAttribute('data-categoria');
        if (categoriaSelecionada === 'Todos' || categoriaProduto === categoriaSelecionada) {
          produto.style.display = 'block';
        } else {
          produto.style.display = 'none';
        }
      });

      // Remove a classe 'ativo' de todos os botões de filtro
      botoesFiltro.forEach(btn => btn.classList.remove('ativo'));

      // Adiciona a classe 'ativo' ao botão clicado
      this.classList.add('ativo');
    });
  });

  // Lida com o botão "Limpar Filtros"
  if (botaoLimpar) {
    botaoLimpar.addEventListener('click', function () {
      // Exibe todos os produtos
      produtos.forEach(produto => {
        produto.style.display = 'block';
      });

      // Remove a classe 'ativo' de todos os botões de filtro
      botoesFiltro.forEach(btn => btn.classList.remove('ativo'));
    });
  }
});
</script>