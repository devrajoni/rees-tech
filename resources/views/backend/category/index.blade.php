<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Category</h4>
                    <a href="{{ route('backend.categories.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $category->name }}</td>
                                        <td class="text-center">
                                            @if($category->status == 'Active')
                                                <a href="{{ route('backend.product-category-status', $category->id) }}"><span class="badge badge-pill badge-primary">Active</span>
                                                </a>
                                            @else
                                                <a href="{{ route('backend.product-category-status', $category->id) }}"><span class="badge badge-pill badge-danger">Inactive</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-end d-flex">
                                            <a href="{{ route('backend.categories.edit', $category->id )}}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                            </a>
                                            <form action="{{ route('backend.categories.destroy', $category->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('delete')
                                                <button  class="btn btn-sm">
                                                    <i class="ph-trash-bold text-danger fs-3"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.backend>
