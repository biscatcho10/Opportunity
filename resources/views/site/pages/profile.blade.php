@extends('layouts.app')

@section('title', 'Profile Form')

@section('content')

    @include('site.includes.dark_nav2')

    <div class="form my-5 p-5 container">
        <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <h3 class="my-4">
                <div class="row">
                    <i class="fa fa-user mx-3" aria-hidden="true"></i>
                    User Information
                </div>
            </h3>
            <div class="user-info ml-5">
                <div class="white-line"></div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="first_name">First Name</label>
                          <input type="text" name="first_name" id="first_name" class="form-control" value="{{old('first_name', $user->first_name)}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="last_name">Last Name</label>
                          <input type="text" name="last_name" id="last_name" class="form-control" value="{{old('last_name', $user->last_name)}}" autocomplete="off">
                        </div>
                    </div>
                </div>

                <input type="hidden" name="user_id" value="{{$user->id}}">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="prefix">Prefix</label>
                          <select class="form-control" name="prefix" id="prefix">
                            <optgroup label="Select The Prefix">
                              <option {{isset($profile->prefix) && $profile->prefix ? "" : "selected"}}>select prefex </option>
                              <option value="Mr." {{ isset($profile->prefix) && $profile->prefix == "Mr." ? "selected" : ""}} >Mr.</option>
                              <option value="Mrs." {{ isset($profile->prefix) && $profile->prefix == "Mrs." ? "selected" : ""}}>Mrs.</option>
                              <option value="Ms." {{ isset($profile->prefix) && $profile->prefix == "Ms." ? "selected" : ""}}>Ms.</option>
                              <option value="Dr." {{ isset($profile->prefix) && $profile->prefix == "Dr." ? "selected" : ""}}>Dr.</option>
                              <option value="Capt." {{ isset($profile->prefix) && $profile->prefix == "Capt." ? "selected" : ""}}>Capt.</option>
                              <option value="Dr.Capt" {{ isset($profile->prefix) && $profile->prefix == "Dr.Capt" ? "selected" : ""}}>Dr.Capt</option>
                              <option value="Hon." {{ isset($profile->prefix) && $profile->prefix == "Hon." ? "selected" : ""}}>Dr.Capt</option>
                            </optgroup>
                          </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="suffix">Suffix</label>
                          <input type="text" name="suffix" id="suffix" class="form-control" placeholder="Suffix" value="{{old('suffix',isset($profile->suffix) ? $profile->suffix : "")}}" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                      <label for="image">Your Image</label>
                      <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
            </div>

            <h3 class="my-4">
                <div class="row">
                    <i class="fa fa-building mx-3" aria-hidden="true"></i>
                    Company Information
                </div>
            </h3>
            <div class="user-info ml-5">
                <div class="white-line"></div>
                <h5 class="my-3">
                    Company Name
                </h5>
                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="asociation">Your Association</label>
                            <select class="form-control" name="asociation" id="asociation">
                              <optgroup label="Select The Association">
                                <option {{ isset($profile->asociation) && $profile->asociation ? "" : "selected"}}>select asociation </option>
                                <option value="owner" {{ isset($profile->asociation) && $profile->asociation == "owner" ? "selected" : ""}}>Owner</option>
                                <option value="investor" {{ isset($profile->asociation) && $profile->asociation == "investor" ? "selected" : ""}}>Investor</option>
                                <option value="advisor" {{ isset($profile->asociation) && $profile->asociation == "advisor" ? "selected" : ""}}>Advisor / Board Member</option>
                                <option value="executive" {{ isset($profile->asociation) && $profile->asociation == "executive" ? "selected" : ""}}>Executive</option>
                                <option value="employee" {{ isset($profile->asociation) && $profile->asociation == "employee" ? "selected" : ""}}>Employee</option>
                              </optgroup>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="title">Your Title</label>
                          <input type="text" name="title" id="title" class="form-control" placeholder="Your Title" value="{{old('title', isset($profile->title) ? $profile->title : "" )}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="comp_website">Company Website</label>
                          <input type="text" name="comp_website" id="comp_website" class="form-control" placeholder="comp_website" value="{{old('comp_website', isset($profile->comp_website) ? $profile->comp_website : "" )}}" autocomplete="off">
                        </div>
                    </div>
                </div>

                <h5 class="my-3">
                    Company Address
                </h5>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="str_add_one">Street Address One</label>
                          <input type="text" name="str_add_one" id="str_add_one" class="form-control" placeholder="Street Address One" value="{{old('str_add_one', isset($profile->str_add_one) ? $profile->str_add_one : "" )}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="str_add_two">Street Address Two</label>
                            <input type="text" name="str_add_two" id="str_add_two" class="form-control" placeholder="Street Address Two" value="{{old('str_add_two', isset($profile->str_add_two) ? $profile->str_add_two : "" )}}" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                          <label for="city">City</label>
                          <input type="text" name="city" id="city" class="form-control" placeholder="City" value="{{old('city', isset($profile->city) ? $profile->city : "" )}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                          <label for="state">State</label>
                          <input type="text" name="state" id="state" class="form-control" placeholder="State" value="{{old('state', isset($profile->state) ? $profile->state : "" )}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                          <label for="country">Country</label>
                          <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="{{old('country', isset($profile->country) ? $profile->country : "" )}}" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="zip">ZIP</label>
                          <input type="number" name="zip" id="zip" class="form-control" placeholder="ZIP" value="{{old('zip', isset($profile->zip) ? $profile->zip : "" )}}" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="comp_type">Type</label>
                            <select class="form-control" name="comp_type" id="comp_type">
                              <optgroup label="Select The Type">
                                <option value="" selected>select company type </option>
                                <option value="office" {{ isset($profile->comp_type) && $profile->comp_type == "office" ? "selected" : ""}}>Office</option>
                                <option value="headquartered" {{ isset($profile->comp_type) && $profile->comp_type == "headquartered" ? "selected" : ""}}>Headquartered</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="tax_add" id="tax_add" {{isset($profile->tax_add) && $profile->tax_add == 1 ? "checked" : ""}} >
                            <label class="form-check-label" for="tax_add" >Tax Address ?</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="send_mail" id="send_mail"{{ isset($profile->send_mail) && $profile->send_mail == 1 ? "checked" : ""}} >
                            <label class="form-check-label" for="send_mail">Send Relevant Mail Here?</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn mb-5  float-right" >Submit</button>

            </div>

        </form>
    </div>

@endsection
