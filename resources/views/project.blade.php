<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<title>project details</title>
	

 	<script type="text/javascript">
        $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

 	function generate() 
    {

        var a = parseInt($("#nochapter").val());
        //var ch = document.getElementById("ch");
        $("#ch").append("Name of the participants:");

        for (i = 0; i <a; i++) 
        {
            var input = document.createElement("input");
             $("#ch").append("<br>");

            ch.appendChild(input);

        }
        var inpObj = document.getElementById("#nochapter");
    if (!inpObj.checkValidity()) 
    {
        document.getElementById("ch").innerHTML = inpObj.validationMessage;
    } else {
    document.getElementById("#nochapter").innerHTML = generate();

    } 
        

        
    }
    
   $(document).ready(function()
    {
    	
    });
    
    	
    function resetfunction()
    {

        document.forms["Repeat"].reset();
        document.forms["desc"].reset();
        document.forms["#goback"].reset();

    }

    function clone()
    {
        $('#add_app').clone().appendTo("#add_app").find(".cleartext").val(" ");
        $('#blah').reset();
        $('#goback').reset();


    }


    function readURL(input) 
    {
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();

                reader.onload = function (e) 
                {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50);
                }

                reader.readAsDataURL(input.files[0]);
            }
    }


    </script>
    <style>
    #back{
    	background-color: #00802b;
    }
    	#bg-color{
    		background-color: #98FB98;
    	}
    	.wrap{
    		padding-top: 30px;
    		text-align: center;
    	}
    </style>
</head>
<body id="back">
	<h1 align="center">Project Details</h1><br>

@if(count($errors))

            <div class="alert alert-danger">

                <strong>try again</strong> There were some problems with your input.

                <br/>

                <ul>

                    @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

@endif
@if(count($errors)>0)
        @foreach($errors->all() as $error)

            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
        @if(session('success'))
            <div class="alert alert-success">

                {{session('success')}}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">

                {{session('error')}}
            </div>
        @endif
	<div class ="container" id="bg-color">
		<form   action= "/storedata " enctype="multipart/form-data" method="post" id="Repeat" 
         style="padding-left: 20px;">
			
			{{ csrf_field() }}
        
				<div id="add_app">
					<div class="form-group" {{ $errors->has('details') ? 'has-error' : '' }}">>
						Name of the Project:
 							<input class="form-control" type="text" name="projectname" required="" />
                            <span class="text-danger">{{ $errors->first('Name of the Project') }}</span>		
 					</div>
 					<div class="form-group"{{ $errors->has('details') ? 'has-error' : '' }}">
    					No. of Participants:
        					
                            <input  class="form-control" type="number"  id="nochapter"  required="" name="participant"/><br>
                           
                            <input   class= "goback"  type="button" value="Enter" onclick="generate()" required="" />
                            <span class="text-danger">{{ $errors->first('No. of Participants ') }}</span>
                           
                            <div id="ch">
                               
                            </div>
        			</div>
    				<div class="form-group"{{ $errors->has('details') ? 'has-error' : '' }}">
 						Category:
 							<select class ="form-control" id="course" name="category" required="">
 								<option select="selected">Select a category </option>
  								<option value="BE">B.E</option>
    							<option value="Mini">Mini</option>
    							<option value="Course">Course</option>
    							<option value="Other">Other</option>
    						</select>
                            <span class="text-danger">{{ $errors->first('Category ') }}</span>
    				</div>
    	           <div class="form-group"{{ $errors->has('details') ? 'has-error' : '' }}"><br>

						Description:
							<textarea class="form-control" name="description" id="comments" required="">
							</textarea>
                            <span class="text-danger">{{ $errors->first('Description') }}</span>
					</div>

				</div>
                <div class="wrap">
                    <button type="submit" class="btn btn-dark" >Submit</button>
                        <!--<input type="submit" value="Submit">-->
                </div>	  
    </form>	
    <div id="clone" class="container">
                <div clas="form-row">
                    <div class="col-md-10">
                        <input type="button" value="ADD" onclick="clone()" />
                    </div>
                    <div class="col-md-2">
                        <input type="button" value="CLEAR" onclick="resetfunction()" /><br>
                    </div>
                    
                </div>  
    </div>  
</div>
</body>
<html>
