



    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title"
               value="{{ $project->title }}"
        >
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" name="description">{{ $project->description }}</textarea>
    </div>


    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ $project->path() }}" class="btn btn-danger">Back to Project</a>

    <br>
    <br>

    @if($errors->any())
        <div class="row card">
            <div class="card-body">
                @foreach($errors->all() as $error)
                        <li class="text-sm text-danger">{{ $error }}</li>
                    @endforeach
            </div>
        </div>
    @endif
