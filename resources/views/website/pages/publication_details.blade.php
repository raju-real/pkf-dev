@extends('website.layouts.app')
@section('title')
    @push('css')
    @endpush

@section('content')
    <section class="heading headerMedium Blue"
        style="background-image:url('{{ asset("assets/website/media/people-690810.jpg") }}');background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <h2>
                <p>Publication</p>
            </h2>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class='row'>
                <div class="col-md-3">
                    <nav class="subnav">
                        <ul>
                            @foreach(publicationCategories() as $category)
                            <li>
                                <a href="{{ route('all-publications',['category' => $category->slug]) }}" title="{{ $category->name }}">{{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class='col-md-9'>
                    <article>
                        <div class='crumbs mt-md-0 mt-sm-4'>
                            <a href="{{ route('home') }}" title="Home">Home</a>
                            
                            <a href="{{ route('all-publications',['category' => $publication->category->slug]) }}" title="{{ $publication->category->name ?? '' }}">{{ $publication->category->name ?? '' }}</a>
                            <span>{{ $publication->title ?? '' }}</span>
                            <button type="button" class="crumbs-button" data-toggle="modal" data-target="#ContactModal">
                                Click here to contact us
                            </button>
                            <div class="modal fade" id="ContactModal" tabindex="-1" aria-labelledby="ContactModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ContactModalLabel">Please fill in the form
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id=""
                                                class="umbraco-forms-form internationalcontactform umbraco-forms-bootstrap3-horizontal">
                                                <form action="" enctype="multipart/form-data" method="post"
                                                    novalidate="novalidate">
                                                    <div class="umbraco-forms-page form-horizontal">
                                                        <fieldset class="umbraco-forms-fieldset" id="">
                                                            <div class="row-fluid">
                                                                <div class="umbraco-forms-container col-md-12 p-3">
                                                                    <div
                                                                        class="form-group  umbraco-forms-field fullname shortanswer mandatory">
                                                                        <label for="2d86134a-ca01-4da7-c720-bf48fce8b79e"
                                                                            class="control-label umbraco-forms-label">
                                                                            Full Name
                                                                            <span class="umbracoForms-Indicator">*</span>
                                                                        </label>
                                                                        <div class="umbraco-forms-field-wrapper">
                                                                            <input type="text"
                                                                                name="2d86134a-ca01-4da7-c720-bf48fce8b79e"
                                                                                id="2d86134a-ca01-4da7-c720-bf48fce8b79e"
                                                                                data-umb="2d86134a-ca01-4da7-c720-bf48fce8b79e"
                                                                                class="text" value=""
                                                                                maxlength="500" data-val="true"
                                                                                data-val-required="Please enter your full name">
                                                                            <span class="field-validation-valid"
                                                                                data-valmsg-for="2d86134a-ca01-4da7-c720-bf48fce8b79e"
                                                                                data-valmsg-replace="true"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group  umbraco-forms-field email shortanswer mandatory alternating">
                                                                        <label for="eae61cf1-01da-4da6-f9c6-df56b0aba741"
                                                                            class="control-label umbraco-forms-label">
                                                                            Email
                                                                            <span class="umbracoForms-Indicator">*</span>
                                                                        </label>
                                                                        <div class="umbraco-forms-field-wrapper">
                                                                            <input type="text"
                                                                                name="eae61cf1-01da-4da6-f9c6-df56b0aba741"
                                                                                id="eae61cf1-01da-4da6-f9c6-df56b0aba741"
                                                                                data-umb="eae61cf1-01da-4da6-f9c6-df56b0aba741"
                                                                                class="text" value=""
                                                                                maxlength="500" data-val="true"
                                                                                data-val-required="Please enter your e-mail"
                                                                                data-val-regex="Please enter a valid e-mail"
                                                                                data-val-regex-pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+">
                                                                            <span class="field-validation-valid"
                                                                                data-valmsg-for="eae61cf1-01da-4da6-f9c6-df56b0aba741"
                                                                                data-valmsg-replace="true"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group  umbraco-forms-field phonenumber shortanswer mandatory">
                                                                        <label for="21550c3d-769d-4700-8db0-f30cd95e0a95"
                                                                            class="control-label umbraco-forms-label">
                                                                            Phone Number
                                                                            <span class="umbracoForms-Indicator">*</span>
                                                                        </label>
                                                                        <div class="umbraco-forms-field-wrapper">
                                                                            <input type="text"
                                                                                name="21550c3d-769d-4700-8db0-f30cd95e0a95"
                                                                                id="21550c3d-769d-4700-8db0-f30cd95e0a95"
                                                                                data-umb="21550c3d-769d-4700-8db0-f30cd95e0a95"
                                                                                class="text" value=""
                                                                                maxlength="500" data-val="true"
                                                                                data-val-required="Please enter a phone number">
                                                                            <span class="field-validation-valid"
                                                                                data-valmsg-for="21550c3d-769d-4700-8db0-f30cd95e0a95"
                                                                                data-valmsg-replace="true"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group  umbraco-forms-field message longanswer mandatory alternating">
                                                                        <label for="ec9abce4-e339-45a3-f143-6ba81f5b8c1d"
                                                                            class="control-label umbraco-forms-label">
                                                                            Message
                                                                            <span class="umbracoForms-Indicator">*</span>
                                                                        </label>
                                                                        <div class="umbraco-forms-field-wrapper">
                                                                            <textarea class="form-control" name="ec9abce4-e339-45a3-f143-6ba81f5b8c1d" id="ec9abce4-e339-45a3-f143-6ba81f5b8c1d"
                                                                                data-umb="ec9abce4-e339-45a3-f143-6ba81f5b8c1d" rows="2" cols="20" data-val="true"
                                                                                data-val-required="Please enter a message"></textarea>
                                                                            <span class="field-validation-valid"
                                                                                data-valmsg-for="ec9abce4-e339-45a3-f143-6ba81f5b8c1d"
                                                                                data-valmsg-replace="true"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-group  umbraco-forms-field wewillonlyuseyourpersonalinformationtohandleyourenquiryseeourpoliciesclicktoconfirm dataconsent mandatory">
                                                                        <label for="93b6754d-2b47-43c9-aee6-20d948ca94ff"
                                                                            class="control-label umbraco-forms-label">
                                                                            We will only use your personal
                                                                            information to handle your enquiry, see
                                                                            our policies, click to confirm
                                                                            <span class="umbracoForms-Indicator">*</span>
                                                                        </label>
                                                                        <div class="umbraco-forms-field-wrapper">
                                                                            <input type="checkbox"
                                                                                name="93b6754d-2b47-43c9-aee6-20d948ca94ff"
                                                                                id="93b6754d-2b47-43c9-aee6-20d948ca94ff"
                                                                                value="true"
                                                                                data-umb="93b6754d-2b47-43c9-aee6-20d948ca94ff"
                                                                                data-val="true"
                                                                                data-val-required="Consent is required to store and process the data in this form."
                                                                                data-rule-required="true"
                                                                                data-msg-required="Consent is required to store and process the data in this form."
                                                                                aria-required="true">
                                                                            <label
                                                                                for="93b6754d-2b47-43c9-aee6-20d948ca94ff">Yes,
                                                                                I give permission to store and
                                                                                process my data</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div style="display: none" aria-hidden="true">
                                                            <input type="text" name="adf160f139f544c0b01d9e2da32bf093">
                                                        </div>
                                                        <div class="umbraco-forms-navigation row-fluid">
                                                            <div class="col-sm-10 col-sm-offset-2">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Send Message" name="submitbtn">
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1>{{ $publication->title ?? "" }}</h1>
                        <div class="umb-grid" id="gridContent">
                            <div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <img src="{{ asset($publication->image) }}" width="100%" height="auto" />
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <p>{!! $publication->description ?? '' !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
