<div>
    <div class="add-comment">

        <form wire:submit="submit">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="name" id="name" placeholder="Your Name"  />
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <label for="name">Your Name <span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.defer="email" id="email" placeholder="Your Email"  />
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <label for="email">Your Email <span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('url') is-invalid @enderror" wire:model.defer="url" id="url" placeholder="url">
                        @error('url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <label for="url">Your url</label>
                    </div>
                </div>



                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Leave a message here" wire:model.defer="comment" id="comment"  style="height: 100px;"></textarea>
                        @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <label for="message">Message <span class="text-danger">*</span></label>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary py-3 px-5">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>
