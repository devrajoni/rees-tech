<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Work Process</h4>
                    <a href="{{ route('backend.work-process.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($workProcesses as $workProcess)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $workProcess->title }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($workProcess->image)}}" alt=""style=" width: 100px;">
                                        </td>
                                        <td class="text-center">
                                            @if($workProcess->status == 'Active')
                                                <a href="{{ route('backend.work-process-status', $workProcess->id) }}"><span class="badge badge-pill badge-primary">Active</span>
                                                </a>
                                            @else
                                                <a href="{{ route('backend.work-process-status', $workProcess->id) }}"><span class="badge badge-pill badge-danger">Inactive</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="d-flex text-end">
                                            <a href="{{ route('backend.work-process.edit', $workProcess->id )}}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                            </a>
                                            <form action="{{ route('backend.work-process.destroy', $workProcess->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
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

