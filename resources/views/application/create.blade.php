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
                    @endif
                    <div class="reply-area">
                        <h3>APPLICATION REGISTRATION</h3>
                        <p>Filling this form will generate an invoice of payment and also and account to check your application status, if you already have an account please login. </p>
                        <form action="{{ route('application.store') }}" method="post">
                            @csrf
                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Fullname</p>
                                    <input type="text" name="name" id="name" placeholder="John Doe" required >
                                </div>
                                <div class="col-md-6">
                                    <p>Email</p>
                                    <input type="email" name="email" id="email" placeholder="test@test.com" required>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Password</p>
                                    <input type="password" name="password" id="password" placeholder="******" required>
                                </div>
                                <div class="col-md-6">
                                    <p>Retype Password</p>
                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="*******" required>
                                </div>
                            </div>

                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>Phone number</p>
                                    <input type="text" name="phone" id="phone" placeholder="08108568996">
                                </div>
                                <div class="col-md-6">
                                    <p>Interested programme/Exam</p>
                                    <select name="interested_programme" class="form-control">
                                        <option value="Please select" selected="selected">Please select</option>
                                        <option value="IJMB programme/examination 2019/20 academic session">IJMB</option>
                                        <option value="NABTEB programme/examination 2019/20 academic session">NABTEB</option>
                                        <option value="CAMBRIDGE programme/examination 2019/20 academic session">CAMBRIDGE</option>
                                        <option value="TOEFL examination">TOEFL</option>
                                        <option value="IELTS examination">IELTS</option>
                                        <option value="SAT I & II examination">SAT I & II</option>
                                        <option value="GMAT examination">GMAT</option>
                                        <option value="GRE examination">GRE</option>
                                        <option value="PTE examination">PTE</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-20">
                                <div class="col-md-6 ">
                                    <p>Preferred Course Study</p>
                                    <select name="preferred_course" class="form-control" required>
                                            <option value="Accountancy">Accountancy</option>
                                            <option value="Advertising and Public Relations">Advertising and Public Relations</option>
                                            <option value="Aerospace Engineering">Aerospace Engineering</option>
                                            <option value="Agricultural Engineering">Agricultural Engineering</option>
                                            <option value="Agronomy">Agronomy</option>
                                            <option value="Anthropology">Anthropology</option>
                                            <option value="Applied Geodesy">Applied Geodesy</option>
                                            <option value="Applied Informatics (Economics)">Applied Informatics (Economics)</option>
                                            <option value="Applied Mathematics and Informatics">Applied Mathematics and Informatics</option>
                                            <option value="Applied Mathematics and Information Sc">Applied Mathematics and Information Sc</option>
                                            <option value="Applied Mechanics">Applied Mechanics</option>
                                            <option value="Architecture">Architecture</option>
                                            <option value="Art Education">Art Education</option>
                                            <option value="Art History">Art History</option>
                                            <option value="Art Studio">Art Studio</option>
                                            <option value="Audiology">Audiology</option>
                                            <option value="Automation and Control">Automation and Control</option>
                                            <option value="Aviation Studies">Aviation Studies</option>
                                            <option value="Biochemistry">Biochemistry</option>
                                            <option value="Bioengineering">Bioengineering</option>
                                            <option value="Biological Sciences">Biological Sciences</option>
                                            <option value="Biomechnics">Biomechnics</option>
                                            <option value="Biotechnology">Biotechnology</option>
                                            <option value="Building Construction">Building Construction</option>
                                            <option value="Building Machinery">Building Machinery</option>
                                            <option value="Building Materials and Goods">Building Materials and Goods</option>
                                            <option value="Business Administration">Business Administration</option>
                                            <option value="Business and Management">Business and Management</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Classical Studies">Classical Studies</option>
                                            <option value="Commercial Business">Commercial Business</option>
                                            <option value="Mass Communication">Mass Communication</option>
                                            <option value="Communication and Language Art">Communication and Language Art</option>
                                            <option value="Computer Engineering">Computer Engineering</option>
                                            <option value="Computer Engineering and Automization">Computer Engineering and Automization</option>
                                            <option value="Systems Software">Systems Software</option>
                                            <option value="Computer Networking">Computer Networking</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Counseling">Counseling</option>
                                            <option value="Creative">Creative</option>
                                            <option value="Criminal Justice">Criminal Justice</option>
                                            <option value="Curriculum and Instruction">Curriculum and Instruction</option>
                                            <option value="Dental">Dental</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Educational Leadership">Educational Leadership</option>
                                            <option value="Educational Psychology">Educational Psychology</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="Elementary Education">Elementary Education</option>
                                            <option value="Eletromechanics">Eletromechanics</option>
                                            <option value="Engineering Management">Engineering Management</option>
                                            <option value="English">English</option>
                                            <option value="Entrepreneurship">Entrepreneurship</option>
                                            <option value="Environmentak Protection">Environmentak Protection</option>
                                            <option value="Environmental Science">Environmental Science</option>
                                            <option value="Ethnic Studies">Ethnic Studies</option>
                                            <option value="Executive MBA (EMBA)">Executive MBA (EMBA)</option>
                                            <option value="Exercise Science">Exercise Science</option>
                                            <option value="Fashion and Design">Fashion and Design</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Forensic Science">Forensic Science</option>
                                            <option value="Forestry">Forestry</option>
                                            <option value="Foundry Engineering">Foundry Engineering</option>
                                            <option value="French">French</option>
                                            <option value="Geo-ecology">Geo-ecology</option>
                                            <option value="Geology">Geology</option>
                                            <option value="German">German</option>
                                            <option value="Graphics Design">Graphics Design</option>
                                            <option value="Health Science">Health Science</option>
                                            <option value="History">History</option>
                                            <option value="History / Government">History / Government</option>
                                            <option value="Horticultural Studies">Horticultural Studies</option>
                                            <option value="Hotel Management">Hotel Management</option>
                                            <option value="Human Resources Management">Human Resources Management</option>
                                            <option value="Industrial and Civil Engineering">Industrial and Civil Engineering</option>
                                            <option value="Industrial Engineering">Industrial Engineering</option>
                                            <option value="Information Science and Computing Technique">Information Science and Computing Technique</option>
                                            <option value="Innovation Management">Innovation Management</option>
                                            <option value="International Business">International Business</option>
                                            <option value="International Studies">International Studies</option>
                                            <option value="Journalism">Journalism</option>
                                            <option value="Law">Law</option>
                                            <option value="Management">Management</option>
                                            <option value="Management Information Systems">Management Information Systems</option>
                                            <option value="Manufacturing Engineering">Manufacturing Engineering</option>
                                            <option value="Marine Engineering">Marine Engineering</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Material Processing Technology">Material Processing Technology</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Medicine">Medicine</option>
                                            <option value="Medicine and Surgery">Medicine and Surgery</option>
                                            <option value="Metallurgy">Metallurgy</option>
                                            <option value="Music">Music</option>
                                            <option value="Music - Vocal Performance">Music - Vocal Performance</option>
                                            <option value="Music Education">Music Education</option>
                                            <option value="Bioengineering">Bioengineering</option>
                                            <option value="Nanomaterials">Nanomaterials</option>
                                            <option value="Nursing">Nursing</option>
                                            <option value="Nursing (RN to BSN)">Nursing (RN to BSN)</option>
                                            <option value="Oil and Gas">Oil and Gas</option>
                                            <option value="Petroleum Engineering">Petroleum Engineering</option>
                                            <option value="Pharmaceutical Science">Pharmaceutical Science</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Philosophy">Philosophy</option>
                                            <option value="Physical Education">Physical Education</option>
                                            <option value="Physical Therapy">Physical Therapy</option>
                                            <option value="Physician Assistant">Physician Assistant</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Political Science">Political Science</option>
                                            <option value="Psychology">Psychology</option>
                                            <option value="Public Administration">Public Administration</option>
                                            <option value="Public Relations">Public Relations</option>
                                            <option value="Social Work">Social Work</option>
                                            <option value="Sociology">Sociology</option>
                                            <option value="Telecommunications">Telecommunications</option>
                                            <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p>Study Centre Location</p>
                                    <select name="study_centre" class="form-control">
                                        <option value="lagos">Lagos</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-20">
                                <div class="col-md-6">
                                    <p>House Address</p>
                                    <input type="text" name="address" id="address" placeholder="No 2, Alaguntan, Iyana ipaja, lagos.">
                                </div>
                                <div class="col-md-6">
                                    <p>Gender</p>
                                    <select name="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary btn-md ">Submit & Generate Invoice</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
