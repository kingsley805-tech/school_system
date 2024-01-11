@extends('layouts.admin')
@section('content')
      <!-- partial -->
      <div class="main-panel pb-96">        
        <div class="content-wrapper">
           <!-- Breadcrumb -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" style="background:rgb(237, 105, 57);padding:10px;border-radius:20px;color:white; ">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class='bx bx-book-bookmark' ></i> <strong>Send Emails Page</strong></li>
  </ol>
 </nav>
          <div class="row"style="border-radius: 10px; box-shadow: 5px 5px 5px #888888;background:rgb(248, 128, 7);height:76vh">
            <div class="col-12 grid-margin" >
              <div class="card">
                <div class="card-body">
                 

                  <div class="form-sample" action="{{route('/transport/addbus')}}" method="POST" enctype="multipart/form-data">
                    @if (Session::has('success'))
                    <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span>
                    @endif
              
                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif
              
                    @csrf
                    <!-- Card -->
 <div class="card mb-4">
  <!-- Card Header -->
  <div class="card-header" style="background-color:rgb(237, 105, 57);">
    <h5 class="mb-0" style="color: white;"><i style="font-size: 20px;" class='bx bx-book-bookmark' ></i> <strong>Send Emails To Parents</strong></h5>
  </div >
  <!-- Card Body -->
  <div class="card-body">
    <!-- Form -->
    <div class="" >
     

      <div class="row">
        <div class="mb-2 col-12 col-md-4">
            <label class="form-label" for="busNumber">
              <span class="text-danger">*</span> <strong>Select Class</strong>
            </label>
            <select id="class" name="class" class="form-select" style='border:1px solid  rgb(237, 105, 57);' required>
              <!-- Add your options here -->
              <option value="" selected disabled>Select Class</option>
              @foreach($classes as $value)
              <option value="{{$value->id}}"><strong>{{$value->name}}</strong></option>
             @endforeach
            </select>
          </div>
          
          <div class="mb-2 col-12 col-md-4">
            <label class="form-label" for="busNumber">
              <span class="text-danger">*</span> <strong>Select recipient</strong>
            </label>
            <select id="recipientTarget" name="recipientTarget" class="form-select" style='border:1px solid  rgb(237, 105, 57);' required>
              <!-- Add your options here -->
              <option value="" selected disabled>Select recipient</option>
              <option value="Class">Whole Class</option>
              <option value="Individuals">Selected Individuals</option>
            </select>
          </div>


          
          <div class="mb-2 col-12 col-md-4" style="display:none" id="StudentDiv">
            <label class="form-label" for="Students">
              <span class="text-danger">*</span> <strong>Select Student</strong>
            </label>
            <select id="student" name="student" class="form-select" style='border:1px solid  rgb(237, 105, 57);' multiple required>
              <!-- Add your options here -->
              <option value="" selected disabled>Select Student</option>

            </select>
          </div>

          <div class="mb-3 col-12 col-md-12">
            <label class="form-label" for="lname"><strong>Header Image</strong></label>
            <input type="text" id="headerImage" name="headerImage" class="form-control" value="https://www.shutterstock.com/image-illustration/3d-illustration-modern-school-300-260nw-1049762471.jpg"  style='border:1px solid  rgb(237, 105, 57);' readonly required>
          </div>


          <div class="mb-3 col-12 col-md-12">
            <label class="form-label" for="lname"><strong>Email Subjects</strong></label>
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Email Subjects" style='border:1px solid  rgb(237, 105, 57);' required>
          </div>

      

      
        


    <!------
      <div class="mb-3 col-12 col-md-12">
        <label class="form-label" for="lname"><strong>Attachement</strong></label>
        <input type="file" id="subject" name="subject" class="form-control" placeholder="Email Subjects" style='border:1px solid  rgb(237, 105, 57);' required>
      </div>
    --->
    </div>
    <body onload="enableEditMode()">
      <label class="form-label" for="phone"><strong><span class="text-danger">*</span>Message Body</strong></label>
      <div>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('bold')" title="bold"><i class="fa fa-bold"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('italic')" title="italic"><i class="fa fa-italic"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('underline')" title="underline"><i class="fa fa-underline"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('strikeThrough')" title="strikeThrough"><i class="fa fa-strikethrough"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('justifyLeft')" title="Align Left"><i class="fa fa-align-left"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('justifyCenter')" title="Align Center"><i class="fa fa-align-center"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('justifyFull')" title="justify"><i class="fa fa-align-justify"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('cut')" title="cut"><i class="fa fa-cut"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('copy')" title="Copy"><i class="fa fa-copy"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('indent')" title="text-indent"><i class="fa fa-indent"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('outdent')" title="text outdent"><i class="fa fa-outdent"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('subscript')" title="subscript"><i class="fa fa-subscript"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('superscript')" title="subscript"><i class="fa fa-superscript"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('undo')" title="undo"><i class="fa fa-undo"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('redo')" title="redo"><i class="fa fa-redo"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('insertUnorderedList')" title="unordered list"><i class="fa fa-list-ul"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('insertOrderedList')" title="ordered list"><i class="fa fa-list-ol"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('insertParagraph')"><i class="fa fa-paragraph"></i></button>
          <select  class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onchange="execVal('formatBlock',this.value)">
              <option value="H1">H1</option>
              <option value="H2">H2</option>
              <option value="H3">H3</option>
              <option value="H4">H4</option>
              <option value="H5">H5</option>
              <option value="H6">H6</option>
          </select>
          <br>
          <button style="color: rgb(238, 81, 13)" onclick="Edit('insertHorizontalRule')" title="insert Horizontal Rule">insert Horizontal Rule:</button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('createLink',prompt('Enter a URL,http://'))"><i class="fa fa-link"></i></button>
          <button class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onclick="Edit('unlink')"><i class="fa fa-unlink"></i></button>
          <select class="border-2 border-gray-700 mx-1 rounded-md w-44 h-7 bg-gray-50" onchange="execVal('fontName',this.value)">
            <option value="">Select</option>
            <option disabled style="font-weight: bold; background-color: #EEEEEE">Serif Fonts</option>
            <option value="Georgia,serif" style="font-family: Georgia,serif">Georgia</option>
            <option value="Palatino Linotype,Book Antiqua,Palatino,serif" style="font-family: Palatino Linotype,Book Antiqua,Palatino,serif">Palatino Linotype</option>
            <option value="Times New Roman,Times,serif" style="font-family: Times New Roman,Times,serif">Times New Roman</option>
            <option disabled style="font-weight: bold; background-color: #EEEEEE">Sans-Serif Fonts</option>
            <option value="Arial,Helvetica,sans-serif" style="font-family: Arial,Helvetica,sans-serif">Arial</option>
            <option value="Arial Black,Gadget,sans-serif" style="font-family: Arial Black,Gadget,sans-serif">Arial Black</option>
            <option value="Comic Sans MS,cursive,sans-serif" style="font-family: Comic Sans MS,cursive,sans-serif">Comic Sans MS</option>
            <option value="Impact,Charcoal,sans-serif" style="font-family: Impact,Charcoal,sans-serif">Impact</option>
            <option value="Lucida Sans Unicode,Lucida Grande,sans-serif" style="font-family: Lucida Sans Unicode,Lucida Grande,sans-serif">Lucida Sans Unicode</option>
            <option selected="selected" value="Tahoma,Geneva,sans-serif" style="font-family: Tahoma,Geneva,sans-serif">Tahoma</option>
            <option value="Trebuchet MS,Helvetica,sans-serif" style="font-family: Trebuchet MS,Helvetica,sans-serif">Trebuchet MS</option>
            <option value="Verdana,Geneva,sans-serif" style="font-family: Verdana,Geneva,sans-serif">Verdana</option>
            <option disabled style="font-weight: bold; background-color: #EEEEEE">Monospace Fonts</option>
            <option value="Courier New,Courier,monospace" style="font-family: Courier New,Courier,monospace">Courier New</option>
            <option value="Lucida Console,Monaco,monospace" style="font-family: Lucida Console,Monaco,monospace">Lucida Console</option>
          </select>
          <select class="border-2 border-gray-700 mx-1 rounded-full w-7 h-7 bg-gray-50" onchange="execVal('fontSize',this.value)" title="font size">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
          </select>
          <span style="color: rgb(238, 81, 13)">Font Color:</span><input  class="border-2 border-gray-700 mx-1 rounded-md mt-2 w-7 h-7 bg-gray-50" type="color" onchange="execVal('foreColor',this.value)" /> <span style="color: rgb(238, 81, 13)">Highlight:</span> <input class="border-2 border-gray-700 mx-1 rounded-md w-7 h-7 ml-2 bg-gray-50"
              type="color" onchange="execVal('hiliteColor',this.value)" />
          <button  onclick="Edit('selectAll')"><span style="color: rgb(238, 81, 13);margin:0 0 0 10px">Select All</span></button>
      </div>
      <iframe name="richTextField"id="messageBody"  class="form-control" placeholder="type your message here" spellcheck=true style="width:80%;height: 50%;background:rgba(226, 223, 223, 0.507);border-radius:10px;">
  
      </iframe>
      
      <script>
         function enableEditMode() {
    richTextField.document.designMode = "on";
}
function Edit(command) {
    richTextField.document.execCommand(command, false, null);
}
function execVal(command, value) {
    richTextField.document.execCommand(command, false, value);
}
      </script>
  </body>

