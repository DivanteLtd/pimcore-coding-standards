# Codding Standards for Pimcore 4 and Pimcore 5
[![Build Status](https://travis-ci.org/DivanteLtd/pimcore-coding-standards.svg?branch=master)](https://travis-ci.org/DivanteLtd/pimcore-coding-standards)
[![Latest Stable Version](https://poser.pugx.org/divante-ltd/pimcore-coding-standards/v/stable)](https://packagist.org/packages/divante-ltd/pimcore-coding-standards)
[![Total Downloads](https://poser.pugx.org/divante-ltd/pimcore-coding-standards/downloads)](https://packagist.org/packages/divante-ltd/pimcore-coding-standards)
[![License](https://poser.pugx.org/divante-ltd/pimcore-coding-standards/license)](https://github.com/DivanteLtd/pimcore-coding-standards/blob/master/LICENSE)

Coding standards rule sets for Pimcore 4 and Pimcore 5

**Table of Contents**
- [Codding Standards](#coding-standards)
	- [Installing/Getting started](#installinggetting-started)
	- [Usage](#usage)
	- [Testing](#testing)
	- [Contributing](#contributing)
	- [Licence](#licence)
	- [Standards & Code Quality](#standards--code-quality)
	- [About Authors](#about-authors)

## Installing/Getting started

```bash
composer require divante-ltd/pimcore-coding-standards
```

## Usage
```bash
vendor/bin/phpcs --extensions=php \
  --standard=vendor/divante-ltd/pimcore-coding-standards/Standards/Pimcore5/ruleset.xml \
  ./src  -s
```

## Testing
XML Lint:
```bash
vendor/bin/xmllint ./Standards/ 
```

## Contributing
If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## Licence 
CoreShop VsBridge source code is completely free and released under the 
[GNU General Public License v3.0](https://github.com/DivanteLtd/pimcore-coding-standards/blob/master/LICENSE).

## Standards & Code Quality
This module respects all Pimcore 5 code quality rules and our own PHPCS and PHPMD rulesets.

## About Authors
![Divante-logo](http://divante.co/logo-HG.png "Divante")

We are a Software House from Europe, existing from 2008 and employing about 150 people. Our core competencies are built 
around Magento, Pimcore and bespoke software projects (we love Symfony3, Node.js, Angular, React, Vue.js). 
We specialize in sophisticated integration projects trying to connect hardcore IT with good product design and UX.

We work for Clients like INTERSPORT, ING, Odlo, Onderdelenwinkel and CDP, the company that produced The Witcher game. 
We develop two projects: [Open Loyalty](http://www.openloyalty.io/ "Open Loyalty") - an open source loyalty program 
and [Vue.js Storefront](https://github.com/DivanteLtd/vue-storefront "Vue.js Storefront").

We are part of the OEX Group which is listed on the Warsaw Stock Exchange. Our annual revenue has been growing at a 
minimum of about 30% year on year.

Visit our website [Divante.co](https://divante.co/ "Divante.co") for more information.
