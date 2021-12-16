<?php
/*
404 Template for Thrive Wellbeing Club
 */
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0;  user-scalable=0;">

<?php get_header(); ?>

&nbsp;

<div>
    <img class="errorimage" src="http://www.thrivewellbeing.club/wp-content/uploads/2021/12/My-Post-Copy-17-1.png"
    width="device-width" title="Thrive 404 Error" alt="Thrive 404 Error" />

    <style>
  
        .errorimage {
            display: block;
            margin-top: 1%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5%;
                     }
    </style>

    <style>
        .errortext {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            text-align:center;
                    }
    </style>

    <style>
        .errorsearch {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10%;
            width: 50%;
                    }     
                                                   }       
    </style>
	
    <div>
        <h3 class="errortext">The page you are looking for doesn't exist or has been moved.</h3>
        &nbsp;
    <div class="errorsearch" <?php get_search_form(); ?> </div>
            &nbsp;
    </div>
    

        <?php get_footer();?>

        