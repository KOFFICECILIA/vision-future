<li class="nav-item">
    <a href="{{ route('levels.index') }}"
       class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
        <p>Levels</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classes.index') }}"
       class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <p>Classes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('matieres.index') }}"
       class="nav-link {{ Request::is('matieres*') ? 'active' : '' }}">
        <p>Matieres</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('matiereLevels.index') }}"
       class="nav-link {{ Request::is('matiereLevels*') ? 'active' : '' }}">
        <p>Matiere Levels</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Students</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('notes.index') }}"
       class="nav-link {{ Request::is('notes*') ? 'active' : '' }}">
        <p>Notes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('trimesters.index') }}"
       class="nav-link {{ Request::is('trimesters*') ? 'active' : '' }}">
        <p>Trimesters</p>
    </a>
</li>


