<form action="" method="post" class="vstack gap2">
    @csrf
    @method($post->id ? "PATCH" : "POST")
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" class="form-control" value="{{ old('title', $post->title) }}" name="title">
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="slug"></label>
        <input type="text" id="slug" class="form-control" value="{{ old('slug', $post->slug) }}" name="slug">
        @error('slug')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="content"></label>
        <textarea id="content" class="form-control" name="content">{{ old('content', $post->content) }}</textarea>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary" type="submit">
        @if ($post->id)
            Modifier
        @else
            Créer
        @endif
    </button>
</form>
