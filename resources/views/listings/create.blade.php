<x-layout>
    <div class="container">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Job</h2>
            <p class="mb-4">Post a job to find a developer</p>
        </header>

        <div class="row justify-content-md-center">
            <div class="col col-lg-6 col-md-8">
                <form method="POST" action="{{route('listings.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <label for="company" class="control-label">Company Name</label>
                        <input type="text" class="form-control" name="company" value="{{ old('company') }}" />
                        @error('company')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="title" class="control-label">Job Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />
                        @error('title')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="level" class="control-label">Job Level</label>
                        <select class="form-select" name="level">
                            <option selected value="beginner">beginner</option>
                            <option value="middle">middle</option>
                            <option value="Experient">Experient</option>
                        </select>
                        @error('level')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="level" class="control-label">Contract</label>
                        <select class="form-select" name="contract">
                            <option selected value="pj">CLT</option>
                            <option value="clt">PJ</option>
                            <option value="trainee">Estágio</option>
                        </select>
                        @error('level')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="location" class="control-label">Job Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
                        @error('location')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="email" class="control-label">
                            Contact Email
                        </label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" />
                        @error('email')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="website" class="control-label">
                            Website/Application URL
                        </label>
                        <input type="text" class="form-control" name="website" value="{{ old('website') }}" />
                        @error('website')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="tags" class="control-label">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" class="form-control" name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />
                        @error('tags')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="logo" class="control-label">
                            Company Logo
                        </label>
                        <input type="file" class="form-control" name="logo" />
                        @error('logo')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="description" class="control-label">
                            Job Description
                        </label>
                        <textarea class="form-control" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-danger">
                            Create Job
                        </button>

                        <a href="{{route('/')}}" class="btn btn-secondary"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>