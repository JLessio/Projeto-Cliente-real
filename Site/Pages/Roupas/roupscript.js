// Produtos de exemplo
const produtos = [
  { nome: "Vestido Floral", preco: 129.90, categoria: "vestido", cor: "vermelho", tamanho: "M", comprimento: "curto" },
  { nome: "Camisa Jeans", preco: 79.90, categoria: "camisa", cor: "azul", tamanho: "G", comprimento: "médio" },
  { nome: "Blazer Preto", preco: 199.90, categoria: "blazer", cor: "preto", tamanho: "P", comprimento: "longo" },
  { nome: "Calça Saruel", preco: 89.90, categoria: "calça", cor: "preto", tamanho: "GG", comprimento: "médio" },
  { nome: "Vestido Longo", preco: 159.90, categoria: "vestido", cor: "azul", tamanho: "G", comprimento: "longo" },
  { nome: "Blusa de Malha", preco: 49.90, categoria: "camisa", cor: "branco", tamanho: "P", comprimento: "curto" },
  { nome: "Calça Jeans Feminina", preco: 99.90, categoria: "calça", cor: "azul", tamanho: "M", comprimento: "médio" },
  { nome: "Jaqueta de Couro", preco: 229.90, categoria: "blazer", cor: "preto", tamanho: "GG", comprimento: "longo" },
  { nome: "Saia Midi", preco: 89.90, categoria: "vestido", cor: "preto", tamanho: "G", comprimento: "médio" },
  { nome: "T-shirt Básica", preco: 39.90, categoria: "camisa", cor: "verde", tamanho: "M", comprimento: "curto" },
  { nome: "Blusa de Frio Feminina", preco: 119.90, categoria: "blazer", cor: "bege", tamanho: "P", comprimento: "longo" },
  { nome: "Saia Longa", preco: 69.90, categoria: "vestido", cor: "rosa", tamanho: "M", comprimento: "longo" },
  { nome: "Blusa de Tricô", preco: 59.90, categoria: "camisa", cor: "cinza", tamanho: "G", comprimento: "curto" },
  { nome: "Casaco de Inverno", preco: 299.90, categoria: "blazer", cor: "preto", tamanho: "GG", comprimento: "longo" },
  { nome: "Calça de Couro", preco: 149.90, categoria: "calça", cor: "preto", tamanho: "P", comprimento: "médio" },
  { nome: "Camisa Social", preco: 89.90, categoria: "camisa", cor: "branca", tamanho: "M", comprimento: "médio" },
  { nome: "Blusa de Manga Longa", preco: 79.90, categoria: "camisa", cor: "azul", tamanho: "G", comprimento: "médio" },
  { nome: "Shorts Jeans", preco: 59.90, categoria: "calça", cor: "azul", tamanho: "P", comprimento: "curto" },
  { nome: "Saia Curta", preco: 49.90, categoria: "vestido", cor: "preto", tamanho: "G", comprimento: "curto" },
  { nome: "Vestido de Renda", preco: 199.90, categoria: "vestido", cor: "branco", tamanho: "M", comprimento: "longo" },
  { nome: "Blazer xadrez", preco: 179.90, categoria: "blazer", cor: "xadrez", tamanho: "M", comprimento: "médio" },
  { nome: "Blusa de Seda", preco: 89.90, categoria: "camisa", cor: "rosa", tamanho: "GG", comprimento: "curto" },
  { nome: "Camisa Polo", preco: 69.90, categoria: "camisa", cor: "verde", tamanho: "G", comprimento: "médio" },
  { nome: "Calça Flare", preco: 119.90, categoria: "calça", cor: "preto", tamanho: "P", comprimento: "médio" },
  { nome: "Blusa de Algodão", preco: 39.90, categoria: "camisa", cor: "amarelo", tamanho: "M", comprimento: "curto" },
  { nome: "Camisa de Manga Curta", preco: 59.90, categoria: "camisa", cor: "roxo", tamanho: "GG", comprimento: "curto" },
  { nome: "Jaqueta Jeans", preco: 149.90, categoria: "blazer", cor: "azul", tamanho: "P", comprimento: "médio" },
  { nome: "Calça Cintura Alta", preco: 109.90, categoria: "calça", cor: "cinza", tamanho: "G", comprimento: "médio" },
  { nome: "Blusa de Manga Curta", preco: 49.90, categoria: "camisa", cor: "verde", tamanho: "P", comprimento: "curto" },
  { nome: "Saia Evasê", preco: 69.90, categoria: "vestido", cor: "preto", tamanho: "M", comprimento: "curto" },
  { nome: "Vestido Tubinho", preco: 139.90, categoria: "vestido", cor: "bege", tamanho: "GG", comprimento: "médio" },
  { nome: "Jaqueta de Lã", preco: 229.90, categoria: "blazer", cor: "cinza", tamanho: "M", comprimento: "longo" },
  { nome: "Camisa de Linho", preco: 79.90, categoria: "camisa", cor: "branco", tamanho: "P", comprimento: "médio" },
  { nome: "Blusa de Botões", preco: 89.90, categoria: "camisa", cor: "preto", tamanho: "M", comprimento: "curto" },
  { nome: "Calça Skinny", preco: 99.90, categoria: "calça", cor: "preto", tamanho: "G", comprimento: "médio" },
  { nome: "T-shirt Colorida", preco: 59.90, categoria: "camisa", cor: "laranja", tamanho: "P", comprimento: "curto" },
  { nome: "Vestido de Poá", preco: 119.90, categoria: "vestido", cor: "azul", tamanho: "G", comprimento: "curto" },
  { nome: "Blusa de Moletom", preco: 89.90, categoria: "camisa", cor: "cinza", tamanho: "GG", comprimento: "médio" },
  { nome: "Camisa Estampada", preco: 79.90, categoria: "camisa", cor: "branca", tamanho: "P", comprimento: "médio" },
  { nome: "Shorts de Cintura Alta", preco: 69.90, categoria: "calça", cor: "preto", tamanho: "M", comprimento: "curto" },
  { nome: "Saia Plissada", preco: 79.90, categoria: "vestido", cor: "bege", tamanho: "P", comprimento: "curto" },
  { nome: "Blusa de Veludo", preco: 129.90, categoria: "camisa", cor: "preto", tamanho: "GG", comprimento: "médio" },
  { nome: "Blusa Decote V", preco: 79.90, categoria: "camisa", cor: "verde", tamanho: "M", comprimento: "curto" },
  { nome: "Calça Cargo", preco: 109.90, categoria: "calça", cor: "khaki", tamanho: "G", comprimento: "médio" },
  { nome: "Saia Listrada", preco: 59.90, categoria: "vestido", cor: "azul", tamanho: "M", comprimento: "médio" },
  { nome: "Blusa de Manga Curta", preco: 39.90, categoria: "camisa", cor: "vermelho", tamanho: "P", comprimento: "curto" },
  { nome: "Calça Pantacourt", preco: 89.90, categoria: "calça", cor: "preto", tamanho: "GG", comprimento: "médio" },
  { nome: "Vestido Midi", preco: 149.90, categoria: "vestido", cor: "branco", tamanho: "G", comprimento: "médio" },
  { nome: "Blusa Tricot", preco: 119.90, categoria: "camisa", cor: "rosa", tamanho: "P", comprimento: "curto" },
  { nome: "Saia Evasê", preco: 69.90, categoria: "vestido", cor: "vermelho", tamanho: "M", comprimento: "curto" },
  { nome: "Blusa Cropped", preco: 49.90, categoria: "camisa", cor: "preto", tamanho: "P", comprimento: "curto" },
  { nome: "T-shirt Básica", preco: 39.90, categoria: "camisa", cor: "azul", tamanho: "M", comprimento: "curto" },
  { nome: "Vestido Midi", preco: 159.90, categoria: "vestido", cor: "preto", tamanho: "G", comprimento: "médio" },
  { nome: "Blazer de Lã", preco: 199.90, categoria: "blazer", cor: "cinza", tamanho: "GG", comprimento: "longo" },
  { nome: "Saia Curta", preco: 49.90, categoria: "vestido", cor: "verde", tamanho: "M", comprimento: "curto" },
  { nome: "Camisa de Manga Longa", preco: 79.90, categoria: "camisa", cor: "bege", tamanho: "G", comprimento: "médio" },
  { nome: "Calça Jeans", preco: 89.90, categoria: "calça", cor: "azul", tamanho: "GG", comprimento: "médio" },
  { nome: "Jaqueta Bomber", preco: 149.90, categoria: "blazer", cor: "preto", tamanho: "M", comprimento: "curto" },
  { nome: "Blusa com Babado", preco: 79.90, categoria: "camisa", cor: "branco", tamanho: "P", comprimento: "curto" },
  { nome: "Camisa de Algodão", preco: 69.90, categoria: "camisa", cor: "azul", tamanho: "GG", comprimento: "médio" },
  { nome: "Saia Midi", preco: 109.90, categoria: "vestido", cor: "preto", tamanho: "M", comprimento: "médio" },
  { nome: "Blusa de Crochê", preco: 89.90, categoria: "camisa", cor: "branco", tamanho: "M", comprimento: "curto" },
  { nome: "Saia de Couro", preco: 149.90, categoria: "vestido", cor: "preto", tamanho: "G", comprimento: "médio" },
  { nome: "Calça de Alfaiataria", preco: 119.90, categoria: "calça", cor: "cinza", tamanho: "M", comprimento: "médio" },
  { nome: "Blusa de Decote Redondo", preco: 59.90, categoria: "camisa", cor: "rosa", tamanho: "GG", comprimento: "curto" },
  { nome: "Vestido de Tricot", preco: 159.90, categoria: "vestido", cor: "preto", tamanho: "P", comprimento: "longo" },
  { nome: "Casaco de Pelúcia", preco: 219.90, categoria: "blazer", cor: "bege", tamanho: "M", comprimento: "longo" },
  { nome: "T-shirt Oversized", preco: 79.90, categoria: "camisa", cor: "branco", tamanho: "G", comprimento: "curto" },
  { nome: "Blusa com Laço", preco: 89.90, categoria: "camisa", cor: "azul", tamanho: "M", comprimento: "curto" },
  { nome: "Calça Jogger", preco: 99.90, categoria: "calça", cor: "preto", tamanho: "P", comprimento: "médio" },
  { nome: "Vestido Estampado", preco: 119.90, categoria: "vestido", cor: "floral", tamanho: "G", comprimento: "curto" },
  { nome: "Blusa de Gola Alta", preco: 79.90, categoria: "camisa", cor: "cinza", tamanho: "P", comprimento: "médio" },
  { nome: "Saia de Tule", preco: 89.90, categoria: "vestido", cor: "branco", tamanho: "G", comprimento: "curto" },
  { nome: "Camisa de Manga Longa", preco: 79.90, categoria: "camisa", cor: "verde", tamanho: "M", comprimento: "médio" },
  { nome: "Calça de Veludo", preco: 129.90, categoria: "calça", cor: "preto", tamanho: "GG", comprimento: "médio" },
  { nome: "Vestido de Veludo", preco: 159.90, categoria: "vestido", cor: "roxo", tamanho: "M", comprimento: "longo" },
  { nome: "Blusa de Seda", preco: 109.90, categoria: "camisa", cor: "bege", tamanho: "P", comprimento: "curto" },
  { nome: "Saia Estampada", preco: 89.90, categoria: "vestido", cor: "floral", tamanho: "M", comprimento: "curto" },
  { nome: "Jaqueta Bomber", preco: 179.90, categoria: "blazer", cor: "preto", tamanho: "G", comprimento: "curto" },
  { nome: "Blusa de Manga Longa", preco: 69.90, categoria: "camisa", cor: "branco", tamanho: "M", comprimento: "curto" },
  { nome: "Vestido Justo", preco: 149.90, categoria: "vestido", cor: "preto", tamanho: "GG", comprimento: "curto" },
  { nome: "Blusa de Tricô", preco: 99.90, categoria: "camisa", cor: "cinza", tamanho: "P", comprimento: "médio" },
  { nome: "Saia Longa", preco: 129.90, categoria: "vestido", cor: "preto", tamanho: "G", comprimento: "longo" },
  { nome: "T-shirt Básica", preco: 39.90, categoria: "camisa", cor: "verde", tamanho: "M", comprimento: "curto" },
  { nome: "Camisa de Listras", preco: 89.90, categoria: "camisa", cor: "preto e branco", tamanho: "GG", comprimento: "médio" },
  { nome: "Saia Plissada", preco: 69.90, categoria: "vestido", cor: "azul", tamanho: "M", comprimento: "médio" },
  { nome: "Blusa Canelada", preco: 69.90, categoria: "camisa", cor: "preto", tamanho: "G", comprimento: "curto" },
  { nome: "Casaco de Tricô", preco: 139.90, categoria: "blazer", cor: "cinza", tamanho: "M", comprimento: "longo" },
  { nome: "Calça Pantacourt", preco: 119.90, categoria: "calça", cor: "bege", tamanho: "P", comprimento: "médio" },
  { nome: "Blusa de Malha", preco: 49.90, categoria: "camisa", cor: "vermelho", tamanho: "M", comprimento: "curto" },
  { nome: "Saia Midi", preco: 109.90, categoria: "vestido", cor: "branco", tamanho: "P", comprimento: "médio" },
  { nome: "Blusa Decote V", preco: 79.90, categoria: "camisa", cor: "roxo", tamanho: "M", comprimento: "curto" },
  { nome: "Vestido Casual", preco: 159.90, categoria: "vestido", cor: "bege", tamanho: "G", comprimento: "médio" },
  { nome: "Blazer Slim", preco: 229.90, categoria: "blazer", cor: "azul", tamanho: "GG", comprimento: "longo" },
  { nome: "Camisa de Gola Polo", preco: 79.90, categoria: "camisa", cor: "branca", tamanho: "P", comprimento: "médio" },
  { nome: "Saia de Cintura Alta", preco: 69.90, categoria: "vestido", cor: "preto", tamanho: "G", comprimento: "curto" },
  { nome: "Blusa de Manga Curta", preco: 59.90, categoria: "camisa", cor: "amarelo", tamanho: "M", comprimento: "curto" },
  { nome: "Calça Legging", preco: 59.90, categoria: "calça", cor: "preto", tamanho: "P", comprimento: "curto" },
  { nome: "Jaqueta de Couro", preco: 239.90, categoria: "blazer", cor: "preto", tamanho: "M", comprimento: "longo" },
  { nome: "Blusa de Gola Alta", preco: 69.90, categoria: "camisa", cor: "branco", tamanho: "P", comprimento: "curto" }
];


