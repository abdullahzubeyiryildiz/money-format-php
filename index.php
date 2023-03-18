<?php

define('DEFAULT_LOCALE', 'en_US');
define('DEFAULT_CURRENCY', 'USD');

/**
 * Formats a number according to the specified parameters.
 *
 * @param float $value The number to be formatted.
 * @param string $locale The locale to use for formatting, e.g. 'en_US', 'fr_FR'.
 * @param int $style The formatting style to use (e.g. NumberFormatter::DECIMAL, NumberFormatter::CURRENCY).
 * @param int $precision The number of decimal places to use in the formatted number.
 * @param bool $groupingUsed Whether to use grouping separators, e.g. thousands separator.
 * @param string $currencyCode The currency code to use for currency formatting, e.g. 'USD', 'EUR'.
 * @return string The formatted number as a string.
 */
function getFormattedNumber($value, $locale = DEFAULT_LOCALE, $style = NumberFormatter::DECIMAL, $precision = 2, $groupingUsed = true, $currencyCode = DEFAULT_CURRENCY)
{
    $formatter = new NumberFormatter($locale, $style);
    $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
    $formatter->setAttribute(NumberFormatter::GROUPING_USED, $groupingUsed);
    if ($style == NumberFormatter::CURRENCY) {
        $formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $currencyCode);
    }

    return $formatter->format($value);
}

// Example usage:
echo getFormattedNumber(12345678.9);
echo '<br />';

// ... Other examples as before ...

?>
