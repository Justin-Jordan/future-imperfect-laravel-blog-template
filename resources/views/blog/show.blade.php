@extends('base')

@section('title', $post->title)

@section('content')

    <article class="post">
        <header>
            <div class="title">
                <h2><a href="#">{{ $post->title }}</a></h2>
            </div>
            <div class="meta">
                <time class="published" datetime="{{ $post->created_at->format('Y-M-J') }}">
                    {{ $post->created_at->format('F j, Y') }}
                </time>
            </div>
        </header>
        @if ($post->image)
                <span class="image featured">
                    <img style="height: 400px;" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                </span>
            @endif
        <p>{{ $post->content }}</p>
        <p>Nunc quis dui scelerisque, scelerisque urna ut, dapibus orci. Sed vitae condimentum lectus, ut imperdiet quam.
            Maecenas in justo ut nulla aliquam sodales vel at ligula. Sed blandit diam odio, sed fringilla lectus molestie
            sit amet. Praesent eu tortor viverra lorem mattis pulvinar feugiat in turpis. Class aptent taciti sociosqu ad
            litora torquent per conubia nostra, per inceptos himenaeos. Fusce ullamcorper tellus sit amet mattis dignissim.
            Phasellus ut metus ligula. Curabitur nec leo turpis. Ut gravida purus quis erat pretium, sed pellentesque massa
            elementum. Fusce vestibulum porta augue, at mattis justo. Integer sed sapien fringilla, dapibus risus id,
            faucibus ante. Pellentesque mattis nunc sit amet tortor pellentesque, non placerat neque viverra. </p>
        <footer>
            <ul class="stats">
                @if ($post->category)
                        <li>{{ $post->category?->name }}</li>
                    @endif
            </ul>
        </footer>
    </article>

@endsection

@section('footer')
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a
                href="http://unsplash.com">Unsplash</a>.</p>
    </section>
@endsection
