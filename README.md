# SilverWare LinkedIn Module

[![Latest Stable Version](https://poser.pugx.org/silverware/linkedin/v/stable)](https://packagist.org/packages/silverware/linkedin)
[![Latest Unstable Version](https://poser.pugx.org/silverware/linkedin/v/unstable)](https://packagist.org/packages/silverware/linkedin)
[![License](https://poser.pugx.org/silverware/linkedin/license)](https://packagist.org/packages/silverware/linkedin)

Provides a LinkedIn [sharing button][sharebutton] and sharing icon for use with [SilverWare][silverware].

## Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Issues](#issues)
- [Contribution](#contribution)
- [Maintainers](#maintainers)
- [License](#license)

## Requirements

- [SilverWare][silverware]
- [SilverWare Social Module][silverware-social]

## Installation

Installation is via [Composer][composer]:

```
$ composer require silverware/linkedin
```

## Configuration

As with all SilverStripe modules, configuration is via YAML.  Extensions are applied to `ContentController`
for LinkedIn integration.  An extension is also applied to site configuration which
adds a tab for LinkedIn settings to the SilverWare Services tab.

### LinkedIn Language

By default, the LinkedIn sharing button will use English. However, if you would like to force the button to use a
particular language, you can do so using site configuration. Go to Settings > SilverWare > Services > LinkedIn, and
select the desired language from the dropdown field.

## Usage

### LinkedIn Sharing Button

![LinkedIn Sharing Button](https://i.imgur.com/ZG74qmW.png)

Provided is a `LinkedInSharingButton` which is used with the `SharingComponent`
from the [SilverWare Social Module][silverware-social]. Simply add this button as a child of
`SharingComponent` using the site tree, and your pages will now
be able to be shared via LinkedIn.

For more information, see the [LinkedIn documentation][sharebutton].

## Issues

Please use the [GitHub issue tracker][issues] for bug reports and feature requests.

## Contribution

Your contributions are gladly welcomed to help make this project better.
Please see [contributing](CONTRIBUTING.md) for more information.

## Maintainers

[![Colin Tucker](https://avatars3.githubusercontent.com/u/1853705?s=144)](https://github.com/colintucker) | [![Praxis Interactive](https://avatars2.githubusercontent.com/u/1782612?s=144)](https://www.praxis.net.au)
---|---
[Colin Tucker](https://github.com/colintucker) | [Praxis Interactive](https://www.praxis.net.au)

## License

[BSD-3-Clause](LICENSE.md) &copy; Praxis Interactive

[composer]: https://getcomposer.org
[sharebutton]: https://developer.linkedin.com/plugins/share
[silverware]: https://github.com/praxisnetau/silverware
[silverware-social]: https://github.com/praxisnetau/silverware-social
[issues]: https://github.com/praxisnetau/silverware-linkedin/issues
