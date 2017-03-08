<!DOCTYPE html>
<html>
<head>
  <title>Order Tracking</title>
  <meta name="description" content="Some meta description">
    <script src="https://code.jquery.com/jquery-1.12.4.js" 
            integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
            crossorigin="anonymous"></script>
    <!-- Material Design Lite Includes-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>  
    <style type="text/css">
        .mdl-layout {
            align-items: center;
            /*justify-content: center;*/
        }
        .mdl-layout__content {
            padding: 24px;
            flex: none;
        }     
        /* Styles for the MDL Card */
        .demo-card-wide.mdl-card {
          width: 512px;
        }
        .demo-card-wide > .mdl-card__title {
          color: #fff;
          height: 250px;
        }
        .demo-card-wide > .mdl-card__menu {
          color: #fff;
        }      
        #form-card {
            width: 512px;
        }  
    </style>
</head>
<body>

<!-- Login Form Example -->
<div class="mdl-layout mdl-js-layout mdl-color-grey-100">
    <main class="mdl-layout__content">
        <div id="form-card" class="mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                <h2 class="mdl-card__title-text">Track My Order</h2>
            </div>
        <div class="mdl-card__supporting-text">
                <form>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="trackingNumber"/>
                        <label class="mdl-textfield__label" for="username">Tracking Number</label>
                        <span class="mdl-textfield__error">Input is not numeric. Please retry.</span>
                    </div>
                </form>
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <button id="orderTrackingSubmit" class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect">Submit</button>
            </div>
        </div>
    </main>
    <!-- Ajax results from code below -->
    <div id="results"></div>

