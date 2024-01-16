<form action="" method="post" class="vstack gap2">
    @csrf
    @method($post->id ? 'PATCH' : 'POST')
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
        <label for="content">Contenue</label>
        <textarea id="content" class="form-control" name="content">{{ old('content', $post->content) }}</textarea>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="category">Catégorie</label>
        <select id="category" class="form-control" name="category_id">
            <option value="">Sélectionner une catégorie</option>
            @foreach ($categories as $category)
                <option @selected(old('category_id', $post->category_id) == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            {{ $message }}
        @enderror
    </div>
    @php
        $tagsIds = $post->tags()->pluck('id');
    @endphp
    
    <div class="form-group">
        <label for="tag">Tags</label>
        <select id="tag" class="form-control" name="tags[]" multiple>
            @foreach ($tags as $tag)
                <option @selected($tagsIds->contains($tag->id)) value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        @error('tags')
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
