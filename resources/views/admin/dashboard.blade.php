<!doctype html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Admin Dashboard</title>

    <!-- Bootstrap 5.2.3 CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Custom Style -->
    <style>
      body {
        background-color: #f8f9fa;
      }
      .navbar-brand {
        font-weight: bold;
      }
      .sidebar {
        min-height: calc(100vh - 56px);
        background: #343a40;
        color: white;
      }
      .sidebar .nav-link {
        color: rgba(255, 255, 255, 0.75);
        padding: 0.75rem 1rem;
      }
      .sidebar .nav-link:hover, .sidebar .nav-link.active {
        color: white;
        background: rgba(255, 255, 255, 0.1);
      }
      .sidebar .nav-link i {
        margin-right: 0.5rem;
      }
      .card {
        border-radius: 0.5rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        margin-bottom: 1.5rem;
      }
      .card-header {
        font-weight: 600;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <i class="bi bi-speedometer2 me-2"></i>Admin Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle me-1"></i>Admin
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block sidebar collapse bg-dark p-0">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <i class="bi bi-speedometer2"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-cart"></i>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-people"></i>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-controller"></i>
                  Games
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-graph-up"></i>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-gear"></i>
                  Settings
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <i class="bi bi-calendar"></i> This week
              </button>
            </div>
          </div>

          <!-- Summary Cards -->
          <div class="row mb-4">
            <div class="col-md-3">
              <div class="card text-white bg-primary">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Total Orders</h6>
                      <h2 class="card-text">124</h2>
                    </div>
                    <i class="bi bi-cart3" style="font-size: 2rem;"></i>
                  </div>
                  <p class="card-text"><small>+12% from last month</small></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-success">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Revenue</h6>
                      <h2 class="card-text">Rp2.4M</h2>
                    </div>
                    <i class="bi bi-currency-dollar" style="font-size: 2rem;"></i>
                  </div>
                  <p class="card-text"><small>+8.5% from last month</small></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-warning">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Customers</h6>
                      <h2 class="card-text">86</h2>
                    </div>
                    <i class="bi bi-people" style="font-size: 2rem;"></i>
                  </div>
                  <p class="card-text"><small>+5 new this week</small></p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card text-white bg-danger">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title">Pending</h6>
                      <h2 class="card-text">7</h2>
                    </div>
                    <i class="bi bi-exclamation-triangle" style="font-size: 2rem;"></i>
                  </div>
                  <p class="card-text"><small>2 high priority</small></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Recent Orders -->
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Recent Orders</h5>
              <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Game</th>
                      <th>Item</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#ORD-001</td>
                      <td>Asep</td>
                      <td>Mobile Legends</td>
                      <td>86 Diamond</td>
                      <td>Rp 20.000</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-printer"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-002</td>
                      <td>Budi</td>
                      <td>Free Fire</td>
                      <td>120 Diamond</td>
                      <td>Rp 25.000</td>
                      <td><span class="badge bg-warning text-dark">Processing</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-printer"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-003</td>
                      <td>Citra</td>
                      <td>PUBG Mobile</td>
                      <td>UC 500</td>
                      <td>Rp 50.000</td>
                      <td><span class="badge bg-danger">Failed</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-printer"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-004</td>
                      <td>Dedi</td>
                      <td>Valorant</td>
                      <td>1000 VP</td>
                      <td>Rp 120.000</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-printer"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-005</td>
                      <td>Eka</td>
                      <td>Genshin Impact</td>
                      <td>Genesis Crystal</td>
                      <td>Rp 75.000</td>
                      <td><span class="badge bg-primary">Pending</span></td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-printer"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Charts Row -->
          <div class="row mt-4">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">Sales Overview</h5>
                </div>
                <div class="card-body">
                  <div class="text-center py-5">
                    <i class="bi bi-bar-chart" style="font-size: 3rem; opacity: 0.2;"></i>
                    <p class="mt-2 text-muted">Sales chart will appear here</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">Top Games</h5>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Mobile Legends
                      <span class="badge bg-primary rounded-pill">42</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Free Fire
                      <span class="badge bg-primary rounded-pill">35</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      PUBG Mobile
                      <span class="badge bg-primary rounded-pill">28</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Valorant
                      <span class="badge bg-primary rounded-pill">15</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Genshin Impact
                      <span class="badge bg-primary rounded-pill">10</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap 5.2.3 CDN JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>