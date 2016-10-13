<head>
     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          
</head>
<body>
    <div class="row container">
        <div class="col s12 center">
            <h5>Miss Ellena's Ordering System</h5>
        </div>
        <div class="col s12 center">
        	<h6>{!! $dateFrom->toFormattedDateString().' - '.$dateTo->toFormattedDateString() !!}</h6>
        </div>
    </div>

    <div class="row container">
    	<div class="col s12">
    		<table class="bordered">
    			<thead>
    				<th data-field="date">Date</th>
    				<th data-field="item">Item Name</th>
    				<th data-field="price">Item Price</th>
    				<th data-field="quantity">Quantity</th>
    				<th data-field="total-price">Total Price</th>
    			</thead>
    			<tbody>
    				@foreach($list as $object)
						<tr>
							<td>{!! $object['dateTransaction'] !!}</td>
							<td>{!! $object['strItemName'] !!}</td>
							<td>P {!! number_format($object['deciPrice'], 2) !!}</td>
							<td>{!! $object['intQuantity'] !!}</td>
							<td>P {!! number_format($object['deciPrice'] * $object['intQuantity'], 2) !!}</td>
						</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

    <div class="row container">
    	<div class="col s10 center">
    		<table>
    			<tr>
    				<td>Total Quantity:</td>
    				<td>{!! number_format(sizeof($list)) !!}</td>
    			</tr>
    			<tr>
    				<td>Total Amount:</td>
    				<td>P {!! number_format(123112, 2) !!}</td>
    			</tr>
    		</table>
    	</div>
    </div>

</body>