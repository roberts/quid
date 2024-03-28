@extends('layout')

@section('content')
<main class="relative z-10">
    <div style="opacity: 1;">
        <section class="pt-10/24 md:pt-4/24">
            <div class="grid grid-cols-24 gap-x-2.5">
                <div class="col-start-3 col-end-23 md:col-start-6 md:col-end-20">
                    <h1 class="text-center md:text-center text-3xl md:text-4xl font-bold">Privacy Statement</h1>
                </div>
            </div>
        </section>
        <section class="pt-4/24 md:pt-2/24 pb-2/24">
            <div class="grid grid-cols-24 gap-x-2.5">
                <div class="col-start-3 col-end-23 md:col-start-4 md:col-end-21">
                    <div class="wysiwyg md:grid md:grid-cols-2 md:gap-x-1/24">
                        <p class="text-base md:text-lg">We take your privacy very seriously at YoungCapital. This means that we handle any personal data we have of you confidentially, carefully and in accordance with the current privacy laws.</p>
                        <p class="text-base md:text-lg">In <a href="https://youngcapital-uploads-production.s3.amazonaws.com/nl/public/Image/youngcapital/Privacystatement%20YoungCapital_DASH.pdf" target="_blank" rel="noindex nofollow" class="text-primary font-bold">this privacy statement</a>, we explain how YoungCapital handles the personal data of candidates (registered and working temp workers), website visitors, contacts who work at our business relations (such as clients and suppliers), our own applicants, interns, freelancers, internal temp workers and employees.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection