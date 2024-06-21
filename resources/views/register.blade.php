@include('includes.header')

    <main class="page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Регистрация</h2>
                </div>
                <form class="border rounded border-0 shadow-lg p-3 p-md-5" data-bs-theme="light" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3"><label class="form-label" for="email">Имя</label><input class="form-control" type="text" id="email" name="user[name]" required></div>
                    <div class="mb-3"><label class="form-label" for="email">Почта</label><input class="form-control" type="email" id="email" name="user[email]" required></div>
                    <div class="mb-3"><label class="form-label" for="email">Пароль</label><input class="form-control" type="password" id="email" name="user[password]" required></div>
                    <div class="mb-3"><label class="form-label" for="email">Подтверждение пароля</label><input class="form-control" type="password" id="email" name="user[password_confirmation]" required></div>
                    <div class="mb-3"><label class="form-label" for="email"></label><input class="form-control" type="submit" value="Зарегистрироваться"></div>
                </form>

            </div>
        </section>
    </main>
@include('includes.footer')
