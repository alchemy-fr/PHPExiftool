<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CurrentIPTCDigest extends AbstractTagGroup
{

  protected string $id = 'File:CurrentIPTCDigest';

  protected string $name = 'CurrentIPTCDigest';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Current IPTC Digest',
    'fr' => 'Sommaire courant IPTC',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Extra
       * line : 121346
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Extra.File:CurrentIPTCDigest',
      'desc' => [
        'en' => 'Current IPTC Digest',
        'fr' => 'Sommaire courant IPTC',
      ],
    ],
  ];

}
