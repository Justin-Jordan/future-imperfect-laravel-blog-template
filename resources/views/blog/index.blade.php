@extends('base')

@section('title', 'Accueil du blog')

@section('content')

    <h1>Mon blog</h1>

    @foreach ($posts as $post)
        <article class="post">
            <header>
                <div class="title">
                    <h2><a
                            href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}">{{ $post->title }}</a>
                    </h2>
                </div>
                <div class="meta">
                    <time class="published" datetime="{{ $post->created_at->format('Y-M-J') }}">
                        {{ $post->created_at->format('F j, Y') }}
                    </time>
                </div>
            </header>
            @if ($post->image)
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}" class="image featured">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                </a>
            @endif
            <p>{{ $post->content }}</p>
            <footer>
                <ul class="actions">
                    <li><a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}"
                            class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    @if ($post->category)
                        <li>{{ $post->category?->name }}</li>
                    @endif
                </ul>
            </footer>
        </article>
    @endforeach

    @include('pagination', ['paginator' => $posts])

@endsection


@section('sidebar')

<!-- Sidebar -->
<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <a href="/" class="logo"><img src="images/logo.jpg" alt="" /></a>
        <header>
            <h2>Future Imperfect</h2>
            <p>Get ready for tomorrow, today.</p>
        </header>
    </section>

    @isset($latestPosts)
        <!-- Mini Posts -->
        <section>
            <div class="mini-posts">
                @foreach ($latestPosts as $post)
                    <article class="mini-post">
                        <header>
                            <h3>
                                <a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <time class="published" datetime="{{ $post->created_at->format('Y-M-J') }}">
                                {{ $post->created_at->format('F j, Y') }}
                            </time>
                        </header>
                        @if ($post->image)
                            <a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}"
                                class="image">
                                <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                            </a>
                        @endif
                    </article>
                @endforeach

            </div>
        </section>

        <!-- Posts List -->
        <section>
            <ul class="posts">
                @foreach ($latestPosts as $post)
                    <li>
                        <article>
                            <header>
                                <h3>
                                    <a
                                        href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <time class="published" datetime="{{ $post->created_at->format('Y-M-J') }}">
                                    {{ $post->created_at->format('F j, Y') }}
                                </time>
                            </header>
                            @if ($post->image)
                                <a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}"
                                    class="image">
                                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
                                </a>
                            @endif
                        </article>
                    </li>
                @endforeach
                <li>
            </ul>
        </section>
    @endisset

    <!-- About -->
    <section class="blurb">
        <h2>About</h2>
        <p>Le futur imparfait est un site web dédié à l'exploration du futur. Nous nous intéressons aux
            tendances émergentes, aux technologies de pointe et aux idées novatrices qui façonneront le monde de
            demain.
        </p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </section>

    <!-- Footer -->
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
            </li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a>
            </li>
            <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a
                href="http://unsplash.com">Unsplash</a>.</p>
    </section>

</section>

@endsection
