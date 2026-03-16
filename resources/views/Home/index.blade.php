<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AV Law Associates | Best Law Firm in Chennai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<style>
    .err-msg {
        color: #c62828;
        font-size: 11px;
        margin-top: 3px;
        display: block;
        min-height: 14px;
    }

    .input-error {
        border-color: #c62828 !important;
        background-color: #fff5f5 !important;
    }
</style>

<body>

    @include('Home.header')

    <!-- HERO — light gold tint background -->
    <section class="hero-section" id="home">
        <div class="row g-0">
            <div class="col-lg-5">
                <div class="hero-img-wrap">
                    <img src="./images/hero_section.jpeg" alt="AV Law Associates – Chennai Law Firm" />
                    <div class="hero-img-overlay"></div>
                    <div class="hero-stats-bar d-flex justify-content-around align-items-center">
                        <div class="text-center"><span class="stat-num">15+</span><span class="stat-label">Years</span>
                        </div>
                        <!-- <div style="width:1px;height:38px;background:rgba(184,151,42,.3);"></div>
                        <div class="text-center"><span class="stat-num">2,400+</span><span
                                class="stat-label">Cases</span></div> -->
                        <div style="width:1px;height:38px;background:rgba(184,151,42,.3);"></div>
                        <div class="text-center"><span class="stat-num">99%</span><span
                                class="stat-label">Satisfaction</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 hero-form-col">
                <div class="hero-form-title">Legal Consultation</div>
                <div class="hero-form-sub">Send your enquiry — we respond within 2 or 3 hours</div>

                <!-- form -->

                <form class="hero-form" id="enquiryForm" onsubmit="return false;">
                    @csrf
                    <div class="row g-0">
                        <div class="col-6 pe-2">
                            <label>Full Name *</label>
                            <input type="text" name="full_name" id="full_name" placeholder="Your full name" />
                            <span class="err-msg" id="err_full_name"></span>
                        </div>
                        <div class="col-6 ps-2">
                            <label>Phone *</label>
                            <input type="tel" name="phone" id="phone" placeholder="+91 00000 00000" maxlength="10" />
                            <span class="err-msg" id="err_phone"></span>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-6 pe-2">
                            <label>City *</label>
                            <input type="text" name="city" id="city" placeholder="Your city" />
                            <span class="err-msg" id="err_city"></span>
                        </div>
                        <div class="col-6 ps-2">
                            <label>Practice Area</label>
                            <select name="practice_area" id="practice_area">
                                <option value="">— Select —</option>
                                <option>Criminal Law</option>
                                <option>Family &amp; Divorce Law</option>
                                <option>Child Custody</option>
                                <option>Civil Law</option>
                                <option>Corporate and Business Law</option>
                                <option>DRT & DRAT Law</option>
                                <option>Real Estate &amp; RERA</option>
                                <option>Wills &amp; Probate</option>
                                <option>Arbitration</option>
                                <option>Medical Law</option>
                                <option>Consumer Law</option>
                                <option>Legal Documentation Law</option>
                                <option>Property Registration Law</option>
                                <option>Economic Offence Wing Law</option>
                                <option>Cheque Bounce Cases</option>
                                <option>Warrant Recall</option>
                                <option>Public Interest Litigation</option>
                            </select>
                        </div>
                    </div>
                    <label>Brief Case Description *</label>
                    <textarea rows="3" name="case_description" id="case_description" placeholder="Describe your legal matter briefly..."></textarea>
                    <span class="err-msg" id="err_case_description"></span>

                    <div id="formMsg" class="mt-2" style="display:none;"></div>

                    <button type="submit" id="submitBtn" class="btn-gold w-100"
                        style="font-size:.74rem;padding:13px;letter-spacing:2px;">
                        <i class="fas fa-paper-plane me-2"></i>Submit Enquiry
                    </button>
                    <div class="hero-form-note mt-2">
                        <i class="fas fa-lock me-1"></i>Your information is 100% confidential &amp; protected
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 fade-in">
                    <div class="position-relative" style="padding-right:16px;">
                        <div class="about-img-box">
                            <i class="fas fa-balance-scale" style="font-size:7rem;color:rgba(184,151,42,.28);"></i>
                            <div
                                style="position:absolute;bottom:0;left:0;right:0;background:linear-gradient(transparent,rgba(10,22,40,.9));padding:22px;">
                                <div
                                    style="font-size:.56rem;font-weight:600;letter-spacing:3px;color:var(--gold);text-transform:uppercase;">
                                    AV Law Associates</div>
                                <div
                                    style="font-family:'Playfair Display',serif;font-size:.97rem;color:#fff;margin-top:4px;">
                                    Justice · Integrity · Excellence</div>
                            </div>
                        </div>
                        <div class="about-img-frame d-none d-lg-block"></div>
                    </div>
                </div>
                <div class="col-lg-7 fade-in">
                    <div class="section-label">Who We Are</div>
                    <h2 class="section-title">About AV Law Associates</h2>
                    <div class="divider-ornament">
                        <div class="diamond"></div>
                    </div>
                    <p style="font-size:.91rem;line-height:1.9;color:var(--muted);margin-bottom:14px;">AV Law Associates
                        is a full-service law firm headquartered in Chennai, with a legacy spanning over 18 years. We
                        are committed to providing exceptional legal representation across the entire spectrum of law —
                        from criminal defence and family disputes to commercial litigation and real estate advisory.</p>
                    <p style="font-size:.91rem;line-height:1.9;color:var(--muted);margin-bottom:22px;">Our team of
                        seasoned advocates brings deep expertise, courtroom confidence, and a compassionate
                        understanding of our clients' circumstances. Every case receives our full dedication and the
                        highest standard of legal acumen.</p>
                    <a href="#home" class="btn-gold">Schedule a Consultation</a>
                    <div class="about-quote mt-4">
                        "We believe that justice is not a privilege — it is a right. Our firm exists to ensure that
                        right is defended for every client who walks through our doors."
                        <div class="quote-author">— Adv. A. Venkataraman, Managing Partner</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRACTICE AREAS -->
    <section class="practice-section" id="practice">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <div class="section-label justify-content-center">What We Do</div>
                <h2 class="section-title">Legal Practice Areas</h2>
                <div class="divider-ornament">
                    <div class="diamond"></div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4 fade-in">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-gavel"></i></div>
                        <h5>Criminal Law</h5>
                        <p>Comprehensive defence and prosecution services covering FIR registration, bail, anticipatory
                            bail, and full trial representation.</p><a href="criminal-civil.html" class="read-more">Read
                            More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-heart"></i></div>
                        <h5>Family &amp; Divorce Law</h5>
                        <p>Sensitive counsel in matrimonial disputes, divorce proceedings, maintenance, domestic
                            violence, and mutual consent proceedings.</p><a href="family-child.html"
                            class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-child"></i></div>
                        <h5>Child Custody</h5>
                        <p>Dedicated advocacy in child custody, guardianship, visitation rights, and child welfare
                            matters ensuring the best interests of the child.</p><a href="family-child.html"
                            class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-file-contract"></i></div>
                        <h5>Civil Law</h5>
                        <p>Expert handling of civil suits, property disputes, injunctions, specific performance, and
                            recovery proceedings across Tamil Nadu.</p><a href="criminal-civil.html"
                            class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-building-columns"></i></div>
                        <h5>Corporate &amp; Business Law</h5>
                        <p>End-to-end legal support for businesses — from company incorporation and shareholder
                            agreements to board
                            disputes, regulatory compliance, and corporate restructuring across all industry sectors.
                        </p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-university"></i></div>
                        <h5>DRT &amp; DRAT Law</h5>
                        <p>End-to-end legal support for businesses — from company incorporation and shareholder
                            agreements to board
                            disputes, regulatory compliance, and corporate restructuring across all industry sectors.
                        </p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-building"></i></div>
                        <h5>Real Estate &amp; RERA</h5>
                        <p>Protecting homebuyers and promoters in TNRERA disputes — construction delays, refund claims,
                            registration and compliance.</p><a href="commercial-rera.html" class="read-more">Read More
                            →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-scroll"></i></div>
                        <h5>Wills &amp; Probate</h5>
                        <p>Expert drafting of wills, codicils, and trust deeds alongside full probate proceedings to
                            manage your estate as you wish.</p><a href="family-child.html" class="read-more">Read More
                            →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-handshake"></i></div>
                        <h5>Arbitration</h5>
                        <p>Skilled arbitration counsel for commercial and civil disputes before domestic and
                            international arbitral tribunals.</p><a href="commercial-rera.html" class="read-more">Read
                            More →</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-university"></i></div>
                        <h5>DRT &amp; DRAT Law</h5>
                        <p>Representing borrowers and banks before the Debt Recovery Tribunal and Appellate Tribunal in
                            loan recovery,
                            securitisation, and SARFAESI Act proceedings.</p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-shopping-cart"></i></div>
                        <h5>Consumer Law</h5>
                        <p>Filing and defending complaints before District, State, and National Consumer Disputes
                            Redressal Commissions
                            for deficiency in service, defective goods, and unfair trade practices.</p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-file-alt"></i></div>
                        <h5>Legal Documentation</h5>
                        <p>Drafting and vetting of sale deeds, lease agreements, MOUs, power of attorney, affidavits,
                            and all legal
                            documents with precision and enforceability.</p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-stamp"></i></div>
                        <h5>Property Registration</h5>
                        <p>End-to-end assistance in property registration, title verification, encumbrance certificate
                            checks, and
                            Sub-Registrar office proceedings across Tamil Nadu.</p>
                        <a href="practice-criminal-civil.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-search-dollar"></i></div>
                        <h5>Economic Offence Wing</h5>
                        <p>Defence and representation in EOW investigations involving financial fraud, benami
                            transactions, money
                            laundering, and asset attachment proceedings.</p>
                        <a href="practice-criminal-civil.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-money-check-alt"></i></div>
                        <h5>Cheque Bounce Cases</h5>
                        <p>Prosecution and defence in dishonoured cheque matters under Section 138 of the Negotiable
                            Instruments Act —
                            from complaint filing through trial and appeals.</p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-undo-alt"></i></div>
                        <h5>Warrant Recall</h5>
                        <p>Swift application and representation for recalling non-bailable warrants issued by courts,
                            including bailable
                            warrant conversions and appearance regularisation.</p>
                        <a href="practice-criminal-civil.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-landmark"></i></div>
                        <h5>Public Interest Litigation</h5>
                        <p>Filing and pursuing PILs before the High Court and Supreme Court on matters of public concern
                            — environment,
                            governance, civic rights, and constitutional issues.</p>
                        <a href="practice-criminal-civil.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 fade-in  practice-hidden">
                    <div class="practice-card">
                        <div class="practice-icon"><i class="fas fa-city"></i></div>
                        <h5>Corporate &amp; Business Law</h5>
                        <p>End-to-end legal support for businesses — from company incorporation and shareholder
                            agreements to board
                            disputes, regulatory compliance, and corporate restructuring.</p>
                        <a href="practice-commercial-rera.html" class="read-more">Read More →</a>
                    </div>
                </div>

                <div class="text-center mt-5"><button type="button" id="show-more-btn" class="btn-outline-gold">Show
                        More Practice Areas →</button>
                </div>

            </div>
        </div>
    </section>

    <!-- JUDGEMENTS -->
    <section class="judgements-section" id="judgements">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 fade-in">
                    <div class="section-label">Our Record</div>
                    <h2 class="section-title">Latest Judgements</h2>
                    <div class="divider-ornament">
                        <div class="diamond"></div>
                    </div>
                    <p style="font-size:.91rem;line-height:1.9;color:var(--muted);margin-bottom:22px;">Our track record
                        speaks for itself. AV Law Associates has secured landmark outcomes in criminal, civil, family
                        and commercial matters.</p>
                    <a href="#" class="btn-gold">View All Judgements</a>
                </div>
                <div class="col-lg-7 fade-in">
                    <div class="judgement-card">
                        <div class="judgement-date"><i class="far fa-calendar-alt me-2"></i>February 2025</div>
                        <h6>Sessions Court grants anticipatory bail in complex white-collar fraud matter involving
                            multiple accused parties.</h6><a href="#">Read More →</a>
                    </div>
                    <div class="judgement-card">
                        <div class="judgement-date"><i class="far fa-calendar-alt me-2"></i>January 2025</div>
                        <h6>TNRERA directs builder to refund ₹38 lakhs with interest for inordinate delay in handing
                            over possession.</h6><a href="#">Read More →</a>
                    </div>
                    <div class="judgement-card">
                        <div class="judgement-date"><i class="far fa-calendar-alt me-2"></i>December 2024</div>
                        <h6>Family Court grants divorce on grounds of cruelty and mental harassment — landmark ruling
                            affirmed on appeal.</h6><a href="#">Read More →</a>
                    </div>
                    <div class="judgement-card">
                        <div class="judgement-date"><i class="far fa-calendar-alt me-2"></i>November 2024</div>
                        <h6>High Court quashes FIR filed against client — establishes precedent in false-registration
                            matters.</h6><a href="#">Read More →</a>
                    </div>
                    <div class="judgement-card">
                        <div class="judgement-date"><i class="far fa-calendar-alt me-2"></i>October 2024</div>
                        <h6>Commercial Court sets aside termination of Power of Attorney — upholds client's property
                            rights in landmark civil suit.</h6><a href="#">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="team-section" id="team">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <div class="section-label justify-content-center" style="color:var(--gold-light);">Our Team</div>
                <h2 class="section-title">Lawyer Spotlight</h2>
                <div class="divider-ornament">
                    <div class="diamond"></div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-3 fade-in text-center">
                    <div class="team-avatar"><img src="./images/xavier.jpeg" alt="Adv. Xavier"></div>
                    <div class="team-name">Adv. Xavier</div>
                    <div class="team-role">Advocate</div>
                </div>
                <div class="col-12 col-md-3  fade-in text-center">
                    <div class="team-avatar"><img src="./images/shiny.jpeg" alt="Adv. Shiny Xavier"></div>
                    <div class="team-name">Adv. Shiny Xavier</div>
                    <div class="team-role">Advocate</div>
                </div>
                <div class="col-12 col-md-3 fade-in text-center">
                    <div class="team-avatar"><img src="./images/yamini.jpeg" alt="Adv. Yamini"></div>
                    <div class="team-name">Adv. Yamini</div>
                    <div class="team-role">Advocate</div>
                </div>
                <div class="col-12 col-md-3  fade-in text-center">
                    <div class="team-avatar"><img src="./images/arasu.jpeg" alt="Adv. Arasu Sanga Tamil"></div>
                    <div class="team-name">Adv. Arasu Sanga Tamil</div>
                    <div class="team-role">Advocate</div>
                </div>
            </div>
            <!-- <div class="text-center mt-5"><a href="#" class="btn-outline-gold">Meet All Our Lawyers</a></div> -->
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section" id="faq">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 fade-in">
                    <div class="section-label">FAQs</div>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="divider-ornament">
                        <div class="diamond"></div>
                    </div>
                    <p style="font-size:.89rem;line-height:1.9;color:var(--muted);">Have questions about legal
                        procedures? Find quick answers below, or contact us directly for personalised guidance.</p>
                    <a href="#home" class="btn-gold mt-3 d-inline-block">Ask a Lawyer</a>
                </div>
                <div class="col-lg-8 fade-in">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">What should I do when an FIR is
                                    filed against me?</button></h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Consult a lawyer at the earliest. They will advise on the
                                    next steps — whether you are in police custody or have been arrested. Prompt legal
                                    advice can significantly affect the outcome.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">Can anticipatory bail be granted in
                                    non-bailable offences?</button></h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes. Several factors are considered including witness
                                    tampering risk, previous criminal record, flight risk, and evidence on record. An
                                    experienced advocate can argue these factors effectively.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">How long does a TN-RERA case
                                    typically take?</button></h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Cases before TNRERA typically conclude within 3–4 months
                                    from filing. Cases before the Adjudicating Officer may take 12–18 months. Courts
                                    usually pronounce orders 2–6 months after final arguments.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">Are foreign divorce decrees
                                    recognised in India?</button></h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, subject to requirements under Indian law. Ex-parte
                                    decrees may not be valid if the spouse did not submit to the jurisdiction of the
                                    foreign court.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">Can I be represented in court
                                    through a Power of Attorney?</button></h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Yes, in certain matters you can be represented by a
                                    registered Power of Attorney holder after seeking prior permission from the Court.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq6">Where should anticipatory bail be
                                    applied for?</button></h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Anticipatory bail can be filed before the jurisdictional
                                    Sessions Court or directly before the High Court. Your advocate will advise on the
                                    appropriate forum.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DISCLAIMER -->
    <div class="disclaimer-section">
        <div class="container">
            <div class="col-lg-10 mx-auto text-center">
                <div class="section-label justify-content-center mb-3">Disclaimer</div>
                <p>The rules of the Bar Council of India prohibit law firms from soliciting work or advertising in any
                    manner. AV Law Associates is, therefore, constrained from providing any further information on this
                    website. This website is for informational purposes only and does not constitute legal advice. No
                    attorney-client relationship is created by visiting this website. Please consult a qualified
                    advocate before acting on any information herein.</p>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    @include('Home.footer')



    <script src="{{asset('script.js')}}"></script>


</body>

</html>