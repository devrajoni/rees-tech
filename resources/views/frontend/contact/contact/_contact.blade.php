<section class="contact-us padding-tb">
    <div class="container">
        <div class="row no-gutters section-wrapper">
            <div class="col-lg-12">
                <div class="contact-area">
                    <div class="contact-title">
                        <h4 class="text-center">Please feel free to contact</h4>
                    </div>
                    <div id="respond" class="comment-respond">
                        <div class="add-comment">
                            <form action="{{ route('contact-store') }}" method="post" id="commentform" class="comment-form">
                                @csrf
                                <input name="name" type="text" value="" placeholder="Name">
                               <!--  @error('name')
                                    <div class="invalid-feedback">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror -->
                                <input name="email" type="email" value="" placeholder="Email" required>
                                <input name="subject" type="text" value="" placeholder="Subject" required>
                                <textarea id="comment-reply" name="comment" rows="9" placeholder="Type Here Your Comment" required></textarea>
                                <button type="submit">
                                    <div class="custom-btn">
                                        <span>Submit</span><i class="fas fa-angle-double-right"></i>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>