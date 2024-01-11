<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\BookModel;
use App\Models\Classroom;
use App\Models\IssueBookModel;
use App\Models\Student;

class LibraryController extends Controller
{
    public function libraryDashboard(){
        try {
          return view('Library.library')->with(['data' => Auth::user()]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }

      public function addBooks(){
        try {
          return view('Library.addbook')->with(['data' => Auth::user()]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }

      
      public function createAddBookPost(Request $request)
      {
          try {
              // Validation
              $validatedData = $request->validate([
                  'Title' => 'required',
                  'author' => 'required', // Validate as numeric
                  'subject' => 'required', // Validate as numeric
                  'price' => 'required|numeric',
                  'quantity' => 'required|numeric', // Validate as a date
                  'rackNumber' => 'required',
                  'isbnNumber' => 'required',
                  'description' => 'required',
                  
              ]);
              $randomString = bin2hex(random_bytes(6));
              $user = Auth::user();
              // Start a database transaction
              DB::beginTransaction();
      
              // Create a new payment record
              $book = new BookModel([
                  'title' => $validatedData['Title'],
                  'author' => $validatedData['author'],
                  'subject' => $validatedData['subject'],
                  'rackNumber' => $validatedData['rackNumber'],
                  'price' => $validatedData['price'],
                  'quantity' => $validatedData['quantity'],
                  'available' => $validatedData['quantity'],
                  'issued' => 0,
                  'isbnNumber' => $validatedData['isbnNumber'],
                  'description' => $validatedData['description'],
                  'bookID' => $randomString

              ]);
      
                $book->save();
  
              return back()->with('success', 'Book added successfully');
          } catch (\Exception $e) {
              // Roll back the database transaction in case of an error
              DB::rollback();
      
              return back()->with('fail', $e->getMessage());
          }
      }


      public function manageBooks(){
        try {
             $book = BookModel::get();
             $class = Classroom::get();
             return view('Library.book-list')->with(['data' => Auth::user(), 'books' => $book, 'class' => $class ]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
            
        }
    }


    public function editBooksPage(Request $request){
      try {
        $id = request()->route('id');
        $book = BookModel::where('id', '=', $id)->first();
        return view('Library.editbook')->with(['data' => Auth::user(), 'book' => $book]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }

  


    public function manageBooksIssue(){
      try {
           $book = BookModel::get();
           $class = Classroom::get();
           return view('Library.issuebookpage')->with(['data' => Auth::user(), 'books' => $book, 'class' => $class ]);
      } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
          
      }
  }


    public function issueBooksPage(){
      try {
          $id = request()->route('id');
          $book = BookModel::where('id', '=', $id)->first();
          $class = Classroom::get();
          return view('Library.issuebook')->with(['data' => Auth::user(), 'book' => $book, 'classes' => $class]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }



    public function issueBookPostForm(Request $request) {
      try {
          $validatedData = $request->validate([
              'classID' => 'required',
              'IndexNumber' => 'required', 
              'quantity' => 'required|numeric',
              'dateIssued' => 'required|date_format:Y-m-d',
              'returnDate' => 'required|date_format:Y-m-d',
              'id' => 'required',
              'bookID' => 'required'
          ]);
  
          $IndexNumber = $validatedData['IndexNumber'];
          $quantity = $validatedData['quantity'];
          $id = $validatedData['id'];
          $classID = $validatedData['classID'];
          $bookID = $validatedData['bookID'];
  
          $studentData = Student::where('IndexNumber', $IndexNumber)->first();
          $classData = Classroom::where('id', $classID)->first();
          $bookData = BookModel::where('id', $id)->first(); // Execute the query to get book data
  
          DB::beginTransaction();
          $IssueBook = new IssueBookModel([
              'title' => $bookData->title,
              'author' => $bookData->author,
              'student' => $studentData->FirstName . ' ' . $studentData->LastName,
              'IndexNumber' => $IndexNumber,
              'className' => $classData->name,
              'class' => $classData->name,
              'quantity' => $quantity,
              'returnDate' => $validatedData['returnDate'],
              'dateIssued' => $validatedData['dateIssued'],
              'status' => 'pending',
              'bookID' => $bookID
          ]);
  
          $saveResult = $IssueBook->save();
  
          BookModel::where('id', $id)->update([
              'available' => \DB::raw("available - $quantity"),
              'issued' => \DB::raw("issued + $quantity")
          ]);
  
          DB::commit();
          return response()->json([
              'success' => true,
              'message' => 'Book issued successfully.',
          ]);
      } catch (\Exception $e) {
         DB::rollback();
         return response()->json([
            'success' => false,
            'message' => 'An error occurred. Please try again later.',
            'details' => $e->getMessage()
        ]);


      }
  }
  

    

    public function editBookPost(Request $request)
    {
        try {
            // Validation
            $validatedData = $request->validate([
                'Title' => 'required',
                'author' => 'required', // Validate as numeric
                'subject' => 'required', // Validate as numeric
                'price' => 'required|numeric',
                'quantity' => 'required|numeric', // Validate as a date
                'rackNumber' => 'required',
                'isbnNumber' => 'required',
                'id' => 'required',
            ]);

            DB::beginTransaction();
             $id = $validatedData['id'];
             $title = $validatedData['Title'];
             $author = $validatedData['author'];
             $subject = $validatedData['subject'];
             $price = $validatedData['price'];
             $quantity = $validatedData['quantity'];
             $rackNumber = $validatedData['rackNumber'];
             $isbnNumber = $validatedData['isbnNumber'];
            
             BookModel::where('id', $id)->update(['title' => $title, 'author' => $author, 'subject' =>$subject, 'price' => $price, 'quantity' => $quantity, 'rackNumber' => $rackNumber, 'isbnNumber' =>$isbnNumber]);
            return back()->with('success', 'Book Edited Successfully');
        } catch (\Exception $e) {
            // Roll back the database transaction in case of an error
            DB::rollback();
    
            return back()->with('fail', $e->getMessage());
        }
    }


    
    public function deleteBook(Request $request){
      try {
        $id = request()->route('id');
        BookModel::where('id', $id)->delete();
        return back()->with('success', 'The book deleted successfully');
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }


    public function fetchIssuedBook(){
      try {
        $issuedBooks = IssueBookModel::where('status', '=', 'pending')->get();
        return view('Library.issue-book-list')->with(['data' => Auth::user(), 'books' => $issuedBooks]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }

    public function returnIssuedBook(){
      try {
        $id = request()->route('id');
        $bookID = request()->route('bookID');
        $quantity = 1 ;

        IssueBookModel::where('id', $id)->update(['status' => 'returned',]);
        
        BookModel::where('bookID', $bookID)->update([
          'available' => \DB::raw("available + $quantity"),
          'issued' => \DB::raw("issued - $quantity")
      ]);
        return back()->with('success', 'Book issued returned successfully');
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }

    public function fetchClassList(Request $request){
      try {
        $validatedData = $request->validate([
          'class' => 'required',
         
      ]);

      $class = $validatedData['class'];
      $Student = Student::where('classroom_id', $class)->get();
      return response()->json($Student);
      } catch (\Exception $e) {
        return response()->json($e->message());
      }
    }


    public function studentIssueBookPage(){
      try {
          $class = Classroom::get();
          return view('Library.student-issuedbook')->with(['data' => Auth::user(), 'classes' => $class]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }


    public function fetchStudentIssuedBook(Request $request){
      try {
        $IndexNumber = trim($request->IndexNumber);
        $issuedBooks = IssueBookModel::where('status', '=', 'pending')->where('IndexNumber', '=', $IndexNumber)->get();
        return response()->json([
          'success' => true,
          'issuedBooks'=>$issuedBooks
      ]);
      } catch (\Exception $e) {
        return response()->json([
          'error' => true,
          'message' => 'An error occurred. Please try again later.',
          'details' => $e->getMessage(),
      ]);
      }
    }

  
}
