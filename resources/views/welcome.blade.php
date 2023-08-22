<!DOCTYPE html>
<html>
<head>
    <style>
        /* Center the form using flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Style the form container */
        .form-container {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Style the label */
        label {
            display: block;
            margin-bottom: 10px;
        }

        /* Style the input field */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        /* Style the button */
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="{{ route('payment') }}" method="POST">
            @csrf
            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount">
            <br> <br>
            <button type="submit">Pay</button>
        </form>
    </div>
</body>
</html>
