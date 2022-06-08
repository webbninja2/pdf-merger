## PDFMerger for PHP (PHP 5 & 7 Compatible)

- [Docs](https://github.com/myokyawhtun/PDFMerger)

## Composer Compatible

```bash
composer install
```

## Example Usage
```php

require "vendor/autoload.php";

$pdf = new \Clegginabox\PDFMerger\PDFMerger;

$pdf->addPDF('samplepdfs/doc1.pdf');
$pdf->addPDF('samplepdfs/doc2.pdf');
$pdf->addPDF('samplepdfs/doc3.pdf');
$pdf->addPDF('samplepdfs/doc4.pdf');

$pdf->merge('file', 'mergerPDF/mergerTestFile.pdf', 'P');
```
