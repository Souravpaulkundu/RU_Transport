 @extends('layouts.master')

 @section('title')
 Add New Account 
 @endsection

 @section('styles')

 <link rel="stylesheet" type="text/css" href="{{ URL::to('css/addaccount.css') }}">

 @endsection


 @section('content')
   <div id="page-wrapper">

            <div class="container-fluid">

                 <center class="headline">
                 	 <h2>
                 	 	ADD EMPLOYEE
                 	 </h2>
                 </center>

                
                
		                <form>
		                     
                                   <div class="row">
                  

                                    <div class="col col-md-6">

				                    <label for="name" >Name : </label>
				                	<input type="text" name="name" class="form form-control"><br>

				                	<label for="name">Id : </label>
				                	<input type="text" name="name" class="form form-control"><br>

				                	<label for="name">Designation : </label>
				                	<input type="text" name="name" class="form form-control"><br>

				                	<label for="name">Date : </label>
				                	<input type="date" name="name" class="form form-control"><br>

		                	 
                                 </div>

				               <div class="col-md-6">
				                    <label for="image">Image</label>
				               	    <input type="file" class="form form-control" name="image" onselect="showImage()">
				               	    <img class="imgpreview" src="" width="100%" height="100%">
				               </div>



                            </div>
                           
                            <div class="row">
                                <div class="col col-md-3"></div>

                                <div class="col col-md-6">
                            		<input type="submit" class="form form-control" name="addemployee" value="Submit">
                            	</div>
                            </div>

		              </form>

               


            </div>
             

    </div>
       
     
  @endsection

  @section('javascript')
     <script type="text/javascript">
     	function showImage(){
           

        }
     </script>

  @endsection

 