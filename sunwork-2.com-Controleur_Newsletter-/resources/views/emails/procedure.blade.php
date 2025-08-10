<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Email Container */
        .email-container {
            max-width: 600px;
            width: 100%;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background-color: #007bff; /* Nouvelle couleur */
            padding: 20px;
            text-align: center;
            color: #ffffff;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Email Body */
        .email-body {
            margin: 20px 0;
            line-height: 1.6;
            color: #333333;
        }
        .email-body p {
            margin: 10px 0;
        }
        .email-body ul {
            list-style-type: none;
            padding: 0;
        }
        .email-body li {
            background: #f1f1f1;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        /* Footer */
        .email-footer {
            text-align: center;
            font-size: 12px;
            color: #888888;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #dddddd;
        }

        /* Responsive Design */
        @media only screen and (max-width: 600px) {
            .email-header h1 {
                font-size: 20px;
            }

            .email-container {
                padding: 15px;
            }

            .email-body li {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 400px) {
            .email-header h1 {
                font-size: 18px;
            }

            .email-body li {
                font-size: 12px;
            }

            .email-container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Request for procedure • SUN WORK</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p>Hello,</p>
            <p>You have received a new procedure request for the service: <strong>{{ $service }}</strong>.</p>
            <p>Here are the details of the request :</p>
            <ul>
                <li><strong>City :</strong> {{ $city }}</li>
                <li><strong>First name :</strong> {{ $first_name }}</li>
                <li><strong>Last name :</strong> {{ $last_name }}</li>
                <li><strong>Phone number :</strong> {{ $phone_number }}</li>
                <li><strong>E-mail :</strong> {{ $email_address }}</li>
            </ul>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>© 2025 SUN WORK. All rights reserved.</p>
            <p>This is an automated email.</p>
        </div>
    </div>
</body>
</html>
