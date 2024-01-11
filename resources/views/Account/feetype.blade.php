@extends('layouts.admin')
@section('content')

    <!-- partial:partials/_navbar.html -->
    
      <!-- partial -->
      <div class="main-panel"  style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Accounting - Fee Types</strong></li>
            
            
          </ol>
        </nav>
        <div class="content-wrapper">
         
      
          <div class="row" style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:#ea5f02">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Fee Types - Session: 2022-2023 <a data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute;right:20px;text-decoration:none;"><i style="font-size: 20px;" class='bx bxs-user-plus' ></i> Add New Fee Type</a></h4>
                  
                    <div class="table-responsive pt-6">
                      <table id="example" class="table table-sm table-striped table-bordered">
                        <thead style="background-color: rgb(36, 38, 37);color:white">
                          <tr>
                            
                            <th style="background-color:rgb(237, 105, 57);color:white">
                            Fee Type
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                            Class
                            </th>
                            <th style="background-color:rgb(237, 105, 57);color:white">
                             Amount
                            </th>

                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Period
                             </th>
                           
                            <th style="background-color:rgb(237, 105, 57);color:white">
                             View
                            </th>

                          

                            <th style="background-color:rgb(237, 105, 57);color:white">
                              Delete
                            </th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($fees as $fee)                      
                          <tr class="table-dange"style='background:'>
                            <td>
                              {{$fee->feeType}}
                            </td>
                            <td>
                              {{$fee->classroom}}
                            </td>
                            <td>
                              {{ number_format($fee->amount, 2, '.', '') }}
                            </td>
                          
                            <td>
                              {{$fee->period}}
                            </td>

                            <td class="bg-green-600"style="background: color: blue; font-size: 16px; background-color:green;" onmouseover="this.style.color='red'; this.style.backgroundColor='rgb(31, 169, 0)';" onmouseout="this.style.color='blue'; this.style.backgroundColor='rgb(31, 169, 59)';">
                              <button class="text-white font-bold"><i class='bx bx-edit'></i><a href="/account/payment/feetype/history/{{$fee->id}}" style="color: white"> View Payments</a></button>
                             </td>

                            <td style="background: color: blue; font-size: 16px; background-color:red;" onmouseover="this.style.color='red'; this.style.backgroundColor='pink';" onmouseout="this.style.color='blue'; this.style.backgroundColor='red';">
                              <button class="text-white font-bold"><i class='bx bx-trash' ></i> Delete</button>
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
        <!-- partial:partials/_footer.html -->
        @include('../Includes/footer');
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@endsection


