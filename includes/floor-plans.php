<?php 

	// Floor plan
  $field = get_field_object('floor_plan');
  $value = get_field('floor_plan');
  $label = $field['choices'][ $value ];

  // Floor plan images
  if($value == '1a') {
    $floorplan_img = 'images/floor-plans/floor-plan-1BA.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-1BA.jpg';
    $floorplan_doc = 'docs/floor-plan-1BA.pdf';
  }

  if($value == '1b') {
    $floorplan_img = 'images/floor-plans/floor-plan-1BB.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-1BB.jpg';
    $floorplan_doc = 'docs/floor-plan-1BB.pdf';
  }

  if($value == '1c') {
    $floorplan_img = 'images/floor-plans/floor-plan-1BC.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-1BC.jpg';
    $floorplan_doc = 'docs/floor-plan-1BC.pdf';
  }

  if($value == '1d') {
    $floorplan_img = 'images/floor-plans/floor-plan-1BD.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-1BD.jpg';
    $floorplan_doc = 'docs/floor-plan-1BD.pdf';
  }

  if($value == '1da') {
    $floorplan_img = 'images/floor-plans/floor-plan-1BDA.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-1BDA.jpg';
    $floorplan_doc = 'docs/floor-plan-1BDA.pdf';
  }

  if($value == '1e') {
    $floorplan_img = 'images/floor-plans/floor-plan-1BE.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-1BE.jpg';
    $floorplan_doc = 'docs/floor-plan-1BE.pdf';
  }

  if($value == '2a') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BA.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BA.jpg';
    $floorplan_doc = 'docs/floor-plan-2BA.pdf';
  }

  if($value == '2b') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BB.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BB.jpg';
    $floorplan_doc = 'docs/floor-plan-2BB.pdf';
  }

  if($value == '2c') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BC.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BC.jpg';
    $floorplan_doc = 'docs/floor-plan-2BC.pdf';
  }

  if($value == '2d') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BD.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BD.jpg';
    $floorplan_doc = 'docs/floor-plan-2BD.pdf';
  }

  if($value == '2da') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BDA.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BDA.jpg';
    $floorplan_doc = 'docs/floor-plan-2BDA.pdf';
  }

  if($value == '2e') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BE.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BE.jpg';
    $floorplan_doc = 'docs/floor-plan-2BE.pdf';
  }

  if($value == '2f') {
    $floorplan_img = 'images/floor-plans/floor-plan-2BF.png';
    $floorplan_loc = 'images/floor-plans/floor-plan-location-2BF.jpg';
    $floorplan_doc = 'docs/floor-plan-2BF.pdf';
  }

  ?>