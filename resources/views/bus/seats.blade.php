@extends('layouts/bus')
@section('title', 'Seats' )
@section('content')

<style>
.seatSelection {
  text-align: center;
  padding: 5px;
  margin: 15px;
}
.seatsReceipt {
  text-align: center;
}
.seatNumber {
  display: inline;
  padding: 10px;
  background-color: #5c86eb;
  color: #FFF;
  border-radius: 5px;
  cursor: default;
  height: 25px;
  width: 25px;
  line-height: 25px;
  text-align: center;
}
.seatRow {
  padding: 10px;
}
.seatSelected {
  background-color: lightgreen;
  color: black;
}
.seatUnavailable {
  background-color: gray;
}
.seatRowNumber {
  clear: none;
  display: inline;
}
.hidden {
  display: none;
}
.seatsAmount {
  max-width: 2em;
}
.seatsChart{
  padding-top: 20px;
}

#no {
    background-color: #7F7F7F;
    width: 0.2px;
    height: 0.2px;
    padding: 10px;
    border: solid 1px;
}

#yes {
    background-color: #6E69EF;
    width: 0.2px;
    height: 0.2px;
    padding: 10px;
    border: solid 1px;
}
p{
  padding-left: 20px;
}

</style>
<div class="section section-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default" data-time-period="AM" data-operator-id="10">
					<div class="panel-heading text-my">
						Please select  (  ) Seats.
					</div>
					<div class="panel-body">
						<div class="row" >
							<div class="seatSelection col-lg-12">
                        <!-- <p class="seatSection">
                         Your first
                            <span class="freeSeats">2</span> seats selected will be Free.<br /> You can add more seats and proceed to check out.
                        </p> -->
                        <div id="no"><p>Unavailabe</p></div><br>
                        
                        <div id="yes"><p>Available</p></div>
                        
                        <div class="seatsChart col-lg-6">
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 1
                                </div>
                                <div id="1_1" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">1</div>
                                <div id="1_2" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
                                <div id="1_3" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
                                <div id="1_4" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">4</div>
                                <div id="1_5" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
                                <div id="1_6" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
                                <div id="1_7" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
                                <div id="1_8" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>


                            </div>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 2
                                </div>
                                <div id="2_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
                                <div id="2_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
                                <div id="2_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
                                <div id="2_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
                                <div id="2_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
                                <div id="2_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
                                <div id="2_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
                                <div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>

                            </div>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 3
                                </div>
                                <div id="3_1" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">1</div>
                                <div id="3_2" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
                                <div id="3_3" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">3</div>
                                <div id="3_4" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
                                <div id="3_5" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">5</div>
                                <div id="3_6" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
                                <div id="3_7" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
                                <div id="3_8" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>

                            </div>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 4
                                </div>
                                <div id="4_1" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
                                <div id="4_2" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
                                <div id="4_3" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
                                <div id="4_4" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
                                <div id="4_5" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
                                <div id="4_6" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable ">6</div>
                                <div id="4_7" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
                                <div id="4_8" role="checkbox" value="30" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>

                            </div>
                            <div class="seatRow">
                                <div class="seatRowNumber">
                                    Row 5
                                </div>
                                <div id="5_1" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">1</div>
                                <div id="5_2" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
                                <div id="5_3" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
                                <div id="5_4" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">4</div>
                                <div id="5_5" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
                                <div id="5_6" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable ">6</div>
                                <div id="5_7" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
                                <div id="5_8" role="checkbox" value="28" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>
                            </div>
                        </div>
                        <div class="seatsReceipt col-lg-2">
                            <p><strong>Selected Seats: <span class="seatsAmount" />0 </span></strong> <button id="btnClear" class="btn">Clear</button></p>
                            <ul id="seatsList" class="nav nav-stacked"></ul>

                        </div>
                    </div>

                    <div class="checkout col-lg-offset-6">
                        <span>Subtotal: CA$</span><span class="txtSubTotal">0.00</span><br /><button id="btnCheckout" name="btnCheckout" class="btn btn-primary"> Check out </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5">

       <div class="panel panel-default">
          <div class="panel-heading text-my">
             Trip Information
         </div>
         <div class="panel-body">
             <table class="table table-striped">
                <tbody>
                   <tr>
                      <td class=" col-md-4 text-my">
                         Operator
                     </td>
                     <td class=" col-md-8 text-my">
                         Shwe Sin Set Kyar
                     </td>
                 </tr>

                 <tr>
                  <td class="col-md-4 text-my">
                     Route
                 </td>
                 <td class="col-md-8 text-my">

                     Yangon - Monywa

                 </td>
             </tr>
             <tr>
              <td class="text-my">
                 Departure Time
             </td>
             <td>
                 Mar 18, 08:00 AM
             </td>
         </tr>
         <tr>
          <td class="text-my">
             Arrival Time
         </td>
         <td>
             Mar 18, 08:00 PM
         </td>
     </tr>



     <tr>
      <td class="text-my">
         Subtotal
     </td>
     <td>
         54,000 MMK
     </td>
 </tr>

