<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Delivery Address</title>
    <link rel="stylesheet" href="buy.css">
</head>

<body>

    <div class="wapper">

        <form action="address.php" method="post">

            <h3>Address</h3>

            <div class="form-wapper">
                <input type="text" placeholder="Full Name*" class="form-control" id="fullname" name="fullname"
                    required="">
            </div>


            <div class="form-wapper">
                <input type="number" placeholder="Contact number*" class="form-control" id="contactnumber"
                    name="contactnumbar" required="">
            </div>

            <div class="col-12">
                <input type="text" class="form-control" id="inputAddress" placeholder="House no./ Building Name*"
                    name="Address" required="">
            </div>

            <div class="col-12">
                <input type="text" class="form-control" id="inputroad" placeholder="Road Name / Area / Colony*"
                    name="road" required="">
            </div>

            <div class="col-12">
                <input type="text" class="form-control" id="inputpincode" placeholder="Pincode*" name="pincode"
                    required="">
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control" id="inputCity" placeholder="City*" name="city" required="">
            </div>
            <div class="col-md-4">
                <div class="form-wapper">
                    <select name="state" id="inputstate" class="form-control">
                        <option value=""> Select State...</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Chattisgarh">Chattisgarh</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Gujrat">Gujrat</option>
                        <option value="Assam">Assam</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Bengal">Bengal</option>
                        <option value="Kolkata">kolkata</option>
                        <option value="kerala">Kerala</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Sri Lanka">Sri lanka</option>
                    </select>
                    

                    <button class="btn btn-primary" type="submit" value="register" name="register">Save Address</button>
                </div>
        </form>
    </div>

</body>

</html>