<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestão de Tarefas</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .banner {
            background-image: url('https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">

    <div class="flex flex-col min-h-screen">

        <header class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50">
            <nav x-data="{ isOpen: false }" class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-bold text-gray-900 dark:text-white">
                        <a href="/">TaskManagerRafa</a>
                    </div>

                    <div class="hidden md:flex items-center space-x-8">
                        <a href="/" class="hover:text-blue-500 dark:hover:text-blue-400">Início</a>
                        <a href="#sobre" class="hover:text-blue-500 dark:hover:text-blue-400">Sobre Nós</a>
                        <a href="#contato" class="hover:text-blue-500 dark:hover:text-blue-400">Contato</a>
                    </div>

                    <div class="hidden md:flex items-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="font-semibold hover:text-blue-500 dark:hover:text-blue-400">Painel</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold hover:text-blue-500 dark:hover:text-blue-400">Login</a>
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-md">Cadastre-se</a>
                            @endauth
                        @endif
                    </div>

                    <div class="md:hidden flex items-center">
                        <button @click="isOpen = !isOpen" class="focus:outline-none">
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div x-show="isOpen" class="md:hidden mt-4">
                    <a href="/" class="block py-2 px-4 text-sm hover:bg-gray-200 dark:hover:bg-gray-700 rounded">Início</a>
                    <a href="#sobre" class="block py-2 px-4 text-sm hover:bg-gray-200 dark:hover:bg-gray-700 rounded">Sobre Nós</a>
                    <a href="#contato" class="block py-2 px-4 text-sm hover:bg-gray-200 dark:hover:bg-gray-700 rounded">Contato</a>
                    
                    <hr class="my-2 border-gray-200 dark:border-gray-700">

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="block py-2 px-4 text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 rounded">Painel</a>
                        @else
                            <a href="{{ route('login') }}" class="block py-2 px-4 text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 rounded">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="block py-2 px-4 text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-700 rounded">Cadastre-se</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            <section class="banner h-96 flex items-center justify-center text-white">
                <div class="text-center bg-black bg-opacity-50 p-8 rounded-lg">
                    <h1 class="text-5xl font-extrabold mb-4">Organize suas Tarefas com TaskManagerRafa</h1>
                    <p class="text-lg">Gerencie pedidos, produtos, clientes e fornecedores em um só lugar, de forma simples e eficiente.</p>
                </div>
            </section>
            
            <section id="sobre" class="py-20">
                <div class="container mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white">O que é o TaskManagerRafa?</h2>
                    <p class="max-w-3xl mx-auto text-gray-600 dark:text-gray-300 leading-relaxed">
                        O <strong>TaskManagerRafa</strong> é um sistema de gestão de tarefas voltado para empresas que precisam controlar pedidos, produtos, clientes e fornecedores. Com uma interface intuitiva, você pode cadastrar, acompanhar e organizar todas as demandas do seu negócio, otimizando o tempo e aumentando a produtividade da sua equipe.
                    </p>
                </div>
            </section>

            <section class="py-20 bg-gray-50 dark:bg-gray-800">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl font-bold mb-10 text-center text-gray-900 dark:text-white">Principais Funcionalidades</h2>
                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6 text-center">
                            <svg class="mx-auto mb-4 h-12 w-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12h6m-3-3v6m9 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <h3 class="font-semibold text-lg mb-2">Gestão de Tarefas</h3>
                            <p class="text-gray-600 dark:text-gray-300">Crie, edite e acompanhe tarefas, defina prazos e atribua responsáveis.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6 text-center">
                            <svg class="mx-auto mb-4 h-12 w-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 7v4a1 1 0 001 1h3v2a1 1 0 001 1h8a1 1 0 001-1v-2h3a1 1 0 001-1V7a1 1 0 00-1-1H4a1 1 0 00-1 1z"/></svg>
                            <h3 class="font-semibold text-lg mb-2">Pedidos e Produtos</h3>
                            <p class="text-gray-600 dark:text-gray-300">Gerencie pedidos, cadastre produtos e acompanhe o status de cada solicitação.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6 text-center">
                            <svg class="mx-auto mb-4 h-12 w-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 110-8 4 4 0 010 8zm6 4a4 4 0 00-3-3.87"/></svg>
                            <h3 class="font-semibold text-lg mb-2">Clientes e Fornecedores</h3>
                            <p class="text-gray-600 dark:text-gray-300">Cadastre e gerencie informações de clientes e fornecedores de forma centralizada.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6 text-center">
                            <svg class="mx-auto mb-4 h-12 w-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 17l4 4 4-4m-4-5v9"/></svg>
                            <h3 class="font-semibold text-lg mb-2">Relatórios e Indicadores</h3>
                            <p class="text-gray-600 dark:text-gray-300">Visualize relatórios e indicadores para acompanhar o desempenho das tarefas e processos.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-20">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl font-bold mb-10 text-center text-gray-900 dark:text-white">Depoimentos de Clientes</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6">
                            <p class="text-gray-700 dark:text-gray-300 italic mb-4">"O TaskManagerRafa facilitou o controle dos meus pedidos e tarefas diárias. Agora tudo está organizado e fácil de acompanhar!"</p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente" class="h-10 w-10 rounded-full mr-3">
                                <div>
                                    <span class="font-semibold text-gray-900 dark:text-white">Carlos Silva</span>
                                    <span class="block text-sm text-gray-500">Empresário</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6">
                            <p class="text-gray-700 dark:text-gray-300 italic mb-4">"Consigo gerenciar meus clientes e fornecedores de forma simples. Recomendo para quem quer mais produtividade."</p>
                            <div class="flex items-center">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Cliente" class="h-10 w-10 rounded-full mr-3">
                                <div>
                                    <span class="font-semibold text-gray-900 dark:text-white">Mariana Souza</span>
                                    <span class="block text-sm text-gray-500">Gestora de RH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-20 bg-blue-600">
                <div class="container mx-auto px-6 text-center">
                    <h2 class="text-3xl font-bold mb-6 text-white">Pronto para organizar suas tarefas?</h2>
                    <p class="mb-8 text-blue-100 max-w-2xl mx-auto">Cadastre-se agora e experimente gratuitamente por 15 dias. Descubra como o TaskManagerRafa pode transformar a gestão do seu negócio!</p>
                    <a href="{{ route('register') }}" class="inline-block bg-white text-blue-600 font-semibold px-8 py-3 rounded-md shadow hover:bg-gray-100 transition">Comece Gratuitamente</a>
                </div>
            </section>

        </main>

        <footer id="contato" class="bg-gray-800 text-white py-8">
            <div class="container mx-auto px-6 text-center">
                <p>&copy; 2025 TaskManagerRafa. Todos os direitos reservados.</p>
                <p class="mt-2">Contato: <a href="mailto:contato@gestaopro.com" class="underline hover:text-blue-400">contato@gestaopro.com</a></p>
            </div>
        </footer>

    </div>

</body>
</html>