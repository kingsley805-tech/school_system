@extends('layouts.admin')
@section('content')
        <!--exam result-->
        <div class="result  border border-gray-300 mt-8 space-y-5 m-auto shadow-md p-4">
            <div class="text-center font-sans">
                <button class="text-2xl font-bold text-center text-header hover:text-gray-600" id="printBut"style="color: rgb(237, 105, 57);">PRINT SUBJECT-WISE RESULT</button>
                <div id="report" class="mt-4 hidden md:block">
                  <div class="mt-4"style="margin-top: 1rem;">
                    <p class="text-base font-semibold" style="font-size: 1rem; font-weight: 600;">{{$data->School}}</p>
                    <p class="text-base font-semibold" style="font-size: 1rem; font-weight: 600;">Phone: <span class="font-normal" style="font-weight: normal;">{{$data->Telephone}}</span> | <a href="" class="text-blue-400" style="color: rgb(237, 105, 57);">Email: {{$data->Email}}</a></p>
                   
                  </div>
                
                  <h2 class="text-xl font-bold mt-6" style="font-size: 1.5rem; font-weight: bold;">Academic Report</h2>
                
                  <div class="" style="display:flex; margin:0 0 0 12rem;">
                    <div style="margin:0 8rem 0 -8rem;">
                      <p class="text-base font-semibold" style="font-size: 1rem; font-weight: 600;">Student Name: <span class="font-normal" style="font-weight: normal;">{{$Student->FirstName}} {{$Student->LastName}}</span></p>
                      <p class="text-base font-semibold" style="font-size: 1rem; font-weight: 600;">Student ID: <span class="font-normal" style="font-weight: normal;">{{$Student->IndexNumber}}</span></p>
                      <p class="text-base" style="font-size: 1rem;">Session:First Term 2023</p>
                    </div>
                
                    <div style="margin:0 0 0 12rem;">
                      <p class="text-base font-semibold" style="font-size: 1rem; font-weight: 600;">Class: <span class="font-normal" style="font-weight: normal;">{{$assessment->class}}</span></p>
                      <span class="font-semibold" style="font-weight: bold;">Section <span class="font-normal" style="font-weight: normal;">{{$assessment->class}}</span></span>
                      <p class="text-base" style="font-size: 1rem;">Roll Number: {{$Student->IdentityNumber}}</p>
                      <p class="text-base font-semibold" style="font-size: 1rem; font-weight: 600;">Phone: <span class="font-normal" style="font-weight: normal;">+{{$Student->StudentNumber}}</span></p>
                    </div>
                  </div>
                
                  <div class="grid grid-cols-2 gap-4 mt-4">
                  </div>
                
                  <div class="p-4 border border-gray-300 rounded-lg" style="padding: 1rem; border: 1px solid #e2e8f0; border-radius: 0.375rem;">
                    <div class="hidden md:block md:w-full max-w-screen-md mx-auto p-4">
                      <div>
                        <div class="font-semibold" >
                          <p>TERM: {{$assessment->term}}</p>
                          <p>YEAR: {{$assessment->year}}</p>
                          <p>NEXT TERM BEGINS: {{$assessment->nextTermBegins}}</p>
                          <p>POSITION: {{$assessment->position}}</p>
                        </div>
                      </div>
                      <table class="min-w-full" style="border-collapse: collapse; width: 100%;">
                        <thead  style="background-color:rgb(237, 105, 57);color:white">
                            <tr style="background: rgb(237, 105, 57);; color: #fff;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;">
                                <th style="padding: 16px; text-align: left;">Subject</th>
                                <th style="padding: 16px; text-align: left;">Class Score/30%</th>
                                <th style="padding: 16px; text-align: left;">Exams Exams/70% </th>
                                <th style="padding: 16px; text-align: left;">Total Score/100%</th>
                                <th style="padding: 16px; text-align: left;">Position</th>
                                <th style="padding: 16px; text-align: left;">Remarks</th>
                            </tr>
                        </thead>
                        <tbody style="background: #f3f4f6;">
                          @foreach($assessmentList as $value)
                            <tr style="border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;">
                                <td style="padding: 16px;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;font-weight: 700;">{{$value->subjectTitle}}</td>
                                <td style="padding: 16px;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;">{{$value->classScore}}</td>
                                <td style="padding: 16px;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;">{{$value->seventyPercent}}</td>
                                <td style="padding: 16px;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb  ;">{{$value->Total}}</td>
                                <td style="padding: 16px;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;">{{$value->position}}</td>
                                <td style="padding: 16px;border: 1px solid #e5e7eb; border-left:1px solid #e5e7eb ;">{{$value->remark}}</td>
                            </tr>
                           
                            @endforeach
                          
                        </tbody>
                    </table>
                    </div>
                    <div class="mt-4 hidden md:block space-y-3 md:flex flex-col md:flex-row space-x-20 items-center justify-center "style='display:flex;flex-direction:rows'>
                      <div class="font-semibold">
                        <p>Attendance: {{$assessment->attendance}}</p>
                        <p>Out of: ...........</p>
                        <p>Conduct/Character: {{$assessment->conduct}}</p>
                      </div>
                      <div class="font-semibold">
                        <p>Promoted To: {{$assessment->promotedTo}}</p>
                        <p>Attitude: {{$assessment->attitude}}</p>
                        <p>Interest: {{$assessment->interest}}</p>
                        <p>Class Teacher's Remarks: .............</p>
                        <p>Signature: ....................................</p>
                      </div>
                      <div class="font-semibold">
                        
                        <p>PRINTING COST: {{$assessment->printingCost}}</p>
                        <p>P.T.A. GH¢: {{$assessment->PTAFees}}</p>
                        <p>Sports and Games GH¢: {{$assessment->sportAndGameFees}}</p>
                        <p>Fees for next term: {{$assessment->nextTermFees}}</p>
                        <p>Head Teacher's Signature: </p>
                        <p class="mt-4">.......................................................... </p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="mt-8 flex items-center justify-center"><span class="font-bold text-gray-700  ">Click here to download the Academic Report</span>
                </div>
                <div class="flex items-center justify-center text-header"style="color: rgb(237, 105, 57);"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-6 6m0 0l-6-6m6 6V9a6 6 0 0112 0v3" />
                </svg>
                </div>
                <div class=" flex items-center justify-center font-semibold text-xl hover:text-gray-400 text-header"><button id='download'style="color: rgb(237, 105, 57);">Exam: End Of  Semester Examination Report..
                  </button></div>
             
              
            
          </div>
         </div>
            
        </div>
    </div>
  </div>
  
@endsection
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script>
    //print for exam result///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
  const printBut = document.getElementById('printBut');
  
  const download=document.getElementById('download');

  if (printBut) {
    printBut.addEventListener('click', function () {
      const reports = document.getElementById('report').outerHTML;

      // Create a Blob from the HTML content
      const blob = new Blob([reports], { type: 'text/html' });

      // Create a URL for the Blob
      const url = URL.createObjectURL(blob);

      // Create a new window for printing
      const printWindow = window.open('', '', 'width=800,height=600');

      // Write the HTML content to the new window
      printWindow.document.write(reports);

      // Print the content
      printWindow.print();

      // Clean up by revoking the URL object to release resources
      URL.revokeObjectURL(url);
    });
    //download for exams result//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  } if(download){
    download.addEventListener('click',function(){
      const rep=document.getElementById('report').outerHTML;
      const bllo=new Blob([rep],{type:'text/html'})
      const url=URL.createObjectURL(bllo);
      const a=document.createElement('a');
      a.href=url;
      a.download='report.html'
      a.click()
      URL.revokeObjectURL(url)
    })
  }
   
});
  </script>
</body>

</html>