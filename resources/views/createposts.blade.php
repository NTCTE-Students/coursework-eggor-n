@include('includes.header')
<p>Привет!</p>
<main class="page">
    <section class="portfolio-block hire-me">
        <div class="container">
            @auth
            <form action="{{ route('myposts') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" required>
                <input type="text" name="description" placeholder="Описание..." required>
                <br>
                <div class="mb-3"><label class="form-label" for="email"></label><input class="form-control" type="submit" value="Загрузить"></div>
            </form>
            @endauth
            @guest
                <h1>Чтобы создать пост - нужно быть авторизованым!</h1>
            @endguest
        </div>
    </section>
</main>
@include('includes.footer')
