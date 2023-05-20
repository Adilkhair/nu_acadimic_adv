<?php
//StudentCont
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class StudentController extends Controller
{
    ////////////////////Creat student //////////////////////////////////////////
    public function create (Request $request) { 
         $this->validate($request, [
            'email' => 'required|unique:users|max:50',
            'password' => 'required',
            'name' => 'required|unique:users|max:30',
            'telephone' => 'required',
        ]);
        if($request->input('password') == $request->input('retype_password'))
        {
            $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
           'current_team_id' => $request->input('team_id'),
            ]);
           $student = Student::create( ['user_id' =>  $user->id   , 'university_no'=> $request->input('university_no') ,
           'dept'=>$request->input('dept'), 'level' => $request->input('level')
           , 'email' => $request->input('email')
           , 'telephone' => $request->input('telephone')]);
           $message="تم إضافة بيانات الطالب بنجاح";
           
           return redirect()->back()->with('msg',$message);
         
        }  else {  $message="كلمة المرور غير مطابقة";
         return redirect()->back()->with('err', 'message');}
    }
    //////////////////////////////////////////////////////////////////////////////////////
    public function create_user (Request $request) { 
        $this->validate($request, [
           'email' => 'required|unique:users|max:50',
           'password' => 'required',
           'name' => 'required|unique:users|max:30',
           
       ]);
       if($request->input('password') == $request->input('retype_password'))
       {
           $user = User::create([
           'name' => trim($request->input('name')),
           'email' => strtolower($request->input('email')),
           'password' => bcrypt($request->input('password')),
           'current_team_id' =>trim( $request->input('team_id')),

           ]);
           
          $message="تم إضافة بيانات المستخدم بنجاح";
          return redirect()->back()->with('msg',$message);
        
       }  else {  $message="كلمة المرور غير مطابقة";
        return redirect()->back()->with('err', 'message');}
         
   }
   ////////////////////////////////////////////////////////////////////
   public function delete_form (Request $request) { 
   DB::table('student_questionair')->where('id', $request->id)->delete();
    $message="تم حذف النموذج ";
  //  return redirect()->back()->with('msg',$message);
  return redirect()->route('showtForms')->with('msg',$message);
}
  ////////////////////////////////////////////////////////////////////
  public function delete_user (Request $request) { 
    echo  DB::table('users')->where('id', $request->id)->delete();
      $message="تم حذف المستخدم ";
      return redirect()->back()->with('msg',$message);
  }
    ///////////////////Get all setudents////////////////////////////////////////////////////
    public function students (Request $request) { 
        $students = Student::with(['user'])->orderBy('id','desc')->take(7)->get();
        //   echo $student;
     return view('students', compact(['students']));  
    }
    //////////////////////////////////////////////////////////////
     public function search_std(Request $request) { 
    $key= $request->search_key;
     
         $students = Student::with(['user'])/* ->where('level','l') */->whereHas('User', function($q) use ($key) {
          $q->where('name', 'Like','%'.$key.'%');
      })->get();
         return view('students', compact(['students']));  
  
    }
    ///////////////////////////////////////////////////////////////////////
    public function users (Request $request) { 
        $users = User/* ::where('current_team_id') */::get();
        //  echo $users;
    return view('users', compact(['users']));  
    }
    ///////////////////////////////////////////////////////////////////////////////////
     ////////////////////Get user filled forms/////////////////////////////////////////////
     public function user_forms (Request $request) { 
        $id= Auth::user()->id;//$request->id;
        $user = User::find( $id);//todo show forms acourding to user team id
        $forms = DB::table('student_questionair')->where('student_id', $request->id)->get();
        //     echo $forms;
        $student_questionair = DB::table('student_questionair')
        ->join('forms_template:', 'student_questionair.form_id', '=', 'forms_template:.id')
        ->where('student_questionair.student_id', '=', $id)
        ->where('student_questionair.form_id', '=',  $request->form_id)
        ->select(
            'student_questionair.*','forms_template:.form_name'
        )
        ->get();
        return view('user_forms', compact(['user','student_questionair']));  
    }
   /////////////////////////////////////////////////////////////////////////////////
   ////////////////////Get user filled forms/////////////////////////////////////////////
   public function other_forms (Request $request) { 
    $id= Auth::user()->id;//$request->id;
    $user = User::find( $id);//todo show forms acourding to user team id
    $forms = DB::table('student_questionair')->where('student_id', $request->id)->get();
    //     echo $forms;
    $student_questionair = DB::table('student_questionair')
    ->join('forms_template:', 'student_questionair.form_id', '=', 'forms_template:.id')
   // ->where('student_questionair.student_id', '=', $id)
    ->where('student_questionair.form_id', '=',  $request->form_id)
    ->select(
        'student_questionair.*','forms_template:.form_name'
    )
    ->get();
    return view('user_forms', compact(['user','student_questionair']));  
}
    ////////////////////Get student forms/////////////////////////////////////////////
    public function student (Request $request) { 
        $id= $request->id;
        $student = Student::find($request->id);//todo show forms acourding to user team id
        $forms = DB::table('student_questionair')->where('student_id', $request->id)->get();
        //     echo $forms;
        $student_questionair = DB::table('student_questionair')
        ->join('forms_template:', 'student_questionair.form_id', '=', 'forms_template:.id')
        ->where('student_questionair.student_id', '=', $id)
        ->select(
            'student_questionair.*','forms_template:.form_name'
        )
        ->get();
        return view('student_forms', compact(['student','student_questionair']));  
    }
   
    ///////////////////show forms template//////////////////////////////////////////////
    public function showtForms(Request $request){
      //  echo Auth::user()->name;
      if(Auth::user()->current_team_id == 5){//register
          //id=3 نموذج الحزف و الاضافة
          $forms_template = DB::table('forms_template:')
          ->whereIn('id', [-1])
             ->get();
             $other_forms = DB::table('forms_template:')
             ->whereIn('id', [3])
             ->get();
          return view('show_forms', compact(['forms_template','other_forms']));  
      } else  if(Auth::user()->current_team_id == 4){//student
        //نموذج الحزف والاضافة 3
          //id=3 نموذج الحزف و الاضافة
          $student = DB::table('students')
          ->where('user_id','=',Auth::user()->id)
             ->get();

          $forms_template = DB::table('forms_template:')
          ->whereIn('id', [3, 5, 8,10])
             ->get();

             $other_forms = DB::table('forms_template:')
             ->whereIn('id', [-1])
             ->get();
          return view('show_forms', compact(['forms_template','other_forms','student']));  
      } else if(Auth::user()->current_team_id == 3){//dean
        //id=3 نموذج الحزف و الاضافة
        $forms_template = DB::table('forms_template:')->where('id',16)->get();

          $other_forms = DB::table('forms_template:')
        ->whereIn('id', [11])
        ->get();

        return view('show_forms', compact(['forms_template','other_forms']));  
    } else if(Auth::user()->current_team_id == 2){//dept 
        //id=3 نموذج الحزف و الاضافة
        $forms_template = DB::table('forms_template:')//5,16
        ->whereIn('id', [5, 16])
        ->get();

        $other_forms = DB::table('forms_template:')
        ->whereIn('id', [11,3])
        ->get();

        return view('show_forms', compact(['forms_template','other_forms']));  
    } else if(Auth::user()->current_team_id == 1){//supper
         $forms_template = DB::table('forms_template:')
         ->whereIn('id', [2,3,6,9,10,8,11,12,13,14,15,16,17,18])
         ->get();
         
        $other_forms = DB::table('forms_template:')
        ->whereIn('id', [2,3,6,9,10,8,11,12,13,14,15,16,17,18])
        ->get();

        return view('show_forms', compact(['forms_template','other_forms']));  
       }
    }
     /////////////////////////////////////////////////////////////////
     public function showtForm(Request $request){
        $student_questionair = DB::table('student_questionair')
        ->join('students', 'student_questionair.student_id', '=', 'students.id')
        ->join('forms_template:', 'student_questionair.form_id', '=', 'forms_template:.id') 
        ->where('student_questionair.form_id', '=', $request->id)
          ->select(
          'students.dept as dept',   'students.email as email','students.id as std_id','forms_template:.form_name as form_name', 'student_questionair.id as std_ques_id'
        )  
        ->get();
       $students = Student::with(['user'])->get(); 
       $form_template = DB::table('forms_template:')->where('id', $request->id)->first(); 
       return view('show_form', compact(['student_questionair','students','form_template']));  
    }

     /////////////////////////////////////////////////////////////////
     public function getFormsTemplate (Request $request) { 
        $student_id = Auth::user()->id;
       if(Auth::user()->current_team_id == 5){//register
        //id=3 نموذج الحزف و الاضافة
        $forms_template = DB::table('forms_template:')
        ->whereIn('id', [-1])
           ->get();
    } else  if(Auth::user()->current_team_id == 4){//student
      //نموذج الحزف والاضافة 3
        //id=3 نموذج الحزف و الاضافة
        $student = DB::table('students')
        ->where('user_id','=',Auth::user()->id)
           ->get();

        $forms_template = DB::table('forms_template:')
        ->whereIn('id', [3, 5, 8,11])
           ->get();
    } else if(Auth::user()->current_team_id == 3){//dean
      //id=3 نموذج الحزف و الاضافة
      $forms_template = DB::table('forms_template:')->where('id',16)->get();
  } else if(Auth::user()->current_team_id == 2){//dept 5,16
      //id=3 نموذج الحزف و الاضافة
      $forms_template = DB::table('forms_template:')
      ->whereIn('id', [5, 16])
        ->get();
  } else if(Auth::user()->current_team_id == 1){//supper
    $forms_template = DB::table('forms_template:')
    ->whereIn('id', [2,3,6,9,10,8,11,12,13,14,15,16,17,18])
    ->get();
     
     }
       return view('forms_template', compact(['forms_template','student_id']));  
   }
    /////////////////////////////////////////////////////////////
    public function getFormTemplate (Request $request) { 
        $form_template = DB::table('forms_template:')->where('id', $request->id)->first();
        $student_id=$request->std_id;
      // echo $student_id;
    return view('form_template', compact(['form_template','student_id']));  
   }
