<x-layouts.backend>
	<div class="content-body">
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head d-flex justify-content-between">
                    <h4 class="title">Product</h4>
                    <a href="{{ route('backend.products.create') }}" class="button button-primary button-outline button-sm">Create</a>
                </div>
                <div class="box-body">
                    <div class=" table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-start border-0">{{ __('SL') }}</th>
                                    <th class="text-center border-0">{{ __('Category') }}</th>
                                    <th class="text-center border-0">{{ __('Sub Category') }}</th>
                                    <th class="text-center border-0">{{ __('Name') }}</th>
                                    <th class="text-center border-0">{{ __('Product Code') }}</th>
                                    <th class="text-center border-0">{{ __('Price') }}</th>
                                    <th class="text-center border-0">{{ __('Image') }}</th>
                                    <th class="text-center border-0">{{ __('Status') }}</th>
                                    <th class="text-end border-0">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="text-start">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $product->productCategory->name ?? 'N/A' }}</td>
                                        <td class="text-center">{{ $product->productSubCategory->name ?? 'N/A' }}</td>
                                        <td class="text-center">{{ $product->name }}</td>
                                        <td class="text-center">{{ $product->product_code }}</td>
                                        <td class="text-center">{{ $product->price }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset($product->image_one )}}" style="height: 50px; width: 120px;">
                                        </td>
                                        <td class="text-center">
                                            @if($product->status == 'Active')
                                                <a href="{{ route('backend.product-status', $product->id) }}"><span class="badge badge-pill badge-primary">Active</span>
                                                </a>
                                            @else
                                                <a href="{{ route('backend.product-status', $product->id) }}"><span class="badge badge-pill badge-danger">Inactive</span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="d-flex text-end">
                                            <a href="{{ route('backend.products.edit', $product->id )}}" class="btn btn-sm">
                                                <i class="ph-note-pencil-bold text-primary fs-3"></i>
                                            </a>
                                            <form action="{{ route('backend.products.destroy', $product->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
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