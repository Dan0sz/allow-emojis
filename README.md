# Allow Emoji's in WordPress Posts

This plugin uses `wp_encode_emoji` to encode any emojis in the post content into a format that is safe for saving in the
database. It converts emojis to Unicode escape sequences (e.g., \u{1F600} for 😀) to ensure compatibility with databases
that might not fully support native emoji storage.

## Installation

There is no configuration. Just
install [the latest release](https://github.com/Dan0sz/allow-emojis/releases/latest/download/daan-allow-emojis.zip),
activate it and you're done!

## Shoutout

This plugin is a copy/paste (with added support for post titles and excerpts)
from [this StackOverflow response](https://stackoverflow.com/a/75888275/4949411).
