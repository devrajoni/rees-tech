<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Mail</h4>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Subject</th>
                                    <th class="text-end">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $contact)
                                    <tr style="height: 100px; width: 100px;">
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $contact->name }}
                                        </td>
										<td class="text-center">{{ $contact->email }}
                                        </td>
                                        <td class="text-center">{{ $contact->subject }}
                                        </td>
                                        <td class="text-end">{!! $contact->comment !!}
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

