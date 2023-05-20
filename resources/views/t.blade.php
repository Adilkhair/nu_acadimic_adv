@extends('layouts.default')
@section('content') 
 
<body> 
<div class="container">
<form action="{{url('test')}}" method="post">
@csrf

<div class="render">
<input id="q_no" name="q_no" type="hidden" value="23"> 
 
<table   width="90%" style="border: 1px solid" > 
 
<tr style="background-color: yellow"> 
   <th colspan="3">اليوم <input type="text"   name="a[]" required /> <input type="hidden"   name="q[]" value="اليوم" /></th>
    <th colspan="5">التاريخ <input type="date"   name="a[]" required /> <input type="hidden"   name="q[]" value="التاريخ" />  </th> 
    <th colspan="6">القسم <input type="text"   name="a[]" required /><input type="hidden"   name="q[]" value="القسم" /> </th>
    
</tr>


 <tr>
     <td  rowspan="2"> </td>
    <td  rowspan="2"> حذف/إضافة </td>
    <th  rowspan="2">المستوي</th>
    <th  rowspan="2"  style="width:20%">إسم الطالب</th>
    <th  rowspan="2">الرقم الجامعي</th>
    <th  rowspan="2">التخصص</th>
    <th colspan="3">حذف</th>
    <th colspan="4"  rowspan="2" style="width:20%" >ملاحظات</th> 
    <th  rowspan="2">المرشدة الأكاديمية</th>
    
</tr> 
<tr>
      <th>إسم المقرر</th> 
      <th>عدد الساعات</th> 
      <th>رقم الشعبة</th>
</tr> 

    <tr>
    <td><a type="button" > </a></td>
    <td>  <input type="hidden"   name="q[]" value="حذف/إضافة" ><select style="width:80px !important" name="a[]">
    <option value="حذف"   >حذف</option>
    <option value="إضافة">إضافة</option>
    </select> </td>
    <td> <input type="hidden"   name="q[]" value="المستوي" > <textarea  name="a[]"> </textarea></td> 
    <td> <input type="hidden"   name="q[]" value="إسم الطالب" > <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="الرقم الجامعي" > <textarea  name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="التخصص" >  <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="إسم المقرر" >  <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="عدد الساعات" > <textarea style="width: 50px !important"   name="a[]">   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="رقم الشعبة" >  <textarea style="width: 50px !important" name="a[]">   </textarea></td> 
    <td colspan="4"> 
    <input type="hidden"   name="q[]" value="ملاحظات" /> <textarea  name="a[]">   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="المرشدة الأكاديمية" /> <textarea   name="a[]">   </textarea  ></td> 
    </tr> 

    <tr>
    <td><input type="button" value="حذف"></td></td>
    <td>  <input type="hidden"   name="q[]" value="حذف/إضافة" ><select style="width:80px !important" name="a[]">
    <option value="حذف"   >حذف</option>
    <option value="إضافة">إضافة</option>
    </select> </td>
    <td> <input type="hidden"   name="q[]" value="المستوي" > <textarea  name="a[]"> </textarea></td> 
    <td> <input type="hidden"   name="q[]" value="إسم الطالب" > <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="الرقم الجامعي" > <textarea  name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="التخصص" >  <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="إسم المقرر" >  <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="عدد الساعات" > <textarea style="width: 50px !important"   name="a[]">   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="رقم الشعبة" >  <textarea style="width: 50px !important" name="a[]">   </textarea></td> 
    <td colspan="4"> 
    <input type="hidden"   name="q[]" value="ملاحظات" /> <textarea  name="a[]">   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="المرشدة الأكاديمية" /> <textarea   name="a[]">   </textarea  ></td> 
    </tr> 

    <tr>
    <td><input type="button" value="حذف"></td>></td>
    <td>  <input type="hidden"   name="q[]" value="حذف/إضافة" ><select style="width:80px !important" name="a[]">
    <option value="حذف"   >حذف</option>
    <option value="إضافة">إضافة</option>
    </select> </td>
    <td> <input type="hidden"   name="q[]" value="المستوي" > <textarea  name="a[]"> </textarea></td> 
    <td> <input type="hidden"   name="q[]" value="إسم الطالب" > <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="الرقم الجامعي" > <textarea  name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="التخصص" >  <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="إسم المقرر" >  <textarea name="a[]">   </textarea></td> 
    <td><input type="hidden"   name="q[]" value="عدد الساعات" > <textarea style="width: 50px !important"   name="a[]">   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="رقم الشعبة" >  <textarea style="width: 50px !important" name="a[]">   </textarea></td> 
    <td colspan="4"> 
    <input type="hidden"   name="q[]" value="ملاحظات" /> <textarea  name="a[]">   </textarea></td>  
    <td><input type="hidden"   name="q[]" value="المرشدة الأكاديمية" /> <textarea   name="a[]">   </textarea  ></td> 
    </tr> 

</table>
 
<button name="submit" type="submit" class="btn btn-primary">إرسال الطلب</button>
</div>
 </form>
 </div>
 @stop
 