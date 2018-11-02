<h1>Projects</h1>

<ul>
@foreach($projects as $project)
    <li>
        <a href="/projects/{{ $project->getKey() }}">
            {{ $project->title }}
        </a>
    </li>
@endforeach
</ul>
