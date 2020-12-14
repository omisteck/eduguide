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
                                <h2>contact</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
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
                        <div class="single-contact mb-65">
                            <div class="contact-icon">
                                <img src="img/contact/contact2.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>address</h3>
                                <p>135, First Lane, City Street</p>
                                <p>New Yourk City, USA</p>
                            </div>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <img src="img/contact/contact3.png" alt="contact">
                            </div>
                            <div class="contact-add">
                                <h3>address</h3>
                                <p>135, First Lane, City Street</p>
                                <p>New Yourk City, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class=" alert alert-danger">
                            {!! $error !!}
                        </div>
                        @endforeach
                    @elseif(session('status'))
                            <div class=" alert alert-success">
                                {{ session('status')  }}
                            </div>
                    @endif
                    <div class="reply-area">
                        <h3>PAYMENT VALIDATION</h3>
                        <p>PLEASE NOTE: Only submit for validation, payment made to CERD Nigeria accounts (GTB:0169613074 or Access Bank:0695094492), has we do not have connection with any other accounts. Fill all space accordingly, and kindly use a functional e-mail address and phone numbers to enable us reach you.</p>
                        <form action="{{ route('application.validate') }}" method="post">
                            @csrf
                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Application no:</p>
                                    <input type="text" name="application_id" id="application_id" placeholder="Invoice number on your generated invoice" required>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Depositor's Name:</p>
                                    <input type="text" name="name" id="name" placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <p>Teller no / Reference ID:</p>
                                    <input type="text" name="reference" id="reference" placeholder="3234342">
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Account no paid to:</p>
                                    <select name="account" class="form-control">
                                        <option value="gtbank">GTBank</option>
                                        <option value="access">Access</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p>Amount paid:</p>
                                    <input type="number" name="amount" id="amount" placeholder="50000" required>
                                </div>
                            </div>

                            <div class="row mb-20">
                                <div class="col-md-6 ">
                                    <p>Phone no:</p>
                                    <input type="tel" name="phone" id="phone" placeholder="09064629981" required>
                                </div>
                                <div class="col-md-6">
                                    <p>Email Address:</p>
                                    <input type="email" name="email" id="email" placeholder="test@test.com" required>
                                </div>
                            </div>

                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Program/Exam Paid for:</p>
                                    <select name="interested_programme" class="form-control">
                                        @foreach($types as $type )
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p>Date of payment:</p>
                                    <input type="date" name="date" id="date"  required>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-md ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
