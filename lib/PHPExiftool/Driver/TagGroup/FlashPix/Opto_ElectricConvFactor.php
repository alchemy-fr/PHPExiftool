<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Opto_ElectricConvFactor extends AbstractTagGroup
{

  protected string $id = 'FlashPix:Opto-ElectricConvFactor';

  protected string $name = 'Opto-ElectricConvFactor';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Opto-Electric Conv Factor',
    'fr' => 'Facteur de conversion optoélectrique',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::ImageInfo
       * line : 126773
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::ImageInfo.FlashPix:Opto-ElectricConvFactor',
      'desc' => [
        'en' => 'Opto-Electric Conv Factor',
        'fr' => 'Facteur de conversion optoélectrique',
      ],
    ],
  ];

}
