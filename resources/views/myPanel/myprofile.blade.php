@extends('main')
@section('content')

<main id="jf-main" class="jf-main jf-haslayout">

    <div class="jf-haslayout jf-sectionspace">
        <div class="container">
            <div class="row">
                <div class="jf-candidatesdetails">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                        <div class="jf-jobapplycenter jf-jobapplycentervthree">
                            <div class="jf-companycontent">
                                <div class="jf-jobapplydetails">

                                </div>
                            </div>
                        </div>
                        <div id="jf-twocolumns" class="jf-twocolumns">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">

                                    <div class="jf-candidate jf-candidatebg">
                                        <div class="jf-title">
                                            {{--<i class="lnr lnr-envelope"></i>--}}
                                            <h2>Company Information</h2>
                                        </div>
                                        <form class="jf-formtheme jf-formcontactus jf-formcontactusvtwo" method="post" action="{{ route('companyInfo.update') }}">
                                            @csrf
                                            <fieldset>
                                                <input type="hidden" value="{{ $profile->companyId }}" name="id">
                                                <label for="">Company Name</label>
                                                <div class="form-group jf-inputwithicon">
                                                    <i class="lnr lnr-user"></i>
                                                    <input type="text" name="companyName" class="form-control" placeholder="Company Name" value="{{ $profile->companyName }}">
                                                </div>

                                                <label for="">Company Address</label>
                                                <div class="form-group jf-inputwithicon">
                                                    <i class="lnr lnr-apartment"></i>
                                                    <textarea name="address" class="form-control" placeholder="Company Address">{{ $profile->address }}</textarea>
                                                </div>

                                                <div class="form-group">
                                                    <button class="jf-btn jf-active" type="submit">Save Chnages</button>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>

                                    <div id="contact-persons">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 style="font-weight: 200;">Company Contact Persons</h5>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Gender</th>
                                                            <th scope="col">NID</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($contact_persons as $persons)
                                                            <tr>
                                                                <td>{{ $persons->name }}</td>
                                                                <td>{{ $persons->gender }}</td>
                                                                <td>{{ $persons->nationalIdcard }}</td>
                                                                <td>{{ $persons->email }}</td>
                                                                <td>{{ $persons->phone }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



@endsection
<!--************************************





