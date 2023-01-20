# TYPO3 Extension `country_backport`

This extension is a backport of the country features from TYPO3 v12 to TYPO3 v11 + 10.
Read all about it at https://github.com/TYPO3/typo3/blob/main/typo3/sysext/core/Documentation/Changelog/12.2/Feature-99618-ListOfCountriesInTheWorldAndTheirLocalizedNames.rst

## Installation

Either use `composer req georgringer/country_backport` or download the extension from the TER

## Usage

Use this extension as in the core but with different namespaces:

```html
 <html
       xmlns:country="http://typo3.org/ns/GeorgRinger/CountryBackport/ViewHelpers">

    <country:form.countrySelect
        name="country"
        value="AT"
        sortByOptionLabel="true"
        prioritizedCountries="{0: 'DE', 1: 'AT', 2: 'CH'}"
    />
</html>
```

```php
$countryProvider = GeneralUtility::makeInstance(\GeorgRinger\CountryBackport\Country\CountryProvider);
$france = $countryProvider->getByIsoCode('FR');
// or
$france = $countryProvider->getByName('France');
// or
$france = $countryProvider->getByAlpha3IsoCode('FRA');
```

