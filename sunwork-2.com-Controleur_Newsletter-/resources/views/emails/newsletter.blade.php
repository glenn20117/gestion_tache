<!DOCTYPE html>
<html lang="en">
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
            text-align: center;
        }
        .email-body p {
            margin: 10px 0;
        }
        .email-body strong {
            font-size: 18px;
            color: #333;
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

            .email-body strong {
                font-size: 16px;
            }

            .email-body p {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 400px) {
            .email-header h1 {
                font-size: 18px;
            }

            .email-body strong {
                font-size: 14px;
            }

            .email-body p {
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
            <h1>Newsletter Subscription • SUN WORK</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p>A new email address would like to join the newsletter</p>
            <p>Below is the email address:</p>
            <p><strong>{{ $email_address }}</strong></p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>© 2025 SUN WORK. All rights reserved.</p>
            <p>This is an automated email</p>
        </div>
    </div>
</body>
</html>
