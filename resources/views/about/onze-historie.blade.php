@extends('layouts.layout')

@section('content')
    <section style="background-color: #F0F2F5;">
        <div class="container text-center py-lg-6 py-4">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10 mb-4 d-flex justify-content-center flex-wrap">
                    <div class="lc-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clock-history" viewBox="0 0 16 16">
                            <path
                                d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                            <path
                                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </div>



                </div>
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="lc-block mb-4">
                        <div editable="rich">
                            <h2 class="rfs-25 fw-bolder">De Historie van de KTVM!</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-10 col-xl-6">
                    <div class="lc-block">
                        <div editable="rich">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a lacus
                                est. Etiam diam metus, lobortis non augue at, placerat viverra risus.&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>13 oktober 1903</h3>
                            <p class="mb-0">Op deze datum werd er een muziekafdeling opgericht als onderdeel van de weerbaarheidsvereniging het Tielsch vrijwilligerscorps’. Uit deze muziekafdeling is de huidige ‘Koninklijke Tielse Vrijwillige Muziekvereniging’ voortgekomen..</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>1910</h3>
                            <p class="mb-0">In de beginjaren had het corps als voornaamste taak de gewapende leden van de weerbaarheid naar het oefenterrein te begeleiden. Rond het jaar 1910 ging de muzikale tak zijn eigen weg onder de naam De Tielse Vrijwillige Muziekvereniging (T.V.M.)

                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>Tijdens de eerste wereldoorlog</h3>
                            <p class="mb-0">Om de ten ondergang van de vereniging te voorkomen, is de eerste contributieregeling ingesteld van zegge fl. 0,10 (Euro 0,04) per week.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>1949</h3>
                            <p class="mb-0">De eerste uniformen konden worden aangeschaft, een grote prestatie in die tijd!</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>1953</h3>
                            <p class="mb-0">De verder opbloeiende T.V.M. werd bekroont met het predicaat ‘Koninklijk’. In de volksmond “het Vrijwillig”, officieel: ‘Koninklijke Tielse Vrijwillige Muziekvereniging’</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>Periode tot 1989</h3>
                            <p class="mb-0">De vereniging kende een explosieve groei. Naast de muzikale hoogtepunten kende de vereniging ook een aantal materialistische hoogtepunten. Zo werden vele nieuwe instrumenten aangeschaft voor zowel de harmonie als het toenmalige Jachthoornkorps en drumfanfare. Ook werd er in die periode twee keer van uniform gewisseld.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>1974 </h3>
                            <p class="mb-0">Werd tevens een eigen repetitielokaal gerealiseerd. Dit project werd geheel door eigen leden uitgevoerd. Van de tekentafel tot het metselen van de buitenmuren. Het geld voor al deze aankopen werd verdiend door allerlei subsidies, maar vooral ook door de grote inzet en zelfwerkzaamheid van bestuur en leden in de vorm van acties, de zelfwerkzaamheid waarom onze vereniging ook heden ten dage in Tiel en ver daarbuiten nog steeds bekend staat.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>1982 en 1983</h3>
                            <p class="mb-0">In 1982 bleek de behuizing voor de sterk gegroeide vereniging te klein. Er werd met de aanbouw bij het muzieklokaal begonnen, die in 1983 werd voltooid, waardoor een repetitieruimte werd gerealiseerd die tot op heden ruimte biedt aan onze vereniging.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2003</h3>
                            <p class="mb-0">In 2003 bestond de vereniging maar liefst 100 jaar. Wegens het 100-jarige bestaan is in dit jaar voor het eerst een concert gegeven in samenwerking met Tielse zangers en muzikanten in de Agnietenhof. Dit was een groot succes, en wordt met onregelmaat voortgezet.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2006</h3>
                            <p class="mb-0">In 2006 bestond de BBK, als onderdeel van de KTVM, 55 jaar. In het kader daarvan is er een muzikaal feest in de Agnietenhof georganiseerd. Zo’n zelfde feest werd in 2011 op 12 november herhaald.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2013</h3>
                            <p class="mb-0">Om het 110-jarig bestaan van de vereniging in 2013 groots te vieren zijn er twee concerten met Karin Bloemen in de Agnietenhof gegeven. Dit waren tevens de laatste concerten met Theo Bindels als dirigent, die in totaal 17 jaar voor de harmonie heeft gestaan.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>2014</h3>
                            <p class="mb-0">In 2014 is Ruud Welle als nieuwe dirigent begonnen bij de harmonie.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>6 Maart 2015</h3>
                            <p class="mb-0">Op 6 maart 2015 heeft Roel Blom na 12 zeer verdienstelijke jaren de voorzittershamer overgedragen aan Huub Zeelen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
