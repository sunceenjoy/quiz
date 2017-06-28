<?php

/**

1. Explain	how	caching	works	in	Drupal 8

Drupal 8 has many different cache types: twig cache, Opcode Caching , max-age cache, content cache, memory cache.
	twig cache: translate twig template to real php  file, so it doesn't need to compile every time
	max-age cache: Once a page set the max-age, in a time range, the client doesn't need to request servers, just get from browse cache
	content cache: Create a static pages for contents. So we don't need to query from databases every time
	Opcode Caching: A PHP module caches php opcode, it reduce CPU usage from PHP.
	memory cache: we may use third parties cache servers(redis, memcache) to cache highly used data instead of querying from databases


2.Describe Drupal 8¡¯s database structure

Since on drupal's admin pages: it has node, block, menu, view, content, history, search, cache, logs, configuration functionalities, database structure are those tables related: node_,  comment_, custom_, users_, cache_. They all have foreign keys linking to some other tables.
*/