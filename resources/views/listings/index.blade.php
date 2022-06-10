<x-layout>
    <div class="container">
        @if (Auth::check())
            <div class="row">
                <div class="col">
                    <a class="btn btn-danger" href="{{route('listings.create')}}"><i class="fa-solid fa-plus"></i> Post Job </a>
                </div>
            </div>
        @else
            <section class="position-relative">
                <div style="background: #E9ECEF; height: 250px;">
                    <div class="texts text-center pt-4">
                        <h1 class="text-uppercase text-dark">Lara<span class="text-black">Jobs</span></h1>
                        <p class="text-dark my-4">Find or post Laravel jobs & projects</p>
                        <div>
                            <a href="{{route('users.register')}}" class="btn btn-danger text-decoration-none">Sign Up to List a Job</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <div class="row mt-4">
            <div class="col col-lg-4 col-md-4">
                <div class="row">
                    <p class="text-dark mt-4">Tipo de contrato</p>
                    <div class="d-flex">
                        <span class="badge bg-secondary m-1">
                            <a class="text-decoration-none text-light" href="">CLT</a>
                        </span>
                        <span class="badge bg-secondary m-1">
                            <a class="text-decoration-none text-light" href="">PJ</a>
                        </span>
                        <span class="badge bg-secondary m-1">
                            <a class="text-decoration-none text-light" href="">Estágio</a>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <p class="text-dark mt-4">Nível</p>
                    <div class="d-flex">
                        <span class="badge bg-secondary m-1">
                            <a class="text-decoration-none text-light" href="">Júnior</a>
                        </span>
                        <span class="badge bg-secondary m-1">
                            <a class="text-decoration-none text-light" href="">Pleno</a>
                        </span>
                        <span class="badge bg-secondary m-1">
                            <a class="text-decoration-none text-light" href="">Sênior</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col col-lg-8 col-md-8">
                <div class="row mt-2">
                    <form class="form" action="{{ route('/') }}">
                        <div class="input-group mb-3">
                            <input type="text" name="search" class="form-control" placeholder="Search for a job..." aria-describedby="basic-addon2"/>
                            <button type="submit" class="btn btn-outline-danger"> <i class="fa fa-search"></i> </button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col">
                        @unless(count($listings) == 0)
                            @foreach ($listings as $listing)
                                <x-listing-card :listing="$listing"/>
                            @endforeach
                        @else
                            <p>No listings found</p>
                        @endunless

                        <div class="mt-6 p-4">
                            {{ $listings->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
