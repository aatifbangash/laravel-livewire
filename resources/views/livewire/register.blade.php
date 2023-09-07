@php $errorBag = [] @endphp
<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Register') }}</h3>
                        </div>
                        @if (session()->has('message'))
                            <livewire:toast :title="'Success'" :body="session('message')" :key="random_int(0, 999999)"/>
                        @endif
                        <div class="card-body">
                            <form wire:submit.prevent="register" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="text" class="form-control"
                                               placeholder="Email" aria-label="Email"
                                               aria-describedby="email-addon">
                                    </div>
                                    @error('email')
                                        @php array_push($errorBag, $message) @endphp
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password"
                                               class="form-control"
                                               placeholder="Password" aria-label="Password"
                                               aria-describedby="password-addon">
                                    </div>
                                    @error('password')
                                    @php array_push($errorBag, $message) @endphp
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <div
                                        class="@error('password_confirmation')border border-danger rounded-3 @enderror">
                                        <input wire:model="password_confirmation" id="password_confirmation"
                                               type="password"
                                               class="form-control"
                                               placeholder="Confirm Password" aria-label="password_confirmation"
                                               aria-describedby="password-addon">
                                    </div>
                                    @error('password_confirmation')
                                        @php array_push($errorBag, $message) @endphp
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                            class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Sign up') }}</button>
                                </div>
                            </form>
                            @if(!empty($errorBag))
                                <livewire:toast :title="'Errors'" :body="$errorBag" :key="random_int(0, 999999)"/>
                            @endif
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('Forgot you password? Reset you password') }} <a
                                    href="#"
                                    class="text-info text-gradient font-weight-bold">{{ __('here') }}</a></small>
                            <p class="mb-4 text-sm mx-auto">
                                {{ __(' Do you have an account?') }}
                                <a href="{{ route('login') }}"
                                   class="text-info text-gradient font-weight-bold">{{ __('Login') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div
                            class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url({{ asset('img/curved-images/curved6.jpg') }})"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
