@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard Admin') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 text-right">
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-warning">Visit Site</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('Welcome Back') }} {{ auth()->user()->name }} Look Indonesia Adventure !
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <p class="card-text">
                                Tanggal Sekarang : <span class="bg-primary">{{ \Carbon\Carbon::now()->format('d F Y') }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <p class="card-text">
                                Jam Sekarang : <span class="bg-primary fw-bold" id="clock"></span> WITA
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h2 class="m-0">{{ __('Kinerja Aplikasi Anda') }}</h2>
                </div><!-- /.col -->
                <div class="col-lg-12 mt-4">
                    <canvas id="performanceChart" width="400" height="200"></canvas>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const updateClock = () => {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            const timeString = hours + ':' + minutes + ':' + seconds;
            document.getElementById('clock').innerText = timeString;
        };

        setInterval(updateClock, 1000); // Memperbarui setiap detik

        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Performance'],
                datasets: [{
                    label: 'Performance',
                    data: [0],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            max: 100
                        }
                    }]
                }
            }
        });

        const updatePerformance = () => {
            const performanceValue = Math.floor(Math.random() * 100); // Generate random performance value between 0 and 100
            performanceChart.data.datasets[0].data[0] = performanceValue;
            performanceChart.update();
        };

        setInterval(updatePerformance, 1000); // Update every second

        // Fungsi untuk memuat kutipan
function loadQuote() {
    fetch('https://api.quotable.io/random')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const quote = data.content;
            document.getElementById('quote').innerText = quote;
        })
        .catch(error => {
            console.error('Error fetching quote:', error);
        });
}

        // Memuat kutipan pertama kali
        loadQuote();

        // Event listener untuk tombol refresh
        document.getElementById('refreshButton').addEventListener('click', loadQuote);
    </script>
@endsection
