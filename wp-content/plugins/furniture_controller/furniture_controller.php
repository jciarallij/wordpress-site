<?php
/**
* Plugin Name: furniture controller
* Description: This is a custom controller for the furniture site. It includes Stripe intergration
* Version: 1.0
* Author: Joshua Ciaralli
*/

function add_tags_to_attachments(){
    register_taxonomy_for_object_type("post_tag", "attachment");
}
add_action("init", "add_tags_to_attachments");


function stripe_checkout(){

	require_once('config.php');
	$stripe_form = '<form action="/wp-content/plugins/furniture_controller/inc/charge.php" method="post">
			<label>Amount to pay</label>
			<input type="text" name="amount" placeholder="Amount to pay">
  			<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        	data-key="'.$stripe['publishable_key'].'"
          	data-description="Access for a year"
         	data-amount="amount"
         	data-locale="auto"></script>
			</form>';

			print $stripe_form;

}


function say_hello_world(){
	print "Hello World";
}