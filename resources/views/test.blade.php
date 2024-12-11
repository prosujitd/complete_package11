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

        tr,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }


        /* Setting up our grid */
        .container {
            width: 100%;
            /*Set the width of the entire website here */
            margin-right: auto;
            margin-left: auto;
            /* Margin-left and right are set to auto to center the container */
        }

        .seven:first-child,
        .eight:first-child,
        .nine:first-child,
        .ten:first-child,
        .eleven:first-child,
        .five:first-child,
        .four:first-child,
        .three:first-child,
        .two:first-child,
        .one:first-child,
        .six:first-child {
            margin-left: 0;
            /* This line of code makes the left-most column align to the left of the screen */
        }

        .eleven {
            width: 91.5%;
            float: left;
            margin-left: 2%;
        }

        .ten {
            width: 83%;
            float: left;
            margin-left: 2%;
        }

        .nine {
            width: 74.5%;
            float: left;
            margin-left: 2%;
        }

        .eight {
            width: 66%;
            float: left;
            margin-left: 2%;
        }

        .seven {
            width: 57.5%;
            float: left;
            margin-left: 2%;
        }

        .six {
            width: 49%;
            /* This div spans six columns (the entire row)*/
            float: left;
            margin-left: 2%;
        }

        .five {
            width: 40.5%;
            /* This div spans five columns */
            /* margin-left: 2%; */
            float: left;
        }

        .four {
            width: 32%;
            float: left;
            /* margin-left: 2%; */
        }

        .three {
            width: 23.5%;
            float: left;
            /* margin-left: 2%; */
        }

        .two {
            width: 15%;
            float: left;
            /* margin-left: 2%; */

        }

        .one {
            width: 6.5%;
            float: left;
            margin-left: 2%;
        }

        .row {
            width: 100%;
            clear: both;
            /* Clear creates new styles for the next row */
            padding: 0px;
            margin: 0px;
        }
        .container{
            margin: 50px;;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="two">
                <img src="{{asset('img/logo1.png')}}" alt="Uni Logo" title="Uni Logo" width="50" />
            </div>

            <div class="eight">
                <h2 style="margin:5px" class="text-center">PURBANCHAL UNIVERSITY</h2>
                <h3 style="margin:5px" class="text-center">FACULTY OF SCIENCE & TECHNOLOGY</h3>
                <h3 style="margin:5px" class="text-center">CITE, Tinkune Kathmandu</h3>
                <h3 style="margin:5px" class="text-center">INTERNAL ASSESSEMENT MARKS LEDGER</h3>
            </div>

            <div class="two">
                <img src="{{asset('img/logo1.png')}}" alt="Colz Logo" title="Colz Logo" width="50" />
            </div>

        </div>

        <div class="row" style="padding-top: 20px;line-height: 30px;">
            <p style="text-align: left;" class="six" style="padding-left: 10px; float:left">PROGRAM: BCA</p>
            <p style="text-align: center;" class="two">SEMESTER: VIII</p>
            <p style="text-align: center;" class="two">BATCH: 2022</p>
            <p class="two" style="text-align: center;float:right">DATE: 2024-12-11</p>
        </div>

        <div class="row" style="margin-top: 10px; line-height: 30px;">
            <p style="text-align: left;" class="six" style="padding-left: 10px; float:left">&nbsp;</p>
            <p style="text-align: center;" class="three">TH. FULL MARKS:20</p>
            <p style="text-align: center;" class="three">TH. PASS MARKS:08</p>
        </div>

        <div class="row" style="line-height: 30px;">
            <p style="text-align: left;" class="six" style="padding-left: 10px; float:left">SUBJECT: DBMS</p>
            <p style="text-align: center;" class="three">PR. FULL MARKS:50</p>
            <p style="text-align: center;" class="three">PR. PASS MARKS:20</p>
        </div>


        <div style="margin-top:25px">
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

        <div style="margin-top: 50px;" class="row">
            <div style="text-align:center" class="six">
                <p>___________________</p>
                <p>CAMPUS SEAL</p>
                <p>CITE, Kathmandu</p>
            </div>

            <div style="text-align:center" class="six">
                <p>___________________</p>
                <p>T. Name Sharma</p>
                <p>Subject Teacher</p>
            </div>
        </div>

        <div style="margin-top: 150px;" class="text-center footer margin-top">
            <div>Thank you</div>
            <div>&copy; Colz</div>
        </div>
    </div>
</body>

</html>