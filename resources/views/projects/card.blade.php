<div class="card my-3" >
    <div class="card-body">
        <h5 class="card-title font-weight-bold project-title">
            <a href="{{ $project->path() }}">{{ $project->title }}</a>
        </h5>
        <p class="card-text text-muted">
            {{ Str::limit($project->description, 100) }}
        </p>
    </div>
</div>
