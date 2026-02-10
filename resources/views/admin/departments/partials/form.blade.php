<div class="mb-3">
    <label class="form-label">Title *</label>
    <input type="text" name="title" class="form-control"
           value="{{ $department->title ?? '' }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Description *</label>
    <textarea name="description" class="form-control" rows="3" required>
        {{ $department->description ?? '' }}
    </textarea>
</div>

<div class="mb-3">
    <label class="form-label">Image {{ isset($department) ? '' : '*' }}</label>
    <input type="file" name="image" class="form-control">
    @isset($department)
        <img src="{{ asset('storage/'.$department->image) }}"
             class="img-thumbnail mt-2"
             width="120">
    @endisset
</div>

<hr>

@for($i = 1; $i <= 4; $i++)
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Subtagline {{ $i }} Title</label>
            <input type="text"
                   name="subtagline{{ $i }}_title"
                   class="form-control"
                   value="{{ $department->{'subtagline'.$i.'_title'} ?? '' }}">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Subtagline {{ $i }} Description</label>
            <textarea name="subtagline{{ $i }}_description"
                      class="form-control"
                      rows="2">{{ $department->{'subtagline'.$i.'_description'} ?? '' }}</textarea>
        </div>
    </div>
@endfor
