<?php
/**
 * @file
 * Theme function overrides.
 */

/*******************************************************************************
 * Alter Functions
 ******************************************************************************/

function borg_forum_theme_form_comment_node_forum_topic_form_alter(&$form, $form_state) {
  // Hide the weird 'Your name' info.
  $form['author']['_author']['#access'] = FALSE;
}

/*******************************************************************************
 * Preprocess Functions
 ******************************************************************************/


/*******************************************************************************
 * Theme function Overrides
 ******************************************************************************/
