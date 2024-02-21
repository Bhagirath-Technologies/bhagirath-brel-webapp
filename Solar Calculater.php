<?php 
$pageTitle = 'SolarCalculater';
include 'header.php'?>

  <section class="flex-column d-block ">
    <div class="hero_img bg_img5">
      <h2 class="breadcrums_title ms-4">Solar Calculator</h2>
      <div class="d-flex align-items-center justify-content-center ms-4 mb breadcrumb-section">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb_icons"><i class="bi bi-chevron-right"></i></li>
            <li class="breadcrumb-item text-white" aria-current="page">SolarCalculator</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <section>
    <div class="icons-social">
      <ul class="list-icons">
        <li>
          <a href="Enquiry.php">
            <i class="fa-regular fa-circle-question"></i>
            <span>Enquiry</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-envelope-circle-check"></i>
            <span>www.brel.com</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-headset"></i>
            <span>Service Support</span>
          </a>
        </li>
        <li>
          <a href="Solar Calculater.php">
            <i class="fa-solid fa-calculator"></i>
            <span>Solar Calculator</span>
          </a>
        </li>
      </ul>
    </div>

  </section>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div style="
            border: 1px solid #8a8a8a;
            box-shadow: 0px 0px 5px #646464;
            padding: 20px;
            border-radius: 15px;
          ">
          <form id="conversionForm">
            <h4 class="text-center">Ready to Switch to Solar<br /> Calculate your requirement.</h4>
            <br />
            <div class="form-group" style="margin-bottom: 20px">
              <input type="text" placeholder="Enter your name" class="form-control mx-auto" id="nameInput" required
                style="width: 100%" ; />
            </div>
            <div class="form-group" style="margin-bottom: 20px">
              <input type="tel" placeholder="Enter your phone number" class="form-control mx-auto" id="phoneInput"
                required style="width:100%" ; />
            </div>
            <div class="form-group" style="margin-bottom: 20px">
              <input type="email" placeholder="Enter your email address" class="form-control mx-auto" id="emailInput"
                required style="width: 100%" ; />
            </div>
            <div class="form-group" style="margin-bottom: 20px">
              <input type="text" placeholder="Enter your city" class="form-control mx-auto" id="cityInput" required
                style="width: 100%" ; />
            </div>
            <div class="form-group" style="margin-bottom: 20px">
              <input type="number" placeholder="Enter Monthly Bill Amount (INR):" class="form-control mx-auto"
                id="inrInput" required style="width: 100%" ; />
            </div>
            <div class="text-center">
              <button type="button" class="bg_background bg btn btn-lg " data-toggle="modal" data-target="#resultModal">
                Calculate Now
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="resultModalLabel">Your Requirement:</h5>
        </div>
        <div class="modal-body">
          <p id="resultText"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>


  <?php include 'footer.php'?>
 
  <script>
    $(document).ready(function () {
      function billToKW(inr) {
        return inr * 0.0008928571428571428;
      }

      $("#conversionForm button").on("click", function () {
        var name = $("#nameInput").val();
        var phone = $("#phoneInput").val();
        var email = $("#emailInput").val();
        var city = $("#cityInput").val();
        var inr = parseFloat($("#inrInput").val());

        if (!isNaN(inr)) {
          var kw = billToKW(inr);
          $("#resultText").html(
            "<strong>Hi, </strong> " +
            name +
            "<br><br><strong>Monthly Bill Amount* :</strong> &#8377; " +
            inr +
            "<br><br><strong>You require 'KW' capacity plant to get maximum saving :</strong> " +
            kw.toFixed(12)
          );
          $("#resultModal").modal("show");
        } else {
          $("#resultText").text(
            "Please enter a valid amount in Indian Rupees (INR)."
          );
          $("#resultModal").modal("show");
        }
      });

      $("#closeModal").click(function () {
        $("#resultModal").modal("hide");
      });
    });
     

  </script>
 