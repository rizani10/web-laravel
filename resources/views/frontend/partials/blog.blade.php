<div class="container">

    <div class="section-title">
    <h2>Blog</h2>
    </div>

    <div class="row justify-content-center">
        @forelse ($posts as $post)
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
                <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)" class="text-white text-decoration-none">{{ $post->category->name }}</div>

                @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="img-fluid mb-3">
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif

                <h4>{{ $post->title }}</h4>
                <p>{{ $post->excerpt }}</p>
                <a href="{{ $post->slug }}" class="text-decoration-none btn btn-sm btn-primary mb-3">baca selengkapnya ... </a>
            </div>
        </div>
    @empty
        <div class="box">
            <h4 class=row justify-content-center>Tidak ada post</h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="/blog" class="btn btn-primary">Selengkapnya .. </a>
        </div>
    @endforelse

        
    </div>


</div>
    {{-- <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box">
        <span>02</span>
        <h4>Repellat Nihil</h4>
        <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
        </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box">
        <span>03</span>
        <h4> Ad ad velit qui</h4>
        <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
        </div>
    </div> --}}
