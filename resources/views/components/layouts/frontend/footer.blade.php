<footer>
    <div class="bg-dark">
      <div class="pt-7">
        <div style="border: 0.01rem solid rgba(155, 155, 153, 0.24)"></div>
      </div>
      <div class="container">
        <div class="mt-5 pb-9">
          <div class="row text-white">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div>
                <img
                  src="{{ asset('frontend/assets/images/logo/logo.png')}}"
                  alt=""
                />
              </div>
              <p class="pb-3" style="font-size: 18px; line-height: 36px">
                {!! setting('website_description') !!}
              </p>
              <p class="text-center d-flex text-lg-start">
                  <span style="margin: 0rem 0.5rem 0rem 0rem">
                    <a
                      href="{{ setting('facebook') }}"
                      target="_blank"
                      rel="noreferrer"
                      style="
                        text-decoration: none;
                        font-size: 24px;
                        height: 35px;
                        width: 35px;
                        background-color: #fff;
                        border-radius: 50%;
                      "
                      class="d-flex justify-content-center align-items-center"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"
                          fill="rgba(18,153,246,1)"
                        />
                      </svg>
                    </a>
                  </span>
                  <span style="margin: 0rem 0.5rem 0rem 0rem">
                    <a
                      class="d-flex justify-content-center align-items-center"
                      href="{{ setting('twitter') }}"
                      target="_blank"
                      rel="noreferrer"
                      style="
                        text-decoration: none;
                        font-size: 24px;
                        height: 35px;
                        width: 35px;
                        background-color: #fff;
                        border-radius: 50%;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"
                          fill="rgba(0,172,238,1)"
                        />
                      </svg>
                    </a>
                  </span>
                  <span style="margin: 0rem 0.5rem 0rem 0rem">
                    <a
                      href="{{ setting('instagram') }}"
                      target="_blank"
                      rel="noreferrer"
                      style="
                        text-decoration: none;
                        font-size: 24px;
                        height: 35px;
                        width: 35px;
                        background-color: #fff;
                        border-radius: 50%;
                      "
                      class="d-flex justify-content-center align-items-center"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"
                          fill="rgba(231,76,60,1)"
                        />
                      </svg>
                    </a>
                  </span>
                  <span style="margin: 0rem 0.5rem 0rem 0rem">
                    <a
                      href="{{ setting('youtube') }}"
                      target="_blank"
                      rel="noreferrer"
                      style="
                        text-decoration: none;
                        font-size: 24px;
                        height: 35px;
                        width: 35px;
                        background-color: #fff;
                        border-radius: 50%;
                      "
                      class="d-flex justify-content-center align-items-center"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"
                          fill="rgba(255,0,0,1)"
                        />
                      </svg>
                    </a>
                  </span>
                  <span style="margin: 0rem 0.5rem 0rem 0rem">
                    <a
                      href="{{ setting('linkedin') }}"
                      target="_blank"
                      rel="noreferrer"
                      style="
                        text-decoration: none;
                        font-size: 24px;
                        height: 35px;
                        width: 35px;
                        background-color: #fff;
                        border-radius: 50%;
                      "
                      class="d-flex justify-content-center align-items-center"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                      >
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"
                          fill="rgba(0,114,177,1)"
                        />
                      </svg>
                    </a>
                  </span>
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <div class="ms-0 ms-md-5 ps-0 ps-md-5">
                <p style="font-weight: 700; font-size: 22px">
                  Helpfull Links
                </p>
                <div class="py-2" style="font-size: 17px">
                  <p>
                    <span class="text-american-yellow me-2">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                        ></path>
                      </svg>
                    </span>
                    <a
                      href="{{ route('about') }}"
                      class="text-decoration-none footer-text text-white"
                    >
                      About
                    </a>
                  </p>
                  <p>
                    <span class="text-american-yellow me-2">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                        ></path>
                      </svg>
                    </span>
                    <a
                      href="{{ route('project') }}"
                      class="text-decoration-none footer-text text-white"
                    >
                      Project
                    </a>
                  </p>
                  <p>
                    <span class="text-american-yellow me-2">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                        ></path>
                      </svg>
                    </span>
                    <a
                      href="{{ route('product') }}"
                      class="text-decoration-none footer-text text-white"
                    >
                      Product
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="ms-0">
                <p style="font-weight: 700; font-size: 22px">Industries</p>
                <div class="py-2" style="font-size: 17px">
                  <p>
                    <span class="text-american-yellow me-2">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                        ></path>
                      </svg>
                    </span>
                    <a
                      href="#"
                      class="text-decoration-none footer-text text-white"
                    >
                      Solar City
                    </a>
                  </p>
                  <p>
                    <span class="text-american-yellow me-2">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                        ></path>
                      </svg>
                    </span>
                    <a
                      href="#"
                      class="text-decoration-none footer-text text-white"
                    >
                      Solar Office
                    </a>
                  </p>
                  <p>
                    <span class="text-american-yellow me-2">
                      <svg
                        stroke="currentColor"
                        fill="currentColor"
                        stroke-width="0"
                        viewBox="0 0 16 16"
                        height="1em"
                        width="1em"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                        ></path>
                      </svg>
                    </span>
                    <a
                      href="#"
                      class="text-decoration-none footer-text text-white"
                    >
                      Solar Home
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <p style="font-weight: 700; font-size: 22px">Contact Info</p>
              <div class="py-2" style="font-size: 17px">
                <p>
                  <span class="text-american-yellow me-2">
                    <svg
                      stroke="currentColor"
                      fill="currentColor"
                      stroke-width="0"
                      viewBox="0 0 512 512"
                      height="1em"
                      width="1em"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M444.52 3.52L28.74 195.42c-47.97 22.39-31.98 92.75 19.19 92.75h175.91v175.91c0 51.17 70.36 67.17 92.75 19.19l191.9-415.78c15.99-38.39-25.59-79.97-63.97-63.97z"
                      ></path>
                    </svg>
                  </span>
                  {{ setting('company_address') }}
                </p>
                <p>
                  <span class="text-american-yellow me-2">
                    <svg
                      stroke="currentColor"
                      fill="currentColor"
                      stroke-width="0"
                      viewBox="0 0 16 16"
                      height="1em"
                      width="1em"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                      ></path>
                    </svg>
                  </span>
                  {{ setting('company_phone') }}
                </p>
                <p class="mb-5 mb-lg-0">
                  <span class="text-american-yellow me-2">
                    <svg
                      stroke="currentColor"
                      fill="currentColor"
                      stroke-width="0"
                      viewBox="0 0 24 24"
                      height="1em"
                      width="1em"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path fill="none" d="M0 0h24v24H0z"></path>
                      <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"
                      ></path>
                    </svg>
                  </span>
                  {{ setting('company_email') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-american-yellow" style="background-color: #4C9E00; color: whitesmoke;">
      <div class="container pt-3 pb-2">
        <div>
          <div
            class="d-none d-md-block d-lg-flex fs-20 text-center text-lg-left"
          >
            <div class="flex-grow-1">
              <p class="">
                Copyright {{ Carbon\Carbon::now()->format('Y'); }}
                <span class="text-white">ReesTech </span>Developed By Techuniq .
              </p>
            </div>
            <div class="">
              <a
                href="{{ route('privacy-policy') }}"
                class="text-decoration-none text-white mr-4"
              >
                Terms and Conditions
              </a>
            </div>
            <div class="ms-lg-5">
              <a href="/sitemap" class="text-decoration-none text-white mr-4">
                Sitemap
              </a>
            </div>
            <div class="ms-lg-5">
              <a
                href="{{ route('privacy-policy') }}"
                class="text-decoration-none text-white "
              >
                Privacy & Policy
              </a>
            </div>
          </div>
          <div class="d-block d-md-none fs-20 text-center text-lg-start">
            <div class="">
              <a
                href="{{ route('privacy-policy') }}"
                class="text-decoration-none text-white "
              >
                Terms and Conditions
              </a>
            </div>
            <div class="d-flex justify-content-evenly">
              <div class="ms-lg-5">
                <a href="/sitemap" class="text-decoration-none text-white mr-5 ">
                  Sitemap
                </a>
              </div>
              <div class="ms-lg-5">
                <a
                  href="{{ route('privacy-policy') }}"
                  class="text-decoration-none text-white"
                >
                  Privacy & Policy
                </a>
              </div>
            </div>
            <div class="">
              <p class="fs-14">
                Copyright {{ Carbon\Carbon::now()->format('Y'); }}
                <span class="text-white mr-2">ReesTech </span>Developed By Techuniq 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>