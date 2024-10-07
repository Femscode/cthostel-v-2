<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTHOSTEL - {{$hostel->name}}</title>
</head>
<style>
    * {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }

    .container {
        text-align: left;
        font-size: 12px;
        padding: 1px 10px 0px 20px;
    }

    .notif {
        text-align: center;
    }

    footer {
        justify-content: center;
        text-align: center;
        font-size: 11px;
    }

    .sign {
        width: 200px;
    }

    body {
        /* background: rgb(204, 204, 204); */
    }

    page {
        background-color: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.4cm rgba(0, 0, 0, 0.4);
    }

    page[size="A4"] {
        width: 21cm;
        height: 29.7cm;
    }

    page[size="A4"][layout="landscape"] {
        width: 29.7cm;
        height: 21cm;
    }

    @media print {

        body,
        .pagee {
            margin: 0;
            box-shadow: 0;
        }

        #pr {
            display: none;
        }

        #headeriMAGE {
            /* visibility: hidden; */
        }
    }
</style>

<body>
    <?php

    use Illuminate\Support\Str;
    ?>
    <p align="center" id="pr">

        <button type="button" onclick="window.print()" class="btn btn-success">Print
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
            </svg>
        </button>
        <a type="button" class="btn btn-primary btn-sm" href="javascript:history.back()">Go
            Back</a>
    </p>
    <page size="A4" class="pagee" id="printingDiv">

        <img src="{{ asset('header.png') }}" alt="" height="203px" width="" id="headeriMAGE">
        <div class="container">
            <div>
                <p><b> A PRODUCT OF CTHOSTEL
                        <span
                            style="float:right; padding-right: 70px; font-size: small;">{!! date('d-M-Y', strtotime(now())) !!}
                            </span>
                        <br>
                        
                        {{$hostel->name}} <br>
                        {{ Str::upper($hostel->category->name) }}
                        <br> OGUN STATE, NIGERIA </b> </p>
                <div>
                    <p>Dear Sir/Ma</p>
                </div>
                <div class="notif">

                   <h4><u>DO NOT GET SCAMMED OR OVERCHARGED FOR THIS HOSTEL</h4>
                </div>
                <div style='text-align:center'>
                    <p>SCAN TO VIEW HOSTEL DETAILS</p> </div>
                <div>
                   
                </div>
                <div>
                    <h4  style='text-align:center'>
                        {!! QrCode::size(256)->generate($hostel_link) !!}
                    </h4>
                </div>
                
                <footer>
                    <p><b>Powered By CTHostel.</b><br>
                    <p>Supported by the caretakers association and the Student Union Government</p>
                     www.cthostel.com | <b>HOTLINE: </b>09058744473, 08070580651 | <b>SUG TEAM:</b> 0908388373
                    </p>
                </footer>
            </div>

        </div>
    </page>


</body>

</html>