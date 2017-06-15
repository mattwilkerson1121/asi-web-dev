var devEnvironment = 'http://as400d:10080/development/nalhash/RestService/ordertrack/067386711287945';
var customerData;
//var production = 'https://asirest.vcfcorp.com/ordertrack/'+orderTrackingNumber
// order tracking input + hide/show 
$(document).ready(function(){
  $('.alert').css('display','none');
  $('#appBody').remove();
  if(document.domain === "valuecityfurniture.com") {
    var domain = "Value City Furniture";
  } else {
    var domain = "American Signature Furniture";
  }
  //tooltip display
  $('[data-toggle="tooltip"]').tooltip()
  
  $('#orderTrackingNumberSubmit').click(function(){ 
    var orderTrackingNumber = $('#orderTrackingInput').val(); 

    $.ajax({ 
      type: 'GET', 
      url: devEnvironment, 
      crossDomain: true, 
      success: function(data) { 
      
        // Store the Success Object in a variable 
        console.log(data);

      //remove login
        $("#appLoginOverlay").hide().remove();
        $("#appLogin").hide(function(){
          $("#appBody").fadeIn();
            $(this).remove();
          });  
        
        var source = $('#orderTracker').html();
        
        // package and pure promise 
        for (i=0; i<data.orderTracking.customer.order.orderItems.length; i++) {
          var itemName = data.orderTracking.customer.order.orderItems[i].itemName;
          var cleanName = itemName.substring(itemName.indexOf('- ') + 1);
          data.orderTracking.customer.order.orderItems[i].itemName = cleanName;
          var imageName = data.orderTracking.customer.order.orderItems[i].imageData.imageName;
        }
              
        // format date for calendar
        var orderCalendar = data.orderTracking.customer.order.orderServiceDate;
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var orderReady = Date.parse(data.orderTracking.customer.order.orderServiceDate);
          
        if (orderCalendar !== "Date Not Scheduled") {
          var orderDayOfWeek = days[orderReady.getDay()];
          var orderMonth = months[orderReady.getMonth()];
          var orderDayDate = orderReady.getDate();
        }

        var sendAlertsVia = data.orderTracking.customer.order.alerts.sendAlertsVia;
        var contact = data.orderTracking.customer.order.alerts.contact;
        customerData = data.orderTracking.customer;

        // Set the dropdown based on data
        if (sendAlertsVia == "T") {
          $("option[value='T']").attr('selected="selected"');
          $("input[type='tel']").val(contact);
        }
        else if (sendAlertsVia == "E") {
          $("option[value='E']").attr('selected="selected"');
          $("input[type='email']").val(contact);     
        }
        else if (sendAlertsVia == "P") {
          $("option[value='P']").attr('selected="selected"');
          $("input[type='tel']").val(contact);               
        }
        // swap form input
        $("option[value='T']").click(function(){
          $("option[value='T']").attr('selected="selected"');
          $("option[value='E']").attr('selected="selected"', false);
          $("option[value='P']").attr('selected="selected"', false);               
          $("input[type='tel']").val("");
        }); 
        $("input[value='E']").click(function(){
          $("option[value='T']").attr('selected="selected"', false);
          $("option[value='E']").attr('selected="selected"');
          $("option[value='P']").attr('selected="selected"', false); 
          $("input[type='email']").val("");
        }); 
        $("option[value='P']").click(function(){
          $("option[value='T']").attr('selected="selected"', false);
          $("option[value='E']").attr('selected="selected"', false);
          $("option[value='P']").attr('selected="selected"');  
          $("input[type='tel']").val("");
        });  

        // clear input text when user clicks into input:text field
        $("input:text").focus(function (){
          $(this).val('');
        });

        // Compile the template data into a function
        var template = Handlebars.compile(source);
        var context = data;
        var html = template(context);
        // insert HTML into the page
        $(document.body).append(html);
        //check domain and insert appropriate name 
          $('#domain').text(domain);
          if (orderCalendar !== "Date Not Scheduled") {
          //insert formatted date into calendar
            $('#orderDayOfWeek').text(orderDayOfWeek);
            $('#orderDayDate').text(orderDayDate);
            $('#orderMonth').text(orderMonth);
          } else {
            $(".orderCalendar").hide();
            $("#orderServiceDateCalendar").hide();
            $("#js-hideNoDate").hide();
          }
          if (imageName === "No Image Found") {
            $(".itemImage").hide();
          }
          // append header text before each set of package items
            //$(".orderItemsDisplayPackage:eq(0)").addClass('firstPackage');
            //$(".firstPackage").each(function() {
              //$(this).before("<hr /><h2 class='orderPackageHeading'>Your Package Contains <span class='material-icons zmdi zmdi-chevron-right pmd-md'></span></h2>");
            //});
          // hide and show package details
          $(".js-displayPackage").hide();
              
          // $(".orderPackageHeading").on("click", function(e) {
            // e.preventDefault();
            //$(".js-displayPackage").fadeToggle();
          //});
          //IF AJAX call returns an Error 
          //error: function(data) { console.log(data.responseText); $(".alert").css('display','block'); $("#errorResponseText").html(data.responseText).text(); }
        }
    });
  });
});

