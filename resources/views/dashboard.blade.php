    @extends('layouts.main')

    @section('title', 'Home')

    @section('content')
<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/bootstrap.js"></script>
        @can('user')
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
              <a href="/" class="navbar-brand">
                <img src="/img/user_logo.png" alt="Pagina do gestor">
              </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="/" class="nav-link">Principal</a>
                </li>
        @elsecan('gestor')
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
              <a href="/" class="navbar-brand">
                <img src="/img/admin_logo.jpg" alt="Pagina do gestor">
              </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="/" class="nav-link">Principal</a>
                </li>
                <li class="nav-item">
                  <a href="/create" class="nav-link">Criar Editais</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar Classes</a>
                  </li>
                @auth


                @endauth

        @endcan
        <form action="/logout" method="POST">
            @csrf
            <a href="/logout"
            class="nav-link"
            onclick="event.preventDefault();
                    this.closest('form').submit();">Sair</a>
        </form>
    </div>
    </div>
</div>
</div>
</div>
    </x-slot>



</x-app-layout>