</tbody>
</table>

<hr>

<h3 class="text-my text-muted text-center">Please select (  ) Seats.</h3>
<div class="row" id="search">

    <div class="col-md-12 text-center">
       <a href="{{ route('guest.login') }}" class="myButton btn btn-success">Continue Info</a>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
		     // Clicking any seat
             $(".seatNumber").click(
                function () {
                    if (!$(this).hasClass("seatUnavailable")){
                    // If selected, unselect it
                    if ($(this).hasClass("seatSelected")) {
                        var thisId = $(this).attr('id');
                        var price = $('#seatsList .' + thisId).val();
                        $(this).removeClass("seatSelected");
                        $('#seatsList .' + thisId).remove();
                        // Calling functions to update checkout total and seat counter.
                        removeFromCheckout(price);
                        refreshCounter();
                    }
                    else {
                        // else, select it
                        // getting values from Seat
                        var thisId = $(this).attr('id');
                        var id = thisId.split("_");
                        var price = $(this).attr('value');
                        var seatDetails = "Row: " + id[0] + " Seat:" + id[1] + " Price:CA$:" + price;


                        var freeSeats = parseInt($('.freeSeats').first().text());
                        var selectedSeats = parseInt($(".seatSelected").length);

                        // If you have free seats available the price of this one will be 0.
                        if (selectedSeats < freeSeats) {
                            price = 0;
                        }

                        // Adding this seat to the list
                        var seatDetails = "Row: " + id[0] + " Seat:" + id[1] + " Price:CA$:" + price;
                        $("#seatsList").append('<li value=' + price + ' class=' + thisId + '>' + seatDetails + "  " + "<button id='remove:" + thisId + "'+ class='btn btn-default btn-sm removeSeat' value='" + price + "'><strong>X</strong></button></li>");
                        $(this).addClass("seatSelected");

                        addToCheckout(price);
                        refreshCounter();
                    }
                }
            }
            );
        // Clicking any of the dynamically-generated X buttons on the list
        $(document).on('click', ".removeSeat", function () {
            // Getting the Id of the Seat
            var id = $(this).attr('id').split(":");
            var price = $(this).attr('value')
            $('#seatsList .' + id[1]).remove();
            $("#" + id[1] + ".seatNumber").removeClass("seatSelected");
            removeFromCheckout(price);
            refreshCounter();
        }
        );
        // Show tooltip on hover.
        $(".seatNumber").hover(
            function () {
                if (!$(this).hasClass("seatUnavailable")) {
                    var id = $(this).attr('id');
                    var id = id.split("_");
                    var price = $(this).attr('value');
                    var tooltip = "Row: " + id[0] + " Seat:" + id[1] + " Price:CA$:" + price;

                    $(this).prop('title', tooltip);
                } else
                {
                    $(this).prop('title', "Seat unavailable");
                }
            }
            );
        // Function to refresh seats counter
        function refreshCounter() {
            $(".seatsAmount").text($(".seatSelected").length); 
        }
        // Add seat to checkout
        function addToCheckout(thisSeat) {
            var seatPrice = parseInt(thisSeat);
            var num = parseInt($('.txtSubTotal').text());
            num += seatPrice;
            num = num.toString();
            $('.txtSubTotal').text(num);
        }
        // Remove seat from checkout
        function removeFromCheckout(thisSeat) {
            var seatPrice = parseInt(thisSeat);
            var num = parseInt($('.txtSubTotal').text());
            num -= seatPrice;
            num = num.toString();
            $('.txtSubTotal').text(num);
        }

        // Clear seats.
        $("#btnClear").click(
            function () {
                $('.txtSubTotal').text(0);
                $(".seatsAmount").text(0);
                $('.seatSelected').removeClass('seatSelected');
                $('#seatsList li').remove();
            }
            );
        </script>
        @endsection