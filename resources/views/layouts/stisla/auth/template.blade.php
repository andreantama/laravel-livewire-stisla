<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.stisla.header')
</head>

<body>
  @livewire('toastr')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        @yield("content")
      </div>
    </section>
  </div>
@include('layouts.stisla.footer')
</body>
</html>
