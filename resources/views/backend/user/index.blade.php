<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">User</h4>
                    <a href="{{ route('backend.users.create') }}" class="button button-primary button-outline button-sm mr-3">Create</a>

                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Provider Id</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->provider_id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->role->name ?? null }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('backend.users.edit', $user->id)}}" class="btn btn-sm">
                                            <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                        </a>
                                        <form action="{{ route('backend.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-sm">
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
