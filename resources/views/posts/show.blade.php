<h1>{{ $post->post_title }}</h1>

<main>
    {!! $post->post_content !!}
</main>

<div>
    <h3>Comments</h3>

    <ul>
        @foreach($post->comments as $comment)
            <li>
                <div>
                    <p>{{ $comment->comment_content }}</p>
                    <span>
                        - By <a href="mailto:{{ $comment->comment_author_email }}">{{ $comment->comment_author }}</a> 
                        on {{ $comment->comment_date }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</div>