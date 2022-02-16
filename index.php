<?php 


if (!function_exists('getFormattedNumber')) {
    function getFormattedNumber($value,  $locale = 'en_US', $style = NumberFormatter::DECIMAL,  $precision = 2,   $groupingUsed = true, $currencyCode = 'USD')
    {
        $formatter = new NumberFormatter($locale, $style);
        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
        $formatter->setAttribute(NumberFormatter::GROUPING_USED, $groupingUsed);
        if ($style == NumberFormatter::CURRENCY) {
            $formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $currencyCode);
        }

        return $formatter->format($value); 
    }
}


        echo getFormattedNumber(12345678.9);
        echo '<br />';

        echo getFormattedNumber(12345678.9, 'pt_BR');
        echo '<br />';

        echo getFormattedNumber(12345678.9, 'fr_FR');
        echo '<br />';

        echo getFormattedNumber(12345678.90, 1);

        echo '<br />';
        echo getFormattedNumber(12345678.90,  false );

        echo '<br />';
        echo getFormattedNumber(12345678.90,  'fr_FR',  NumberFormatter::CURRENCY,  'EUR' );

        echo '<br />';
        echo getFormattedNumber(12345678, NumberFormatter::PADDING_POSITION, 3
        );
        echo '<br />';

        echo getFormattedNumber( 12345678,  NumberFormatter::SPELLOUT);
        echo '<br />';

        echo getFormattedNumber( 0.123,  NumberFormatter::PERCENT,  1 );

        echo '<br />';
        echo getFormattedNumber(13.6456,  'tr_TR',  NumberFormatter::CURRENCY, 2, true,  'TRY');


?>