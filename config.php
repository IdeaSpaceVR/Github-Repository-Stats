<?php

return [

  '#theme-name' => 'Github Repository Stats',
  '#theme-key' => 'github-repository-stats',
  '#theme-version' => '1.0',
  '#ideaspace-version' => '>=1.1.1',
  '#theme-description' => 'A theme for visualizing statistics for a public github repository.',
  '#theme-author-name' => 'IdeaSpaceVR',
  '#theme-author-email' => 'info@ideaspacevr.org',
  '#theme-homepage' => 'https://www.ideaspacevr.org/themes',
  '#theme-keywords' => 'git, github, statistics, data visualization',
  '#theme-view' => 'scene',

  '#content-types' => [

    'repository-info' => [
      '#label' => 'General Info',
      '#description' => 'Add some general info for this gallery.',
      '#max-values' => 1,
      '#fields' => [

				'repository-owner-name' => [
          '#label' => 'Github Repository Owner',
          '#description' => 'Enter owner name.',
          '#help' => 'Enter owner name.',
          '#type' => 'textfield',
          '#maxlength' => 100,
          '#contentformat' => 'text',
          '#required' => true,
        ],

				'repository-name' => [
          '#label' => 'Github Repository Name',
          '#description' => 'Enter repository name.',
          '#help' => 'Enter repository name.',
          '#type' => 'textfield',
          '#maxlength' => 100,
          '#contentformat' => 'text',
          '#required' => true,
        ],

      ],

    ],

  ], /* content types */

];


