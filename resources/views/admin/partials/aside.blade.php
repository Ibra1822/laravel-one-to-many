<div class="aside">
<ul>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/') }}"><i class="fa-solid fa-house"></i> Home</a>
    </li>
    @auth
    <li class="">
        <a class="nav-link" href="{{route('admin.projects.index') }}"> <i class="fa-solid fa-list-check"></i> Projects</a>
    </li>

    @endauth
</ul>
</div>
