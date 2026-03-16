<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Client Enquiry — AV Law Firm</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            font-family: 'Georgia', serif;
        }

        .wrapper {
            max-width: 620px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.10);
        }

        /* Header */
        .header {
            background: #1a1a2e;
            padding: 32px 40px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            color: #c9a84c;
            font-size: 22px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .header p {
            margin: 6px 0 0;
            color: #aaa;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        /* Gold divider */
        .divider {
            height: 3px;
            background: linear-gradient(90deg, #c9a84c, #f0d080, #c9a84c);
        }

        /* Body */
        .body {
            padding: 36px 40px;
        }

        .body h2 {
            margin: 0 0 20px;
            color: #1a1a2e;
            font-size: 16px;
            border-bottom: 1px solid #e8e0d0;
            padding-bottom: 10px;
        }

        .field {
            margin-bottom: 18px;
        }

        .field .label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #c9a84c;
            margin-bottom: 4px;
        }

        .field .value {
            font-size: 15px;
            color: #222;
            line-height: 1.5;
        }

        .description-box {
            background: #faf8f3;
            border-left: 3px solid #c9a84c;
            padding: 14px 18px;
            border-radius: 2px;
        }

        .description-box .value {
            font-size: 14px;
            color: #444;
        }

        /* Footer */
        .footer {
            background: #1a1a2e;
            padding: 20px 40px;
            text-align: center;
        }

        .footer p {
            margin: 0;
            color: #666;
            font-size: 11px;
            letter-spacing: 0.5px;
        }

        .footer span {
            color: #c9a84c;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <!-- Header -->
        <div class="header">
            <h1>AV Law Firm</h1>
            <p>New Client Enquiry</p>
        </div>
        <div class="divider"></div>

        <!-- Body -->
        <div class="body">
            <h2>Enquiry Details</h2>

            <div style="display:flex; gap:24px; flex-wrap:wrap;">
                <div class="field" style="flex:1; min-width:200px;">
                    <div class="label">Full Name</div>
                    <div class="value">{{ $data['full_name'] }}</div>
                </div>
                <div class="field" style="flex:1; min-width:200px;">
                    <div class="label">Phone</div>
                    <div class="value">{{ $data['phone'] }}</div>
                </div>
            </div>

            <div style="display:flex; gap:24px; flex-wrap:wrap;">
                <div class="field" style="flex:1; min-width:200px;">
                    <div class="label">City</div>
                    <div class="value">{{ $data['city'] }}</div>
                </div>
                <div class="field" style="flex:1; min-width:200px;">
                    <div class="label">Practice Area</div>
                    <div class="value">{{ $data['practice_area'] ?: '—' }}</div>
                </div>
            </div>

            <div class="field">
                <div class="label">Case Description</div>
                <div class="description-box">
                    <div class="value">{{ $data['case_description'] }}</div>
                </div>
            </div>

            <div class="field" style="margin-top:24px;">
                <div class="label">Received At</div>
                <div class="value">{{ now()->format('d M Y, h:i A') }} (IST)</div>
            </div>
        </div>

        <!-- Footer -->
        <div class="divider"></div>
        <div class="footer">
            <p>This is an automated notification from <span>AV Law Firm</span> website. Please do not reply to this email.</p>
        </div>

    </div>
</body>

</html>