// manage notifications

$("body").on("click", "#js-showManageNotifications", function(e) {
    e.preventDefault();

    if($("#sendAlertsVia").val() === "E"){
      $("#alertsContactEmail").show();
      $("#alertsContactPhone").hide();
    } else {
      $("#alertsContactPhone").show();
      $("#alertsContactEmail").hide();
    }

    $(".js-manageNotifications").fadeToggle();
    $(".asi-app-navbar").css("margin-bottom","10px");
});
$("body").on("click", "#alertsCancel", function(e){
  e.preventDefault();
  $(".js-manageNotifications").fadeOut();
});
$("body").on("submit", "#manageNotifications", function(e){
  e.preventDefault();

  var postNotificationData = {
      q: "notification",
      minutesAhead: $("#sendAlertsPrior").val(), 
      custNumber: customerData.customerNumber, 
      deliveryStoreNumber: customerData.order.orderStoreNumber,
      invoiceNumber: customerData.order.orderInvoiceNumber
  };
  
  switch($("#sendAlertsVia").val()) {
    case "E":
      postNotificationData.contactMethod = "E";
      postNotificationData.emailAddress = $("#alertsContactEmail").val();
      break;
    case "T":
      postNotificationData.contactMethod = "T";
      postNotificationData.phoneNumberMobile = $("#alertsContactPhone").val(); 
      break;
    case "P":
      postNotificationData.contactMethod = "P";
      postNotificationData.phoneNumberHome = $("#alertsContactPhone").val();          
      break;
  }
  console.log(postNotificationData);

  $.ajax({
    type: "POST",
    crossDomain: true,
    url: devEnvironment,
    data: postNotificationData,
    success: function(response){
      //$(".js-manageNotifications").hide().after("<h2>Your notification preferences have been updated!</h2>");
      $(".js-manageNotifications").hide();
      alert("Your notification preferences have been updated.")
    },
    error: function(response){
      // TODO: handle errors
    }
  });
});

// delivery instructions
$("body").on("click", "#js-showUpdateDelivery", function(e) {
    e.preventDefault();

  $("#js-updateDelivery").fadeToggle();
  $("#js-hideOnUpdateDelivery").fadeOut();
});

$("body").on("click", "#updateDeliveryCancel", function(e) {
  e.preventDefault();
  $("#js-updateDelivery").fadeOut();
  $("#js-hideOnUpdateDelivery").fadeToggle();
});

$("body").on("submit", "#deliveryInstructions", function(e){
  e.preventDefault();
  
  var postInstructionsData = {
      q: "instructions",
      gated: $("#gated").val(), 
      floor: $("#floor").val(),
      elevator: $("#elevator").val(),  
      inst: $("#special_instructions").val(), 
      custNumber: customerData.customerNumber, 
      deliveryStoreNumber: customerData.order.orderStoreNumber,
      invoiceNumber: customerData.order.orderInvoiceNumber
  }; 
  
  console.log(postInstructionsData);

  $.ajax({
    type: "POST",
    crossDomain: true,
    url: devEnvironment,
    data: postInstructionsData,
    success: function(response){
     // $(".js-updateDelivery").hide().after("<h2>Your delivery instructions have been saved!</h2>");
      $("#js-updateDelivery").hide();
      $("#js-hideOnUpdateDelivery").fadeToggle();
      alert("Your delivery instructions have been updated.");
      },
    error: function(response){
      // TODO: handle errors
    }
  });
});

$("body").on("change", "#sendAlertsVia", function(e){
  if ($(this).val() === "E") {
    $("#alertsContactEmail").show();
    $("#alertsContactPhone").hide();
  } else {
    $("#alertsContactEmail").hide();
    $("#alertsContactPhone").show();
  }
});




//handlebars helpers
Handlebars.registerHelper('toLowerCase', function(str) {
  return str.toLowerCase();
});
Handlebars.registerHelper('formatDate', function (date, format){
  return moment(date).format(format);
});

/*Handlebars.registerHelper('toCapitalize', function(str) {
      return str.toCapitalize();
    });*/
//if more than 3 skus, show view more accordian and populate with remaining order items if "orderTracking.customer.orderItems.sku" == > 3 showMoreItems
