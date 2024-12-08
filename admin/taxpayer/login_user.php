<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Datu Paglas </title>
  <!-- plugins:css -->
  <link rel="shortcut icon" href="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" />
  <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f5f5f5;
}
.bir-header {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: white;
    color: #333;
    z-index: 10;
    border-bottom: 1px solid #ccc;
}

.header-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
}

.header-top .logo {
    width: 60px;
    height: auto;
    margin-right: 15px;
}

.header-title {
    text-align: left;
    font-family: Arial, sans-serif;
}

.header-title h1 {
    font-size: 16px;
    font-weight: normal;
    margin: 0;
    color: #333;
}

.header-title h2 {
    font-size: 24px;
    margin: 0;
    color: #333;
}

.header-title p {
    font-size: 12px;
    margin: 5px 0 0;
    color: #666;
}

.contact-info {
    font-size: 14px;
    color: #333;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding: 20px 0;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
}

.navbar a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 0 10px;
}

.navbar input[type="text"] {
    padding: 5px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-left: auto;
}


.container {
    display: flex;
    width: 100vw;
    height: 100vh;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.left-section {
    background-color: #00c853;
    color: #ffffff;
    padding: 40px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.left-section .logo {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 20px;
}

.left-section h1 {
    font-size: 28px;
    margin-bottom: 10px;
}

.left-section p {
    font-size: 16px;
    margin-bottom: 20px;
}

.left-section ul {
    list-style: none;
    font-size: 14px;
}

.left-section ul li {
    margin-bottom: 10px;
}

.right-section {
    padding: 40px;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.right-section .logo {
    font-size: 40px;
    font-weight: bold;
    color: #00c853;
    margin-bottom: 20px;
}

.right-section h2 {
    font-size: 22px;
    margin-bottom: 20px;
}

.right-section form {
    width: 100%;
    max-width: 300px;
    display: flex;
    flex-direction: column;
}

.right-section input[type="email"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.right-section button {
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    color: #ffffff;
    font-weight: bold;
    cursor: pointer;
}

.right-section button[type="submit"] {
    background-color: #00c853;
}

.right-section button[type="button"] {
    background-color: #ffffff;
    color: #00c853;
    border: 2px solid #00c853;
}

.right-section .options {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    color: #555;
    margin-bottom: 15px;
}

.right-section .or {
    text-align: center;
    margin: 10px 0;
    color: #888;
}

.social-login {
    display: flex;
    justify-content: space-around;
}

.social {
    flex: 1;
    padding: 10px;
    border: none;
    font-weight: bold;
    color: #ffffff;
    border-radius: 5px;
    margin: 0 5px;
    cursor: pointer;
}


.google {
    background-color: #db4437;
}

/* General styles for dropdowns */
.dropdown {
  position: relative;
  display: inline-block;
  margin-right: -40px;
}

/* Link style */
.dropdown-toggle {
  text-decoration: none;
  padding: 10px 20px;
  background-color: #ffff;
  color: white;
  font-size: 16px;
  border-radius: 5px;
  display: block;
}

/* Dropdown menu hidden by default */
.dropdown-menu {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Dropdown links */
.dropdown-menu a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-menu a:hover {
  background-color: #ddd;
}

/* Show dropdown on hover */
.dropdown:hover .dropdown-menu {
  display: block;
}
/* Modal Styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgba(0,0,0,0.4); /* Black with opacity */
}

.modal-content {
   background-color: #F2FAE9;
    margin: 6% auto;
    padding: 70px;
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

.close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 25px;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}



    </style>
</head>
<body>
    <div class="container">
        <header class="bir-header">
            <div class="header-top">
                <img src="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" alt="Datu Paglas Logo" class="logo">
                <div class="header-title"><center>
                    <h1>REPUBLIC OF THE PHILIPPINES</h1>
                    <h2>Datu Paglas, Maguindanao Del Sur</h2>
                    <p>Bawal ang Tamad</p></center>
                </div>
                <div class="contact-info">
                    <span>📞 0928-728-0680</span><br>
                    <span>✉️ hamidaadzal01111985@gmail.com</span>
                </div>
            </div>
            <nav class="navbar">
                <a href="#">HOME</a>
                <!-- ABOUT US Dropdown -->
<div class="dropdown">
    <a href="#" class="dropdown-toggle" id="aboutUsDropdown">ABOUT US</a>
    <div class="dropdown-menu">
        <a href="#" class="modal-link" data-target="#aboutUsModal">History</a>
        <a href="#" class="modal-link" data-target="#ourMissionModal">Mission and Vision</a>
        <a href="#" class="modal-link" data-target="#teamModal">Officials</a>
    </div>
</div>

<!-- Modal for Our History -->
<div id="aboutUsModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>History</h2><br>
        <p>Datu Paglas was created out of 7 northern barangays of the municipality of Columbio on November 22, 1973, by Presidential Decree No. 340.<br>
        The Municipality derived it's present name from a widely-respected prominent local leader Hadji Datu Ibrahim Paglas Sr., as an attribute and in honor of his good deeds and services to community and fellowmen. He was the deputy Governor at large assigned in the Municipality District Buluan</p>
    </div>
</div>

<!-- Modal for Our Mission -->
<div id="ourMissionModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Our Mission</h2>
        <p>Details about the mission...</p>
    </div>
</div>

<!-- Modal for Team -->
<div id="teamModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Officials</h2><br>
        <p><li><strong>Abubakar P. Paglas</strong> - Mayor</li>
            <li><strong>Ibrahim P. Paglas IV</strong> - Vice Mayor</li>
            <li><strong>Mohamad P. Paglas </strong> - Representative</li><br></p>
        <p><strong>Council</strong><br>
            <li><strong>Mussaiddi-in P. Dimapalao</strong></li>
            <li><strong>Maaruf M. Nando</strong></li>
            <li><strong>Anuar M. Pompong</strong></li>
            <li><strong>Samir N. Alim</strong></li>
            <li><strong>Armando S. Tocao</strong></li>
            <li><strong>Eskak B. Makungay</strong></li>
            <li><strong>Lukman T. Bukol</strong></li>
            <li><strong>Saidali O. Akmad</strong></li></p>
    </div>
</div>

<!-- TAX INFORMATION & REGULATIONS Dropdown -->
<div class="dropdown">
    <a href="#" class="dropdown-toggle" id="taxInfoDropdown">TAX INFORMATION & REGULATIONS</a>
    <div class="dropdown-menu">
        <a href="#" class="modal-link" data-target="#taxPoliciesModal">Tax Policies</a>
    </div>
</div>

<!-- Modal for Tax Policies -->
<div id="taxPoliciesModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Tax Policies</h2><br>
        <p><strong>REPUBLIC ACT 7160</strong><br>
            <li>In 1991, Republic Act 7160 also known as the Local Government Code, a province or city or municipality within metropolitan area may levy a real property tax in the philippines on such real property as land, building, machinery and other improvement.</li>
        </p>
        <p><strong>Under Section 233 of the Local Government Code of 1991</strong>
            <li><strong>1%</strong> - for Province; and
                <li><strong>2%</strong> - for city or municipality within Metro Manila area.</p><br>
        <p><strong>SCHEDULE</strong><br>
            <li>March 31 - first installment</li>
            <li>June 30 - second installment</li>
            <li>September 30 - third installment</li>
            <li>December 31 - fourth installment</li></p><br>
        <p><strong>EXEMPTION</strong><br>
            <li>Religious, charitable or educational property</li>
            <li>Registered cooperations under Republic Act No. 6938</li>
            <li>Machinery and equipment used for pollution control and environment protections</li></p>
    </div>
</div>

<!-- CONTACT US Dropdown -->
<div class="dropdown">
    <a href="#" class="dropdown-toggle" id="contactUsDropdown">CONTACT US</a>
    <div class="dropdown-menu">
        <a href="#" class="modal-link" data-target="#faqModal">FAQ</a>
        <a href="#" class="modal-link" data-target="#contactUsModal">Contact Us</a>
        <a href="#" class="modal-link" data-target="#findUsModal">Find Us</a>
    </div>
</div>

<!-- Modal for FAQ -->
<div id="faqModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>FAQ</h2><br>
        <p><strong>1. What is Real Property Tax?</strong>
            <li> Levied by the local government on properties owned by individual. Tax is based on the assessed value of the properties</li><br>

            <strong>2. How do I pay my Real Property Tax?</strong>
            <li> You can pay your real property tax at the Datu Paglas Municipality - Treasurer's Office.</li><br>
            <strong>3. What is the deadline for paying Real Property Tax?</strong>
            <li> The deadline for payment is December 31st of each year. Late payment will incur penalties.</li><br>
            <strong>4. Can I apply for a tax exemption?</strong>
            <li> Yes! May qualify for tax exemption, such as senior citizens and person with disabilities. You must submit the supporting documents such as an ID</li><br>
            <strong>5. How do I chech if I have outstanding property tax?</strong>
            <li> You can check your tax records by visiting Datu Paglas Treasurer's Office</li><br>
            <strong>6. Are these penalties for late payment of Real Property Tax?</strong>
            <li> Yes! penalties will apply if you fail to pay on time. The penalty rate is 2% for every month of delay, and can reach a maximum of 72% or 3 years. Please make sure to pay on time to avoid additional charges.</li><br></p>
    </div>
</div>

<!-- Modal for Contact Us -->
<div id="contactUsModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Contact Us</h2><br>
        <p>We're here to help! if you have any questions or need assisstance with your Real Property Tax, please don't hesitate to get in touch with us. Our team will respond to your inquiry as soon as possible.<br>
         you can contact us to the following:</p><br>
        <p><strong>Email</strong><br>
            When emailing us, please include the following details to help us assist you more efficiently:
            <li>Fullname</li>
            <li>Taxpayer Indentification Number (TIN) or Property Number</li>
            <li>Description of Inquiry or concerns.</li>
            <li>send to our Email Address: <a href="mailto:datupaglas@gmail.com">datupaglas@gmail.com</a></li></p><br>
        <p><strong>Phone</strong><br>
        Call us at 0928-728-0680. We're available at Monday - Thursday, 7:00 am - 5:00pm and Friday at 7:00-10:00 in the morning and 1:00-3:00 at the afternoon.</p>
    </div>
</div>

<!-- Modal for Find Us -->
<div id="findUsModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Find Us</h2><br>
        <p>We're localted at the municipality of Datu Paglas, and our office is ready to serve you! If you need in-person assisstance with your real property tax inquire, here's where you can find us: </p><br>
        <p><strong>Datu Paglas Treasurer's Office or Assessor's Office</strong><br>
        <li>Address:<strong> Poblacion, Datu Paglas. Maguindanao Del Sur</strong></li><br>
        <strong>Office Hours:</strong>
        <li> Monday to Thursday: 7:00 am - 5:00 pm </li>
        <li>Friday: 7:00 am - 10:00 and 1:00 pm - 3:00 pm</li></p>
    </div>
</div>

            </nav>
        </header>

        <div class="left-section">
            <div class="logo">
                <img src="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" alt="Datu Paglas Logo" width="50" height="50">
            </div>
            <h1>Welcome back, Taxpayer!</h1>
            <ul>
                <li>We're here to help make managing your taxes easy and and efficient.
                Please log-in to access your personal account, view your taxes details, and stay up
                to date with the latest update.</li>
            </ul>
            <p>Let's get started</p>
        </div>
        <div class="right-section">
            <div class="logo">
                <img src="C:\xampp\htdocs\datupaglas\uploads\Seal_of_Datu_Paglas.png" alt="Datu Paglas Logo" width="50" height="50">
            </div>
            <h2>Sign in</h2>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="Email address" required>
                <button type="submit">Sign In</button>
                <div class="or">or</div>
                <button type="button" class="social google">Continue with Google</button>
                <div class="options">
                    <label><input type="checkbox"> Stay signed in</label>
                    <a href="#">Forgotten email?</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get all modal links
var modalLinks = document.querySelectorAll('.modal-link');

// Get all modals
var modals = document.querySelectorAll('.modal');

// Get all close buttons
var closeBtns = document.querySelectorAll('.close');

// When a modal link is clicked, show the corresponding modal
modalLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
        var targetModal = document.querySelector(this.getAttribute('data-target'));
        targetModal.style.display = 'block';
    });
});

// When the user clicks on <span> (x), close the modal
closeBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
        this.closest('.modal').style.display = 'none';
    });
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    modals.forEach(function(modal) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
};
</script>
</body>

</html>
