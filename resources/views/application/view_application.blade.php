@extends('layouts.app')

@section('content')
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area pt-50 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-striped tablehover">
                        <thead>
                            <th>(id)</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>Study Center</th>
                            <th>Status</th>
                            @if(auth()->user()->user_type == 'admin')
                            <th>Action</th>
                            @endif
                        </thead>
                        <tbody>
                            @foreach($applications as $application)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $application->user->name }}</td>
                                <td>{{ $application->user->email }}</td>
                                <td>{{ $application->user->phone }}</td>
                                <td>{{ $application->preferred_course }}</td>
                                <td>{{ $application->study_centre }}</td>
                                <td> 
                                    @if($application->status == 'approved')
                                    <span class="badge badge-success">{{ $application->status }}</span>
                                    @elseif($application->status == 'pending')
                                    <span class="badge badge-primary">{{ $application->status }}</span>
                                    @else
                                    <span class="badge badge-danger">{{ $application->status }}</span>
                                    @endif
                                </td>
                                @if(auth()->user()->user_type == 'admin')
                                <td>
                                    <button class="btn btn-outline-primary">
                                        <i class="fa fa-cog fa-spin"></i>
                                    </button>
                                </td>
                                @endif 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pull-right">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>
                <!-- <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="contact-contents text-center">
                        <div class="single-contact mb-65">
                            <div class="contact-icon">
                                <img src="img/contact/contact1.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>address</h3>
                                <p>135, First Lane, City Street</p>
                                <p>New Yourk City, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="contact-contents text-center">
                        <div class="single-contact mb-65">
                            <div class="contact-icon">
                                <img src="img/contact/contact1.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>address</h3>
                                <p>135, First Lane, City Street</p>
                                <p>New Yourk City, USA</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
