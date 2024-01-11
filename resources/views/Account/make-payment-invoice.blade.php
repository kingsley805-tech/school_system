@extends('layouts.admin')
@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 stretch-card">
              <div class="card"style="box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                <div class="card-body"style="box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                  <h4 class="card-title">{{$invoice->Description}}</h4>
                  @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                  @endif
     
                  @if (Session::has('fail'))
                      <span style="background-color: rgb(221, 25, 64); color:black">{{Session::get('fail')}}</span>
                  @endif
                  <div class="table-responsive p-6 border"style="box-shadow: 0 0px 3px rgba(0, 0, 0, 0.1); border-radius:8px;">
                    <table id="example" class="table table-sm table-bordered "style='border-radius:8px;'>
                      <thead class="text-white bg-gray-800 ">
                        <tr>
                          <th class="font-bold "style='font-size:17px;font-weight:900 ;background-color:rgb(237, 105, 57);color:whte'>
                            Description
                          </th>
                          <th style='font-size:17px;font-weight:900; background-color:rgb(237, 105, 57);color:whte'class="font-bold ">
                             Quantity
                          </th>
                      
                          <th style='font-size:17px;font-weight:900;background-color:rgb(237, 105, 57);color:whte'class="font-bold ">
                            Unit Cost
                          </th>
                          <th style='font-size:17px;font-weight:900;background-color:rgb(237, 105, 57);color:whte'class="font-bold ">
                            Amount
                          </th>
                      
                          <th style='font-size:17px;font-weight:900;background-color:rgb(237, 105, 57);color:whte'class="font-bold ">
                            Status
                          </th>

                          <th style='font-size:17px;font-weight:900;background-color:rgb(237, 105, 57);color:whte'class="font-bold ">
                            Action
                          </th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($invoiceItems as $value)
                        <tr class="text-gray-700 border-none font-semi-bold
                         bg-slate-100">
                          <td>
                            {{$value->Description}}
                          </td>
                          <td>
                            {{$value->Price}}
                          </td>

						  <td>
							{{number_format($value->UnitCost, 2, '.', '')}}
							
                          </td>
                       
                          <td>
                            {{number_format($value->Total, 2, '.', '')}}
                          </td>

                          <td>{{$value->PaymentStatus}}</td>
                

                           <td style="background-color:rgb(237, 105, 57); color: white;border-radius:8px;">
              </div>
                            <a  href="/account/payment/type/oninvoiceitems/{{$invoice->InvoiceID}}/{{$invoice->InvoiceNumber}}/{{$value->id}}"><button class="btn btn-sm text-white" style='font-size:17px;font-weight:900 '>Make Payment</button></a>
                           </td>
                        </tr>
                        @endforeach
                       
                       
                      </tbody>
                    </table>					
                  </div>
                   
				  <br>
				  <div>
					<div>
						<div>
							<h6>Amount Payable</h6>
							 <h5>{{number_format($invoice->PayableAmount, 2, '.', '')}}</h5>
						</div>

						<div>
							<h6>Amount Paid</h6>
							 <h5>{{number_format($invoice->AmountPaid, 2, '.', '')}}</h5>
						</div>

						<div>
							<h6>Balance Due</h6>
							 <h5>{{number_format($invoice->AmountLeft, 2, '.', '')}}</h5>
						</div>

					</div>
					<button class="btn btn-sm btn-primary text-dark"><a href="/account/payment/type/oninvoice/{{$invoice->InvoiceID}}/{{$invoice->InvoiceNumber}}" style="color: white">Make Payment</a></button>
				</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         @include('../Includes/footer');
        <!-- partial -->
      </div>
      @endsection
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      
      