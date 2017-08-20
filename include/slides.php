<?php 
$count = 0;
$a = [
  "0. Intro to JS Fiddle." => "https://docs.google.com/presentation/d/170XzoPLJkZcYjhpHoz5lFDymTsjKa9-rFK0CPi0-wmI/embed?start=false&loop=false&delayms=3000",
  "1. Variables" => "https://docs.google.com/presentation/d/1yFbB36iDzILW6oibqwO8ZA44keUjIk40flAsR0c77P0/embed?start=false&loop=false&delayms=3000",
  "2. Conditionals" => "https://docs.google.com/presentation/d/1DXWCMmM1LPjFbFcQ_yi55zyUUUjQnZiIF23oaSndnPQ/embed?start=false&loop=false&delayms=3000",
  "3. While Loops" => "https://docs.google.com/presentation/d/1n-QKn0nCXn_O-yz7fe_0_Y9eda2XApKQpEs9Om3YKG4/embed?start=false&loop=false&delayms=3000",
  "4. For Loops" => "https://docs.google.com/presentation/d/1Hzf15X79EoFceO-SbRwqaxMIiKh2-bi7UDy9oPAkMIs/embed?start=false&loop=false&delayms=3000",
  "5. User Input" => "https://docs.google.com/presentation/d/1GvTyOO8beomJO9bhowRGt_j4mcS6ST5CJzTy0LJaoJk/embed?start=false&loop=false&delayms=3000",
  "6. Arrays" => "https://docs.google.com/presentation/d/1aYTknabRZQ_zC7WrRZGBuEcyWZnwWVn3U-woGdk95gU/embed?start=false&loop=false&delayms=3000",
  "7. Functions" => "https://docs.google.com/presentation/d/1g7PdCyNzY0JmKIfQVLkhFpQ1VGIVswwydAXNqtZumuk/embed?start=false&loop=false&delayms=3000",
];
?>

<?php foreach($a as $key=>$value):?>
<div class="modal fade" id="slide<?php echo $count; $count++;?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $key;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $value;?>" allowfullscreen></iframe>
          </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>