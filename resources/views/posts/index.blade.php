<h1>Blog</h1>

<main>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/blog/{{ $post->post_name }}">
                    {{ $post->post_title }}
                </a>
            </li>
        @endforeach
    </ul>
</main>