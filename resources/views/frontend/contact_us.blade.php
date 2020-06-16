@extends('frontend.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="contact-title">
                    <h2>Get In Touch</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="contact-address">
                    <!-- Address -->
                    <h3>Address</h3>
                    <i class="pe-7s-map-2 top-icon"></i>
                    <ul>
                        <li>14L.E Goulburn St, </li>
                        <li>Sydney 2000NSW</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-address">
                    <!-- Phone -->
                    <h3>Phone</h3>
                    <i class="pe-7s-headphones top-icon"></i>
                    <ul>
                        <li><i class="fa fa-mobile"></i> +8801620214460</li>
                        <li><i class="fa fa-mobile"></i> +8801821450144</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-address">
                    <!-- Email -->
                    <h3>Email</h3>
                    <i class="pe-7s-global top-icon"></i>
                    <ul>
                        <li><i class="fa fa-envelope-o"></i> <a href="https://news365htmllatest.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1173756570627a51767c70787d3f727e7c">[email&#160;protected]</a></li>
                        <li><i class="fa fa-globe"></i> www.companyweb.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form-area">
                    <form action="{{route('contact.form')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                    <span class="input">
                                            <input name="first_name" class="input_field" type="text" id="input-1">
                                            <label class="input_label" for="input-1">
                                                <span class="input_label_content" id="f_name" data-content="First Name">First Name</span>
                                    </label>
                                    </span>
                            </div>
                            <div class="col-sm-6">
                                    <span class="input">
                                            <input name="last_name" class="input_field" type="text" id="input-2">
                                            <label class="input_label" for="input-2">
                                                <span class="input_label_content" id="l_name" data-content="Last Name">Last Name</span>
                                    </label>
                                    </span>
                            </div>
                            <div class="col-sm-6">
                                    <span class="input">
                                            <input name="email" class="input_field" type="email" id="input-3" required>
                                            <label class="input_label" for="input-3">
                                                <span class="input_label_content" id="emai" data-content="Your Email" >Your Email</span>
                                    </label>
                                    </span>
                            </div>
                            <div class="col-sm-6">
                                    <span class="input">
                                            <input name="subject" class="input_field" type="text" id="input-4">
                                            <label class="input_label" for="input-4">
                                                <span class="input_label_content" id="subject" data-content="Subject">Subject</span>
                                    </label>
                                    </span>
                            </div>
                            <div class="col-sm-12">
                                    <span class="input">
                                            <textarea name="message" class="input_field" id="message" required></textarea>
                                            <label class="input_label" for="message">
                                                <span class="input_label_content" data-content="Your Email" >Your Message</span>
                                    </label>
                                    </span>
                                <button type="submit" class="btn btn-style">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="map">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1mwNYxBvf9ZnyeJ15jIbrOYNGGBnAXult" ></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
