<x-layout>
    <div class="container">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Job</h2>
            <p class="mb-4">Edit: {{ $listing->title }}</p>
        </header>

        <div class="row justify-content-md-center">
            <div class="col col-lg-6 col-md-8">
                <form method="POST" action="{{route('listings.update', ['listing' => $listing->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mt-3">
                        <label for="company" class="label-control">Company Name</label>
                        <input type="text" class="form-control" name="company" value="{{ $listing->company }}" />

                        @error('company')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="title" class="label-control">Job Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}" />

                        @error('title')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="level" class="control-label">Job Level</label>
                        <select class="form-select" name="level">
                            <option  value="beginner" @if ($listing->level === 'beginner') selected @endif >Beginner</option>
                            <option  value="middle" @if ($listing->level === 'middle') selected @endif >Middle</option>
                            <option  value="Experient" @if ($listing->level === 'Experient') selected @endif >Experient</option>
                        </select>
                        @error('level')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="level" class="control-label">Contract</label>
                        <select class="form-select" name="contract">
                            <option  value="pj" @if ($listing->contract === 'pj') selected @endif >CLT</option>
                            <option  value="clt" @if ($listing->contract === 'clt') selected @endif >PJ</option>
                            <option  value="trainee" @if ($listing->contract === 'trainee') selected @endif >Estágio</option>
                        </select>
                        @error('contract')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="location" class="label-control">Job Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{ $listing->location }}" />

                        @error('location')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="email" class="label-control">
                            Contact Email
                        </label>
                        <input type="text" class="form-control" name="email" value="{{ $listing->email }}" />

                        @error('email')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="website" class="label-control">
                            Website/Application URL
                        </label>
                        <input type="text" class="form-control" name="website" value="{{ $listing->website }}" />

                        @error('website')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="tags" class="label-control">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" class="form-control" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />

                        @error('tags')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="logo" class="label-control">
                            Company Logo
                        </label>

                        <div class="row">
                            <div class="col-6">
                                <input type="file" class="form-control" name="logo" />
                            </div>
                            <div class="col-6">
                                <img class="img-thumbnail rounded" src="{{ $listing->logo ? asset('storage/app/public/' . $listing->logo) : asset('/images/no-image.png') }}" alt="Company logo" />
                            </div>
                        </div>

                        @error('logo')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="description" class="label-control">
                            Job Description
                        </label>
                        <textarea class="form-control" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>

                        @error('description')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-danger">
                            Update Job
                        </button>

                        <a href="{{route('listings.manage')}}" class="btn btn-secondary"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>