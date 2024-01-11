@extends('layouts.admin')
@section('content')
    
              <div class="row">
                <form class="form-sample" action="{{route('income/edit')}}" method="POST">
                  @csrf
                  @if (Session::has('success'))
                     <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}
                    </span>
                  @endif
        
                @if (Session::has('fail'))
                    <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                @endif

                <div class="col-12 grid-margin"  style="overflow: scroll">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"><i style="font-size: 25px;" class='bx bxs-user-badge' ></i> <strong>New Income Form</strong>
                        <p style="position: absolute;right:31px">
                        <strong><i class='bx bxs-user-rectangle' ></i>
                          <a style="color:black;text-decoration:none;text-transform: capitalize;" href="{{url('/account/expense-list')}}">Expenses List</a></strong>
                      </p>
                      </h4>
    
                      <div class="row">
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Title:</strong></label>
                          <input type="text" id="Title" name="Title" class="form-control" placeholder="" value="{{$income->Title}}"
                          required>
                          <span style="color: red">@error('Title') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Category:</strong></label>
                          <input type="text" id="Category" name="Category"  class="form-control"  value="{{$income->Category}}" required >
                          <span style="color: red">@error('Category') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Amount:</strong></label>
                          <input type="text" id="Amount" name="Amount"  class="form-control" value="{{$income->Amount}}" required >
                          <span style="color: red">@error('Amount') {{$message}} @enderror</span>
                        </div>
                      
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Invoice Number:</strong></label>
                          <input type="text" id="invoiceNumber" name="invoiceNumber"  class="form-control" placeholder="" value="{{$income->invoiceNumber}}"  required >
                          <span style="color: red">@error('invoiceNumber') {{$message}} @enderror</span>
                        </div>
                      

                        <div class="mb-3 col-12 col-md-3">
                            <label class="form-label" for="address2"><span class="text-danger">*</span><strong>id:</strong></label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="" value="{{$income->id}}"  required readonly >
                            <span style="color: red">@error('id') {{$message}} @enderror</span>
                          </div>

                        <div class="mb-3 col-12 col-md-12">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Note:</strong></label>
                          <input type="text" id="Note" name="Note" class="form-control" placeholder="Note" required value="{{$income->Note}}" >
                      
                          <span style="color: red">@error('Note') {{$message}} @enderror</span>
                        </div>

                      </div>
    
    
                    <button type="submit" class="btn btn-sm btn-success"><strong>Save student</strong></button>
                        </div>
                    </div>
                    </div>
    
                      </form>
                    </div>


                  </div>
                  @endsection


</html>


