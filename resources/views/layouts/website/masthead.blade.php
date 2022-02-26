<div class="masthead-content text-white">
    <div class="container-fluid px-4 px-lg-0">
        <h1 class="fst-italic lh-1 mb-4">{{ $slider -> title }}</h1>
        <p class="mb-5">{{ $slider -> description }}</p>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        @include('message')
        <form action="{{ route('notify.store') }}" method="POST">
            @csrf
                @method('POST')
            <!-- Email address input-->
            <div class="row input-group-newsletter">
                <div class="col">
                    <input id="email" type="email" name="email" placeholder="Enter email address..." aria-label="Enter email address..." /></div>
                <div class="col-auto">
                    <button class="btn btn-primary " type="submit">Notify Me!</button></div>
            </div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback mt-2" data-sb-feedback="email:email">Email is not valid.</div>

        </form>
    </div>
</div>
