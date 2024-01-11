@extends('layouts.admin')
@section('content')
	<style>
		input{
			padding: 5px;
			width: 200px;
			margin: 2px;
			border: 2x solid black;
			border-radius: 10px;
		}

		button:hover{
			cursor: pointer;
		}
	</style>

</head>

<body>
<div class="flex m-auto flex-col ">
	<div class="flex items-center justify-center  pb-10">
		<label for="pet-select"class='text-gray-800 font-bold text-3xl'>Choose invoice type:</label>

		<select name="pets" id="fee-select"class='text-gray-600 border-3 bg-gray-300 rounded-md font-bold py-1 px-48'>
			<option value=""class='text-white font-bold'>--Please choose an option--</option>
			<option value="One_invoice_Fee_Structure">create fee invoice from fee structure</option>
			
		</select>
	</div>
	<div id="page-wrap"class=''>
		

		<span id="head" style="height: 30px; background-color:rgb(237, 105, 57);;border-radius:10px;width:200px" class='text-white px-80 py-8  my-10 text-3xl font-bold'>STUDENTS INVOICE CREATION</span>
		
		<div style="clear:both"></div>
		
		<div id="custome">
               
            <div id="customer-title" style="display: flex; flex-direction: column; justify-content: space-between;margin:30px 0 0 0">
				<input placeholder="Company Name" id="Receiver_Company_Name" value="Mineral Field Global Company"class='font-semi-bold'>
			</div>

           
    <style>
        input {
            padding: 5px;
            width: 200px;
            margin: 2px;
            border: 2px solid black;
            border-radius: 10px;
        }

        button:hover {
            cursor: pointer;
        }

        #meta {
            margin: 20px;
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #meta .meta-head {
            margin: 5px;
            font-weight: bold;
        }

        #meta td {
            padding: 10px;
            border: 1px solid rgb(237, 105, 57);
			border-radius:10px;
        }

        #meta textarea {
            width: 100%;
            box-sizing: border-box;
        }
    </style>

    <!-- Rest of your HTML content -->

    <table id="meta" style="margin: 5px 0 5px -1px ;border:1px solid rgb(237, 105, 57);border-radius:10px;">
        <tr class="space-x-20">
            <td class="meta-head">Receipt #</td>
            <td><textarea id="Receipt_Number">012</textarea></td>
        </tr>

        <tr>
            <td class="meta-head">Date</td>
            <td><textarea id="date-Ben">May 15, 2023</textarea></td>
        </tr>

        <tr>
            <td class="meta-head">Date Due</td>
            <td><textarea id="dateDue">May 15, 2023</textarea></td>
        </tr>

        <tr>
            <td class="meta-head">Discount(%)</td>
            <td><textarea id="Discount_Percent">0</textarea></td>
        </tr>
    </table>
		
		</div>
		
		<style>
			#items {
				margin: 20px;
				width: 100%;
				border:1px solid rgb(237, 105, 57);
				background-color: #ffffff;
				border-radius: 10px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}
	
			#items th,
			#items td {
				padding: 10px;
				border:1px solid rgb(237, 105, 57);
				text-align: left;
				border-radius: 10px;
			}
	
			#items th {
				background-color: #f2f2f2;
			}
	
			#items #hiderow {
				background-color: #f2f2f2;
			}
	
			#items #addrow {
				text-decoration: none;
				color: #007bff;
				cursor: pointer;
			}
	
			#items .blank {
				border: none;
			}
	
			#items .total-line {
				font-weight: bold;
			}
	
			#items .total-value {
				text-align: right;
			}
	
			#items textarea {
				width: 100%;
				box-sizing: border-box;
			}
		</style>
	
		<!-- Rest of your HTML content -->
	
		<table id="items"style="margin: 5px 0 5px -1px ;border:1px solid rgb(237, 105, 57);border-radius:10px;">
			<thead>
				<tr>
					<th colspan="1" class="font-bold"style='font-weight:800'>Item</th>
					<th>Description</th>
					<th>Unit Cost</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
			</thead>
	
			<tbody id="SalesTable">
	
			</tbody>
	
			<tr id="hiderow">
				<td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
			</tr>
	
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Subtotal</td>
				<td class="total-value"><div id="subtotal">0.00</div></td>
			</tr>
	
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line">Discount</td>
				<td class="total-value"><textarea id="Discount">0.00</textarea></td>
			</tr>
	
			<tr>
				<td colspan="2" class="blank"> </td>
				<td colspan="2" class="total-line balance">Balance Due</td>
				<td class="total-value balance"><div class="due" id="Balance">0.00</div></td>
			</tr>
		</table>
<div class="flex items-center justify-center mb-5">
		<button type="button"  style="background: rgb(14, 13, 13);border:black"  class="btn btn-primary bg-gray-700 hover:bg-slate-600 h-14 w-64 text-white mt-1 rounded-xl mr-1 font-bold" data-bs-toggle="modal" data-bs-target="#exampleModalFive">Select Student  Invoice</button>
		<div id="terms">
			<button id="SaveBtn" style="background: rgb(237, 105, 57)" class=" hover:bg-slate-600 p-3 w-64 text-white rounded-xl font-bold mx-32 mt-1.5">Save Items</button>
		 </div>
		<button type="button"  style="background: rgb(14, 13, 13);border:black" class="btn btn-primary bg-gray-700 hover:bg-slate-600 p-3 w-64 text-white rounded-xl font-bold text-sm mt-1 ml-1" id="ClassSelectBtn">Select Class bulk Invoice</button>
	</div>
	</div>



<div class="modal fade" id="exampleModalThree" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Classes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-hover" id="myTable">
		    <thead>
				<tr>
					<th>Select</th>
					<th>Class</th>
					<th>Section</th>
					<th>ID</th>
					
				</tr>
			</thead>

			<tbody id="MyfirstTabledivClass">
				
			</tbody>

		</table>
      </div>

	  <div class="modal-footer">
		   <button id="AddSelecteClass">Add Selected Class</button>
	  </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalClass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fee Structure</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-hover">
		    <thead>
				<tr>
					<th>#</th>
					<th>Fees</th>
					<th>Class</th>
					<th>Amount</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody id="MyfirstTabledivFee">
				
			</tbody>

		</table>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalFive" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content" style="width: 680px">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Select Students From Class</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>

		<div class="modal-body">
			<select name="pets" id="Class-Select">
				<option value="">Select Class</option>
				@foreach($classrooms as $value)
				<option value="{{$value->id}}"><strong>{{$value->name}} - {{$value->section}}</strong></option>
			   @endforeach
				
			</select>
		  <table class="table table-striped table-hover" id="myTablethree">
			  <thead>
				  <tr>
					  <th>Select</th>
					  <th>Student Name</th>
					  <th>Class</th>
					  <th>StudentNumber</th>
					  <th>ParentID</th>
				  </tr>
			  </thead>
  
			  <tbody id="MyfirstTabledivStudent">
				  
			  </tbody>
  
		  </table>
		</div>
  
		<div class="modal-footer">
			 <button id="StudentCreateInvoice">Create invoice for Student</button>
		</div>
	  </div>
	</div>
  </div>
</div>
<script type='text/javascript' src='{{ URL::asset('js/pos.js'); }}'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js'></script>


 <script>
 </script>
@endsection

	
</body>
</html>

