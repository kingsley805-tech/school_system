function print_today() {
    // ***********************************************
    // AUTHOR: WWW.CGISCRIPT.NET, LLC
    // URL: http://www.cgiscript.net
    // Use the script, just leave this message intact.
    // Download your FREE CGI/Perl Scripts today!
    // ( http://www.cgiscript.net/scripts.htm )
    // ***********************************************
    var now = new Date();
    var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
    var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
    function fourdigits(number) {
      return (number < 1000) ? number + 1900 : number;
    }
    var today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
    return today;
  }
  
  let SalesTable = document.getElementById('SalesTable');
  let MyfirstTableBody = document.getElementById('MyfirstTabledivFee');
  let MyfirstTabledivClass = document.getElementById('MyfirstTabledivClass');
  let MyfirstTabledivStudent = document.getElementById('MyfirstTabledivStudent');
  let myTablethree = document.getElementById('myTablethree')
  
  document.getElementById('addrow').addEventListener('click', function(e){
    let Xrows = SalesTable.rows.length
    let TRows = SalesTable.insertRow(Xrows)
    let Cell0 = TRows.insertCell(0)
    let Cell1 = TRows.insertCell(1)
    let Cell2 = TRows.insertCell(2)
    let Cell3 = TRows.insertCell(3)
    let Cell4 = TRows.insertCell(4)
  
  
    Cell0.innerHTML = Xrows+1
    Cell1.innerHTML = 'Description'
    Cell2.innerHTML = 0.00
    Cell3.innerHTML = 1
    Cell4.innerHTML = 0.00
  
    Cell1.setAttribute("contentEditable", "true")
    Cell2.setAttribute("contentEditable", "true")
    Cell3.setAttribute("contentEditable", "true")
  
    TRows.className = 'item-row'
    Cell2.addEventListener('input', function(e){
       e.preventDefault()
       MyInitialAdd()
    })
  
    Cell3.addEventListener('input', function(e){
      e.preventDefault()
      MyInitialAdd()
   })
  
  
  
    MyInitialAdd()
  })
  
  
  function MyInitialAdd(value) {
    const SalesArray = []
    const Array222 = []
    for (var i = 0; i < SalesTable.rows.length; i++) {
        let CurrentRow = SalesTable.rows[i]
        let UnitCost = Number(CurrentRow.cells[2].innerText)
        let Pieces = Number(CurrentRow.cells[3].innerText)
        let Amount = Number(UnitCost * Pieces)
        CurrentRow.cells[4].innerText =  Amount.toFixed(2)
        SalesArray.push(Amount)
        Array222.push(Pieces)
    }
  
      let TotalAmount = SalesArray.reduce((total, current) => total + current, 0);
      document.getElementById('subtotal').textContent = TotalAmount.toFixed(2)
      document.getElementById('Balance').textContent = TotalAmount.toFixed(2) 
  }
  

  
  
  document.getElementById('Discount').addEventListener('change', function(e){
    let Discount  = Number(e.target.value)
    let Balance = Number(document.getElementById('Balance').textContent)
    if(isNaN(Discount)){
      alert('Only numbers are accepted')
      document.getElementById('Discount').value = 0.00
    }else{
      let newBalance =  Balance - Discount
      document.getElementById('Balance').textContent = newBalance.toFixed(2)
    }
  })
  
 
  
  
  document.getElementById('Discount_Percent').addEventListener('change', function(e){
    let percent = Number(e.target.value)
    let Balance = Number(document.getElementById('Balance').textContent)
    let Tax = Balance*(percent/100)
    let newBalance = Balance - Tax
  
    if(isNaN(percent)){
       alert('only numbers are accepted')
       document.getElementById('Discount_Percent').value = 0
    }else{
      document.getElementById('Discount').value = Tax.toFixed(2)
      document.getElementById('Balance').textContent = newBalance.toFixed(2)
    }
  
    
    
  })
  



  document.getElementById('fee-select').addEventListener('change', function(e){
    MyfirstTableBody.innerHTML = ''
     e.preventDefault()
       $.ajax({
          type: 'POST',
          url: '/account/invoice/fee-type',
          ContentType: 'application/json',
          data: {Ben:'Ben'},

          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
          $('#exampleModalClass').modal('show')

          let payload = data
            
                  for(var x = 0; x < payload.length; x++){
                      let TRows = MyfirstTableBody.insertRow(x)
                      let Cell0 = TRows.insertCell(0)
                      let Cell1 = TRows.insertCell(1)
                      let Cell2 = TRows.insertCell(2)
                      let Cell3 = TRows.insertCell(3)
                      let Cell4 = TRows.insertCell(4)
 
                      Cell0.innerHTML = x+1 
                      Cell1.innerHTML = payload[x].feeType
                      Cell2.innerHTML = payload[x].classroom
                      Cell3.innerHTML = payload[x].amount.toFixed(2)
                    
                      let DelBtn = document.createElement("button")
                      DelBtn.innerHTML = "Add"
                      DelBtn.setAttribute('class','btn btn-sm btn-danger')
                       Cell4.append(DelBtn)

                       DelBtn.onclick = AddFeeStructureToInvoice

                  }
          
        },

        error: function(error){
           console.log(error)
        }


      });
  })


  document.getElementById('ClassSelectBtn').addEventListener('click', function(e){
      MyfirstTabledivClass.innerHTML = ''
       e.preventDefault()
       $.ajax({
          type: 'POST',
          url: '/account/invoice/fetch-classes',
          ContentType: 'application/json',
          data: {Ben:'Ben'},

          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
          $('#exampleModalThree').modal('show')
          let payload = data
               console.log(payload)
                  for(var x = 0; x < payload.length; x++){
                      let TRows = MyfirstTabledivClass.insertRow(x)
                      let Cell0 = TRows.insertCell(0)
                      let Cell1 = TRows.insertCell(1)
                      let Cell2 = TRows.insertCell(2)
                      let Cell3 = TRows.insertCell(3) 
                      let Cell4 = TRows.insertCell(4) 

                      Cell1.innerHTML = payload[x].name
                      Cell2.innerHTML = payload[x].section
                      Cell3.innerHTML = payload[x].id
                      Cell4.innerHTML = payload[x].id
                       const checkbox = document.createElement('input');
                       checkbox.type = 'checkbox';
                       checkbox.setAttribute('class', 'ClassCheckBox')
                       Cell0.append(checkbox) 

                  }
          
        },

        error: function(error){
           console.log(error)
        }


      });
  })
  


