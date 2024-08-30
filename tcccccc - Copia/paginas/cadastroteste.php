<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="cadastro.css">
  <title>pagina de Cadastro</title>
</head>

<body>

  <div class="container" id="container">
    <div class="form-container sign-up">

    </div>
    <div class="form-container sign-in">
      <form>
        <h1 class="titulo-pequeno">Cadastro de Dados</h1>


        <span>Selecione a tabela na qual deseja adicionar o conteúdo.</span>
        <select name="tabela" id="tabela" class="custom-select">
          <option value="tabela1">Lista de Consultas</option>
          <option value="tabela2">Consultas Marcadas</option>
          <option value="tabela3">Horarios Disponíveis</option>
          <option value="tutores">Tutores</option>
          <option value="veterinarios">Veterinários</option>
          <option value="tabelaDisponibilidade">Tabela de Disponibilidade</option>
          <!-- Adicione mais opções conforme necessário -->
        </select>

        <label for="contentInput"></label>
        <div id="dynamicFields"></div>



        <button>Inserir</button>
      </form>
    </div>
    <div class="toggle-container">


    </div>
  </div>
  </div>

  <script src="script.js"></script>
</body>
<script>
  const tableFields = {
  tabela1: {
    fields: ['Status', 'Nome', 'Email', 'Telefone', 'Endereço', 'Cidade', 'Estado', 'Cep'],
    paddingBottom: '900px'
  },
  tabela2: {
    fields: ['Nome do Animal', 'Raça', 'Proprietario', 'Data da consulta', 'Hora da Consulta', 'Status da Consulta'],
    paddingBottom: '700px'
  },
  tabela3: {
    fields: ['Data', 'Horário', 'Disponibilidade', 'Ações'],
    paddingBottom: '600px'
  },
  tutores: {
    fields: ['ID do Tutor', 'Nome do Tutor', 'Contato', 'Endereços', 'Animais Associados'],
    paddingBottom: '800px'
  },
  veterinarios: {
    fields: ['ID do Veterinario', 'Nome', 'Especialidade', 'Horário de Trabalho', 'Contatos'],
    paddingBottom: '800px'
  },
  tabelaDisponibilidade: {
    fields: ['ID de Disponibilidade', 'Veterinário', 'Data e Hora', 'Status'],
    paddingBottom: '650px'
  }
};

document.getElementById('tabela').addEventListener('change', function() {
  const selectedTable = this.value;
  const container = document.getElementById('container');
  const dynamicFields = document.getElementById('dynamicFields');
  const { fields, paddingBottom } = tableFields[selectedTable] || { fields: [], paddingBottom: '480px' };

  // Remover a classe `show` para iniciar a animação de transição
  dynamicFields.classList.remove('show');
  
  // Limpa campos dinâmicos existentes após a animação de saída
  setTimeout(() => {
    dynamicFields.innerHTML = '';

    // Cria e adiciona novos campos
    fields.forEach((field, index) => {
      const fieldGroup = document.createElement('div');
      fieldGroup.className = 'form-group';
      
      const label = document.createElement('label');
      label.textContent = field;
      label.setAttribute('for', 'field' + (index + 1));
      
      const input = document.createElement('input');
      input.type = 'text';
      input.id = 'field' + (index + 1);
      input.name = 'field' + (index + 1);
      input.className = 'custom-input';
      
      fieldGroup.appendChild(label);
      fieldGroup.appendChild(input);
      dynamicFields.appendChild(fieldGroup);
    });
    
    // Adiciona a classe `show` após adicionar os novos campos
    setTimeout(() => {
      dynamicFields.classList.add('show');
    }, 10);
    
    // Atualiza o padding-bottom com animação
    container.style.paddingBottom = paddingBottom;
  }, 300); // Tempo para combinar com a duração da animação de transição
});

// Dispara o evento para a seleção inicial
document.getElementById('tabela').dispatchEvent(new Event('change'));


</script>
<script>
  const container = document.getElementById('container');
  const registerBtn = document.getElementById('register');
  const loginBtn = document.getElementById('login');

  registerBtn.addEventListener('click', () => {
    container.classList.add("active");
  });

  loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
  });</script>

</html>