@extends('admin.layouts.app')
@section('title',' Profile')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Profile</h2>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <x-alert-component />
    <div class="content-body">
        <section class="app-user-view">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card user-card">
                        <div class="card-body">
                            <div class="row">
                                <div
                                    class="col-xl-6 col-lg-6 d-flex flex-column justify-content-between border-container-lg">
                                    <div class="user-avatar-section">
                                        <div class="d-flex justify-content-start">
                                            <img class="img-fluid rounded" src="{{ asset($user->image) }}" height="104"
                                                width="104" alt="User avatar" />
                                            <div class="d-flex flex-column ml-1">
                                                <div class="user-info mb-1">
                                                    <h4 class="mb-0">{{ $user->name ?? '' }}</h4>
                                                </div>
                                                <div class="">
                                                    <h5>{{ $user->email ?? '' }}</h5>
                                                    <h5>{{ $user->mobile ?? '' }}</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-6 col-lg-6 d-flex flex-column justify-content-between border-container-lg">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </section>
    </div>
</div>
@endsection