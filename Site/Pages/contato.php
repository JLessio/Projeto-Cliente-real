<?php
$pageTitle = "Contato - Moria Modas";
?>

  <style>
    body {
      background-color: white; 
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .contact-form-container {
      max-width: 700px; 
      width: 100%;     
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 50px auto;
      box-shadow: #FCF5DE;
    }

    .contact-form {
      border: #E0E0E0 solid 1px;
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .contact-form h2 {
      color: black;
      margin-bottom: 25px;
      text-align: center;
      font-weight: 600;
    }

    .form-label {
      font-weight: 500;
    }

    .form-control:focus, .form-select:focus {
      border-color: black;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .enviar {
      background-color: #762667;
      color: white;
      padding: 10px 30px;
      border: none;
      border-radius: 5px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .enviar:hover {
      background-color: #8A2977;
      transform: translateY(-2px);
      color: white !important;
    }

    /* Custom error message styling */
    .error-message {
      display: none; 
      width: 100%;
      margin-top: 0.25rem;
      font-size: .875em; 
      color: #dc3545; 
    }

    .error-message.visible {
      display: block; 
    }
    .form-control.is-invalid, .form-select.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + 0.75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }
    
    .form-control.is-valid, .form-select.is-valid {
      border-color: #198754; /* Bootstrap 5 success color */
      padding-right: calc(1.5em + 0.75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(0.375em + 0.1875rem) center;
      background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    /* .enviar:focus {
      animation: pulse 1.5s infinite;
    } */
  </style>
<body>
  <div class="contact-form-container">
    <div class="contact-form">
      <h2><i class="fas fa-envelope-open-text me-2"></i>Entre em Contato</h2>
      <form id="contactForm" novalidate>
        <!-- Nome e Email -->
        <div class="row mb-3">
          <div class="col-md-6 mb-3 mb-md-0">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required minlength="3" 
                   placeholder="Seu nome completo">
            <div class="error-message" id="nome-error">
              Por favor, informe seu nome completo (mínimo 3 caracteres).
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required 
                   placeholder="seu.email@exemplo.com">
            <div class="error-message" id="email-error">
              Por favor, informe um email válido.
            </div>
          </div>
        </div>

        <!-- Telefone e Gênero -->
        <div class="row mb-3">
          <div class="col-md-6 mb-3 mb-md-0">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required 
                   placeholder="(00) 00000-0000">
            <div class="error-message" id="telefone-error">
              Por favor, informe um telefone válido (Ex: (XX) XXXXX-XXXX).
            </div>
          </div>
          <div class="col-md-6">
            <label for="genero" class="form-label">Gênero</label>
            <select class="form-select" id="genero" name="genero" required>
              <option selected disabled value="">Selecione...</option>
              <option value="masculino">Masculino</option>
              <option value="feminino">Feminino</option>
            </select>
            <div class="error-message" id="genero-error">
              Por favor, selecione o gênero.
            </div>
          </div>
        </div>

        <!-- Cidade e CEP -->
        <div class="row mb-3">
          <div class="col-md-7 mb-3 mb-md-0">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required minlength="3"
                   placeholder="Sua cidade">
            <div class="error-message" id="cidade-error">
              Por favor, informe sua cidade (mínimo 3 caracteres).
            </div>
          </div>
          <div class="col-md-5">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required 
                   placeholder="00000-000">
            <div class="error-message" id="cep-error">
              Por favor, informe um CEP válido (Ex: 00000-000).
            </div>
          </div>
        </div>

        <!-- Mensagem -->
        <div class="mb-4">
          <label for="mensagem" class="form-label">Mensagem</label>
          <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required 
                    minlength="10" maxlength="500" placeholder="Digite sua mensagem aqui... (mínimo 10 caracteres)"></textarea>
          <div class="error-message" id="mensagem-error">
            Por favor, digite sua mensagem (mínimo 10 caracteres).
          </div>
          <div class="form-text text-end" id="charCount">0/500 caracteres</div>
        </div>

        <!-- Botão Enviar -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="enviar btn">
            <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
          </button>
        </div>
      </form>
    </div>
  </div>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Seleciona o formulário e os campos de entrada
      const contactForm = document.getElementById('contactForm');
      const nomeInput = document.getElementById('nome');
      const emailInput = document.getElementById('email');
      const telefoneInput = document.getElementById('telefone');
      const generoInput = document.getElementById('genero');
      const cidadeInput = document.getElementById('cidade'); // Novo campo Cidade
      const cepInput = document.getElementById('cep');       // Novo campo CEP
      const mensagemTextarea = document.getElementById('mensagem');
      const charCount = document.getElementById('charCount');

      // Seleciona os elementos de mensagem de erro
      const nomeError = document.getElementById('nome-error');
      const emailError = document.getElementById('email-error');
      const telefoneError = document.getElementById('telefone-error');
      const generoError = document.getElementById('genero-error');
      const cidadeError = document.getElementById('cidade-error'); // Novo erro Cidade
      const cepError = document.getElementById('cep-error');       // Novo erro CEP
      const mensagemError = document.getElementById('mensagem-error');

      // Objeto para contar quantas mensagens cada email enviou
      const emailMessageCount = {};

      // --- Event Listeners para Validação e Formatação --- 

      // Telefone: Apenas números e formatação (XX) XXXXX-XXXX
      telefoneInput.addEventListener('keypress', allowOnlyNumbers);
      telefoneInput.addEventListener('input', formatPhone);

      // CEP: Apenas números e formatação XXXXX-XXX
      cepInput.addEventListener('keypress', allowOnlyNumbers);
      cepInput.addEventListener('input', formatCEP);

      // Mensagem: Contador de caracteres
      mensagemTextarea.addEventListener('input', updateCharCount);

      // Validação em tempo real (ao digitar)
      nomeInput.addEventListener('input', () => validateField(nomeInput, isValidName, nomeError));
      emailInput.addEventListener('input', () => validateField(emailInput, isValidEmail, emailError));
      generoInput.addEventListener('change', () => validateField(generoInput, isValidGenero, generoError));
      cidadeInput.addEventListener('input', () => validateField(cidadeInput, isValidCidade, cidadeError)); // Valida Cidade ao digitar
      // Validação de telefone e CEP já ocorre no 'input' de formatação
      // Validação de mensagem já ocorre no 'input' do contador

      // Validação ao perder o foco (blur) - feedback mais assertivo
      nomeInput.addEventListener('blur', () => validateFieldWithFeedback(nomeInput, isValidName, nomeError, 'Nome inválido', 'Por favor, informe seu nome completo (mínimo 3 caracteres).'));
      emailInput.addEventListener('blur', () => validateFieldWithFeedback(emailInput, isValidEmail, emailError, 'Email inválido', 'Por favor, informe um email válido no formato seu@provedor.com.'));
      telefoneInput.addEventListener('blur', () => validateFieldWithFeedback(telefoneInput, isValidPhone, telefoneError, 'Telefone inválido', 'Informe um telefone válido com DDD (10 ou 11 dígitos). Ex: (XX) XXXXX-XXXX'));
      generoInput.addEventListener('blur', () => validateFieldWithFeedback(generoInput, isValidGenero, generoError, 'Gênero não selecionado', 'Por favor, selecione o gênero.'));
      cidadeInput.addEventListener('blur', () => validateFieldWithFeedback(cidadeInput, isValidCidade, cidadeError, 'Cidade inválida', 'Por favor, informe sua cidade (mínimo 3 caracteres).')); // Valida Cidade ao sair
      cepInput.addEventListener('blur', () => validateFieldWithFeedback(cepInput, isValidCEP, cepError, 'CEP inválido', 'Informe um CEP válido no formato 00000-000.')); // Valida CEP ao sair
      mensagemTextarea.addEventListener('blur', () => validateFieldWithFeedback(mensagemTextarea, isValidMessage, mensagemError, 'Mensagem curta', 'Por favor, digite uma mensagem com pelo menos 10 caracteres.'));

      // --- Funções Auxiliares --- 

      function allowOnlyNumbers(e) {
        const char = String.fromCharCode(e.which);
        if (!/[0-9]/.test(char)) {
          e.preventDefault();
          showToast('Apenas números!', 'Este campo aceita apenas números.', 'warning');
        }
      }

      function formatPhone() {
        let value = this.value.replace(/\D/g, '');
        const len = value.length;
        let formattedValue = '';
        if (len === 0) formattedValue = '';
        else if (len <= 2) formattedValue = `(${value}`;
        else if (len <= 6) formattedValue = `(${value.substring(0, 2)}) ${value.substring(2)}`;
        else if (len <= 10) formattedValue = `(${value.substring(0, 2)}) ${value.substring(2, 6)}-${value.substring(6)}`;
        else { value = value.substring(0, 11); formattedValue = `(${value.substring(0, 2)}) ${value.substring(2, 7)}-${value.substring(7)}`; }
        this.value = formattedValue;
        validateField(this, isValidPhone, telefoneError);
      }

      function formatCEP() {
        let value = this.value.replace(/\D/g, '');
        const len = value.length;
        let formattedValue = '';
        if (len === 0) formattedValue = '';
        else if (len <= 5) formattedValue = value;
        else { value = value.substring(0, 8); formattedValue = `${value.substring(0, 5)}-${value.substring(5)}`; }
        this.value = formattedValue;
        validateField(this, isValidCEP, cepError);
      }

      function updateCharCount() {
        const currentLength = this.value.length;
        charCount.textContent = `${currentLength}/500 caracteres`;
        charCount.style.color = currentLength >= 450 ? '#dc3545' : (currentLength >= 400 ? '#ffc107' : '');
        validateField(this, isValidMessage, mensagemError);
      }

      function showToast(title, text, icon) {
          Swal.fire({ title, text, icon, toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, timerProgressBar: true });
      }

      // --- Funções de Validação --- 

      function isValidName(name) { return name.trim().length >= 3; }
      function isValidEmail(email) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email); }
      function isValidPhone(phone) { const nums = phone.replace(/\D/g, ''); return nums.length >= 10 && nums.length <= 11; }
      function isValidGenero(genero) { return genero !== ""; }
      function isValidCidade(cidade) { return cidade.trim().length >= 3; } // Validação Cidade
      function isValidCEP(cep) { const nums = cep.replace(/\D/g, ''); return nums.length === 8; } // Validação CEP (8 dígitos)
      function isValidMessage(message) { return message.trim().length >= 10; }

      // Função genérica para validar campo e atualizar classes CSS e visibilidade do erro
      function validateField(field, validationFn, errorElement) {
        const isValid = validationFn(field.value);
        field.classList.toggle('is-valid', isValid);
        field.classList.toggle('is-invalid', !isValid);
        if (errorElement) errorElement.classList.toggle('visible', !isValid);
        return isValid;
      }

      // Função para validar campo e mostrar feedback com alerta (Toast)
      function validateFieldWithFeedback(field, validationFn, errorElement, title, text) {
        const isEmpty = !field.value.trim();
        const isSelectPlaceholder = (field.tagName === 'SELECT' && field.value === "");

        if (isEmpty || isSelectPlaceholder) {
          field.classList.remove('is-valid');
          field.classList.add('is-invalid');
          if (errorElement) errorElement.classList.add('visible');
          // Não mostra toast para campo vazio no blur, apenas marca como inválido
          // showToast('Campo obrigatório', 'Este campo não pode ficar em branco.', 'warning');
          return false;
        }
        
        const isValid = validationFn(field.value);
        field.classList.toggle('is-valid', isValid);
        field.classList.toggle('is-invalid', !isValid);
        if (errorElement) errorElement.classList.toggle('visible', !isValid);
        
        if (!isValid) {
            showToast(title, text, 'warning');
        }
        return isValid;
      }

      // --- Evento de Envio do Formulário --- 

      contactForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Impede envio padrão

        // Valida todos os campos antes de enviar
        const isNomeValid = validateFieldWithFeedback(nomeInput, isValidName, nomeError, 'Nome inválido', 'Por favor, informe seu nome completo (mínimo 3 caracteres).');
        const isEmailValid = validateFieldWithFeedback(emailInput, isValidEmail, emailError, 'Email inválido', 'Por favor, informe um email válido.');
        const isTelefoneValid = validateFieldWithFeedback(telefoneInput, isValidPhone, telefoneError, 'Telefone inválido', 'Por favor, informe um telefone válido (10 ou 11 dígitos).');
        const isGeneroValid = validateFieldWithFeedback(generoInput, isValidGenero, generoError, 'Gênero não selecionado', 'Por favor, selecione o gênero.');
        const isCidadeValid = validateFieldWithFeedback(cidadeInput, isValidCidade, cidadeError, 'Cidade inválida', 'Por favor, informe sua cidade (mínimo 3 caracteres).'); // Valida Cidade no submit
        const isCEPValid = validateFieldWithFeedback(cepInput, isValidCEP, cepError, 'CEP inválido', 'Informe um CEP válido no formato 00000-000.'); // Valida CEP no submit
        const isMensagemValid = validateFieldWithFeedback(mensagemTextarea, isValidMessage, mensagemError, 'Mensagem curta', 'Sua mensagem deve ter pelo menos 10 caracteres.');

        // Se todos os campos estiverem válidos
        if (isNomeValid && isEmailValid && isTelefoneValid && isGeneroValid && isCidadeValid && isCEPValid && isMensagemValid) {
          const email = emailInput.value;
          emailMessageCount[email] = emailMessageCount[email] || 0;

          // Limita o envio de 2 mensagens por email
          if (emailMessageCount[email] >= 2) {
            Swal.fire({ title: 'Limite Excedido', text: 'Você já enviou 2 mensagens com este email. Tente outro email ou contato por telefone.', icon: 'error', confirmButtonColor: '#007bff' });
            return;
          }

          // Mostra alerta de carregando enquanto envia
          Swal.fire({
            title: 'Enviando sua mensagem...',
            text: 'Por favor, aguarde.',
            allowOutsideClick: false,
            allowEscapeKey: false,
            didOpen: () => { Swal.showLoading(); }
          });
          
          // Envia os dados do formulário via fetch para o backend
          const formData = new FormData(contactForm);
          fetch('enviar-email.php', { // Certifique-se que este é o endpoint correto
            method: 'POST',
            body: formData 
          })
          .then(response => {
            if (!response.ok) {
              return response.text().then(text => { throw new Error(text || 'Erro no servidor'); });
            }
            return response.text();
          })
          .then(message => {
            Swal.close(); 
            Swal.fire({
              title: 'Enviado com Sucesso!',
              text: 'Sua mensagem foi enviada. Entraremos em contato em breve.',
              icon: 'success',
              confirmButtonColor: '#007bff'
            });
            emailMessageCount[email]++; 
            contactForm.reset(); 
            // Remove classes de validação e reseta erros/contador
            [nomeInput, emailInput, telefoneInput, generoInput, cidadeInput, cepInput, mensagemTextarea].forEach(field => {
              field.classList.remove('is-valid', 'is-invalid');
            });
            [nomeError, emailError, telefoneError, generoError, cidadeError, cepError, mensagemError].forEach(el => el.classList.remove('visible'));
            charCount.textContent = '0/500 caracteres';
            charCount.style.color = '';
          })
          .catch(error => {
            Swal.close(); 
            Swal.fire({
              title: 'Erro ao Enviar',
              text: `Ocorreu um problema: ${error.message}. Tente novamente mais tarde.`, 
              icon: 'error',
              confirmButtonColor: '#dc3545'
            });
            console.error('Fetch Error:', error);
          });

        } else {
          // Se algum campo for inválido, mostra um alerta geral
          Swal.fire({
            title: 'Campos Inválidos',
            text: 'Por favor, corrija os campos destacados em vermelho antes de enviar.',
            icon: 'warning',
            confirmButtonColor: '#ffc107'
          });
        }
      });
    });
  </script>
</body>