<div class="row justify-content-between">

  <div class="col-auto">
    
    <button type="btn" class="btn btn-primary" style="background-color:rgb(237, 105, 57);color:white;border:rgb(237, 105, 57);margin:20px 0 0 0;" id="SendMessageBtn"><b><i class='bx bx-save' ></i>Send Email</b></button>
  </div>
</div>

</div>
  </div>
</div>

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
            <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-support' ></i> <b>Contact Support</b></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <script>
     const student = document.getElementById('student')
     
    document.getElementById('class').addEventListener('input', function(e){
      e.preventDefault()
      let classID = (e.target.value).trim()
      
     // student.innerHTML = ''
      $.ajax({
      type: 'POST',
      url: '/examinations/assessment/fetchStudentByClass',
      ContentType: 'application/json',
      data: {classID: classID},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
         //console.log(data)
         for (let i = 0; i < data.students.length; i++) {
            const LastName = data.students[i].LastName;
            const FirstName = data.students[i].FirstName;
            const name = `${FirstName} ${LastName}`
            const IndexNumber  = data.students[i].IndexNumber ;
            

            var option = document.createElement("option");
            option.text = name;
            option.value = IndexNumber ;
            student.appendChild(option);
         }
        
      },
      
       error: function(error){
        console.log(error)
       }
      });
    })


    document.getElementById('recipientTarget').addEventListener('input', function(e){
        const value = e.target.value
        if(value === 'Individuals'){
            document.getElementById('StudentDiv').style.display = ''
        }else{
            document.getElementById('StudentDiv').style.display = 'none'   
        }
    })


    document.getElementById('SendMessageBtn').addEventListener('click', function(e){
        e.preventDefault()
        
        const recipientTarget = document.getElementById('recipientTarget').value;
        const selectElement = document.getElementById('student')
        const studentlist = []
        const messageBody = document.getElementById('messageBody').value
        const className = document.getElementById('class').value
        const subject = document.getElementById('subject').value
        const headerImage = document.getElementById('headerImage').value

          for (let i = 0; i < selectElement.options.length; i++) {
            const option = selectElement.options[i];
            if (option.selected) {
              studentlist.push(option.value);
          }
        } 

        let Data 
        if(recipientTarget === 'Individuals'){
         
          Data = {studentlist:studentlist, messageBody:messageBody, subject:subject, headerImage:headerImage}
  
              $.ajax({
              type: 'POST',
              url: '/school/send-email-post',
              ContentType: 'application/json',
              data: Data,

              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
              success: function(data) {
                console.log(data)
                alert('Message is arranged to be sent..')
              },
              
              error: function(error){
                console.log(error)
              }
              });
        }else{
          Data = {className:className, messageBody:messageBody, subject:subject, headerImage:headerImage};
          console.log(Data)
          
              $.ajax({
              type: 'POST',
              url: '/school/send-email-by-class',
              ContentType: 'application/json',
              data: Data,

              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
              success: function(data) {
                console.log(data)
                alert('Message is arranged to be sent..')
              },
              
              error: function(error){
                console.log(error)
              }
              });
        }
    })


  
  </script>

  @endsection
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="script.js">
    function enableEditMode() {
    richTextField.document.designMode = "on";
}
function Edit(command) {
    richTextField.document.execCommand(command, false, null);
}
function execVal(command, value) {
    richTextField.document.execCommand(command, false, value);
}
  </script>
</html>
