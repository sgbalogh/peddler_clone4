
<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>
 
<!-- Exhibit title: -->
<h1><?php echo nl_getExhibitField('title'); ?></h1>
 
<!-- "View Fullscreen" link: -->
<?php echo nl_getExhibitLink(
  null, 'fullscreen', __('View Fullscreen'), array('class' => 'nl-fullscreen')
); ?>
 
<!-- Exhibit and description : -->
<?php echo nl_getExhibitMarkup(); ?>
<?php echo nl_getNarrativeMarkup(); ?>

<!-- <div id="faceting">
      <div class="AdditionalCareers">Additional Careers</div>
  	  <div class="AntiSemiticRhetoric">Anti-Semitic Rhetoric</div>
  	  <div class="Bartering">Bartering</div>
  	  <div class="BusinessPractices">Business Practices</div>
  	  <div class="ConflictViolenceCommunal">Conflict/Violence -- Communal</div>
  	  <div class="ConflictViolencePersonal">Conflict/Violence -- Personal</div>
  	  <div class="ContextualResource">Contextual Resource</div>
  	  <div class="CulturalExchange">Cultural Exchange</div>
  	  <div class="Family">Family</div>
  	  <div class="LiteraryArtisticDepiction">Literary or Artistic Depiction</div>
  	  <div class="NonPeddlingBackground">Non-Peddling Background</div>
  	  <div class="PeddlingBackground">Peddling Background</div>
  	  <div class="ReligiousPractices">Religious Practices</div>
  	  <div class="RestrictionsCommerce">Restrictions on Trade/Commerce</div>
  	  <div class="Routes">Routes</div>
  	  <div class="Sponsor">Sponsor</div>
  	  <div class="SubsequentCommercialCareers">Subsequent Commercial Careers</div>
  	  <div class="SubsequentNonCommercial">Subsequent Non-Commercial Careers</div>
  	  <div class="Transportation">Transportation</div>
  	  <div class="VictimsOfCrime">Victims Of Crime</div>
  	  <div class="Wares">Wares</div>
<br>
	<div class="reset">Reset All Facets</div>
<br>
<div class="Book">Book</div>
  	  <div class="JournalArticle">Journal Article</div>
</div>-->
<div id="multi">
<div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="AdditionalCareers"> Additional Careers
  </label>
  </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="AntiSemiticRhetoric"> Anti-Semitic Rhetoric
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="BusinessPractices"> Business Practices
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ConflictViolenceCommunal"> Conflict/Violence -- Communal
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ConflictViolencePersonal"> Conflict/Violence -- Personal
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ContextualResource"> Contextual Resource
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="CulturalExchange"> Cultural Exchange
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Family"> Family
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="LiteraryArtisticDepiction"> Literary or Artistic Depiction
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="NonPeddlingBackground"> Non-Peddling Background
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="PeddlingBackground"> Peddling Background
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
  <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="ReligiousPractices"> Religious Practices
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="RestrictionsCommerce"> Restrictions on Commerce/Trade
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Routes"> Routes
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Sponsor"> Sponsor
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="SubsequentCommercialCareers"> Subsequent Commercial Careers
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="SubsequentNonCommercial"> Subsequent Non-Commercial Careers
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Transportation"> Transportation
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
     <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="VictimsOfCrime"> Victims Of Crime
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
    <label class="btn btn-primary btn-xs">
    <input type="checkbox" name="tag" value="Wares"> Wares
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="Book"> Book
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="BookSection"> Book Section
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="JournalArticle"> Journal Article
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="Website"> Website
  </label>
  </div><div class="btn-group-justified" data-toggle="buttons">
     <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="Document"> Document
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="Thesis"> Thesis
  </label>
   </div><div class="btn-group-justified" data-toggle="buttons">
   <label class="btn btn-warning btn-xs">
    <input type="checkbox" name="tag" value="NewspaperArticle"> Newspaper Article
  </label>
</div>
</div>
<br>
<button type="submit" name="submit" class="btn btn-default">Apply Selected Facets</button>
<button type="submit" name="disabletimeline" id="disable" class="btn btn-default">Disable Timeline Faceting</button>
<br>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <span id="dropdown_title">Select</span>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" ID="divNewNotifications">
    <li><a href="#">Additional Careers</a></li>
    <li><a href="#">Anti-Semitic Rhetoric</a></li>
    <li><a href="#">Business Practices</a></li>
    <li><a href="#">Conflict/Violence -- Communal</a></li>
  </ul>
</div>

<!--<div name="disabletimeline" class="btn-group-justified" data-toggle="buttons">
<label class="btn btn-primary btn-xs">
    <input type="checkbox" name="disabletimeline" value="disabletimeline" id="disable">Disable Timeline
  </label>
  </div>-->

 
<?php echo foot(); ?>
