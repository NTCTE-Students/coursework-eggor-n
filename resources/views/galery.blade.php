@include('includes.header')
    <main class="page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Галерея</h2>
                </div>
                <div class="row">
                    @foreach ($images as $image)
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="{{ asset('images/' . $image->image_path) }}" alt="{{ $image->image_path }}" alt="Card Image"></a>
                                <div class="card-body">
                                    <h6><a href="#">Автор: {{ $image->name }}</a></h6>
                                    <p class="text-muted card-text">Описание: {{ $image->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@include('includes.footer')
