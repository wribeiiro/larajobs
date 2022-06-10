@props(['listing'])

<div class="card mb-2">
    <div class="row">
        <div class="col col-md-4 d-flex">
            <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}" class="img-fluid rounded-start align-self-center align-items-center align-items-center" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <a class="text-decoration-none" href="{{ route('listings.show', ['listing' => $listing->id]) }}/">
                        {{ $listing->title }}
                    </a>
                </h5>
                <p class="card-text">{{ substr($listing->description, 0, 180) }}...</p>
                <div class="justify-content-between align-items-center align-self-center">
                    @foreach (explode(',', $listing->tags) as $tag)
                        <span class="badge bg-danger m-1">
                            <a class="text-decoration-none text-light" href="/?tag={{ $tag }}">{{ $tag }}</a>
                        </span>
                    @endforeach
                </div>
                <p class="card-text"><small class="text-muted">{{ $listing->company }} | {{ $listing->location }}</small></p>
            </div>
        </div>
    </div>
</div>
