@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row" style="border-radius:10px; box-shadow: 5px 5px 5px #888888;">
      <div class="col-lg-12 stretch-card"style='background:rgb(255, 128, 0);border-radius:10px;'>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="background:rgb(9, 9, 9);color:white;padding:20px;border-radius:10px;width:22rem">Created invoices | Accounts </h4>
              <div style="position: relative;" class="mb-5">
                <a href="/account/create-invoice-form" style="position: absolute;right:20px;bottom:25px; text-decoration:none; background-color:rgb(245, 71, 8);color:white;padding:16px;border-radius:20px"><i class='bx bxs-user-plus' ></i>Add New Invoice</a>
              </div>
              {{-- <a href="admin/class/create-page" style="position: absolute;right:20px;"><i class='bx bxs-user-plus' ></i> Add New Subject</a> --}}
              @if (Session::has('success'))
              <span class="rounded-xl" style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
            @endif

            @if (Session::has('fail'))
                <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
            @endif
            
              <div class="table-responsive">
                <table id="example" class="table table-sm table-striped table-bordered">
                  <thead >
                    <tr>
                      <th  style="background-color:rgb(244, 69, 5);color:white" >
                        Student
                      </th>  
                      <th style="background-color:rgb(248, 70, 5);color:white" >
                        Description
                      </th>
                      <th style="background-color:rgb(245, 70, 6);color:white" >
                         Date Issued
                      </th>
                      <th style="background-color:rgb(241, 67, 4);color:white" >
                        Date Due
                      </th>

                      <th style="background-color:rgb(249, 74, 10);color:white" >
                         Invoice Amount
                      </th>

                      <th style="background-color:rgb(245, 71, 8);color:white" >
                        Amount Paid
                     </th>

                     <th style="background-color:rgb(248, 70, 5);color:white" >
                      Amount Left
                   </th>

                      <th style='background:rgb(12, 178, 109);color:white'>
                         View
                      </th>

                      <th style='background:rgb(211, 11, 44);color:white'>
                        Delete
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($invoices as $invoice)
                    <tr class="table-dange">
                       <td class=""style='background:aliceblue;'>
                        {{$invoice->StudentName}}
                       </td>

                        <td style='background:aliceblue;'>
                          {{$invoice->Description}}
                        </td>

                        <td style='background:aliceblue;'>
                          {{$invoice->DateIssued}}
                        </td>
                       
                        <td style='background:aliceblue;'>
                          {{$invoice->DateDue}}
                        </td>

                        <td style='background:aliceblue;'>
                          {{number_format($invoice->PayableAmount, 2, '.', '')}} 
                        </td>

                        <td style='background:aliceblue;'>
                          {{number_format($invoice->AmountPaid, 2, '.', '') }}
                        </td>

                        <td style='background:aliceblue;'>
                          {{number_format($invoice->AmountLeft, 2, '.', '')}}
                        </td>

                       
                        <td style='background:aliceblue;'>
                            <a style="font-size: 2.3vw;" href="/account/invoice/show/{{$invoice->InvoiceNumber}}/{{$invoice->InvoiceID}}"><i class="bx bxs-edit"style='color:rgb(12, 178, 109)'></i>
                            </a>

                        </td>

                        <td style='background:aliceblue;'>
                          <a style="font-size: 2.3vw;" href="/account/invoice/delete/{{$invoice->InvoiceNumber}}/{{$invoice->InvoiceID}}"><i class="bx bxs-edit"style='color:red'></i></a>

                      </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer" style="background-color:WHITE;">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block" style="font-family: 'Comfortaa', cursive;"><a style="color:black; font-family: 'Comfortaa', cursive;" target="_blank">Rapid School Management System</a>. All rights reserved.</span>
        <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-support' ></i> <b class="text-orange-600"style='color:orange'>Contact Support</b></span>
      </div>
    </footer>
    <!-- partial -->
  </div>

@endsection
