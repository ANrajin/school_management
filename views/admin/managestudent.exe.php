




<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Student</button>

			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
					<div class="col-sm-12">
						<form action="search.html" class="">
							<div class="row">
								<div class="col-sm ">
									<div class="uk-margin my-1 my-sm-2">
								       <div class="uk-form-controls"  uk-form-custom="target: > * > span:first-child">
								           <select name="Seeking a" class="uk-select " id="form-horizontal-select">
								              	<option selected value="#">Class 6th</option>
			          							<option value="#">Class 7th</option>
			          							<option value="#">Class 8th</option>
			          							<option value="#">Class 9th</option>
			          							<option value="#">Class 6th</option>
								           </select>
								           <button class="uk-button uk-button-default px-0 mx-0 " type="button" tabindex="-1">
								               <span></span>
								               <span class="pl-3" uk-icon="icon: chevron-down"></span>
								           </button>
								       </div>
								  </div>
								</div>
								<div class="col-sm ">
									<div class="uk-margin my-1 my-sm-2">
            							<input class="uk-input" type="text" placeholder="father name">
								  	</div>
								</div>
								<div class="col-sm ">
									<div class="uk-margin my-1 my-sm-2">
								       <input class="uk-input" type="text" placeholder="Student Id">
								  </div>
								</div>
								
								
								<div class="col-sm px-1 pt-2">
								    <button type="submit" class="btn search-btn"><span class="uk-search-icon-flip" uk-search-icon></span></button>
								</div>
							</div>
						</form>
					</div>
		</div>
	</div>
</section>

<section>
	<div class="container py-5">
		<div class="row">
			<div class="col-sm-12">
				<table class="table  table-hover table-responsive-md">

				    <!--table head-->
				    <thead class=" text-center   bg-primary">
				    <tr class="table-active  text-light">
				        <th scope="col">SRL</th>
				        <th scope="col">Name</th>
				        <th scope="col">email</th>
				        <th scope="col">Password</th>
				        <th scope="col">Mobile</th>
				        <th scope="col">Class</th>
				        <th scope="col">Action</th>
				    </tr>
				    </thead>

				    <!--table body-->
				    <tbody class="text-center ">
				    
				    <tr class="table-primary">
				        <th scope="row">9</th>
				        <td>Hasan</td>
				        <td>Rahim</td>
				        <td>34343</td>
				        <td>6th</td>
				        <td>132423534</td>
				        <td>
				        	<a href="#">Edit</a>
				        	<span> | </span>
				        	<a href="#">Delete</a>
				        </td>
				    </tr>
				    <tr class="table-secondary">
				        <th scope="row">10</th>
				        <td>Hasan</td>
				        <td>Rahim</td>
				        <td>34343</td>
				         <td>6th</td>
				        <td>132423534</td>
				        <td>
				        	<a href="#">Edit</a>
				        	<span> | </span>
				        	<a href="#">Delete</a>
				        </td>
				    </tr><tr class="table-primary">
				        <th scope="row">10</th>
				        <td>Hasan</td>
				        <td>Rahim</td>
				        <td>34343</td>
				         <td>6th</td>
				        <td>132423534</td>
				        <td>
				        	<a href="#">Edit</a>
				        	<span> | </span>
				        	<a href="#">Delete</a>
				        </td>
				    </tr>
				    <tr class="table-primary">
				        <th scope="row">11</th>
				        <td>Hasan</td>
				        <td>Rahim</td>
				        <td>34343</td>
				         <td>6th</td>
				        <td>132423534</td>
				        <td>
				        	<a href="#">Edit</a>
				        	<span> | </span>
				        	<a href="#">Delete</a>
				        </td>
				    </tr>
				   
				    </tbody>
				</table>
				<!--table-->
			</div>
		</div>
	</div>
</section>





<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Mobile</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
          </div>
          <div class="form-group">
            
            <input type="submit" class="form-control btn-success btn-block" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>