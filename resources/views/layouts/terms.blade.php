   @extends('layouts.app_2')

    @section('title', 'Terms & Condition')

    @section('content')

    @include("includes.header")

    <!-- banner-section -->
    <section class="service-banner extra centred header-color header-padding">
        <div class="container">
            <div class="content-box">
                <h1>Terms of Service</h1>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- service-section -->
    <section class="service-section extra">
        <div class="container">
            <div class="sec-title centred mt-4">
                <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has<br />been the industry's standard dummy text ever since</p> -->
                    <p><strong>Effective Date:</strong> July 1, 2025</p>
                    <p><strong>Website:</strong> <a href="{{ env("APP_URL") }}">www.postsville.com</a></p>
                    <p><strong>Business Entity:</strong> PostsVille Ltd., United Kingdom</p>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-14 col-sm-12 feature-block">

                    <h5 class="mt-2">Welcome to PostsVille</h5>
                        <p>
                            Thank you for choosing PostsVille. These Terms of Service (“Terms”) outline the rules and conditions that apply when you access or use any of our digital products and services, including our website, mobile applications, and related tools (collectively referred to as the “Services”).
                        </p>
                        <p>
                            By accessing, registering, or otherwise using the Services, you confirm that you have read, understood, and agree to be legally bound by these Terms, along with our Privacy Policy, which governs how we handle your personal data.
                        </p>
                        <p>
                            If you do not agree with these Terms or our Privacy Policy, you must not use or access the Services in any way.
                        </p>
                        <p>
                            These Terms apply to all users of the Services, including visitors, registered users, and account holders (whether individuals or organizations). If you are using the Services on behalf of a company or another legal entity, you represent that you have the authority to bind that entity to these Terms.
                        </p>

                        <h5 class="mt-2">1. Who We Are</h5>
                        <p>
                            PostsVille Ltd. is a legally registered company based in the United Kingdom. We specialize in delivering robust social media management tools tailored to both individuals and organizations. Our platform enables users to integrate, schedule, publish, and analyze content across various social media platforms, all from a centralized dashboard.
                        </p>
                        <p>
                            Additionally, PostsVille allows you to connect with a wide range of third-party tools and applications to enhance your digital marketing and content management experience.
                        </p>
                        <p>
                            Whether you're a solo creator, digital agency, or enterprise team, PostsVille offers flexible plans to help you streamline your workflows, engage your audience, and track performance with ease.
                        </p>

                        <h5 class="mt-2">2. Eligibility</h5>
                        <p>To use PostsVille’s Services, you must meet the following eligibility criteria:</p>
                        <ul class="list-control">
                            <li>Be at least 18 years old</li>
                            <li>Have the legal capacity to enter into a binding agreement under applicable law</li>
                            <li>Use the Services solely for lawful business or professional purposes</li>
                        </ul>
                        <p>
                            By creating an account or accessing the platform, you confirm that all information provided during registration is truthful, accurate, and complete. You are also responsible for maintaining the accuracy of your account details and ensuring that your use of the Services remains compliant with all applicable laws and regulations.
                        </p>

                        <h5 class="mt-2">3. Account Registration</h5>
                        <p>To access and use PostsVille’s Services, you are required to create an account. During this process, you must:</p>
                        <ul class="list-control">
                            <li>Provide a valid and active email address</li>
                            <li>Create a secure and confidential password</li>
                            <li>Select an appropriate subscription plan (e.g., Personal, Entrepreneur, or Professional)</li>
                            <li>Agree to these Terms and our Privacy Policy</li>
                        </ul>
                        <p>
                            You are fully responsible for maintaining the confidentiality of your login credentials and for all activity conducted under your account. Sharing your credentials or allowing others to access your account is strictly prohibited.
                        </p>
                        <p>
                            If you suspect unauthorized access or any breach of security, you must notify us immediately by contacting <a href="mailto:support@postsville.com">support@postsville.com</a>. We reserve the right to suspend or terminate accounts that violate these Terms or are deemed to compromise the security or integrity of the platform.
                        </p>

                        <h5 class="mt-2">4. Use of Services</h5>
                        <p>PostsVille provides social media management tools to streamline your online presence. You may use our Services only for their intended and lawful purposes, which include but are not limited to:</p>
                        <ul class="list-control">
                            <li>Connecting your social media accounts</li>
                            <li>Scheduling, publishing, and managing social content</li>
                            <li>Monitoring analytics and engagement metrics</li>
                            <li>Collaborating with team members or clients</li>
                            <li>Integrating with approved third-party applications from our App Directory</li>
                        </ul>

                        <p><strong>Prohibited Activities:</strong></p>
                        <p>You agree not to misuse the Services in any way, including but not limited to:</p>
                        <ul class="list-control">
                            <li>Uploading or distributing unlawful, offensive, defamatory, or infringing content</li>
                            <li>Sharing spam, phishing links, harmful code, or malware</li>
                            <li>Impersonating another person or misrepresenting your affiliation with any organization</li>
                            <li>Attempting to bypass security measures, API limits, or access controls</li>
                        </ul>
                        <p>
                            Violations may result in suspension or termination of your account without prior notice. We also reserve the right to report illegal activity to appropriate authorities when necessary.
                        </p>

                        <h5 class="mt-2">5. Subscription Plans & Payments</h5>
                        <p>PostsVille offers a variety of subscription options to meet the needs of individuals and businesses:</p>
                        <ul class="list-control">
                            <li><strong>Free Plan:</strong> Includes limited access to core features suitable for basic use.</li>
                            <li><strong>Paid Plans:</strong> Offer access to enhanced features and expanded capabilities based on the selected tier (Personal, Entrepreneur, or Professional).</li>
                        </ul>

                        <p><strong>Payment Terms:</strong></p>
                        <ul class="list-control">
                            <li>Subscription fees are billed in advance, either monthly or annually, depending on your chosen plan.</li>
                            <li>All payments are non-refundable, except in cases where a paid service is not delivered within the promised timeframe, as outlined in our Refund Policy.</li>
                            <li>Users may upgrade, downgrade, or cancel their plan at any time through their account dashboard. Any changes will apply to the next billing cycle unless stated otherwise.</li>
                            <li>We reserve the right to modify pricing or features of any plan. In such cases, you will receive advance notice via email and/or platform notifications.</li>
                            <li>Failure to pay applicable fees may result in account suspension or restricted access to certain features until the outstanding balance is cleared.</li>
                        </ul>

                        <h5 class="mt-2">6. User Content</h5>
                        <p>
                            As a PostsVille user, you retain full ownership and intellectual property rights over any content you create, upload, schedule, or manage through our Services (“User Content”).
                        </p>
                        <p>
                            However, by using our platform, you grant PostsVille a limited, non-exclusive, worldwide license to:
                        </p>
                        <ul class="list-control">
                            <li>Host, store, process, and transmit your content as necessary to deliver our Services</li>
                            <li>Display or publish content on your connected social media accounts as per your instructions</li>
                            <li>Analyze content and engagement to improve our features, performance, and user experience</li>
                        </ul>
                        <p>You are solely responsible for ensuring that your User Content:</p>
                        <ul class="list-control">
                            <li>Complies with applicable laws and regulations</li>
                            <li>Does not infringe on the rights of others (e.g., copyright, trademark, or privacy rights)</li>
                            <li>Is not harmful, abusive, defamatory, or misleading</li>
                        </ul>
                        <p>
                            PostsVille does not review or moderate your content before it is published. However, we reserve the right to remove or restrict access to any content that we reasonably believe violates these Terms or poses a risk to our platform, other users, or third parties.
                        </p>

                        <h5 class="mt-2">7. Third-Party Services & Social Media Platforms</h5>
                        <p>
                            PostsVille allows you to connect and integrate with third-party services and social networks such as Facebook, Instagram, LinkedIn, Twitter, and others (“Third-Party Platforms”) to enhance your social media management experience.
                        </p>
                        <p><strong>Please note:</strong></p>
                        <ul class="list-control">
                            <li>All integrations are subject to the respective third-party platform’s terms of service and privacy policies. We strongly recommend reviewing them before authorizing access.</li>
                            <li>You are solely responsible for managing your third-party account settings and permissions.</li>
                            <li>PostsVille is not liable for:
                            <ul class="list-control">
                                <li>Any data shared with or collected by Third-Party Platforms as a result of your integration</li>
                                <li>Service limitations or disruptions caused by changes to third-party APIs, terms, or policies</li>
                                <li>Suspension, restriction, or termination of your third-party accounts for any reason</li>
                            </ul>
                            </li>
                        </ul>

                        <h5 class="mt-2">8. Service Availability & Modifications</h5>
                        <p>
                        While we strive to provide a seamless and reliable experience, PostsVille does not guarantee uninterrupted or error-free access to our Services.
                        </p>
                        <p>We may:</p>
                        <ul class="list-control">
                        <li>Update, enhance, or discontinue features to improve performance or comply with legal, technical, or business requirements</li>
                        <li>Schedule routine maintenance or urgent system updates that may result in temporary service disruptions</li>
                        <li>Suspend or terminate your account access if you violate these Terms or misuse the platform</li>
                        </ul>
                        <p>
                        We will make reasonable efforts to notify users in advance of major updates, planned outages, or significant service changes via email or in-app alerts.
                        </p>
                        <p>
                        PostsVille is not responsible for any loss of data, business interruption, or other damages arising from service modifications, maintenance, or downtime.
                        </p>

                        <h5 class="mt-2">9. Termination</h5>
                        <p>
                        You may cancel your account at any time through your account dashboard or by submitting a written request to our support team at
                        <a href="mailto:support@postsville.com">support@postsville.com</a>.
                        </p>
                        <p>PostsVille reserves the right to suspend or permanently terminate your account without prior notice under the following circumstances:</p>
                        <ul class="list-control">
                        <li>Violation of these Terms or any misuse of the Services</li>
                        <li>Failure to pay subscription fees or resolve billing issues within a reasonable time</li>
                        <li>Legal or regulatory obligation requiring suspension or closure of services</li>
                        </ul>
                        <p>Upon termination:</p>
                        <ul class="list-control">
                        <li>Your access to the Services will be revoked immediately</li>
                        <li>All associated data, scheduled posts, and integrations may be deleted permanently, unless retention is required by law or for legitimate business purposes</li>
                        <li>We are not obligated to retain or provide a copy of your content following account closure</li>
                        </ul>
                        <p>We recommend exporting your data prior to cancellation or contacting us for assistance if needed.</p>

                        <h5 class="mt-2">10. Intellectual Property</h5>
                        <p>
                        All elements of the PostsVille platform—including but not limited to software code, user interface, visual design, text content, logos, product names, and proprietary tools—are owned by PostsVille Ltd., and are protected by applicable intellectual property laws in the United Kingdom and internationally.
                        </p>
                        <p>Unless explicitly authorized in writing, you may not:</p>
                        <ul class="list-control">
                        <li>Copy, modify, distribute, or create derivative works from any part of the platform</li>
                        <li>Reverse-engineer, decompile, or attempt to extract the source code</li>
                        <li>Use PostsVille trademarks, branding, or assets in a way that may cause confusion or imply endorsement</li>
                        <li>Resell or sublicense access to our Services or underlying technology</li>
                        </ul>
                        <p>All rights not expressly granted to you under these Terms are reserved by PostsVille Ltd.</p>

                        <h5 class="mt-2">11. Limitation of Liability</h5>
                        <p>To the maximum extent permitted under applicable law, PostsVille Ltd. and its affiliates, officers, directors, employees, and agents shall not be held liable for:</p>
                        <ul class="list-control">
                        <li>Any loss of revenue, profits, business opportunities, or anticipated savings</li>
                        <li>Indirect, incidental, punitive, special, or consequential damages, including loss or corruption of data, system failures, or business disruption</li>
                        <li>Downtime, technical errors, or interruptions in service availability, whether caused by scheduled maintenance, third-party failures, or unforeseen system issues</li>
                        <li>Damages arising from integrations with third-party services, APIs, or social media platforms beyond our control</li>
                        </ul>
                        <p>By using our Services, you acknowledge and agree that:</p>
                        <ul class="list-control">
                        <li>You assume all responsibility for your use of the platform</li>
                        <li>You access the Services “as-is” and “as available,” without warranties of any kind</li>
                        <li>PostsVille shall not be held liable for any claims, damages, or losses resulting from your reliance on the Services or third-party content</li>
                        </ul>
                        <p>In jurisdictions where limitations of liability are restricted, our liability shall be limited to the maximum extent allowed by law.</p>

                        <h5 class="mt-2">12. Data Protection & Privacy</h5>
                        <p>
                        At PostsVille, we are fully committed to protecting your personal information in accordance with the UK General Data Protection Regulation (UK GDPR) and other relevant data protection laws.
                        </p>
                        <p>Here’s what this means for you:</p>
                        <ul class="list-control">
                        <li>We collect, use, and process your data strictly as described in our <a href="/privacy-policy">Privacy Policy</a></li>
                        <li>You retain control over your personal information and can request access, correction, or deletion at any time</li>
                        <li>Your responsibility: When using our Services, you agree to comply with applicable privacy laws—including obtaining any necessary consent before collecting or processing data about third parties (e.g., your followers, customers, or employees)</li>
                        <li>If you connect social media accounts or third-party tools, you also agree to comply with their respective privacy policies</li>
                        </ul>
                        <p>For more information about how we handle your data, please refer to our dedicated <a href="/privacy-policy">Privacy Policy</a>.</p>

                        <h5 class="mt-2">13. Governing Law</h5>
                        <p>
                        These Terms of Service—and any dispute or claim arising from or in connection with them—shall be governed by and interpreted in accordance with the laws of the United Kingdom, without regard to its conflict of law principles.
                        </p>
                        <p>By using our Services, you agree that:</p>
                        <ul class="list-control">
                        <li><strong>Jurisdiction:</strong> Any legal proceedings related to these Terms shall be brought exclusively before the courts of England and Wales</li>
                        <li>You waive any objection to the jurisdiction and venue of such courts, including on the grounds of inconvenient forum</li>
                        </ul>
                        <p>
                        This provision does not limit your rights under consumer protection laws in your country of residence if those laws apply.
                        </p>

                        <h5 class="mt-2">14. Changes to These Terms</h5>
                        <p>We may modify or update these Terms from time to time to reflect:</p>
                        <ul class="list-control">
                        <li>Changes to our Services or business operations</li>
                        <li>Updates required by law or regulatory guidance</li>
                        <li>Improvements to user experience or platform security</li>
                        </ul>
                        <p>If any material changes are made, we will notify you through one or more of the following:</p>
                        <ul class="list-control">
                        <li>A prominent banner or message on our website or platform</li>
                        <li>An email sent to your registered address</li>
                        </ul>
                        <p>
                        By continuing to use PostsVille after such changes are posted or communicated, you agree to the updated Terms. If you do not agree with the changes, you should discontinue use of the Services and cancel your account.
                        </p>

                        <h5 class="mt-2">15. Contact Us</h5>
                        <p>If you have any questions, feedback, or concerns about these Terms of Service—or if you need help using the platform—please feel free to contact us:</p>
                        <ul class="list-control">
                        <li>📧 Email: <a href="mailto:support@postsville.com">support@postsville.com</a></li>
                        <li>🌐 Website: <a href="https://www.postsville.com">www.postsville.com</a></li>
                        </ul>
                        <p class="mb-5">We’re here to support you.</p>

                </div>

            </div>
        </div>
    </section>
    <!-- service-section end -->

    @endsection
