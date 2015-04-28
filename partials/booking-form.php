<div class="small-12 medium-7 large-7 columns">
	<div class="callout panel">
		          
		<form data-abide>

			<div class="row">					
				<div class="large-6 medium-6 columns">
					<label>Check in</label>
					<input type="text" required class="span2" value="" id="dpd1">
				</div>

				<div class="large-6 medium-6 columns">
					<label>Check out</label>
					<input type="text" required class="span2" value="" id="dpd2">
				</div>				  
			</div>
		
		  
			<div class="row">  				  
				<div class="large-6 medium-6 columns">
                    <label>Name</label>
                    <input type="text" required pattern="[a-zA-Z]+" placeholder="" />
                    <small class="error">Name is required and must be a string</small>
				</div>
				<div class="large-6 medium-6 columns">
                    <label>Surname</label>
                    <input type="text" required pattern="[a-zA-Z]+" placeholder="" />
                    <small class="error">Surname is required and must be a string</small>
				</div>					
			</div>
		
		
		 
			<div class="row">
				<div class="large-6 medium-6 columns">
                    <label>Phone number</label>
                    <input type="text" placeholder="" />
				</div>
				<div class="large-6 medium-6 columns">
					<label>Email</label>
					<input type="text" required pattern="email" placeholder="" />
					<small class="error">Valid email is required</small>
				</div>	
			</div>

		
			<div class="row">
				<div class="large-6 medium-6 columns">
                    <label>Type of room</label>
                    <select>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="twin">Twin</option>
                    </select>
				</div>
				<div class="large-6 medium-6 columns">					
					<label>Number of people</label>
					<input type="text" required pattern="number" placeholder="" />
					<small class="error">Number of guests is required and must be a number</small>
				</div>					
			</div>			  
						
			
			<div class="row">
				<div class="large-12 medium-12 columns">	
					<button class="small button" type="submit">Book</button>		
				</div>
			</div>					
		
		</form>
	  		  
	</div>  
  </div>