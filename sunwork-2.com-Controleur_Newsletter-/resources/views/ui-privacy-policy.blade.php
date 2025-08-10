<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="sunwork" />
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}" />
    
    <title>Privacy Policy</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .header {
            background: #007bff;
            color: white;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            flex-grow: 1;
        }

        .back-button {
            position: absolute;
            left: 20px;
            font-size: 1.5rem;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
            outline: none;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #007bff;
            text-align: center;
            font-weight: 600;
        }

        .privacy-policy {
            padding: 60px 20px;
        }

        .privacy-policy h2 {
            font-size: 1.75rem;
            margin-bottom: 20px;
            font-weight: 600;
            color: #007bff;
        }

        .privacy-policy p {
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header class="header">
        <button class="back-button" onclick="history.back()">
            <i class="fas fa-arrow-left"></i>
        </button>
        <h1>Privacy Policy</h1>
    </header>

    <!-- Privacy Policy Section -->
    <section class="privacy-policy container">
        <h2>ARTICLE 1: COLLECTION OF YOUR INFORMATION</h2>
        <p>
            We collect information when you fill out our contact and newsletter forms.
        </p>
        <p>
            We may collect the following information: city of residence, your first name, your last name, your telephone number, your email address including the service you are interested in.
        </p>
        <p>
            Additionally, we may automatically receive and record information from your computer and browser, including your IP address, your software and hardware, and the page you request based 
            on your cookie preferences that you have selected via our banner.
        </p>

        <h2>ARTICLE 2: USE OF YOUR INFORMATION</h2>
        <!-- <p>
            The controller of your personal data is <span style="color: #DECE31;">SUN WORK</span>, located at Antoniego Madalińskiego 3, 50-443 Wrocław. You can contact us at <a href="mailto:contact@sunwork.com">contact@sunwork.com</a>.
        </p> -->
        <p>
            Any information we collect from you may be used to:

            <ul>
                <li>Contact you more effectively;</li>
                <li>Collect and establish statistics to improve our marketing and web marketing campaigns;</li>
                <li>Send you newsletters if you have subscribed to them;</li>
                <li>Personalize your experience and meet your individual needs.</li>
            </ul>
        </p>

        <h2>ARTICLE 3: CONFIDENTIALITY OF YOUR DATA</h2>
        <p>
            We are the sole owners of the information collected on our site. Your personal information will not be sold, exchanged, 
            transferred, or given to any other company for any reason whatsoever, without your consent.
        </p>

        <h2>ARTICLE 4: DISCLOSURE TO THIRD PARTIES</h2>
        <p>
            We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties 
            who assist us in operating our website or conducting our business, as long as those parties agree to keep this information confidential.
        </p>

        <h2>ARTICLE 5: PROTECTION OF YOUR INFORMATION</h2>
        <p>
            We implement a variety of security measures to maintain the safety of your personal information. We use state-of-the-art encryption to protect sensitive 
            information transmitted online. Our website of course has a Secure Socket Layer (SSL) Certificate.
        </p>
        <p>
            We also protect your information offline. Only authorized members of the company who need to perform a specific job (for example, billing or member services) 
            are granted access to personally identifiable information. The computers and servers used to store personally identifiable information are kept in a secure 
            environment by our hosting provider.We also protect your information offline. Only authorized members of the company who need to perform a specific job 
            (for example, billing or member services) are granted access to personally identifiable information. The computers and servers used to store personally 
            identifiable information are kept in a secure environment by our hosting provider.
        </p>

        <h2>ARTICLE 6: COPYING OR DELETING YOUR INFORMATION</h2>
        <p>
            We store the data transmitted via our various contact forms.
        </p>
        <p>
            However, you have the option to contact us by email at contact@thesunwork.com or by phone at +48 729 682 370 for any request to copy or delete your personal data that we store.
        </p>

        <h2>ARTICLE 7: SENDING OF NEWSLETTERS</h2>
        <p>
            If you are interested in receiving our newsletter, you can unsubscribe from it at any time via a suggestion at the bottom of each email.
        </p>

        <h2>ARTICLE 8: CONSENT TO OUR POLICY</h2>
        <p>
            By using our site, you consent to our privacy policy, which may be modified at any time by the publisher.
        </p>

        <p class="text-muted"><small>[Last updated: 02/01/2025]</small></p>
    </section>

    <!-- Footer Section -->
    @include('components.ui-footer')
</body>

</html>