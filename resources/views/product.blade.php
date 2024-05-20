<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Integration</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: aliceblue;
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            background-color: #fff;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            font-family: monospace;
            text-align: center;
            padding: 0.75rem 1.25rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }
        .card-body {
            padding: 1.25rem;
            text-align: center;
        }
        .card-body form .form-control {
            width: 90%;
            border-radius: 6px;
            margin: 10px 0;
            border: none;
            outline: none;
            background-color: aliceblue;
            padding: 10px;
            font-family: monospace;
        }
        .razorpay-payment-button {
            background-color: #ff7529;
            color: #fff;
            border: none;
            font-family: monospace;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
        }
        .razorpay-payment-button:hover {
            background-color: #e56624;
        }
        .razorpay-payment-button:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(255, 117, 41, 0.25);
        }
    </style>
</head>
<body>
    <div class="card card-default">
        <div class="card-header">
             Pay Here Registration fee
        </div>
        <div class="card-body text-center">
            <form action="{{ route('razorpay.payment.store') }}" method="POST" >
                @csrf 
                <input class="form-control" type="text" name="name" placeholder="Name">
                <input class="form-control" type="text" name="phone" placeholder="Phone">
                <input class="form-control" type="text" name="email" placeholder="Email">

                <script src="https://checkout.razorpay.com/v1/checkout.js"
                        data-key="{{ env('RAZORPAY_KEY') }}"
                        data-amount="100"
                        data-buttontext="PAY NOW"
                        data-name="CINEREOUS TECHNOLOGIES"
                        data-description="Payment for Registration"
                        data-image="https://cinereoustechnologies.com/wp-content/uploads/2023/10/IMG-20230617-WA0015-2.png"
                        data-prefill.name="$input.value"
                        data-prefill.email="$input.value"
                        data-theme.color="#ff7529">
                </script>
            </form>
        </div>
    </div>
</body>
</html>


