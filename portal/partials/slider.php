<?php
    // $slide1 = [ 
    //             'src'=>'https://picsum.photos/id/237/200/70',
    //             'alt'=>'Slider 1 alter',  
    //             'title'=>'First slide label', 
    //             'caption'=>'Some representative placeholder content for the first slide.', 
    // ];

    // $slide2 = [ 
    //     'src'=>'https://picsum.photos/seed/picsum/200/70',
    //     'alt'=>'Slider 2 alter',  
    //     'title'=>'Second slide label', 
    //     'caption'=>'Some representative placeholder content for the second slide.', 
    // ];

    // $slide3 = [ 
    //     'src'=>'https://picsum.photos/200/70/?blur',
    //     'alt'=>'Slider 3 alter',  
    //     'title'=>'Third slide label', 
    //     'caption'=>'Some representative placeholder content for the third slide.', 
    // ];


    // $slide4 = [ 
    //     'src'=>'https://picsum.photos/200/70?grayscale',
    //     'alt'=>'Slider 4 alter',  
    //     'title'=>'Forth slide label', 
    //     'caption'=>'Some representative placeholder content for the fourth slide.', 
    // ];

    // $slide5 = [ 
    //     'src'=>'https://picsum.photos/200/70?grayscale',
    //     'alt'=>'Slider 5 alter',  
    //     'title'=>'FIfth slide label', 
    //     'caption'=>'Some representative placeholder content for the Fift slide.', 
    // ];

    // $slides = [$slide1, $slide2, $slide3, $slide4];
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
    $slides = json_decode($dataSlides);
    //dd($slides);

?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
   
   <?php
    $active = '';
    foreach($slides as $key=>$slide):
       if(0 == $key){
        $active = 'active';
       }else{
        $active = '';
       }
    ?> 
     <button type="button" 
              data-bs-target="#carouselExampleCaptions" 
              data-bs-slide-to="<?=$key?>" 
              class="<?=$active?>" 
              aria-current="true" 
              aria-label="Slide 1">
    </button>
    <?php
        endforeach
    ?>

  </div>
  <div class="carousel-inner">
   
   <?php

    foreach($slides as $key=>$slide):
        if(0 == $key){
            $active = 'active';
        }else{
            $active = '';
        }
   ?> 
    <div class="carousel-item <?=$active?>">
      <!-- <img src="<?php // $slide['src']?>" class="d-block w-100" alt="<?php //$slide['alt']?>">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php //$slide['title']?></h5>
        <p><?php //$slide['caption']?></p>
      </div> -->

    <img src="<?=$slide->src?>" class="d-block w-100" alt="<?=$slide->alt?>">
      <div class="carousel-caption d-none d-md-block">
        <h5><?=$slide->title?></h5>
        <p><?=$slide->caption?></p>
      </div>
    </div>
<?php
    endforeach
?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>