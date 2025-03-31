<?php

namespace HungSonDo\QRCodeGenerator;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\Font\OpenSans;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class QRCodeGenerator
{
    public function generate(string $text): string
    {
        $builder = new Builder(
            writer: new PngWriter(),
            writerOptions: [],
            validateResult: false,
            data: $text,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size: 300,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            labelText: '',
            labelFont: new OpenSans(20),
            labelAlignment: LabelAlignment::Center,
            logoPath: '',
            logoResizeToWidth: 50,
            logoPunchoutBackground: true
        );

        $result = $builder->build();

        return $result->getDataUri();
    }
}