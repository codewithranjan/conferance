<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <style>
        /* For the whole section */
        .bg-slate-200 {
        }
        .text-black {
            color: black;
        }

        /* For the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* For the Bank Details section */
        .bg-red-100 {
            background-color: #f9a8a8;
        }

        /* For the Bank Details table */
        .max-w-[700px] {
            max-width: 700px;
        }

        /* For the buttons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
        }

        .btn-success {
            background-color: #4CAF50;
            color: white;
            border: 2px solid #4CAF50;
        }

        .btn-success:hover {
            background-color: white;
            color: #4CAF50;
        }
     /* For the white color box */
.white-box {
    background-color: rgb(254 226 226);
    width: 90%;
    max-width: 700px;
    padding: 20px;
    margin-top: 20px;
    border: 2px solid #ccc;
    border-radius: 10px;
    text-align: center;
    /* Center the box horizontally */
    margin-left: auto;
    margin-right: auto;
}


        /* For the contact information */
        .contact-info {
            margin-top: 20px;
            text-align: left;
        }

        /* For the buttons */
      
    </style>
</head>
<body>
<?php include "header.php"?>
<section  id="about" class="section about mt-12">
    <div  class="container">
    <div class="mt-12 py-8 bg-slate-200 text-black">
        <div id="registration" class="h-12 w-full"></div>
        <h1 class="text-center text-lg sm:text-xl md:text-3xl font-bold mt-12">
            <span class="border-b-4 border-blue-500 px-4 pb-4">Registration Fee (including 18% GST)</span>
        </h1>
        <div class="container-fluid">
        <div class="row  justify-center">
        <div class="col-md-6" style="padding-left: 200px;        width: 88%;">
            <div class="p-1 md:p-4 border-2 border-stone-400 overflow-x-scroll">
                <table class="text-left text-[12px] md:text-lg lg:text-lg w-[39rem] md:w-[59rem] lg:w-[67rem]">
                    <tbody>
                        <tr class="h-12">
                            <th></th>
                            <th class="text-[13px] sm:text-[15px] md:text-xl p-1 pb-4" style="text-align: center;padding:6px;">Category</th>
                            <th class="text-[13px] sm:text-[15px] md:text-xl p-1 pb-4" style="text-align: center;padding:6px;">Indian Delegates</th>
                            <th class="text-[13px] sm:text-[15px] md:text-xl p-1 pb-4" style="text-align: center;padding:6px;">Foreign Delegates</th>
                        </tr>
                        <tr class="border-b-2 border-stone-600">
                            <td class="w-[20%] md:w-72 text-[13px] font-semibold md:text-[20px] lg:text-lg px-[3px] md:px-2 border-b-2 border-stone-400" rowspan="3">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <span class="text-red-500 font-bold">Student Members</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-stone-400" style="text-align: center;padding:6px;">
                            <td class="py-2" style="text-align: center;padding:6px;">IEEE</td>
                            <td class="py-2" style="text-align: center;padding:6px;">INR 6,900</td>
                            <td class="py-2" style="text-align: center;padding:6px;">USD 190</td>
                        </tr>
                        <tr class="border-b-2 border-stone-400">
                            <td class="py-2" style="text-align: center;padding:6px;">Non-IEEE</td>
                            <td class="py-2" style="text-align: center;padding:6px;">INR 9,900</td>
                            <td class="py-2" style="text-align: center;padding:6px;">USD 250</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="font-semibold">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <span class="text-red-500 font-bold">Professional Members</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-stone-400">
                            <td class="py-2" style="text-align: center;padding:6px;">IEEE</td>
                            <td class="py-2" style="text-align: center;padding:6px;">INR 12,900</td>
                            <td class="py-2" style="text-align: center;padding:6px;">USD 290</td>
                        </tr>
                        <tr class="border-b-2 border-stone-400">
                            <td class="py-2" style="text-align: center;padding:6px;">Non-IEEE</td>
                            <td class="py-2" style="text-align: center;padding:6px;">INR 14,900</td>
                            <td class="py-2" style="text-align: center;padding:6px;">USD 350</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div></div>
        <h1 class="text-center text-3xl font-bold mt-12 mb-8">
            <span class="border-b-4 border-blue-500 px-4 pb-4">Bank Details</span>
        </h1>
        <div class="flex justify-center">
        <div class="white-box">
            <h2>Contact Information</h2>
            <div class="contact-info">
                <div>
                    <strong>Account Name:</strong> IEEE MAC
                </div>
                <div>
                    <strong>Account Number:</strong> 77660200001325
                </div>
                <div>
                    <strong>IFSC Code:</strong> BARB0VJMNRE (Fifth character is ZERO)
                </div>
                <div>
                    <strong>Bank Name:</strong> Bank of Baroda
                </div>
                <div>
                    <strong>Branch:</strong> MNNIT Campus, Allahabad(Prayagraj)
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-12">
    <a href="https://forms.gle/5HzxLGFXxwDzH3mb8">
        <span class="rounded-xl cursor-pointer font-semibold text-lg border-5 px-8 border-stone-100 btn btn-success">Registration Form</span>
    </a>
</div>

        <div class="h-12 w-full"></div>
    </div>


    </div>
</section>





    <?php include "footer.php"?>
   
<body>