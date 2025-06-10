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
    'imagem' => $base_img . 'Vestido-Floral.jpeg',
    'nome' => 'Vestido Floral',
    'preco' => 'R$ 149,90',
    'link' => gerarLinkWhatsapp('Vestido Floral'),
    'categoria' => 'Vestidos'
  ],
  [
    'imagem' => $base_img . 'blazer_alfaiataria.jpg',
    'nome' => 'Blazer Alfaiataria',
    'preco' => 'R$ 199,90',
    'link' => gerarLinkWhatsapp('Blazer Alfaiataria'),
    'categoria' => 'Casacos'
  ],
  [
    'imagem' => $base_img . 'oversized.jpg',
    'nome' => 'Camisa Oversized',
    'preco' => 'R$ 89,90',
    'link' => gerarLinkWhatsapp('Camisa Oversized'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'shorts-curto.jpeg',
    'nome' => 'Calça Wide Leg',
    'preco' => 'R$ 39,90',
    'link' => gerarLinkWhatsapp('Shorts Curto Reto'),
    'categoria' => 'Calças'
  ],
  [
    'imagem' => $base_img . 'vestido-estampado.jpg', // Supondo que seja o mesmo vestido com nome diferente
    'nome' => 'Vestido Longo Estampado',
    'preco' => 'R$ 179,90',
    'link' => gerarLinkWhatsapp('Vestido Longo Estampado'),
    'categoria' => 'Vestidos'
  ],
  [
    'imagem' => $base_img . 'blazer-slimfit.jpeg',
    'nome' => 'Blazer Slim Fit',
    'preco' => 'R$ 219,90',
    'link' => gerarLinkWhatsapp('Blazer Slim Fit'),
    'categoria' => 'Casacos'
  ],
  [
    'imagem' => $base_img . 'cropped.jpeg',
    'nome' => 'Blusa Cropped',
    'preco' => 'R$ 69,90',
    'link' => gerarLinkWhatsapp('Blusa Cropped'),
    'categoria' => 'Blusas'
  ],
  [
    'imagem' => $base_img . 'wide-leg.jpeg',
    'nome' => 'Calça Wide Leg',
    'preco' => 'R$ 139,90',
    'link' => gerarLinkWhatsapp('Calça Wide Leg'),
    'categoria' => 'Calças'
  ],
  [
    'imagem' => $base_img . 'calca-reta.jpeg',
    'nome' => 'Calça Reta de Alfaiataria',
    'preco' => 'R$ 159,90',
    'link' => gerarLinkWhatsapp('Calça Reta com Bolsos de Alfaiataria'),
    'categoria' => 'Calças'
  ],
  [
    'imagem' => $base_img . 'saiamidi.jpeg', // Corrigido para o nome do arquivo existente
    'nome' => 'Saia Longa Plissada',
    'preco' => 'R$ 119,90',
    'link' => gerarLinkWhatsapp('Saia Longa Plissada'),
    'categoria' => 'Saias'
  ],
  [
    'imagem' => $base_img . 'casaco_tricot.jpeg', // Use o nome correto se tiver outro para "casaco tricot"
    'nome' => 'Casaco de Tricot',
    'preco' => 'R$ 159,90',
    'link' => gerarLinkWhatsapp('Casaco de Tricot'),
    'categoria' => 'Casacos'
  ]
];
