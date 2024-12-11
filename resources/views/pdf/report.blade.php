<!-- <!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        h4 {
            margin: 0;
        }

        .w-full {
            width: 100%;
        }

        .w-half {
            width: 50%;
        }

        .margin-top {
            margin-top: 1.25rem;
        }

        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }

        table {
            width: 100%;
            border-spacing: 0;
        }

        table.products {
            font-size: 0.875rem;
        }

        table.products tr {
            background-color: rgb(96 165 250);
        }

        table.products th {
            color: #ffffff;
            padding: 0.5rem;
        }

        table tr.items {
            background-color: rgb(241 245 249);
        }

        table tr.items td {
            padding: 0.5rem;
        }

        .total {
            text-align: right;
            margin-top: 1rem;
            font-size: 0.875rem;
        }

        .text-center{
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Uni Name</h2>
    <h3>Fac Name</h3>
    <h3>College Name & Address</h3>
    <h3>Internal Assessement Marks Ledger</h3>
    <div>
        <div>
            <p>Program Name</p>
            <div>
                <p>Semester No.</p>
                <p>Batch Year</p>
                <p>Date: Generate</p>
            </div>
        </div>

        <div>
            <p>TH. Full Marks: 20</p>
            <p>TH. Pass Marks: 08</p>
        </div>

        <div>
            <p>Subject: Name</p>
            <div>
                <p>PR. FULL Marks: 50</p>
                <p>PR. PASS Marks: 20</p>
            </div>
        </div>
    </div>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <img src="{{public_path('img/logo1.png')}}" alt="laravel daily" width="200" />
            </td>
            <td class="w-half">
                <h2>Invoice ID: 834847473</h2>
            </td>
        </tr>
    </table>

    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div>
                        <h4>To:</h4>
                    </div>
                    <div>John Doe</div>
                    <div>123 Acme Str.</div>
                </td>
                <td class="w-half">
                    <div>
                        <h4>From:</h4>
                    </div>
                    <div>Laravel Daily</div>
                    <div>London</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="margin-top">
        <table class="products">
            <tr>
                <th>Qty</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <tr class="items">
                @foreach($data as $item)
                <td>
                    {{ $item['quantity'] }}
                </td>
                <td>
                    {{ $item['description'] }}
                </td>
                <td>
                    {{ $item['price'] }}
                </td>
                @endforeach
            </tr>
        </table>
    </div>

    <div class="total">
        Total: $129.00 USD
    </div>

    <div class="footer margin-top">
        <div>Thank you</div>
        <div>&copy; Laravel Daily</div>
    </div>
</body>

</html> -->


<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        h4 {
            margin: 0;
        }

        .w-full {
            width: 100%;
        }

        .w-half {
            width: 50%;
        }

        .margin-top {
            margin-top: 1.25rem;
        }

        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }

        table {
            width: 100%;
            border-spacing: 0;
        }

        table.products {
            font-size: 0.875rem;
        }

        table.products tr {
            background-color: rgb(96 165 250);
        }

        table.products th {
            color: #ffffff;
            padding: 0.5rem;
        }

        table tr.items {
            background-color: rgb(241 245 249);
        }

        table tr.items td {
            padding: 0.5rem;
        }

        .total {
            text-align: right;
            margin-top: 1rem;
            font-size: 0.875rem;
        }

        .text-center {
            text-align: center;
        }

        .flex {
            display: flex;
            flex-direction: row;
            background-color: DodgerBlue;
            gap: 200px;
            justify-content: space-between;
            align-items: center;
        }

        .flex-evenly {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }
        
        tr,th,td{
            border: 1px solid black;
            padding:5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="flex">
        <div class="push-left">
            <img style="margin-left: 10px;" src="{{asset('img/logo1.png')}}" alt="Uni Logo" title="Uni Logo" width="50" />
        </div>

        <div  class="push-center">
            <h2 style="margin:5px" class="text-center">PURBANCHAL UNIVERSITY</h2>
            <h3  style="margin:5px" class="text-center">Science & Technology</h3>
            <h3  style="margin:5px" class="text-center">CITE, Tinkune Kathmandu</h3>
            <h3  style="margin:5px" class="text-center">INTERNAL ASSESSEMENT MARKS LEDGER</h3>
        </div>

        <div class="push-right">
            <img style="margin-right: 10px;" src="{{asset('img/logo1.png')}}" alt="Colz Logo" title="Colz Logo" width="50" />
        </div>

    </div>

    <div style="margin-top: 10px;">
        <div >
            <p style="padding-left: 10px; float:left">PROGRAM: BCA</p>
            <div style="width:10%" >
                <p>SEMESTER: VIII</p>
                <p>BATCH: 2022</p>
                <p style="padding-right: 10px;">DATE: 2024-12-11</p>
            </div>
        </div>

        <!-- <div >
            <p>TH. Full Marks: 20</p>
            <p>TH. Pass Marks: 08</p>
        </div> -->

        <div >
            <p>&nbsp;</p>
            <div >
                <p>TH. FULL Marks: 20</p>
                <p>TH. PASS Marks: 08</p>
            </div>
        </div>

        <div >
            <p style="padding-left: 10px;">Subject: DBMS</p>
            <div >
                <p>PR. FULL Marks: 50</p>
                <p>PR. PASS Marks: 20</p>
            </div>
        </div>
    </div>

    <div class="margin-top">
        <table style="border: 1px solid black;" class="w-full">
            <tr>
                <td rowspan="2" class="">#</td>
                <td rowspan="2" class="">Student</td>

                <td rowspan="2" class="">Attendance</td>
                <td rowspan="2" class="">Class Test</td>
                <td rowspan="2" class="">Viva</td>

                <td rowspan="2" class="">Mid-Term</td>
                <td rowspan="2" class="">Pre-board</td>
                <td rowspan="2" class="">Assignment</td>

                <td rowspan="2" class="">LabReport</td>
                <td rowspan="2" class="">Presentation</td>

                <td colspan="2" class="">Total</td>
            </tr>

            <tr>
                <td>T</td>
                <td>P</td>
            </tr>

            <tr>
                <td>1</td>
                <td>Ram Sharm</td>

                <td>3</td>
                <td>5</td>
                <td>8</td>

                <td>6</td>
                <td>12</td>
                <td>11</td>

                <td>9</td>
                <td>16</td>

                <td>19</td>
                <td>38</td>

            </tr>

            <tr>
                <td>1</td>
                <td>Ram Sharm</td>

                <td>3</td>
                <td>5</td>
                <td>8</td>

                <td>6</td>
                <td>12</td>
                <td>11</td>

                <td>9</td>
                <td>16</td>

                <td>19</td>
                <td>38</td>

            </tr>

            <tr>
                <td>1</td>
                <td>Ram Sharm</td>

                <td>3</td>
                <td>5</td>
                <td>8</td>

                <td>6</td>
                <td>12</td>
                <td>11</td>

                <td>9</td>
                <td>16</td>

                <td>19</td>
                <td>38</td>

            </tr>

            <tr>
                <td>1</td>
                <td>Ram Sharm</td>

                <td>3</td>
                <td>5</td>
                <td>8</td>

                <td>6</td>
                <td>12</td>
                <td>11</td>

                <td>9</td>
                <td>16</td>

                <td>19</td>
                <td>38</td>

            </tr>

            <tr>
                <td>1</td>
                <td>Ram Sharm</td>

                <td>3</td>
                <td>5</td>
                <td>8</td>

                <td>6</td>
                <td>12</td>
                <td>11</td>

                <td>9</td>
                <td>16</td>

                <td>19</td>
                <td>38</td>

            </tr>

            <tr>
                <td>1</td>
                <td>Ram Sharm</td>

                <td>3</td>
                <td>5</td>
                <td>8</td>

                <td>6</td>
                <td>12</td>
                <td>11</td>

                <td>9</td>
                <td>16</td>

                <td>19</td>
                <td>38</td>

            </tr>
        </table>
    </div>

    <div style="margin-top: 50px;display:flex" class="flex-evenly">
        <div class="">
            <p>___________________</p>
            <p>CAMPUS SEAL</p>
            <p>CITE, Kathmandu</p>
        </div>

        <div class="">
            <p>___________________</p>
            <p>T. Name Sharma</p>
            <p>Subject Teacher</p>
        </div>
    </div>


    <!-- 
    <div class="total">
        Total: $129.00 USD
    </div> -->

    <div style="margin-top: 100px;" class="text-center footer margin-top">
        <div>Thank you</div>
        <div>&copy; Colz</div>
    </div>
</body>

</html>