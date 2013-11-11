<?php
/*
Author: JCAH Volunteer
*/

// Document Categories for main navigation
function getAssignmentsCatObjList()
{
	// Setup Category Object
	$assignments = get_categories( array(
		'type' => 'document',
		'orderby' => 'slug',
		'order' => 'ASC',
		'hide_empty' => 1,
		'parent' => '0',
		'taxonomy' => 'category',
		'exclude' => '1'
		) 
	);

	return $assignments;
}

function createMainNavAssignmentList()
{
	$catBase = get_option( 'category_base' );	// Category base set by user	
	$assignments = getAssignmentsCatObjList();	// Get Assignments Category Object

	if(!empty($assignments)) {
		echo '<div class="nav-collapse">';
		echo '<ul id="menu-main-menu" class="nav">';
		echo '<li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">Assignments<b class="caret"></b></a>';
		echo '<ul class="dropdown-menu">';
		
		foreach($assignments as $assignment)
			echo '<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown "><a href="' . get_bloginfo(url) . '/' . $catBase . '/' . $assignment->slug . '">' . $assignment->name . '</a></li>';
		
		echo '</ul>';
		echo '</li>';
		echo '</ul>';							
		echo '</div>';
	}
}




