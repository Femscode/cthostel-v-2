<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTHOSTEL - {{$hostel->name}}</title>
    <style>
        * {
            font-family: 'Segoe UI', Roboto, 'Open Sans', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f3f4f6;
            color: #333;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .print-section {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .print-section button,
        .print-section a {
            padding: 12px 24px;
            margin: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .print-section button {
            background-color: #28a745;
            color: #fff;
        }

        .print-section button:hover {
            background-color: #218838;
        }

        .print-section a {
            background-color: #007bff;
            color: #fff;
        }

        .print-section a:hover {
            background-color: #0056b3;
        }

        .page {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            width: 100%;
            text-align: center;
        }

        .header {
            margin-bottom: 20px;
        }

        .logo {
            width: 180px;
            margin: 0 auto;
            display: block;
        }

        .content h2 {
            font-size: 2rem;
            color: #1C754C;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .sub-text {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 25px;
        }

        .qr-section {
            margin-bottom: 20px;
        }

        .qr-code {
            width: 200px;
            height: 200px;
            margin: 0 auto;
            display: block;
            border: 2px solid #1C754C;
            padding: 5px;
            border-radius: 10px;
        }

        .footer {
            background-color: #1C754C;
            color: #fff;
            padding: 12px;
            border-radius: 8px;
            margin-top: 30px;
            font-size: 1.1rem;
        }

        .website-link {
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
        }

        .website-link:hover {
            text-decoration: underline;
        }

        @media print {
            body {
                background-color: #fff;
            }

            .print-section {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="print-section" id="pr">
        <button type="button" onclick="window.print()">Print</button>
        <a href="javascript:history.back()">Go Back</a>
    </div>

    <div class="page" id="printingDiv">
        <div class="header">
            <img src="https://cthostel.com/myimages/logo_header.png" alt="Hostel Logo" class="logo">
        </div>

        <div class="content">
            <h2>Don't get overcharged or scammed</h2>
            <h4 class="sub-text">Scan to view hostel price and details.</h4>
            <div class="qr-section">
                <div>{!! QrCode::size(256)->generate($hostel_link) !!}</div>
            </div>
        </div>

        <div class="footer">
            <a href="https://www.cthostel.com" class="website-link">www.cthostel.com</a>
        </div>
    </div>

</body>

</html>
