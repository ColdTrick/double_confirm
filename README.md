# Double Confirm

![Elgg 4.0](https://img.shields.io/badge/Elgg-4.0-green.svg)
![Lint Checks](https://github.com/ColdTrick/double_confirm/actions/workflows/lint.yml/badge.svg?event=push)
[![Latest Stable Version](https://poser.pugx.org/coldtrick/double_confirm/v/stable.svg)](https://packagist.org/packages/coldtrick/double_confirm)
[![License](https://poser.pugx.org/coldtrick/double_confirm/license.svg)](https://packagist.org/packages/coldtrick/double_confirm)

Adds an extra confirm dialog to supported delete actions.

Plugins that want to add an extra dialog to their delete actions can do so by setting the following data on their delete links.

```php
    'double_confirm' => true,
```
