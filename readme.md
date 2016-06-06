# Flexbox Grid (WP Plugin)

Just a simple WordPress shortcode plugin which uses the styles of [flexboxgrid.com](http://flexboxgrid.com) ([Git Repo](https://github.com/kristoferjoseph/flexboxgrid)).

## How it works
All you need are at least the shortcodes `[flex_row]` and `[flex_col]`. If you don't use it without any class attribute, the width of the columns will be the same. The columns will fill the available space in the row.
```
[flex_row]
[flex_col]First column[/flex_col]
[flex_col]Second column[/flex_col]
[/flex_row]
```

More likely you want to control the column width on different screen sizes. For that purpose you have to add the class attribute into the `[flex_col]` shortcode. Here is an example:
```
[flex_row]
[flex_col class="col-xs-12 col-md-4"]First column[/flex_col]
[flex_col class="col-xs-12 col-md-8"]Second column[/flex_col]
[/flex_row]
```
The different screen sizes are controlled by this class names:
* `col-xs-??`
* `col-sm-??` (min-width: 48em)
* `col-md-??` (min-width: 62em)
* `col-lg-??` (min-width: 75em)

You need to exchange the question marks with a number from 1 to 12. The number stand for the amount of grid columns that are filled.

You might want to align the columns inside the row. All you need to do is add another class attribute to the `[flex_row]` shortcode. Here is an example:
```
[flex_row class="center-xs start-md"]
[flex_col class="col-xs-10 col-md-3"]First column[/flex_col]
[flex_col class="col-xs-10 col-md-7"]Second column[/flex_col]
[/flex_row]

Same here, you are able to control the alignment on each of the mentioned screen sizes (xs, sm, md and lg) differently.

The following alignment classes are possible:
* `start-??` horizontal
* `center-??` horizontal
* `end-??` horizontal
* `top-??` vertical
* `middle-??` vertical
* `bottom-??` vertical
```

Learn more about even more possible classes you can use with [flexboxgrid.com](http://flexboxgrid.com). Except the nested grids, all classes will work within the shortcodes.

## Support
Please use the support forum on [wordpress.org](https://wordpress.org/plugins/flexbox-grid).