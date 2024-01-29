<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin POS</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

    <!-- Chart.js CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-widget="control-sidebar" data-slide="true">
                        <i class="fas fa-th-large"></i>
                    </a>
                    <li class="nav-item">
            <a class="nav-link btn btn-danger" href="#product" onclick="">
                Master
            </a>
        </li>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Admin POS</span>
            </a>
            <div class="sidebar">
                <!-- Sidebar content tambahan --> 
            </div>
        </aside>

        <!-- Content Wrapper dan Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <!-- Top Cards Section -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-shopping-cart"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Penjualan Hari ini</span>
                                    <span class="info-box-number">50</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-dollar-sign"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Income</span>
                                    <span class="info-box-number">Rp 1,000,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fas fa-dollar-sign"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Income Today</span>
                                    <span class="info-box-number">Rp 200,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Customer Count</span>
                                    <span class="info-box-number">200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Data Summary Section with Bar Chart -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Summary Bar Chart</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="dataSummaryChart" width="100%" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Anything you want just contact Habiesmart!
            </div>
            <strong>Admin POS</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script>
    // Sample data for the bar chart
    var dataSummaryData = {
        labels: ['Order Count', 'Income', 'Income Today', 'Customer Count'],
        datasets: [{
            label: 'Data Summary',
            data: [50, 1000000, 200000, 200],
            backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
            borderColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
            borderWidth: 1
        }]
    };

    // Create the bar chart
    var ctx = document.getElementById('dataSummaryChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: dataSummaryData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    barPercentage: 0.5, // Adjust the width of the bars
                    categoryPercentage: 0.5 // Adjust the space between bars
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>

</html>
