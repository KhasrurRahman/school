@extends('layouts.frontend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')


    <section class="contact-map">
        <div class="container">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-6">
                    <div style="width:100%;height:400px;" class="wow fadeIn animated"><iframe src="{{$map->map}}" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <address class="contact-address">
                                <div class="address-inner">
                                    <h4>Admission Office</h4>
                                    <p>
                                        {{$contact->address}}<br>Hotline : {{$contact->mobile}} <br>                            E-mail : <a href="mailto:admissions@pledgeharbor.org">{{$contact->email}}</a>
                                    </p>
                                </div>
                            </address>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <address class="contact-address">
                                <div class="address-inner">
                                    <h4>School Campus</h4>
                                    <p>
                                       {{$contact->address}}</p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="contact" id="contact">
        <div class="container">
            <div id="math-teacher" class="cv-section">
                <h3 class="heading-site">Connect</h3>
                <div role="form" class="wpcf7" id="wpcf7-f151-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="" method="" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="151" />
                            <input type="hidden" name="_wpcf7_version" value="4.5.1" />
                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f151-o1" />
                            <input type="hidden" name="_wpnonce" value="646601cfbd" />
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label>Name</label><br />
                                            <span class="wpcf7-form-control-wrap text-cname"><input type="text" name="text-cname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" /></span>
                                        </div>
                                        </p></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label>Email</label><br />
                                            <span class="wpcf7-form-control-wrap email-cemail"><input type="email" name="email-cemail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" /></span>
                                        </div>
                                        </p></div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label><br />
                                            <span class="wpcf7-form-control-wrap tel-cphone"><input type="tel" name="tel-cphone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" aria-invalid="false" /></span>
                                        </div>
                                        </p></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Message</label><br />
                                            <span class="wpcf7-form-control-wrap textarea-cmessage"><textarea name="textarea-cmessage" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false"></textarea></span>
                                        </div>
                                        </p></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn">send <i aria-hidden="true" class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                    </p></div>
                                </p></div>
                            </p></div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>    </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
