# Mzingi 2.0 #

When I initially built Mzingi, now a core system theme for [Habari](http://habariproject.org), the goal was to have a solid foundation of
best practices and clean markup to build more elaborate themes off of. At the time, grid design was popular, and the Blueprint framework was
already bundled with Habari. Times have changed, and HTML5, CSS3 and [responsive
design](http://www.alistapart.com/articles/responsive-web-design/) are real technologies that can be used. Considering that Habari has
always been about using leading edge technology and not being a slave to legacy code, it only makes sense that Mzingi follows.

The core goals of version 2 are:

* Switch from HTML4 to semantic HTML5 * Remove the fixed-width grid and make it responsive * Implement CSS3 techniques were appropriate *
Maintain minimal support for legacy browsers (I'm looking at you IE 8) * Better implementation and use of Habari's Areas and Blocks

A future goal may be to create filters and actions within common areas, ie article header/footer, so changes could be made in theme.php and
not have to completely duplicate the template to modify.

This project is first for my own benefit, as I want to redesign my other Habari sites with these goals in mind. I'm making the theme public
[@github](https://github.com/miklb/Mzingi_v2) for the benefit of the community. If the rest of the project team cares to update the core
version to this, then by all means it will be passed to the community. Otherwise, it will be a public repo that others can fork and use for
similar purposes as that of my own.

## License [Apache Software License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html) ##

## Misc ##

This theme currently works with the .9 stable release, backward compatiblity is not guaranteed. I will tag a .9 release once habari mater branch
is stable enough to start using in a production environment.

## Update ##

Also, experimenting with [Less CSS](http://lesscss.org/) as well as the [Semantic Grid](http://semantic.gs/). I develop on a Mac, therefore
I've been using [Less.app ](http://incident57.com/less/), and not including the less.js with the dev branch.

With the latest developments of how Habari will handle child themes and stylesheets loaded via theme.php, I am compartmentalizing the css.
Currently there is  *layout* for the grid, *typography* and *defaults* (normalize.css is for ).

Child themes can override any of these by using it's own, ie, `Stack::add('template_stylesheet', array(Site::get_url( 'theme', '/css/reset.css' )), 'reset');`

Likewise, you can simply remove a stylesheet in the child theme using `Stack::remove('template_stylesheet', 'typography');`

The names on these may change, but will never be overly styled, just some general styles that IMVHO cascade well enough into deeper styling.
