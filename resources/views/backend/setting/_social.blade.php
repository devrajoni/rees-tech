<form action="{{ route('backend.settings.update') }}" method="POST" enctype="multipart/form-data">
	    @csrf
   		@method('PUT')
        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Facebook')"
                name="facebook"
                :value="setting('facebook')"
                id="facebook"
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Twitter')"
                name="twitter"
                :value="setting('twitter')"
                id="twitter"
            />
        </div>

        <div class="row">
            <x-ui.input
                group="col-md-6"
                :label="__('Instagram')"
                name="instagram"
                :value="setting('instagram')"
                id="instagram"
            />

            <x-ui.input
                group="col-md-6"
                :label="__('Youtube')"
                name="youtube"
                :value="setting('youtube')"
                id="youtube"
            />
        </div>
        <div class="row">
            <x-ui.input
                group="col-md-12"
                :label="__('Linked In')"
                name="linkedin"
                :value="setting('linkedin')"
                id="linkedin"
            />
        </div>

        <input type="hidden" name="tab" value="social" />

        <div class="row">
            <div class="col-12 mt-3">
                <button type="submit" class="button button-primary button-outline button-sm">{{ __('Submit') }}</button>
            </div>
        </div>
    </form>
