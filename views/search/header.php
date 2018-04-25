<div class="header">
  <div class="container">
    <div class="row">

      <!-- Displaying search box -->
      <div class="col-12 search">
        <h1>Dine søge resultater</h1>
        <form method="post">
          <div class="row">

<!-- Driver -->
            <div class="col-12">
              <input type="text" class="driver" name="driver" placeholder="Søg på kørelærer" value="<?php echo getSearchResults("driver"); ?>">
            </div>
<!-- End driver -->

          </div>
          <div class="row">
            <div class="col-10">
              <div class="row">

<!-- Zip code -->
                <div class="col-3">
                  <input type="text" class="filter" placeholder="Postnummer" value="<?php echo getSearchResults("zip"); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
<!-- End Zip code -->

<!-- Radius -->
                <div class="col-3">
                  <input type="text" class="filter" placeholder="Radius" value="<?php echo getSearchResults("radius"); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
<!-- End radius -->

<!-- Min price -->
                <div class="col-3">
                  <input type="text" class="filter" placeholder="Min. pris" value="<?php echo getSearchResults("min"); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
<!-- End min price -->

<!-- Max price -->
                <div class="col-3">
                  <input type="text" class="filter" placeholder="Maks pris" value="<?php echo getSearchResults("max"); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
<!-- End max price -->

              </div>
            </div>
            <div class="col-2">
              <div class="row">

<!-- Submit button -->
                <div class="col-12">
                  <input type="submit" class="send" name="send" value="Søg" />
                </div>
<!-- End submit button -->

              </div>
            </div>
          </div>
        </form>
      </div>

    </div>

  </div>

</div>
