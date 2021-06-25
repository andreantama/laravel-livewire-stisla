<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.stisla.header')
</head>

<body>
  @livewire('toastr')
  <div id="app">
    <div class="main-wrapper">
      @include('layouts.stisla.admin.navbar')
      <div class="main-sidebar">
      @include('layouts.stisla.admin.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

@include('layouts.stisla.footer')
</body>
</html>
