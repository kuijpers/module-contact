@extends('layouts.ravenguard')

@section('meta')

@endsection

@section('title')
    Ravenguard.eu Contact
@endsection

@section('topcss')



@endsection

@section('topjs')

@endsection

@section('bottomcss')

@endsection

@section('bottomjs')

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>U wilt contact met ons opnemen.</h2>
            </div>
        </div>

        <div class="body mt-5">

            <div class="row">
                <div class="col-md-12">
                    <p>
                        U bent nieuwsgierig geworden en wilt graag meer weten.
                        Dit is uiteraard mogelijk en speciaal daarvoor hebben we onderstaand contactformulier.
                        Als u dit formulier invuld nemen wij binnen 24 uur contact met u op en hopen dan ook gelijk antwoord te hebben op uw vraag.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <fieldset>
                        <legend>
                            Contactformulier
                        </legend>
                        <form id="contact-form" method="post" action="contact.php" role="form">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Voornaam *</label>
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Hier uw voornaam *" required="required" data-error="FVoornaam is verplicht.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Achternaam *</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Hier uw achternaam *" required="required" data-error="Achternaam is verplicht.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Email *</label>
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Hier uw email-adres *" required="required" data-error="Correct email-adres is verplicht.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Waar heeft u een vraag over ? *</label>
                                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value=""></option>
                                                <option value="Vraag 1">Vraag 1</option>
                                                <option value="Vraag 2">Vraag 2</option>
                                                <option value="Vraag3">Vraag 3</option>
                                                <option value="Anders">Anders</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Uw bericht *</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Uw bericht voor ons *" rows="4" required="required" data-error="Laat u a.u.b. een bericht achter."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-success btn-send" value="Verstuur bericht">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-muted">
                                            <strong>*</strong> Deze velden zijn verplicht.
                                    </div>
                                </div>
                            </div>

                        </form>

                    </fieldset>
                </div>
            </div>

        </div>
    </div>


@endsection