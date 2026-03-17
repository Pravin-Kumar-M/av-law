<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Criminal &amp; Civil Law | AV Law Associates Chennai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <!-- header -->
    @include('Home.header')

    <section class="page-hero">
        <div class="container position-relative" style="z-index:2;">
            <div class="page-hero-label"><i class="fas fa-heart me-2"></i>Practice Areas</div>
            <h1>Family, Child &amp; Divorce Law</h1>
            <p>Compassionate legal guidance through life's most sensitive matters — protecting your family, your
                children, and your future with dignity and expertise.</p>
        </div>
    </section>
    <div class="breadcrumb-nav">
        <div class="container">
            <a href="/">Home</a> <span class="mx-2">/</span> <span>Family, Child &amp; Divorce Law</span>
        </div>
    </div>

    <!-- FAMILY & DIVORCE -->
    <section class="py-5 mt-4" id="family">
        <div class="container">
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-5 fade-in">

                    <div class="animated-image">
                        <img
                            src="https://www.legalserviceindia.com/legal/uploads/developmentofdivorcelawinindiaanditsimpactinthesociety_7216930320.jpg"
                            alt="Image"

                            style="width:100%;height:100%;object-fit:fill;display:block;" />
                    </div>

                </div>
                <div class="col-lg-7 fade-in">
                    <div class="section-label">Matrimonial Matters</div>
                    <h2 class="section-title">Family &amp; Divorce Law</h2>
                    <div class="divider-ornament">
                        <div class="diamond"></div>
                    </div>
                    <p style="font-size:.9rem;line-height:1.9;color:var(--muted);margin-bottom:16px;">Family disputes
                        require not just legal expertise, but empathy and discretion. Our advocates handle matrimonial
                        matters with sensitivity, ensuring your rights and dignity are protected throughout every stage
                        of proceedings.</p>
                    <p style="font-size:.9rem;line-height:1.9;color:var(--muted);">Whether you seek reconciliation or a
                        clean resolution, we guide you through the legal process with clarity and care.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-ring"></i></div>
                        <h3>Divorce Proceedings</h3>
                        <p>Comprehensive representation in contested and mutual consent divorce under the Hindu Marriage
                            Act, Special Marriage Act, and personal law statutes.</p>
                        <ul>
                            <li>Contested divorce petitions</li>
                            <li>Mutual consent divorce</li>
                            <li>Restitution of conjugal rights</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-coins"></i></div>
                        <h3>Maintenance &amp; Alimony</h3>
                        <p>Seeking or defending maintenance claims under Section 125 CrPC, the Hindu Marriage Act, and
                            the Domestic Violence Act.</p>
                        <ul>
                            <li>Interim and permanent maintenance</li>
                            <li>Alimony negotiations</li>
                            <li>Modification of maintenance orders</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3>Domestic Violence</h3>
                        <p>Protection and relief for victims under the Protection of Women from Domestic Violence Act,
                            2005.</p>
                        <ul>
                            <li>Protection orders</li>
                            <li>Residence orders</li>
                            <li>Compensation &amp; monetary relief</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-file-contract"></i></div>
                        <h3>Matrimonial Property</h3>
                        <p>Equitable division of matrimonial assets, stridhan recovery, and enforcement of settlement
                            agreements.</p>
                        <ul>
                            <li>Stridhan recovery</li>
                            <li>Property division disputes</li>
                            <li>Settlement deed enforcement</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-globe"></i></div>
                        <h3>NRI &amp; Foreign Divorce</h3>
                        <p>Recognition of foreign divorce decrees and handling cross-border matrimonial disputes for NRI
                            clients.</p>
                        <ul>
                            <li>Foreign decree recognition</li>
                            <li>NRI matrimonial disputes</li>
                            <li>International child abduction (Hague)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-scroll"></i></div>
                        <h3>Wills &amp; Probate</h3>
                        <p>Drafting of wills, codicils, trust deeds, and managing probate proceedings to ensure your
                            estate wishes are honoured.</p>
                        <ul>
                            <li>Will drafting &amp; registration</li>
                            <li>Probate applications</li>
                            <li>Trust deed creation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CHILD CUSTODY -->
    <section class="py-5" style="background:var(--cream);border-top:1px solid #c8b580;" id="child">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <div class="section-label justify-content-center">Child Welfare First</div>
                <h2 class="section-title">Child Custody &amp; Guardianship</h2>
                <div class="divider-ornament">
                    <div class="diamond"></div>
                </div>
                <p class="mx-auto" style="max-width:640px;font-size:.9rem;color:var(--muted);line-height:1.9;">Every
                    custody decision shapes a child's future. Our advocates prioritise the best interests of the child
                    in every matter, working to achieve outcomes that provide stability, safety, and love.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-child"></i></div>
                        <h3>Child Custody Disputes</h3>
                        <p>Representation in contested custody proceedings before Family Courts, ensuring the child's
                            welfare is the central consideration.</p>
                        <ul>
                            <li>Physical and legal custody</li>
                            <li>Joint custody arrangements</li>
                            <li>Custody modification petitions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-eye"></i></div>
                        <h3>Visitation Rights</h3>
                        <p>Establishing, protecting, and enforcing visitation rights for non-custodial parents and
                            grandparents.</p>
                        <ul>
                            <li>Visitation schedule orders</li>
                            <li>Supervised visitation</li>
                            <li>Enforcement of visitation rights</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-user-friends"></i></div>
                        <h3>Guardianship</h3>
                        <p>Appointment of legal guardians for minors and persons with disabilities under the Guardians
                            and Wards Act, 1890.</p>
                        <ul>
                            <li>Guardianship petitions</li>
                            <li>Guardian ad litem proceedings</li>
                            <li>NRI guardianship matters</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-money-bill-wave"></i></div>
                        <h3>Child Maintenance</h3>
                        <p>Securing adequate financial support for children's education, healthcare, and daily needs
                            from both parents.</p>
                        <ul>
                            <li>Child maintenance applications</li>
                            <li>Educational expense orders</li>
                            <li>Arrears recovery</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-plane"></i></div>
                        <h3>International Child Issues</h3>
                        <p>Cross-border custody disputes, relocation applications, and international parental child
                            abduction matters.</p>
                        <ul>
                            <li>Relocation to foreign countries</li>
                            <li>Hague Convention matters</li>
                            <li>Passport &amp; travel restrictions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-in">
                    <div class="practice-detail-card">
                        <div class="practice-detail-icon"><i class="fas fa-baby"></i></div>
                        <h3>Adoption</h3>
                        <p>Legal guidance through the CARA adoption process, inter-country adoptions, and step-child
                            adoption proceedings.</p>
                        <ul>
                            <li>CARA adoption process</li>
                            <li>Inter-country adoption</li>
                            <li>Step-parent adoption</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- buttons -->

    <div class="cta-strip">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <h2>Facing a Family Legal Matter?</h2>
                    <p>We understand the emotional weight of family disputes. Let our compassionate advocates guide you
                        to the best resolution.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/" class="btn-gold me-2"><i class="fas fa-phone-alt me-2"></i>Call Now</a>
                    <a href="/" class="btn-gold"
                        style="background:transparent;border:1px solid var(--gold);color:var(--gold-light);">Get
                        Consultation</a>
                </div>
            </div>
        </div>
    </div>

    <!-- disclaimer section -->
    <div class="disclaimer-section">
        <div class="container">
            <div class="col-lg-10 mx-auto text-center">
                <div class="section-label justify-content-center mb-3">Disclaimer</div>
                <p>The rules of the Bar Council of India prohibit law firms from soliciting work or advertising in any
                    manner. AV Law Associates is constrained from providing any further information. This website is for
                    informational purposes only and does not constitute legal advice.</p>
            </div>
        </div>
    </div>

    @include('Home.footer')
</body>
<script src="{{asset('script.js')}}"></script>

</html>