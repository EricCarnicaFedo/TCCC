<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="inicio.css">
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="agenda.css">
  <!---------========= fontes =========------->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
  <!----===== Boxicons CSS ===== -->
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!--<title>Dashboard Sidebar Menu</title>-->
</head>


<header id="navbar" class="flex justify-between items-center  text-white p-4">
  <nav class="">
      <div class="titulonavbar">
        <i class="bx bxs-animal-paw"></i>
          <span class="text">Pets</span>
      </div>
      <ul class="navbarconteudo">
          <!-- Manter apenas os itens desejados -->
          
      </ul>
     
  </nav>

  <div class="flex items-center space-x-4">
      <span class="hidden md:inline-block">Bem-vindo, Usuário</span>
      <!-- Link "Sair" adicionado manualmente para simular logout -->
      <a href="#" class="hover:underline">Sair</a>
      <i class="bx bx-bell"></i>
      <img src="https://placehold.co/30x30" alt="User avatar" class="w-8 h-8 rounded-full">
  </div>

  <!-- Ícones de menu e configuração mantidos para personalização -->
  <i class='bx bx-menu menu-button' id="menu-button" style="font-size: 30px;"></i>
  <i class='bx bx-cog customize-button' id="customize-button" style="font-size: 20px;"></i>
  <div id="color-picker">
      <label for="navbar-color">Choose navbar color:</label>
      <input type="color" id="navbar-color" name="navbar-color" value="#4CAF50">
  </div>
