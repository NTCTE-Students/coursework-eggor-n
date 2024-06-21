@include('includes.header')
<p>Привет!</p>
<main class="page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            @auth
            <div class="heading">
            <h1><b>Ваши посты:</b></h1>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card border-0"><img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->image_path }}"></div>
                        <p>Описание поста: {{ $post->description }}</p>
                        <p>Последний раз изменено: {{ $post->updated_at }}</p>
                        <input type="file" name="image" required>
                        <input type="text" name="description" placeholder="Описание..." required>
                        <input type="submit" value="Изменить">
                        <input type="hidden" name="post[id]" value="{{ $post->id }}">
                        <input type="hidden" name="post[image_path]" value="{{ $post->image_path }}">
                    </form>
                    @endforeach
            </div>
            @endauth
            @guest
                <h1>Чтобы создать пост - нужно быть авторизованым!</h1>
            @endguest
        </div>
    </section>
</main>
@include('includes.footer')
