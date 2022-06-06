@if(count($errors) > 0 )
 @foreach($errors->all() as $error)
     
     <div class="alert bg-danger text-white">
         
        {{$error}}
     
     </div>

 @endforeach
 @endif



 @if(session('success'))

     
     <div class="alert bg-success text-white">
         
        {{session("success")}}
     
     </div>


 @endif


 @if(session('error'))

     
     <div class="alert bg-danger text-white">
         
        {{session("error")}}
     
     </div>


 @endif