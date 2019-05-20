@extends('main')
@section('content')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Contact Person</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('contactPerson.insert') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="Password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="Confirm_Password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Select Gender</label>
                            <div class="col-sm-10">
                                <select class="custom-select" name="gender">
                                    <option selected>Select Gender Type</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">NID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nid" placeholder="NID number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary float-right">Add Person</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

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
                                                <h5 style="font-weight: 200; display: inline-flex;">Company Contact Persons</h5>

                                                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                                    Add new contact person
                                                </button>

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





