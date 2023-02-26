<footer class="footer-section">
    <div class="footer-top" style="background-image: url({{ asset('frontend/assets/images/footer/bg-image.jpg') }}); background-position: center bottom; overflow: hidden;">
        <div class="container">
            <div class="top">
                <div class="post-item" data-aos="fade-right" data-aos-duration="700">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/images/footer/icon/01.png') }}" alt="footer">
                    </div>
                    <div class="post-content">
                        <h6>Give us a Call</h6>
                        <p>{{ setting('company_phone') }}</p>
                    </div>
                </div>
                <div class="post-item" data-aos="fade-up" data-aos-duration="700">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/images/footer/icon/02.png') }}" alt="footer">
                    </div>
                    <div class="post-content">
                        <h6>Send us a Message</h6>
                        <p>{{ setting('company_email') }}</p>
                    </div>
                </div>
                <div class="post-item" data-aos="fade-left" data-aos-duration="700">
                    <div class="post-thumb">
                        <img src="{{ asset('frontend/assets/images/footer/icon/03.png') }}" alt="footer">
                    </div>
                    <div class="post-content">
                        <h6>Visit our Location</h6>
                        <p>{{ setting('company_address') }}</p>
                    </div>
                </div>
            </div>

            <div class="bottom row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-right" data-aos-duration="700">
                    <div class="bottom-item">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{asset(setting('logo')) ?? null}}" alt="footer-logo"></a>
                        </div>
                        <p>{!! setting('website_description') !!}</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-up" data-aos-duration="700">
                    <div class="bottom-item">
                        <h4>Latest Project</h4>
                        <ul>
                            @foreach(App\Models\Project::latest()->LIMIT('2')->get() as $project)
                                <li class="post-item" style="padding: 5px!important;">
                                    <div class="post-thumb">
                                        <a href="{{ route('project') }}"><img src="{{ asset($project->image_one )}}" alt="footer"></a>
                                    </div>
                                    <div class="post-content">
                                        <h6>
                                            <a href="{{ route('project') }}">{{ $project->title }}</a>
                                        </h6>
                                        <p>{{ $project->started_at->format('d-m-Y') }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12" data-aos="fade-left" data-aos-duration="700">
                    <div class="bottom-item">
                        <h4>Our Photo Gallery</h4>
                        <ul class="footer-gallery">
                            @foreach(App\Models\Banner::with('bannerGallery')->latest()->LIMIT('6')->get() as $banner)
                                @foreach($banner->bannerGallery as $data)
                                    <li>
                                        <div class="post-thumb">
                                            <a href="#"><img src="{{ asset($data->gallery) }}" alt="footer-gallery"></a>
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper">
                <div class="left">
                    <span>&copy; {{ setting('copyright_year') }} <a href="{{ route('home') }}"></a> Design by <a href="{{ route('home') }}">{{ setting('copyright_name') }}.</a></span>
                </div>
                <ul class="right">
                    <li>
                        <a class="facebook" href="{{ setting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <span>Facebook</span>
                    </li>
                    <li>
                        <a class="google" href="{{ setting('youtube') }}"><i class="fab fa-youtube"></i></a>
                        <span>Youtube</span>
                    </li>
                    <li>
                        <a class="twitter" href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                        <span>Twitter</span>
                    </li>
                    <li>
                        <a class="pinterest" href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                        <span>Instagram</span>
                    </li>
                    <li>
                        <a class="linkedin" href="{{ setting('linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        <span>Linkedin</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<footer class="mt-17"><div class="bg-black"><div class="pt-7"><div style="border: 0.01rem solid rgba(155, 155, 153, 0.24);"></div></div><div class="container-fluid"><div class="ms-13 me-13 mt-5 pb-9"><div class="row text-white"><div class="col-lg-3 mb-5 mb-lg-0"><p class="fs-18 lh-36 py-5">AFRO Telecom was originally formed in 2004 to deliver quality products and services to the MEA cellular network operators. Focusing on the power management niche</p><p class="text-center text-lg-start"><span class="social-margin"><a href="https://facebook.com/afrosocial247" target="_blank" rel="noreferrer"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="fs-24 cursor-pointer social-icon text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path></svg></a></span><span class="social-margin"><a href="https://twitter.com/afrosocial247/" target="_blank" rel="noreferrer"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="fs-24 cursor-pointer social-icon text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path></svg></a></span><span class="social-margin"><a href="https://www.instagram.com/afrosocial247/" target="_blank" rel="noreferrer"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="fs-24 cursor-pointer social-icon text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path></svg></a></span><span class="social-margin"><a href="https://www.youtube.com/channel/UC-sdlva6q-MZhUqwtTcr8TQ" target="_blank" rel="noreferrer"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="fs-24 cursor-pointer social-icon text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path></svg></a></span><span class="social-margin"><a href="https://www.linkedin.com/company/afrosocial247/" target="_blank" rel="noreferrer"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="fs-24 cursor-pointer social-icon text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path></svg></a></span></p><div><span class=" lazy-load-image-background blur lazy-load-image-loaded" style="color: transparent; display: inline-block;"><img src="https://test.afro-group.net/public/uploads/theme/afro1667868010.png" class="img-fluid" loading="lazy" alt="footer logo"></span></div></div><div class="col-12 col-md-6 col-lg-3"><div class="ms-0 ms-md-5 ps-0 ps-md-5"><p class="fs-22 gilroy-bold">Helpfull Links</p><div class="fs-20 py-5"><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/media-center">Media Center</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/afro-academy">Afro Academy</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/career">Career</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/suppliers">Suppliers</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/investors">Investors</a></p></div></div></div><div class="col-12 col-md-6 col-lg-3"><div class="ms-0"><p class="fs-22 gilroy-bold">Industries</p><div class="fs-20 py-5"><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/industry/agriculture">Agriculture</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/industry/solar-alternative-energy">Solar &amp; Alternative Energy</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/industry/smart-homes">Smart Homes</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/industry/software-apps">Software &amp; Apps</a></p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"></path></svg></span><a class="text-decoration-none footer-text" href="/industry/digital-marketing">Digital Marketing</a></p></div></div></div><div class="col-lg-3"><p class="fs-24 gilroy-bold">Contact Info</p><div class="fs-20 py-3 py-md-5"><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M444.52 3.52L28.74 195.42c-47.97 22.39-31.98 92.75 19.19 92.75h175.91v175.91c0 51.17 70.36 67.17 92.75 19.19l191.9-415.78c15.99-38.39-25.59-79.97-63.97-63.97z"></path></svg></span>(18/1/4) Farrag Mall, Central Axis, 2nd District, 6th Octobar, Giza, Egypt</p><p><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path></svg></span>(+20) 2 38367340/9</p><p class="mb-5 mb-lg-0"><span class="text-american-yellow me-3"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></svg></span>info@afro-group.com</p></div></div></div></div></div></div><div class="bg-american-yellow"><div class="container-fluid pt-3 pb-2"><div class="ms-13 me-13"><div class="d-none d-md-block d-lg-flex fs-20 text-center text-lg-start"><div class="flex-grow-1"><p class="">Copy right @2023 <span class="text-white">AFRO Group</span> All Right Reserved.</p></div><div class=""><a class="text-decoration-none text-dark" href="/terms-and-condition">Terms and Conditions</a></div><div class="ms-lg-5"><a class="text-decoration-none text-dark" href="/sitemap">Sitemap</a></div><div class="ms-lg-5"><a class="text-decoration-none text-dark" href="/privacy-and-policy">Privacy &amp; Policy</a></div></div><div class="d-block d-md-none fs-20 text-center text-lg-start"><div class=""><a class="text-decoration-none text-dark" href="/terms-and-condition">Terms and Conditions</a></div><div class="d-flex justify-content-evenly"><div class="ms-lg-5"><a class="text-decoration-none text-dark" href="/sitemap">Sitemap</a></div><div class="ms-lg-5"><a class="text-decoration-none text-dark" href="/privacy-and-policy">Privacy &amp; Policy</a></div></div><div class=""><p class="fs-14">Copyright @2023 <span class="text-white">AFRO Group</span> All Right Reserved.</p></div></div></div></div></div></footer>