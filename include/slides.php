<?php 
$count = 0;

//Note: Each index represent corresponding lesson
$a = [
  "0. Intro to JS Fiddle" => "https://docs.google.com/presentation/d/170XzoPLJkZcYjhpHoz5lFDymTsjKa9-rFK0CPi0-wmI",
  "1. Variables" => "https://docs.google.com/presentation/d/1yFbB36iDzILW6oibqwO8ZA44keUjIk40flAsR0c77P0",
  "2. Conditionals" => "https://docs.google.com/presentation/d/1DXWCMmM1LPjFbFcQ_yi55zyUUUjQnZiIF23oaSndnPQ",
  "3. While Loops" => "https://docs.google.com/presentation/d/1n-QKn0nCXn_O-yz7fe_0_Y9eda2XApKQpEs9Om3YKG4",
  "4. For Loops" => "https://docs.google.com/presentation/d/1Hzf15X79EoFceO-SbRwqaxMIiKh2-bi7UDy9oPAkMIs",
  "5. User Input" => "https://docs.google.com/presentation/d/1GvTyOO8beomJO9bhowRGt_j4mcS6ST5CJzTy0LJaoJk",
  "6. Arrays" => "https://docs.google.com/presentation/d/1aYTknabRZQ_zC7WrRZGBuEcyWZnwWVn3U-woGdk95gU",
  "7. Functions" => "https://docs.google.com/presentation/d/1g7PdCyNzY0JmKIfQVLkhFpQ1VGIVswwydAXNqtZumuk",
  "8. Switches" => "https://docs.google.com/presentation/d/1ayizAFAnyS0tBZi5JDBBrM9oJnl-gVvi5Qy2hpgZTEo",
  "9. 2D Arrays" => "https://docs.google.com/presentation/d/1ycNQRjruP4q6I0UV2i906asQcaVUpX6UYdqe8vNF2uc",
];
?>


<!--Create modal for each slide-->
<?php foreach($a as $key=>$value):?> 
<div class="modal fade" id="slide<?php echo $count; $count++;?>" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title"><a href="<?php echo $value;?>" target="_blank"><?php echo $key;?></a></h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      
      <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">  <!--Google Slides-->
            <iframe class="embed-responsive-item" src="<?php echo $value;?>/embed?start=false&loop=false&delayms=3000" allowfullscreen></iframe>
          </div>
          <div class="jsfiddle-iframe embed-responsive embed-responsive-16by9"> <!--JSFiddle-->
            <iframe class="embed-responsive-item" src="https://jsfiddle.net/" allowfullscreen></iframe>
          </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>