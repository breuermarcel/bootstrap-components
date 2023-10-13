@props([
'article' => null,
'hover' => true
])

<article class="card shadow-lg {{ !$hover ?: 'hover-enlarge' }}" itemscope="itemscope" itemtype="https://schema.org/Article">
    <div class="position-relative">
        <img src="{{ asset($article->image) }}" class="card-img-top object-fit-cover vh-45" alt="{{ $article->title }}" title="{{ $article->title }}" loading="lazy">

        <time class="badge rounded-0 text-bg-dark position-absolute start-0 bottom-0" datetime="{{ $article->published_at ? $article->published_at->format('Y-m-d') : '' }}" itemprop="datePublished">{{ $article->published_at ? $article->published_at->diffForHumans() : '' }}</time>
    </div>
    <div class="card-body">
        <p class="card-title h1 d-inline-block" itemprop="headline">{{ $article->title }}</p>
        @if ($article->published_at)
        <p class="card-text">
            <small class="text-body-secondary">{{ __('Veröffentlicht: ') }}
                {{ $article->published_at->diffForHumans() }}</small>
        </p>
        @endif
        <p class="card-text fs-4" itemprop="description">{!! nl2br($article->teaser) !!}</p>
        <a href="{{ route('blog.show', $article) }}" title="{{ $article->title }}" target="_self" class="btn btn-secondary stretched-link">{{ __('Weiterlesen') }}</a>
    </div>
</article>
