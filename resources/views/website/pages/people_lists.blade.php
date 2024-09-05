@extends('website.layouts.app')
@section('title')
    @push('css')
    @endpush

@section('content')
<section class="heading headerMedium Blue"
style="
  background-image: url('{{ asset("assets/website/media/people-690810.jpg") }}');
  background-repeat: no-repeat;
  background-size: cover;
">
<div class="container">
    <h2>
        <p> People</p>
    </h2>
</div>
</section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Search Team Directory</h4>
                    <form method="get" class="searchForm" action="{{ route('peoples') }}">
                        <div class="form-group">
                            <label for="name"> Name: </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ request('name') }}" />
                        </div>
                        <div class="form-group">
                            <label for="Department"> Department: </label>
                            <select class="form-control" id="Department" name="department">
                                <option value="">All</option>
                                @foreach (allDepartment() as $department)
                                    <option value="{{ $department->id }}" {{ request('department') && request('department') == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <a href="{{ route('peoples') }}" title="Reset">Reset</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <button type="submit" class="mag-btn float-lg-right float-md-right"
                                    title="search"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col">
                            <div class="crumbs mt-md-0 mt-sm-4">
                                <a href="{{ route('home') }}" title="Home">Home</a>
                                <span>Peple</span>
                            </div>
                            <div class="lisViewButtons">
                                <button type="button" class="gridview active" title="Grid view">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button type="button" class="listview" title="List view">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                            <h1>Our Team</h1>
                            <div class="umb-grid" id="gridContent"></div>
                        </div>
                    </div>
                    <div class="row mt-3" id="PeopleList">
                        @foreach($peoples as $people)
                        <div class="col-md-4 people-block">
                            <img src="{{ asset($people->image) }}" alt="{{ $people->name ?? '' }}" />
                            <h5 class="mt-3">{{ $people->name ?? '' }}</h5>
                            <div></div>
                            <a class="readmore" href="{{ route('people',$people->slug) }}" title="{{ $people->name ?? '' }}">View Profile</a>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
