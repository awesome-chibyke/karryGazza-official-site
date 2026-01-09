@extends('layouts.app_2')

    @section('title', 'Refund Policy')

    @section('content')

    @include("includes.header")


    <!-- banner-section -->
    <section class="service-banner extra centred header-color header-padding">
        <div class="container">
            <div class="content-box">
                <h1>Refund Policy</h1>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- service-section -->
    <section class="service-section extra">
        <div class="container">
            <div class="sec-title centred mt-4">
                    <p><strong>Effective Date:</strong> July 1, 2025</p>
                    <p><strong>Business Name:</strong> PostsVille Ltd., United Kingdom</p>
                    <p><strong>Website:</strong> <a href="{{ env("APP_URL") }}">www.postsville.com</a></p>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-14 col-sm-12 feature-block">

                    <section>
                    <p>
                        At PostsVille, we’re committed to providing reliable, user-friendly tools to help individuals and businesses manage their social media efficiently. This Refund Policy outlines the terms under which refunds may be granted for our subscription plans, services, and digital products.
                    </p>
                    </section>

                    <section>
                    <h5>1. General Policy</h5>
                    <p>All payments for PostsVille’s paid services are non-refundable except in specific cases outlined below. By purchasing any of our plans or services, you agree to this policy.</p>
                    <p>We strongly encourage users to start with the Free Plan to explore our platform before committing to a paid plan.</p>
                    </section>

                    <section>
                    <h5>2. Subscription Services</h5>
                    <p>PostsVille offers various paid subscription plans including but not limited to:</p>
                    <ul class="list-control">
                        <li>Personal</li>
                        <li>Entrepreneur</li>
                        <li>Professional</li>
                    </ul>

                    <h5>Refund Eligibility:</h5>
                    <p>We do <strong>not</strong> offer refunds for:</p>
                    <ul class="list-control">
                        <li>Partial months or unused features</li>
                        <li>Downgrades made during an active billing period</li>
                        <li>Failure to cancel before the next billing cycle</li>
                    </ul>

                    <p>However, a full or partial refund may be considered if:</p>
                    <ul class="list-control">
                        <li>A technical issue or service disruption on our end prevents delivery of core platform functionality, and our support team is unable to resolve it within 7 business days</li>
                        <li>You were erroneously charged after a cancellation was properly submitted</li>
                    </ul>

                    <p><strong>All refund requests must be submitted in writing to <a href="mailto:support@postsville.com">support@postsville.com</a> within 14 days of the charge.</strong></p>
                    </section>

                    <section>
                    <h5>3. Free Trials and Free Plans</h5>
                    <ul class="list-control">
                        <li>If your plan includes a trial period, you will not be billed until the trial expires.</li>
                        <li>You can cancel any time during the trial to avoid charges.</li>
                        <li>Our Free Plan includes limited access to core features and does not require any payment.</li>
                    </ul>
                    </section>

                    <section>
                    <h5>4. Cancellations</h5>
                    <p>You may cancel your subscription at any time by visiting your account dashboard or contacting <a href="mailto:support@postsville.com">support@postsville.com</a>. Upon cancellation:</p>
                    <ul class="list-control">
                        <li>You will retain access until the end of your current billing cycle.</li>
                        <li>No partial refunds will be issued for the remaining period.</li>
                    </ul>
                    </section>

                    <section>
                    <h5>5. Chargebacks and Disputes</h5>
                    <p>If you initiate a chargeback through your bank or payment provider without first contacting PostsVille, we reserve the right to:</p>
                    <ul class="list-control">
                        <li>Suspend or terminate your account</li>
                        <li>Deny future access to our Services</li>
                        <li>Report fraudulent activity where necessary</li>
                    </ul>

                    <p>We are always happy to resolve billing issues directly. Please contact us first before disputing any charges.</p>
                    </section>

                    <section>
                    <h5>6. Contact Us</h5>
                    <p>For questions, refund requests, or assistance with your account, please contact:</p>
                    <ul class="list-control">
                        <li>📧 Email: <a href="mailto:support@postsville.com">support@postsville.com</a></li>
                        <li>🌐 Website: <a href="https://www.postsville.com">www.postsville.com</a></li>
                    </ul>
                    <p>We aim to respond to all refund inquiries within 2 business days.</p>

                    <p class="mb-5"><strong>PostsVille Ltd.<br/>Registered in the United Kingdom<br/>Committed to GDPR compliance and fair billing practices</strong></p>
                    </section>

                </div>

            </div>
        </div>
    </section>
    <!-- service-section end -->

    @endsection
