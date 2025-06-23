<?php

// Caminho base das imagens
$base_img = './assets/images/';

// Função para gerar link do WhatsApp
function gerarLinkWhatsapp($produto) {
  $telefone = '5544997040561';
  $mensagem = "Olá, quero comprar " . $produto . "!";
  return "https://wa.me/$telefone?text=" . urlencode($mensagem);
}

$produtos = [
  [
    'imagem' => $base_img . 'blusa modal com botao.jpg',
    'nome' => 'Blusa Modal com Botão',
    'preco' => 'R$ 45,90',
    'link' => gerarLinkWhatsapp('Blusa Modal com Botão'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'blusa modal com pedras.jpg',
    'nome' => 'Blusa Modal com Pedras',
    'preco' => 'R$ 45,90',
    'link' => gerarLinkWhatsapp('Blusa Modal com Pedras'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'blusa modal.jpg',
    'nome' => 'Blusa Modal',
    'preco' => 'R$ 89,90',
    'link' => gerarLinkWhatsapp('Blusa Modal'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'blusa mousse.jpg',
    'nome' => 'Blusa Mousse',
    'preco' => 'R$ 53,90',
    'link' => gerarLinkWhatsapp('Blusa Mousse'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'blusa pelinho grosso.jpg', 
    'nome' => 'Blusa Pelinho Grosso',
    'preco' => 'R$ 42,90',
    'link' => gerarLinkWhatsapp('Blusa Pelinho Grosso'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'cacharrel.jpg',
    'nome' => 'Cacharrel',
    'preco' => 'R$ 19,90',
    'link' => gerarLinkWhatsapp('Cacharrel'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'calça jeans melissa.jpg',
    'nome' => 'Calça Jeans Melissa',
    'preco' => 'R$ 49,90',
    'link' => gerarLinkWhatsapp('Calça Jeans Melissa'),
    'categoria' => 'Calças'
  ],
  [
    'imagem' => $base_img . 'vestido bojo.jpg',
    'nome' => 'Vestido Bojo',
    'preco' => 'R$ 69,90',
    'link' => gerarLinkWhatsapp('Vestido Bojo'),
    'categoria' => 'Vestidos'
  ],
  [
    'imagem' => $base_img . 'casaco modal plus.jpg',
    'nome' => 'Casaco Modal Plus',
    'preco' => 'R$ 72,90',
    'link' => gerarLinkWhatsapp('Casaco Modal Plus'),
    'categoria' => 'Casacos'
  ],
  [
    'imagem' => $base_img . 'croopt modal com touca.jpg',
    'nome' => 'Croopt Modal com Touca',
    'preco' => 'R$ 39,90',
    'link' => gerarLinkWhatsapp('Croopt Modal com Touca'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'parka de pelinho.jpg', 
    'nome' => 'Parka de Pelinho',
    'preco' => 'R$ 49,90',
    'link' => gerarLinkWhatsapp('Parka de Pelinho'),
    'categoria' => 'Casacos'
  ],
  [
    'imagem' => $base_img . 'vestido canelado de lã.jpg',
    'nome' => 'Vestido Canelado de Lã',
    'preco' => 'R$ 67,90',
    'link' => gerarLinkWhatsapp('Vestido Canelado de Lã'),
    'categoria' => 'Vestidos'
  ],
  [
   'imagem' => $base_img . 'Vestido manga longa de Duna.jpg', 
   'nome' => 'Vestido Manga Longa de Duna',
   'preco' => 'R$ 69,90',
   'link' => gerarLinkWhatsapp('Vestido Manga Longa de Duna'),
   'categoria' => 'Vestidos'
  ]
];
