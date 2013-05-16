<!--  Bootstrap horizontal form -->
<form class="form-horizontal" action="" method="GET">
    <input type="hidden" name="page" value="SearchResult">
    <div class="page-header"><h2>Find Recipes</h2></div>
    <div class="control-group">
	<label class="control-label" for="inputIngredients">Ingredients:</label>
	<div class="controls">
	    <input type="text" id="inputIngredients" name="ingredients" placeholder="chicken, rice, oatmeal">
	</div>
    </div>
  <div class="control-group">
    <label class="control-label" for="inputTime">Prep Time:</label>
    <div class="controls">
      <div class="input-append">
			  <input class="span2" id="inputTime" name="time" type="text" placeholder="30">
			  <span class="add-on">mins</span>
			</div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputCuisine">Cuisine Type:</label>
    <div class="controls">

      <select name="cuisine">

      			  <option value="">All</option>
			  <option value="american">American</option>
			  <option value="asian">Asian</option>
			  <option value="barbecue-bbq">Barbecue</option>
			  <option value="cajun">Cajun &amp; Creole</option>
			  <option value="chinese">Chinese</option>
			  <option value="cuban">Cuban</option>
			  <option value="english">English</option>
			  <option value="french">French</option>
			  <option value="german">German</option>
			  <option value="greek">Greek</option>
			  <option value="hawaiian">Hawaiian</option>
			  <option value="indian">Indian</option>
			  <option value="irish">Irish</option>
			  <option value="italian">Italian</option>
			  <option value="japanese">Japanese</option>
			  <option value="mediterranean">Mediterranean</option>
			  <option value="mexican">Mexican</option>
			  <option value="moroccan">Moroccan</option>
			  <option value="southern">Southern &amp; Soul Food</option>
			  <option value="southwestern">Southwestern</option>
			  <option value="spanish">Spanish</option>
			  <option value="thai">Thai</option>

			</select>
    </div>
  </div>
    <div class="control-group">
	<div class="controls">
	    <button type="submit" class="btn">Find Recipe</button>
	</div>
    </div>
</form>