</header>



  <div id="sidebar" class="sidebar">
    <div class="sidebar-header">
      <i class='bx bx-home-alt' style="font-size: 40px; color: white;  "></i>
      <h2>VetEtec</h2>
      <!-- Ícone de exemplo -->
    </div>
    <a href="javascript:void(0)" class="closebtn" id="close-sidebar"> <i class='bx bxs-chevron-right'></i></a>
    <a href="#"><i class='bx bx-search'></i> <input type="text" placeholder="pesquisar..." id="search-bar"></a>
    <a href="inicio.html"><i class="bx bx-home"></i><pan class="sidebar-text">Início</span></a>
    <a href="notificacoes.html"><i class='bx bx-bell'></i> <span class="sidebar-text">Notificações</span></a>
    <a href="#"><i class='bx bxs-user'></i> <span class="sidebar-text">Analíticas</span></a>

    <a href="#"><i class='bx bx-calendar'></i> <span class="sidebar-text">Agenda</span></a>
    <a href="#"><i class='bx bxs-cat'></i> <span class="sidebar-text">Pets</span></a>
    <a href="#"><i class='bx bx-dollar-circle'></i> <span class="sidebar-text">Gastos</span></a>
    <a href="#" style="margin-top: 100px;"><i class='bx bx-log-out'></i> <span class="sidebar-text">Sair</span></a>
    <a href="#"><i class='bx bx-moon theme-toggle' id="theme-toggle"></i> <span class="sidebar-text  tema   ">Tema</span></a>

  </div>
  <body class="bg-gray-100">
    <div class="flex">
        <!-- Main content -->
        <div class="flex-1">
            <main class="p-6">
                <div class="bg-white p-6 rounded shadow-md">
                    <div class="flex items-center space-x-4 mb-6">
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded flex items-center"><i class="fas fa-arrow-left mr-2"></i> VOLTAR</button>
                        <h1 class="text-xl font-bold">Lista de Animais</h1>
                    </div>
                    <div class="flex justify-between items-center mb-4 flex-wrap">
                        <div class="flex space-x-4">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded flex items-center"><i class="fas fa-print mr-2"></i> Imprimir</button>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded flex items-center"><i class="fas fa-file-export mr-2"></i> Exportar Planilha</button>
                        </div>
                        <div class="flex items-center space-x-2 flex-wrap mt-4 md:mt-0">
                            <label for="estado" class="mr-2">Estado</label>
                            <select id="estado" class="border-gray-300 border p-2 rounded">
                                <option>Ativo</option>
                            </select>
                            <label for="desde" class="ml-4 mr-2">Desde</label>
                            <select id="desde" class="border-gray-300 border p-2 rounded">
                                <option>Janeiro</option>
                            </select>
                            <label for="ate" class="ml-4 mr-2">Até</label>
                            <select id="ate" class="border-gray-300 border p-2 rounded">
                                <option>Dezembro</option>
                            </select>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded ml-4 flex items-center"><i class="fas fa-filter mr-2"></i> Filtrar</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Nome</th>
                                    <th class="py-2 px-4 border-b">Espécie</th>
                                    <th class="py-2 px-4 border-b">Data de Nascimento</th>
                                    <th class="py-2 px-4 border-b">Sexo</th>
                                    <th class="py-2 px-4 border-b">Tutor</th>
                                    <th class="py-2 px-4 border-b">Última Visita ao Veterinário</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">Gleison Loureiro</td>
                                    <td class="py-2 px-4 border-b">gleison@example.com</td>
                                    <td class="py-2 px-4 border-b">(11) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Rua das Flores, 123</td>
                                    <td class="py-2 px-4 border-b">São Paulo</td>
                                    <td class="py-2 px-4 border-b">SP</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">Maria Silva</td>
                                    <td class="py-2 px-4 border-b">maria@example.com</td>
                                    <td class="py-2 px-4 border-b">(21) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Av. Brasil, 456</td>
                                    <td class="py-2 px-4 border-b">Rio de Janeiro</td>
                                    <td class="py-2 px-4 border-b">RJ</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">João Pereira</td>
                                    <td class="py-2 px-4 border-b">joao@example.com</td>
                                    <td class="py-2 px-4 border-b">(31) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Rua Minas Gerais, 789</td>
                                    <td class="py-2 px-4 border-b">Belo Horizonte</td>
                                    <td class="py-2 px-4 border-b">MG</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">Ana Costa</td>
                                    <td class="py-2 px-4 border-b">ana@example.com</td>
                                    <td class="py-2 px-4 border-b">(41) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Rua Paraná, 101</td>
                                    <td class="py-2 px-4 border-b">Curitiba</td>
                                    <td class="py-2 px-4 border-b">PR</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">Carlos Lima</td>
                                    <td class="py-2 px-4 border-b">carlos@example.com</td>
                                    <td class="py-2 px-4 border-b">(51) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Av. Rio Grande, 202</td>
                                    <td class="py-2 px-4 border-b">Porto Alegre</td>
                                    <td class="py-2 px-4 border-b">RS</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                                <!-- Novos clientes adicionados -->
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">Mariana Oliveira</td>
                                    <td class="py-2 px-4 border-b">mariana@example.com</td>
                                    <td class="py-2 px-4 border-b">(62) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Rua das Palmeiras, 567</td>
                                    <td class="py-2 px-4 border-b">Goiânia</td>
                                    <td class="py-2 px-4 border-b">GO</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Ativo</td>
                                    <td class="py-2 px-4 border-b">Pedro Santos</td>
                                    <td class="py-2 px-4 border-b">pedro@example.com</td>
                                    <td class="py-2 px-4 border-b">(48) 98765-4321</td>
                                    <td class="py-2 px-4 border-b">Av. das Acácias, 789</td>
                                    <td class="py-2 px-4 border-b">Florianópolis</td>
                                    <td class="py-2 px-4 border-b">SC</td>
                                    <td class="py-2 px-4 border-b">12345-678</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="botaozin">
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-gray-600">Mostrando de 1 até 7 de 7 registros</span>
                        <div>
                            <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-l">Anterior</button>
                            <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-r">Próximo</button>
                        </div>
                    </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <main class="p-6">
        <div class="bg-white p-6 rounded shadow-md">
            <div class="flex items-center space-x-4 mb-6">
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded flex items-center"><i class="fas fa-arrow-left mr-2"></i> VOLTAR</button>
                <h1 class="text-xl font-bold">Tutores</h1>
            </div>
            <div class="flex justify-between items-center mb-4 flex-wrap">
                <div class="flex space-x-4">
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded flex items-center"><i class="fas fa-print mr-2"></i> Imprimir</button>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded flex items-center"><i class="fas fa-file-export mr-2"></i> Exportar Planilha</button>
                </div>
                <div class="flex items-center space-x-2 flex-wrap mt-4 md:mt-0">
                    <label for="estado" class="mr-2">Estado</label>
                    <select id="estado" class="border-gray-300 border p-2 rounded">
                        <option>Ativo</option>
                    </select>
                    <label for="desde" class="ml-4 mr-2">Desde</label>
                    <select id="desde" class="border-gray-300 border p-2 rounded">
                        <option>Janeiro</option>
                    </select>
                    <label for="ate" class="ml-4 mr-2">Até</label>
                    <select id="ate" class="border-gray-300 border p-2 rounded">
                        <option>Dezembro</option>
                    </select>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded ml-4 flex items-center"><i class="fas fa-filter mr-2"></i> Filtrar</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Nome do Animal</th>
                            <th class="py-2 px-4 border-b">Raça</th>
                            <th class="py-2 px-4 border-b">Proprietário</th>
                            <th class="py-2 px-4 border-b">Data da Consulta</th>
                            <th class="py-2 px-4 border-b">Hora da Consulta</th>
                            <th class="py-2 px-4 border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b">Rex</td>
                            <td class="py-2 px-4 border-b">Labrador Retriever</td>
                            <td class="py-2 px-4 border-b">Gleison Loureiro</td>
                            <td class="py-2 px-4 border-b">15/06/2024</td>
                            <td class="py-2 px-4 border-b">10:30</td>
                            <td class="py-2 px-4 border-b"><span class="bg-green-500 text-white px-2 py-1 rounded">Confirmada</span></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Luna</td>
                            <td class="py-2 px-4 border-b">Siamese</td>
                            <td class="py-2 px-4 border-b">Maria Silva</td>
                            <td class="py-2 px-4 border-b">18/06/2024</td>
                            <td class="py-2 px-4 border-b">09:00</td>
                            <td class="py-2 px-4 border-b"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Pendente</span></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Max</td>
                            <td class="py-2 px-4 border-b">Golden Retriever</td>
                            <td class="py-2 px-4 border-b">João Pereira</td>
                            <td class="py-2 px-4 border-b">20/06/2024</td>
                            <td class="py-2 px-4 border-b">15:45</td>
                            <td class="py-2 px-4 border-b"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Pendente</span></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Bella</td>
                            <td class="py-2 px-4 border-b">Poodle</td>
                            <td class="py-2 px-4 border-b">Ana Costa</td>
                            <td class="py-2 px-4 border-b">22/06/2024</td>
                            <td class="py-2 px-4 border-b">11:15</td>
                            <td class="py-2 px-4 border-b"><span class="bg-green-500 text-white px-2 py-1 rounded">Confirmada</span></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Thor</td>
                            <td class="py-2 px-4 border-b">Bulldog Francês</td>
                            <td class="py-2 px-4 border-b">Carlos Lima</td>
                            <td class="py-2 px-4 border-b">25/06/2024</td>
                            <td class="py-2 px-4 border-b">14:00</td>
                            <td class="py-2 px-4 border-b"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Pendente</span></td>
                        </tr>
                        <!-- Novos consultas marcadas -->
                        <tr>
                            <td class="py-2 px-4 border-b">Nina</td>
                            <td class="py-2 px-4 border-b">Maine Coon</td>
                            <td class="py-2 px-4 border-b">Mariana Oliveira</td>
                            <td class="py-2 px-4 border-b">27/06/2024</td>
                            <td class="py-2 px-4 border-b">16:30</td>
                            <td class="py-2 px-4 border-b"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Pendente</span></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Mel</td>
                            <td class="py-2 px-4 border-b">Labrador Retriever</td>
                            <td class="py-2 px-4 border-b">Pedro Santos</td>
                            <td class="py-2 px-4 border-b">30/06/2024</td>
                            <td class="py-2 px-4 border-b">08:00</td>
                            <td class="py-2 px-4 border-b"><span class="bg-green-500 text-white px-2 py-1 rounded">Confirmada</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="botaozin">
                <div class="flex justify-between items-center mt-4">
                    <span class="text-gray-600">Mostrando de 1 até 7 de 7 registros</span>
                    <div>
                        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-l">Anterior</button>
                        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-r">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="p-6">
        <div class="bg-white p-6 rounded shadow-md">
            <div class="flex items-center space-x-4 mb-6">
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded flex items-center"><i class="fas fa-arrow-left mr-2"></i> VOLTAR</button>
                <h1 class="text-xl font-bold">Horários Disponíveis</h1>
            </div>
            <div class="flex justify-between items-center mb-4 flex-wrap">
                <div class="flex space-x-4">
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded flex items-center"><i class="fas fa-print mr-2"></i> Imprimir</button>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded flex items-center"><i class="fas fa-file-export mr-2"></i> Exportar Planilha</button>
                </div>
                <div class="flex items-center space-x-2 flex-wrap mt-4 md:mt-0">
                    <label for="estado" class="mr-2">Estado</label>
                    <select id="estado" class="border-gray-300 border p-2 rounded">
                        <option>Ativo</option>
                    </select>
                    <label for="desde" class="ml-4 mr-2">Desde</label>
                    <select id="desde" class="border-gray-300 border p-2 rounded">
                        <option>Janeiro</option>
                    </select>
                    <label for="ate" class="ml-4 mr-2">Até</label>
                    <select id="ate" class="border-gray-300 border p-2 rounded">
                        <option>Dezembro</option>
                    </select>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded ml-4 flex items-center"><i class="fas fa-filter mr-2"></i> Filtrar</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-right">Data</th>
                            <th class="py-2 px-4 border-b text-right">Horário</th>
                            <th class="py-2 px-4 border-b text-right">Disponibilidade</th>
                            <th class="py-2 px-4 border-b text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b text-right">01/07/2024</td>
                            <td class="py-2 px-4 border-b text-right">09:00</td>
                            <td class="py-2 px-4 border-b text-right"><span class="bg-green-500 text-white px-2 py-1 rounded">Disponível</span></td>
                            <td class="py-2 px-4 border-b text-right">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-eye"></i> Ver Detalhes</button>
                                <button class="bg-yellow-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-calendar-plus"></i> Agendar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b text-right">01/07/2024</td>
                            <td class="py-2 px-4 border-b text-right">10:30</td>
                            <td class="py-2 px-4 border-b text-right"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Reservado</span></td>
                            <td class="py-2 px-4 border-b text-right">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-eye"></i> Ver Detalhes</button>
                                <button class="bg-gray-500 text-white px-2 py-1 rounded ml-2" disabled><i class="fas fa-calendar-plus"></i> Agendar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b text-right">01/07/2024</td>
                            <td class="py-2 px-4 border-b text-right">14:00</td>
                            <td class="py-2 px-4 border-b text-right"><span class="bg-green-500 text-white px-2 py-1 rounded">Disponível</span></td>
                            <td class="py-2 px-4 border-b text-right">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-eye"></i> Ver Detalhes</button>
                                <button class="bg-yellow-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-calendar-plus"></i> Agendar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b text-right">02/07/2024</td>
                            <td class="py-2 px-4 border-b text-right">11:15</td>
                            <td class="py-2 px-4 border-b text-right"><span class="bg-green-500 text-white px-2 py-1 rounded">Disponível</span></td>
                            <td class="py-2 px-4 border-b text-right">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-eye"></i> Ver Detalhes</button>
                                <button class="bg-yellow-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-calendar-plus"></i> Agendar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b text-right">02/07/2024</td>
                            <td class="py-2 px-4 border-b text-right">15:30</td>
                            <td class="py-2 px-4 border-b text-right"><span class="bg-yellow-500 text-white px-2 py-1 rounded">Reservado</span></td>
                            <td class="py-2 px-4 border-b text-right">
                                <button class="bg-blue-500 text-white px-2 py-1 rounded ml-2"><i class="fas fa-eye"></i> Ver Detalhes</button>
                                <button class="bg-gray-500 text-white px-2 py-1 rounded ml-2" disabled><i class="fas fa-calendar-plus"></i> Agendar</button>
                            </td>
                        </tr>
                        <!-- Mais horários disponíveis podem ser adicionados aqui -->
                    </tbody>
                </table>
            </div>
            <div class="botaozin">
                <div class="flex justify-between items-center mt-4">
                    <span class="text-gray-600">Mostrando de 1 até 5 de 5 registros</span>
                    <div>
                        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-l">Anterior</button>
                        <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-r">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
      <div class="footer-content">
        <h2 class="footer-title">Gestão Veterinária</h2>
        <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at sapien eu justo ultrices feugiat at id quam. Vivamus eu tellus vel ex pretium hendrerit. Phasellus eget vehicula ex, sit amet dictum felis.</p>
        <ul class="footer-links">
          <li><a href="#">Início</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Equipe</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
        <div class="social-icons">
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" alt="Facebook"></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" alt="Twitter"></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="LinkedIn"></a>
          <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" alt="Instagram"></a>
        </div>
        <div class="contact-info">
          <div class="contact-info-item">
            <img src="https://img.icons8.com/material-rounded/24/ffffff/phone--v1.png" alt="Telefone">
            +1 234 567 890
          </div>
          <div class="contact-info-item">
            <img src="https://img.icons8.com/material-rounded/24/ffffff/email-open--v1.png" alt="E-mail">
            exemplo@exemplo.com
          </div>
        </div>
        <div class="subscribe">
          <input type="email" class="subscribe-input" placeholder="Digite seu e-mail">
          <button class="subscribe-button">Assinar</button>
        </div>
        <div class="company-info">
          <h3>Sobre Nós</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at sapien eu justo ultrices feugiat at id quam. Vivamus eu tellus vel ex pretium hendrerit. Phasellus eget vehicula ex, sit amet dictum felis.</p>
        </div>
        <div class="quick-links">
          <h3>Links Rápidos</h3>
          <ul>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Suporte</a></li>
          </ul>
        </div>
        <div class="about-section">
          <h3>Nossa Missão</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at sapien eu justo ultrices feugiat at id quam. Vivamus eu tellus vel ex pretium hendrerit. Phasellus eget vehicula ex, sit amet dictum felis.</p>
        </div>
        <div class="animal-images">
          <img src="https://placeimg.com/100/100/animals" alt="Animal">
          <img src="https://placeimg.com/100/100/animals" alt="Animal">
          <img src="https://placeimg.com/100/100/animals" alt="Animal">
          <img src="https://placeimg.com/100/100/animals" alt="Animal">
        </div>
      </div>
    </footer>
    <script>
     const themeToggle = document.getElementById('theme-toggle');
      const customizeButton = document.getElementById('customize-button');
      const colorPicker = document.getElementById('color-picker');
      const navbar = document.getElementById('navbar');
      const body = document.body;
      const sidebar = document.getElementById('sidebar');
      const menuButton = document.getElementById('menu-button');
      const closeSidebar = document.getElementById('close-sidebar');
      let customNavbarColor = '#afd4c3'; // Cor padrão da barra de navegação e da barra lateral
      themeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-theme');
        themeToggle.classList.toggle('bx-sun');
        // Restaurar a cor personalizada ao alternar entre temas claro e escuro
        if (body.classList.contains('dark-theme')) {
          navbar.style.backgroundColor = '#121212'; // Cor de fundo padrão do tema escuro
          sidebar.style.backgroundColor = '#121212'; // Cor de fundo padrão do tema escuro para a barra lateral
        } else {
          navbar.style.backgroundColor = customNavbarColor; // Restaurar a cor personalizada da barra de navegação
          sidebar.style.backgroundColor = customNavbarColor; // Restaurar a cor personalizada da barra lateral
        }
      });
      customizeButton.addEventListener('click', () => {
        colorPicker.style.display = colorPicker.style.display === 'block' ? 'none' : 'block';
      });
      document.getElementById('navbar-color').addEventListener('input', (event) => {
        customNavbarColor = event.target.value; // Armazenar a cor personalizada
        navbar.style.backgroundColor = customNavbarColor; // Atualizar a cor da barra de navegação
        sidebar.style.backgroundColor = customNavbarColor; // Atualizar a cor da barra lateral
      });
      menuButton.addEventListener('click', () => {
        sidebar.style.left = '0';
        navbar.style.transform = 'translateY(-100%)';
      });
      closeSidebar.addEventListener('click', () => {
        sidebar.style.left = '-250px';
        navbar.style.transform = 'translateY(0)';
      });
    document.getElementById('customize-button').addEventListener('click', function() {
      this.classList.toggle('rotated'); // Adiciona ou remove a classe 'rotated' ao clicar
  });
   document.addEventListener('DOMContentLoaded', function() {
      var conteudo = document.querySelector('.conteudo');
      setTimeout(function() {
        conteudo.classList.add('entrou');
      }, 500); // Ajuste o tempo conforme necessário
    });
    
  
    </script>
</body>
</html>