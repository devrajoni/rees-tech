<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Project</h4>
                    <a href="{{ route('backend.projects.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-left">SL</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Country</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td class="text-left">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $project->projectCategory->name ?? 'N/A'}}</td>
                                        <td class="text-center">{{ $project->title }}</td>
                                        <td class="text-center">{{ $project->name }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($project->image_one) }}" alt="" style="height: 100px; width: 100px;" />
                                        </td>
                                        <td class="text-center">{{ $project->country_name }}</td>
                                        <td class="text-center">
                                            @if($project->status == 'Active')
                                                <a href="{{ route('backend.project-status', $project->id) }}"><span class="badge badge-pill badge-primary">Active</span>
                                                </a>
                                            @else
                                                <a href="{{ route('backend.project-status', $project->id) }}"><span class="badge badge-pill badge-danger">Inactive</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-right">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('backend.projects.edit', $project->id) }}" class="btn btn-sm">
                                                    <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                                </a>
                                                <form action="{{ route('backend.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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
