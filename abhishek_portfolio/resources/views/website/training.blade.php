@extends('website.layouts.app')
@section('content')

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg-color-1">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Skills Training</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Skills-Training</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1">
                    <img src="{{ asset('website/images/icon/page-header/1.png') }}" alt="shape-icon">
                </span>

                <span class="page-header__shape-item page-header__shape-item--2">
                    <img src="{{ asset('website/images/icon/page-header/2.png') }}" alt="shape-icon">
                </span>

                <span class="page-header__shape-item page-header__shape-item--3">
                    <img src="{{ asset('website/images/icon/page-header/3.png') }}" alt="shape-icon">
                </span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->


    <!-- =========================================
    SKILLS TRAINING PAGE (UNIQUE CLASS NAMES)
    No Conflict With Existing Website CSS
    ========================================= -->


    <!-- CORE COMPETENCIES -->
    <section class="stp-section bg-color-2" id="stp-core">
        <div class="container">

            <div class="stp-head text-center">
                <span>Core Competencies</span>
                <h2>Skills That Drive Results</h2>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Educational Technology</h4>
                        <p>Expert in integrating educational technology solutions to improve learning outcomes.</p>
                        <p>Strong knowledge of Microsoft Certified Educator (MCE) standards.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Cloud Computing</h4>
                        <p>Skilled in Microsoft Azure services, security, infrastructure, and data management.</p>
                        <p>Certified in Azure disciplines for secure cloud solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Business Intelligence</h4>
                        <p>Advanced reporting and dashboards using Power BI & Tableau.</p>
                        <p>Using data insights for strategic business decisions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Microsoft Ecosystem</h4>
                        <p>Strong expertise in M365, SharePoint, Teams, collaboration tools.</p>
                        <p>Hands-on with Power Apps & Power Platform solutions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Project Management</h4>
                        <p>Agile & Scrum methodologies for fast project execution.</p>
                        <p>ITIL best practices for IT service management.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Customer Success</h4>
                        <p>CSM strategies to improve satisfaction, retention & long-term success.</p>
                        <p>Focused on measurable business outcomes.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TECHNICAL SKILLS -->
    <section class="stp-section bg-color-2">
        <div class="container">

            <div class="stp-head text-center">
                <span>Technical Skills</span>
                <h2>Technology Expertise</h2>
            </div>

            <div class="row g-4">

                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Azure</h4>
                        <p>Security, Data Management & Cloud Solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Power BI</h4>
                        <p>Business Intelligence & Visualization.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Tableau</h4>
                        <p>Advanced Analytics Dashboards.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Power Apps</h4>
                        <p>Custom Business App Development.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>Power Platform</h4>
                        <p>Integrated Automation Solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="stp-card">
                        <h4>M365 / Teams</h4>
                        <p>Collaboration & Productivity Platforms.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- ADDITIONAL SKILLS -->
    <section class="stp-section bg-color-3">
        <div class="container">

            <div class="stp-head text-center">
                <span>Additional Skills</span>
                <h2>Business & Leadership Strengths</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stp-card">
                        <h4>ITIL</h4>
                        <p>IT service management best practices.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stp-card">
                        <h4>CSM</h4>
                        <p>Customer success management strategies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stp-card">
                        <h4>Agile & Scrum</h4>
                        <p>Modern project delivery methodologies.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


  <!-- NETWORKING + DEVELOPMENT  -->
<section class="stp-section bg-color-2">
    <div class="container">

        <div class="stp-head text-center">
            <span>Growth & Community</span>
            <h2>Networking, Collaboration & Development</h2>
            <p>Building strong professional connections while continuously upgrading skills with modern technologies.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                <div class="stp-card">
                    <h5>Community Events</h5>
                    <p>Actively involved in Microsoft community events, forums, and trainer ecosystems.</p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <div class="stp-card">
                    <h5>Industry Collaboration</h5>
                    <p>Collaborates with industry professionals to stay updated with latest advancements.</p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                <div class="stp-card">
                    <h5>Advanced Certifications</h5>
                    <p>Continuously pursuing new certifications and professional training programs.</p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
                <div class="stp-card">
                    <h5>Future Ready Skills</h5>
                    <p>Staying at the forefront of technology, education, cloud, AI, and enterprise solutions.</p>
                </div>
            </div>

        </div>

    </div>
</section>


@endsection