document.getElementById('Class-Select').addEventListener('input', function(e){
   e.preventDefault()
    let ClassroomID = (e.target.value).trim()

    $.ajax({
      type: 'POST',
      url: '/account/invoice/fetch-student',
      ContentType: 'application/json',
      data: {ClassroomID:ClassroomID},

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
      success: function(data) {
        let payload = data
      
           for(var x = 0; x < payload.length; x++){
               let TRows = MyfirstTabledivStudent.insertRow(x)
               let Cell0 = TRows.insertCell(0)
               let Cell1 = TRows.insertCell(1)
               let Cell2 = TRows.insertCell(2)
               let Cell3 = TRows.insertCell(3) 
               let Cell4 = TRows.insertCell(4) 

               Cell1.innerHTML = payload[x].FirstName+' '+payload[x].LastName
               Cell2.innerHTML = payload[x].classroom_id
               Cell3.innerHTML = payload[x].IndexNumber
               Cell4.innerHTML = payload[x].myparent_id
                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.setAttribute('class', 'StudentClassCheck')
                Cell0.append(checkbox) 

           }
      },

      error: function(error){
        console.log(error)
      }
    });

})
  function AddFeeStructureToInvoice(){
     let Title = $(this).closest('tr').find('td:eq(1)').text()
     let AmountOne = $(this).closest('tr').find('td:eq(3)').text()
     let Amount = Number(AmountOne)

    let Xrows = SalesTable.rows.length
    let TRows = SalesTable.insertRow(Xrows)
    let Cell0 = TRows.insertCell(0)
    let Cell1 = TRows.insertCell(1)
    let Cell2 = TRows.insertCell(2)
    let Cell3 = TRows.insertCell(3)
    let Cell4 = TRows.insertCell(4)
  
    Cell0.innerHTML = Xrows+1
    Cell1.innerHTML = Title
    Cell2.innerHTML = Amount.toFixed(2)
    Cell3.innerHTML = 1
    Cell4.innerHTML = Amount*1
  
    Cell1.setAttribute("contentEditable", "true")
    Cell2.setAttribute("contentEditable", "true")
    Cell3.setAttribute("contentEditable", "true")
  
    TRows.className = 'item-row'
    Cell2.addEventListener('input', function(e){
       e.preventDefault()
       MyInitialAdd()
    })
  
    Cell3.addEventListener('input', function(e){
      e.preventDefault()
      MyInitialAdd()
   })
  
  
  
    MyInitialAdd()
  }
  
document.getElementById('AddSelecteClass').addEventListener('click', function(){
  FetchAllCheckedBox()
})

