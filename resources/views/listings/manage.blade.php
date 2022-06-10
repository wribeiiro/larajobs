<x-layout>
	<div class="container">
		<header>
			<h1 class="text-3xl text-center font-bold mb-6 uppercase">
				Manage Jobs
			</h1>
		</header>

        <div class="row">
            <div class="col">
                <a class="btn btn-danger" href="{{route('listings.create')}}"><i class="fa-solid fa-plus"></i> Post Job </a>

                <table class="table table-striped table-bordered table-sm mt-4">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless($listings->isEmpty())
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>
                                        <a class="text-decoration-none" href="{{route('listings.show', ['listing' => $listing->id])}}"> {{ $listing->title }} </a>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('listings.edit', ['listing' => $listing->id])}}" class="text-decoration-none" title="Edit">
                                                <span class="badge bg-primary m-1">
                                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                                </span>
                                            </a>
                                            <form method="POST" action="{{route('listings.destroy', ['listing' => $listing->id])}}">
                                                @csrf
                                                @method('DELETE')
                                                <button style="background: none; border: none">
                                                    <span class="badge bg-danger m-1">
                                                        <i class="fa-solid fa-trash"></i> Delete
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>
                                    <p class="text-center">No Listings Found</p>
                                </td>
                            </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
