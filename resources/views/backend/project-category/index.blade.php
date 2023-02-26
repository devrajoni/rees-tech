<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
        </div>
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Category</h4>
                    <a href="{{ route('backend.project-categories.create')}}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-left">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($categories as $category)
                                    <tr>
                                        <td class="text-left">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $category->name }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($category->image) }}" alt="{{ asset($category->image) }}" style=" height:100px; width: 150px;">
                                        </td>
                                        <td class="text-center">
                                            @if($category->status == 'Active')
                                                <a href="{{ route('backend.project-category-status', $category->id) }}"><span class="badge badge-pill badge-primary">Active</span>
                                                </a>
                                            @else
                                                <a href="{{ route('backend.project-category-status', $category->id) }}"><span class="badge badge-pill badge-danger">Inactive</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('backend.project-categories.edit', $category->id) }}" class="btn btn-sm">
                                                    <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                                </a>
                                                <form action="{{ route('backend.project-categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('delete')
                                                    <button  class="btn btn-sm">
                                                        <i class="ph-trash-bold text-danger fs-3"></i>
                                                    </button>
                                                </form>
                                            </div>
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

