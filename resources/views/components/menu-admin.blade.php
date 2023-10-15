<li class="nav-item nav-item-has-children {{ request()->is('master/*') ? 'open' : '' }}">
    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#master-data" aria-controls="master-data"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon bx bx-folder-open" style="color: #333;"></span>
        <span class="text" style="color: #333;">Master Data</span>
    </a>
    <ul id="master-data" class="collapse dropdown-nav {{ request()->is('master/*') ? 'show' : '' }}">
        <li class="nav-item {{ request()->is('master/program*') ? 'active' : '' }}">
            <a href="{{ route('master.program.index') }}"> Program</a>
        </li>
        {{-- <li class="nav-item {{ request()->is('master/school-year*') ? 'active' : '' }}">
            <a href="{{ route('master.school.year.index') }}"> School Year</a>
        </li> --}}
    </ul>
</li>
{{-- <li class="nav-item {{ request()->is('classroom*') ? 'active' : '' }}">
    <a href="{{ route('classroom.index') }}">
        <span class="icon bx bx-laptop"></span>
        <span class="text">Setup Class</span>
    </a>
</li>
<li class="nav-item {{ request()->is('invoice*') ? 'active' : '' }}">
    <a href="{{ route('invoice.index') }}">
        <span class="icon bx bx-receipt"></span>
        <span class="text">Setup Invoice</span>
    </a>
</li>
<li class="nav-item {{ request()->is('mahasiswa*') ? 'active' : '' }}">
    <a href="{{ route('mahasiswa.index') }}">
        <span class="icon bx bx-user"></span>
        <span class="text">Data Mahasiswa</span>
    </a>
</li>
<li class="nav-item {{ request()->is('violation*') ? 'active' : '' }}">
    <a href="{{ route('violation.index') }}">
        <span class="icon bx bx-file"></span>
        <span class="text">Violation</span>
    </a>
</li>
<li class="nav-item {{ request()->is('graduation*') ? 'active' : '' }}">
    <a href="{{ route('graduation.index') }}">
        <span class="icon bx bxs-graduation"></span>
        <span class="text">Graduation</span>
    </a>
</li>
<li class="nav-item {{ request()->is('report/transaction*') ? 'active' : '' }}">
    <a href="{{ route('report.transaction.index') }}">
        <span class="icon bx bxs-report"></span>
        <span class="text">Report</span>
    </a>
</li> --}}
