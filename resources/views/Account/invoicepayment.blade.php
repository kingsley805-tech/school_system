@include('../Includes/headerCss');

<body> 
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('../Includes/menuBar')
              <div class="row">
                <form class="form-sample" action="{{route('create-income')}}" method="POST">
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
                      <h4 class="card-title"><i style="font-size: 25px;" class='bx bxs-user-badge' ></i> <strong>Make Payment Page</strong>
                        <p style="position: absolute;right:31px">
                        <strong><i class='bx bxs-user-rectangle' ></i>
                          <a style="color:black;text-decoration:none;text-transform: capitalize;" href="{{url('/account/expense-list')}}">Income List</a></strong>
                      </p>
                      </h4>
    
                      <div class="row">
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Invoice Description</strong></label>
                          <input type="text" id="Description" name="Description" class="form-control" placeholder="Description" value="{{$Invoice->Description}}"
                          required>
                          <span style="color: red">@error('Description') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Invoice Amount</strong></label>
                          <input type="text" id="Amount" name="Amount"  class="form-control"  value="{{$Invoice->Amount}}"  required >
                          <span style="color: red">@error('Amount') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Amount Left:</strong></label>
                          <input type="text" id="AmountPayable" name="AmountPayable"  class="form-control" value="{{$Invoice->amountLeft}}" required >
                          <span style="color: red">@error('AmountPayable') {{$message}} @enderror</span>
                        </div>
                      
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Paying Amount:</strong></label>
                          <input type="text" id="payingAmount" name="payingAmount"  class="form-control" placeholder=""   required >
                          <span style="color: red">@error('payingAmount') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Payment Date:</strong></label>
                          <input type="date" id="PaymentDate" name="PaymentDate"  class="form-control" placeholder=""   required >
                          <span style="color: red">@error('PaymentDate') {{$message}} @enderror</span>
                        </div>
                      
                        <div class="mb-3 col-12 col-md-3">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Invoice Number:</strong></label>
                          <input type="text" id="InvoiceNumber" name="InvoiceNumber" class="form-control" placeholder="" value="{{$Invoice->InvoiceNumber}}"  required  >
                          <span style="color: red">@error('InvoiceNumber') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3 col-12 col-md-12">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>InvoiceID:</strong></label>
                          <input type="text" id="InvoiceID" name="InvoiceID" class="form-control" placeholder="InvoiceID" required value="{{$Invoice->InvoiceID}}" >
                      
                          <span style="color: red">@error('InvoiceID') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3 col-12 col-md-12">
                          <label class="form-label" for="address2"><span class="text-danger">*</span><strong>IndexNumber:</strong></label>
                          <input type="text" id="IndexNumber" name="IndexNumber" class="form-control" placeholder="IndexNumber" required value="{{$Invoice->IndexNumber}}" >
                      
                          <span style="color: red">@error('IndexNumber') {{$message}} @enderror</span>
                        </div>

                      </div>

                      <div class="mb-3 col-12 col-md-12">
                        <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Classroom id:</strong></label>
                        <input type="text" id="classroom_id" name="classroom_id" class="form-control" placeholder="IndexNumber" required value="{{$Invoice->classroom_id}}" >
                    
                        <span style="color: red">@error('classroom_id') {{$message}} @enderror</span>
                      </div>

                      <div class="mb-3 col-12 col-md-12">
                        <label class="form-label" for="address2"><span class="text-danger">*</span><strong>Student Name:</strong></label>
                        <input type="text" id="StudentName" name="StudentName" class="form-control" placeholder="IndexNumber" required value="{{$Invoice->StudentName}}" >
                    
                        <span style="color: red">@error('StudentName') {{$message}} @enderror</span>
                      </div>

                    </div>
                    
                      
                    <button type="submit" class="btn btn-sm btn-success"><strong>Make Payment</strong></button>
                        </div>
                    </div>
                    </div>
    
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <!-- End custom js for this page-->
</body>

</html>


