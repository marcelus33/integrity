{{-- Recordemos que el sidebar esta incluido a la vez en el main layout --}}
<div id="main-sidebar" class="card d-block">
    <div class="card-header">
      Opciones
    </div>
    <ul class="list-group">
      {{-- Aquí colocaremos el listado de operaciones segun la ruta --}}
      @yield('options-list')
    </ul>
</div>