const gridProdutos = document.getElementById('grid-produtos');
const contador = document.getElementById('contador');

// Função para gerar os cards de produtos
function gerarCards(produtosFiltrados) {
  gridProdutos.innerHTML = ''; // Limpar o conteúdo atual

  produtosFiltrados.forEach(produto => {
    const card = document.createElement('div');
    card.classList.add('card-produto', produto.categoria);
    card.innerHTML = `
      <img src="https://via.placeholder.com/300x400" alt="${produto.nome}">
      <h3>${produto.nome}</h3>
      <p class="preco">R$ ${produto.preco.toFixed(2)}</p>
      <a href="https://wa.me/5599999999999?text=Olá,%20quero%20comprar%20esse%20produto!" class="botao-comprar" target="_blank">Comprar</a>
    `;
    gridProdutos.appendChild(card);
  });

  // Atualiza o contador de resultados
  contador.textContent = produtosFiltrados.length;
}

// Função para filtrar produtos
function filtrarProdutos() {
  const filtroPreco = document.getElementById('filtro-preco').value;
  const filtroTamanho = document.getElementById('filtro-tamanho').value;
  const filtroComprimento = document.getElementById('filtro-comprimento').value;
  const filtroCor = document.getElementById('filtro-cor').value;
  const filtroCategoria = document.getElementById('filtro-categoria').value;

  let produtosFiltrados = produtos;

  // Aplicar filtros
  if (filtroPreco) {
    produtosFiltrados = produtosFiltrados.filter(produto => {
      if (filtroPreco === "ate50") return produto.preco <= 50;
      if (filtroPreco === "50a100") return produto.preco > 50 && produto.preco <= 100;
      if (filtroPreco === "100a200") return produto.preco > 100 && produto.preco <= 200;
      if (filtroPreco === "acima200") return produto.preco > 200;
      return true;
    });
  }

  if (filtroTamanho) {
    produtosFiltrados = produtosFiltrados.filter(produto => produto.tamanho === filtroTamanho);
  }

  if (filtroComprimento) {
    produtosFiltrados = produtosFiltrados.filter(produto => produto.comprimento === filtroComprimento);
  }

  if (filtroCor) {
    produtosFiltrados = produtosFiltrados.filter(produto => produto.cor === filtroCor);
  }

  if (filtroCategoria) {
    produtosFiltrados = produtosFiltrados.filter(produto => produto.categoria === filtroCategoria);
  }

  gerarCards(produtosFiltrados);
}

// Adicionar event listeners aos filtros
document.getElementById('filtro-preco').addEventListener('change', filtrarProdutos);
document.getElementById('filtro-tamanho').addEventListener('change', filtrarProdutos);
document.getElementById('filtro-comprimento').addEventListener('change', filtrarProdutos);
document.getElementById('filtro-cor').addEventListener('change', filtrarProdutos);
document.getElementById('filtro-categoria').addEventListener('change', filtrarProdutos);

// Chamar a função para gerar os cards iniciais
filtrarProdutos();
