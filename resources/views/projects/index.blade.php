<h1>Projects</h1>

<ul>
@foreach($projects as $project)
    <li>Title: {{ $project->title }}</li>
    <li>Description: {{ $project->description }}</li>
@endforeach
</ul>
