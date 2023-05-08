@extends('layouts.layout')



@section('content')
    <div class="container" style="margin-bottom:100px; margin-top:100px;">
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="lc-block mb-4">
                    <span editable="inline" class="small mt-4 d-block">KTVM Bestuur</span>
                    <h2 editable="inline" class="display-2 mb-0"><b>Het Bestuur</b></h2>
                    <p editable="inline"> Het dagelijks bestuur van de KTVM bestaat uit de voorzitter, secretaris en
                        penningmeester.</p>
                </div><!-- /lc-block -->
            </div>

        </div>

        <div class="row pt-4">
            <div class="col-md-3 text-center py-4">
                <div class="lc-block"><img alt="" class="rounded-circle mb-3"
                        src="https://images.unsplash.com/photo-1574698550747-3f839e813107?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=772&amp;q=80"
                        style="height:10vh" loading="lazy">
                    <h5 editable="inline"><strong>Huub Zeelen</strong></h5>
                    <small editable="inline" class="text-secondary" style="letter-spacing:1px">Voorzitter</small>
                </div>
                <div class="lc-block mt-2 border-top py-3">
                    <div editable="rich">
                        <p> <a href="mailto:voorzitter@ktvm.nl">voorzitter@ktvm.nl</a></p>
                    </div>
                </div><!-- /lc-block -->
            </div>
            <div class="col-md-3 text-center py-4">
                <div class="lc-block"><img alt="" class="rounded-circle mb-3"
                        src="https://images.unsplash.com/photo-1542909192-2f2241a99c9d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80"
                        style="height:10vh" loading="lazy">
                    <h5 editable="inline"><strong>Nico Mol</strong></h5>
                    <small editable="inline" class="text-secondary" style="letter-spacing:1px">Secretaris</small>
                </div>
                <div class="lc-block mt-2 border-top py-3">
                    <div editable="rich">
                        <p><a href="mailto:secretaris@ktvm.nl">secretaris@ktvm.nl</a></p>
                    </div>
                </div><!-- /lc-block -->
            </div>
            <div class="col-md-3 text-center py-4">
                <div class="lc-block"><img alt="" class="rounded-circle mb-3"
                        src="https://images.unsplash.com/photo-1560329072-17f59dcd30a4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=767&amp;q=80"
                        style="height:10vh" loading="lazy">
                    <h5 editable="inline"><strong>Anette van Hemert</strong></h5>
                    <small editable="inline" class="text-secondary" style="letter-spacing:1px">Penningmeester</small>
                </div>
                <div class="lc-block mt-2 border-top py-3">
                    <div editable="rich">
                        <p> <a href="mailto:penningmeester@ktvm.nl">penningmeester@ktvm.nl</a></p>
                    </div>
                </div><!-- /lc-block -->
            </div>
            <div class="col-md-3 text-center py-4">
                <div class="lc-block"><img alt="" class="rounded-circle mb-3"
                        src="https://images.unsplash.com/photo-1560329072-17f59dcd30a4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=767&amp;q=80"
                        style="height:10vh" loading="lazy">
                    <h5 editable="inline"><strong>Guus van Oort</strong></h5>
                    <small editable="inline" class="text-secondary" style="letter-spacing:1px">Algemeen Berstuurslid</small>
                </div>
                <div class="lc-block mt-2 border-top py-3">
                    <div editable="rich">
                        <p> <a href="mailto:guus@ktvm.nl">guus@ktvm.nl</a>.</p>
                    </div>
                </div><!-- /lc-block -->
            </div>
        </div>

    </div>
@endsection
