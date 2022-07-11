<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageLength extends AbstractTagGroup
{

  protected string $id = 'Pentax:PreviewImageLength';

  protected string $name = 'PreviewImageLength';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Preview Image Length',
    'fr' => 'Longueur d\'image miniature',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Pentax::PXTH
       * line : 301859
       * type : int32u
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'Pentax::PXTH.Pentax:PreviewImageLength',
      'desc' => [
        'en' => 'Preview Image Length',
        'fr' => 'Longueur d\'image miniature',
      ],
    ],
  ];

}
