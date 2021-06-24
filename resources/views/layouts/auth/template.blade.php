<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.auth.header')
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
@include('layouts.auth.footer')
</body>
</html>