//////////////////Save Form/////////////////////////////////////////////
public function save_std_quest(Request $request) { 
    $q_n = $request->q_no;
    $student_questionair_id = DB::table('student_questionair')->insertGetId([
        'form_id' => $request->form_id,
        'student_id' => $request->student_id
    ]);
   
echo $request->form_id;
   if($request->form_id  ==  3  ){//الحذف والاضافة
    $arr =  ($request->a)  ;
    $c= sizeof( $arr);
    
    for($i=0; $i<$c; $i++){
      $answers =   DB::table('answers')->insert([
         'user_id' => "1",
         'student_id' => $request->student_id,
          'student_questionairs_id' => $student_questionair_id,
           'question' => $request->q[$i],
            'answer' => $request->a[$i],
     ]);
 }
   //echo $c;
    
   } else{
    for($i=0; $i<$q_n; $i++){
   
      $answers =   DB::table('answers')->insert([
         'user_id' => "1",
         'student_id' => $request->student_id,
          'student_questionairs_id' => $student_questionair_id,
           'question' => $request->q[$i],
            'answer' => $request->a[$i],
     ]);
 }
   }
 
   Session::flash('message', 'تم إضافة النموذج بنجاح!');
    Session::flash('alert-class', 'alert-success');
    return redirect()->back();  
//return redirect()->route('student', ['id' => $request->student_id]);
}

///////////////////////show form ////////////////////////////////////////
public function answers(Request $request) { 
    $form_name=  $request->form_name;
    $user = User::find($request->std_id);
    $answers = DB::table('answers')->where('student_id', $request->std_id)
                                    ->where('student_questionairs_id', $request->quesr_id)->get();
    $quesr_id=$request->quesr_id;
    $student_questionair =DB::table('student_questionair')->where('id', $quesr_id)->get();
 // echo  $student_questionair; 
   
  return view('answers', compact(['answers','form_name','user','quesr_id','student_questionair']));  
   
}
///////////////////////اجراء المسجل ////////////////////////////////////////
public function reg_action(Request $request) { 
  //echo  $request->action;
  $arr=["لم يتم","تم"];
 
  $affected = DB::table('student_questionair')
              ->where('id', $request->id)
              ->update(['status' => $request->action, 'comment' => $request->comment] );
$message="تم اتحديث الاستبيان بنجاح";           
return redirect()->back()->with('msg',$message);
 }

/////////////////////////////////////////////////////////////////
 public function test(Request $request) { 
  
   $arr =  ($request->a)  ;
  $array =   json_encode($arr ) ;
   echo  ($array);
   echo sizeof( $arr);
 }

}
