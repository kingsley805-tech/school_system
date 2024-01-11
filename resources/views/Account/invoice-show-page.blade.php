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
	
	<div id="page-wrap"class=''>
		

		<div id="head" style="height: 60px !important; background-color:rgb(237, 105, 57);border-radius:10px; width:1030px; text-align:center" class='text-white px-60 py-3  my-4 text-2xl font-bold'>{{$data->School}} </div>
		
		<div style="clear:both"></div>
		
		<div id="custome">
               
            <div id="customer-title" style="display: flex; flex-direction: column; justify-content: space-between;margin:30px 0 0 0">
				 <div>
                    <h5>{{$invoice->StudentName}}</h5>
                    <h5>{{$invoice->IndexNumber}}</h5>
                 </div>
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
            <td class="meta-head">Invoice #</td>
            <td>{{$invoice->InvoiceNumber}}</td>
        </tr>

        <tr>
            <td class="meta-head" colspan="1">Date</td>
            <td colspan="2">{{$invoice->DateIssued}}</td>
        </tr>

        <tr>
            <td class="meta-head" colspan="1">Date Due</td>
            <td colspan="2">{{$invoice->DateIssued}}</td>
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
					
					<th>Description</th>
					<th>Unit Cost</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
			</thead>
	
			<tbody id="SalesTable">
	            @foreach ($invoiceItems as $item)
			 <tr>
                 <td>{{$item->Description,}} </td>
                 <td>{{number_format($item->UnitCost, 2, '.', '')}} </td>
                 <td>{{$item->Price}} </td>
                 <td>{{number_format($item->Total, 2, '.', '')}} </td>
             </tr>

             @endforeach
			</tbody>
	
		
	
			<tr>
				<td colspan="1" class="blank"> </td>
				<td colspan="2" class="total-line">Subtotal</td>
				<td class="total-value"><div id="subtotal">{{number_format($invoice->TotalAmount, 2, '.', '')}}</div></td>
			</tr>
	
			<tr>
				<td colspan="1" class="blank"> </td>
				<td colspan="2" class="total-line">Discount</td>
				<td class="total-value">{{number_format($invoice->Discount, 2, '.', '')}}</td>
			</tr>
			
			<tr>
				<td colspan="1" class="blank"> </td>
				<td colspan="2" class="total-line balance">Amount Payable</td>
				<td class="total-value balance"><div class="due" id="Balance">{{number_format($invoice->PayableAmount, 2, '.', '')}}</div></td>
			</tr>

			<tr>
				<td colspan="1" class="blank"> </td>
				<td colspan="2" class="total-line">Amount Paid</td>
				<td class="total-value">{{number_format($invoice->AmountPaid, 2, '.', '')}}</td>
			</tr>

			<tr>
				<td colspan="1" class="blank"> </td>
				<td colspan="2" class="total-line">Balance Due</td>
				<td class="total-value">{{number_format($invoice->AmountPaid, 2, '.', '')}}</td>
			</tr>
		</table>
<div class="flex items-center justify-center mb-5">

		<button type="button"  style="background: rgb(14, 13, 13);border:black" class="btn btn-primary bg-gray-700 hover:bg-slate-600 p-2 hover:bg-red-600 w-64 text-white rounded-xl font-bold text-md mt-1 ml-1" id="ClassSelectBtn">Print</button>
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




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js'></script>


<script>
	function printTable() {
		const printContents = document.getElementById('page-wrap').innerHTML;
		const originalContents = document.body.innerHTML;
	
		document.body.innerHTML = printContents;
	
		window.print();
	
		document.body.innerHTML = originalContents;
		
	}
	
	document.getElementById('ClassSelectBtn').addEventListener('click', function() {
		
		printTable();
	});
	</script>
	
@endsection

	
</body>
</html>

