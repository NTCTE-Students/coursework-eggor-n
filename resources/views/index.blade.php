@include('includes.header')
    <main class="page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="about-me">
                    <p>Добро пожаловать в <b>Postinger!</b> Здесь вы сможете найти картинки других пользователей, а так же разместить свою<b>!</b> </p>
                </div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row g-0">
                    @foreach ($posts as $post)
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href=""><img class="img-fluid image" src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->image_path }}"></a></div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="d-flex justify-content-center align-items-center content">
                <h3>Перейти в галерею</h3><button class="btn btn-outline-primary btn-lg" type="button"><a href={{ url('/galery') }}>Галерея</a></button>
            </div><br>
            @auth
            <div class="d-flex justify-content-center align-items-center content">
                <h3>Cоздать свой пост</h3><button class="btn btn-outline-primary btn-lg" type="button"><a href={{ url('/createposts') }}>ЖМЯК!</a></button>
            </div>
            @endauth
        </section>
    </main>

@include('includes.footer')
