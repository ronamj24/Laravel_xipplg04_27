<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Dilesin Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      body {
          background-color: #f8fafc;
      }
      .sidebar {
          width: 220px;
          height: 100vh;
          background-color: #1e293b;
          color: white;
          position: fixed;
          top: 0;
          left: 0;
      }
      .sidebar h5 {
          padding: 1.2rem;
          border-bottom: 1px solid rgba(255,255,255,0.1);
          font-weight: bold;
      }
      .sidebar a {
          display: block;
          color: #e2e8f0;
          padding: 0.75rem 1.25rem;
          text-decoration: none;
      }
      .sidebar a:hover, .sidebar a.active {
          background-color: #334155;
          color: #fff;
      }
      .main-content {
          margin-left: 220px;
          min-height: 100vh;
      }
      .topbar {
          background-color: white;
          border-bottom: 1px solid #e2e8f0;
          padding: 0.75rem 1.5rem;
          display: flex;
          justify-content: space-between;
          align-items: center;
      }
  </style>
</head>
<body>
    <div class="sidebar">
        <h5 class="text-center mt-2">Dilesin Admin</h5>

        <a href="{{ url('/admin/dashboard') }}" 
           class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
           Dashboard
        </a>

        <a href="{{ url('/admin/students') }}" 
           class="{{ request()->is('admin/students*') ? 'active' : '' }}">
           Students
        </a>

        <!-- ✅ MENU ABSENSI BARU -->
        <a href="{{ url('/admin/attendances') }}" 
           class="{{ request()->is('admin/attendances*') ? 'active' : '' }}">
           Absensi
        </a>
        <!-- END -->

        <a href="{{ url('/admin/users') }}" 
           class="{{ request()->is('admin/users*') ? 'active' : '' }}">
           Users
        </a>

        <a href="{{ url('/admin/settings') }}" 
           class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
           Settings
        </a>
    </div>

    <div class="main-content">
        <div class="topbar">
            <span>Home</span>
            <span>Admin</span>
        </div>

        <main class="p-4">
            @yield('content')
        </main>

        <footer class="text-center py-3 text-muted border-top">
            © 2025 Dilesin Academy. All rights reserved.
        </footer>
    </div>
</body>
</html>
