<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto mb-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <!-- Card para Todos os Cursos -->
                <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <h3 class="mb-2 text-xl font-semibold">Total de Cursos</h3>
                    <p class="text-2xl text-gray-900 dark:text-gray-100">{{ $this->courses }}</p>
                </div>

                <!-- Card para Número de Estudantes -->
                <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <h3 class="mb-2 text-xl font-semibold">Total de Estudantes</h3>
                    <p class="text-2xl text-gray-900 dark:text-gray-100">{{ $this->studants - 1 }}</p>
                </div>

                <!-- Card Personalizado (exemplo: Total de Instrutores) -->
                <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <h3 class="mb-2 text-xl font-semibold">Total de Instrutores</h3>
                    <p class="text-2xl text-gray-900 dark:text-gray-100">8</p>
                </div>
            </div>
        </div>
        {{-- <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <!-- Gráfico de Barras -->
                <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <canvas id="barChart"></canvas>
                </div>

                <!-- Gráfico de Pizza -->
                <div class="p-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dados para o Gráfico de Barras
        var barData = {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
            datasets: [{
                label: 'Vendas',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: '#3490dc',
            }]
        };

        // Dados para o Gráfico de Pizza
        var pieData = {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                data: [30, 50, 20],
                backgroundColor: ['#e53e3e', '#3182ce', '#f6e05e'],
            }]
        };

        // Configuração do Gráfico de Barras
        var barConfig = {
            type: 'bar',
            data: barData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Configuração do Gráfico de Pizza
        var pieConfig = {
            type: 'doughnut',
            data: pieData,
        };

        // Renderizar os Gráficos
        var barChart = new Chart(document.getElementById('barChart'), barConfig);
        var pieChart = new Chart(document.getElementById('pieChart'), pieConfig);
    </script> --}}
</div>
