<div>
    <x-slot name="title">
        {{ __('bap.home') }}
    </x-slot>

    <div class="row row-cards">
        @if(config('bap.home.display-carousels'))
        <div class="col-md-12">
            <div class="card mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('bap.carousels') }}</h3>
                </div>
                <div class="card-body">
                    <div id="home-carousel" class="carousel slide pointer-event" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($carousels as $carousel)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img class="d-block w-100 h-40" alt="{{ $carousel->title }}" src="{{ $carousel->getMedia()[0]->getFullUrl() }}">
                                <div class="carousel-caption-background d-none d-md-block"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>{{ $carousel->title }}</h3>
                                    <p>{{ $carousel->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#home-carousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#home-carousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endif

        @if(config('bap.home.display-articles'))
        <div class="col-md-12">
            <div class="card mb-2">
            <div class="card-header">
                <h3 class="card-title">{{ __('bap.articles') }}</h3>
            </div>
            <div class="list-group list-group-flush list-group-hoverable">
                @foreach($articles as $article)
                <div class="list-group-item">
                    <div  href="{{ route('article.view', [$article->id]) }}" class="row align-items-center">
                        <div class="col-auto">
                            <a href="{{ route('article.view', [$article->id]) }}">
                                <span class="avatar" style="background-image: url({{ $article->getMedia()[0]->getFullUrl() }})"></span>
                            </a>
                        </div>
                        <div class="col text-truncate">
                            <a href="{{ route('article.view', [$article->id]) }}" class="d-block">{{ $article->title }}</a>
                            <small class="d-block text-muted text-truncate mt-n1">{{ $article->description }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        @endif


<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
</div>

    </div>
</div>
