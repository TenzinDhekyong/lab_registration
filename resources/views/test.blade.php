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
        var ch = document.getElementById("ch");

        for (i = 0; i <a; i++) 
        {
            var input = document.createElement("input");
            ch.appendChild(input);

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
    		background-color: #00ff55;
    	}
    	.wrap{
    		padding-top: 30px;
    		text-align: center;
    	}
    </style>
</head>
<body id="back">
	<h1 align="center">Project Details</h1><br>

	<div class ="container" id="bg-color">
		<form   action= " {{ url ('file')}} " enctype="multipart/form-data" method="post" id="Repeat" action="" style="padding-left: 20px;">
			
			{{ csrf_field() }}
				<div id="add_app">
					<div class="form-group">
						Name of the Project:
 							<input class="form-control" type="text" name="name" required="" />		
 					</div>
 					<div class="form-group">
    					No. of Participants:
        					<input  class="form-control" type="text" id="nochapter" required="" /><br>
        					<!--<input class="cleartext"type="text" id="nochapter" />-->
        					<input class= "goback" type="button" value="Enter" onclick="generate()" required="" />
        					<!--<button type="submit" class="btn btn-primary" onclick="generate()">Enter</button>-->
       						<div id="ch">
        	
        					</div>
        			</div>
    				<div class="form-group">
 						Category:
 							<select class ="form-control" id="course">
 								<option select="selected">Select a category </option>
  								<option value="BE">B.E</option>
    							<option value="Mini">Mini</option>
    							<option value="Course">Course</option>
    							<option value="Other">Other</option>
    						</select>
    				</div>
    				<div class="form-group"><br>
                    Project Photo:

                    <div class="input-group control-group increment" >
                        <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn"> 
                                <button class="btn btn-success" type="button">
                                    <i class="glyphicon glyphicon-plus"></i>Add
                                </button>
                            </div>
                    </div>
                    <div class="clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn"> 
                                    <button class="btn btn-danger" type="button">
                                        <i class="glyphicon glyphicon-remove"></i> Remove
                                    </button>
                                </div>
                        </div>
                    </div> 
                    <!--<div class="form-group"> 
                        <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image
                        </button>
                    </div>-->
                    </div>  
					<div class="form-group"><br>

						Description:
							<textarea class="form-control" name="comment" id="comments">
							</textarea>
					</div>

					</div>
					
		</form>	
	</div>
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
            
		<div class="wrap">
			<button type="submit" class="btn btn-dark" >Submit</button>
						<!--<input type="submit" value="Submit">-->
		</div>	
</body>
<html>


























































