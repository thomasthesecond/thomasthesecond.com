/*
 *	-----------------------------------------------------------------------------
 *
 *	global.js / thomasthesecond.com
 *
 *	Created on 2012-07-29.
 *	Copyright 2012 Thomas Cunningham. All rights reserved.
 *
 *	-----------------------------------------------------------------------------
 */

/**
 * Variables Object
 */

var VARS = {

	projectObject: $('.project'),
	projectAnchorObject: $('.project a'),

	websiteProjectObject: $('.project.website'),
	websiteProjectAnchorObject: $('.project.website a'),
	websiteProjectOverlayText: 'Visit Site',
	
	screenshotProjectObject: $('.project.screenshot'),
	screenshotProjectAnchorObject: $('.project.screenshot a'),
	screenshotProjectOverlayText: 'View Screenshot',

	screenshotOverlayElement: '<div class="screenshot-overlay"><a href="#" class="close-screenshot ir">Close</a></div>'

};



/**
 * Global Initializer
 */

var objGlobals = {

	init: function() {

		objGlobals.init_project();

	},

	/**
	 * Project click / hover
	 */
	
	init_project: function() {

		VARS.projectAnchorObject.parent(VARS.projectObject).click(function(){
			window.location=$(this).find('a').attr('href');
			return false;
		}).css('cursor', 'pointer');

		// Websites
		objGlobals.init_project_overlay(VARS.websiteProjectObject, VARS.websiteProjectAnchorObject, VARS.websiteProjectOverlayText);

		// Screenshots
		objGlobals.init_project_overlay(VARS.screenshotProjectObject, VARS.screenshotProjectAnchorObject, VARS.screenshotProjectOverlayText);

		// objGlobals.init_screenshot_viewer(VARS.screenshotProjectAnchorObject, VARS.screenshotOverlayElement);

		VARS.screenshotProjectAnchorObject.click(function(){

			$('body').append(VARS.screenshotOverlayElement);
			$('screenshot-overlay').append('<img src="' + $(this).attr('href') + '" alt="">');
			return false;

		});

		$('.close-screenshot').click(function(){

			$('.screenshot-overlay').remove();
			return false;

		});

	},

	init_project_overlay: function(projectObject, projectAnchorObject, projectOverlayText) {

		projectAnchorObject.parent(projectObject).hover(
			function(){
				$('.project-overlay').hide();
				$(this).children('.project a').append('<div class="project-overlay">' + projectOverlayText + '</div>').fadeIn(500);
			},
			function(){
				$('.project-overlay').fadeOut(500, function(){ $(this).remove(); });
			}
		);

	},

	init_screenshot_viewer: function(anchorObject, overlayElement) {

		anchorObject.click(function(){

			$('body').append(overlayElement);
			return false;

		});

		$('.close-screenshot').click(function(){

			$('.screenshot-overlay').remove();
			return false;

		});

	}

};

/**
 * Ready
 */

$(document).ready(function(){ objGlobals.init(); });