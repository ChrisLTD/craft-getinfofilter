# GetInfo Filter

## Install

Place the `getinfofilter` folder in your `craft/plugins` folder and activate it.

## Usage

In entry content use the token `{getinfo:siteurl}` and then in your templates add the getInfo filter to turn that token into the site url:

```
{{ entry.body | getInfo | raw }}
```
