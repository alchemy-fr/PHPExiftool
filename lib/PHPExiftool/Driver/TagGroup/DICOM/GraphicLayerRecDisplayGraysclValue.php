<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GraphicLayerRecDisplayGraysclValue extends AbstractTagGroup
{

  protected string $id = 'DICOM:GraphicLayerRecDisplayGraysclValue';

  protected string $name = 'GraphicLayerRecDisplayGraysclValue';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Graphic Layer Rec Display Grayscl Value',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 101661
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:GraphicLayerRecDisplayGraysclValue',
      'desc' => [
        'en' => 'Graphic Layer Rec Display Grayscl Value',
      ],
    ],
  ];

}
