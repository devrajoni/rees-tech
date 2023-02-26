<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Category') }}</label>
                    <div>
                        <select class="form-control" name="category_id" wire:model="category_id" id="category_id">
                            <option value="">---</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label class="label-control">{{ __('Sub Category') }}</label>
                    <div>
                        <select class="form-control" name="sub_category_id" wire:model.defer="sub_category_id" id="sub_category_id">
                            <option value="">---</option>

                            @foreach($subCategories as $subCategory)
                                <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <x-ui.input
                group="col-md-6"
                :label="__('Name')"
                name="name"
                wire:model.defer="name"
                id="name"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Product Code')"
                name="product_code"
                wire:model.defer="product_code"
                id="product_code"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Price')"
                name="price"
                wire:model.defer="price"
                id="price"
                required
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Discount')"
                name="discount"
                wire:model.defer="discount"
                id="discount"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-12"
                :label="__('Image')"
                type="file"
                name="image"
                wire:model.defer="image"
                :value="isset($product) ? asset($product->image_one) : null"
                class="dropify"
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-12"
                :label="__('Gallery')"
                type="file"
                name="gallery[]"
                wire:model.defer="gallery"
                class="dropify"
                multiple
            />
        </div>

        <div class="row">
            @isset($product)
                <div class="col-lg-12 d-flex mb-3">
                    @foreach ($product->productGallery as $image)
                        <div class="image">
                            <img src="{{ asset($image->gallery_one) }}" alt=""style="padding:2px;" id="gallery">
                            <button type="button" wire:click="remove({{ $image->id }} )" class="deleteRecord btn btn-sm">
                                    <i class="ph-trash-bold text-danger fs-3"></i>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endisset
        </div>


        <div class="row">
            <x-ui.input
                group="col-md-12"
                :label="__('Short Description')"
                type="textarea"
                name="short_description"
                id="short_description"
                wire:model.defer="short_description"
                rows="3"
                required
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-12"
                :label="__('Long Description')"
                type="textarea"
                name="long_description"
                id="description"
                class="description"
                wire:model.defer="long_description"
            />
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="label-control">{{ __('Status') }}</label>
                    <div>
                        <select class="form-control" name="status" wire:model.defer="status" id="status">
                            <option value="Active">{{ __('Active') }}</option>
                            <option value="Inactive">{{ __('Inactive') }}</option>
                        </select>
                    </div>
                </div>
            </div>
             <div class="col-12 mt-3">
                <button type="submit" class="button button-primary button-outline button-sm mr-3">Submit</button>
            </div>
        </div>
    </form>
</div>