document.getElementById('StudentCreateInvoice').addEventListener('click', function(){
  FetchSelectedStudents()
})

  function FetchAllCheckedBox(){
    let ItemsArray = []
    const table = document.getElementById('myTable');
    const checkboxes = document.getElementsByClassName('ClassCheckBox')

    let Receipt_Number = document.getElementById('Receipt_Number').value
    let DateIssued = document.getElementById('date-Ben').value
    let DateDue = document.getElementById('dateDue').value
    let Discount_Percent = document.getElementById('Discount_Percent').value
    let TotalAmount = document.getElementById('subtotal').textContent
    let Discount = document.getElementById('Discount').value
    let Balance = document.getElementById('Balance').textContent
    let Description = 'End of semester School Fees'
  
    for (let index = 0; index < SalesTable.rows.length; index++) {
      let CurrentRow = SalesTable.rows[index]
      let Description = (CurrentRow.cells[1].textContent)
      let UnitCost = (CurrentRow.cells[2].textContent)
      let Price = (CurrentRow.cells[3].textContent)
      let Total = (CurrentRow.cells[4].textContent)
      let Info = {Description, UnitCost, Price, Total, Receipt_Number}
      ItemsArray.push(Info)   
     }

    for(var i = 0; i < checkboxes.length; i++){
      if(checkboxes[i].checked){
        const row = table.rows[i + 1]; 
        const ClassroomID = (row.cells[4].innerText).trim(); 
      
        let Data = {Receipt_Number:Receipt_Number, DateIssued:DateIssued, DateDue:DateDue, Discount_Percent:Discount_Percent, TotalAmount:TotalAmount, Discount:Discount, Balance:Balance,PaymentStatus:'Pending', Description:Description,  ItemsArray:JSON.stringify(ItemsArray),ClassroomID:ClassroomID}
        
        $.ajax({
          type: 'POST',
          url: '/account/invoice/create-invoice-from-class',
          ContentType: 'application/json',
          data: Data,

          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
          alert('Invoice Created Successfully') 
          window.location.reload()
        },

        error: function(error){
          console.log(error)
        }
      });
       
        
      }
    }     
  }


  function FetchSelectedStudents(){
    let ItemsArray = []
    let StudentArray = []
    const table = document.getElementById('myTable');
    const StudentClassCheck = document.getElementsByClassName('StudentClassCheck')

    let Receipt_Number = document.getElementById('Receipt_Number').value
    let DateIssued = document.getElementById('date-Ben').value
    let DateDue = document.getElementById('dateDue').value
    let Discount_Percent = document.getElementById('Discount_Percent').value
    let TotalAmount = document.getElementById('subtotal').textContent
    let Discount = document.getElementById('Discount').value
    let Balance = document.getElementById('Balance').textContent
    let Description = 'End of semester School Fees'
  
  
    for (let index = 0; index < SalesTable.rows.length; index++) {
      let CurrentRow = SalesTable.rows[index]
      let Description = (CurrentRow.cells[1].textContent)
      let UnitCost = (CurrentRow.cells[2].textContent)
      let Price = (CurrentRow.cells[3].textContent)
      let Total = (CurrentRow.cells[4].textContent)
      let Info = {Description, UnitCost, Price, Total, Receipt_Number}
      ItemsArray.push(Info)   
     }

    for(var i = 0; i < StudentClassCheck.length; i++){
       if(StudentClassCheck[i].checked){
        const row = myTablethree.rows[i + 1]; 
        const IndexNumber = (row.cells[3].innerText).trim(); 
        const classroom_id = (row.cells[2].innerText).trim(); 
        const MyparentID = (row.cells[4].innerText).trim();  
        const StudentName = (row.cells[1].innerText).trim(); 
        const InvoiceID =    generateRandomString(8)
        const InvoiceNumber = GenerateIndex()
        let Student = {StudentName:StudentName, IndexNumber:IndexNumber, MyparentID:MyparentID, InvoiceNumber:InvoiceNumber, InvoiceID:InvoiceID, classroom_id:classroom_id}
        StudentArray.push(Student)
      }
    }    
    
        let Data = {Receipt_Number:Receipt_Number, DateIssued:DateIssued, DateDue:DateDue, Discount_Percent:Discount_Percent, TotalAmount:TotalAmount, Discount:Discount, Balance:Balance,PaymentStatus:'Pending', Description:Description,  ItemsArray:JSON.stringify(ItemsArray), StudentArray:JSON.stringify(StudentArray)}

        $.ajax({
          type: 'POST',
          url: '/account/invoice/create-invoice-student',
          ContentType: 'application/json',
          data: Data,

          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
          alert(data.message);
          window.location.reload()
        },

        error: function(error){
          console.log(error)
        }
      });
  }


  
let GenerateIndex = () =>{
  const min = 10000000;
  const max = 99999999;
 return Math.floor(Math.random() * (max - min + 1) + min);

}
  
function generateRandomString(length) {
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let result = '';
  
  for (let i = 0; i < length; i++) {
      const randomIndex = Math.floor(Math.random() * characters.length);
      result += characters.charAt(randomIndex);
  }
  
  return result;
}
  
  
  
  
  