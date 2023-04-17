<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container min-vh-100">
        <form action="verify.php" method="post">
            <?php
            session_start();
            if (isset($_SESSION['status'])) {
                echo "<h4>" . $_SESSION['status'] . "</h4>";
                unset($_SESSION['status']);
            }
            ?>
            <h1>Registration Page</h1>
            <hr>
            <!-- USER TYPE -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Are you a Driver or a Passenger</label>
                <select class="form-select" aria-label="Default select example" name="usertype">
                    <option selected>Choose One</option>
                    <option value="1">Driver/Car Owner</option>
                    <option value="2">Passenger</option>
                </select>
            </div>
            <!-- USER FIRST NAME -->
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" require>
            </div>
            <!-- USER MIDDLE NAME -->
            <div class="mb-3">
                <label for="middlename" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middlename" name="middlename" require>
            </div>
            <!-- USER LAST NAME -->
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" require>
            </div>
            <!-- USER HOUSE NUMBER -->
            <div class="mb-3">
                <label for="housenumber" class="form-label">House Number</label>
                <input type="text" class="form-control" id="housenumber" name="housenumber" require>
            </div>
            <!-- USER STREET -->
            <div class="mb-3">
                <label for="street" class="form-label">Street</label>
                <input type="text" class="form-control" id="street" name="street" require>
            </div>
            <!-- USER BARANGGAY -->
            <div class="mb-3">
                <label for="baranggay" class="form-label">Barangay</label>
                <input type="text" class="form-control" id="baranggay" name="baranggay" require>
            </div>
            <!-- USER CITY -->
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" require>
            </div>
             <!-- USER PROVINCE -->
             <div class="mb-3">
                <label for="province" class="form-label">Province</label>
                <input type="text" class="form-control" id="province" name="province" require>
            </div>
            <!-- USER CONTACT -->
            <div class="mb-3">
                <label for="contact" class="form-label">Number</label>
                <input type="text" class="form-control" id="contact" name="contact" require min="11" max="11">
            </div>
            <!-- USER ACC TYPE -->
            <div class="mb-3">
                <label for="accountype" class="form-label">Account Type</label>
                <input type="text" class="form-control" id="accountype" name="accountype" placeholder="GCASH/PAYMAYA/BANK (BDO)" require>
            </div>
            <!-- USER ACCOUNT NUM -->
            <div class="mb-3">
                <label for="accnum" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="accnum" name="accnum" require>
            </div>
            <!-- USERNAME -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" require>
            </div>
            <!-- USER EMAIL -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" require>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <!-- USER PASSWORD -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>