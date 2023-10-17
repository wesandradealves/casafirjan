CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration & usage
 * Maintainers


INTRODUCTION
------------

The Block content suggestions module provides support for custom templates for
custom block types created by Drupal administrators. This feature is disabled by
default by Drupal core.

However, under certain circumstances, this can be a good helper for adding more
flexibility to block types. It also enhances themers experience when working
with multiple view display modes for blocks.

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/block_content_suggestions

 * To submit bug reports and feature suggestions, or track changes:
   https://www.drupal.org/project/issues/block_content_suggestions


REQUIREMENTS
------------

This module requires the following module:

 * Block content - provided by Drupal core


INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module. Visit
   https://www.drupal.org/node/1897420 for further information.


CONFIGURATION & USAGE
-------------

This module does not require any configuration, the block content template
suggestions feature is provided out of the box.

Once the module is installed, the following suggestions are available, taking
the 1st one available from the list:
 * block-content--{id}--{view-mode}.html.twig
 * block-content--{id}.html.twig
 * block-content--{bundle}--{view-mode}.html.twig
 * block-content--{bundle}.html.twig
 * block-content--{view-mode}.html.twig
 * block-content.html.twig

The default block-content.html.twig template is already provided by the module.

These default suggestions can be extended via hook_theme_suggestions_alter() or
hook_theme_suggestions_block_content_alter_alter().


MAINTAINERS
-----------

Current maintainers:

 * Pablo López - https://www.drupal.org/u/plopesc
