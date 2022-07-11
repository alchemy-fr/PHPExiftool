<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Preview;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageSize extends AbstractTagGroup
{

  protected string $id = 'MIE-Preview:PreviewImageSize';

  protected string $name = 'PreviewImageSize';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Preview Image Size',
    'fr' => 'Taille d\'image miniature',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : MIE::Preview
       * line : 164467
       * type : int16u
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'MIE::Preview.MIE-Preview:PreviewImageSize',
      'desc' => [
        'en' => 'Preview Image Size',
        'fr' => 'Taille d\'image miniature',
      ],
    ],
  ];

}
