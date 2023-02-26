<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Project Gallery</h4>
                    <a href="{{ route('backend.banners.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banners as $banner)
                                    <tr style="height: 100px; width: 100px;">
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($banner->image) }}" style="height:100px; width: 200px;">

                                        </td>
                                        <td class="d-flex text-end">
                                            <a href="{{ route('backend.banners.edit', $banner->id) }}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                            </a>
                                            <form action="{{ route('backend.banners.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
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

