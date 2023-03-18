
### PHP GetFormattedNumber Function
PHP GetFormattedNumber Function (Türkçe açıklama aşağıda)
In this project, there is a PHP function named getFormattedNumber that converts numbers into various formats. This function formats numbers according to the specified locale, style, and other parameters.

### Features
- Locale-compatible number formatting: The function ensures that numbers are formatted correctly for different languages and regions.
- Decimal precision and grouping settings: The function allows you to adjust decimal precision and grouping settings such as thousand separators.
- Currency formatting: The function allows you to format numbers in a specific currency.
- Percentage and other special formats: The function allows you to format numbers using percentage and other special formats.

### Usage
- Clone or download the project.
- Copy the getFormattedNumber function to use it in your project and place it in an appropriate location in your project.
- Format numbers as desired using the getFormattedNumber function. Here are some examples:

### Example usage: 
echo getFormattedNumber(12345678.9); 

echo getFormattedNumber(12345678.9, 'en_EN'); 

echo getFormattedNumber(12345678.9, 'en_EN'); 

echo getFormattedNumber(12345678.90, 1); echo getFormattedNumber(12345678.90, false); 

 echo getFormattedNumber(12345678.90, 'en_EN', NumberFormatter::CURRENCY, 2, true, 'TRY'); 

echo getFormattedNumber(12345678, NumberFormatter::PADDING_POSITION, 3); 

echo getFormattedNumber(12345678, NumberFormatter::SPELLOUT);

echo getFormattedNumber(0.123, NumberFormatter::PERCENT, 1); 

echo getFormattedNumber(13.6456, 'en_EN', NumberFormatter::CURRENCY, 2, true, 'TRY');
