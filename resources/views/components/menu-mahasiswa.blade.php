<li class="nav-item {{ request()->is('mahasiswa*') ? 'active' : '' }}">
    <a href="{{ route('mahasiswa.form.personal.information') }}">
        <span class="icon bx bx-user"></span>
        <span class="text">Personal Data</span>
    </a>
</li>