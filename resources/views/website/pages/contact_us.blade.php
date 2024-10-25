@extends('website.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12">
                        <h1 class="heading-title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="text-decoration-none">Contact Us</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Navtab -->
    <section id="service-details" class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thank you for your interest in PKF Hong Kong</h3>
                    <p>We'll help direct your enquiry to the right place. You can start with the form below:</p>
                    <p>Alternatively you can contact us at</p>
                    <p>
                        <span>{{ siteSetting()['address'] ?? '' }}</span><br>
                        <span>Tel:{{ siteSetting()['phone'] ?? (siteSetting()['mobile'] ?? '') }}</span><br>
                        <span>Email:{{ siteSetting()['email'] ?? '' }}</span><br>
                    </p>
                    <span style="border-top: 1px solid black;"></span>
                    <iframe class="mb-4 mb-lg-0 mt-2" src="{{ siteSetting()['google_map_url'] }}" frameborder="0"
                        style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <!-- Latest News -->
                    <div id="latest-news" class="latest-news">
                        <div class="section-common-heading">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="row gy-4">
                            <form action="{{ route('send-contact-message') }}" method="post" role="form"
                                class="php-email-form">
                                <div class="form-group">
                                    <label>Name {!! starSign() !!}</label>
                                    <input type="text" name="name" class="form-control name_field" id="name"
                                        placeholder="Your Name">
                                    <span class="text-danger contact-error-message name_error"></span>
                                </div>
                                <div class="form-group my-3">
                                    <label>Email {!! starSign() !!}</label>
                                    <input type="text" class="form-control email_field" name="email" id="email"
                                        placeholder="Your Email">
                                    <span class="text-danger contact-error-message email_error"></span>
                                </div>
                                <div class="form-group my-3">
                                    <label>Mobile {!! starSign() !!}</label>
                                    <input type="text" class="form-control mobile_field" name="mobile" id="mobile"
                                        placeholder="Mobile">
                                    <span class="text-danger contact-error-message mobile_error"></span>
                                </div>
                                <div class="form-group my-3">
                                    <label>Message {!! starSign() !!}</label>
                                    <textarea class="form-control message_field" name="message" rows="5" placeholder="Message"></textarea>
                                    <span class="text-danger contact-error-message message_error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="checkbox" class="checkbox_error">
                                    We will only use your personal information to handle your enquiry, see our policy, click
                                    to confirm
                                </div>
                                <div class="my-3">
                                    <div class="loading d-none">Please wait...</div>
                                    <div class="alert alert-danger error-message d-none"></div>
                                    <div class="alert alert-success sent-message d-none"></div>
                                </div>
                                <div class="text-center"><button class="btn btn-primary" type="button"
                                        id="send-contact-message">Send Message</button></div>
                            </form>
                        </div><!-- End recent posts list -->
                    </div>
                    <!-- Latest News End -->


                </div>
            </div>
        </div>
    </section>
    <!-- Navtab End -->
@endsection

@push('js')
    <script>
        $(document).on('click', '#send-contact-message', function(event) {
            event.preventDefault();

            if (!$('input[name="checkbox"]').is(':checked')) {
                alert("Please check the box to confirm.");
                return; // Stop the form submission
            }

            const $sendButton = $('.php-email-form');
            const $form = $('.php-email-form');
            const $loading = $('.loading');
            const $sentMessage = $('.sent-message');
            const $errorMessage = $('.error-message');

            $sendButton.attr('disabled', true);
            $loading.removeClass('d-none');

            $.ajax({
                url: "{{ route('send-contact-message') }}",
                method: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function(response) {

                    $form.find('.form-control').removeClass('is-invalid');
                    $('.contact-error-message').empty();

                    $loading.addClass('d-none');
                    if (response.status === 'success') {
                        $form[0].reset();
                        $errorMessage.addClass('d-none');
                        $sentMessage.removeClass('d-none').text(response.message);
                    } else {
                        $sentMessage.addClass('d-none');
                        $errorMessage.removeClass('d-none').text(response.message);
                    }

                    $sendButton.attr('disabled', false);
                },
                error: function(error) {
                    $sendButton.attr('disabled', false);
                    if (error.status === 422) {
                        $loading.addClass('d-none');
                        const errors = error.responseJSON.errors;

                        $('.contact-error-message').empty();
                        $.each(errors, function(field, messages) {
                            const $field = $(`.${field}_field`);
                            const $errorField = $(`.${field}_error`);

                            $field.addClass('is-invalid');
                            $errorField.empty().text(messages[0]);
                        });
                    }
                }
            });
        });
    </script>
@endpush
