<nav class="navbar">
    {{-- Kiri --}}
    <div class="logo">
        <a href="">Logo</a>
    </div>
    {{-- !Kiri --}}

    {{-- Tengah --}}
    {{-- <div class="navbar-menu">
        <a href="">a</a>
        <a href="">b</a>
        <a href="">c</a>
    </div> --}}
    {{-- !Tengah --}}

    {{-- Kanan --}}
    <div class="navbar-extra">
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">LOGOUT</button>
        </form>
    </div>
    {{-- !Kanan --}}
</nav>