<script>
  // onSubmit of form extract the input field value and pass to ajax
  $('button#orderTrackingSubmit').click(function(){
    var orderTrackingNumber = $('#trackingNumber').val();   

    // Pass in tracking number and make ajax call to result results
    $.ajax({
      type: 'GET',
      url: "https://asirest.vcfcorp.com/ordertrack/"+orderTrackingNumber+"/",
      crossDomain: true,
      success: function(data) {
        // Store the success response object 'orderTracking'
        var itemsObj = data;

        // Store the Customer response object
        var customer = data.orderTracking.customer;

        // Customer Data
        var customerNumber = customer.customerNumber;
        var customerFirstName = customer.firstName;
        var customerLastName = customer.lastName;
        var customerEmail = customer.customerEmail.toLowerCase();
        var customerPhoneNumber = customer.customerPhoneNumber.replace(/(\d{3})(\d{3})(\d{4})/, '1-($1)-$2-$3');
        var trackingNumber = customer.trackingNumber;
        var customerAlerts = customer.alerts;
        var invoiceTotal = customer.invoiceTotal;
        var orderDate = customer.orderDate;
        var orderType = customer.orderType;

        // Delivery / Pickup Data
        var deliveryDate = customer.deliveryDate; 
        var deliveryTime = customer.deliveryTime;
        var deliverySpecialInstructions = customer.deliveryInstructions.special_instructions;
        var deliveryGated = customer.deliveryInstructions.gated;
        var deliveryFloor = customer.deliveryInstructions.floor;
        var deliveryElevator = customer.deliveryInstructions.elevator;
        var deliveryDriver = customer.driver;
        var deliveryName = customer.deliveryName;
        var deliveryAddress1 = customer.deliveryAddress1;
        var deliveryAddress2 = customer.deliveryAddress2;
        var deliveryCity = customer.deliverCity;
        var deliveryState = customer.deliveryState;
        var deliveryZip = customer.deliveryZip;
        var sellingStore = customer.sellingStore;
        var deliveryStore = customer.deliveryStore;
        var deliveryStoreNumber = customer.deliveryStoreNumber;

        $("#results").append("<div class='demo-card-wide mdl-card mdl-shadow--2dp'>"+
                                    "<div class='mdl-card__title'>"+
                                        "<h3 class='mdl-card__title-text mdl-color-text--black'>"+customerFirstName+" "+customerLastName+"</h3>"+
                                    "</div>"+
                                    "<div class='mdl-card__supporting-text'>Customer Number: "+customerNumber+
                                    "<br/>Email: "+customerEmail+
                                    "<br/>Phone: "+customerPhoneNumber+
                                    "<br/>Tracking Number: "+trackingNumber+
                                    "<br/>Customer Alerts: "+customerAlerts+
                                    "<br/>Invoice Total: "+invoiceTotal+                                                                      
                                    "</div>"+
                                    "<div class='mdl-card__actions mdl-card--border'>"+
                                        "<a href='https://www.valuecityfurniture.com/account/sign-in' class='mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect'>Sign In</a>"+
                                    "</div>"+
                                    "<div class='mdl-card__menu'>"+
                                    "</div>"+
                                "</div><br/>");

        $("#results").append("<div class='demo-card-wide mdl-card mdl-shadow--2dp'>"+
                                    "<div class='mdl-card__title'>"+
                                        "<h3 class='mdl-card__title-text mdl-color-text--black'>Delivery Date: "+deliveryDate+"</h3>"+
                                    "</div>"+
                                    "<div class='mdl-card__supporting-text'>Delivery Time: "+deliveryTime+
                                    "<br/>Order Type: "+orderType+
                                    "<br/>Special Instructions: "+deliverySpecialInstructions+
                                    "<br/>Phone: "+customerPhoneNumber+
                                    "<br/>Tracking Number: "+trackingNumber+
                                    "<br/>Customer Alerts: "+customerAlerts+
                                    "<br/>Invoice Total: $"+invoiceTotal+
                                    "<br/>Order Date: "+orderDate+ 
                                    "<br/>Gated: "+deliveryGated+
                                    "<br/>Floor: "+deliveryFloor+
                                    "<br/>Elevator: "+deliveryElevator+
                                    "<br/>Delivery Driver: "+deliveryDriver+
                                    "<br/>Delivery Name: "+deliveryName+
                                    "<br/>Address 1: "+deliveryAddress1+
                                    "<br/>Address 2: "+deliveryAddress2+
                                    "<br/>City: "+deliveryCity+
                                    "<br/>State: "+deliveryState+
                                    "<br/>Zip: "+deliveryZip+
                                    "<br/>Selling Store: "+sellingStore+
                                    "<br/>Delivery Store: "+deliveryStore+
                                    "<br/>Delivery Store #: "+deliveryStoreNumber+
                                    "</div>"+
                                "</div><br/>");    

        // Store the orderItems response object
        var orderItems = data.orderTracking.customer.orderItems;    

        for(i = 0; i < orderItems.length; i++) {
          var sku = orderItems[i].sku;
          var itemName = orderItems[i].itemName.toLowerCase();
          var normalizedItemName = itemName.substr(0,1).toUpperCase()+itemName.substr(1);

          // Fix Pure Promise itemName
          if (itemName == "selling sku - pure promise"){
            var purePromiseName = "Pure Promise";
          }

          var quantity = orderItems[i].quantity;
          var status = orderItems[i].status;
          var itemPrice = orderItems[i].itemPrice;



          // logic to build image paths
          if (orderItems[i].imageData.imageName == "PurePromise_Email_Icon"){
            var imagePath = orderItems[i].imageData.URL+orderItems[i].imageData.imageName+"?hei=250&wid=250";

          }
          else {
            var imagePath = orderItems[i].imageData.URL+orderItems[i].imageData.imageName+"?fit=inside|250:250&composite-to=center,center|250:250&background-color=white";
          }
          
          if (orderItems[i].package != undefined) {

            var packageSku = orderItems[i].package.packageSku;
            var packageQty = orderItems[i].package.packageQty;    

            $("#results").append("<div class='demo-card-wide mdl-card mdl-shadow--2dp'>"+
                                    "<div class='mdl-card__title'>"+
                                        "<h3 class='mdl-card__title-text mdl-color-text--black'>"+normalizedItemName+"</h3>"+
                                        "<image src='"+imagePath+"'>"+
                                    "</div>"+
                                    "<div class='mdl-card__supporting-text'>SKU:"+sku+
                                    "<br/>QTY: "+quantity+
                                    "<br/>Status: "+status+
                                    "<br/>Package SKU: "+packageSku+
                                    "<br/>Package QTY: "+packageQty+
                                    "</div>"+
                                    "<div class='mdl-card__actions mdl-card--border'>"+
                                        "<a class='mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect'>See Product</a>"+
                                    "</div>"+
                                    "<div class='mdl-card__menu'>"+
                                        "<button class='mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-button--raised mdl-js-ripple-effect'>"+
                                            "<i class='material-icons'>3d_rotation</i>"+
                                        "</button>"+
                                    "</div>"+
                                "</div><br/>");
          }
          else if (sku == "1674005"){
            $("#results").append("<div class='demo-card-wide mdl-card mdl-shadow--2dp'>"+
                                    "<div class='mdl-card__title'>"+
                                        "<h3 class='mdl-card__title-text mdl-color-text--black'>"+purePromiseName+"</h3>"+
                                        "<image src='"+imagePath+"'>"+
                                    "</div>"+
                                    "<div class='mdl-card__supporting-text'>SKU:"+sku+
                                    "<br/>QTY: "+quantity+
                                    "</div>"+
                                    "<div class='mdl-card__actions mdl-card--border'>"+
                                        "<a class='mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect'>See Product</a>"+
                                    "</div>"+
                                    "<div class='mdl-card__menu'>"+
                                    "</div>"+
                                "</div><br/>");            

          }

          else {
            $("#results").append("<div class='demo-card-wide mdl-card mdl-shadow--2dp'>"+
                                    "<div class='mdl-card__title'>"+
                                        "<h3 class='mdl-card__title-text mdl-color-text--black'>"+normalizedItemName+"</h3>"+
                                        "<image src='"+imagePath+"'>"+
                                    "</div>"+
                                    "<div class='mdl-card__supporting-text'><strong>"+itemPrice+"</strong>"+
                                    "<br/>SKU:"+sku+
                                    "<br/>QTY: "+quantity+
                                    "<br/>Status: "+status+
                                    "</div>"+
                                    "<div class='mdl-card__actions mdl-card--border'>"+
                                        "<a class='mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect'>See Product</a>"+
                                    "</div>"+
                                    "<div class='mdl-card__menu'>"+
                                        "<button class='mdl-button mdl-button--icon mdl-button--colored mdl-js-button mdl-button--raised mdl-js-ripple-effect'>"+
                                            "<i class='material-icons'>3d_rotation</i>"+
                                        "</button>"+
                                    "</div>"+
                                "</div><br/>");

          }
      
        }             
      },
      // if AJAX call can't be made, log error
      error: function(data) {
          console.log(data.responseText);
      }
    });
  });
</script>
</body>
</html>