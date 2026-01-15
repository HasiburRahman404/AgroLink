<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>AgroLink</title>
    <link rel="stylesheet" href="../CSS/Delivery_info.css">
</head>
<body>

<div class="container">
    <h2>Contact and Delivery Information</h2>

    <!-- Requester Info -->
    <fieldset>
        <legend>Requester's Information</legend>

        <div class="row">
            <div class="field">
                <label>Last Name <span>*</span></label>
                <input type="text">
            </div>

            <div class="field">
                <label>First Name <span>*</span></label>
                <input type="text">
            </div>

            <div class="field small">
                <label>Middle Initial</label>
                <input type="text">
            </div>
        </div>

        <div class="row">
            <div class="field">
                <label>Contact No <span>*</span></label>
                <input type="text">
            </div>
        </div>

        <div class="row">
            <div class="field">
                <label>Email Address <span>*</span></label>
                <input type="email">
            </div>
        </div>
    </fieldset>

    <!-- Delivery Address -->
    <fieldset>
        <legend>Delivery Address</legend>

        <div class="row">
            <div class="field">
                <label>Street Address <span>*</span></label>
                <input type="text">
            </div>
        </div>

        <div class="row">
            <div class="field">
                <label>House number <span>*</span></label>
                <input type="text">
            </div>
        </div>

        

        <div class="row">
            <div class="field">
                <label>City <span>*</span></label>
                <select>
                    <option>Select City</option>
                    <option>Khulna</option>
                    <option>Dhaka</option>
                    <option>Rajshahi</option>
                    <option>Chittagong</option>
                    
                </select>
            </div>
        </div>

        <div class="row">
            <div class="field small">
                <label>Zip Code</label>
                <input type="text">
            </div>
        </div>

        <div class="row">
            <div class="field">
                <label>Country <span>*</span></label>
                <select>
                    <option>Select Country</option>
                    <option>Australia</option>
                    <option>Bangladesh</option>
                    <option>India</option>
                    <option>Philippines</option>
                </select>
            </div>

            <div class="field">
                <label>If you want door-to-door delivery, please select the floor:</label>
                <select>
                    <option>None</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>

                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    
                </select>
            </div>
        </div>
    </fieldset>

    <p class="footer-text">
       Click ‘Next’ to select a payment method, or ‘Cancel’ to cancel the process.
    </p>

    <div class="buttons">
        <button class="cancel">Cancel</button>
        <button class="next">Next</button>
    </div>
</div>

</body>
</html>
